<?php

session_start();
if (isset($_SESSION['12.23.132.4243.42acentagiris8.569.4739.85turizm6789.489.45.76'])) {
    require "../../inc/baglan.php";

    $name = $_POST['firstname'];
    $mail = $_POST['email'];
    $tel = $_POST['tel'];
    $pass = $_POST['password'];
    $passport = $_POST["passport"];
    $id = $_POST["id"];


    if (!$name || !$mail || !$tel || !$pass || !$passport) {

        echo "Boş Alan Tespit Edildi, Değişiklikler Kaydedilemedi";

    } else {
        $sql = "UPDATE acentalar SET firstname='$name', phoneNo='$tel', email='$mail', password='$pass', pasaportNo='$passport' WHERE id=$id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        if ($sql) {
            echo "onay";
        } else {
            echo "Şu anda güncelleme yapılamıyor, daha sonra tekrar deneyiniz";
        }
    }
}
