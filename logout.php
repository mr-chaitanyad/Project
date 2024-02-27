<?php session_start(); 
session_destroy();
echo "<script>alert('Logout success....');</script>";
echo "<script>window.location='login.php';</script>";
?>