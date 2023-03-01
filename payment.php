<?php
session_start();
?>
<?php include "menu.php";?>
<?php include "connect1.php" ?>
<html>
<head>
      <link rel="stylesheet" href="pay.css">
      <style>
         @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');
         body{
             font-family:  'Sriracha', cursive;
         }
         @media(min-width: 900px){
             .img{
                width: 150px;
             }
           }
          @media(min-width: 500px) and (max-width: 899px){
               .img{
                 width: 120px;
               }

           }
          @media(max-width: 499px){
               .img{
                 width: 100px;
               }
          }
         .size{
            width: 23px;
            position: relative;
            top: 5px;
         }
      </style>
</head>
<body>
        
<?php 
$stmt = $pdo->prepare("SELECT product.รหัสสินค้า,product.ชื่อสินค้า,product.img,ordering.จำนวน,product.ราคาสินค้า FROM ordering JOIN product ON ordering.รหัสสินค้า=product.รหัสสินค้า JOIN 
`order` ON `order`.เลขออเดอร์=ordering.เลขออเดอร์ WHERE ordering.เลขออเดอร์=?");
$stmt->bindParam(1,$_GET["เลขออเดอร์"]);
$stmt->execute();
?>
   <div class="container"> 
   <nav> 
       <table>
          <tr class="headta">
             <td>รหัสสินค้า</td>
             <td>ภาพสินค้า</td>
             <td>รายการสินค้า</td>
             <td>จำนวน</td>
             <td>ราคา</td>
          <tr>
          <?php
   $numor=$_GET["เลขออเดอร์"];
   while ($row = $stmt->fetch()) { ?>
          <tr>
             <td><?=$row['รหัสสินค้า']?><br></td>
             <td><img class="img" src='img/<?=$row["img"]?>'><br></td>
             <td><?=$row['ชื่อสินค้า']?><br></td>
             <td><?=$row['จำนวน']?><br></td>
             <td><?=$row['ราคาสินค้า']?><br></td>
             
         </tr>
   <?php } ?>
       </table>
       
    </nav>
<?php
    $stmt = $pdo->prepare("SELECT รวมจำนวนเงิน FROM `order` WHERE เลขออเดอร์='$numor'");
    $stmt->execute();
    $row = $stmt->fetch();
?>
 <b class="tmn">รวมเป็นเงินทั้งหมด : <?=$row ["รวมจำนวนเงิน"]?> บาท</b>     
        <section>
         <div class="sign">
               <img class="size" src="https://static.wixstatic.com/media/3b2d4b_11c765462b654143844a184a9709b1fb~mv2.png/v1/fill/w_400,h_394,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/scb.png">
               <b>ธนาคาร: </b>ไทยพาณิชย์ (SCB)<br>
               <b>ชื่อ:</b> Samaang_Shop
           <br><b>เลขบัญชี: </b> 775 0787 9777</br>
         </div>
        </section>
          <?// $user=$_GET["Username"]; ?>
           <br>
            <form action='upload.php?เลขออเดอร์=<?=$numor?>' method="POST" enctype="multipart/form-data">
                <article>
                     <b>Upload Slip here</b><br>
                     <input type="file" name="myimg" required class="upload-box">
                 </article>
                 <aside>
                    <?php $stmt = $pdo->prepare("SELECT * FROM deliverycompany");
                    $stmt->execute();?>
                    <b>เลือกบริษัทขนส่ง:</b><br>
                    <select name="selectid" id="selectid">
                    <option value="">--- เลือกบริษัทจัดส่ง ---</option>
                    <?php while($row=$stmt->fetch()): ?>
                    <option value="<?=$row["รหัสบริษัท"]?>"><?=$row["บริษัทจัดส่ง"]?></option>
                    <?php endwhile; ?>
                    </select>
                 </aside>
                 <hr>
                 <?php
                    echo "<br>";
                     if (!empty($_SESSION['show'])): ?>
                        <b ><?php echo $_SESSION['show']; ?></b>
                        <?php endif 
                 ?>
                  <footer>
                    <div id="h">
                        <input  class="butt" type="submit" name="submit" value="ยืนยัน">
                    </div>
                  </footer>
        </form>
       <div>
</div><?php //contain?>
</script>
</body>
</html>
