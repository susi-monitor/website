<?php
error_reporting('E_NONE');
ini_set('display_errors', 0);

$ch = curl_init('https://api.github.com/repos/susi-monitor/susi-monitor/releases/latest');

curl_setopt($ch, CURLOPT_TIMEOUT, 50);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'SuSi Monitor Website');

$data = curl_exec($ch);
curl_close($ch);

$releaseData = json_decode($data, true);

foreach ($releaseData['assets'] as $ast) {
    if (stripos($ast['name'], 'bundle') !== false) {
        header('Location: '.$ast['browser_download_url']);
    }else{
        die('Error. No bundle found in last release.');
    }
}