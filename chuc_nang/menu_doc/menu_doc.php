<div class="danhmuc">
	<div class="tendanhmuc">Danh Mục</div>
	<div class="noidung">
<?php

$tenmaychu='localhost';
$tentaikhoan='root';
$pass='';
$csdl='banhangdb';
//$link = mysqli_connect("127.0.0.1", "my_user", "my_password", "my_db");
$conn=mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Ko kết nối được');

	$tv="select * from menu_doc order by id";
	$tv_1=mysqli_query($conn,$tv);
	echo "<div class='menu_doc' >";
	while($tv_2=mysqli_fetch_array($tv_1, MYSQLI_ASSOC))
	{
		$link="?thamso=xuat_san_pham&id=".$tv_2['id'];
		echo "<a href='$link'>";
			echo $tv_2['ten'];
		echo "</a>";
	}
	echo "</div>";
?></div>
</div>