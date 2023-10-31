<?php
$tenmaychu='localhost';
$tentaikhoan='root';
$pass='';
$csdl='shopbanhangdb.sql';
//$link = mysqli_connect("127.0.0.1", "my_user", "my_password", "my_db");
$conn=mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Ko kết nối được');
mysqli_select_db($conn,$csdl);
mysqli_set_charset($conn,'utf8');
mysqli_query($conn,"SET NAMES 'UTF8'");
?>