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
	  <link rel="stylesheet" href="{{asset('css/home.css')}}">
</head>
<body >
	<header>
    @if(Auth::check())
    <a href="#" class="logo"><img src="img/logo2.png"></a>
    <div class="menu-toggle"></div>
    <nav>
      <ul>
        <li>
          <a href="http://127.0.0.1:8000/home1#">Trang Chủ</a>
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
		<div style="height: 8px" class="progress rounded-0 sticky-top">
		  <div role="progressbar" style="width: 50%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" class="progress-bar"></div>
		</div>
		<div class="py-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<p class="subtitle text-primary">Đặt sân</p>
						<h1 class="h2 mb-4">Thông tin người đặt 
							<span class="text-muted float-right d-none d-md-block">Bước 1</span>
						</h1>
						<div class="text-block">
					        <form action="" method="post">
					        	@csrf
					            <div class="form-group">
					              <label for="name">Tên</label>
					              <input id="name" name="booker_name" type="text" class="form-control" required="" value="{{Auth::user()->name}}">	
					            </div>
					            <div class="form-group">
					              <label for="phone">Số điện thoại</label>
					              <input id="phone" name="booker_phone" type="text" class="form-control" required="" required="" value="{{Auth::user()->phone_number}}">
					            </div>
					        </form>
					    </div>
					    <div class="text-block">
				            <h5 class="mb-4">Phương thức thanh toán</h5>
				            <div class="mb-4">
				              <div class="form-check">
				                <input id="cash" type="radio" class="form-check-input" name="payment_method" value="online" checked="">
				                <label for="cash" class="form-check-label"><span class="text-sm">Thanh toán online</span></label>
				              </div>
				              <p class="text-muted text-sm mb-0">Được đảm bảo bởi Sport khi có tranh chấp. Hoàn tiền 100% nếu hủy sân trước giờ quy định.</p>
				            </div>
				        </div>
				        <div class="row form-block flex-column flex-sm-row">
				            <div class="col text-center text-sm-left">
				            </div>
				            <div class="col text-center text-sm-right">
				              <button type="submit" class="btn btn-primary px-3" style="letter-spacing: .1em;text-transform: uppercase;font-weight: bold;" onclick="event.preventDefault();document.getElementById('set_pitch').submit();">Đặt sân<i class="fa-chevron-right fa ml-2"></i></button>
				              			@php 
					                    	if($duration == 1) {
					                    		$total_price = $pitch[0]->price_per_hour;
					                    	} elseif($duration == 1.5) {
					                    		$total_price = ($pitch[0]->price_per_hour) + ($pitch[0]->price_per_hour)/2;
					                    	} else {
					                    		$total_price = ($pitch[0]->price_per_hour)*2;
					                    	}
					                    @endphp
					                    @php
							                if($duration == 1) {
							                	$end_time = date('H:i',strtotime('+1 hour',strtotime($time)));
							                } elseif($duration == 1.5) {
							                	$end_time = date('H:i',strtotime('+1 hour +30 minutes',strtotime($time)));
							            	} else {
							            		$end_time = date('H:i',strtotime('+2 hour',strtotime($time)));
							            	}
					                	@endphp
					                	@php
					                		date_default_timezone_set('Asia/Ho_Chi_Minh');
                          					$today = date("d-m-yy");
					                	@endphp
			                    <form id="set_pitch" action="http://127.0.0.1:8000/set_pitch" method="post" class="d-none">
			                    	@csrf
			                    	<input type="hidden" name="today" value="@php echo $today; @endphp">
			                        <input type="hidden" name="pitch_id" value="{!! $pitch[0]->pitch_id !!}">
					                <input type="hidden" name="owner_id" value="{!! $pitch[0]->owner_id !!}">
					                <input type="hidden" name="book_day" value="@php echo $date; @endphp">
					                <input type="hidden" name="start_time" value="@php echo $time; @endphp">
					                <input type="hidden" name="end_time" value="@php echo $end_time; @endphp">
					                <input type="hidden" name="is_verified" value="0">
					                <input type="hidden" name="total_price" value="@php echo $total_price; @endphp">
			                    </form>
				            </div>
				        </div>
				        <input type="text" name="asset_id" value="" hidden="">
				        <input type="text" name="begin_use_time" value="" hidden="">
				        <input type="text" name="end_use_time" value="" hidden="">
					</div>
					<div class="col-lg-5 pl-xl-5">
						<div class="card border-0 shadow mt-md-4 position-sticky sticky-nav-right-100">
							<div class="card-body p-4">
					            <div class="text-block pb-3">
					              <div class="media align-items-center">
					                <div class="media-body">
					                  <h6> <a href="sanDHNongLam.html" class="text-reset">{!! $pitch[0]->pitch_name !!}</a></h6>
					                  <p class="text-muted text-sm mb-0">{!! $pitch[0]->address !!}, {!! $pitch[0]->district !!}, {!! $pitch[0]->city !!}</p>
					                  <div class="mt-n1">
					                        <i class="fa fa-xs fa-star orange-text"></i>
					                        <i class="fa fa-xs fa-star orange-text"></i>
					                        <i class="fa fa-xs fa-star orange-text"></i>
					                        <i class="fa fa-xs fa-star orange-text"></i>
					                        <i class="fa fa-xs fa-star orange-text"></i>
					                  </div>
					                </div>
					              </div>
					            </div>

					            <div class="text-block py-3">
					              <ul class="list-unstyled mb-0">
					                <li class="mb-3"><i class="fas fa-users fa-fw text-muted mr-2"></i>Sân {!! $pitch[0]->size !!} người</li>
					                @php $pitch @endphp
					                <li class="mb-3"><i class="far fa-calendar fa-fw text-muted mr-2"></i>Từ @php echo $time; @endphp <i class="fas fa-arrow-right fa-fw text-muted mx-1"></i>
					                @php
						                if($duration == 1) {
						                	$end_time = date('H:i',strtotime('+1 hour',strtotime($time)));
						                } elseif($duration == 1.5) {
						                	$end_time = date('H:i',strtotime('+1 hour +30 minutes',strtotime($time)));
						            	} else {
						            		$end_time = date('H:i',strtotime('+2 hour',strtotime($time)));
						            	}
					                @endphp
					                 đến @php echo $end_time; @endphp</li>
					                <li class=" mb-0 ml-4 text-muted">
					               	
					                
					                @php 
					                	echo $day;
						                if($day == null){
						                	echo"";
						            	} 
						            	else {
						            		echo ' ,';
						            	};
					            	@endphp 

					            	@php echo $date @endphp</li>
					              </ul>
					            </div>
					            <div class="text-block pt-3 pb-0">
					              <table class="w-100">
					                <tbody>
					                  <tr>
					                    <th class="font-weight-normal py-2">Giá thuê sân</th>
					                    <td class="text-right py-2">
					                    @php 
					                    	if($duration == 1) {
					                    		$total_price = $pitch[0]->price_per_hour;
					                    		echo $total_price ." VNĐ";
					                    	} elseif($duration == 1.5) {
					                    		$total_price = ($pitch[0]->price_per_hour) + ($pitch[0]->price_per_hour)/2;
					                    		echo $total_price ." VNĐ";
					                    	} else {
					                    		$total_price = ($pitch[0]->price_per_hour)*2;
					                    		echo $total_price ." VNĐ";
					                    	}
					                    @endphp</td>
					                  </tr>
					                  <tr>
					                    <th class="font-weight-normal pt-2 pb-3">Phí dịch vụ (1%)</th>
					                    <td class="text-right text-line-through pt-2 pb-3">3.300 VNĐ</td>
					                  </tr>
					                </tbody>
					                <tfoot>
					                  <tr class="border-top">
					                    <th class="pt-3">Tổng cộng</th>
					                    <td class="font-weight-bold text-right pt-3">
					                    @php 
					                    	if($duration == 1) {
					                    		echo $pitch[0]->price_per_hour." VNĐ";
					                    	} elseif($duration == 1.5) {
					                    		echo ($pitch[0]->price_per_hour) + ($pitch[0]->price_per_hour)/2 ." VNĐ";
					                    	} else {
					                    		echo ($pitch[0]->price_per_hour)*2 ." VNĐ";
					                    	}
					                    @endphp
					                    </td>
					                  </tr>
					                </tfoot>
					                
					              </table>
					            </div>
					        </div>
					        <div class="card-footer bg-primary-dark py-4 border-0">
					            <div class="media align-items-center">
					              <div class="media-body">
					                <p class="text-sm text-primary opacity-8 mb-0">Kiểm tra kỹ thông tin lịch đặt trước khi đặt.</p>
					              </div>
					            </div>
					        </div>
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