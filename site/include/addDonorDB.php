<?php
    include_once "DBh.php";

    $name = $_POST['name'];
    $blood = $_POST['bloodgroup'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $count = $_POST['count'];
    $isDelete = FALSE;

    $sql = " INSERT INTO donors (name, bloodGroup, email, contact, 
    address, donateCount, isDelete) VALUES('$name', '$blood', '$email', 
    '$contact', '$address', '$count', '$isDelete'); ";

    mysqli_query($conn, $sql);

    header("Location: ../viewDonor.php?add=success");
?>