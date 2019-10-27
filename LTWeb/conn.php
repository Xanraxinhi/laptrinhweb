<?php  
	session_start();
	$conn = new mysqli("localhost","root","","ltweb") or die("Không thể kết nối database");
	$conn->set_charset("utf8");
?>