<!DOCTYPE html>
<html>
<head>
	<title>Thêm sinh viên</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
	<h1>Thêm sinh viên</h1><br>
	<form action="store" method="post">
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		<table style="font-size: 20px;">
			<tr>
				<td >Mã sinh viên  </td>
				<td style="padding-left: 50px;"><input type="text" name="msv"></td>
			</tr>
			<tr>
				<td style="padding-top: 10px;">Họ tên  </td>
				<td style="padding-left: 50px;padding-top: 10px;">
					<input type="text" name="name">
				</td>
			</tr>
			
			<tr>
				<td style="padding-top: 10px;">Lớp  </td>
				<td style="padding-left: 50px;padding-top: 10px;"><input type="text" name="class"></td>
			</tr>
			<tr>
				<td style="padding-top: 10px;">Số điện thoại  </td>
				<td style="padding-left: 50px;padding-top: 10px;"><input type="text" name="phone"></td>
			</tr>
			<tr>
				<td style="padding-top: 10px;">Địa chỉ  </td>
				<td style="padding-left: 50px;padding-top: 10px;"><input type="text" name="address"></td>
			</tr>
			<tr>
				<td style="padding-top: 10px;"></td>
				<td style="padding-left: 50px;padding-top: 10px;"><button type="submit" class="btn btn-success">Thêm sinh viên</button></td>
			</tr>
		</table>
	</form>
	<a href="view">View Product List</a>
</body>
</html>
	