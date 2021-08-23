<?php
require_once("core.php");

if (isset($_REQUEST["prodact_name"]) && isset($_REQUEST["price"]) && isset($_FILES["avatar"])) {

    $itemName = $_REQUEST["prodact_name"];
    $price = $_REQUEST["price"];
    $avatar = $_FILES["avatar"]["name"];
    $avatar_TmpName = $_FILES["avatar"]["tmp_name"];
    $logingEmail = $_COOKIE["logingCookie"];

    $location = "../image/";
    move_uploaded_file($avatar_TmpName, $location . "$avatar");


    $insurtQry = "INSERT INTO my_prodact(Prodact_name,Price,Email,avatar) VALUES ('$itemName','$price','$logingEmail','$avatar')";

    $runQry = mysqli_query($connection, $insurtQry);

    if ($runQry == true) {
        header("location:index.php");
    }
}
