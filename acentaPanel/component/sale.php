<?php
session_start();
if (isset($_SESSION['12.23.132.4243.42acentagiris8.569.4739.85turizm6789.489.45.76'])) {
    require "../../inc/baglan.php";

    $mail = $_POST['mail'];
    $turAdi = $_POST["turAdi"];
    $adi = $_POST["acentaAdi"];
    $turId = $_POST["turId"];

    $sql = "INSERT INTO basvuru (turId, acentaMail, acentaAdi, turAdi, onayDurum)
                VALUES ('$turId' ,'$mail', '$adi', '$turAdi', '0')";

    if ($sql) {
        echo "onay";
    } else {
        echo "Üzgünüm Şuanda Tur Kaydınızı Yapamıyorum";
    }

    $conn->exec($sql);
}
