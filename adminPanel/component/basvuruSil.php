<?php
session_start();
if (isset($_SESSION['12.23.132.4243.42admingiris8.569.4739.85turizm6789.489.45.76'])) {

    require "../../inc/baglan.php";

    $id = $_GET['basvuruNo'];

    if ($id != "") {
        /** @var TYPE_NAME $conn */
        $sql = "DELETE FROM turKayitlar WHERE id=$id";
        $conn->exec($sql);
        $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
        header("location:$url");
    }
}

