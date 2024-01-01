<?php

require "../../inc/baglan.php";

$email = $_POST["email"];
$pass = $_POST["password"];

if ($email != "" || $pass != "") {

    $query = $conn->query("SELECT * FROM admins WHERE mail='$email' && sifre='$pass'", PDO::FETCH_ASSOC);
    if ($say = $query->rowCount()) {
        if ($say > 0) {
            session_start();
            $_SESSION['12.23.132.4243.42admingiris8.569.4739.85turizm6789.489.45.76'] = true;
            $_SESSION['name'] = $email;
            $_SESSION['pass'] = $pass;
            echo "onay";
            $sonuc = "onay";
        } else {
            echo "Üzgünüm Şuan İşlem Yapılamamaktadır";
        }
    } else {
        echo "Böyle Bir Kayıt Bulunmamaktadır";
    }
} else {
    echo "Boş Alan Bırakılamaz";
}