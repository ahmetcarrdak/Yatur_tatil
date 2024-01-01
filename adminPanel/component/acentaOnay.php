<?php
session_start();
if (isset($_SESSION['12.23.132.4243.42admingiris8.569.4739.85turizm6789.489.45.76'])) {
    /** @var TYPE_NAME $conn */
    require "../../inc/baglan.php";

    $id = $_POST['id'];

    if (!$id) {
        echo "İD Yok ";
    } else {
        echo $id;
        $sql = "UPDATE acentalar SET onay='1' WHERE id=$id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        if ($sql) {
            echo "Veriler Güncellendi";
        } else {
            echo "Şu anda güncelleme yapılamıyor, daha sonra tekrar deneyiniz";
        }
        header("location:../approval");

    }
}