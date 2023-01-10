@extends('layouts.main')
@section('my-content')

<!-- Main Slider  -->
    
<div class="home-slider owl-carousel js-fullheight">
        <div class="slider-item js-fullheight"
            style="background-image:url('storage/dashboardpics/slider/@if($data!=null){{$data->slider1}}@endif()'); background-size:cover">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-12 ftco-animate">
                        <div class="text w-100 text-center">
                            <h2>@if($data!=null){{$data->slider1title1}} @endif()</h2>
                            <h1 class="mb-3"> @if($data!=null){{$data->slider1title2}} @endif()</h1>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image:url('storage/dashboardpics/slider/@if($data!=null){{$data->slider3}}@endif()')">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-12 ftco-animate">
                        <div class="text w-100 text-center">
                            <h2> @if($data!=null) {{$data->slider3title1}} @endif()</h2>
                            <h1 class="mb-3">@if($data!=null) {{$data->slider3title2}} @endif()</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@livewire('design-live-wire')

@endsection()