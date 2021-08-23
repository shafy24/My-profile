<?php
require_once("core.php");

$getCookie = $_COOKIE["logingCookie"];

$selectQry = "SELECT * FROM my_user WHERE Email = '$getCookie'";

$connectQry = mysqli_query($connection, $selectQry);

        if ($connectQry == true) {
            while ($myData = mysqli_fetch_array($connectQry)) {    ?>

                <p style="font-size: 27px;" class="lead mt-2"><?php echo $myData["First_name"]; ?> <?php echo $myData["Last_name"]; ?></p>
                
<?php    }}   ?>
 