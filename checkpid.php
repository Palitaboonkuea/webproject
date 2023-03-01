<?php  include "connect.php" ?>
<?php
    $pid = $_GET["pid"];
    $check = "SELECT * FROM product WHERE รหัสสินค้า = '".$_GET["pid"]."'      ";
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
