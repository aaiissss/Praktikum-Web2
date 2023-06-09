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
  <title>About</title>
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
  <!-- about section start -->
  <div class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div><img src="{{ asset('front/images/img-2.png') }}" class="image_2"></div>
        </div>
        <div class="col-md-6">
          <h1 class="services_taital"><span>About </span> <img src="{{ asset('front/images/icon-1.png') }}"> <span
              style="color: #1f1f1f">Cleaning</span></h1>
          <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,Lorem ipsum dolor sit amet, consectetur
            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          </p>
          <div class="contact_bt_1"><a href="#">READ MORE<span class="contact_padding"><img
                  src="{{ asset('front/images/contact-icon1.png') }}"></span></a></div>
        </div>
      </div>
    </div>
  </div>
  <!-- about section end -->

  @include('tugas10.layout.bottom')