<div style="margin-top:7px; margin-bottom:7px;">
<div class="navbar-header"> <a href="index.php" class="navbar-brand">Home</a> </div>
<nav class="collapse navbar-collapse" id="bs-navbar">
	<ul class="nav navbar-nav"> 
<?php

$tenmaychu='localhost';
$tentaikhoan='root';
$pass='';
$csdl='banhangdb';
//$link = mysqli_connect("127.0.0.1", "my_user", "my_password", "my_db");
$conn=mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Ko kết nối được');

$tv="select id,ten,loai_menu from menu_ngang order by id";
	$tv_1=mysqli_query($conn,$tv);
	
	
	while($tv_2=mysqli_fetch_array($tv_1))
	{
		if($tv_2['loai_menu']==""){$link_menu="?thamso=xuat_mot_tin&id=".$tv_2['id'];}
		if($tv_2['loai_menu']=="san_pham"){$link_menu="?thamso=xuat_san_pham_2";}
		echo "<li>";
		echo "<a href='$link_menu'>";
			echo $tv_2['ten'];
		echo "</a>";
		echo"</li>";
	}
	
?>
</ul>
 	

 

      
     <ul class="nav navbar-nav navbar-right">
     
<form class="navbar-form navbar-left">
	<div class="form-group">
    <input type="hidden" name="thamso" value="tim_kiem" >
    <input type="text" name="tu_khoa" value="" class="form-control" placeholder="Nhập tên sản phẩm" >
    </div>
    
    <button type="submit" class="btn btn-default">Seach</button>
</form>
      <li><a href="?thamso=gio_hang">Giỏ hàng</a></li>
       
         </ul>
          </nav>
 </div>         
          
        