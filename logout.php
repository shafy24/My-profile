<?php
require_once("core.php");

setcookie("logingCookie", $email_addr, time() - (86400 * 30));
header("location:loging.php");
?>