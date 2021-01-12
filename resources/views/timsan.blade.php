<!DOCTYPE html>
<html>
<head>
	<title>Tạo đội, tìm đối hay cáp kèo | Nhận xét đánh giá đối thủ sau khi chơi</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/timsan.css">
  <link href="http://soccerclub.axiomthemes.com/wp-content/uploads/2016/04/logo.png" rel="shortcut icon" type="image/png">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <link rel="stylesheet" href="css/home.css">
  <style type="text/css">
    a:hover{
      text-decoration: none;
    }
  </style>
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
<div class="container-fluid pt-3 pb-3 border-bottom px-lg-5">
  <div class="row justify-content-md-center">
    <div class="col-xl-9">
      <div class="search-bar p-3 p-lg-1 pl-lg-4" style="border-radius: 0px !important;">
        <form id="main-search-form" action="http://127.0.0.1:8000/search/search_pitch" method="get">
          <div class="row">
            <div class="col-lg-5 d-flex align-items-center form-group" style="display: flex!important;">
              <div class="input-wrapper">
                <input type="text" name="pitch_name_search" value="" id="search-input" placeholder="Tên Quận hoặc tên sân bóng" class="form-control border-0 shadow-0 " >

              </div>
            </div>
            <div class="col-lg-3 d-flex align-items-center form-group">
              <input type="text" name="date" id="datepicker" class="form-control border-0 shadow-0" value="12-12-2020">
            </div>
            <div class="col-lg-2 d-flex align-items-center form-group">
              <input value="13:00" type="text" id="timepicker" name="begin_time" title="Vào lúc" placeholder="Vào lúc" class="form-control border-0 shadow-0 timepicker " >
            </div>
            <div class="col-lg-2">
              <button type="submit" class="btn btn-block h-100" id="main-search__submit" style="letter-spacing: .1em;text-transform: uppercase;font-weight: bold;color: #fff;background-color: #fc9600;border-color: #fc9600;">Tìm kiếm</button>
            </div>
          </div>
        </form></div>
        <div class="search-filter shadow mt-1 mb-1">
          <ul class="filter-list d-flex m-0 p-1">
            <li class=" filter-list__item__district p-0 dropdown" style="position: relative;">
              <button type="button" class="btn dropdown-toggle filter-item" id="district" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <strong>Quận / Huyện</strong><br>
                <span >
                    <span class="item-tag">Quận Hải Châu</span>
                </span>
              </button>
              <div id="district-dropdown" class="dropdown-menu dropdown-menu-left" aria-labelledby="district" style="max-width: 860px; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(19px, -74px, 0px);">
                <div class="d-flex  dropdown-wrapper">
                  <div class="p-1 m-2 menu-left flex-wrap d-flex">
                        <div class="d-inline m-1 pl-2 " data-value="364" tabindex="-1">
                          <input type="checkbox" value="364" name="district_ids[]" id="Huyện Hòa Vang">&nbsp;
                          <label for="Huyện Hòa Vang">Huyện Hòa Vang</label>
                        </div>
                        <div class="d-inline m-1 pl-2 " data-value="363" tabindex="-1">
                          <input type="checkbox" value="363" name="district_ids[]" id="Quận Cẩm Lệ">&nbsp;
                          <label for="Quận Cẩm Lệ">Quận Cẩm Lệ</label>
                        </div>
                        <div class="d-inline m-1 pl-2 " data-value="360" tabindex="-1">
                          <input type="checkbox" value="360" name="district_ids[]" id="Quận Hải Châu">&nbsp;
                          <label for="Quận Hải Châu">Quận Hải Châu</label>
                        </div>
                        <div class="d-inline m-1 pl-2 " data-value="358" tabindex="-1">
                          <input type="checkbox" value="358" name="district_ids[]" id="Quận Liên Chiểu">&nbsp;
                          <label for="Quận Liên Chiểu">Quận Liên Chiểu</label>
                        </div>
                        <div class="d-inline m-1 pl-2 " data-value="362" tabindex="-1">
                          <input type="checkbox" value="362" name="district_ids[]" id="Quận Ngũ Hành Sơn">&nbsp;
                          <label for="Quận Ngũ Hành Sơn">Quận Ngũ Hành Sơn</label>
                        </div>
                        <div class="d-inline m-1 pl-2 " data-value="361" tabindex="-1">
                          <input type="checkbox" value="361" name="district_ids[]" id="Quận Sơn Trà">&nbsp;
                          <label for="Quận Sơn Trà">Quận Sơn Trà</label>
                        </div>
                        <div class="d-inline m-1 pl-2 " data-value="359" tabindex="-1">
                          <input type="checkbox" value="359" name="district_ids[]" id="Quận Thanh Khê">&nbsp;
                          <label for="Quận Thanh Khê">Quận Thanh Khê</label>
                        </div>
                  </div>
                  <div class="p-1 m-2 menu-right flex-grow">
                    <button type="button" class="btn btn-block" id="district-submit" style="letter-spacing: .1em;text-transform: uppercase;font-weight: bold;color: #fff;background-color: #fc9600;border-color: #fc9600;">Tìm kiếm</button>
                    <button type="button" class="btn btn-light btn-block" name="district-reset">Bỏ chọn</button>
                  </div>
                </div>
              </div>
            </li>
            <li class="filter-list__item  filter-list__item__district__venue_type flex-fill p-0">
              <button type="button" class="btn dropdown-toggle filter-item" id="venue_type_filter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <strong class="filter-item__title">Loại Sân</strong><br>
                <span class="filter_value_loaisan">5 người</span>
              </button>
              <input type="hidden" class="size" name="size" value="5">
              <ul class="dropdown-menu dropdown-menu-right venue-type-dropdown" aria-labelledby="venue_type_selector">
                <a href="http://127.0.0.1:8000/search/5"><button class="dropdown-item" id="loaisan" value="5">5 người</button></a>
                <a href="http://127.0.0.1:8000/search/7"><button class="dropdown-item" id="loaisan1" value="7">7 người</button></a>
                <a href="http://127.0.0.1:8000/11"><button class="dropdown-item" id="loaisan2" value="11">11 người</button></a>
              </ul>
            </li>
            <li class="filter-list__item filter-list__item__district__duration flex-fill p-0">
              <button class="btn dropdown-toggle filter-item" id="duration_filter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <strong class="filter-item__title">Trong bao lâu?</strong><br>
                <span class="filter_value_time">1 giờ</span>
              </button>
              <input type="hidden" class="duration" name="duration" value="1">
              <ul class="dropdown-menu dropdown-menu-right duration-dropdown" aria-labelledby="duration_selector" style="width: 200px;">
                <a href="#"><button class="dropdown-item" id="t1" value="1">1 giờ</button></a>
                <a href="#"><button class="dropdown-item" id="t2" value="1.5">1.5 giờ</button></a>
                <a href="#"><button class="dropdown-item" id="t3" value="2" >2 giờ</button></a>
              </ul>
            </li>
          </ul>
        </div>
    </div>
  </div>
