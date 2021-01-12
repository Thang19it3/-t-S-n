@extends('admin.layout.index')

@section('content')
<div>
		<div id="tintuc" class="container" style="width: 1000px;">
			<br>
			<table class="table table-striped" style="width: 700px;">
				@if(Session::has('theloai_delete'))
				<div class="alert alert-success" role='alert'>
					{{Session::get('theloai_delete')}}
				</div>
				@endif
				<h1>Loại Tin</h1>
				<a href="http://127.0.0.1:8000/admin/loaitin/them" class="btn btn-success">ADD</a>
				<thead>
					<tr>
						<th style="color: black;">ID</th>
						<th style="color: black;">Id_Thể Loại</th>
						<th style="color: black;">Loại Tin</th>
						<th style="color: black;">ACtion</th>
					</tr>
				</thead>
				<tbody>
					@foreach($loaitin as $key1)
					<tr>
						<td style="color: black;">{{$key1->id_LoaiTin}}</td>
						<td style="color: black;">{{$key1->TheLoai_id}}</td>
						<td style="color: black;">{{$key1->TenLoaiTin}}</td>
						<td>
							<a href="http://127.0.0.1:8000/admin/loaitin/xoa/{{$key1->id_LoaiTin}}" class="btn btn-danger">Delete</a>
							<a href="http://127.0.0.1:8000/admin/loaitin/sua/{{$key1->id_LoaiTin}}" class="btn btn-info">Edit</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{!! $loaitin->links() !!}
		</div>
	</div>
	<script type="text/javascript">
		$(function () {  
			$("#datepicker").datepicker({         
				autoclose: true,         
				todayHighlight: true 
			}).datepicker('update', new Date());
			$("#datepicker1").datepicker({         
				autoclose: true,         
				todayHighlight: true 
			}).datepicker('update', new Date());
		});
	</script>
	@endsection