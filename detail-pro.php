<?php include "connect.php" ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <!-- <link rel="stylesheet" href="detail-pro.css"> -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');

@media(min-width:601px){
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Sriracha', cursive;
    text-decoration: none;
}
.container{
    width: 100vw;
    background: rgb(236, 209, 220);
    margin: 0 auto;
    display: flex;
  }
  .sidebar{
    width: 20%;
    padding: 10px;
    display: flex;
    flex-direction: column;
    background: rgb(250, 183, 220);
  }
  .pro{
    width: 80%;
    padding: 10px;
    height: 100%;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 20px;
  }
  .sidebar-items {
    background: #f2f2f2;
    margin-bottom: 10px;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #e5e5e5;
    color: #000;
    transition: 300ms;
    font-size: 1.2vw;
  }
  .sidebar-items:hover {
    background: #f588c4;
    color: #fff;
  }

  .detail{
    background: rgb(255, 255, 255);
    border-radius: 20px;
    margin: 0 auto;
    margin-top: 2vw;
    
  }
  h1{
    text-align: center;
  } 
  .b-cart{
    text-align: center;
  }
}

@media(min-width: 481px) and (max-width:600px){
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Sriracha', cursive;
    text-decoration: none;
}
.container{
    width: 100vw;
    background: rgb(236, 209, 220);
    margin: 0 auto;
    display: flex;
  }
  .sidebar{
    width: 20%;
    padding: 10px;
    display: flex;
    flex-direction: column;
    background: rgb(250, 183, 220);
  }
  .pro{
    width: 80%;
    padding: 10px;
    height: 100%;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 20px;
  }
  .sidebar-items {
    background: #f2f2f2;
    margin-bottom: 10px;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #e5e5e5;
    color: #000;
    transition: 300ms;
    font-size: 1.2vw;
  }
  .sidebar-items:hover {
    background: #f588c4;
    color: #fff;
  }

  .detail{
    background: rgb(255, 255, 255);
    border-radius: 20px;
    margin: 0 auto;
    margin-top: 2vw;
    font-size: 15px

    
  }
  h1{
    text-align: center;
  } 
  .b-cart{
    text-align: center;
  }
}

@media (max-width:480px) {
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Sriracha', cursive;
    text-decoration: none;
}
  .container {
    background: rgb(236, 209, 220);
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  .sidebar {
    padding: 10px;
    align-items: flex-start;
  }
  .sidebar-items {
    background: #f2f2f2;
    margin-bottom: 10px;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #e5e5e5;
    color: #000;
    transition: 300ms;
    font-size: 10px;
  }
  .sidebar-items:hover {
    background: #f588c4;
    color: #fff;
  }
  .detail{
    background: rgb(255, 255, 255);
    border-radius: 20px;
    margin: 0 auto;
    margin-top: 2vw;
    font-size: 3vw;
    
  }
  h1{
    text-align: center;
  } 
  .b-cart{
    text-align: center;
  }
}
    </style>
</head>
<body>

        <?php include "menu.php";?>

    <div class="container">
        <div class="sidebar">
      
            <a href="pre-skincare.php" class="sidebar-items">
               Skincare
            </a>
            <a href="pre-lipstick.php" class="sidebar-items">
                Lipstick
            </a>
            <a href="pre-powder.php" class="sidebar-items">
                Powder
            </a>
            <a href="pre-blush.php" class="sidebar-items">
                Blush
            </a>
            <a href="pre-palette.php" class="sidebar-items">
                Palette
            </a>
        </div>
    
    <div class="detail">
    <h1>Detail</h1>
    <?php 
    $keyword = $_GET["รหัสสินค้า"];
    $sql = "SELECT * FROM product WHERE รหัสสินค้า LIKE '%$keyword'";
    $result = mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result))
    {?>
    
    <div align="center"><img src='img/<?=$row["img"]?>' width="200px" height="200px"></div>
    <div style="padding: 30px;" class="info">
    รหัสสินค้า: <?=$row ["รหัสสินค้า"]?><br>
    ชื่อสินค้า: <?=$row ["ชื่อสินค้า"]?><br>
    ราคาสินค้า: <?=$row ["ราคาสินค้า"]?><br>
    จำนวนสินค้า: <?=$row ["จำนวนสินค้า"]?><br>
    รายละเอียดสินค้า: <?=$row ["รายละเอียดสินค้า"]?><br>
    รหัสประเภทสินค้า: <?=$row ["รหัสประเภทสินค้า"]?><br>
    <div align='center'>
        <a href="con-order.php?รหัสสินค้า=<?=$row["รหัสสินค้า"]?>" > <button>เพิ่มในตะกร้า</button> </a>
    </div>
    </div>                  
    <?php } ?>
  </div>
  </div>    
</body>
</html>