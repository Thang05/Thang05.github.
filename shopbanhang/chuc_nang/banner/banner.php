<?php

$tenmaychu='localhost';
$tentaikhoan='root';
$pass='';
$csdl='banhangdb';
$tv="select * from banner limit 0,1";
    $conn=mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Ko kết nối được');
	$tv_1=mysqli_query($conn,$tv);
	$tv_2=mysqli_fetch_array($tv_1, MYSQLI_BOTH);
	$link_hinh="hinh_anh/banner/".$tv_2['hinh'];	
	echo "<img src='".$link_hinh."' width='".$tv_2['rong']."' height='".$tv_2['cao']."' >";
?>