<!DOCTYPE html>


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
            <td class="text-center">
                <h1>Trang đăng ký thành viên</h1>
            </td>

        </tr>
        <tr>

            <form action="xuly.php" method="POST">
                <table cellpadding="0" cellspacing="0" border="1">
                    <tr>
                        <td>
                            Tên khách hàng :
                        </td>
                        <td>
                            <input type="text" name="txtUsername" size="50" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email :
                        </td>
                        <td>
                            <input type="text" name="txtEmail" size="50" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Mật khẩu :
                        </td>
                        <td>
                            <input type="password" name="txtPassword" size="50" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Điện thoại
                        </td>
                        <td>
                            <input type="text" name="txtDienthoai" size="50" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Địa chỉ :
                        </td>
                        <td>
                            <input type="text" name="txtDiachi" size="50" />
                        </td>
                    </tr>

                </table>
                <input type="submit" value="Đăng ký" />
                <input type="reset" value="Nhập lại" />
                <a href='formlogin.php' title='Đăng nhập'>Đăng nhập</a>
            </form>

<!--            <td width="15%" valign="top" >-->
<!--                --><?php
//                include ("chuc_nang/dangnhap/formlogin.php");
//                include("chuc_nang/gio_hang/vung_gio_hang.php");
//                include("chuc_nang/san_pham/noi_bat.php");
//                include("chuc_nang/quang_cao/phai.php");
//                ?>
<!--            </td>-->
        </tr>
        <tr>
            <td colspan="3"><?php include("chuc_nang/footer/footer.php"); ?></td>
        </tr>
    </table>
</center>
</body>
</html>