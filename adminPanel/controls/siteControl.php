<?php
session_start();
if (isset($_SESSION['12.23.132.4243.42admingiris8.569.4739.85turizm6789.489.45.76'])) {

    require "../../inc/baglan.php";

    $title = $_POST["title"];
    $keyword = $_POST["keyword"];
    $description = $_POST["desc"];
    $about = $_POST["about"];
    $vizyon = $_POST["vizyon"];
    $misyon = $_POST["misyon"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $address = $_POST["address"];


    $sql = "UPDATE settings SET title='$title', keyword='$keyword', description='$description', about='$about'
              , vizyon='$vizyon', misyon='$misyon', phone='$phone', email='$email', address='$address'
              WHERE id=1";
    // Prepare statement
    /** @var TYPE_NAME $conn */
    $stmt = $conn->prepare($sql);

// execute the query
    $stmt->execute();
    echo "Değişiklikler Kaydedildi";
}