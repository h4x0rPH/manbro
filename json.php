<?php
header('Content-Type: application/json');
 $json = $_GET['json'];

$endpoint = $json;

  $curl = curl_init();

  $header[0] = "application/json, text/javascript";
  $header[0] .= "text/html;q=0.9,text/plain;q=0.8,image/png";
  $header[] = "Cache-Control: max-age=0";
  $header[] = "Connection: keep-alive";
  $header[] = "Keep-Alive: 300";
  $header[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
  $header[] = "Accept-Language: en-us,en;q=0.5";
  $header[] = "Pragma: ";

  curl_setopt($curl, CURLOPT_URL, $endpoint);
  curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:7.0.1) Gecko/20100101 Firefox/7.0.12011-10-16 20:23:00");
  curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
  curl_setopt($curl, CURLOPT_REFERER, "https://www.gmanetwork.com/news/eleksyon/2025/");
  curl_setopt($curl, CURLOPT_ENCODING, "gzip,deflate");
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_TIMEOUT, 30);
  curl_setopt($curl, CURLOPT_FOLLOWLOCATION,true);
  curl_setopt($curl , CURLOPT_COOKIEJAR, 'cookies.txt');
  curl_setopt($curl , CURLOPT_COOKIEFILE, 'cookies.txt');

  $json = curl_exec($curl);
  curl_close($curl);

  echo $json;
  
  
