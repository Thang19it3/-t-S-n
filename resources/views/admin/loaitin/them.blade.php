@extends('admin.layout.index')

@section('content')
		<div id="tintuc" style="margin-left: 100px;margin-top: 100px;">
			<div class="row">
				<div class="col-lg-8">
					<h1>Thêm Loại Tin</h1>
				</div>
				@if(Session::has('thongbao'))
				<div class="alert alert-danger" role='alert'>
					{{Session::get('thongbao')}}
				</div>
				@endif
				<div class="col-md-7">
					<a href="/admin/loaitin/danhsach">Back</a>
					<form action="http://127.0.0.1:8000/admin/loaitin/them1" method="POST">
						<input type="hidden" name="_token" value="{{csrf_token()}}"/>
						<div class="form-group">
							<label>Thể Loại</label> <br>
							<select name="theloai" id="theloai" class="form-control" >
								@foreach($theloai as $tl)
								<option value="{{$tl->id_TheLoai}}">{{$tl->TenTheLoai}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label>Loại Tin</label><br>
							<input type="text" name="loaitin" class="form-control" placeholder="Nhập tên thể loại"/> 
						</div>
						<button type="submit" class="btn btn-success">ADD</button>
					</form>
				</div>
			</div>
		</div>
@endsection