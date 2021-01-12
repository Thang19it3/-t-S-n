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
	<div class="hihi" style="display: grid;grid-template-columns: 1040px 300px;">
		<div class="tintuc-left" style="margin-left: 130px;">
			<h3 style="margin-bottom: 10px;">{{$tintuc->TieuDe}}</h3>
			<img src="{{url('upload/tintuc/'.$tintuc->Hinh)}}" style="width: 900px;height: 400px;">
			<h4 style="margin-top: 30px;">{{$tintuc->TomTat}}</h4>
			<p>{!! $tintuc->NoiDung !!}</p>
			<div style="border: 1px solid black; width: 900px;padding-left: 20px;padding-bottom: 10px;margin-top: 100px;">
				<h3>Bình Luận</h3>
				<textarea rows="5" cols="115"></textarea>
				<button class="btn btn-danger">Gửi</button>
			</div>
			<hr/>
			<div>
				<div style="display: flex;margin-bottom: 30px;">
					<img src="" width="80px" height="80px" style="margin-right: 50px;">
					<div>
						<h6>hihiih</h6>
						<p>ádssadassdasad</p>
					</div>
				</div>
				<div style="display: flex;margin-bottom: 30px;">
					<img src="" width="80px" height="80px" style="margin-right: 50px;">
					<div>
						<h6>hihiih</h6>
						<p>ádssadassdasad</p>
					</div>
				</div>
			</div>
		</div>

		<div class="tintuc-right" style="padding-left: 30px;">
			<div class="tintuc-right-search">
				<input type="text" name="" placeholder="Search"><label><i class="fas fa-search"></i></label>
			</div>
			<div class="tintuc-right-theloai">
				<h4>TIN LIÊN QUAN</h4>
				<ul>
					@foreach($tinlienquan as $tlq)
					<li>
						<a href="http://127.0.0.1:8000/trangchu/tintuc/bao/{{$tlq->id_tintuc}}/{{$tlq->TieuDe}}.html">
							<div style="display: flex;margin-top: -30px;">
								<img src="{{url('upload/tintuc/'.$tlq->Hinh)}}" style="width: 80px; height: 80px;">
								<div style="margin-left: 20px;">
									<span>{{$tlq->TieuDe}}</span>
								</div>
							</div>
						</a>
					</li>
					@endforeach
				</ul>
			</div>
			<div class="tintuc-right-ngaythang">
				<h4>TIN NỖI BẬT</h4>
				<ul>
					@foreach($tintucnoibat as $tnb)
					<li>
						<a href="http://127.0.0.1:8000/trangchu/tintuc/bao/{{$tnb->id_tintuc}}/{{$tnb->TieuDe}}.html">
							<div style="display: flex;margin-top: -30px;">
								<img src="{{url('upload/tintuc/'.$tnb->Hinh)}}" style="width: 80px; height: 80px;">
								<div style="margin-left: 20px;">
									<span>{{$tnb->TieuDe}}</span>
								</div>
							</div>
						</a>
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
	<script type="text/javascript" src="js/home.js"></script> 
</body>
</html>