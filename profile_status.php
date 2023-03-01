<?php include "header.php" ?>
<?php include "connect.php" ?>
<?php if(!isset($_SESSION["username"]))
{
    echo "<script> alert('you must login first');</script>";
    $show=header("location:login_form.php");
    exit;
} ?>
<html>
    <head><title>my profile</title>
    <link rel="stylesheet" href = "style_profile.css">
</head>
    <body>

            <div class ="box">
            <?php 
                $username = $_SESSION['username'];
                $sql = "SELECT `order`.เลขออเดอร์,product.ชื่อสินค้า,`send`.สถานะ,product.รหัสสินค้า  FROM `order`
                INNER JOIN member ON `order`.`Username` = member.username 
                INNER JOIN send ON `order`.`เลขออเดอร์`=`send`.เลขออเดอร์ 
                INNER JOIN ordering ON `order`.`เลขออเดอร์`=ordering.เลขออเดอร์
                INNER JOIN product ON ordering.รหัสสินค้า=product.รหัสสินค้า
                WHERE   member.username = '$username' 
                ORDER BY เลขออเดอร์ DESC
                ";
                $result = mysqli_query($conn,$sql);
                ?>
                <article>
                <img src="https://i.pinimg.com/originals/0e/29/08/0e2908c73167238776c2ccdadd832617.jpg" name="img_profile" id ="img_profile">
                <h1> <?php echo "$username" ?> </h1>
                <br>
                <a id="status" href="profile.php">ประวัติการสั่งซื้อ</a>
                </article>
                
             <div>
                <h1 class="history">สถานะการจัดส่งสินค้า</h1>
                
                
                <?php while($row=mysqli_fetch_array($result))
                {?>
                   <div class="box_history">
                   <img src="imgs/<?=$row['รหัสสินค้า']?>.jpg " width="150"><br>
                   <h3><?=$row['ชื่อสินค้า']?></h3><br>
                   <h3><?=$row['สถานะ']?></h3><br>

                   
                    </div>
              
                <?php } ?>  
                
                

             
                
                 
    </body>
</html>

