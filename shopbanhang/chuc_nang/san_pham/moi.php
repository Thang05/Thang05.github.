<div class="danhmuc">
	<div class="tendanhmuc">SẢN PHẨM MỚI</div>
<center>
	<?php
    $tenmaychu='localhost';
    $tentaikhoan='root';
    $pass='';
    $csdl='banhangdb';
    //$link = mysqli_connect("127.0.0.1", "my_user", "my_password", "my_db");
    $conn=mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Ko kết nối được');

    $tv="select id,ten,hinh_anh from san_pham order by id desc limit 0,3";
		$tv_1=mysqli_query($conn,$tv);
		while($tv_2=mysqli_fetch_array($tv_1, MYSQLI_BOTH))
		{
			$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
			$link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];
			echo "<a href='$link_chi_tiet' >";
				echo "<img src='$link_anh' width='100px' >";
			echo "</a>";
			echo "<br><br>";
			echo $tv_2['ten'];
			echo "<br>";
			echo "<br>";
		}
	?>
</center>
</div>
