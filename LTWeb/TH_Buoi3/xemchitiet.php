<?php 
	require_once '../conn.php';
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
	<link rel="stylesheet" href="../css/sanpham.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<div class="container">
	<div class="layout">
			<?php include($_SERVER['DOCUMENT_ROOT']."/LTWeb/layout.php"); ?>
		</div>
	<div id="sanpham">
		<table>
			<tr><td colspan="6" style="text-align: center;"><h3>Chào <?php echo $_SESSION['tendangnhap'] ?></h3></td></tr>
			<?php  
				$user_id = $_GET['id'];
				$sql = "SELECT * FROM sanpham WHERE id='$user_id'";
				$query = $conn->query($sql);
				$num_rows = mysqli_num_rows($query);
				if($num_rows==0)
				{
					echo "không có dữ liệu";
				}else{
				while ($data = mysqli_fetch_array($query)) {
			?>
			<tr>
				<th>Tên sản phẩm</th>
				<td><?php echo $data['tensanpham'] ?></td>
			</tr>
			<tr>
				<th>Giá sản phẩm</th>
				<td><?php echo $data['giasanpham'] ?></td>
			</tr>
			<tr>
				<th>Chi tiết sản phẩm</th>
				<td width="600px"><?php echo $data['chitietsanpham'] ?></td>
			</tr>
			<tr>
				<th>Hình sản phẩm</th>
				<td><img width="180px" src="../img_sanpham/<?php echo $data['hinhsanpham'] ?>"></td>
			</tr>
			<?php }} ?>
			<tr><th colspan="6">
					<button><a href="http://localhost/LTweb/sanpham.php">Trở về</a></button>
			</th></tr>
			
		</table>
	</div>
	</div>	
</body>
</html>
</body>
</html>