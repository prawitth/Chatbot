<?php
$access_token = 'AVfhYVHdIsNnjJJYcAwtwowcjjDZ6dZBYTlhuaqz8K+oBFKYQAbZChUjyi3mQitLF8k9ASoFn6baNpS9qRjK+F3jHZXWK+puyvXKVzUNv/8hR2sP2Go3N70j66TwlqwCYppViLrwh/pfY+mKLROGaQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';
$proxy = 'velodrome.usefixie.com:80';
$proxyauth = 'fixie:51vK0qDLySGq4sU';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
 # http://username:password@proxyurl:port
