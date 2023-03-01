<?php
$pdo = new PDO("mysql:host=localhost;dbname=shop;charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $pdo->prepare("SELECT ชื่อสินค้า,รหัสสินค้า,img FROM product WHERE รหัสประเภทสินค้า = 'SK'");
$stmt->execute();
?>
<html>
<head>
<link rel="stylesheet" href="web.css">
    <script>
      function confirmDelete(รหัสสินค้า) { 
var ans = confirm("ต้องการลบสินค้ารหัส " + รหัสสินค้า); 
if (ans==true) 
document.location = "delete.php?รหัสสินค้า=" + รหัสสินค้า; 
}
</script>
</head>
<body>
        <?php include "header.php";?>
        <span class="add"><a href="addform.php"></a></span><br>
        <div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>รูป</th>
            <th>ชื่อสินค้า</th>
            <th>Select</th>
            </tr>
            </thead>
            <tbody>
<?php while ($row = $stmt->fetch()) 
{ ?>
        <tr>
               <td>
       <img src='img/<?=$row["img"]?>' width='100'>
       </td>
       <td>
               <?=$row ["ชื่อสินค้า"]?>
               </td>
               <td>
               <button class="custom-btn btn-1">
               <?php echo "<a href='editform.php?รหัสสินค้า=" . $row ["รหัสสินค้า"] . "'>แก้ไข</a>"; ?>
       </button>
                 <button class="custom-btn2 btn-1">
       
                <?php echo "<a href='#' onclick=confirmDelete('".$row["รหัสสินค้า"]. "')>ลบ</a> "; ?> 
                  </button>
                  </td>
                  </tr>
              
             <?php } ?>
             <tbody>
             </table> 
             </div>
             <div class="frame">
    <a href="manage.php">
  <div class="custom-btm btn-11">Back</div> </a>

</div>
       </body>
       </html>