@extends('admin.layout.index')

@section('content')
	<div id="tintuc" style="margin-left: 100px;margin-top: 100px;">
		<div class="row">
			<div class="col-lg-12">
				<h1>Hihih</h1>
			</div>
			<div class="col-lg-7">
				@if(count($errors) > 0)
				<div class="alert alert-success">
					@foreach($errors->all() as $err)
					{{$err}}<br>
					@endforeach
				</div>
				@endif
				@if(session('thongbao'))
				<div class="alert alert-success">
					{{session('thongbao')}}
				</div>
				@endif
				<a href="/admin/theloai/danhsach">Back</a>
				<form action="http://127.0.0.1:8000/admin/theloai/sua/{{$theloai->id_TheLoai}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token()}}"/>
					<div class="form-group">
						<label>Tên Thể Loại</label>
						<input type="text" name="tentheloai" class="form-control" placeholder="Điền tên thể loại" value="{{$theloai->TenTheLoai}}" /> 
					</div>
					<button type="submit" class="btn btn-success">Update</button>
				</form>
			</div>
		</div>
	</div>
@endsection