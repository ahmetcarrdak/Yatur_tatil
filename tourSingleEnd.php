<?php
require "inc/baglan.php";
$name = trim($_POST['firstname']);
$city = trim($_POST['city']);
$tel = trim($_POST['tel']);
$email = trim($_POST['email']);
$tip = trim($_POST['tip']);
$hangiTur = $_POST['hangiTur'];

if (!$name || !$city || !$tel || !$email) {
    echo "Boş Alan Bırakılamaz";
} else {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //echo "Devam";
        $sql = "INSERT INTO turKayitlar (tip , hangiTur, name, city, tel, mail) 
                        VALUES ('$tip' ,'$hangiTur' ,'$name', '$city', '$tel', '$email')";
        if ($sql) {
            echo "onay";
        } else {
            echo "Üzgünüm! Şuanda İşlem Yapılamıyor.";
        }
        /** @var TYPE_NAME $conn */
        $conn->exec($sql);
    } else {
        echo "Geçersiz E-Mail Adresi";
    }
}