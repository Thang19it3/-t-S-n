@extends('admin.layout.index')

@section('content')
			<div class="row" style="margin-top: 100px;margin-left: 150px;">
				<div class="col-lg-12">
					<h1>Sửa Loại Tin</h1>
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
					<a href="/admin/loaitin/danhsach">Back</a>
					<form action="http://127.0.0.1:8000/admin/loaitin/sua/{{$loaitin->id_LoaiTin}}" method="POST">
						<input type="hidden" name="_token" value="{{csrf_token()}}"/>
						<div class="form-group">
							<label>Loại Tin</label>
							<input type="text" name="loaitin" class="form-control" placeholder="Điền tên thể loại" value="{{$loaitin->TenLoaiTin}}" /> 
						</div>
						<button type="submit" class="btn btn-success">Update</button>
					</form>
				</div>
			</div>
@endsection