@extends('admin.layout.index')

@section('content')
			<div class="row" style="margin-left: 100px;">
				<div class="col-lg-8">
					<h1>Hihih</h1>
				</div>
				@if(Session::has('thongbao'))
				<div class="alert alert-danger" role='alert'>
					{{Session::get('thongbao')}}
				</div>
				@endif
				<div class="col-md-7">
					<a href="/admin/tintuc/danhsach">Back</a>
					<form action="http://127.0.0.1:8000/admin/tintuc/them" method="POST" enctype="multipart/form-data">
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
							<label>Loại Tin</label> <br>
							<select name="loaitin" id="loaitin" class="form-control">
								@foreach($loaitin as $lt)
								<option value="{{$lt->id_LoaiTin}}">{{$lt->TenLoaiTin}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label>Tiêu Đề</label><br>
							<input type="text" name="tentheloai" class="form-control" placeholder="Nhập tên tiêu đề"/> 
						</div>
						<div class="form-group">
							<label>Tóm Tắt</label><br>
							<input type="" name="tomtat">
						</div>
						<div class="form-group">
							<label>Nội Dung</label><br>
							<textarea name="noidung" class="form-control ckeditor" rows="3" ></textarea> 
						</div>
						<div class="form-group">
							<label>Hình</label><br>
							<input type="file" name="Hinh" class="form-control"/> 
						</div>
						<div class="form-group">
							<label>Nỗi Bật</label><br>
							<label class="noibat1">
								<input type="radio" name="noibat" value="1" checked="">
							</label>
							Có
							<label class="noibat1">
								<input type="radio" name="noibat" value="0">
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
						<button type="submit" class="btn btn-success">ADD</button>
					</form>
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
		$(document).ready(function(){
				$('#theloai').change(function(){
					var idTheLoai = $(this).val();
					$.get('http://127.0.0.1:8000/admin/ajax/loaitin/'+idTheLoai,function(data){
						$('#loaitin').html(data);
					});
				});
		});
	</script>
@endsection