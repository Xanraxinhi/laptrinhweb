<?php
require_once '../conn.php';

$tendangnhap = $_POST['tendangnhap'];
$matkhau = $_POST['matkhau'];
$matkhau = md5($matkhau);
$tendangnhap = strip_tags($tendangnhap);
$tendangnhap = addslashes($tendangnhap);
$matkhau = strip_tags($matkhau);
$matkhau = addslashes($matkhau);

$sql="SELECT id,tendangnhap,matkhau FROM thanhvien WHERE tendangnhap='$tendangnhap'and matkhau='$matkhau' ";
$query = $conn->query($sql);
$member = mysqli_fetch_array($query);
$num_rows = mysqli_num_rows($query);
if($num_rows==0)
{
	echo "Không tồn tại user này.";
}else{
	$_SESSION['tendangnhap'] = $member['tendangnhap'];
	$_SESSION['id'] = $member['id'];

	$conn->close();
	header('Location: http://localhost/LTweb/profile.php');
}	

?>