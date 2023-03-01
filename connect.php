<?php 
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "shop";

//create connection
$conn = mysqli_connect($severname,$username,$password,$dbname);
mysqli_query($conn,'set names utf8');
if(!$conn)
{
    die ("connection filed :".mysqli_connect_error());
}