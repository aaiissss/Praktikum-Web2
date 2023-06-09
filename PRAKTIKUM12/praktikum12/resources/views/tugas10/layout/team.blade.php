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
  <title>Team</title>
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
  <!-- team section start -->
  <div class="team_section layout_padding">
    <div class="container">
      <h1 class="choose_taital"><span>Our </span> <img src="{{ asset('front/images/icon-1.png') }}"> <span style="color: #1f1f1f">Team</span>
      </h1>
      <p class="choose_text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
        aliqua</p>
      <div class="team_section_2 layout_padding">
        <div class="container">
          <div class="images_main_1">
            <div class="row">
              <div class="col-sm-5">
                <div class="image_4"><img src="{{ asset('front/images/img-4.png') }}"></div>
                <h6 class="follow_text">Follow Us</h6>
                <div class="follow_social_icon">
                  <ul>
                    <li><a href="#"><img src="{{ asset('front/images/fb-icon.png') }}"></a></li>
                    <li><a href="#"><img src="{{ asset('front/images/twitter-icon.png') }}"></a></li>
                    <li><a href="#"><img src="{{ asset('front/images/linkden-icon.png') }}"></a></li>
                    <li><a href="#"><img src="{{ asset('front/images/instagram-icon.png') }}"></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-7">
                <h2 class="consectetur_text">Consectetur</h2>
                <p class="dummy_text">It is a long established fact that a reader will be distracted by the readable
                  content of a page when looking at its layout. The point of using Lorem</p>
              </div>
            </div>
          </div>
          <div class="images_main">
            <div class="row">
              <div class="col-sm-7">
                <h2 class="consectetur_text_1">magna aliqua</h2>
                <p class="dummy_text_1">It is a long established fact that a reader will be distracted by the readable
                  content of a page when looking at its layout. The point of using Lorem</p>
              </div>
              <div class="col-sm-5">
                <div class="image_4"><img src="{{ asset('front/images/img-5.png') }}"></div>
                <h6 class="follow_text">Follow Us</h6>
                <div class="follow_social_icon">
                  <ul>
                    <li><a href="#"><img src="{{ asset('front/images/fb-icon.png') }}"></a></li>
                    <li><a href="#"><img src="{{ asset('front/images/twitter-icon.png') }}"></a></li>
                    <li><a href="#"><img src="{{ asset('front/images/linkden-icon.png') }}"></a></li>
                    <li><a href="#"><img src="{{ asset('front/images/instagram-icon.png') }}"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="images_main_1">
            <div class="row">
              <div class="col-sm-5">
                <div class="image_4"><img src="{{ asset('front/images/img-6.png') }}"></div>
                <h6 class="follow_text">Follow Us</h6>
                <div class="follow_social_icon">
                  <ul>
                    <li><a href="#"><img src="{{ asset('front/images/fb-icon.png') }}"></a></li>
                    <li><a href="#"><img src="{{ asset('front/images/twitter-icon.png') }}"></a></li>
                    <li><a href="#"><img src="{{ asset('front/images/linkden-icon.png') }}"></a></li>
                    <li><a href="#"><img src="{{ asset('front/images/instagram-icon.png') }}"></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-7">
                <h2 class="consectetur_text">Aonsectetur</h2>
                <p class="dummy_text">It is a long established fact that a reader will be distracted by the readable
                  content of a page when looking at its layout. The point of using Lorem</p>
              </div>
            </div>
          </div>
          <div class="images_main">
            <div class="row">
              <div class="col-sm-7">
                <h2 class="consectetur_text_1">Nonsectetur</h2>
                <p class="dummy_text_1">It is a long established fact that a reader will be distracted by the readable
                  content of a page when looking at its layout. The point of using Lorem</p>
              </div>
              <div class="col-sm-5">
                <div class="image_4"><img src="{{ asset('front/images/img-7.png') }}"></div>
                <h6 class="follow_text">Follow Us</h6>
                <div class="follow_social_icon">
                  <ul>
                    <<li><a href="#"><img src="{{ asset('front/images/fb-icon.png') }}"></a></li>
                    <li><a href="#"><img src="{{ asset('front/images/twitter-icon.png') }}"></a></li>
                    <li><a href="#"><img src="{{ asset('front/images/linkden-icon.png') }}"></a></li>
                    <li><a href="#"><img src="{{ asset('front/images/instagram-icon.png') }}"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- team section start -->
  <!-- Newsletter section start -->
  <div class="newsletter_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="newsletter_text">Newsletter</h1>
          <p class="tempor_text">Tempor incididunt ut labore et dolore magna aliqua</p>
        </div>
        <div class="col-md-6">
          <div class="mail_bt_main">
            <input type="text" class="mail_text" placeholder="ENTER YOUR MAIL" name="Enter Tour Mail">
            <div class="subscribe_bt"><a href="#">SUBSCRIBE</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Newsletter section end -->

  @include('tugas10.layout.bottom')