@extends('admin.layout.index')

@section('content')
		<div id="tintuc" style="margin-left: 100px;margin-top: 100px;">
			<div class="row">
				<div class="col-lg-8">
					<h1>Thêm Thành Viên</h1>
				</div>
				@if(Session::has('thongbao'))
				<div class="alert alert-danger" role='alert'>
					{{Session::get('thongbao')}}
				</div>
				@endif
				<div class="col-md-7">
					<a href="/admin/loaitin/danhsach">Back</a>
					<form action="http://127.0.0.1:8000/admin/doibong/thanhvien/them1" method="POST">
						<input type="hidden" name="_token" value="{{csrf_token()}}"/>
						<div class="form-group">
							<label>CBL</label> <br>
							<select name="id_db" id="id_db" class="form-control" >
								@foreach($doibong as $tl)
								<option value="{{$tl->id}}">{{$tl->TenDoiBong}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label>Tên Thành Viên</label><br>
							<input type="text" name="tv" class="form-control" placeholder="Nhập tên thành viên" value="{{$thanhvien->TenThanhVien}}" /> 
						</div>
						<button type="submit" class="btn btn-success">ADD</button>
					</form>
				</div>
			</div>
		</div>
@endsection