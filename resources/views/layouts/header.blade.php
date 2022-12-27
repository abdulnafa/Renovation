<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo asset('assets/css/owl.carousel.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('assets/css/owl.theme.default.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('assets/css/slidercss.css')?>" type="text/css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" href="<?php echo asset('assets/css/common.css')?>" type="text/css">
    <!-- CSS only -->

    @livewireStyles
</head>

<body>
    <!-- Navbar  -->


    <section class="ftco-sectionheader">


        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <div>
                    <a class="navbar-brand" href="{{Route('front.index')}}"><img
                            src="{{asset('assets/images/logo.png')}}" class="img-fluid" /></a>
                </div>


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                    aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span> Menu
                </button>
                <div class="collapse navbar-collapse ms-auto" id="ftco-nav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item  {{ Route::is('front.index') ? 'active' : '' }}"><a href="{{Route('front.index')}}" class="nav-link">Home</a></li>
                        <li class="nav-item {{ Route::is('front.how-it-works') ? 'active' : '' }}"><a href="{{Route('front.how-it-works')}}" class="nav-link">How it
                                Works</a></li>
                        <li class="nav-item dropdown   {{ Route::is('front.kitchen') ? 'active' : '' }} {{ Route::is('front.washroom') ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle"  id="dropdown04" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Services</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="{{Route('front.kitchen')}}">Kitchen</a>
                                <a class="dropdown-item" href="{{Route('front.washroom')}}">Bathroom</a>
                              
                            </div>
                        </li>
                        <li class="nav-item  {{ Route::is('front.gallery') ? 'active' : '' }}"><a href="{{Route('front.gallery')}}" class="nav-link">Gallery</a></li>
                        <li class="nav-item  {{ Route::is('front.design') ? 'active' : '' }}"><a href="{{Route('front.design')}}" class="nav-link">Design</a></li>
                        <li class="nav-item  {{ Route::is('') ? 'active' : '' }}"><a href="#" class="nav-link">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END nav -->

    </section>


    @if(Request::url() == 'http://127.0.0.1:8000/services/washroom' || Request::url() == 'http://127.0.0.1:8000/services/kitchen' )

    <!-- Main Slider  -->
    @else
    
    <div class="home-slider owl-carousel js-fullheight">
        <div class="slider-item js-fullheight"
            style="background-image:url('assets/images/index/bathroom1.jpg'); background-size:cover">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-12 ftco-animate">
                        <div class="text w-100 text-center">
                            <h2>Best Place to Travel</h2>
                            <h1 class="mb-3">Norway</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight"
            style="background-image:url('assets/images/index/bathroom2.jpg'); background-size:cover">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-12 ftco-animate">
                        <div class="text w-100 text-center">
                            <h2>Best Place to Travel</h2>
                            <h1 class="mb-3">Japan</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image:url('assets/images/index/slider1.webp')">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-12 ftco-animate">
                        <div class="text w-100 text-center">
                            <h2>Best Place to Travel</h2>
                            <h1 class="mb-3">Singapore</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    

@endif