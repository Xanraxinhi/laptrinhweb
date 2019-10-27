<!DOCTYPE html>
<html lang="en">
<head>
	<meta equiv="refresh" content="5">
	<meta charset="UTF-8">
	<title>Bai 1</title>
	<link rel="stylesheet" href="/LTWeb/css/style.css">
	<style>
		table{
			border-collapse: collapse;
			margin-top: 100px;
			width: 100%;
		}
		th, td{
			border: 1px solid;
			text-align: center;
		}
		th{
			background-color: #D0E8D7;
		}
		td:hover{
			background-color: #8FB0CC;
		}
		.hover:hover{
			background-color: #D39174;
		}
	</style>
</head>
<body>
	<div class="layout">
			<?php include($_SERVER['DOCUMENT_ROOT']."/LTWeb/layout.php"); ?>
		</div>
	<div id="body">
		
		<table  id="lich">
			<tr>
				<th></th>
				<th>thứ hai</th>
				<th>thứ ba</th>
				<th>thứ tư</th>
				<th>thứ năm</th>
				<th>thứ sáu</th>
				<th>thứ bảy</th>
			</tr>
			<tr>
				<td>Tiết 1</td>
				<td rowspan="3" class="hover">Lập trình web</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>Tiết 2</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>Tiết 3</td>
				<td rowspan="2" class="hover">Phát triển phần mềm tác nghiệp</td>
				<td rowspan="3" class="hover">Quản trị cơ sở dữ liệu</td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>Tiết 4</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>Tiết 5</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>Tiết 6</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>Tiết 7</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>Tiết 8</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>Tiết 9</td>
				<td></td>
				<td></td>
				<td class="hover">Cố vấn học tập sinh hoạt lớp</td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>Tiết 10</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>

	</div>
