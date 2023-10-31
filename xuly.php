<?php
 
    // Nếu không phải là sự kiện đăng ký thì không xử lý
    if (!isset($_POST['txtUsername'])){
        die('Khong ket noi duoc');
    }
     
    //Nhúng file kết nối với database
    include('ket_noi.php');
          
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
          
    //Lấy dữ liệu từ file dangky.php
    $email      = addslashes($_POST['txtEmail']);
    $tenkh      = addslashes($_POST['txtUsername']);
    $matkhau    = addslashes($_POST['txtPassword']);
    
    $dienthoai  = addslashes($_POST['txtDienthoai']);
    $diachi     = addslashes($_POST['txtDiachi']);
    
          
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$email || !$tenkh || !$matkhau || !$dienthoai || !$diachi )
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
        // Mã khóa mật khẩu
        $matkhau = md5($matkhau);
       
     
    //Kiểm tra email có đúng định dạng hay không

if (!preg_match("/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/", $email))


    {
        echo "Email này không hợp lệ. Vui long nhập email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
    //Kiểm tra email đã có người dùng chưa
    if (mysqli_num_rows(mysqli_query($conn,"SELECT email FROM dangki WHERE email='$email'")) > 0)
    {
        echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    
          echo "$tenkh,$email,$matkhau,$dienthoai,$diachi";
    //Lưu thông tin thành viên vào bảng
     $addmember = mysqli_query($conn,"
        INSERT INTO dangki (
            tenkh,
            email,
            matkhau,
            dienthoai,
            diachi 
        )
        VALUES (
            '{$tenkh}',
            '{$email}',
            '{$matkhau}',        
            '{$dienthoai}',
            '{$diachi}'
        )
    ");
                          
    //Thông báo quá trình lưu
    if ($addmember)
        echo "Quá trình đăng ký thành công. <a href='index.php'>Về trang chủ</a>";
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";
?>
