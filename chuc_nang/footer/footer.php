<?php
$tenmaychu='localhost';
$tentaikhoan='root';
$pass='';
$csdl='banhangdb';
//$link = mysqli_connect("127.0.0.1", "my_user", "my_password", "my_db");
$conn=mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Ko kết nối được');

	$tv="select * from footer limit 0,1";
	$tv_1=mysqli_query($conn,$tv);
	$tv_2=mysqli_fetch_array($tv_1, MYSQLI_ASSOC);
	echo $tv_2['html'];
?>