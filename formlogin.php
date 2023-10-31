<?php
include("ket_noi.php");
ob_start();

?>

<?php
session_start();


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

?>




<html>
<head>
    <meta charset="UTF-8">
    <title>Trang đăng nhập</title>

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
                <h1>Trang đăng nhập</h1>
            </td>

        </tr>


        <form action=''do='login' method='POST'>
            <table cellpadding='0' cellspacing='0' border='1'>
                <tr>
                    <td>
                        Tên KH :
                    </td>
                    <td>
                        <input type='text' name='txtUsername' />
                    </td>
                </tr>
                <tr>
                    <td>
                        Mật khẩu :
                    </td>
                    <td>
                        <input type='password' name='txtPassword' />
                    </td>
                </tr>
            </table>
            <input type='submit' name="login" value='Đăng nhập' />
            <a href='dangky.php' title='Đăng ký'>Đăng ký</a>





            <!--            //thuc hien check dang nhap-->
<!--            --><?php
//            if(isset($_POST['login'])){
//            $email = $_POST['txtEmail'];
//            $matkhau = $_POST['txtPassword'];
//            $sql="select * from dangki where email='$email' and password='$matkhau' limit 1 ";
//            $row=mysqli_query($sql);
//            $count=mysqli_num_rows($row);
//            if($count>0){
//            $_SESSION['dangnhap']=$email;
//                echo '<script type="text/javascript">';
//    echo ' alert("dung roi")';  //not showing an alert box.
//    echo '</script>';
//}
////            header('location:index.php');
//            }else{
//
//                echo '<script type="text/javascript">';
//    echo ' alert("sai roi")';  //not showing an alert box.
//    echo '</script>';
//}
//            header('location:formlogin.php');
            //}
            //}
            ?>

            <!-- Xử lý đăng nhập -->
            <?php
            if(isset($_POST['login'])){
                $tenkh = addslashes($_POST["txtUsername"]);
                $matkhau = addslashes($_POST["txtPassword"]);

                if (!$tenkh || !$matkhau) {
                    echo '<p style="color: #f90606b3">*Vui lòng nhập đầy đủ thông tin</p>';
                    exit;
                }

              //  $tv="select count(*) from dangki where tenkh='$tenkh' and matkhau='$matkhau' ";
		        //$tv_1=mysqli_query($conn,$tv);
		
                $query=mysqli_query($conn,"SELECT `tenkh`FROM `dangki` WHERE `tenkh` = '$tenkh' ");
                // $query=mysqli_query($conn,"SELECT `tenkh`,`matkhau`,`role` FROM dangki WHERE tenkh = '$tenkh' and matkhau='$matkhau' ");
                if (mysqli_num_rows($query) == 0) {
                    echo '<p style="color: #f90606b3">*Tài khoản không tồn tại</p>';
                    exit;
                }
                $row = mysqli_fetch_array($query);
               // if ($matkhau != $row['matkhau']) {
                if ( $row['matkhau'] != 0) {
                    echo '<p style="color: #f90606b3">*Sai mat khau nhap lai di ma</p>';

                    exit;
                }


                //$_SESSION['email'] = $row['email'];
                $_SESSION['tenkh'] = $row['tenkh'];
                setcookie("tenkh",$_SESSION['tenkh'],time()+3600);
                $_SESSION['isLoggedIn']=1;
                if ( $row['role'] )
                {
//                    echo '<script type="text/javascript">';
//                    echo ' alert("hello admin")';  //not showing an alert box.
//                    echo '</script>';
                    ?>
                    <script type='text/javascript'>alert('hello admin');</script>";
                <?php
                    header('location:list.php');
                    exit;
                }
                header('location:index.php');
                ob_end_flush();
                //die();
            }
            ?>
            

<!--            <a href='dangky.php' title='Đăng ký'>Đăng ký</a>-->


        </form>
    </body>