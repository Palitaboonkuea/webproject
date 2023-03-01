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
                $sql = "SELECT DISTINCT `order`.Username , product.ชื่อสินค้า,product.รหัสสินค้า,`order`.รวมจำนวนเงิน,ordering.จำนวน,`order`.วันที่,`order`.เวลา  
                FROM  ordering
                INNER JOIN `order`  ON  ordering.เลขออเดอร์ = `order`.เลขออเดอร์
                INNER JOIN product ON ordering.รหัสสินค้า = product.รหัสสินค้า
                INNER JOIN `send` ON `send`.เลขออเดอร์ = `order`.เลขออเดอร์
                WHERE Username = '$username' AND `send`.สถานะ = 'จัดส่งสำเร็จ' 
                ORDER BY `send`.เลขออเดอร์ DESC
                ";
                $result = mysqli_query($conn,$sql);
                ?>
                <article>
                <img src="https://i.pinimg.com/originals/0e/29/08/0e2908c73167238776c2ccdadd832617.jpg" name="img_profile" id ="img_profile">
                <h1> <?php echo "$username" ?> </h1>
                <br>
                <a id="status" href="profile_status.php">สถานะสินค้า</a>
                </article>
                
             <div>
                <h1 class="history">ประวัติการสั่งซื้อ</h1>
                
                
                <?php while($row=mysqli_fetch_array($result))
                {?>
                   <div class="box_history">
                   <h3>DATE:<?=$row['วันที่']?></h3>
                   <h3>TIME:<?=$row['เวลา']?></h3>
                   <img src="imgs/<?=$row['รหัสสินค้า']?>.jpg " width="150"><br>
                   <h3><?=$row['ชื่อสินค้า']?></h3><br>
                   <b>Price:<?=$row['รวมจำนวนเงิน']?></b><b>bath</b>
                   <b>Price:<?=$row['จำนวน']?></b><b>ชิ้น</b>
                   
                    </div>
              
                <?php } ?>  
                
                

             
                
                 
    </body>
</html>

