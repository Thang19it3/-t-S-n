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
				<h1>Thành Viên ĐỘI BÓNG</h1>
				<thead>
					<tr>
						<th style="color: black;">ID</th>
						<th style="color: black;">TÊN THÀNH VIÊN</th>
						<th style="color: black;">ACtion</th>
					</tr>
				</thead>
				<tbody>
					@foreach($tvdoibong as $db1)
					<tr>
						<td style="color: black;">{{$db1->id}}</td>
						<td style="color: black;">{{$db1->TenThanhVien}}</td>
						<td>
							<a href="" class="btn btn-success">DELETE</a>
							<a href="" class="btn btn-success">EDIT</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
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