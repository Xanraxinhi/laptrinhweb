<?php 
require_once '../conn.php';

$tensanpham = $_POST['tensanpham'];
$chitietsanpham = $_POST['chitietsanpham'];
$giasanpham = $_POST['giasanpham'];
$path = "../img_sanpham/" . $_FILES['hinhsanpham']['name'];
$id = $_SESSION['id'];
$sp_id = $_POST['id'];
echo $tensanpham . "<br>";
echo $chitietsanpham . "<br>";
echo $giasanpham . "<br>";
echo $path. "<br>";
echo $id. "<br>";
echo $sp_id;

$file_img = "SELECT hinhsanpham FROM sanpham WHERE id='$sp_id' ";
$query = $conn->query($file_img);
$namefile = "";
while ( $data = mysqli_fetch_array($query)) {
	$namefile = $data['hinhsanpham'];
}
$path_old = "../img_sanpham/".$namefile;
$sql = "UPDATE sanpham SET tensanpham='$tensanpham',chitietsanpham='$chitietsanpham',giasanpham='$giasanpham',hinhsanpham='$path',thanhvien_id='$id' WHERE id='$sp_id'";

$conn->query($sql);
unlink($path_old);
move_uploaded_file($_FILES['hinhsanpham']['tmp_name'],$path);
$conn->close();

header('Location: ../sanpham.php');
exit();
?>