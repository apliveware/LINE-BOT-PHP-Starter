<?php
$access_token = '7rq8QQgvlx0BK0/v4Ea4oWadcJe8rjsBSgf0O0n45rFSLCO0J1wZWPcHBfYnfzJhV0xbib9epuPjhiR4WFfmTP1uFxBvMR9G45WNURp6jzHda/RZ7sxUlqf+jrJqsmycyhPfdW410pAsxbF9ELUefgdB04t89/1O/w1cDnyilFU=
';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>
