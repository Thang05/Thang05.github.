<?php
	session_start();
    include("ket_noi.php");
    include("chuc_nang/ham/ham.php");

	if(isset($_POST['thong_tin_khach_hang']))
	{
		include("chuc_nang/gio_hang/thuc_hien_mua_hang.php");
	}
	if(isset($_POST['cap_nhat_gio_hang']))
	{
		include("chuc_nang/gio_hang/cap_nhat_gio_hang.php");
		trang_truoc();
	}
//	if (!isset($_SESSION['isLogginIn'])){
//	    header('Location:admin.php ');
//    }

?> 
<html>
	<head>
		<meta charset="UTF-8">
		<title>Web bán hoa</title>

        <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css"/>

		<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="giao_dien/giao_dien.css">

	</head>
	<body>

<!--    --><?php
//    if (isset($_SESSION['email']) && $_SESSION['email']){
//        echo 'Bạn đã đăng nhập với tên là '.$_SESSION['email']."<br/>";
//        echo 'Click vào đây để <a href="logout.php">Logout</a>';
//    }
//    else{
//        echo 'Bạn chưa đăng nhập';
//    }
//    ?>

		<center>
			<table width="100%">
				<tr>
					<td colspan="3"><?php include("chuc_nang/banner/banner.php"); ?></td>
				</tr>
				<tr>
					<td colspan="3" height="50px" >
						<?php
							include("chuc_nang/menu_ngang/menu_ngang.php");
						?>
					</td>
				</tr>
				<tr>
					<td width="15%" valign="top" >
					<?php
						include("chuc_nang/menu_doc/menu_doc.php");
						include("chuc_nang/san_pham/moi.php");
						include("chuc_nang/quang_cao/trai.php");
					?>
					</td>
					<td width="62%" valign="top" >
						<?php
							include("chuc_nang/dieu_huong.php");
						?>
					</td>
					<td width="15%" valign="top" >

                                   <?php if (isset($_SESSION['isLoggedIn'])) {
                           //$query=mysqli_query($conn,"SELECT `tenkh` FROM `dangki` WHERE `email` = '$email' ");
//                           $tml = "tml nào đó!";

                          // echo "Hi there!" . "<h4 style=\"color:#ff00bf;\">" . $_COOKIE["tenkh"] . "</h4>";
                           echo "Xin Chào!" . "<h4 style=\"color:#ff00bf;\">" . $_SESSION['tenkh'] . "</h4>";// dung k?
                           echo "<a HREF='logout.php'>Logout</a>";
                                      // echo "Welcome " . $_COOKIE["name"] . "<br />";

                                    }
                                    else {

//                           ?>

                            <button onclick="window.location.href='formlogin.php'">Đăng nhập</button>
                                        <a href='dangky.php' title='Đăng ký'>Đăng ký</a>
                        <?php   }?>
<!--                        <button onclick="window.location.href='formlogin.php'">Đăng nhập</button>-->
<!--                        <button onclick="window.location.href='/page2'">Đăng ký</button>-->
					<?php
                        //include ("chuc_nang/dangnhap/formlogin.php");
						include("chuc_nang/gio_hang/vung_gio_hang.php");
						include("chuc_nang/san_pham/noi_bat.php");
						include("chuc_nang/quang_cao/phai.php");
					?>
					</td>
				</tr>
				<tr>
					<td colspan="3"><?php include("chuc_nang/footer/footer.php"); ?></td>
				</tr>
			</table>
		</center>
	</body>
</html>

=======================================================================ooo000ooo================================================================================

