<?php
session_start();
if (isset($_SESSION['12.23.132.4243.42admingiris8.569.4739.85turizm6789.489.45.76'])) {
    require "../../inc/baglan.php";

    $id = $_POST["id"];
    $hide = $_POST["accountActivation"];
    $disct = "";

    if ($hide == "on") {
        $disct = 1;
    } else {
        $disct = 0;
    }
    echo $disct;
    $sql = "UPDATE admins SET gizlilik='$disct' WHERE id=$id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header("location:../profile");
}else {

}