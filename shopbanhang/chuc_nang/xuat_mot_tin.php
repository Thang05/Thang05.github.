<?php
$tenmaychu='localhost';
$tentaikhoan='root';
$pass='';
$csdl='banhangdb';
//$link = mysqli_connect("127.0.0.1", "my_user", "my_password", "my_db");
$conn=mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Ko kết nối được');

	$id=$_GET['id'];
	$tv="select * from menu_ngang where id='$id'";
	$tv_1=mysqli_query($conn,$tv);
	$tv_2=mysqli_fetch_array($tv_1,MYSQLI_ASSOC);
	echo "<h1>";
		echo $tv_2['ten'];
	echo "</h1>";
	echo $tv_2['noi_dung'];
?>