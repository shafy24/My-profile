<?php
  require_once("core.php");

  if(isset($_REQUEST["item_name"]) && isset($_REQUEST["name"]) && isset($_FILES["avatar"]) && isset($_REQUEST["discription"])){

  $itemName = $_REQUEST["item_name"];
  $name = $_REQUEST["name"];
  $avatar = $_FILES["avatar"]["name"];
  $avatar_TmpName = $_FILES["avatar"]["tmp_name"];
  $discription = $_REQUEST["discription"];
  $logingEmail = $_COOKIE["logingCookie"];

  $location = "../image/";
  move_uploaded_file($avatar_TmpName, $location."$avatar");

  $insurtQry = "INSERT INTO my_post(item_Name,name,Email,avatar,discription) VALUES ('$itemName','$name','$logingEmail','$avatar','$discription')";

  $runQry = mysqli_query($connection, $insurtQry);

  if($runQry == true){
      header("location:my_List.php");
  }
  }

?>