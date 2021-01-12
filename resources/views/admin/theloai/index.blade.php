@extends('admin.layout.index')

@section('content')
<div>
	<div id="tintuc" class="container" style="width: 1000px;">
		<br>
		<h1 style="color: black;margin-left: 300px;">Danh Sách Thể Loại</h1>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
			ADD
		</button>
		<div class="modal" id="myModal">
			<div class="modal-dialog">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Thêm Thể Loại</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
						<form action="http://127.0.0.1:8000/admin/theloai/them1" method="POST">
							<input type="hidden" name="_token" value="{{csrf_token()}}"/>
							<div class="form-group">
								<label style="color: black;">Tên Thể Loại</label><br>
								<input type="text" name="tentheloai" class="form-control" placeholder="Nhập tên thể loại"/> 
							</div>
							<button type="submit" class="btn btn-success">ADD</button>
						</form>
					</div>

				</div>
			</div>
		</div>
		<table class="table table-striped" style="width: 700px;margin-left: 140px;">
			@if(Session::has('theloai_delete'))
			<div class="alert alert-success" role='alert'>
				{{Session::get('theloai_delete')}}
			</div>
			@endif
			<thead>
				<tr>
					<th style="color: black;">Id</th>
					<th style="color: black;">Thể Loại</th>
					<th style="color: black;">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($theloai as $key)
				<tr>
					<td style="color: black;">{{$key->id_TheLoai}}</td>
					<td style="color: black;">{{$key->TenTheLoai}}</td>
					<td>
						<a href="http://127.0.0.1:8000/admin/theloai/xoa/{{$key->id_TheLoai}}" class="btn btn-danger">Delete</a>
						<a href="http://127.0.0.1:8000/admin/theloai/sua/{{$key->id_TheLoai}}" class="btn btn-info">Edit</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div style="padding-top: 100px;">
			{!! $theloai->links() !!}
		</div>
	</div>
</div>
<!----------------------------main-end-------------------->
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