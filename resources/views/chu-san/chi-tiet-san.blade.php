
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Chi tiết sân
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white">
      
      <div class="logo"><a href="" class="simple-text logo-normal">
          {{ Auth::guard('owner')->user()->name}}
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="http://localhost:81/assignmentselect/public/quan-ly">
              <i class="material-icons">dashboard</i>
              <p>Quản lý đặt sân</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="http://localhost:81/assignmentselect/public/chi-tiet">
              <i class="material-icons">create</i>
              <p>Thông tin sân</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="http://localhost:81/assignmentselect/public/trusted-user">
              <i class="material-icons">group</i>
              <p>Khách hàng thân thiết</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="http://localhost:81/assignmentselect/public/owner">
              <i class="material-icons">person</i>
              <p>Thông tin cá nhân</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Chi tiết</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <!-- <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p> -->
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <!-- <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a> -->
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="http://localhost/assignmentselect/public/owner">Thông tin</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Đăng xuất</a>
                  <form id="logout-form" action="owner_logout" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">

          <div><button class="btn btn-success" data-toggle="modal" data-target="#add">Thêm địa điểm mới</button></div>
          <div class="row">
            @foreach($pitch as $row)
            <div class="col-md-4">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title text-uppercase">{{$row->pitch_name}}</h4>
                </div>
                <div class="card-body">
                  <img src="{{$row->avatar_url}}" class="card-img-top" style="height: 200px;">
                  <p><h5>{{$row->address}}</h5></p>
                  <p>{{$row->description}}</p>
                  <a href="#" data-toggle="modal" data-target="#{{$row->pitch_id}}" class="btn btn-primary">Sửa</a>
                </div>
                </div>
              </div>
            @endforeach
            </div>
            <div class="justify-content-center d-flex">{!! $pitch->links() !!}</div>
          </div>
        </div>
        @foreach($pitch as $row)
        <div class="modal fade" id="{{$row->pitch_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h3 class="modal-title">Sửa thông tin địa điểm</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form action="http://localhost/assignmentselect/public/update_pitch/{{$row->pitch_id}}" name="booking_form" method="post">
                                @csrf
                                <input type="hidden" name="id_san" value="">
                                <div class="row">
                                  <div class="col-md-6 pl-4">
                                    <h5 class="col-form-label">Tên sân</h5>
                                    <input type="text" name="pitch_name" class="form-control" value="{{$row->pitch_name}}">
                                  </div>
                                  <div class="col-md-6 pl-4">
                                    <h5 class="col-form-label">Đường dẫn ảnh sân</h5>
                                    <input type="text" name="image" class="form-control" value="{{$row->avatar_url}}">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 pl-4">
                                    <h5 class="col-form-label">Mô tả</h5>
                                    <input type="text" name="des" class="form-control" value="{{$row->description}}">
                                  </div>
                                  
                                </div>
                                <div class="row">
                                  <div class="col-md-6 pl-4">
                                    <h5 class="col-form-label">Số điện thoại</h5>
                                    <input type="text" name="phone" class="form-control" value="{{$row->phone_number}}">
                                  </div>
                                  <div class="col-md-3 pl-4">
                                    <h5 class="col-form-label">Thời gian bắt đầu</h5>
                                    <input type="text" name="start_time" class="form-control" value="{{$row->start_time}}">
                                  </div>
                                  <div class="col-md-3 pl-4">
                                    <h5 class="col-form-label">Thời gian kết thúc</h5>
                                    <input type="text" name="end_time" class="form-control" value="{{$row->end_time}}">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6 pl-4">
                                    <h5 class="col-form-label">Địa chỉ</h5>
                                    <input type="text" name="address" class="form-control" value="{{$row->address}}">
                                  </div>
                                  <div class="col-md-3 pl-4">
                                    <h5 class="col-form-label">Quận/Huyện</h5>
                                    <select class="form-control" name="district" value="{{$row->district}}">
                                      <option>Huyện Hòa Vang</option>
                                      <option>Quận Cẩm Lệ</option>
                                      <option selected="selected">Quận Hải Châu</option>
                                      <option>Quận Liên Chiểu</option>
                                      <option>Quận Ngũ Hành Sơn</option>
                                      <option>Quận Sơn Trà</option>
                                     
                                    </select>
                                  </div>
                                  <div class="col-md-3 pl-4">
                                    <h5 class="col-form-label">Thành phố/Tỉnh</h5>
                                    <select class="form-control" name="city" value="{{$row->city}}"> 
                                      <option>Thành phố Đà nẵng</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6 pl-4">
                                    <h5 class="col-form-label">Loại sân</h5>
                                    <input type="text" name="size" class="form-control" value="{{$row->size}}">
                                  </div>
                                  <div class="col-md-6 pl-4">
                                    <h5 class="col-form-label">Giá tiền mỗi giờ</h5>
                                    <input type="text" name="price_per_hour" class="form-control" value="{{$row->price_per_hour}}">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 pl-4">
                                    <h5 class="col-form-label">Đường dẫn Google Map</h5>
                                    <input type="text" name="url_ggmap" class="form-control" value="{{$row->url_ggmap}}">
                                  </div>
                                </div>
                                <!-- <div class="row form_message" style="display: none;">
                                  <div class="col-12 text-center mt-3"><span style="color: red; margin: 0px;"><i class="fas fa-exclamation">Giờ này đã kín. Xin vui lòng chọn giờ khác</i></span>
                                  </div>
                                </div> -->
                                <div class="col-12 text-center mt-3">
                                  <button type="submit" class="btn btn-primary">Sửa</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
        </div>
        @endforeach
        <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h3 class="modal-title">Thêm địa điểm</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form action="add_pitch" name="booking_form" method="post">
                                @csrf
                                <div class="row">
                                  <div class="col-md-6 pl-4">
                                    <h5 class="col-form-label">Tên sân</h5>
                                    <input type="text" name="pitch_name_new" class="form-control">
                                  </div>
                                  <div class="col-md-6 pl-4">
                                    <h5 class="col-form-label">Đường dẫn ảnh sân</h5>
                                    <input type="text" name="image_new" class="form-control">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 pl-4">
                                    <h5 class="col-form-label">Mô tả</h5>
                                    <input type="text" name="des_new" class="form-control">
                                  </div>
                                  
                                </div>
                                <div class="row">
                                  <div class="col-md-6 pl-4">
                                    <h5 class="col-form-label">Số điện thoại</h5>
                                    <input type="text" name="phone_new" class="form-control">
                                  </div>
                                  <div class="col-md-3 pl-4">
                                    <h5 class="col-form-label">Thời gian bắt đầu</h5>
                                    <input type="text" name="start_time_new" class="form-control" value="00:00">
                                  </div>
                                  <div class="col-md-3 pl-4">
                                    <h5 class="col-form-label">Thời gian kết thúc</h5>
                                    <input type="text" name="end_time_new" class="form-control" value="23:00">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6 pl-4">
                                    <h5 class="col-form-label">Địa chỉ</h5>
                                    <input type="text" name="address_new" class="form-control">
                                  </div>
                                  <div class="col-md-3 pl-4">
                                    <h5 class="col-form-label">Quận/Huyện</h5>
                                    <select class="form-control" name="district_new">
                                      <option>Huyện Hòa Vang</option>
                                      <option>Quận Cẩm Lệ</option>
                                      <option>Quận Hải Châu</option>
                                      <option>Quận Liên Chiểu</option>
                                      <option>Quận Ngũ Hành Sơn</option>
                                      <option>Quận Sơn Trà</option>
                                     
                                    </select>
                                  </div>
                                  <div class="col-md-3 pl-4">
                                    <h5 class="col-form-label">Thành phố/Tỉnh</h5>
                                    <select class="form-control" name="city_new">
                                      <option>Thành phố Đà nẵng</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6 pl-4">
                                    <h5 class="col-form-label">Loại sân</h5>
                                    <input type="text" name="size_new" class="form-control">
                                  </div>
                                  <div class="col-md-6 pl-4">
                                    <h5 class="col-form-label">Giá tiền mỗi giờ</h5>
                                    <input type="text" name="price_per_hour_new" class="form-control">
                                    <input type="hidden" name="status_new" class="form-control" value="1">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 pl-4">
                                    <h5 class="col-form-label">Đường dẫn Google Map</h5>
                                    <input type="text" name="url_ggmap_new" class="form-control" value="{{$row->url_ggmap}}">
                                  </div>
                                </div>
                                <!-- <div class="row form_message" style="display: none;">
                                  <div class="col-12 text-center mt-3"><span style="color: red; margin: 0px;"><i class="fas fa-exclamation">Giờ này đã kín. Xin vui lòng chọn giờ khác</i></span>
                                  </div>
                                </div> -->
                                <div class="col-12 text-center mt-3">
                                  <button type="submit" class="btn btn-primary">Thêm</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
        </div>
      </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="./assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="./assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="./assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="./assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="./assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="./assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="./assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="./assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="./assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="./assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="./assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="./assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="./assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="./assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>