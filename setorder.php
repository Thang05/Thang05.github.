<?php
require('ket_noi.php');

$id = $_GET['id'];

//$sql = "DELETE FROM san_pham WHERE id = " . $id;
$sql = "UPDATE `hoa_don` SET `trang_thai` = 'OK' WHERE `hoa_don`.`id` =". $id;
if ($conn->query($sql) === TRUE) {
    header('location: checkorder.php');
} else {
    echo "Error OK record: " . $conn->error;
}

$conn->close();
?>