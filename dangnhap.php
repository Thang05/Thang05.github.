<!DOCTYPE html>



<?php
//Khai báo sử dụng session
session_start();

 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
 

//Xử lý đăng nhập
if (isset($_POST['dangnhap']))
{
    //Kết nối tới database
    include('ket_noi.php');
    //Lấy dữ liệu nhập vào
    $tenkh = addslashes($_POST['']);
    $matkhau = addslashes($_POST['txtPassword']);

    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username || !$matkhau) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    // mã hóa pasword
    $matkhau = md5($matkhau);

    //Kiểm tra tên đăng nhập có tồn tại không
    $query = mysqli_query($conn,"SELECT tenkh, matkhau FROM dangki WHERE tenkh='$tenkh' and matkhau='$matkhau'");
    if (mysqli_num_rows($conn,$query) == 0) {
       echo "Email này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }



    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_array($conn,$query);

    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($matkhau != $row['password']) {
        echo '<script type="text/javascript">';
        echo ' sai mat khau")';  //not showing an alert box.
        echo '</script>';
    }
    else{
            echo '<script type="text/javascript">';
    echo ' alert("JavaScript Alert Box by PHP")';  //not showing an alert box.
    echo '</script>';
    }





    //Lưu tên đăng nhập
    $_SESSION['email'] = $email;
    echo "Xin chào " . $email . ". Bạn đã đăng nhập thành công. <a href='index.php'>Về trang chủ</a>";
    die();
    echo '<script type="text/javascript">';
    echo ' alert("JavaScript Alert Box by PHP")';  //not showing an alert box.
    echo '</script>';
}
?>
</html>