<?php include 'menu.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sam-aang Shop</title>
    <!-- <link rel="stylesheet" href="homepage.css"> -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');

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
    background-color: rgb(249, 186, 221);
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
  .button {
    padding: 0.2em 0.5em 0.2em 0.5em;
    color: rgb(39, 37, 37);
    text-decoration: none;
    font-family: 'Sriracha', cursive;
  }
  #container {
    background: rgb(236, 209, 220);
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  nav {
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
  .product {
    display: flex;
    padding: 4% 2%;
    box-sizing: border-box;
    height: 100vh;
    flex-direction: column;
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
  footer {
    text-align: center;
    background-color: rgb(249, 186, 221);
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
  .recommend{
    background: WHITE;
    text-align: center;
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
    background-color: rgb(249, 186, 221);
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
.button 
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

.product {
    display: flex;
    width: 100%;
    padding: 4% 2%;
    box-sizing: border-box;
    height: 100vh;
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
  #container{
    background: rgb(236, 209, 220);
    margin: 0 auto;
    display: flex;
  }
  nav{
    width: 20%;
    padding: 10px;
    display: flex;
    flex-direction: column;
    background: rgb(250, 183, 220);
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
  footer{
    text-align: center;
    background-color: rgb(249, 186, 221);
}
.recommend{
    background: WHITE;
    text-align: center;
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
      background-color: rgb(249, 186, 221);
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
  .button 
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
  
  .product {
      display: flex;
      width: 100%;
      padding: 4% 2%;
      box-sizing: border-box;
      height: 100vh;
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
    #container{
      width: 90vw;
      background: rgb(236, 209, 220);
      margin: 0 auto;
      display: flex;
    }
    nav{
      width: 20%;
      padding: 10px;
      display: flex;
      flex-direction: column;
      background: rgb(250, 183, 220);
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
    footer{
      text-align: center;
      background-color: rgb(249, 186, 221);
  }
  .recommend{
    background: WHITE;
    text-align: center;
  }
  }
    </style>
</head>
<body>


        <div class="recommend">
            <a href="recommend.php" style="color:red">--- สินค้าแนะนำ ---</a>
        </div>
    <div id="container">
        <nav class="sidebar">
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
            </nav>
        <section class="product">
            <div class="box">
              <a href="pre-skincare.php">
              <img src="https://images.everydayhealth.com/images/what-are-natural-skin-care-products-alt-1440x810.jpg?w=1110/1000x800">
            </a>
            <span>Skincare</span>
            </div>
            
            <div class="box">
             <a href="pre-lipstick.php">
              <img src="https://media.timeout.com/images/103770834/750/422/image.jpg/1000x802">
            </a>
             <span>Lipstick</span>
          
            
            </div>
         
            <div class="box">
              <a href="pre-powder.php">
              <img src="https://burst.shopifycdn.com/photos/makeup-powder-foundation-brushes.jpg?width=925&format=pjpg&exif=1&iptc=1/1000x804">
            </a>
            <span>Powder</span>
            </div>
            <div class="box">
              <a href="pre-blush.php">
              
              <img src="https://images.unsplash.com/photo-1646500821831-84fd6f2b6e71?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1634&q=80/1000x806">
            </a>
              <span>Blush</span>
            </div>
    
              <div class="box">
              <a href="pre-palette.php">
              
                <img src="https://i0.wp.com/www.beautybucketeer.com/wp-content/uploads/2016/04/Battle-of-the-Drugstore-Nude-Palettes-1-1.jpg?resize=1080%2C810/1000x806">
            </a>
              <span>Palette</span>
            </div>
            </section>
    </div>
    <footer>
        <h3>ติดต่อเพิ่มเติม</h3>
        <a href="#">Line ID: @samaangshop</a>
    </footer>
</body>
</html>