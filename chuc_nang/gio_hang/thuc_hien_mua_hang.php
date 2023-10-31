<?php
$tenmaychu='localhost';
$tentaikhoan='root';
$pass='';
$csdl='banhangdb';
//$link = mysqli_connect("127.0.0.1", "my_user", "my_password", "my_db");
$conn=mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Ko kết nối được');

	if(isset($_SESSION['id_them_vao_gio']))
	{
		$ten_nguoi_mua=trim($_POST['ten_nguoi_mua']);
		$email=trim($_POST['email']);
		$dien_thoai=trim($_POST['dien_thoai']);
		$dia_chi=trim(nl2br($_POST['dia_chi']));
		$noi_dung=nl2br($_POST['noi_dung']);
		if($ten_nguoi_mua!="" and $dien_thoai!="" and $dia_chi!="")
		{
            $tong_cong=0;
			$hang_duoc_mua="";
			for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
			{
                $hang_duoc_mua=$hang_duoc_mua.$_SESSION['id_them_vao_gio'][$i]." n ".$_SESSION['sl_them_vao_gio'][$i]."__";

                $tv="select id,ten,gia from san_pham where id='".$_SESSION['id_them_vao_gio'][$i]."'";
                $tv_1=mysqli_query($conn, $tv);
                $tv_2=mysqli_fetch_array($tv_1, MYSQLI_BOTH);

                $tien=$tv_2['gia']*$_SESSION['sl_them_vao_gio'][$i];
                $tong_cong=$tong_cong+$tien;

			}
			$tv="INSERT INTO hoa_don (
            id ,
            ten_nguoi_mua ,
            email ,
            dia_chi ,
            dien_thoai ,
            noi_dung ,
            hang_duoc_mua,
            tong_cong
            )
            VALUES (
            NULL ,
            '$ten_nguoi_mua',
            '$email',
            '$dia_chi',
            '$dien_thoai',
            '$noi_dung',
            '$hang_duoc_mua',
            '$tong_cong'
            );";
			mysqli_query($conn,$tv);
			unset($_SESSION['id_them_vao_gio']);
			unset($_SESSION['sl_them_vao_gio']);
			thong_bao_html_roi_chuyen_trang("Cảm ơn bạn đã mua hàng tại web site chúng tôi","index.php");
		}
		else 
		{
			thong_bao_html("Không được bỏ trống tên người mua , điện thoại , địa chỉ");
			trang_truoc();
			exit();
		}
	}
?>