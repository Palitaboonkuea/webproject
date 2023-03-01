<?php session_start(); ?>
<html>
    <head>
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
        <style>

     @media (max-width: 480px){
  * {
      margin: 0;
      padding: 0;
      font-family: 'Sriracha', cursive;
      text-decoration: none;
  }
   
  
  body {
      background-position: center;
      background-size: cover;
      font-family: Prompt,sans-serif;
  }
  header {
    display: flex;
    background-color: white;
    flex-direction: column;
    align-items: center;
  }
  .logo {
    text-decoration: none;
    color: black;
    font-size: 1em;
  }
  b {
    font-weight: bold;
  }
  header ul {
    display: flex;
    align-items: center;
  }
  header ul li {
    list-style: none;
  }
  .buttons {
    padding: 0.2em 0.5em 0.2em 0.5em;
    color: rgb(39, 37, 37);
    text-decoration: none;
    font-family: 'Sriracha', cursive;
  }
  .container{
    display: flex;
    padding: 4% 2%;
    box-sizing: border-box;
    height: 100vh;
    flex-direction: column;
    margin-top: 30%;
  }
  .box {
    flex: 1;
    overflow: hidden;
    transition: .5s;
    margin: 0 2%;
    box-shadow: 0 20px 30px rgba(0,0,0,.1);
    line-height: 0;
  }
  .box > span {
    font-size: 3.8vh;
    display: block;
    text-align: center;
    height: 10vh;
    line-height: 2.6;
  }

  .box a > img {
    width: 200%;
    height: calc(100% - 10vh);
    object-fit: cover; 
    transition: .5s;
  }
  .box:hover { flex: 1 1 50%; }
  .box a:hover > img {
    width: 100%;
    height: 100%;
  }
  /* ปุ่มยอดสินค้า */
  .center {
position: absolute;
top: 16%;
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
	width: 100px;
	height: 30px;
	cursor: pointer;
	font-size: 10px;
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

  }
  @media(min-width: 481px) and (max-width:680px) {
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Sriracha', cursive;
    text-decoration: none;
    }
header
{
    justify-content: space-between;
    display: flex;
    align-items: center;
    background-color: white;
}
header ul 
{
    display: flex;
    justify-content: center;
    align-items: center;
    
}
header ul li
{
    list-style: none;
    margin-left: 5px;
}
.profile
{
    margin-right:30px ;
}
.buttons
{
    border-radius:20px ;
    padding: 0.2em 0.5em 0.2em 0.5em;
    color: rgb(39, 37, 37);
    text-decoration: none;
    font-family: 'Sriracha', cursive;
    
}
.logo 
{
    text-decoration: none;
    color:black;
    font-size: 2em;
    margin-left: 30px;
    padding: 0px;
}
body{
    background-position: center;
    background-size: cover;
    box-sizing: border-box;
    font-family: Prompt,sans-serif;
}

.container {
    display: flex;
    width: 100%;
    padding: 4% 2%;
    box-sizing: border-box;
    height: 100vh;
    margin-top: 9%;
  }
  
  .box {
    flex: 1;
    overflow: hidden;
    transition: .5s;
    margin: 0 2%;
    box-shadow: 0 20px 30px rgba(0,0,0,.1);
    line-height: 0;
  }
  
  .box a > img {
    width: 200%;
    height: calc(100% - 10vh);
    object-fit: cover; 
    transition: .5s;
  }
  
  .box > span {
    font-size: 3.8vh;
    display: block;
    text-align: center;
    height: 10vh;
    line-height: 2.6;
  }
  
  .box:hover { flex: 1 1 50%; }
  .box a:hover > img {
    width: 100%;
    height: 100%;
  }
  /* ปุ่มยอดสินค้า */
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
	width: 100px;
	height: 30px;
	cursor: pointer;
	font-size: 10px;
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

}
@media(min-width:681px) {
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
      font-family: 'Sriracha', cursive;
      text-decoration: none;
      }
  header
  {
      justify-content: space-between;
      display: flex;
      align-items: center;
      background-color: white;
  }
  header ul 
  {
      display: flex;
      justify-content: center;
      align-items: center;
      
  }
  header ul li
  {
      list-style: none;
      margin-left: 30px;
  }
  .profile
  {
      margin-right:30px ;
  }
  .buttons 
  {
      border-radius:20px ;
      padding: 0.2em 0.5em 0.2em 0.5em;
      color: rgb(39, 37, 37);
      text-decoration: none;
      font-family: 'Sriracha', cursive;
      
  }
  .logo 
  {
      text-decoration: none;
      color:black;
      font-size: 2em;
      margin-left: 30px;
      padding: 0px;
  }
  body{
      background-position: center;
      background-size: cover;
      box-sizing: border-box;
      font-family: Prompt,sans-serif;
  }
  
  .container {
      display: flex;
      width: 100%;
      padding: 6% 2% ;
      box-sizing: border-box;
      height: 100vh;
      margin-top: 2%;
      
    }
    
    .box {
      flex: 1;
      overflow: hidden;
      transition: .5s;
      margin: 0 2%;
      box-shadow: 0 20px 30px rgba(0,0,0,.1);
      line-height: 0;
    }
    
    .box a > img {
      width: 200%;
      height: calc(100% - 10vh);
      object-fit: cover; 
      transition: .5s;
    }
    
    .box > span {
      font-size: 3.8vh;
      display: block;
      text-align: center;
      height: 10vh;
      line-height: 2.6;
    }
    
    .box:hover { flex: 1 1 50%; }
    .box a:hover > img {
      width: 100%;
      height: 100%;
    }
     /* ปุ่มยอดสินค้า */
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
  }
          </style>
    </head>
    <body>
    <header>
        <a href="homepage.php" class ="logo"><b>samaang</b></a>
            <ul>
                
                <?php if(isset($_SESSION['username']))
                { ?> 
                    <li ><a class="buttons" href="manage.php">Manage</a></li>
                    <li ><a class="buttons" href="delivery.php">Send</a></li>
                    <li ><a class="buttons" href="report-sale.php">Report</a></li>
                    <li ><a class="buttons" href="logout.php">LOGOUT</a></li>
                    
                    <scrip>
                        <li><a class="button" href="profile.php" > <?php  echo $_SESSION['username']; ?></a></li>
                    </scrip>
                    <li class="profile"><a href="#"><img src="https://i.pinimg.com/564x/33/c3/7c/33c37cb8ddf5abc2e557369f15be69b8.jpg" width="30px" height="30px" style="border-radius: 50px;"></a></li>
            <?php }else
            { ?>
                <li><a class="buttons" href="homepage.php">HOME</a></li>
                <li ><a class="buttons" href="login_form.php">LOGIN</a></li>
                <li class="profile"><a href=""><img src="img/profile.jpeg" width="30px" height="30px" style="border-radius: 50px;"></a></li>
           <?php }  ?>

            </ul>
        </header>


        <div class="center" >
        <a href="piechart.php">
        <button class="name noselect" >ยอดสินค้า</button>
            </a>
        </div>
    <div class="container">
        <div class="box">
          <a href="skincare.php">
          <img src="https://images.everydayhealth.com/images/what-are-natural-skin-care-products-alt-1440x810.jpg?w=1110/1000x800">
        </a>
        <span>Skincare</span>
        </div>
        
        <div class="box">
         <a href="lipstick.php">
          <img src="https://media.timeout.com/images/103770834/750/422/image.jpg/1000x802">
        </a>
         <span>Lipstick</span>
      
        
        </div>
     
        <div class="box">
          <a href="powder.php">
          <img src="https://burst.shopifycdn.com/photos/makeup-powder-foundation-brushes.jpg?width=925&format=pjpg&exif=1&iptc=1/1000x804">
        </a>
        <span>Powder</span>
        </div>
        <div class="box">
          <a href="blush.php">
          
          <img src="https://images.unsplash.com/photo-1646500821831-84fd6f2b6e71?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1634&q=80/1000x806">
        </a>
          <span>Blush</span>
        </div>

          <div class="box">
          <a href="palette.php">
          
            <img src="https://i0.wp.com/www.beautybucketeer.com/wp-content/uploads/2016/04/Battle-of-the-Drugstore-Nude-Palettes-1-1.jpg?resize=1080%2C810/1000x806">
        </a>
          <span>Palette</span>
        </div>
</div>
    </body>
</html>