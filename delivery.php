<?php include "menu.php";?>
<?php  
 $con=mysqli_connect('localhost','root','','shop');   
 $sql=mysqli_query($con,"select send.เลขการจัดส่ง,send.บริษัทจัดส่ง,send.สถานะ,send.เลขออเดอร์,
 `order`.`Slip_img` from send JOIN `order` ON send.เลขออเดอร์=`order`.`เลขออเดอร์` ORDER BY send.เลขออเดอร์ ASC");  
  
 if (isset($_GET['เลขออเดอร์']) && isset($_GET['สถานะ'])) {  
      $เลขออเดอร์=$_GET['เลขออเดอร์'];  
      $สถานะ=$_GET['สถานะ'];  
      mysqli_query($con,"update send set สถานะ='$สถานะ' where เลขออเดอร์='$เลขออเดอร์'");  
      header("location:delivery.php");  
      die();  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <link rel="stylesheet" href="style2.css">
      <style>
          @media(min-width: 900px){
             .img{
                width: 220px;
             }
           }
          @media(min-width: 521px) and (max-width: 899px){
               .img{
                 width: 170px;
               }

           }
          @media(max-width: 520px){
               .img{
                 width: 130px;
               }
          }
 </style>
 </head>  
 <body> 
 <div class="hh">สถานะ Order</div>
 <nav>
      <table>  
           <tr>  
                <th class="s">เลขออเดอร์</th></div>
                <th class="s">สลิป</th>
                <th class="s">สถานะปัจจุบัน</th> 
                <th class="s">แก้ไขสถานะ</th>  
           </tr>  
           <?php  
                 while ($row=mysqli_fetch_assoc($sql)) { ?>  
                 <tr>   
                      <td id="colorw"><?php echo $row['เลขออเดอร์'] ?></td>
                      <td><img class="img" src='slip/<?=$row["Slip_img"]?>'><br></td>
                      <td id="colorwh">  
                           <?php  
                            if ($row['สถานะ']=="เตรียมสินค้า") {  
                              echo "<p>เตรียมสินค้า</p>";  
                           }if ($row['สถานะ']=="อยู่ระหว่างการจัดส่ง") {  
                              echo "อยู่ระหว่างการจัดส่ง";  
                           }if ($row['สถานะ']=="จัดส่งสำเร็จ") {  
                              echo "จัดส่งสำเร็จ";  
                           }  
                           ?>  
                      </td>  
                      <td>  
                           <select onchange="status_update(this.options[this.selectedIndex].value,'<?php echo $row['เลขออเดอร์'] ?>')">  

                                <option value="">Update Status</option>  
                                <option value="เตรียมสินค้า">เตรียมสินค้า</option>  
                                <option value="อยู่ระหว่างการจัดส่ง">อยู่ระหว่างการจัดส่ง</option>  
                                <option value="จัดส่งสำเร็จ">จัดส่งสำเร็จ</option>  
                           </select>  
                      </td>  
                 </tr>       
           <?php      }  
         ?>  
      </table>  
      </nav>
 <script>  
      function status_update(value,เลขออเดอร์){  
           let url = "delivery.php";  
           document.location.href= url+"?เลขออเดอร์="+เลขออเดอร์+"&สถานะ="+value;  
           window.alert(เลขออเดอร์ +" แกัไขสถานะเป็น '"+value+ " ' ");
           
      }  
 </script>  
 </body>  
 </html>  
 
