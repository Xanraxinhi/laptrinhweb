<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../css/table.css">
	<link rel="stylesheet" href="table.css">
	<link rel="stylesheet" href="/LTWeb/css/style.css">
</head>
<body>
	<div class="container">
		<div class="layout">
			<?php include($_SERVER['DOCUMENT_ROOT']."/LTWeb/layout.php"); ?>
		</div>
		
		<div class="bai2">
		<table >
			<tr style="">
				<td>Tên đăng nhập</td>
				<td><input type="text"></td>
			</tr>
			<tr>
				<td>Mật khẩu</td>
				<td><input type="text"></td>
			</tr>
			<tr>
				<td>Gõ lại mật khẩu</td>
				<td><input type="text"></td>
			</tr>
			<tr>
				<td>Hình đại diện</td>
				<td><input type="file"></td>
			</tr>
			<tr>
				<td>Giới tính</td>
				<td>
					<input type="radio" name="">Nam
					<input type="radio" name="">Nữ
					<input type="radio" name="">Khác
				</td>
			</tr>
			<tr>
				<td>Nghề nghiệp</td>
				<td><select name="" id="">
					<option value="">Học sinh</option>
					<option value="">Giáo viên</option>
					<option value="">Khác</option>
				</select></td>
			</tr>
			<tr>
				<td>Sở thích</td>
				<td>
					<input type="checkbox">Thể thao
					<input type="checkbox">Du lịch
					<input type="checkbox">Âm nhạc
					<input type="checkbox">Thời trang
				</td>
			</tr>
			<tr>
				<td>Gởi</td>
				<td><input type="submit" value="Đăng ký"><input type="reset" value="Làm lại"></td>
				
			</tr>
		</table>
		</div>
	</div>
</body>
</html>