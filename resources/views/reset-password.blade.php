<!DOCTYPE html>
<html>
<head>
	<title>Tạo đội, tìm đối hay cáp kèo | Nhận xét đánh giá đối thủ sau khi chơi</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/dangnhap.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link href="http://soccerclub.axiomthemes.com/wp-content/uploads/2016/04/logo.png" rel="shortcut icon" type="image/png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
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
	          <li class="nav-item"><a class="nav-link" href="login-owner">Dành cho chủ sân</a></li>
	          <li class="nav-item"><a class="nav-link" href="">Đăng nhập</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	</div>
	<main style="padding-top: 63px;">
		<div class="container mt-5">
			  <div class="col mb-5 justify-content-center">
			    <h4 class="text-center orange-text">Quên mật khẩu?</h4>
			  </div>
			  <form class="new_user" id="new_user" action="" accept-charset="UTF-8" method="post">
			  	@csrf
			    <div class="row justify-content-center">
			      <div class="col-md-6">
			        <div class="form-group">
			          <label for="user_email">Email</label>
			          <input required="required" class="form-control" type="email" value="" name="user[email]" id="user_email">
			        </div>
			      </div>
			      <div class="col-md-8 text-center">
			        <button name="button" type="submit" class="btn btn-outline-orange">Đặt lại password</button>
			      </div>
			    </div>
			</form>  <div class="row justify-content-center">
			    <div class="col-md-6">
			      <hr data-content="hoặc" class="my-3 hr-text letter-spacing-2">

			<a class="btn btn btn-outline-primary btn-block btn-social mb-3 bt-fb" href="">
			  <i class="fa-2x fa-facebook-f fab btn-social-icon"> </i>Đăng nhập với Facebook
			</a><a class="btn btn btn-outline-red btn-block btn-social mb-3 bt-gg" href="">
			  <i class="fa-2x fa-google fab btn-social-icon"></i>Đăng nhập với Google
			</a>
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
</body>
</html>