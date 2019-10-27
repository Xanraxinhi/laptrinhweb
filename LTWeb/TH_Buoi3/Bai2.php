<?php
	require_once('../conn.php');
	if(isset($_SESSION['tendangnhap']))
	{
		header('location: ../profile.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../css/table.css">
	<link rel="stylesheet" href="css2.css">
	<link rel="stylesheet" href="/LTWeb/css/style.css">
</head>
<body>
	<div class="container">
		<div class="layout">
			<?php include($_SERVER['DOCUMENT_ROOT']."/LTWeb/layout.php"); ?>
		</div>
		<form action="../TH_Buoi3/dangnhap.php" method="POST" enctype="multipart/form-data">
			<div class="bai2">
		<table>
			<tr>
				<td>Tên đăng nhập</td>
				<td><input type="text" name="tendangnhap"></td>
			</tr>
			<tr>
				<td>Mật khẩu</td>
				<td><input type="password" name="matkhau"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Đăng nhập"><input type="reset" value="Làm lại"></td>
				
			</tr>
		</table>
		</div>
		</form>
	</div>
</body>
</html>