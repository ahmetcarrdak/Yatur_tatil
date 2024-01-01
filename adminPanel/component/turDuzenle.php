<?php
session_start();
if (isset($_SESSION['12.23.132.4243.42admingiris8.569.4739.85turizm6789.489.45.76'])) {

    require "../../inc/baglan.php";

    $id = $_POST['id'];
    $adi = $_POST['adi'];
    $turFiyati = $_POST['fiyat'];
    $keywords = $_POST['keyword'];
    $person = $_POST['kisi'];
    $turDay = $_POST['gun'];
    $turCity = $_POST['sehir'];
    $turDetaylari = $_POST['detay'];


    if (!$adi || !$turFiyati || !$keywords || !$person || !$turDay || !$turCity || !$turDetaylari) {
        echo "Boş Alan Bırakılamaz";

    } else {

        $sql = "UPDATE turlar SET TurAdi='$adi', turFiyati='$turFiyati', keywords='$keywords', person='$person', turDay= '$turDay', turCity='$turCity', turDetaylari='$turDetaylari' WHERE id=$id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        if ($sql) {
            echo "Veriler Güncellendi";
        } else {
            echo "Şu anda güncelleme yapılamıyor, daha sonra tekrar deneyiniz";
        }

    }
}

