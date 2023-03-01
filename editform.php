<?php
$pdo = new PDO("mysql:host=localhost; dbname=shop; charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $pdo->prepare("SELECT * FROM product");
$stmt->execute();
?>
<?php
$stmt = $pdo->prepare("SELECT * FROM product WHERE รหัสสินค้า = ?");
$stmt->bindParam(1, $_GET["รหัสสินค้า"]); 
$stmt->execute(); 
$row = $stmt->fetch(); 
?>
<html>
<head>
    <meta charset="utf-8">
    <style>
          h1 {
            text-align: center;
        }
        /* กรอบในฟอร์ม */
        .layout {
	padding: 20px;
	grid-template-columns: repeat(auto-fill, minmax(600px, 1fr));
	grid-gap: 40px;
    margin: 100px;
        }       
        .border {
	display: grid;
	place-items: center;
	min-height: 100px;
	border: 8px solid;
    padding: 2rem;
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(173,247,235,1) 0%, rgba(255,225,252,1) 73%);
        }
        .full {
	border-image: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(76,217,246,1) 0%, rgba(232,103,146,1) 88%) 1;
        }
        img{
border-radius: 10px;
}
/* ปุ่มแก้ไขสินค้า */
.center {

position: absolute;
top: 13%;
left: 50%;
-ms-transform: translate(-50%, -50%);
transform: translate(-50%, -50%);
}
        .noselect {
  -webkit-touch-callout: none;
    -webkit-user-select: none;
     -khtml-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;
		-webkit-tap-highlight-color: transparent;
}

button {
	width: 150px;
	height: 50px;
	cursor: pointer;
	font-size: 20px;
	font-weight: bold;
	color: #ffffff;
	background: linear-gradient(90deg, #FF9A8B 0%, #FF6A88 55%, #FF99AC 100%);
	border: 2px solid ;
	box-shadow: 5px 5px 0 #ff67b6,
		-5px -5px 0 #ff67b6,
		-5px 5px 0 #ff67b6,
		5px -5px 0 #ff67b6;
	transition: 500ms ease-in-out;
    text-align: center;
}

button:hover {
	box-shadow: 20px 5px 0 #ff67b6, -20px -5px 0 #ff67b6;
}

button:focus {
	outline: none;
}
.frame {
  width: 90%;
  margin: 40px auto;
  text-align: center;
}
.custom-btn {
  width: 100px;
  height: 50px;
  padding: 10px 10px;
  border: 2px solid #000;
 
  font-weight: 500;
  background: linear-gradient( 64.3deg,  rgba(254,122,152,0.81) 17.7%, rgba(255,206,134,1) 64.7%, rgba(172,253,163,0.64) 112.1% );
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
  display: inline-block;
}

.btn-11 {
  overflow: hidden;
  transition: all 0.3s ease;
}
.btn-11:hover {
   background: #000;
  color: #fff;
}
.btn-11:before {
    position: absolute;
    content: '';
    display: inline-block;
    top: -180px;
    left: 0;
    width: 30px;
    height: 100%;
    background-color: #fff;
    animation: shiny-btn1 3s ease-in-out infinite;
}
.btn-11:active{
  box-shadow:  4px 4px 6px 0 rgba(255,255,255,.3),
              -4px -4px 6px 0 rgba(116, 125, 136, .2), 
    inset -4px -4px 6px 0 rgba(255,255,255,.2),
    inset 4px 4px 6px 0 rgba(0, 0, 0, .2);
}


@-webkit-keyframes shiny-btn1 {
    0% { -webkit-transform: scale(0) rotate(45deg); opacity: 0; }
    80% { -webkit-transform: scale(0) rotate(45deg); opacity: 0.5; }
    81% { -webkit-transform: scale(4) rotate(45deg); opacity: 1; }
    100% { -webkit-transform: scale(50) rotate(45deg); opacity: 0; }
}
    </style>
</head>
    <body>
        <?php include "header.php";?>
        <div class="center">
        
<button class="name noselect">แก้ไขสินค้า</button>
</div>
    <div class="layout">
        <div class="full border"> 
            <form action="edit-product.php" method="post">
                <img src='img/<?=$row["img"]?>' width='200'><br>
                <input type="hidden" name="รหัสสินค้า" value="<?=$row["รหัสสินค้า"]?>">
                ชื่อสินค้า : <input type="text" name="ชื่อสินค้า" value="<?=$row["ชื่อสินค้า"]?>"><br>
                ราคา:<input type="number" name="ราคาสินค้า" value="<?=$row["ราคาสินค้า"]?>"><br>
                จำนวนสินค้า <input type="number" name="จำนวนสินค้า" value="<?=$row["จำนวนสินค้า"]?>"><br>
                รายละเอียดสินค้า<input type="text" name="รายละเอียดสินค้า" value="<?=$row["รายละเอียดสินค้า"]?>"><br>
                รหัสพนักงาน : <input type="text" name="รหัสพนักงาน" value="<?=$row["รหัสพนักงาน"]?>"><br>
                รหัสประเภทสินค้า : <input type="text" name="รหัสประเภทสินค้า" value="<?=$row["รหัสประเภทสินค้า"]?>"><br>
                <input type="submit" value="แก้ไขสินค้า ">
            </form>
        </div>
    </div>
    <div class="frame">
    <a href="manage.php">
  <div class="custom-btn btn-11">Back</div> </a>

</div>

    </body>
</html>