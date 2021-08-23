
<?php
require_once("core.php");


if (isset($_FILES["cheange_pic"])) {

    $getCookie = $_COOKIE["logingCookie"];

    $cheange_pic = $_FILES["cheange_pic"]["name"];
    $tmp_cheange_pic = $_FILES["cheange_pic"]["tmp_name"];
    $location = "../image/";
    move_uploaded_file($tmp_cheange_pic,$location."$cheange_pic");

    $updatePicture = "UPDATE my_user SET avater='$cheange_pic' WHERE Email='$getCookie'";

    $connectPic = mysqli_query($connection, $updatePicture);

    if ($connectPic == true) {
        header("location:profile.php");
    }else{
        echo"sfdsh";
    }
}

?>