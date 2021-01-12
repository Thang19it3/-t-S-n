
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
</head>
<body>
	<div class="tab-content">
		<div id="tintuc">
			<div class="row">
				<div class="col-lg-8">
					<h1>Thêm</h1>
				</div>
				@if(count($errors) > 0)
				<div class="alert alert-danger" role='alert'>
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
				<div class="col-md-7">
					<a href="http://127.0.0.1:8000/admin/theloai/danhsach">Back</a>
					<form action="http://127.0.0.1:8000/admin/theloai/them1" method="POST">
						<input type="hidden" name="_token" value="{{csrf_token()}}"/>
						<div class="form-group">
							<label>Tên Thể Loại</label><br>
							<input type="text" name="tentheloai" class="form-control" placeholder="Nhập tên thể loại"/> 
						</div>
						<button type="submit" class="btn btn-success">ADD</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#theloai').change(function(){
			var id_TheLoai = $(this).val();
			$.get("ajax/loaitin/"+id_TheLoai,function(data) {
				$("#loaitin").html(data);
			});
		});
	});
</script>
</body>
</html>