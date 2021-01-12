<div style="margin-left: 50px;">
	<div style="padding-top: 20px;"><a href="student">Thêm sinh viên</a></div>
	<h1>Danh sách sinh viên</h1>
	<table border="1" style="border: 1px solid grey;border-collapse: collapse;">
		<tr style="font-size:20px; ">
			<td style="padding: 20px;">STT</td>
			<td style="padding: 20px;">Mã sinh viên</td>
			<td style="padding: 20px;">Họ tên</td>
			<td style="padding: 20px;">Lớp</td>
			<td style="padding: 20px;">Số điện thoại</td>
			<td style="padding: 20px;">Địa chỉ</td>
			<td style="padding: 20px;">Sửa</td>
			<td style="padding: 20px;">Xóa</td>
		</tr>
		@foreach($student as $row)
		<tr style="font-size: 20px;">
			<td style="padding: 20px;">{{$row->Id}}</td>
			<td style="padding: 20px;">{{$row->MSV}}</td>
			<td style="padding: 20px;">{{$row->HọTên}}</td>
			<td style="padding: 20px;">{{$row->Lớp}}</td>
			<td style="padding: 20px;">{{$row->SĐT}}</td>
			<td style="padding: 20px;">{{$row->ĐịaChỉ}}</td>
			<td style="padding: 20px;"><button><a href="getsua/{{$row->Id}}">Edit</a></button></td>
			<td style="padding: 20px;"><button><a href="xoa/{{$row->Id}}">Delete</a></button></td>
		</tr>
		@endforeach
	</table>
</div>