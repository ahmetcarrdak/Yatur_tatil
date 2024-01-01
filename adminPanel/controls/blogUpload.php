<?php

session_start();
if (isset($_SESSION['12.23.132.4243.42admingiris8.569.4739.85turizm6789.489.45.76'])) {


    require "../../inc/baglan.php";
    /** @var TYPE_NAME $conn */

    if (isset($_FILES['resim'])) {
        $yuklenemeyenler = array(); //yüklenemeyen ve hatası dönen resimleri bu dizide tutacağız.

        $klasor = "../../img/"; //yükleyeceğimiz klasörü belirledik.

        //Artık resimlerimiz dizi olarak geldiği için bir döngü ile tek tek kontrol ve kayıt etmemiz gerekiyor.
        $resim_sayisi = count($_FILES['resim']['name']); //kaç tane resim geldiğini öğrendik.
        $sec_id = rand();
        for ($i = 0; $i < $resim_sayisi; $i++) {
            //resim sayısı kadar döngüye soktuk.

            $resimBoyutu = $_FILES['resim']['size'][$i]; //döngü içerisindeki resmin boyutunu öğrendik.
            if ($resimBoyutu > (1024 * 1024 * 2)) {
                //buradaki işlem aslında bayt, kilobayt ve mb formülüdür.
                //2 rakamını mb olarak görün ve kaç yaparsanız o mb anlamına gelir.
                //Örn: (1024* 1024* 3) => 3MB/ (1024* 1024* 4) => 4MB
                $yuklenemeyenler[] = $_FILES['resim']['name'][$i] . " - BOYUT";
            } else {
                $tip = $_FILES['resim']['type'][$i]; //resim tipini öğrendik.

                $dosyaUzantisi = substr($_FILES["resim"]["name"][$i], -4, 4);
                $dosyaAdi = rand() . $dosyaUzantisi;


                if ($tip == 'image/jpeg' || $tip == 'image/jpg' || $tip == 'image/png') { //uzantısnın kontrolünü sağladık. sadece .jpg ve .png yükleyebilmesi için.
                    if (move_uploaded_file($_FILES["resim"]["tmp_name"][$i], $klasor . "/" . $dosyaAdi)) {
                        //tmp_name ile resmi bulduk ve nereye, hangi isimle yukleneceğini belirleyip yükledik.
                        //yükleme işlemi başarılı olursa dilediğiniz bir olayı gerçekleştirebilirsiniz.

                        $sql = "INSERT INTO galeri (sec_id, isim)
                            VALUES ('$sec_id', '$dosyaAdi')";
                        $conn->exec($sql);

                    } else $yuklenemeyenler[] = $_FILES['resim']['name'][$i] . " BİLİNMİYOR";
                } else {
                    $yuklenemeyenler[] = $_FILES['resim']['name'][$i] . " UZANTI";
                }
            }
        }
        if (count($yuklenemeyenler) > 0) {
            echo "red";
            var_dump($yuklenemeyenler);
        } else {
            $isim = $_POST["isim"];
            $detay = $_POST["detay"];
            $sql2 = "INSERT INTO blog (blogAdi, blogDetay, sec_id)
                            VALUES ('$isim', '$detay', '$sec_id')";
            $conn->exec($sql2);

            echo "onay";
        }
    }
} else {
    echo "Oturum Yok";
}
