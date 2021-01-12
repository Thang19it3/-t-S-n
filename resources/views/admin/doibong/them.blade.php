@extends('admin.layout.index')

@section('content')
		<div id="tintuc" style="margin-left: 100px;margin-top: 100px;">
			<div class="row">
				<div class="col-lg-8">
					<h1>Thêm Đội Bóng</h1>
				</div>
				@if(Session::has('thongbao'))
				<div class="alert alert-danger" role='alert'>
					{{Session::get('thongbao')}}
				</div>
				@endif
				<div class="col-md-7">
					<a href="/admin/loaitin/danhsach">Back</a>
					<form action="http://127.0.0.1:8000/admin/doibong/tendb/them1" method="POST">
						<input type="hidden" name="_token" value="{{csrf_token()}}"/>
						<div class="form-group">
							<label>Tên Đội Bóng</label><br>
							<input type="tendb" name="tendb" class="form-control" placeholder="Nhập tên đội bóng"/> 
						</div>
						<button type="submit" class="btn btn-success">ADD</button>
					</form>
				</div>
			</div>
		</div>
@endsection