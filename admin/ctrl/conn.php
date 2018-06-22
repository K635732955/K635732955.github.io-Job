<?php
$servername="127.0.0.1";
$uname="root";
$upwd="KIM9312";
$db="kim";
$conn=new mysqli($servername,$uname,$upwd,$db);
if ($conn->connect_error){
    die("连接失败：".$conn->connect_error);
}
mysqli_query($conn,"set names utf8");
?>