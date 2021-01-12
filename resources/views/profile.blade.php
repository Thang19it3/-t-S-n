<!DOCTYPE html>
<html>
<head>
	<title>Thông tin người dùng</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/profile.css">
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
	          <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/home1">Trang chủ</a></li>
	          <li class="nav-item"><a class="nav-link" href="http://localhost:81/assignmentselect/public/login-owner">Dành cho chủ sân</a></li>
	          <li class="nav-item"><a class="nav-link" href="http://localhost:81/assignmentselect/public/booking_request">Lịch đặt của tôi</a></li>
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
						          <li class="mb-1 active"><i class="fas fa-user-circle"></i><a href="http://localhost:81/assignmentselect/public/profile">Thông tin tài khoản</a></li>
						          <li class="mb-1 </li>"><i class="far fa-futbol"></i><a href="http://localhost:81/assignmentselect/public/sport_profile">Hồ sơ thể thao</a></li>
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
						    <h5 class="w-100 text-center d-none d-md-block">Thông tin tài khoản</h5>
						  </div>
						  <div class="row justify-content-center m-2">
						    <div class="col-md-3">
						      <header class="profile-picture">
						        <form class="edit_user" id="edit_user_avatar" enctype="multipart/form-data" action="" accept-charset="UTF-8" method="post">
						        	@csrf
						  <div class="avatar">
						    <img id="avatar" style="width: 100%;" src="https://www.sporta.vn/assets/default_user_image-dc0209ffeabf7fa68fcbc7d512a6ceeb051ad3fb16706d26679cccdcf3384043.png">
						    <div class="btn-upload-avatar"><i class="fas fa-camera fa-1x"></i> Cập nhật</div>
						    <input onchange="this.form.submit()" type="file" name="user[avatar]" id="user_avatar">
						  </div>
						</form>
						      </header>
						      <p class="text-center">Ảnh đại diện</p>
						    </div>
						    <div class="col col-md-9">
						      <div class="d-flex justify-content-center">
						        <form class="w-75" action="user_update" accept-charset="UTF-8" method="post">
						        	@csrf
						          <div class="form-row">
						            <div class="form-group col-md-6">
						              <label for="user_email">Email</label>
						              <input class="form-control" placeholder="Email" type="email" value="{{ Auth::user()->email }}" name="email" id="user_email">
						            </div>
						            <div class="form-group col-md-6">
						              <label for="user_name">Họ Tên</label>
						              <input class="form-control" placeholder="Họ Tên" type="text" value="{{ Auth::user()->name }}" name="name" id="user_name">
						            </div>
						          </div>
						          <div class="form-group">
						            
						              <label for="user_phone_attributes_number">Số điện thoại</label>
						              <input class="form-control" placeholder="Số điện thoại" type="text" value="{{Auth::user()->phone_number}}" name="phone_number" id="user_phone_attributes_number">
						
						          </div>
						          <div class="form-group mb-0">
						            
						              <div class="form-group">
						                <label for="user_address_attributes_street">Địa chỉ</label>
						                <input required="required" class="form-control" type="text" value="{{Auth::user()->address}}" name="address" id="user_address_attributes_street">
						              </div>
						              <div class="form-row">
						                <div class="form-group col-md-6">
						                  <label class="active" for="city">Thành phố/Tỉnh</label>
						                  <select name="city" id="city" required="required" class="form-control"><option selected="selected" value="50">Tp Hồ Chí Minh</option>
											<option value="1">Tp Hà Nội</option>
											<option value="20">Tp Hải Phòng</option>
											<option value="32">Tp Đà Nẵng</option>
											<option value="59">Tp Cần Thơ</option>
											<option value="10">Tỉnh Yên Bái</option>
											<option value="17">Tỉnh Vĩnh Phúc</option>
											<option value="55">Tỉnh Vĩnh Long</option>
											<option value="5">Tỉnh Tuyên Quang</option>
											<option value="54">Tỉnh Trà Vinh</option>
											<option value="52">Tỉnh Tiền Giang</option>
											<option value="31">Tỉnh Thừa Thiên Huế</option>
											<option value="26">Tỉnh Thanh Hóa</option>
											<option value="12">Tỉnh Thái Nguyên</option>
											<option value="22">Tỉnh Thái Bình</option>
											<option value="46">Tỉnh Tây Ninh</option>
											<option value="9">Tỉnh Sơn La</option>
											<option value="61">Tỉnh Sóc Trăng</option>
											<option value="30">Tỉnh Quảng Trị</option>
											<option value="14">Tỉnh Quảng Ninh</option>
											<option value="34">Tỉnh Quảng Ngãi</option>
											<option value="33">Tỉnh Quảng Nam</option>
											<option value="29">Tỉnh Quảng Bình</option>
											<option value="36">Tỉnh Phú Yên</option>
											<option value="16">Tỉnh Phú Thọ</option>
											<option value="38">Tỉnh Ninh Thuận</option>
											<option value="25">Tỉnh Ninh Bình</option>
											<option value="27">Tỉnh Nghệ An</option>
											<option value="24">Tỉnh Nam Định</option>
											<option value="51">Tỉnh Long An</option>
											<option value="6">Tỉnh Lào Cai</option>
											<option value="13">Tỉnh Lạng Sơn</option>
											<option value="44">Tỉnh Lâm Đồng</option>
											<option value="8">Tỉnh Lai Châu</option>
											<option value="40">Tỉnh Kon Tum</option>
											<option value="58">Tỉnh Kiên Giang</option>
											<option value="37">Tỉnh Khánh Hòa</option>
											<option value="21">Tỉnh Hưng Yên</option>
											<option value="11">Tỉnh Hòa Bình</option>
											<option value="60">Tỉnh Hậu Giang</option>
											<option value="28">Tỉnh Hà Tĩnh</option>
											<option value="23">Tỉnh Hà Nam</option>
											<option value="19">Tỉnh Hải Dương</option>
											<option value="2">Tỉnh Hà Giang</option>
											<option value="41">Tỉnh Gia Lai</option>
											<option value="56">Tỉnh Đồng Tháp</option>
											<option value="48">Tỉnh Đồng Nai</option>
											<option value="7">Tỉnh Điện Biên</option>
											<option value="43">Tỉnh Đắk Nông</option>
											<option value="42">Tỉnh Đắk Lắk</option>
											<option value="3">Tỉnh Cao Bằng</option>
											<option value="63">Tỉnh Cà Mau</option>
											<option value="39">Tỉnh Bình Thuận</option>
											<option value="45">Tỉnh Bình Phước</option>
											<option value="47">Tỉnh Bình Dương</option>
											<option value="35">Tỉnh Bình Định</option>
											<option value="53">Tỉnh Bến Tre</option>
											<option value="49">Tỉnh Bà Rịa-Vũng Tàu</option>
											<option value="18">Tỉnh Bắc Ninh</option>
											<option value="62">Tỉnh Bạc Liêu</option>
											<option value="4">Tỉnh Bắc Kạn</option>
											<option value="15">Tỉnh Bắc Giang</option>
											<option value="57">Tỉnh An Giang</option></select>
						                </div>

						                <div class="form-group col-md-6">
						                  <label class="active" for="user_address_attributes_district_id">Quận/Huyện</label>
						                  <select class="form-control" name="user[address_attributes][district_id]" id="user_address_attributes_district_id"><option value="554">Quận Thủ Đức</option>
											<option value="559">Quận Tân Phú</option>
											<option value="558">Quận Tân Bình</option>
											<option value="560">Quận Phú Nhuận</option>
											<option value="556">Quận Gò Vấp</option>
											<option value="557">Quận Bình Thạnh</option>
											<option value="569">Quận Bình Tân</option>
											<option value="555">Quận 9</option>
											<option value="568">Quận 8</option>
											<option value="570">Quận 7</option>
											<option value="567">Quận 6</option>
											<option value="566">Quận 5</option>
											<option value="565">Quận 4</option>
											<option value="562">Quận 3</option>
											<option value="561">Quận 2</option>
											<option value="553">Quận 12</option>
											<option value="564">Quận 11</option>
											<option value="563">Quận 10</option>
											<option value="552">Quận 1</option>
											<option value="574">Huyện Nhà Bè</option>
											<option value="572">Huyện Hóc Môn</option>
											<option value="571">Huyện Củ Chi</option>
											<option value="575">Huyện Cần Giờ</option>
											<option selected="selected" value="573">Huyện Bình Chánh</option></select>
						                </div>
						                
						              </div>
										       
									</div>

						          <div class="form-row">
						            <div class="form-group col-md-6">
						              <label for="user_height">Chiều cao(cm)</label>
						              <input min="0" class="form-control" placeholder="cm" type="number" name="user[height]" id="user_height">
						            </div>
						            <div class="form-group col-md-6">
						              <label for="user_weight">Cân nặng(kg)</label>
						              <input min="0" step="any" class="form-control" placeholder="kg" type="number" name="user[weight]" id="user_weight">
						            </div>
						          </div>

						          <div class="form-row">
						            <div class="form-group col-md-12">
						              <label for="user_date_of_birth">Ngày sinh</label>
						              <input class="form-control" placeholder="Ngày sinh" type="date" name="birthday" id="user_date_of_birth" value="{{Auth::user()->birthday}}">
						            </div>
						          </div>
						          <button name="button" type="submit" class="btn btn-primary">Cập nhật</button>

						</form>      </div>
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