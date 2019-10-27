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
	<link rel="stylesheet" href="/LTWeb/css/style.css">
</head>
<body>
	<div>
		<div>
			<?php include($_SERVER['DOCUMENT_ROOT']."/LTWeb/layout.php"); ?>
		</div>
		<form action="../TH_Buoi3/dangky.php" method="POST" enctype="multipart/form-data">
			<div class="bai2">
		<table>
			<tr >
				<td>Tên đăng nhập</td>
				<td><input type="text" name="tendangnhap"></td>
			</tr>
			<tr>
				<td>Mật khẩu</td>
				<td><input type="password" name="matkhau"></td>
			</tr>
			<tr>
				<td>Gõ lại mật khẩu</td>
				<td><input type="text" name=""></td>
			</tr>
			<tr>
				<td>Hình đại diện</td>
				<td><input type="file" name="hinhanh"></td>
			</tr>
			<tr>
				<td>Giới tính</td>
				<td>
					<input type="radio" value="Nam" name="gioitinh">Nam
					<input type="radio" value="Nữ" name="gioitinh">Nữ
					<input type="radio" value="Khác" name="gioitinh">Khác
				</td>
			</tr>
			<tr>
				<td>Nghề nghiệp</td>
				<td><select name="nghenghiep" >
					<option value="Học sinh">Học sinh</option>
					<option value="Giáo viên">Giáo viên</option>
					<option value="Khác">Khác</option>
				</select></td>
			</tr>
			<tr>
				<td>Sở thích</td>
				<td>
					<input type="checkbox" name="check_list[]" value="Thể thao">Thể thao
					<input type="checkbox" name="check_list[]" value="Du lịch">Du lịch
					<input type="checkbox" name="check_list[]" value="Âm nhạc">Âm nhạc
					<input type="checkbox" name="check_list[]" value="Thời trang">Thời trang
				</td>
			</tr>
			<tr>
				<td>Gởi</td>
				<td><input type="submit" value="Đăng ký"><input type="reset" value="Làm lại"></td>
				
			</tr>
		</table>
		</div>
		</form>
	</div>
</body>
</html>