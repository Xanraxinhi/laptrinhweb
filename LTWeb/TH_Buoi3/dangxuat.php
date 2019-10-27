<?php 
	// Include database, session, general info
require_once '../conn.php';
// Xoá session
session_destroy();
// Trở về trang chủ
header('Location: http://localhost/LTweb/index.php');
$conn->close();
 ?>