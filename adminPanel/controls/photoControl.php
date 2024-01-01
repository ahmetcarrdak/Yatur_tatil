<?php
session_start();
if (isset($_SESSION['12.23.132.4243.42admingiris8.569.4739.85turizm6789.489.45.76'])) {
    header('Content-Type: text/html; charset=utf-8');

    extract($_POST);

    function seo($s)
    {
        $tr = array('ş', 'Ş', 'ı', 'I', 'İ', 'ğ', 'Ğ', 'ü', 'Ü', 'ö', 'Ö', 'Ç', 'ç', '(', ')', '/', ' ', ',', '?');
        $eng = array('s', 's', 'i', 'i', 'i', 'g', 'g', 'u', 'u', 'o', 'o', 'c', 'c', '', '', '-', '-', '', '');
        $s = str_replace($tr, $eng, $s);
        $s = strtolower($s);
        $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
        $s = preg_replace('/\s+/', '-', $s);
        $s = preg_replace('|-+|', '-', $s);
        $s = preg_replace('/#/', '', $s);
        $s = str_replace('.', '', $s);
        $s = trim($s, '-');
        return $s;
    }

    $whitelist = array('jpg', 'jpeg', 'png', 'gif');
    $resimyol = '../../img/';

    if (isset($_FILES['resim'])) {
        $tmp_name = $_FILES['resim']['tmp_name'];
        $name = basename($_FILES['resim']['name']);
        $error = $_FILES['resim']['error'];
        if ($error === UPLOAD_ERR_OK) {
            $extension = pathinfo($name, PATHINFO_EXTENSION);
            if (!in_array($extension, $whitelist)) {
                echo 'Format Desteklenmiyor. Lütfen jpg, jpeg, png, gif Formatlarını Kullanın';
            } else {
                $name1 = explode('.', $_FILES['resim']['name'], 2);
                $name2 = seo($name1[0]);
                $name3 = $name1[1];
                $name4 = $name2 . '.' . $name3;
                $date = date("Ymd_hms");
                $benzersizad = $date . $name4;
                if (move_uploaded_file($tmp_name, "$resimyol/$benzersizad")) {
                    require "../../inc/baglan.php";

                    $id = $_POST["id"];
                    $sql = "UPDATE admins SET foto='$benzersizad' WHERE id=$id";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    echo "Fotoğraf başarıyla yüklendi.";
                    header("location:../profile");
                } else {
                    echo 'Yükleme Yapılamıyor';
                }
            }
        } else {
            echo "Dosya Yükleme Hatası: " . $error;
        }
    } else {
        echo 'Resim Seçilmedi';
    }
} else {
    echo "Oturum Yok";
}
?>
