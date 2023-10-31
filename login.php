<?php
    include ("ket_noi.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style-login.css" />
<body>
<?php
$query=mysqli_query($conn,"SELECT `tenkh`FROM `dangki` WHERE `tenkh` = '$tenkh' and `matkhau` = '$matkhau'");
echo "Xin chào:" ."<h6>".$query. "</h6>";
?>

</body>

</html>