<?php

$basic_url = "https://graph.instagram.com/";
$query_url = "me/media?fields=id,username,timestamp,caption,media_url,media_type,permalink&access_token=";
$access_token = "IGQVJVQ0FDMmZAPbF9HYVNyOU01dDVJNGhIekZAXM0JlOTJfMVlLajdsbklHUmp2czJWdWh6VU44QzJ1ZADJjQjBjOS1LajJERm1LVHVpYlFXcnd1dGJrWXhiN0F3T3hMZAkE4ZAXNLbFZA6djRrQkN0aHBVSAZDZD";

$client = curl_init();
curl_setopt($client, CURLOPT_URL, $basic_url.$query_url.$access_token);
curl_setopt($client, CURLOPT_HEADER, 0);
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

$decode_content = json_decode(curl_exec($client));
$content = json_decode($decode_content);

curl_close($client);

echo "<pre>"; print_r($content); echo "</pre>";

?>