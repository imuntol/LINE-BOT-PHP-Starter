<?php
$access_token = 'G6y+FAPqq0TlIt2pzhGlo3pjFZ+zP9KwAdc6C+pMJaqwp+BWjMkYoB4gOLMU0T4SLyM8lzklMwPoAnwXzagZngocoZ+VPlvy3y1ARUJlEl3QbJQeEY8RhTpemRZDk+EZ27+53d7PmoFq9tQbZ0QRhQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;