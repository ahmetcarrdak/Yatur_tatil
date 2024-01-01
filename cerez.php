<?php


session_start();
$_SESSION["alfatTruzimSession"] = true;
require 'inc/baglan.php';

$ip = $_SERVER["REMOTE_ADDR"];
$url = "http://ip-api.com/json/" . $ip;

function cvf_convert_object_to_array($data)
{
    if (is_object($data)) {
        $data = get_object_vars($data);
    }
    if (is_array($data)) {
        return array_map(__FUNCTION__, $data);
    } else {
        return $data;
    }
}

$stdclass = @json_decode(file_get_contents($url));
$array = cvf_convert_object_to_array($stdclass);
$city = $array["city"];
$country = $array["country"];
$locasyon = $country . "/" . $city;


$sql = "INSERT INTO cerez (ip, locasyon) VALUES ('$ip', '$locasyon')";
echo "onay";

$conn->exec($sql);