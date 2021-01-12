<!DOCTYPE html>
<html>
<head>
	<title>Tạo đội, tìm đối hay cáp kèo | Nhận xét đánh giá đối thủ sau khi chơi</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/datsan.css">
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
	          <li class="nav-item"><a class="nav-link" href="login-owner">Dành cho chủ sân</a></li>
	          <li class="nav-item"><a class="nav-link" href="booking_request">Lịch đặt của tôi</a></li>
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
		<div style="height: 8px" class="progress rounded-0 sticky-top">
		</div>
		<div class="py-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<p class="subtitle text-primary">Đặt sân</p>
						<h1 class="h2 mb-4">
							<span class="text-danger">Đã hủy</span>
						</h1>
				        <div class="text-block">
					        <p class="text-danger">Yêu cầu đặt sân này đã bị hủy</p>
					     	<div class="d-none d-sm-block">
						        <p class="text-center mb-5">
						        	<a href="booking_request" class="btn btn-primary mx-2 mb-2" style="letter-spacing: .1em;text-transform: uppercase;font-weight: bold;"> <i class="far fa-file mr-2"></i>lịch sử đặt sân</a>
						        	<a href="/" class="btn btn-outline-muted mb-2" style="letter-spacing: .1em;text-transform: uppercase;font-weight: bold;">Trở lại trang chủ</a></p>
						        <p class="mb-5 text-center"><img src="https://www.sporta.vn/assets/team_cover_default-f0dfd65cfdf754155b9ef70ccf1fcd148aae39ffeab99fcc5303d25d2b2324b6.png" alt="" style="width: 400px;" class="img-fluid"></p>
					        </div>
					    </div>
					</div>
					<div class="col-lg-5 pl-xl-5">
						<div class="card border-0 shadow mt-md-4 position-sticky sticky-nav-right-100">
					      <div class="card-body p-4">
					        <div class="text-block pb-3">
					          <div class="media align-items-center">
					            <div class="media-body">
					              <h6> <a href="/dhnonglam" class="text-reset">Sân bóng Đại học Nông Lâm</a></h6>
					              <p class="text-muted text-sm mb-0">Đại học Nông Lâm, khu phố 6, P. Linh Trung, Quận Thủ Đức</p>
					              <div class="mt-n1">
					                    <i class="fa fa-xs fa-star orange-text"></i>
					                    <i class="fa fa-xs fa-star orange-text"></i>
					                    <i class="fa fa-xs fa-star orange-text"></i>
					                    <i class="fa fa-xs fa-star orange-text"></i>
					                    <i class="fa fa-xs fa-star orange-text"></i>
					              </div>
					            </div>
					            <a href="sanDHNongLam"><img src="https://sporta.s3.ap-southeast-1.amazonaws.com/uploads/production/image/image/528/1b698fbb-4287-4949-977b-0603b37428f1.jpeg?X-Amz-Expires=600&X-Amz-Date=20201212T100304Z&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAIQW3XISBSHKJGJBQ%2F20201212%2Fap-southeast-1%2Fs3%2Faws4_request&X-Amz-SignedHeaders=host&X-Amz-Signature=516c17ba449880183f383ab4387bc0d8f55e647e97fb60e4796c07955d483ec1" alt="" width="100" class="ml-3 rounded"></a>
					          </div>
					        </div>
					        <div class="text-block py-3">
					          <ul class="list-unstyled mb-0">
					            <li class="mb-3"><i class="fas fa-ticket-alt fa-fw text-secondary mr-1"></i>Mã vé: B0DBC</li>
					            <li class="mb-3"><i class="fas fa-users fa-fw text-muted mr-1"></i>Tên: Thắng Trần</li>
					            <li class="mb-3"><i class="fas fa-phone fa-fw text-muted mr-1"></i>Số đt: 0926069058</li>
					            <li class="mb-1"><i class="far fa-calendar fa-fw text-muted mr-1"></i>Thời gian: 17:30 <i class="fas fa-arrow-right fa-fw text-muted mx-1"></i>19:00</li>
					            <li class="ml-4 text-muted">Thứ Hai, 14-12-2020 (1 ngày nữa)</li>
					          </ul>
					        </div>
					        <div class="text-block pt-3 pb-0">
					          <table class="w-100">
					            <tbody>
					              <tr>
					                <th class="font-weight-normal py-2">Giá thuê sân</th>
					                <td class="text-right py-2">330.000 VNĐ</td>
					              </tr>
					              <tr>
					                <th class="font-weight-normal pt-2 pb-3">Phí dịch vụ (1%)</th>
					                <td class="text-right text-line-through pt-2 pb-3">3.300 VNĐ
					                </td></tr>
					                <!-- <tr>
					                <th class="font-weight-normal pt-2 pb-3">Mã khuyến mãi</th>
					                <td class="text-right pt-2 pb-3 w-50">
					                  <div class="input-wrapper">
					                    <input type="text" name="search_string" maxlength="10" class="form-control" disabled />
					                  </div>
					                </td>
					              </tr> -->
					              </tbody>
					              <tfoot>
					                <tr class="border-top">
					                  <th class="pt-3">Tổng cộng</th>
					                  <td class="font-weight-bold text-right pt-3">330.000 VNĐ</td>
					                </tr>
					              </tfoot>
					            </table>
					          </div>
					        </div>
					      </div>
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