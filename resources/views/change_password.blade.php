<!DOCTYPE html>
<html>
<head>
	<title>Thay đổi mật khẩu</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/booking.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link href="http://soccerclub.axiomthemes.com/wp-content/uploads/2016/04/logo.png" rel="shortcut icon" type="image/png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body class="d-flex flex-column h-100">
	<div class="sporta-nav navbar-fixed">
	  <nav class="navbar navbar-expand-lg fixed-top shadow navbar-light bg-white">
	    <div class="container-fluid">
	      <div class="d-flex align-items-center">
	        <a href="" class="navbar-brand py-1 ml-2">
	          <img src="http://soccerclub.axiomthemes.com/wp-content/uploads/2016/04/logo.png" style="width: 50px; height: 35px;">
	        </a>
	      </div>
	      <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
	      <!-- Navbar Collapse -->
	      <div id="navbarCollapse" class="collapse navbar-collapse mr-3">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a class="nav-link" href="">Bảng xếp hạng</a></li>
	          <li class="nav-item"><a class="nav-link" href="booking_request">Lịch đặt của tôi</a></li>
	          <li class="nav-item"><a class="nav-link" href="login-owner">Dành cho chủ sân</a></li>
	          <li class="nav-item dropdown">
	            <a id="userDropdownMenuLink" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
	                {{ Auth::user()->name }}
	            </a>
	            <div aria-labelledby="userDropdownMenuLink" class="dropdown-menu dropdown-menu-right">
	              <a href="profile" class="dropdown-item">Tài khoản của tôi </a>
	              <a href="booking_request" class="dropdown-item">Quản lý lịch đặt </a>
	              <div class="dropdown-divider"></div>
	              <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item font-weight-normal dropdown-header">Đăng xuất</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
	            </div>
	          </li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	</div>
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
						              <div class="text-muted text-sm d-none d-md-flex"><a class="text-decoration-none" href="profile"><i class="far fa-edit"></i> Sửa hồ sơ</a></div>
						            </div>
						          </div>
						      </li>
						      <div class="_border d-none d-md-block"></div>
						      <div class="row justify-content-center">
						        <div class="m-2 col-lg-7 col-7 menu-items">
						          <li class="mb-1"><i class="fas fa-user-circle"></i><a href="profile">Thông tin tài khoản</a></li>
						          <li class="mb-1 </li>"><i class="far fa-futbol"></i><a href="sport_profile">Hồ sơ thể thao</a></li>
						          <li class="mb-1 "><i class="fas fa-clock"></i><a href="booking_request">Lịch đặt của tôi</a></li>
						          <li class="mb-1 active"><i class="fas fa-unlock-alt"></i><a href="change_password">Đổi mật khẩu</a></li>
						        </div>
						      </div>
						</ul>
					</div>
				</div>
				<div class="col-md-8 col-lg-9 pl-3 pr-3">
					<div class="user-page-content">
						<section class="border-light">
						  <div class="row justify-content-center m-2">
						    <h5 class="w-100 text-center d-none d-md-block">Đổi mật khẩu</h5>
						    <p>Để bảo mật tài khoản, vui lòng không chia sẻ mật khẩu cho người khác.</p>
						  </div>
						  <div class="row justify-content-center m-2">
						  	<div class="profile-update text-center">
							    <form class="edit_user" autocomplete="off" action="update_pass" accept-charset="UTF-8" method="post">
							    	@csrf
							      <div class="form-group">
							        <label for="old_password">Mật khẩu cũ</label>
							        <input type="password" name="old_password" id="old_password" value="" class="form-control">
							      </div>
							      <div class="form-group">
							        <label for="user_password">Mật khẩu mới</label>
							        <input class="form-control" type="password" name="password" id="user_password">
							      </div>
							      <div class="form-group">
							        <label for="user_password_confirmation">Xác nhận mật khẩu mới</label>
							        <input class="form-control" type="password" name="password_confirmation" id="user_password_confirmation">
							      </div>
							      <div class="form-group">
							        <input type="submit" name="commit" value="Xác nhận" class="btn btn-primary" >
							      </div>
								</form>  
							</div>
						  </div>  
						
						</section>
					</div>
				</div>
			</div>
		</div>
	</main>
	<footer class="position-relative d-print-none mt-auto pt-5">
  <!-- Main block - menu, subscribe form-->
	  <div class="py-5 bg text-muted">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <h6 class="text-uppercase  mb-3 font-weight-bold ">Về SportSc</h6>
          <ul class="list-unstyled">
            <li><a href="" class="text-muted">Giới thiệu Sport</a></li>
            <li><a href="" class="text-muted">Blog</a></li>
            <li><a href="" class="text-muted">Điều khoản sử dụng</a></li>
            <li><a href="" class="text-muted">Chính sách bảo mật</a></li>
          </ul>
        </div>
        <div class="col-lg-3 mb-5 mb-lg-0">
          <div class="font-weight-bold text-uppercase  mb-3">Thông tin liên hệ</div>
          <ul class="list-unstyled">
            <li class="text-muted"><a href="" target="_blank" title="facebook" class="text-muted text-hover-primary">
              <i class="fab fa-facebook" style="padding-right: 10px;"></i>sportvn</a></li>
            <li class="text-muted"><a class="text-muted text-hover-primary" href="mailto:hello@sporta.vn"><i class="fas fa-envelope" style="padding-right: 10px;"></i>sport@gmail.com</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <h6 class="text-uppercase mb-3 font-weight-bold">Thanh toán</h6>
          <ul class="list-unstyled">
            <li class="text-muted"><a class="text-muted text-hover-primary">
              <img style="height: 25px; margin-bottom: 10px;" src="https://www.sporta.vn/assets/momo-f2c88c55af645265139d91c8ec6e31182b68283d335ef35dff10bc90da8ddb3b.png"><span style="padding-right: 10px;"></span> Momo</a></li>
            <li class="text-muted"><a class="text-muted text-hover-primary"><i class="fas fa-money-check-alt" style="font-size: 20px;padding-right: 10px;"></i> Tiền mặt</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <h6 class="text-uppercase mb-3 font-weight-bold">Đăng ký</h6>
          <ul class="list-unstyled">
            <li class="text-muted">
              <a class="text-muted text-hover-primary">
                <input type="text" name="" style="border: none;border-radius: 5%;">
                <button style="background: white;border: none;margin-left: -35px;"><i class="fas fa-envelope" ></i></button>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
	  <!-- Copyright section of the footer-->
	  <div class="py-4 font-weight-light bg-gray-800 text-gray-300">
	    <div class="container">
	      <div class="row align-items-center justify-content-center">
	        <div class="col-md-6 text-center text-md-center">
	          <p class="text-sm mb-md-0"><span>© 2020 </span><br>
	            <span></span></p>
	        </div>
	      </div>
	    </div>
	  </div>
	</footer>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/javascript.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
</body>
</html>