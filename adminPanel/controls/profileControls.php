<?php
session_start();
if (isset($_SESSION['12.23.132.4243.42admingiris8.569.4739.85turizm6789.489.45.76'])) {

    require "../../inc/baglan.php";

    $id = $_POST["id"];
    $name = $_POST["firstName"];
    $email = $_POST["email"];
    $phone = $_POST["phoneNumber"];
    $pass = $_POST["password"];

    $sql = "UPDATE admins SET name='$name', mail='$email', sifre='$pass', tel='$phone' WHERE id=$id";

// Prepare statement
    $stmt = $conn->prepare($sql);

// execute the query
    $stmt->execute();
    header("location:../profile");
}
