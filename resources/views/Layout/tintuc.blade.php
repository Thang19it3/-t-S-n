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
	<link rel="stylesheet" href="{{asset('css/tintuc.css')}}">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
		<header>
		<a href="http://127.0.0.1:8000/home1" class="logo"><img src="{{asset('img/logo2.png')}}"></a>
		<div class="menu-toggle"></div>
		<nav>
			<ul>
				<li>
					<a href="http://127.0.0.1:8000/home1">Trang Chủ</a>
				</li>
				<li>
					<a href="#">Đặt Sân</a>
				</li>
				<li>
					<a href="http://127.0.0.1:8000/trangchu/tintuc/tintuc1" class="active">Tin Tức</a>
				</li>
				<li>
					<a href="http://127.0.0.1:8000/doibong">Đội Bóng</a>
				</li>
				<li>
					<a href="http://127.0.0.1:8000/lienhe">Liên Hệ</a>
				</li>
			</ul>
		</nav>
		<div class="drop-btn">
			<div class="drops-btn" style="z-index: 1000;">
				ADMIN <span class="fas fa-caret-down"></span>
			</div>
			<div class="wrapper">
				<ul class="menu-bar">
					<li>
						<a href="#">
							<div class="icon"><span class="fas fa-home"></span></div>
							Profile
						</a>
					</li>
					<li>
						<a href="#">
							<div class="icon"><span class="fas fa-home"></span></div>
							Club
						</a>
					</li>
					<li>
						<a href="#">
							<div class="icon"><span class="fas fa-cog"></span></div>
							Cài Đặt
						</a>
					</li>
					<li>
						<a href="#">
							<div class="icon"><span class="fas fa-home"></span></div>
							Đăng Xuất
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="side" style="z-index: 3000;">
			<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
			<div id="mySidenav" class="sidenav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="background: #fe5900;padding-right: 30px;">&times;</a>
				<div class="side-text">
					<h3>THÔNG TIN NHANH</h3>
					<p>Chất lượng đặt lên hàng đầu <br> nơi giao lưu các đội bóng khác</p>
					<h5><i class="far fa-clock"></i>Thứ Hai - Thứ Sáu: 7 giờ  sáng đến 11h tối <br> Thứ 7 và CN  Full Time</h5>
					<h5><i class="fas fa-map-marker-alt"></i>Đà Nẵng</h5>
					<h5><i class="fas fa-phone-alt"></i>+0829485934234</h5>
					<h5><i class="fas fa-at"></i>nvthang.19it3@gmail.com</h5>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</header>
	<div class="container">
		<div class="tintuc-left">
			<h3 style="letter-spacing: 3px;"><a href="#" style="font-size: 20px;color: black;">Trang Chủ</a> / <a href="#" style="font-size: 20px;color: black;">TinTuc</a></h3>
			@foreach($theloai as $tl)
			@if(count($tl->loaitin) > 0)
					<h4 style="margin-top:40px;margin-bottom: 10px;font-size: 20px">{{$tl->TenTheLoai}} | 
						@foreach($tl->loaitin as $lt)
						<small style="font-size: 14px;">
							<a href="http://127.0.0.1:8000/trangchu/tintuc/loaitin/{{$lt->id_LoaiTin}}/{{$lt->TenLoaiTin}}.html" style="color: "><i>{{$lt->TenLoaiTin}}/</i></a>
						</small>
						@endforeach
					</h4>
					<?php
					$data =$tl->tintuc->where('NoiBat',1)->sortByDesc('created_at')->take(5);
					$tin1 =$data->shift();
					?>
			<div class="card mb-8" style="max-width: 700px;">
			<div style="display: flex;">
			</div>
				<div class="row g-0" style="height: 250px;">
					<div class="col-md-4">
						@if(isset($tin1))
						<img width="250px" height="250px" src="{{url('upload/tintuc/'.$tin1['Hinh'])}}" alt="...">
						@endif
					</div>
					<div class="col-md-8">
							<div class="card-body" style="display: grid;grid-template-columns: 2fr 1fr;">
							<div style="margin-left: 30px;">
								@if(isset($tin1))
								<h5 class="card-title">
									{{$tin1['TieuDe']}}
								</h5>
								@endif
								@if(isset($tin1))
								<p class="card-text">
									{{$tin1['TomTat']}}
								</p>
								<a href="bao/{{$tin1['id_tintuc']}}/{{$tin1['TieuDe']}}.html" class="btn btn-danger">Đọc Thêm</a>
								@endif
							</div>
							<div style="margin-top: 20px;">
								@foreach($data->all() as $tintuc)
								<span><i class="fas fa-newspaper"> <a href="bao/{{$tintuc['id_tintuc']}}/{{$tintuc['TieuDe']}}.html">{{$tintuc['TieuDe']}}</a></i></span><br>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
			@endif
			@endforeach
		</div>
		<div class="tintuc-right">
			<div class="tintuc-right-search">
				<input type="text" name="" placeholder="Search"><label><i class="fas fa-search"></i></label>
			</div>
			<div class="tintuc-right-ngaythang">
				<h4>LOẠI TIN</h4>
				<ul>
					@foreach($loaitin as $lt)
					<li>
						<a href="http://127.0.0.1:8000/trangchu/tintuc/loaitin/{{$lt->id_LoaiTin}}/{{$lt->TenLoaiTin}}.html">{{$lt->TenLoaiTin}}</a>
					</li>
					@endforeach
				</ul>
			</div>
			<div class="tintuc-right-tag">
				<h4>TAG</h4>
				<button>Ball</button><button>Coach</button><button>leagu</button><button>Vku sport</button>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		const drop_btn = document.querySelector('.drops-btn');
		const menu_wrapper = document.querySelector('.wrapper');
		drop_btn.onclick = (()=>{
			menu_wrapper.classList.toggle("show");
		});
	</script>
	<script type="text/javascript" src="{{asset('js/home.js')}}"></script> 
</body>
</html>