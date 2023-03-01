<?php
session_start();
 include "connect.php"; 
?> 
<?php
$show="";
$norder=$_GET['เลขออเดอร์'];  
$targetDir ="slip/";
if(isset($_POST['submit'])){
    if(!empty($_FILES["myimg"]["name"])){
       // $user=$_GET["username"];
        $filename= basename($_FILES["myimg"]["name"]);
        $targetfilepath = $targetDir . $filename;
        $fileType = pathinfo($targetfilepath, PATHINFO_EXTENSION);
        $allowtype = array('jpeg');
        $_SESSION['show'] = "Upload slip สำเร็จ!!";
        header("Location: profile_status.php");
        //check นามสกุลไฟล์ว่าใช่ jpegไหม
        if(in_array($fileType, $allowtype)){
            if(move_uploaded_file($_FILES['myimg']['tmp_name'], $targetfilepath)){
                //update order when upload slip 
                $sql = "UPDATE `order` SET Slip_img='$filename',สถานะการชําระเงิน='สำเร็จ' where เลขออเดอร์='$norder'";
                mysqli_query($conn, $sql);
                $status="สำเร็จ";
                if($status=="สำเร็จ"){
                  //check รหัสบริษัท หากว่าตรงกับชื่่อไหนให้เอาชื่อบริษัทนั้นไปเพิ่มในsend
                  $idselect =$_POST['selectid'];
                  $sqlid="SELECT บริษัทจัดส่ง FROM deliverycompany WHERE รหัสบริษัท='$idselect'";
                  mysqli_query($conn, $sqlid);
                  $row=mysqli_fetch_assoc(mysqli_query($conn, $sqlid));
                  $idcompa =$row["บริษัทจัดส่ง"];
                  
                  //นับจำนวนแถวใน send แล้ว+1ค่ารหัสการจัดส่งเมื่อมีการinsert ค่า
                  $sqla ="SELECT count(เลขการจัดส่ง) AS countid FROM send;";
                  mysqli_query($conn, $sqla);
                  $row=mysqli_fetch_assoc(mysqli_query($conn, $sqla));
                  $numidsend = $row['countid'];  //จำนวนแถว
                  $idsend="";
                  $i=1;
                  //check ถ้าจำนวนแถวไม่ empty ให้แสดงรหัสสินค้าที่เพิ่มค่าเลขต่อท้าย
                  if(!empty($numidsend)){
                  $addidsend = (int)$numidsend+$i;
                  $idsend ="SNR0" . $addidsend;
                  }
                  else{
                    echo "it impty not have id send";
                  }
                  //status slip =สำเร็จ จะinsert การจัดส่งลง sendได้
                  $sql2 = "INSERT INTO send(เลขการจัดส่ง,บริษัทจัดส่ง,สถานะ,เลขออเดอร์)
                  VALUES('$idsend','$idcompa','เตรียมสินค้า','$norder')";
                  mysqli_query($conn, $sql2);
                }
              }else{
                  $_SESSION['show'] = "ไม่สามารถ upload file กรุณาลองใหม่";  
                  header("Location: payment.php?เลขออเดอร์=$norder");
                } 

            }else{
                  $_SESSION['show'] = "ไม่สามารถ upload ได้เนื่องจากนามสกุล file ไม่ถูกต้อง";
                  header("Location: payment.php?เลขออเดอร์=$norder");
            }
            }
        }
   

?>




