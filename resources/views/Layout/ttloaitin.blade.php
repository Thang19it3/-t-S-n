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
	<base href="{{asset('')}}">
</head>
<body>
		<header>
		<a href="#" class="logo"><img src="{{asset('img/logo2.png')}}"></a>
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
	<div class="hihi" style="display: grid;grid-template-columns: 1080px 300px;">
		<div class="tintuc-left">
			<h6 style="margin-left: 50px;letter-spacing: 3px;font-weight: 300;font-size: 12px;margin-top: 20px;margin-bottom: 40px;">TRANG CHỦ / {{$loaitin->TenLoaiTin}}</h6>
			<h1 style="margin-left: 100px;margin-bottom: 30px;font-size: 40px;">{{$loaitin->TenLoaiTin}}</h1>
			@foreach($tintuc as $tt)
			<div class="card mb-8" style="width: 800px;margin-left: 100px; margin-bottom: 30px;">
				<div class="row g-0" style="height: 250px;">
					<div class="col-md-4">
						<img width="250px" height="250px" src="{{url('upload/tintuc/'.$tt->Hinh)}}" alt="...">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<div>
								<h5 class="card-title">{{$tt->TieuDe}}</h5>
								<p class="card-text">{{$tt->TomTat}}</p>
								<a href="http://127.0.0.1:8000/trangchu/tintuc/bao/{{$tt->id_tintuc}}/{{$tt->TieuDe}}.html">ĐỌC</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>


		<div class="tintuc-right" style="width: 300px;">
			<div class="tintuc-right-search">
				<input type="text" name="" placeholder="Search"><label><i class="fas fa-search"></i></label>
			</div>
			<div class="tintuc-right-ngaythang">
				<h4>LOẠI TIN</h4>
				<ul>
					<li>
						<a href="http://127.0.0.1:8000/trangchu/tintuc/loaitin/{{$loaitin->id_LoaiTin}}/{{$loaitin->TenLoaiTin}}.html">{{$loaitin->TenLoaiTin}}</a>
					</li>
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
	<script type="text/javascript" src="js/home.js"></script> 
</body>
</html>