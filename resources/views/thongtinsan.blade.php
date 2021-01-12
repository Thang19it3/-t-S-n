<!DOCTYPE html>
<html>
<head>
  <title>Tạo đội, tìm đối hay cáp kèo | Nhận xét đánh giá đối thủ sau khi chơi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/thongtinsan.css">
  <link href="http://soccerclub.axiomthemes.com/wp-content/uploads/2016/04/logo.png" rel="shortcut icon" type="image/png">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <link rel="stylesheet" href="css/home.css">
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
@if(count($pitch))
  <section style="background-image: url({!! $pitch[0]->avatar_url !!}); background-position: bottom; background-size: cover;" class="pt-7 pb-5 d-flex align-items-end dark-overlay bg-cover">
    <div class="container overlay-content">
      <div class="d-flex justify-content-between align-items-start flex-column flex-lg-row align-items-lg-end">
        <div class="text-white mb-4 mb-lg-0">
          <h1 class="text-shadow verified orange-text">{!! $pitch[0]->pitch_name !!}</h1>
          <p class="mb-1"><i class="fa-map-marker-alt fas mr-2"></i>{!! $pitch[0]->address !!}, {!! $pitch[0]->district !!}, {!! $pitch[0]->city !!}</p>
          <p class="mb-1 d-flex align-items-center">
              <i class="fas fa-star text-white"></i>
              <span class="ml-1"><a href="#seeReview" class="orange-text" style="text-decoration: none;">Chưa có đánh giá</a></span>
          </p>
          <p class="mb-1 d-flex align-items-center">
            <i class="fas fa-exclamation-triangle mr-1 pb-2"></i>
              <a href="https://www.sporta.vn/users/sign_in" class="orange-text" onclick="alert('Bạn cần đăng nhập để báo lỗi')" aria-pressed="true">Báo lỗi</a>
          </p>
        </div>
        <div class="calltoactions">
            <a href="#bookNow" data-smooth-scroll="" class="btn btn-primary mt-2">Đặt sân Online</a>
        </div>
      </div>
    </div>
  </section>
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div id="bookNow">
            <div class="card border-0 shadow mb-5">
              <div class="card-header bg-gray-100 py-4 border-0" style="padding: .5rem 0.5rem; width: 730px;">
                <div class="media align-items-center">
                  <div class="media-body">
                    <p class="subtitle text-sm text-primary">Chọn ngày đặt</p><br>
                    <div class="mb-0" id="btn-group">
                      <div class="seven-day-picker btn-group" role="group">
                        <?php
                          function get_current_day() {
                          date_default_timezone_set('Asia/Ho_Chi_Minh');
                          $weekday = date("l");
                          $weekday = strtolower($weekday);
                            switch($weekday) {
                                case 'monday':
                                    $weekday = 'Thứ 2';
                                    break;
                                case 'tuesday':
                                    $weekday = 'Thứ 3';
                                    break;
                                case 'wednesday':
                                    $weekday = 'Thứ 4';
                                    break;
                                case 'thursday':
                                    $weekday = 'Thứ 5';
                                    break;
                                case 'friday':
                                    $weekday = 'Thứ 6';
                                    break;
                                case 'saturday':
                                    $weekday = 'Thứ 7';
                                    break;
                                default:
                                    $weekday = 'Chủ nhật';
                                    break;
                            }
                            return $weekday;
                          }
                          function get_current_date($number) {
                            return date('d-m',strtotime(' + '.$number.'days'));
                          }
                          function get_current_date_year($number) {
                            return date('d-m-2021',strtotime(' + '.$number.'days'));
                          }
                        ?>
                        @if( get_current_day() == 'Chủ nhật')
                        <a class="seven-day-picker__date" data-day="Chủ nhật" data-date="@php echo get_current_date_year(0) @endphp" data-remote="true" href="">
                          <strong>CN</strong><br>
                          <span>@php echo get_current_date(0) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 2" data-date="@php echo get_current_date_year(1) @endphp" data-remote="true" href="">
                          <strong>T2</strong><br>
                          <span>@php echo get_current_date(1) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 3" data-date="@php echo get_current_date_year(2) @endphp" data-remote="true" href="">
                          <strong>T3</strong><br>
                          <span>@php echo get_current_date(2) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 4" data-date="@php echo get_current_date_year(3) @endphp" data-remote="true" href="">
                          <strong>T4</strong><br>
                          <span>@php echo get_current_date(3) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 5" data-date="@php echo get_current_date_year(4) @endphp" data-remote="true" href="">
                          <strong>T5</strong><br>
                          <span>@php echo get_current_date(4) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 6" data-date="@php echo get_current_date_year(5) @endphp" data-remote="true" href="">
                          <strong>T6</strong><br>
                          <span>@php echo get_current_date(5) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 7" data-date="@php echo get_current_date_year(6) @endphp" data-remote="true" href="">
                          <strong>T7</strong><br>
                          <span>@php echo get_current_date(6) @endphp</span>
                        </a>
                        @elseif(get_current_day() == 'Thứ 2')
                        <a class="seven-day-picker__date" data-day="Thứ 2" data-date="@php echo get_current_date_year(0) @endphp" data-remote="true" href="">
                          <strong>T2</strong><br>
                          <span>@php echo get_current_date(0) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 3" data-date="@php echo get_current_date_year(1) @endphp" data-remote="true" href="">
                          <strong>T3</strong><br>
                          <span>@php echo get_current_date(1) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 4" data-date="@php echo get_current_date_year(2) @endphp" data-remote="true" href="">
                          <strong>T4</strong><br>
                          <span>@php echo get_current_date(2) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 5" data-date="@php echo get_current_date_year(3) @endphp" data-remote="true" href="">
                          <strong>T5</strong><br>
                          <span>@php echo get_current_date(3) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 6" data-date="@php echo get_current_date_year(4) @endphp" data-remote="true" href="">
                          <strong>T6</strong><br>
                          <span>@php echo get_current_date(4) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 7" data-date="@php echo get_current_date_year(5) @endphp" data-remote="true" href="">
                          <strong>T7</strong><br>
                          <span>@php echo get_current_date(5) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Chủ nhật" data-date="@php echo get_current_date_year(6) @endphp" data-remote="true" href="">
                          <strong>CN</strong><br>
                          <span>@php echo get_current_date(6) @endphp</span>
                        </a>
                        @elseif(get_current_day() == 'Thứ 3')
                        <a class="seven-day-picker__date" data-day="Thứ 3" data-date="@php echo get_current_date_year(0) @endphp" data-remote="true" href="">
                          <strong>T3</strong><br>
                          <span>@php echo get_current_date(0) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 4" data-date="@php echo get_current_date_year(1) @endphp" data-remote="true" href="">
                          <strong>T4</strong><br>
                          <span>@php echo get_current_date(1) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 5" data-date="@php echo get_current_date_year(2) @endphp" data-remote="true" href="">
                          <strong>T5</strong><br>
                          <span>@php echo get_current_date(2) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 6" data-date="@php echo get_current_date_year(3) @endphp" data-remote="true" href="">
                          <strong>T6</strong><br>
                          <span>@php echo get_current_date(3) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 7" data-date="@php echo get_current_date_year(4) @endphp" data-remote="true" href="">
                          <strong>T7</strong><br>
                          <span>@php echo get_current_date(4) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Chủ nhật" data-date="@php echo get_current_date_year(5) @endphp" data-remote="true" href="">
                          <strong>CN</strong><br>
                          <span>@php echo get_current_date(5) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 2" data-date="@php echo get_current_date_year(6) @endphp" data-remote="true" href="">
                          <strong>T2</strong><br>
                          <span>@php echo get_current_date(6) @endphp</span>
                        </a>
                        @elseif(get_current_day() == 'Thứ 4')
                        <a class="seven-day-picker__date" data-day="Thứ 4" data-date="@php echo 
                        get_current_date_year(0) @endphp" data-remote="true" href="">
                          <strong>T4</strong><br>
                          <span>@php echo get_current_date(0) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 5" data-date="@php echo get_current_date_year(1) @endphp" data-remote="true" href="">
                          <strong>T5</strong><br>
                          <span>@php echo get_current_date(1) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 6" data-date="@php echo get_current_date_year(2) @endphp" data-remote="true" href="">
                          <strong>T6</strong><br>
                          <span>@php echo get_current_date(2) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 7" data-date="@php echo get_current_date_year(3) @endphp" data-remote="true" href="">
                          <strong>T7</strong><br>
                          <span>@php echo get_current_date(3) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Chủ nhật" data-date="@php echo get_current_date_year(4) @endphp" data-remote="true" href="">
                          <strong>CN</strong><br>
                          <span>@php echo get_current_date(4) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 2" data-date="@php echo get_current_date_year(5) @endphp" data-remote="true" href="">
                          <strong>T2</strong><br>
                          <span>@php echo get_current_date(5) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 3" data-date="@php echo get_current_date_year(6) @endphp" data-remote="true" href="">
                          <strong>T3</strong><br>
                          <span>@php echo get_current_date(6) @endphp</span>
                        </a>
                        @elseif(get_current_day() == 'Thứ 5')
                        <a class="seven-day-picker__date" data-day="Thứ 5" data-date="@php echo get_current_date_year(0) @endphp" data-remote="true" href="">
                          <strong>T5</strong><br>
                          <span>@php echo get_current_date(0) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 6" data-date="@php echo get_current_date_year(1) @endphp" data-remote="true" href="">
                          <strong>T6</strong><br>
                          <span>@php echo get_current_date(1) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 7" data-date="@php echo get_current_date_year(2) @endphp" data-remote="true" href="">
                          <strong>T7</strong><br>
                          <span>@php echo get_current_date(2) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Chủ nhật" data-date="@php echo get_current_date_year(3) @endphp" data-remote="true" href="">
                          <strong>CN</strong><br>
                          <span>@php echo get_current_date(3) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 2" data-date="@php echo get_current_date_year(4) @endphp" data-remote="true" href="">
                          <strong>T2</strong><br>
                          <span>@php echo get_current_date(4) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 3" data-date="@php echo get_current_date_year(5) @endphp" data-remote="true" href="">
                          <strong>T3</strong><br>
                          <span>@php echo get_current_date(5) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 4" data-date="@php echo get_current_date_year(6) @endphp" data-remote="true" href="">
                          <strong>T4</strong><br>
                          <span>@php echo get_current_date(6) @endphp</span>
                        </a>
                        @elseif(get_current_day() == 'Thứ 6')
                        <a class="seven-day-picker__date" data-day="Thứ 6" data-date="@php echo get_current_date_year(0) @endphp" data-remote="true" href="">
                          <strong>T6</strong><br>
                          <span>@php echo get_current_date(0) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 7" data-date="@php echo get_current_date_year(1) @endphp" data-remote="true" href="">
                          <strong>T7</strong><br>
                          <span>@php echo get_current_date(1) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Chủ nhật" data-date="@php echo get_current_date_year(2) @endphp" data-remote="true" href="">
                          <strong>CN</strong><br>
                          <span>@php echo get_current_date(2) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 2" data-date="@php echo get_current_date_year(3) @endphp" data-remote="true" href="">
                          <strong>T2</strong><br>
                          <span>@php echo get_current_date(3) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 3" data-date="@php echo get_current_date_year(4) @endphp" data-remote="true" href="">
                          <strong>T3</strong><br>
                          <span>@php echo get_current_date(4) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 4" data-date="@php echo get_current_date_year(5) @endphp" data-remote="true" href="">
                          <strong>T4</strong><br>
                          <span>@php echo get_current_date(5) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 5" data-date="@php echo get_current_date_year(6) @endphp" data-remote="true" href="">
                          <strong>T5</strong><br>
                          <span>@php echo get_current_date(6) @endphp</span>
                        </a>
                        @elseif(get_current_day() == 'Thứ 7')
                        <a class="seven-day-picker__date" data-day="Thứ 7" data-date="@php echo get_current_date_year(0) @endphp" data-remote="true" href="">
                          <strong>T7</strong><br>
                          <span>@php echo get_current_date(0) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Chủ nhật" data-date="@php echo get_current_date_year(1) @endphp" data-remote="true" href="">
                          <strong>CN</strong><br>
                          <span>@php echo get_current_date(1) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 2" data-date="@php echo get_current_date_year(2) @endphp" data-remote="true" href="">
                          <strong>T2</strong><br>
                          <span>@php echo get_current_date(2) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 3" data-date="@php echo get_current_date_year(3) @endphp" data-remote="true" href="">
                          <strong>T3</strong><br>
                          <span>@php echo get_current_date(3) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 4" data-date="@php echo get_current_date_year(4) @endphp" data-remote="true" href="">
                          <strong>T4</strong><br>
                          <span>@php echo get_current_date(4) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 5" data-date="@php echo get_current_date_year(5) @endphp" data-remote="true" href="">
                          <strong>T5</strong><br>
                          <span>@php echo get_current_date(5) @endphp</span>
                        </a>
                        <a class="seven-day-picker__date" data-day="Thứ 6" data-date="@php echo get_current_date_year(6) @endphp" data-remote="true" href="">
                          <strong>T6</strong><br>
                          <span>@php echo get_current_date(6) @endphp</span>
                        </a>
                        @endif
                        <div class="other-day">
                          <strong>Ngày khác</strong><br>
                          <input type="text" name="date" id="datepicker" class="datepicker datepicker-venue_check form-control" value=" ">
                        </div>
                      </div>
                    </div>
                    <div class="mt-2">
                      <div style="display: block;">
                        <div class="row">
                          <div class="col s12">
                            <p>Sân còn trống vào các khoảng thời gian sau</p>
                            <ul class="period-list">
                              @if( ($pitch[0]->size) == 5 )
                              <li>
                                <div class="asset_category col s12 m3">
                                  <span class="venue-type">Sân 5<i class="fas fa-male" aria-hidden="true" style="padding-left: 5px;"></i></span>
                                </div>
                                <div class="info col s12 m9">
                                  <p class="time-period period-hour text-center">
                                    <?php $date = new DateTime($pitch[0]->start_time); echo $date->format('H:i') ; ?> - 
                                    <?php $date2 = new DateTime($pitch[0]->end_time); echo $date2->format('H:i') ; ?>
                                      
                                  </p>
                                  <div class="row fast-booking center">
                                    <div>Đặt nhanh 90 phút từ:</div>
                                    <div class="fast-booking" style="width: 100%;">
                                      <div class="fast-booking__btn">
                                        <form class="button_to" method="get" action="http://127.0.0.1:8000/dat-san/{!! $pitch[0]->pitch_id !!}">
                                          <button style="font-size: small; letter-spacing: .1em; text-transform: none; font-weight: normal;" class=" btn btn-outline-primary btn-block btn-sm" type="submit" onclick="get()">
                                            <strong>16:00</strong><br>
                                            Còn trống
                                          </button>
                                          <input type="hidden" name="begin_time" value="16:00">
                                          <input type="hidden" name="end_time" value="17:30">
                                          <input type="hidden" class="day" name="day" value="">
                                          <input type="hidden" class="day_booking" name="date" value="">
                                          <input type="hidden" name="duration" value="1.5">
                                          <input type="hidden" name="id_san" value="">
                                          <input type="hidden" name="loaisan" value="5">
                                        </form>
                                      </div>
                                      <div class="fast-booking__btn">
                                        <form class="button_to" method="get" action="http://127.0.0.1:8000/dat-san/{!! $pitch[0]->pitch_id !!}">
                                          <button style="font-size: small; letter-spacing: .1em; text-transform: none; font-weight: normal;" class=" btn btn-outline-primary btn-block btn-sm" type="submit" onclick="get()">
                                            <strong>17:30</strong><br>
                                            Còn trống
                                          </button>
                                          <input type="hidden" name="begin_time" value="17:30">
                                          <input type="hidden" name="end_time" value="19:00">
                                          <input type="hidden" class="day" name="day" value="">
                                          <input type="hidden" class="day_booking" name="date" value="">
                                          <input type="hidden" name="duration" value="1.5">
                                          <input type="hidden" name="id_san" value="">
                                          <input type="hidden" name="loaisan" value="5">
                                        </form>
                                      </div>
                                      <div class="fast-booking__btn">
                                        <form class="button_to" method="get" action="http://127.0.0.1:8000/dat-san/{!! $pitch[0]->pitch_id !!}">
                                          <button style="font-size: small; letter-spacing: .1em; text-transform: none; font-weight: normal;" class=" btn btn-outline-primary btn-block btn-sm" type="submit" onclick="get()">
                                            <strong>19:00</strong><br>
                                            Còn trống
                                          </button>
                                          <input type="hidden" name="begin_time" value="19:00">
                                          <input type="hidden" name="end_time" value="20:30">
                                          <input type="hidden" class="day" name="day" value="">
                                          <input type="hidden" class="day_booking" name="date" value="">
                                          <input type="hidden" name="duration" value="1.5">
                                          <input type="hidden" name="id_san" value="">
                                          <input type="hidden" name="loaisan" value="5">
                                        </form>
                                      </div>
                                      <div class="fast-booking__btn">
                                        <form class="button_to" method="get" action="http://127.0.0.1:8000/dat-san/{!! $pitch[0]->pitch_id !!}">
                                          <button style="font-size: small; letter-spacing: .1em; text-transform: none; font-weight: normal;" class=" btn btn-outline-primary btn-block btn-sm" type="submit" onclick="get()">
                                            <strong>20:30</strong><br>
                                            Còn trống
                                          </button>
                                          <input type="hidden" name="begin_time" value="20:30">
                                          <input type="hidden" name="end_time" value="22:00">
                                          <input type="hidden" class="day" name="day" value="">
                                          <input type="hidden" class="day_booking" name="date" value="">
                                          <input type="hidden" name="duration" value="1.5">
                                          <input type="hidden" name="id_san" value="">
                                          <input type="hidden" name="loaisan" value="5">
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                              </li>
                              @else
                              <li>
                                
                                <div class="asset_category col s12 m3">
                                  <span class="venue-type">Sân 7<i class="fas fa-male" aria-hidden="true" style="padding-left: 5px;"></i></span>
                                </div>
                                <div class="info col s12 m9">
                                  <p class="time-period period-hour text-center">
                                    <?php $date = new DateTime($pitch[0]->start_time); echo $date->format('H:i') ; ?> - 
                                    <?php $date2 = new DateTime($pitch[0]->end_time); echo $date2->format('H:i') ; ?>
                                  </p>
                                  <div class="row fast-booking center">
                                    <div>Đặt nhanh 90 phút từ:</div>
                                    <div class="fast-booking" style="width: 100%;">
                                      <div class="fast-booking__btn">
                                        <form class="button_to" method="get" action="http://127.0.0.1:8000/dat-san/{!! $pitch[0]->pitch_id !!}">
                                          <button style="font-size: small; letter-spacing: .1em; text-transform: none; font-weight: normal;" class=" btn btn-outline-primary btn-block btn-sm" type="submit" onclick="get()">
                                            <strong>16:00</strong><br>
                                            Còn trống
                                          </button>
                                          <input type="hidden" name="begin_time" value="16:00">
                                          <input type="hidden" name="end_time" value="17:30">
                                          <input type="hidden" class="day" name="day" value="">
                                          <input type="hidden" class="day_booking" name="date" value="">
                                          <input type="hidden" name="duration" value="1.5">
                                          <input type="hidden" name="id_san" value="">
                                          <input type="hidden" name="loaisan" value="7">
                                        </form>
                                      </div>
                                      <div class="fast-booking__btn">
                                        <form class="button_to" method="get" action="http://127.0.0.1:8000/dat-san/{!! $pitch[0]->pitch_id !!}">
                                          <button style="font-size: small; letter-spacing: .1em; text-transform: none; font-weight: normal;" class=" btn btn-outline-primary btn-block btn-sm" type="submit" onclick="get()">
                                            <strong>17:30</strong><br>
                                            Còn trống
                                          </button>
                                          <input type="hidden" name="begin_time" value="17:30">
                                          <input type="hidden" name="end_time" value="19:00">
                                          <input type="hidden" class="day" name="day" value="">
                                          <input type="hidden" class="day_booking" name="date" value="">
                                          <input type="hidden" name="duration" value="1.5">
                                          <input type="hidden" name="id_san" value="">
                                          <input type="hidden" name="loaisan" value="7">
                                        </form>
                                      </div>
                                      <div class="fast-booking__btn">
                                        <form class="button_to" method="get" action="http://127.0.0.1:8000/dat-san/{!! $pitch[0]->pitch_id !!}">
                                          <button style="font-size: small; letter-spacing: .1em; text-transform: none; font-weight: normal;" class=" btn btn-outline-primary btn-block btn-sm" type="submit" onclick="get()">
                                            <strong>19:00</strong><br>
                                            Còn trống
                                          </button>
                                          <input type="hidden" name="begin_time" value="19:00">
                                          <input type="hidden" name="end_time" value="20:30">
                                          <input type="hidden" class="day" name="day" value="">
                                          <input type="hidden" class="day_booking" name="date" value="">
                                          <input type="hidden" name="duration" value="1.5">
                                          <input type="hidden" name="id_san" value="">
                                          <input type="hidden" name="loaisan" value="7">
                                        </form>
                                      </div>
                                      <div class="fast-booking__btn">
                                        <form class="button_to" method="get" action="http://127.0.0.1:8000/dat-san/{!! $pitch[0]->pitch_id !!}">
                                          <button style="font-size: small; letter-spacing: .1em; text-transform: none; font-weight: normal;" class=" btn btn-outline-primary btn-block btn-sm" type="submit" onclick="get()">
                                            <strong>20:30</strong><br>
                                            Còn trống
                                          </button>
                                          <input type="hidden" name="begin_time" value="20:30">
                                          <input type="hidden" name="end_time" value="22:00">
                                          <input type="hidden" class="day" name="day" value="">
                                          <input type="hidden" class="day_booking" name="date" value="">
                                          <input type="hidden" name="duration" value="1.5">
                                          <input type="hidden" name="id_san" value="">
                                          <input type="hidden" name="loaisan" value="7">
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                
                              </li>
                              @endif
                            </ul>
                            <center class="mt-5">
                              <div style="color: gray;">Bạn muốn đặt giờ khác?</div>
                              <a href="#" data-toggle="modal" data-target="#bookingModal" class="btn btn-datsan btn-primary" style="letter-spacing: .1em;text-transform: uppercase;font-weight: bold;">Đặt sân</a>           
                            </center>
                          </div>
                        </div>
                      </div>
                      <div class="modal fade" id="bookingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h3 class="col-10 modal-title text-center orange-text text-uppercase">{!! $pitch[0]->pitch_name !!}</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form action="http://127.0.0.1:8000/dat-san/{!! $pitch[0]->pitch_id !!}" name="booking_form" method="get">
                                <input type="hidden" name="id_san" value="">
                                <div class="row mb-2">
                                  <div class="col-12 text-center">
                                    <span class="orange-text"> Địa chỉ:  </span>
                                    <i>{!! $pitch[0]->address !!}, {!! $pitch[0]->district !!}, {!! $pitch[0]->city !!}</i>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6 pl-4">
                                    <h5 class="col-form-label">Loại sân</h5>
                                    <select name="venue_type" id="venue_type" required="required" class="form-control">
                                      @if($pitch[0]->size == 5)
                                      <option  value="5">Sân 5 người</option>
                                      @else
                                      <option  value="7">Sân 7 người</option>
                                      @endif
                                    </select>
                                  </div>
                                  <div class="col-md-6 pl-4">
                                    <h5 class="col-form-label">Ngày đặt</h5>
                                    <select name="date" id="date" class="form-control">
                                      <option value="@php echo get_current_date_year(0) @endphp">@php echo get_current_date_year(0) @endphp</option>
                                      <option value="@php echo get_current_date_year(1) @endphp">@php echo get_current_date_year(1) @endphp</option>
                                      <option value="@php echo get_current_date_year(2) @endphp">@php echo get_current_date_year(2) @endphp</option>
                                      <option value="@php echo get_current_date_year(3) @endphp">@php echo get_current_date_year(3) @endphp</option>
                                      <option value="@php echo get_current_date_year(4) @endphp">@php echo get_current_date_year(4) @endphp</option>
                                      <option value="@php echo get_current_date_year(5) @endphp">@php echo get_current_date_year(5) @endphp</option>
                                      <option value="@php echo get_current_date_year(6) @endphp">@php echo get_current_date_year(6) @endphp</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6 pl-4">
                                    <h5 class="col-form-label">Đặt từ</h5>
                                    <select name="begin_time" id="begin_time_2" required="required" class="form-control"><option value="00:00">00:00</option>
                                    <option value="00:30">00:30</option>
                                    <option value="01:00">01:00</option>
                                    <option value="01:30">01:30</option>
                                    <option value="02:00">02:00</option>
                                    <option value="02:30">02:30</option>
                                    <option value="03:00">03:00</option>
                                    <option value="03:30">03:30</option>
                                    <option value="04:00">04:00</option>
                                    <option value="04:30">04:30</option>
                                    <option value="05:00">05:00</option>
                                    <option value="05:30">05:30</option>
                                    <option value="06:00">06:00</option>
                                    <option value="06:30">06:30</option>
                                    <option value="07:00">07:00</option>
                                    <option value="07:30">07:30</option>
                                    <option value="08:00">08:00</option>
                                    <option value="08:30">08:30</option>
                                    <option value="09:00">09:00</option>
                                    <option value="09:30">09:30</option>
                                    <option value="10:00">10:00</option>
                                    <option value="10:30">10:30</option>
                                    <option value="11:00">11:00</option>
                                    <option value="11:30">11:30</option>
                                    <option value="12:00">12:00</option>
                                    <option value="12:30">12:30</option>
                                    <option value="13:00">13:00</option>
                                    <option value="13:30">13:30</option>
                                    <option value="14:00">14:00</option>
                                    <option value="14:30">14:30</option>
                                    <option value="15:00">15:00</option>
                                    <option value="15:30">15:30</option>
                                    <option value="16:00">16:00</option>
                                    <option value="16:30">16:30</option>
                                    <option value="17:00">17:00</option>
                                    <option value="17:30">17:30</option>
                                    <option value="18:00">18:00</option>
                                    <option value="18:30">18:30</option>
                                    <option value="19:00">19:00</option>
                                    <option value="19:30">19:30</option>
                                    <option value="20:00">20:00</option>
                                    <option value="20:30">20:30</option>
                                    <option value="21:00">21:00</option>
                                    <option value="21:30">21:30</option>
                                    <option value="22:00">22:00</option>
                                    <option value="22:30">22:30</option>
                                    <option value="23:00">23:00</option>
                                    <option value="23:30">23:30</option>
                                    </select>
                                  </div>
                                  <div class="col-md-6 pl-4">
                                    <h5 class="col-form-label">Thời lượng</h5>
                                    <select name="duration" id="how_long" required="required" class="form-control">
                                      <option value="1">60 phút</option>
                                      <option value="1.5">90 phút</option>
                                      <option value="2">120 phút</option>
                                    </select>
                                  </div>
                                </div>
                                <!-- <div class="row form_message" style="display: none;">
                                  <div class="col-12 text-center mt-3"><span style="color: red; margin: 0px;"><i class="fas fa-exclamation">Giờ này đã kín. Xin vui lòng chọn giờ khác</i></span>
                                  </div>
                                </div> -->
                                <div class="col-12 text-center mt-3">
                                  <button type="submit" onclick="get2()" class="btn btn-datsan booking-form-submit-btn">Đặt sân</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="text-block">
            <p class="subtitle text-sm text-primary pb-1">Mô tả - Thông tin kèm theo</p>
            <p></p>
            <p>{!! $pitch[0]->description !!}</p>
            <p></p>
          </div>
          <div class="text-block">
            <p class="subtitle text-sm text-primary pb-1">Tiện ích</p>
            <ul class="amenities-list list-inline">
              <div>
                <li class="list-inline-item mb-3">
                  <div class="d-flex align-items-center">
                    <div class="icon-circle bg-warning mr-2"><i class="fas fa-exclamation"></i></div>
                    <span>Cần đặt đọc</span>
                  </div>
                </li>
                <li class="list-inline-item mb-3">
                  <div class="d-flex align-items-center">
                    <div class="icon-circle bg-warning mr-2"><i class="fas fa-exclamation"></i></div>
                    <span>Tốn phí mượn bóng</span>
                  </div>
                </li>
                <li class="list-inline-item mb-3">
                  <div class="d-flex align-items-center">
                    <div class="icon-circle bg-warning mr-2"><i class="fas fa-exclamation"></i></div>
                    <span>Tốn phí nước uống</span>
                  </div>
                </li>
              </div>
            </ul>
          </div>
          <div class="text-block" id="map">
            <p class="subtitle text-sm text-primary pb-1">Bản đồ</p>
            <p><a href="https://www.google.com/maps/dir//10.868692027565,106.790316870801" target="_blank" style="text-decoration: none;color: #3d348b;">Tìm đường tới sân</a></p>
            <iframe src="{!! $pitch[0]->url_ggmap !!}" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
          <div class="text-block">
            <p class="subtitle text-sm text-primary pb-1">Hình ảnh</p>
            <div class="row gallery ml-n1 mr-n1">
              <div class="col-lg-4 col-6 px-1 mb-2">
                <a href="">
                  <img src="" class="img-fluid">
                </a>
              </div>
              <div class="col-lg-4 col-6 px-1 mb-2">
                <a href="">
                  <img src="" class="img-fluid">
                </a>
              </div>
            </div>
          </div>
          <div class="text-block">
            <p class="subtitle text-sm text-primary">Đánh giá</p>
            <div class="media d-block d-sm-flex review">
              <div class="text-md-center mr-4 mr-xl-5">
                <img src="https://www.sporta.vn/assets/default_user_image-dc0209ffeabf7fa68fcbc7d512a6ceeb051ad3fb16706d26679cccdcf3384043.png" class="d-block avatar avatar-xl p-2 mb-2">
                <span class="text-uppercase text-muted text-sm">T3, 01-10-2019</span>
              </div>
              <div class="media-body">
                <h6 class="mt-2 mb-1">tlthang.19it3@vku.udn.vn</h6>
                <div class="mb-2">
                  <i class="fa fa-xs fa-star text-primary"></i>
                  <i class="fa fa-xs fa-star text-primary"></i>
                  <i class="fa fa-xs fa-star text-primary"></i>
                  <i class="fa fa-xs fa-star text-primary"></i>
                  <i class="fa fa-xs fa-star text-primary"></i>
                </div>
                <p class="text-muted text-sm"></p>
              </div>

            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="pl-xl-2">
            <div>
              <button type="button" class="btn btn-outline-secondary w-100 pt-3 pb-3 mb-3 orange" data-toggle="modal"
              data-target="#fee_table" style="letter-spacing: .1em;text-transform: uppercase;font-weight: bold;">BẢNG GIÁ</button>
              <div class="modal fade" id="fee_table" tabindex="-1" role="dialog" aria-labelledby="fee_table" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Bảng giá</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="container-fluid">
                        <table class="table table-bordered text-sm mb-0">
                          @if( ($pitch[0]->size) == 5)
                          <thead class="thead-dark">
                            <tr>
                              <th class="pl-0 border-0 text-center" colspan="2">SÂN 5 NGƯỜI</th>
                            </tr>
                          </thead>
                            <tbody class="fee-hour">
                                <tr>
                                  <td>Chủ Nhật, Thứ Hai, Thứ Ba, Thứ Tư, Thứ Năm, Thứ Sáu, Thứ Bảy</td>
                                  <td>
                                      00:00 - 06:00: {!! $pitch[0]->price_per_hour !!} / giờ<br>
                                      06:00 - 16:00: {!! $pitch[0]->price_per_hour !!} / giờ<br>
                                      16:00 - 17:00: {!! $pitch[0]->price_per_hour !!} / giờ<br>
                                      17:00 - 24:00: {!! $pitch[0]->price_per_hour !!} / giờ<br>
                                  </td>
                                </tr>
                            </tbody>
                          @else
                            <thead class="thead-dark">
                            <tr>
                              <th class="pl-0 border-0 text-center" colspan="2" style="background-color:#3d348b;">SÂN 7 NGƯỜI</th>
                            </tr>
                          </thead>
                            <tbody class="fee-hour">
                                <tr>
                                  <td>Chủ Nhật, Thứ Hai, Thứ Ba, Thứ Tư, Thứ Năm, Thứ Sáu, Thứ Bảy</td>
                                  <td>
                                      00:00 - 06:00: {!! $pitch[0]->price_per_hour !!} / giờ<br>
                                      06:00 - 16:00: {!! $pitch[0]->price_per_hour !!} / giờ<br>
                                      16:00 - 17:00: {!! $pitch[0]->price_per_hour !!} / giờ<br>
                                      17:00 - 24:00: {!! $pitch[0]->price_per_hour !!} / giờ<br>
                                  </td>
                                </tr>
                            </tbody>
                          @endif
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="card border-0 shadow mb-2" id="showContact">
              <div class="card-header bg-gray-100 py-2 border-0">
                <div class="media align-items-center">
                  <div class="media-body">
                    <p class="subtitle text-sm text-primary">Liên hệ</p>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <ul class="list-unstyled mb-4">
                  <li><a href="#map" class="text-blue text-sm text-decoration-none" style="color: #3d348b;">
                    <i class="fa-map-marker-alt fas mr-2"></i>
                    <span class="text-muted">{!! $pitch[0]->address !!}, {!! $pitch[0]->district !!}, {!! $pitch[0]->city !!}</span>
                  </a></li>
                </ul>
                <div>
                  <p><a href="" class="text-secondary text-decoration-none add_to_favorite_list">
                    <i class="far fa-heart"></i>
                    Theo dõi sân để nhận thông báo và lịch sân trống
                  </a></p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
@else
  Không có giữ liệu
@endif
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