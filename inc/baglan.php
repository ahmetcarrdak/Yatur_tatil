<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "alfatTurizm";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
} catch (PDOException $e) {
    //echo "Connection failed: " . $e->getMessage();
}

# The site settings are here

$veriIslem = "SELECT * FROM settings";
$veriIslem2 = $conn->prepare($veriIslem, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
$veriIslem2->execute();
$veriIslem3 = $veriIslem2->fetchall(PDO::FETCH_BOTH);
$say = $veriIslem2->rowCount();
if ($say > 0) {
    foreach ($veriIslem3 as $settings) {

    }
}
