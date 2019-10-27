<?php 
	require_once 'conn.php';
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
	<link rel="stylesheet" href="css/table.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/index.css">

</head>
<body>
	<div class="container">
	<div class="layout">
			<?php include($_SERVER['DOCUMENT_ROOT']."/LTWeb/layout.php"); ?>
		</div>
	<a href="http://localhost/LTweb/TH_Buoi3/Bai3.php">thêm sản phẩm</a>
	<div class="col-md-6">
		<div class="wellcome">
			Chào bạn <b><?php echo $_SESSION['tendangnhap']. "</b> đã đăng nhập thành công !<br>";  ?> 
		</div>
		<?php  
				$user_id = $_SESSION['id'];
				$sql = "SELECT * FROM thanhvien WHERE id='$user_id'";
				$query = $conn->query($sql);
				$num_rows = mysqli_num_rows($query);
				if($num_rows==0)
				{
					echo "không có dữ liệu";
				}else{
				while ($data = mysqli_fetch_array($query)) {
			?>
		<div class="clearfix">
			<div class="left-md-3">
				<img width="220px" src="<?php echo $data['hinhanh'] ?>" alt="">
			</div>
			<div class="right-md-9 profile">
				<table >
					<tr><td>Name:</td><td><?php echo $data['tendangnhap'] ?></td></tr>
					<tr><td>Giới tính:</td><td><?php echo $data['gioitinh'] ?></td></tr>
					<tr><td>Nghề nghiệp:</td><td><?php echo $data['nghenghiep'] ?></td></tr>
					<tr><td>Sở thích:</td><td><?php echo $data['sothich'] ?></td></tr>
				</table>

				<div class="btn-logout">
					<button><a href="http://localhost/LTweb/TH_Buoi3/dangxuat.php">Đăng xuất</a></button>
				</div>
			</div>
		</div>
		<?php }} ?>
	</div>
	</div>	
</body>
</html>
</body>
</html>