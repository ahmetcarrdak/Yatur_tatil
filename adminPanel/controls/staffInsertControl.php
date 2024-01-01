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

    ;

    $whitelist = array('jpg', 'jpeg', 'png', 'gif'); //geçerli formatlar
    $name = null;
    $error = 'Resim seçilmedi.';
    $resimyol = '../../img/'; //kaydedilecek dosya konumu buradan belirlenir.

    if (isset($_FILES)) {

        if (isset($_FILES['resim'])) {
            $tmp_name = $_FILES['resim']['tmp_name'];
            $name = basename($_FILES['resim']['name']);
            $error = $_FILES['resim']['error'];

            if ($error === UPLOAD_ERR_OK) {
                $extension = pathinfo($name, PATHINFO_EXTENSION);

                if (!in_array($extension, $whitelist)) {
                    echo 'format'; //format desteklemiyor uyarısı
                } else {

                    $name1 = explode('.', $_FILES['resim']['name'], 2); //dosyayı iki farklı veri olarak ele alıyoruz

                    $name2 = seo($name1[0]); //noktadan önceki veri dosya ismini türkçe karakterden arındırıyoruz.

                    $name3 = $name1[1]; //noktadan sonraki dosya formatını alıyoruz.

                    $name4 = $name2 . '.' . $name3;

                    $date = date("Ymd_hms"); //tarih ve saat benzersiz bir tanım.

                    $benzersizad = $date . $name4; //tarih ve dosyamızın adını birleştiriyoruz.

                    if (move_uploaded_file($tmp_name, "$resimyol/$benzersizad")) { //bir if sorgusuyla birlikte dosyamızı belitttiğimiz alana yüklüyoruz.

                        require "../../inc/baglan.php";
                        $isim = $_POST["lastName"];
                        $email = $_POST["email"];
                        $phone = $_POST["phone"];
                        $pass = $_POST["pass"];
                        $yetki = $_POST["yetki"];
                        $sql = "INSERT INTO admins (name, mail, sifre, tel, foto, yetki, gizlilik)
                            VALUES ('$isim', '$email', '$pass', '$phone', '$benzersizad', '$yetki', 0)";
                        if ($sql) {
                            echo "onay";
                        } else {
                            echo "Üzgünüm Şuanda Tur Kaydınızı Yapamıyorum";
                        }
                        $conn->exec($sql);

                    } else {
                        echo 'Yükleme Hatası';
                    }
                }
            }
        } else {
            echo 'bos';
        }
    } else {
        echo "dosya yok";
    }
} else {
    echo "oturum yok";
}
