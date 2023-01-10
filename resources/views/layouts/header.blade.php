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
    <!-- <link rel="stylesheet" type="text/css" href="slick/slick.css" /> -->

    <link rel="stylesheet" href="<?php echo asset('assets/css/common.css')?>" type="text/css">
    <!-- CSS only -->

    @livewireStyles
</head>

<body>

    <!-- small navbar start  -->

    <div class="container-fluid py-1 topnavbarsmall">
        <div>
            <div class="row">
                <div class="col-6  d-none  d-md-flex align-items-center left">
                    <ul class="d-flex list-inline">
                        <li class="mx-4"> <img src="{{asset('assets/images/index/gmail.svg')}}"
                                class="img-fluid me-2" /><span style="color: #C26153;">
                                @isset($footerdetail) @if($footerdetail->mail!=null) {{$footerdetail->mail}}

                                @endif
                                @endisset()
                            </span></li>
                        <li> <img src="{{asset('assets/images/index/phone.svg')}}" class="img-fluid me-2" /><span>
                                @isset($footerdetail) @if($footerdetail->number!=null) {{$footerdetail->number}}

                                @endif
                                @endisset()</span></li>
                    </ul>

                </div>
                <div class="col-md-6 right  d-flex align-items-center justify-content-end">
                    <ul class="d-flex list-inline justify-content-center  mb-0">
                        @isset($footerdetail)
                        @if($footerdetail->twitter!=null)
                        <a href="{{$footerdetail->twitter}}" target="_blank">
                            <li class="mx-4">
                                <img src="{{asset('assets/images/index/twitter.svg')}}" class="img-fluid me-2" />
                                <span style="color: #03A9F4;">Twitter</span>
                            </li>
                        </a>
                        @endif()
                        @endisset()

                        @isset($footerdetail)
                        @if($footerdetail->facebook!=null)
                        <a href="{{$footerdetail->facebook}}" target="_blank">
                            <li class="mx-4">
                                <img src="{{asset('assets/images/index/facebook.svg')}}" class="img-fluid me-2" />
                                <span style="color: #1877F2;">Facebook</span>
                            </li>
                        </a>

                        @endif()
                        @endisset()

                        @isset($footerdetail)
                        @if($footerdetail->instagram!=null)
                        <a href="{{$footerdetail->instagram}}" target="_blank">

                            <li class="mx-4">
                                <img src="{{asset('assets/images/index/instagram.svg')}}" class="img-fluid me-2" />
                                <span style="color: #E36B82;">Instagram</span>
                            </li>

                            @endif()
                            @endisset()



                            @isset($footerdetail)
                            @if($footerdetail->linedin!=null)
                            <a href="{{$footerdetail->linkedin}}" target="_blank">




                                <li class="mx-4">
                                    <img src="{{asset('assets/images/index/linkedin.svg')}}" class="img-fluid me-2" />
                                    <span style="color: #6563FF;">Linkedin</span>
                                </li>
                                @endif()
                                @endisset()

                                @isset($footerdetail)
                                @if($footerdetail->github!=null)

                                <a href="{{$footerdetail->github}}" target="_blank">

                                    <li class="mx-4">
                                        <img src="{{asset('assets/images/index/github.svg')}}" class="img-fluid me-2" />
                                        <span style="color: #343A40;">Github</span>
                                    </li>
                                    @endif()
                                    @endisset()


                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- small navbar end  -->





    <!-- Navbar  -->


    <section class="ftco-sectionheader fixed-top sticky-top">


        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar sticky-top mynavbarperosonal" id="ftco-navbar">
            <div class="container">
                <div>
                    <a class="navbar-brand" href="{{Route('front.index')}}"><img
                            src="{{asset('assets/images/logo.png')}}" class="img-fluid" /></a>
                </div>


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#ftco-nav"
                    aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span> Menu
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="ftco-nav">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-4  {{ Route::is('front.index') ? 'active' : '' }}"><a
                                href="{{Route('front.index')}}" class="nav-link">Home</a></li>
                        <li class="nav-item mx-4   {{ Route::is('front.how-it-works') ? 'active' : '' }}"><a
                                href="{{Route('front.how-it-works')}}" class="nav-link">How it
                                Works</a></li>
                        <li
                            class="nav-item dropdown mx-4     {{ Route::is('front.kitchen') ? 'active' : '' }} {{ Route::is('front.washroom') ? 'active' : '' }}">
                            <a href="{{Route('allservices')}}" class="nav-link dropdown-toggle" id="dropdown04"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="{{Route('front.kitchen')}}">Kitchen</a>
                                <a class="dropdown-item" href="{{Route('front.washroom')}}">Bathroom</a>

                            </div>
                        </li>
                        <li class="nav-item mx-4    {{ Route::is('front.gallery') ? 'active' : '' }}"><a
                                href="{{Route('front.gallery')}}" class="nav-link">Gallery</a></li>
                        <li class="nav-item mx-4    {{ Route::is('front.design') ? 'active' : '' }}"><a
                                href="{{Route('front.design')}}" class="nav-link">Design</a></li>
                        @if(!Auth::check())
                        <li class="nav-item mx-4    {{ Route::is('login') ? 'active' : '' }}"><a
                                href="{{Route('login')}}" class="nav-link">Login</a></li>
                        @endif()
                        @if(!Auth::check())
                        <li class="nav-item  mx-4   {{ Route::is('register') ? 'active' : '' }}"><a
                                href="{{Route('register')}}" class="nav-link">Register</a></li>
                        @endif()
                        @if(Auth::check())
                        <li class="nav-item mx-4    {{ Route::is('logout') ? 'active' : '' }}"><a
                                href="{{Route('logout')}}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="nav-link">Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END nav -->

    </section>