<?php
 require_once("core.php");

 $email_addr = $_REQUEST["email"];
 $password = $_REQUEST["password"];

 $selectData = "SELECT * FROM my_user WHERE Email = '$email_addr'";

 $runData = mysqli_query($connection, $selectData);
 if($runData == true){
 $countData = mysqli_num_rows($runData);

 if($countData == 1){
     setcookie("logingCookie",$email_addr,time() + (86400 * 7));
     header("location:profile.php");
 }else{
        header("location:loging.php?not_loging");
 }

}
