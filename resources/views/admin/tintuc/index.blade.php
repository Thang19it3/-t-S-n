@extends('admin.layout.index')

@section('content')
			<div id="tintuc">
				<br>
				<table class="table table-striped" style="width: 1050px;margin-left: 50px;">
					@if(Session::has('theloai_delete'))
					<div class="alert alert-success" role='alert'>
						{{Session::get('theloai_delete')}}
					</div>
					@endif
					<h1 style="margin-left: 50px;">Tin Tức</h1>
					<a href="http://127.0.0.1:8000/admin/tintuc/them" class="btn btn-success" style="margin-left: 100px;">ADD</a>
					<thead>
						<tr >
							<th style="color: black;">Tên Loại Tin</th>
							<th style="color: black;">Tóm Tắt</th>
							<th style="color: black;">Noi Dung</th>
							<th style="color: black;">Ngày</th>
							<th style="color: black;">Nỗi Bật</th>
							<th style="color: black;">Hình</th>
							<th style="color: black;">The Loai</th>
							<th style="color: black;">Loai Tin</th>
						</tr>
					</thead>
					<tbody>
						@foreach($tintuc as $key)
						<tr>
							<td style="color: black;">{{$key->TieuDe}}</td>
							<td style="color: black;">{{$key->TomTat}}</td>
							<td style="color: black;">{{$key->NoiDung}}</td>
							<td style="color: black;">{{$key->oder_date}}</td>
							<td style="color: black;">
								@if($key->NoiBat == 0)
									{{'Ko'}}
								@else
									{{'CÓ'}}
								@endif
							</td>
							<td style="color: black;">
								<img width="100px" src="{{url('upload/tintuc/'.$key->Hinh)}}">
							</td>
							<td style="color: black;">{{$key->loaitin->theloai->TenTheLoai}}</td>
							<td style="color: black;">{{$key->loaitin->TenLoaiTin}}</td>
							<td>
								<a href="http://127.0.0.1:8000/admin/tintuc/xoa/{{$key->id_tintuc}}" class="btn btn-danger">Delete</a>
								<a href="http://127.0.0.1:8000/admin/tintuc/sua/{{$key->id_tintuc}}" class="btn btn-info">Edit</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<div style="margin-left: 100px;">
					{!! $tintuc->links() !!}
				</div>
			</div>
		<!----------------------------main-end-------------------->
	@endsection