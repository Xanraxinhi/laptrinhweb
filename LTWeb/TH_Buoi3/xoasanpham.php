<?php 
	require_once '../conn.php';
	if(!isset($_SESSION['tendangnhap']))
	{
		header('location: http://localhost/LTweb/TH_Buoi3/bai2.php');
	}

	$sp_id = $_GET['id'];

	$sql = "DELETE from sanpham WHERE id='$sp_id'";
	$conn->query($sql);

	header('location: ../sanpham.php');
 ?>