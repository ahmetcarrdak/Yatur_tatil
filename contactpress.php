<?php

require "inc/baglan.php";

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$sub = trim($_POST['subject']);
$mes = trim($_POST['message']);


if (!$name || !$email || !$sub || !$mes) {
// Boş alanları Kontrol Eder
    echo "Boş";
} else {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $sql = "INSERT INTO contact (name ,mail, sub, message) 
                VALUES ('$name' ,'$email', '$sub', '$mes')";

        if ($sql) {
            echo "onay";
        } else {
            echo "Üzgünüm! Şuanda İşlem Yapılamıyor.";
        }

        $conn->exec($sql);
    } else {
        echo "Hatalı Mail";
        // Hatalı Mail;
    }
}