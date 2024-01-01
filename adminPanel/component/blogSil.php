<?php
session_start();
if (isset($_SESSION['12.23.132.4243.42admingiris8.569.4739.85turizm6789.489.45.76'])) {

    require "../../inc/baglan.php";

    $imgId = $_GET['imgId'];
    $blogId = $_GET["blogId"];
    if ($imgId != "" || $blogId != "") {
        /** @var TYPE_NAME $conn */

        $veriIslem = "SELECT * FROM galeri WHERE sec_id=$imgId";
        $veriIslem2 = $conn->prepare($veriIslem, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
        $veriIslem2->execute();
        $veriIslem3 = $veriIslem2->fetchall(PDO::FETCH_BOTH);
        foreach ($veriIslem3 as $resim) {
            $dosya = "../../img/" . $resim['isim'];
            unlink($dosya);
        }


        $sql = "DELETE FROM galeri WHERE sec_id=$imgId";
        $conn->exec($sql);

        $sql2 = "DELETE FROM blog WHERE id=$blogId";
        $conn->exec($sql2);



        $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
        header("location:$url");

    }
}

