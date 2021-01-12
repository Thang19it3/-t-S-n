<!DOCTYPE html>
<html>
<head>
	<title>Tạo đội, tìm đối hay cáp kèo | Nhận xét đánh giá đối thủ sau khi chơi</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/datsan.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link href="http://soccerclub.axiomthemes.com/wp-content/uploads/2016/04/logo.png" rel="shortcut icon" type="image/png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
	<script type="text/javascript" src="./js/bootstrap.js"></script>
	<link rel="stylesheet" href="{{asset('css/home.css')}}">
</head>
<body>
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
		    <div role="progressbar" style="width: 100%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100" class="progress-bar"></div>
		</div>
		<div class="py-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<p class="subtitle text-primary">Đặt sân</p>
						<h1 class="h2 mb-4">Thanh toán 
							<span class="text-muted float-right d-none d-md-block">Bước 2</span>
						</h1>
						<div class="text-block">
				            <p class="text-muted">Thanh toán bằng một trong những cách sau</p>
				            <div class="accordion" id="accordionExample">
				              <div class="card">
				                <div class="card-header" id="headingOne">
				                  <h2 class="mb-0">
				                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="letter-spacing: .1em;text-transform: uppercase;font-weight: bold;">
				                      <img style="height: 25px; margin-right: 1rem;" src="https://www.sporta.vn/assets/momo-f2c88c55af645265139d91c8ec6e31182b68283d335ef35dff10bc90da8ddb3b.png"> Momo
				                    </button>
				                  </h2>
				                </div>
				                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
				                  <div class="card-body">
				                    <p>
				                      Thực hiện chuyển tiền ({{$pitch[0]->total_price}} VNĐ) vào tài khoản bên dưới với nội dung chuyển tiền là <strong style="font-weight: bold">{{$pitch[0]->ticket}}</strong>
				                    </p>
				                    <img style="width: 100%; max-width: 400px;" src="https://www.sporta.vn/assets/momo_qrcode-86aa99518a71d9c72d91a41dfe39edcaadaa65c61b7c1f04c1492c8b4e483ec6.jpg">
				                  </div>
				                </div>
				              </div>
				              <div class="card">
				                <div class="card-header" id="headingTwo">
				                  <h2 class="mb-0">
				                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="letter-spacing: .1em;text-transform: uppercase;font-weight: bold;">
				                      <i class="fas fa-money-check-alt" style="font-size: 25px; margin-right: 1rem;"></i>Chuyển khoản
				                    </button>
				                  </h2>
				                </div>
				                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
				                  <div class="card-body">
				                    <ol>
				                      <li>
				                        <h6>Ngân hàng Á Châu ACB</h6>
				                        <p>Số tài khoản: 248188</p>
				                        <p>Tên tài khoản: {{Auth::user()->name}}</p>
				                        <p>Chi nhánh: Bình Triệu, Tp Hồ Chí Minh</p>
				                        <p>Số tiền: {{$pitch[0]->total_price}} VNĐ</p>
				                        <p>Nội dung chuyển khoản: <strong>{{$pitch[0]->ticket}}</strong></p>
				                      </li>
				                    </ol>
				                  </div>
				                </div>
				              </div>
				            </div>
				        </div>
				        <div class="text-block">
					        <!-- <p class="text-muted">Thời gian giữ chỗ: <span class="text-primary"><strong id="count_time">1 phút 14 giây</strong></span></p> -->
					        <p class="text-muted">Vui lòng chờ xác nhận từ chủ sân</p>
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
					              <h6> <a href="/dhnonglam" class="text-reset">{!! $pitch[0]->pitch_name !!}</a></h6>
					              <p class="text-muted text-sm mb-0">{!! $pitch[0]->address !!}, {!! $pitch[0]->district !!}, {!! $pitch[0]->city !!}</p>
					              <div class="mt-n1">
					                    <i class="fa fa-xs fa-star orange-text"></i>
					                    <i class="fa fa-xs fa-star orange-text"></i>
					                    <i class="fa fa-xs fa-star orange-text"></i>
					                    <i class="fa fa-xs fa-star orange-text"></i>
					                    <i class="fa fa-xs fa-star orange-text"></i>
					              </div>
					            </div>
					            <a href="http://localhost/assignmentselect/public/{!! $pitch[0]->pitch_id !!}"><img src="{!! $pitch[0]->avatar_url !!}" alt="" width="100" class="ml-3 rounded"></a>
					          </div>
					        </div>
					        <div class="text-block py-3">
					          <ul class="list-unstyled mb-0">
					            <li class="mb-3"><i class="fas fa-ticket-alt fa-fw text-secondary mr-1"></i>Mã vé: {{$pitch[0]->ticket}}</li>
					            <li class="mb-3"><i class="fas fa-users fa-fw text-muted mr-1"></i>Tên: {{Auth::user()->name}}</li>
					            <li class="mb-3"><i class="fas fa-phone fa-fw text-muted mr-1"></i>Số đt: {{Auth::user()->phone_number}}</li>
					            @php
					            	$start_time = date('H:i',strtotime($pitch[0]->start_time_booking));
					            	$end_time = date('H:i',strtotime($pitch[0]->end_time_booking));
					            @endphp
					            <li class="mb-1"><i class="far fa-calendar fa-fw text-muted mr-1"></i>Thời gian:  @php echo $start_time @endphp<i class="fas fa-arrow-right fa-fw text-muted mx-1"></i>@php echo $end_time @endphp</li>
					            <li class="ml-4 text-muted">{{$pitch[0]->book_day}}</li>
					          </ul>
					        </div>
					        <div class="text-block pt-3 pb-0">
					          <table class="w-100">
					            <tbody>
					              <tr>
					                <th class="font-weight-normal py-2">Giá thuê sân</th>
					                <td class="text-right py-2">{{$pitch[0]->total_price}} VNĐ</td>
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
					                  <td class="font-weight-bold text-right pt-3">{{$pitch[0]->total_price}} VNĐ</td>
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
<script type="text/javascript" src="../js/javascript.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
</body>
</html>