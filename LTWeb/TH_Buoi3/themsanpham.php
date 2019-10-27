<?php 
require_once '../conn.php';

$tensanpham = $_POST['tensanpham'];
$chitietsanpham = $_POST['chitietsanpham'];
$giasanpham = $_POST['giasanpham'];
$path = $_FILES['hinhsanpham']['name'];
$id = $_SESSION['id'];
$sql = "INSERT INTO sanpham(tensanpham,chitietsanpham,giasanpham,hinhsanpham,thanhvien_id) VALUES ('$tensanpham','$chitietsanpham','$giasanpham','$path','$id')";

$conn->query($sql);
$local_image = "../img_sanpham/" . $_FILES['hinhsanpham']['name'];
move_uploaded_file($_FILES['hinhsanpham']['tmp_name'],$local_image);
$conn->close();

header('Location: http://localhost/LTweb/sanpham.php');
exit();
?>