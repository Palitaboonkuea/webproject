<?php include "header.php";?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<style>
        .thinking {
                    border-color:#FFFF99;
        }
        .approved {
                    border-color: #66FF99;           
        }
        .denied {
                    border-color:red;
        }
        h1 {
            text-align: center;
        }
        /* กรอบในฟอร์ม */
        .layout {
	padding: 20px;
    margin: 100px;
	
	grid-template-columns: repeat(auto-fill, minmax(600px, 1fr));
	grid-gap: 40px;
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
         /* ปุ่มเพิ่มสินค้า */
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
        /* ปุ่มกลับ */
        
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
<script>
            var xmlHttp;
            function checkidproduct() {
            document.getElementById("pid").className = "thinking";
            xmlHttp = new XMLHttpRequest();
            xmlHttp.onreadystatechange = showStatus;
            var pid = document.getElementById("pid").value;
            var url = "checkpid.php?pid=" + pid;
            xmlHttp.open("GET", url);
            xmlHttp.send();
            }
            function showStatus() {
            if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
            if (xmlHttp.responseText == "okay") {
                      document.getElementById("pid").className = "approved";
            } else {
                      document.getElementById("pid").className = ".denied";
                      document.getElementById("pid").focus();
                      document.getElementById("pid").select();
                    }
                }
            }
</script>

<body>
<div class="center">
        
<button class="name noselect">เพิ่มสินค้า</button>
</div>
    <div class="layout">
    <div class="full border"> 
        <form name="form1" action="add.php" method="post" enctype="multipart/form-data">
            รหัสสินค้า: <input type="text" name="pid" id="pid" onblur="checkidproduct()"><br>
            ชื่อสินค้า: <input type="text" name="ชื่อสินค้า"><br>
            ราคา: <input type="number" name="ราคาสินค้า"><br>
            จำนวนสินค้า: <input type="number" name="จำนวนสินค้า"><br>
            รายละเอียดสินค้า:<textarea name="รายละเอียดสินค้า" rows="3" cols="40"></textarea><br>
            รหัสพนักงาน: <input type="text" name="รหัสพนักงาน"><br>
            รหัสประเภทสินค้า: <input type="text" name="รหัสประเภทสินค้า" class="typeproduct"><br>
            <input type="file" name="file1" required>
            <input type="submit" value="เพิ่มสินค้า" class="button" onclick="myFunction()">
            <script>
                function myFunction() {
                  alert("เพิ่มสำเร็จ!");
                }
                </script>
        </form>
    </div>
    </div>

    <div class="frame">
    <a href="manage.php">
  <div class="custom-btn btn-11">Bาะack</div> </a>

</div>


</body>

</html>