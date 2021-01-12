<!DOCTYPE html>
<html>
<head>
	<title>Hồ sơ thể thao</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/sport_profile.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link href="http://soccerclub.axiomthemes.com/wp-content/uploads/2016/04/logo.png" rel="shortcut icon" type="image/png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	<header>
    @if(Auth::check())
    <a href="#" class="logo"><img src="img/logo2.png"></a>
    <div class="menu-toggle"></div>
    <nav>
      <ul>
        <li>
          <a href="#">Trang Chủ</a>
        </li>
        <li>
          <a href="http://127.0.0.1:8000/tim-san" class="active">Đặt Sân</a>
        </li>
        <li>
          <a href="http://127.0.0.1:8000/trangchu/tintuc/tintuc1">Tin Tức</a>
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
        {{Auth::user()->name}}<span class="fas fa-caret-down"></span>
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
    @else
    <a href="#" class="logo"><img src="img/logo2.png"></a>
    <div class="menu-toggle"></div>
    <nav>
      <ul>
        <li>
          <a href="#" class="active">Trang Chủ</a>
        </li>
        <li>
          <a href="http://127.0.0.1:8000/tim-san">Đặt Sân</a>
        </li>
        <li>
          <a href="http://127.0.0.1:8000/trangchu/tintuc/tintuc1">Tin Tức</a>
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
        <a href="http://127.0.0.1:8000/dang-nhap" style="font-size: 12px;">Đăng nhập</a>
      </div>
    </div>
    @endif
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
	<main style="padding-top: 63px;">
		<div class="container-fluid pt-3 pb-3 border-bottom px-lg-5">
			<div class="row justify-content-md-center mt-3 minimum-heigh">
				<div class="col-md-4 col-lg-3 text-center pl-0 pr-0">
					<div class="dropdown user-sidebar sidebar-md text-center">
						<button class="btn btn-default dropdown-toggle" type="button" id="user_sidenav" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Thông tin tài khoản</button>
						<ul class="dropdown-menu" aria-labelledby="user_sidenave">
						      <li class="dropdown-header">
						          <div class="user-brief justify-content-center">
						            <a class="user-brief_avatar m-1" href="#">
						              <div class="sporta-avatar">
						                <img id="avatar" src="https://www.sporta.vn/assets/default_user_image-dc0209ffeabf7fa68fcbc7d512a6ceeb051ad3fb16706d26679cccdcf3384043.png">
						              </div>
						            </a>
						            <div class="d-flex flex-column align-self-center user-brief_right m-md-1">
						              <div class="user-brief-name text-muted">{{ Auth::user()->name }}</div>
						              <div class="text-muted text-sm d-none d-md-flex"><a class="text-decoration-none" href="http://localhost:81/assignmentselect/public/profile"><i class="far fa-edit"></i> Sửa hồ sơ</a></div>
						            </div>
						          </div>
						      </li>
						      <div class="_border d-none d-md-block"></div>
						      <div class="row justify-content-center">
						        <div class="m-2 col-lg-7 col-7 menu-items">
						          <li class="mb-1"><i class="fas fa-user-circle"></i><a href="http://localhost:81/assignmentselect/public/profile">Thông tin tài khoản</a></li>
						          <li class="mb-1 active"><i class="far fa-futbol"></i><a href="http://localhost:81/assignmentselect/public/sport_profile">Hồ sơ thể thao</a></li>
						          <li class="mb-1 "><i class="fas fa-clock"></i><a href="http://localhost:81/assignmentselect/public/booking_request">Lịch đặt của tôi</a></li>
						          <li class="mb-1 "><i class="fas fa-unlock-alt"></i><a href="http://localhost:81/assignmentselect/public/change_password">Đổi mật khẩu</a></li>
						        </div>
						      </div>
						</ul>
					</div>
				</div>
				<div class="col-md-8 col-lg-9 pl-3 pr-3">
					<div class="user-page-content">
						<section class="border-light">
						  <div class="row justify-content-center m-2">
						    <h5 class="w-100 text-center d-none d-md-block">Hồ sơ thể thao</h5>
						  </div>
						  <div class="row justify-content-center m-2">
						    <form class="w-75"  accept-charset="UTF-8">
						    	@csrf
							  <div class="form-row">
							    <div class="form-group col-md-12">
							      <label>Chân thuận</label>
							      <select class="form-control" id="sport_profile_footedness" placeholder="Chân thuận" name="sport_profile[footedness]">
							      	<option value=""></option>
									<option value="0">Chân trái</option>
									<option value="1">Chân phải</option>
									<option value="2">Cả hai chân</option></select>
							    </div>

							    <div class="form-group col-md-12">
							      <label>Vị trí trên sân</label>
							      <input name="sport_profile_football_position" type="hidden" value="">
							      <select class="form-control " id="sport_profile_football_position" placeholder="Vị trí trên sân" name="sport_profile[football_position][]" >
							      	<option value="goalkeeper" >Thủ môn</option>
									<option value="defender" >Hậu vệ</option>
									<option value="midfielder" >Tiền vệ</option>
									<option value="striker" >Tiền đạo</option>
								  </select>
							    </div>
							  </div>
							  <button name="button" type="submit" class="btn btn-primary">Cập nhật</button>
							</form>

						  </div>

					</div>
				</div>
			</div>
		</div>
	</main>
<footer>
        <div class="container">
          <div class="sec aboutus">
            <h2>CHÚNG TÔI</h2>
            <p>Cung cấp cho khách hàng những trận đấu tuyệt vời nhất <br> với chất lượng tốt nhất với các dịch vụ tốt nhất <br> Nơi đặt sự trải nghiệm lên hàng đầu </p>
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
              <li><a href="#">Đội Bóng</a></li>
              <li><a href="#">Tin Tức</a></li>
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/javascript.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
</body>
</html>