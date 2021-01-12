<!DOCTYPE html>
<html>
<head>
	<title>Tìm Đồi Thủ</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="{{asset('css/tim-db.css')}}">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<link rel="shortcut icon" type="image/png" href="img/logo2.png">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
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
					<a href="http://127.0.0.1:8000/tim-san">Đặt Sân</a>
				</li>
				<li>
					<a href="http://127.0.0.1:8000/trangchu/tintuc/tintuc1">Tin Tức</a>
				</li>
				<li>
					<a href="http://127.0.0.1:8000/doibong" class="active">Đội Bóng</a>
				</li>
				<li>
					<a href="#">Liên Hệ</a>
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
	<div>
		<div class="col-md-10 trandau" style="padding-bottom: 50px;">
			<?php
			 $id = Auth::user()->id;
			?>
			@foreach($trandau as $tr)
			@if($tr->id_user == $id)
		<div class="card">
			<div class="card-body">
				<div class="img">
					@foreach($doibong as $db)
					@if($db->id == $tr->id_doibong1)
					<img src="{{url('upload/logo/'.$db->Logo)}}">
					@endif
					@endforeach
					<span>VS</span>
					@foreach($doibong as $db)
					@if($db->id == $tr->id_doibong2)
					<img src="{{url('upload/logo/'.$db->Logo)}}">
					@endif
					@endforeach
				</div>
				<div class="dia-diem">
					<h5>{{$tr->time}}</h5>
					<h3>ĐÀ NẴNG</h3>
					<h6>{{$tr->ngay}}</h6>
				</div>
				<div class="button">
					<button class="btn">LẤY VÉ</button>
					<button class="btn1">LẤY VÉ</button>
				</div>
			</div>
		</div>
		@endif
		@endforeach
	</div>
	</div>
	<div class="banner">
		<div class="banner-text" >
			<h2>ĐẶT SÂN NGAY</h2>
			<h2>2020</h2>
			<button>ĐẶT SÂN NGAY</button>
		</div>
		<img src="{{asset('img/banner1.jpg')}}">
	</div>
	<!-------------------------footer---------------------->
	<footer>
		<div class="container">
			<div class="sec aboutus">
				<h2>About Us</h2>
				<p>hihidhisadhsaiahidhisahaidhisahsia</p>
				<ul class="sci">
					<li>
						<a href="#"><i class="fab fa-facebook"></i></a>
					</li>
					<li>
						<a href="#"><i class="fab fa-instagram"></i></a>
					</li>
					<li>
						<a href="#"><i class="fab fa-twitter"></i></i></a>
					</li>
					<li>
						<a href="#"><i class="fab fa-twitter"></i></i></a>
					</li>	
				</ul>
			</div>
			<div class="sec quickLinks">
				<h2>Quick Links</h2>
				<ul>
					<li><a href="#">Trang Chủ</a></li>
					<li><a href="#">Đặt Sân</a></li>
					<li><a href="#">Liên Hệ</a></li>
					<li><a href="#">Trang Chủ</a></li>
					<li><a href="#">Trang Chủ</a></li>
				</ul>
			</div>
			<div class="sec contact">
				<h2>Contact Info</h2>
				<ul class="info">
					<li>
						<span><i class="far fa-envelope"></i></span>
						<span>678 ldsad sadas ,Đà nẵng <br>Việt Nam</span>
					</li>
					<li>
						<span><i class="far fa-envelope"></i></span>
						<p><a href="#">3218321821738</a><br><a href="#">432432343243</a></p>
					</li>
					<li>
						<span><i class="far fa-envelope"></i></span>
						<span>678 ldsad sadas <br> Đà nẵng <br>Việt Nam</span>
					</li>
				</ul>
			</div>
		</div>
	</footer>
	<div class="copyrightText">
		<p>Copyright @</p>
	</div>
	<script type="text/javascript" src="js/home.js"></script>
</body>
</html>