<!DOCTYPE html>
<html>
<head>
	<title>TẠO ĐỘI BÓNG</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="{{asset('css/doibong.css')}}">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="img/logo2.png">
</head>
<body>
<header>
		<a href="#" class="logo"><img src="{{asset('img/logo2.png')}}"></a>
		<div class="menu-toggle"></div>
		<nav>
			<ul>
				<li>
					<a href="home.html">Trang Chủ</a>
				</li>
				<li>
					<a href="#">Đặt Sân</a>
				</li>
				<li>
					<a href="#">Tin Tức</a>
				</li>
				<li>
					<a href="#" class="active">Đội Bóng</a>
				</li>
				<li>
					<a href="lienhe.html">Liên Hệ</a>
				</li>
			</ul>
		</nav>
		<div class="side">
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
	<div style="height: 8px;margin-top: -20px;" class="progress rounded-0 sticky-top">
		    <div role="progressbar" style="width: 33%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100" class="progress-bar"></div>
		</div>
	<div class="container">
		<div style="margin-top: 50px;margin-bottom: 100px;">
			<h1>B1: Thông Tin Chung</h1>
			<form action="http://127.0.0.1:8000/trangchu/doibong1/b1"  method="POST" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{csrf_token()}}"/>
				<div class="form-group">
					<label>TÊN ĐỘI BÓNG</label>
					<input type="text" class="form-control" name="tendoibong" placeholder="Nhập Tên Đội Bóng">
				</div>
				<div class="form-group">
					<label>TÊN VIẾT TẮT</label>
					<input type="text" name="tenvt" placeholder="Nhập Tên Viết Tắt" class="form-control">
				</div>
				<div class="form-group">
					<label>KHẨU HIỆU</label>
					<input type="text" name="khauhieu" placeholder="Nhập Khẩu Hiệu Đội Bóng" class="form-control">
				</div>
				<div class="form-group">
					<label>LOGO ĐỘI BÓNG</label>
				<input type="file" name="Logo">
				</div>
				<div class="form-group">
					<label>NGÀY THÀNH LẬP</label>
				<p id="date"></p>
				</div>
				<button type="submit">TIẾP THEO</button>
			</form>
		</div>
	</div>
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
	<script type="text/javascript">
		n =  new Date();
		y = n.getFullYear();
		m = n.getMonth() + 1;
		d = n.getDate();
		document.getElementById("date").innerHTML = d + "/" + m + "/" + y;
	</script>
	<script type="text/javascript" src="{{asset('js/home.js')}}"></script>
</body>
</html>