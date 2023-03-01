<?php  include "connect.php" ?>
<?php

    $username = $_GET["username"];
    $check = "SELECT * FROM member WHERE username = '".$_GET["username"]."'      ";
    $query_check = mysqli_query($conn,$check);
    $num_check = mysqli_num_rows($query_check);
    if($num_check > 0 )
    {
        echo "denied";
    }else
    {
        echo "okay";
    }

?>
