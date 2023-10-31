<?php session_start(); 
 //remove ss
session_unset();
// destroy ss
session_destroy();


header('Location: index.php');
?>
