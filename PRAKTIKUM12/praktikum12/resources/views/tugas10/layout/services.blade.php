<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>Services</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- bootstrap css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('front/css/bootstrap.min.css') }}">
  <link rel="shortcut icon" href="{{ asset('front/images/icon-1.png') }}" type="">
  <!-- style css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('front/css/style.css') }}">
  <!-- Responsive-->
  <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">
  <!-- fevicon -->
  <link rel="icon" href="{{ asset('front/images/fevicon.png') }}" type="image/gif" />
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="{{ asset('front/css/jquery.mCustomScrollbar.min.css') }}">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <!-- owl stylesheets -->
  <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('front/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
    media="screen">

</head>

<body>
  <!--header section start -->
  <div class="header_section background_bg">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div class="logo"><a href="{{ url('index') }}"><img src="{{ asset('front/images/logo.png') }}"></a></div>
        </div>
        <div class="col-md-9">
          <div class="menu_text">
            <ul>
              <div class="togle_3">
                <div class="menu_main">
                  <div class="padding_left0"><a href="#">Register</a>
                    <span class="padding_left0"><a href="#">Login</a></span>
                  </div>
                </div>
                <div class="shoping_bag"><img src="{{ asset('front/images/search-icon.png') }}"></div>
              </div>
              <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                  <a href="{{ url('index') }}">Home</a>
                  <a href="{{ url('services') }}">Services</a>
                  <a href="{{ url('about') }}">About</a>
                  <a href="{{ url('choose') }}">Choose</a>
                  <a href="{{ url('team') }}">Team</a>
                  <a href="{{ url('contact') }}">Contact Us</a>
                </div>
              </div>
              <span class="navbar-toggler-icon"></span>
              <span onclick="openNav()"><img src="{{ asset('front/images/toggle-icon.png') }}" class="toggle_menu"></span>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- header section end -->
  <!-- services section start -->
  <div class="services_section layout_padding">
    <div class="container">
      <h1 class="services_taital"><span>Our</span> <img src="{{ asset('front/images/icon-1.png') }}"> <span
          style="color: #1f1f1f">Services</span></h1>
      <p class="services_text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
        aliqua</p>
      <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="services_section_2 layout_padding">
              <div class="row">
                <div class="col-md-6">
                  <div class="box_section active">
                    <div class="tiles_img"></div>
                    <h3 class="tile_text active">Tile & Grout</h3>
                    <p class="lorem_text active">exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Duis aute irure dolor </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box_section">
                    <div class="tiles_img_1"></div>
                    <h3 class="tile_text">Carpet Cleaning</h3>
                    <p class="lorem_text">exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                      aute irure dolor</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="services_section_2 layout_padding">
              <div class="row">
                <div class="col-md-6">
                  <div class="box_section active">
                    <div class="tiles_img"></div>
                    <h3 class="tile_text active">Tile & Grout</h3>
                    <p class="lorem_text active">exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Duis aute irure dolor </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box_section">
                    <div class="tiles_img_1"></div>
                    <h3 class="tile_text">Carpet Cleaning</h3>
                    <p class="lorem_text">exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                      aute irure dolor</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="services_section_2 layout_padding">
              <div class="row">
                <div class="col-md-6">
                  <div class="box_section active">
                    <div class="tiles_img"></div>
                    <h3 class="tile_text active">Tile & Grout</h3>
                    <p class="lorem_text active">exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Duis aute irure dolor </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box_section">
                    <div class="tiles_img_1"></div>
                    <h3 class="tile_text">Carpet Cleaning</h3>
                    <p class="lorem_text">exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                      aute irure dolor</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
      </div>
    </div>
  </div>
  <!-- services section start -->

  @include('tugas10.layout.bottom')