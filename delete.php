<?php
	require('ket_noi.php');
	
	$id = $_GET['id'];
	
	$sql = "DELETE FROM san_pham WHERE id = " . $id;
	
	if ($conn->query($sql) === TRUE) {
		header('location: list.php');
	} else {
		echo "Error deleting record: " . $conn->error;
	}
	
	$conn->close();
?>