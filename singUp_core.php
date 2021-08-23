<?php
require_once("core.php");

if (isset($_FILES["avatar"]) && isset($_REQUEST["first_name"]) && isset($_REQUEST["last_name"]) && isset($_REQUEST["email"]) && isset($_REQUEST["password"]) && isset($_REQUEST["gender"]) && isset($_REQUEST["unit"])) {

    $fName = $_REQUEST["first_name"];
    $lName = $_REQUEST["last_name"];
    $email = $_REQUEST["email"];
    $pass = $_REQUEST["password"];
    $gender = $_REQUEST["gender"];
    $avatar = $_FILES["avatar"]["name"];
    $avatar_TmpName = $_FILES["avatar"]["tmp_name"];
    $unit = $_REQUEST["unit"];


    $selectData = "SELECT * FROM my_user WHERE Email = '$email'";

    $runData = mysqli_query($connection, $selectData);

    if ($runData == true) {
        $countData = mysqli_num_rows($runData);

        if ($countData == 0) {
            setcookie("logingCookie", $email_addr, time() + (86400 * 7));

            $location = "../image/";
            move_uploaded_file($avatar_TmpName, $location . "$avatar");



            $insardData = "INSERT INTO my_user(avatar,First_name,Last_name,Email,Password,Gender,unit) VALUES ('$avatar','$fName','$lName','$email','$pass','$gender','$unit')";

            $runDataqry = mysqli_query($connection, $insardData);

                header("location:profile.php");



        } else {
            header("location:singUp.php?not_loging");
        }}}


?>
