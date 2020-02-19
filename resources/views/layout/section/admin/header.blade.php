<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="author" content="">
    <title>{{ $title }}</title>
    <link rel="apple-touch-icon" href="">
    <link rel="shortcut icon" type="image/x-icon" href="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/vendors.min.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/bootstrap-extended.min.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/colors.min.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/components.min.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/core/menu/menu-types/vertical-menu-modern.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/core/colors/palette-gradient.min.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/simple-line-icons/style.min.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/card-statistics.min.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/vertical-timeline.min.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }} ">
  </head>
  <body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-lg-none mr-auto">
              <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                <i class="feather icon-menu font-large-1"></i>
              </a>
            </li>
            <li class="nav-item mr-auto">
              <a class="navbar-brand" href="index.html">
                <img class="brand-logo" alt="stack admin logo" src="{{ asset('assets/images/logo/stack-logo-light.png') }}">
                <h2 class="brand-text">Stack</h2>
              </a>
            </li>
            <li class="nav-item d-none d-lg-block nav-toggle">
              <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                <i class="toggle-icon feather icon-toggle-right font-medium-3 white" data-ticon="feather.icon-toggle-right"></i>
              </a>
            </li>
            <li class="nav-item d-lg-none">
              <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="fa fa-ellipsis-v"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="navbar-container content">
          <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
            </ul>
            <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-user nav-item">
                <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="{{ asset('assets/images/portrait/small/avatar-s-1.png') }}" alt="avatar"><i></i>
                  </div>
                  <span class="user-name">{{ Auth::user()->name }} </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  @if (Route::has('profile'))
                  <a class="dropdown-item" href="user-profile.html"><i class="feather icon-user"></i> Edit Profile</a> 
                  @endif
                  <div class="dropdown-divider"></div>
                  <a href="javascript:;"  onclick="event.preventDefault();  document.getElementById('logout-form').submit();" class="dropdown-item" href="login-with-bg-image.html"><i class="feather icon-power"></i> Logout</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                  </form>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>  