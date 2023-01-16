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

    <link rel="stylesheet" href="{{asset('build/assets/app-f4fcba37.css')}}" type="text/css">
 
    <link rel="stylesheet" href="<?php echo asset('assets/css/common.css')?>" type="text/css">
    <!-- CSS only -->

    @livewireStyles
</head>

<body>



    

   


        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar  bg-dark " id="ftco-navbar">
            <div class="container-fluid">
                <div>
                    <a class="navbar-brand" href="{{Route('front.index')}}"><img
                            src="{{asset('assets/images/logo.png')}}" class="img-fluid" /></a>
                </div>


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#ftco-nav"
                    aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span> Menu
                </button>
                <div class="navbar-collapse justify-content-end" id="ftco-nav">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-lg-2"><a
                                href="{{Route('front.index')}}" class="nav-link">Home</a></li>
                        <li class="nav-item mx-lg-2    {{ Route::is('front.how-it-works') ? 'active' : '' }}"><a
                                href="{{Route('front.how-it-works')}}" class="nav-link">How it
                                Works</a></li>
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
                                href="{{Route('front.gallery')}}" class="nav-link">Gallery</a></li>
                        <li class="nav-item mx-lg-2     {{ Route::is('front.design') ? 'active' : '' }}"><a
                                href="{{Route('front.design')}}" class="nav-link">Design</a></li>
                        @if(!Auth::check())
                        <li class="nav-item mx-lg-2     {{ Route::is('login') ? 'active' : '' }}"><a
                                href="{{Route('login')}}" class="nav-link">Login</a></li>
                        @endif()
                        @if(!Auth::check())
                        <li class="nav-item  mx-lg-2   "><a
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
            </div>
        </nav>
        <!-- END nav -->


       

<div class="loginbackground">



    <x-guest-layout>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf


            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>


            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>


            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>


    </x-guest-layout>

    </div>



<!-- Jquery  -->
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/popper.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script> 
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- Animated text  -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
<!-- Swiper js  -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<!-- -------------------------  -->
<script src="{{asset('build/assets/app-a86d8438.js')}}"></script>
<script src="{{asset('assets/js/file.js')}}"></script>
<!-- JavaScript Bundle with Popper -->

   @livewireScripts
</body>
</html>