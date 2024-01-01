<?php
require 'inc/baglan.php';
//header("location:index");

$url = $_POST["url"];

if ($url == "singIn") {

    $email = $_POST["email"];
    $pass = $_POST["password"];

    if ($email != "" || $pass != "") {

        $query = $conn->query("SELECT * FROM acentalar WHERE email='$email' && password='$pass'", PDO::FETCH_ASSOC);
        if ($say = $query->rowCount()) {
            if ($say > 0) {
                session_start();
                $_SESSION['12.23.132.4243.42acentagiris8.569.4739.85turizm6789.489.45.76'] = true;
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

} else if ($url == "singUp") {

    $name = $_POST["firstname"];
    $phone = $_POST["tel"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];

    if (!$name || !$phone || !$email || !$password || !$password2) {
        echo "Boş Alan Bırakılamaz";
    } else {
        if ($password != $password2) {
            echo "Şifreler Uyuşmuyor";
        } else {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                //echo "Devam";
                $sql = "INSERT INTO acentalar (firstname, phoneNo, email, password, onay) 
                        VALUES ('$name', '$phone', '$email', '$password', 0)";

                if ($sql) {
                    session_start();
                    $_SESSION['12.23.132.4243.42acentagiris8.569.4739.85turizm6789.489.45.76'] = true;
                    $_SESSION['name'] = $email;
                    $_SESSION['pass'] = $password;
                    echo "onay";
                } else {
                    echo "Üzgünüm Şuanda İşlem Yapılamıyor";
                }
                $conn->exec($sql);
            } else {
                echo "Geçersiz E-Mail Adresi";
            }
        }
    }

} else {
    header("location:contact");
    echo "Hatalı Deneme";
}