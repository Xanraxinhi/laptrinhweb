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
	<link rel="stylesheet" href="css/sanpham.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
	<div class="layout">
			<?php include($_SERVER['DOCUMENT_ROOT']."/LTWeb/layout.php"); ?>
		</div>
	<div id="sanpham">
		<table>
			<tr><td colspan="6" style="text-align: center;"><h3>Chào <?php echo $_SESSION['tendangnhap'] ?></h3></td></tr>
			<tr>
				<th>STT</th>
				<th>Tên sản phẩm</th>
				<th>Giá sản phẩm</th>
				<th colspan="3">Lựa chọn</th>
			</tr>
			<?php  
				$stt=1;
				$user_id = $_SESSION['id'];
				$sql = "SELECT * FROM sanpham WHERE thanhvien_id='$user_id'";
				$query = $conn->query($sql);
				$num_rows = mysqli_num_rows($query);
				if($num_rows==0)
				{
					echo "không có dữ liệu";
				}else{
				while ($data = mysqli_fetch_array($query)) {
			?>
			<tr>
				<td><?php echo $stt++?></td>
				<td><?php echo $data['tensanpham'] ?></td>
				<td><?php echo $data['giasanpham'] ?></td>
				<td><a href="TH_Buoi3/xemchitiet.php?id=<?php echo $data['id'] ?>">Xem chi tiết</a></td>
				<td><a href="TH_Buoi3/Bai4.php?id=<?php echo $data['id'] ?>"><img width="20px" src="icon/edit.png" alt=""></a></td>
				<td><a href="TH_Buoi3/xoasanpham.php?id=<?php echo $data['id'] ?>"><img width="20px" src="icon/delete.png" alt=""></a></td>
			</tr>
			
			<?php }} ?>
			<tr><th colspan="6">
					<button><a href="http://localhost/LTweb/TH_Buoi3/dangxuat.php">Đăng xuất</a></button>
			</th></tr>
			
		</table>
	</div>
	</div>	
</body>
</html>
</body>
</html>