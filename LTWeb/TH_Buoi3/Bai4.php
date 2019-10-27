<?php 
	require_once('../conn.php');
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
		<form action="suasanpham.php" method="POST" enctype="multipart/form-data">
		<div class="bai2">
		<table>
			<?php
				$sp_id = $_GET['id'];
				$sql = "SELECT * FROM sanpham where id='$sp_id'";
				$query = $conn->query($sql);
				$num_rows = mysqli_num_rows($query);
				while($data = mysqli_fetch_array($query)){
			?>
			<tr>
				<td><input type="hidden" value="<?php echo $_GET['id'] ?>" name="id"></td>
			</tr>
			<tr>
				<td>Tên sản phẩm</td>
				<td><input type="text" name="tensanpham" value="<?php echo $data['tensanpham'] ?>"></td>
			</tr>
			<tr>
				<td>Chi tiết sản phẩm</td>
				<td><textarea name="chitietsanpham" cols="60" rows="8"><?php echo $data['chitietsanpham'] ?></textarea></td>
			</tr>
			<tr>
				<td>Giá sản phẩm</td>
				<td><input type="text" name="giasanpham" value="<?php echo $data['giasanpham'] ?>">VND</td>
			</tr>
			<tr>
				<td>Hình mới</td>
				<td><input type="file" name="hinhsanpham"></td>
			</tr>
			<?php } ?>
			<tr>
				<td></td>
				<td><input type="submit" value="Cập nhật sản phẩm"><input type="reset" value="Làm lại"><button><a href="../sanpham.php">Trở về trang sản phẩm</a></button></td>

			</tr>
		</table>
		</div>
		</form>
	</div>
</body>
</html>