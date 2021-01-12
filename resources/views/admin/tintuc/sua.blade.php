@extends('admin.layout.index')

@section('content')
			<div class="row" style="margin-left: 50px;">
				<div class="col-lg-8">
					<h1>Sửa Loại Tin</h1>
					<small>{{$tintuc->TieuDe}}</small>
				</div>
				@if(Session::has('thongbao'))
				<div class="alert alert-danger" role='alert'>
					{{Session::get('thongbao')}}
				</div>
				@endif
				<div class="col-md-7">
					<a href="/admin/tintuc/danhsach">Back</a>
					<form action="http://127.0.0.1:8000/admin/tintuc/sua/{{$tintuc->id_tintuc}}" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{csrf_token()}}"/>
						<div class="form-group">
							<label>Thể Loại</label> <br>
							<select name="theloai" id="theloai" class="form-control" >
								@foreach($theloai as $lt)
								<option
								@if($tintuc->loaitin->theloai->id_TheLoai == $lt->id_tintuc)
								{{"selected"}}
								@endif
								 value="{{$lt->id_TheLoai}}">{{$lt->TenTheLoai}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label>Loại Tin</label> <br>
							<select name="loaitin" id="loaitin" class="form-control">
								@foreach($loaitin as $lt)
								<option 
								@if($tintuc->loaitin->id_LoaiTin == $lt->id_tintuc)
								{{"selected"}}
								@endif
								value="{{$lt->id_LoaiTin}}">{{$lt->TenLoaiTin}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label>Tiêu Đề</label><br>
							<input type="text" name="tentheloai" class="form-control" value="{{$tintuc->TieuDe}}" placeholder="Nhập tên tiêu đề"/> 
						</div>
						<div class="form-group">	
							<label>Tóm Tắt</label><br>
							<textarea name="tomtat" class="form-control ckeditor" rows="3" >
								{{$tintuc->TomTat}}
							</textarea> 
						</div>
						<div class="form-group">
							<label>Nội Dung</label><br>
							<textarea name="noidung" class="form-control ckeditor" rows="3" >
								{{$tintuc->NoiDung}}
							</textarea> 
						</div>
						<div class="form-group">
							<label>Hình</label><br>
							<p>
								<img width="400px" src="{{url('upload/tintuc/'.$tintuc->Hinh)}}">
							</p>
							<input type="file" name="Hinh" class="form-control"/> 
						</div>
						<div class="form-group">
							<label>Nỗi Bật</label><br>
							<label class="noibat1">
								<input type="radio" name="noibat" value="1" 
								@if($tintuc->NoiBat == 1)
								{{"checked"}}
								@endif
								>
							</label>
							Có
							<label class="noibat1">
								<input type="radio" name="noibat" value="0"
								@if($tintuc->NoiBat == 0)
								{{"checked"}}
								@endif 
								>
							</label>
							ko
						</div>
						<div class="form-group">
							<label>Ngày Đăng</label><br>
							<div class="col-md-3">
								<label>Chọn ngày: </label>
								<div id="datepicker1" class="input-group date" data-date-format="dd-mm-yyyy"> <input class="form-control" readonly="" type="text"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span> 
								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-success">SỬA</button>
					</form>
				</div>
			</div>
@endsection