<?php include "header.php";?>
<?php 
$pdo = new PDO("mysql:host=localhost;dbname=shop;charset=utf8","root","");
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>
<?php
    $stmt = $pdo->prepare("SELECT product.ชื่อสินค้า as proname,SUM(ordering.จำนวน) as sum FROM ordering JOIN product 
    WHERE ordering.รหัสสินค้า = product.รหัสสินค้า GROUP BY product.รหัสสินค้า");
    $stmt->execute();
    echo "<script> var array = [['Pname','Psum']];</script>";
    while ($row=$stmt->fetch()) {
        $array = array('proname' =>$row["proname"],"sum"=>$row["sum"]);
        $json_data = json_encode($array,JSON_UNESCAPED_UNICODE);
        echo "<script>console.log(".$json_data.");</script>";
        echo "<script>var rawData=".$json_data."</script>";
        echo "<script>console.log(rawData);</script>";
        echo "<script>var content=[];</script>";
        echo "<script>console.log(Number.parseInt(rawData.sum));</script>";
        echo "<script>content.push(rawData.proname,Number.parseInt(rawData.sum));</script>";
        echo "<script>console.log(comtent);</script>";
        echo "<script>array.push(content)</script>";
    }
    echo "<script>console.log(array)</script>";
?>
<html>
  <head>
    
    <!-- เรียก js มาใช้งาน -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable(array);

        var options = {
          title: 'ยอดสินค้าที่ถูกสั่งซื้อ',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
<style>
 
  .product_list
  {
    text-decoration: none;
    color: aliceblue;
    background-color: rgb(201, 162, 238);
    padding: 10px;
    border-radius: 20px;
    width: 300px;
  }
  .frame {
    width: 90%;
    margin: 40px auto;
    text-align: center;
  }
  .custom-btm {
    width: 100px;
    height: 20px;
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
  
    <div id="piechart" style="width: 1200px; height: 600px;"></div>
    <a href="productlist.php"><h1 class="product_list">PRODUCT LIST</h1></a>
    <div class="frame">
    <a href="manage.php">
  <div class="custom-btn btn-11">Back</div> </a>

</div>
  </body>
</html>
