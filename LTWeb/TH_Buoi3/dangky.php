<?php
require_once '../conn.php';

$tendangnhap = $_POST['tendangnhap'];
$matkhau = $_POST['matkhau'];
$matkhau = md5($matkhau);
$duongdan ="../image/" . $_FILES['hinhanh']['name'];
$gioitinh = $_POST['gioitinh'];
$nghenghiep = $_POST['nghenghiep'];
$sothich = "";
if(!empty($_POST['check_list'])){
	foreach($_POST['check_list'] as $selected){
		$sothich = $sothich . $selected." ";
	}
}
$sql="INSERT INTO thanhvien(tendangnhap,matkhau,hinhanh,gioitinh,nghenghiep,sothich) VALUES ('$tendangnhap','$matkhau','$duongdan','$gioitinh','$nghenghiep','$sothich')";
$conn->query($sql);
$sqldk="SELECT id,tendangnhap FROM thanhvien WHERE tendangnhap='$tendangnhap'";
$query = $conn->query($sqldk);
$member = mysqli_fetch_array($query);
move_uploaded_file($_FILES['hinhanh']['tmp_name'],$duongdan);
$conn->close();


function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}
$_SESSION['tendangnhap']=$member['tendangnhap'];
$_SESSION['id']=$member['id'];
Redirect('http://localhost/LTweb/profile.php', false);
?>