</div>
<div class="container-fluid py-3 px-lg-5">
  <div class="row justify-content-md-center">
    <div class="col-lg-8">
      <div class="d-flex justify-content-between align-items-center flex-column flex-md-row mb-4">
        <div class="mr-3">
        </div>
        <div class="d-flex justify-content-between align-items-center ">
          <label class="form-label mr-2" style="color: #868e96;font-size: .8rem;text-transform: uppercase;letter-spacing: 0.1em;">Sắp xếp theo</label>
          <div class="dropdown bootstrap-select dropup" style="width: 100px;">
          <a href="http://127.0.0.1:8000/tim-san"><button class="btn btn-info">Tất cả</button></a>
        </div>
        </div>
      </div>
      <ul class="d-flex flex-column bd-highlight mb-4 venue-list">
        @foreach($pitch as $row)
    	   <li class="d-flex mb-2 venue-item bg-light">
            <div class="venue-item__wrapper border-0 shadow">
              <div class="venue-item__main">
                <div class="p-2 venue-item-image">
                  <img class="img-fluid" src="{{$row->avatar_url}}">
                </div>
                <div class="p-1 m-2 venue-item-details">
                  <div class="venue-item__name venue-item__link mb-1">
                    <a href="http://127.0.0.1:8000/{{$row->pitch_id}}" class="text-decoration-none">{{$row->pitch_name}}</a>
                  </div>
                  <div class="venue-item__address venue-item__link mb-2">
                    <i class="fas fa-map-marker-alt"></i> {{$row->address}}, {{$row->district}}
                  </div>
                  <div class="d-flex align-items-center">
                    <div class="fas fa-mobile-alt mr-2"></div>
                        <span class="text-muted phone-number">{{$row->phone_number}}</span>
                  </div>
                </div>
              </div>
              <div class="venue-item-actions">
                <div class="p-3 venue-item-actions__wrapper">
                    <div class="venue-item venue-item-actions__btn">
                        <a class="btn btn-secondary btn-block btn_type_primary" href="http://127.0.0.1:8000/{{$row->pitch_id}}" style="letter-spacing: .1em;text-transform: uppercase;font-weight: bold;">Đặt sân</a>
                    </div>
                </div>
              </div>
            </div>
          </li>
        @endforeach  
      </ul>
    </div>
  </div>
</div>
  <!-- Pagination -->
  <div class="justify-content-center d-flex">{!! $pitch->links() !!}</div>
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