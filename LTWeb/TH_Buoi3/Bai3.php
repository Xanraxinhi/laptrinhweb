<?php 
	session_start();
	if(!isset($_SESSION['tendangnhap']))
	{
		header('location: http://localhost/LTweb/TH_Buoi3/bai2.php');
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../css/table.css">
	<link rel="stylesheet" href="/LTWeb/css/style.css">
</head>
<body>
	<div class="container">
		<div class="layout">
			<?php include($_SERVER['DOCUMENT_ROOT']."/LTWeb/layout.php"); ?>
		</div>
		<form action="themsanpham.php" method="POST" enctype="multipart/form-data">
		<div class="bai2">
		<table>
			<tr>
				<td>Tên sản phẩm</td>
				<td><input type="text" name="tensanpham"></td>
			</tr>
			<tr>
				<td>Chi tiết sản phẩm</td>
				<td><textarea name="chitietsanpham" cols="30" rows="5"></textarea></td>
			</tr>
			<tr>
				<td>Giá sản phẩm</td>
				<td><input type="text" name="giasanpham">VND</td>
			</tr>
			<tr>
				<td>Hình sản phẩm</td>
				<td><input type="file" name="hinhsanpham"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Lưu sản phẩm"><input type="reset" value="Làm lại"></td>
				
			</tr>
		</table>
		</div>
		</form>
	</div>
</body>
</html>