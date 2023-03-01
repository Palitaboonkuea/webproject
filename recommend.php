<!DOCTYPE html>
<head>
<script>
async function getDataFromAPI() {
let response = await fetch('http://localhost/projectweb/JSONfile.json')
let rawData = await response.text() 
let objectData = JSON.parse(rawData)
let result1 = document.getElementById('result1') 
// let result2 = document.getElementById('result2')  
// let resultimg = document.getElementById('resultimg')

for (let i = 0; i < objectData.length ; i++) {
let row1 = '  ชื่อสินค้า:  ' + objectData[i].ชื่อสินค้า + '| ราคาสินค้า: ' 
row1 += objectData[i].ราคาสินค้า + ' | (รหัสสินค้า: ' 
row1 += objectData[i].รหัสสินค้า + ')'

let li1 = document.createElement('li') 
li1.innerHTML = row1
result1.appendChild(li1)
}
}
getDataFromAPI() 
</script>

<style>
@media (max-width:500px) {
    body{
        background: rgb(236, 209, 220);
    }

    ol{
        margin: 0 auto;
        display: table;
    }
    .container
        {
            background:rgb(247, 156, 156,0.5);
            width: 350px;
            height: 470px;
            padding: 20px 5px;
            border-radius:30px;
            margin: auto;
        }
    .head{
        background:white;
        border-radius:10px;
        width: 350px;
        height: 40px;
        margin: auto;
        
    }
}

@media(min-width: 501px) and (max-width:760px) {
    body{
        background: rgb(236, 209, 220);
    }

    ol{
        margin: 0 auto;
        display: table;
    }
    .container
        {
            background:rgb(247, 156, 156,0.5);
            width: 470px;
            height: 380px;
            padding: 20px 5px;
            border-radius:30px;
            margin: auto;
        }
    .head{
        background:white;
        border-radius:10px;
        width: 350px;
        height: 40px;
        margin: auto;
        
    }
}

@media(min-width:761px) {
    body{
        background: rgb(236, 209, 220);
    }

    ol{
        margin: 0 auto;
        display: table;
    }
    .container
        {
            background:rgb(247, 156, 156,0.5);
            width: 750px;
            height: 200px;
            padding: 20px 0px 20px;
            border-radius:30px;
            margin: auto;
        }
    .head{
        background:white;
        border-radius:10px;
        width: 350px;
        height: 40px;
        margin: auto;
        
    }
}

</style>
</head>
<body>
    <br>
    <div class="head">
<h1 align="center">สินค้าแนะนำ 10 อย่าง</h1>
</div>
<br><br>
<div class="container">
<ol type="1" id="result1">
</ol>
</div>
<br>
<br>
<div align="center">
<a href="homepage.php" ><button>กลับหน้าหลัก</button> </a>
</div>
</body>
</html>
