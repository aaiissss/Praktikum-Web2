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
  <title>Choose</title>
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
  <!-- choose section start -->
  <div class="choose_section layout_padding">
    <div class="container">
      <h1 class="choose_taital"><span>Why </span> <img src="{{ asset('front/images/icon-1.png') }}"> <span style="color: #1f1f1f">Choose
          Us</span></h1>
      <p class="choose_text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
        aliqua</p>
      <div class="choose_section_2 layout_padding">
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="choose_box">
              <h1 class="client_taital">12004+</h1>
              <h4 class="client_text">Our clients</h4>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="choose_box">
              <h1 class="client_taital">10004+</h1>
              <h4 class="client_text">Happy clients</h4>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="choose_box">
              <h1 class="client_taital">804+</h1>
              <h4 class="client_text">Supports</h4>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="choose_box">
              <h1 class="client_taital">905+</h1>
              <h4 class="client_text">Awards</h4>
            </div>
          </div>
        </div>
        <div class="image_3"><img src="{{ asset('front/images/img-3.png') }}"></div>
        <div class="get_bt"><a href="#">Get A quote</a></div>
      </div>
    </div>
  </div>
  <!-- choose section end -->

  @include('tugas10.layout.bottom')