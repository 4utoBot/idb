<?php
$OpenWeather = ['api_key' => 'd60abcca58a51d824e612e8aaaf5ea7f'];
$zip = "98109";
$base_url = "https://api.openweathermap.org/data/2.5";
$weather_url = "/weather?zip=" . $zip;
$api_key = "&appid={$OpenWeather['api_key']}";
$api_url = $base_url . $weather_url . $api_key;
$weather = json_decode(file_get_contents($api_url));

echo "<pre>";
print_r($weather);
?>