<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('assets/css/signup.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo asset('assets/css/owl.carousel.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('assets/css/owl.theme.default.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('assets/css/slidercss.css')?>" type="text/css">
    <!-- <link rel="stylesheet" type="text/css" href="slick/slick.css" /> -->
    <!-- Swiper css  -->
    <link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
   


    <!-- My All Css  -->
    <link rel="stylesheet" href="<?php echo asset('assets/css/common.css')?>" type="text/css">
    <!-- CSS only -->

    @livewireStyles
</head>

<body>

    <!-- small navbar start  -->

    <div class="container-fluid  topnavbarsmall">
       
            <div class="row">
                <div class="col-6   d-flex align-items-center left">
                    <ul class="d-flex list-inline">
                        <li class="mx-lg-3 mx-2"> <i class="fa-regular fa-envelope"></i><span>
                                @isset($footerdetail) @if($footerdetail->mail!=null) {{$footerdetail->mail}}

                                @endif
                                @endisset()
                            </span></li>
                        <li> <i class="bi bi-telephone"></i><span>
                                @isset($footerdetail) @if($footerdetail->number!=null) {{$footerdetail->number}}

                                @endif
                                @endisset()</span></li>
                    </ul>

                </div>
                <div class="col-6 right  d-flex align-items-center justify-content-end">
                    <ul class="d-flex list-inline justify-content-center  mb-0 ">
                        @isset($footerdetail)
                        @if($footerdetail->twitter!=null)
                        <a href="{{$footerdetail->twitter}}" target="_blank">
                            <li class="mx-2">
                            <i class="fa-brands fa-twitter"></i>
                                <!-- <img src="{{asset('assets/images/index/twitter.svg')}}" class="img-fluid me-2" /> -->
                                <!-- <span style="color: #03A9F4;">Twitter</span> -->
                            </li>
                        </a>
                        @endif()
                        @endisset()

                        @isset($footerdetail)
                        @if($footerdetail->facebook!=null)
                        <a href="{{$footerdetail->facebook}}" target="_blank">
                            <li class="mx-2">
                            <i class="fa-brands fa-facebook"></i>
                                <!-- <img src="{{asset('assets/images/index/facebook.svg')}}" class="img-fluid me-2" /> -->
                                <!-- <span style="color: #1877F2;">Facebook</span> -->
                            </li>
                        </a>

                        @endif()
                        @endisset()

                        @isset($footerdetail)
                        @if($footerdetail->instagram!=null)
                        <a href="{{$footerdetail->instagram}}" target="_blank">

                            <li class="mx-2">
                            <i class="fa-brands fa-instagram"></i>
                                <!-- <img src="{{asset('assets/images/index/instagram.svg')}}" class="img-fluid me-2" /> -->
                                <!-- <span style="color: #E36B82;">Instagram</span> -->
                            </li>

                            @endif()
                            @endisset()



                            @isset($footerdetail)
                            @if($footerdetail->linedin!=null)
                            <a href="{{$footerdetail->linkedin}}" target="_blank">




                                <li class="mx-2">
                                <i class="fa-brands fa-linkedin"></i>
                                    <!-- <img src="{{asset('assets/images/index/linkedin.svg')}}" class="img-fluid me-2" /> -->
                                    <!-- <span style="color: #6563FF;">Linkedin</span> -->
                                </li>
                                @endif()
                                @endisset()

                                @isset($footerdetail)
                                @if($footerdetail->github!=null)

                                <a href="{{$footerdetail->github}}" target="_blank">

                                    <li class="mx-2">
                                    <i class="fa-brands fa-github"></i>
                                        <!-- <img src="{{asset('assets/images/index/github.svg')}}" class="img-fluid me-2" /> -->
                                        <!-- <span style="color: #343A40;">Github</span> -->
                                    </li>
                                    @endif()
                                    @endisset()


                    </ul>
                </div>
            </div>
        
    </div>


    <!-- small navbar end  -->





    <!-- Navbar  -->


    <section class="ftco-sectionheader fixed-top sticky-top">


        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar sticky-top @if(Request::url() === Route('front.index') || Request::url() === Route('front.how-it-works')) mynavbarperosonal @else bg-dark  @endif()   " id="ftco-navbar">
            <div class="container-fluid">


                <div>
                    <a class="navbar-brand" href="{{Route('front.index')}}"><img
                            src="{{asset('assets/images/logo1.png')}}" class="img-fluid" /></a>
                </div>


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#ftco-nav"
                    aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span> Menu
                </button>

                
                <div class="collapse navbar-collapse " id="ftco-nav">
                    <ul class="navbar-nav">

                    <li
                            class="nav-item dropdown mx-lg-2      {{ Route::is('front.kitchen') ? 'active' : '' }} {{ Route::is('front.washroom') ? 'active' : '' }}">
                            <a href="{{Route('remodeling')}}" class="nav-link dropdown-toggle" id="dropdown04"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">What We Do</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="{{Route('remodeling')}}">Home renovations and remodeling services</a>
                                <a class="dropdown-item" href="{{Route('renovation-experience')}}">A better renovation experience</a>
                                <a class="dropdown-item" href="{{Route('whychooseus')}}">Why you'll be happy you chose us</a>

                                <a class="dropdown-item" href="{{Route('front.how-it-works')}}">How It Works</a>

                            </div>
                        </li>




                        <!-- <li class="nav-item mx-lg-2   {{ Route::is('front.index') ? 'active' : '' }}"><a
                                href="{{Route('front.index')}}" class="nav-link">Home</a></li> -->
                        <!-- <li class="nav-item mx-lg-2    {{ Route::is('front.how-it-works') ? 'active' : '' }}"><a
                                href="{{Route('front.how-it-works')}}" class="nav-link">How it
                                Works</a></li> -->
                        <li
                            class="nav-item dropdown mx-lg-2      {{ Route::is('front.kitchen') ? 'active' : '' }} {{ Route::is('front.washroom') ? 'active' : '' }}">
                            <a href="{{Route('allservices')}}" class="nav-link dropdown-toggle" id="dropdown04"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="{{Route('front.kitchen')}}">Kitchen</a>
                                <a class="dropdown-item" href="{{Route('front.washroom')}}">Bathroom</a>

                            </div>
                        </li>
                        <li class="nav-item mx-lg-2     {{ Route::is('front.gallery') ? 'active' : '' }}"><a
                                href="{{Route('front.gallery')}}" class="nav-link">Projects</a></li>
                        <li class="nav-item mx-lg-2     {{ Route::is('front.design') ? 'active' : '' }}"><a
                                href="{{Route('front.design')}}" class="nav-link">Design</a></li>


                                <li class="nav-item mx-lg-2     {{ Route::is('people') ? 'active' : '' }}"><a
                                href="{{Route('people')}}" class="nav-link">People</a></li>




                        @if(!Auth::check())
                        <li class="nav-item mx-lg-2     {{ Route::is('login') ? 'active' : '' }}"><a
                                href="{{Route('login')}}" class="nav-link">Login</a></li>
                        @endif()
                        @if(!Auth::check())
                        <li class="nav-item  mx-lg-2    {{ Route::is('register') ? 'active' : '' }}"><a
                                href="{{Route('register')}}" class="nav-link">Register</a></li>
                        @endif()
                        @if(Auth::check())
                        <li class="nav-item mx-lg-2     {{ Route::is('logout') ? 'active' : '' }}"><a
                                href="{{Route('logout')}}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="nav-link">Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        @endif

                       
                             
                            


                    </ul>
                </div>
               
                   
               <div class="navmenubutton">
               <button>Get Your Estimate</button>
               </div>
            </div>
        </nav>
        <!-- END nav -->

    </section>



   @if(Request::url() === Route('front.index') ||  Request::url() === Route('front.how-it-works') )

    <!-- Main Slider  -->

<div class="home-slider owl-carousel js-fullheight mainslider">
    <div class="slider-item js-fullheight"
        style="background-image:url('storage/dashboardpics/slider/@if($data!=null){{$data->slider1}}@endif()'); background-size:cover">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-12 ftco-animate">
                    <div class="text w-100 text-center">
                        <h2>@if($data!=null){{$data->slider1title1}} @endif()</h2>
                        <h1 class="mb-3"> @if($data!=null){{$data->slider1title2}} @endif()</h1>
                        <button class="sliderbutton">Contact Us</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item js-fullheight"
        style="background-image:url('storage/dashboardpics/slider/@if($data!=null){{$data->slider2}} @endif()'); background-size:cover">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-12 ftco-animate">
                    <div class="text w-100 text-center">
                        <h2> @if($data!=null){{$data->slider2title1}} @endif() </h2>
                        <h1 class="mb-3"> @if($data!=null){{$data->slider2title2}} @endif()</h1>
                        <button class="sliderbutton">Contact Us</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item js-fullheight"
        style="background-image:url('storage/dashboardpics/slider/@if($data!=null){{$data->slider3}}@endif()')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-12 ftco-animate">
                    <div class="text w-100 text-center">
                        <h2> @if($data!=null) {{$data->slider3title1}} @endif()</h2>
                        <h1 class="mb-3">@if($data!=null) {{$data->slider3title2}} @endif()</h1>
                        <button class="sliderbutton">Contact Us</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endif()