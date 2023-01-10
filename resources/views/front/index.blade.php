@extends('layouts.main')

@section('my-content')


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


<!-- Logos Section  -->

<div class="container py-3">
    <div class="container">
        <div class="row">
            <div class="logosection owl-carousel owl-theme">
                @isset($logos)
                @foreach($logos as $logo)
                <div class="item">
                    <h4><img src="{{asset('storage/dashboardpics/logos/')}}/{{$logo->logoimg}}" class="img-fluid" /></h4>
                </div>
                
                @endforeach()
@endisset()

            </div>
        </div>
    </div>
</div>


<!-- Cards section steps  -->

<div class="container-fluid indexcards py-5">
    <div class="container">
        <div class="row">
            <!-- box 1  -->
            <div class="col-md-4 mb-md-0 mb-3">
                <div class="card" style="width: 100%;">
                    <img src="{{asset('storage/dashboardpics/cards/')}}/@if($indexcards!=null){{$indexcards->cardoneimg}}@endif()"  style="object-fit:cover"  class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">@if($indexcards!=null){{$indexcards->cardonetitle}}@endif()</h5>
                        <p class="card-text">@if($indexcards!=null){{$indexcards->cardonecontent}}@endif()</p>

                    </div>
                </div>
            </div>


            <!-- box 2  -->
            <div class="col-md-4 mb-md-0 mb-3">
                <div class="card" style="width: 100%;">
                    <img src="{{asset('storage/dashboardpics/cards/')}}/@if($indexcards!=null){{$indexcards->cardtwoimg}}@endif()" style="object-fit:cover" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">@if($indexcards!=null){{$indexcards->cardtwotitle}}@endif()</h5>
                        <p class="card-text">@if($indexcards!=null){{$indexcards->cardtwocontent}}@endif()</p>

                    </div>
                </div>
            </div>


            <!-- Box 3  -->

            <div class="col-md-4 mb-md-0 mb-3">
                <div class="card" style="width: 100%;">
                    <img src="{{asset('storage/dashboardpics/cards/')}}/@if($indexcards!=null){{$indexcards->cardthreeimg}}@endif()"  style="object-fit:cover"  class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">@if($indexcards!=null){{$indexcards->cardthreetitle}}@endif()</h5>
                        <p class="card-text">@if($indexcards!=null){{$indexcards->cardthreecontent}}@endif()</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Our Renovation  -->

<div class="container-fluid py-5">
    <div class="container">
        <div class="row py-5">
            <h1 class="text-center">OUR RENOVATIONS</h1>
        </div>
        <div class="row renovationcards">
            <div class="col-md-6 mb-md-0 mb-3">
                <div class="card">
                    <img src="{{asset('assets/images/index/renovation1.webp')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">4 WEEKS AVERAGE BUILD</h5>
                        <h1 class="card-text">Build your dream bathroom with premium fixtures and finishes..</h1>
                        <a href="#" class="btn ">LEARN MORE</a>
                    </div>
                </div>

            </div>


            <div class="col-md-6  mb-md-0 mb-3">
                <div class="card">
                    <img src="{{asset('assets/images/index/renovation2.webp')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">6 WEEKS AVERAGE BUILD</h5>
                        <h1 class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</h1>
                        <a href="#" class="btn">LEARN MORE</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- Gallery section  -->


<div class="container-fluid py-5 px-0 overflow-hidden gallerymainsection">

    <div class="row text-center">
        <h1>PROJECT GALLERY</h1>
        <p>Discover what homeowners were able to achieve with Block.</p>
    </div>
    <div id="gallery1">
        @isset($kitchengallery)
        @foreach($kitchengallery as $g)
        <img src="{{asset('storage/dashboardpics/gallery')}}/{{$g->galleryimage}}" class="img-fluid" />
        @endforeach()
     @endisset()
    </div>

    <div id="gallery2">
    @isset($bathroomgallery)
        @foreach($bathroomgallery as $b)
        <img src="{{asset('storage/dashboardpics/gallery')}}/{{$b->galleryimage}}" class="img-fluid" />
        @endforeach()
     @endisset()
       
    </div>

</div>


<!-- Testimonail  -->


<div class="container-fluid indextestimonial py-5 testimonialmain">

    <div class="row  py-3 text-center text-white">
        <h1>FEATURED REVIEWS</h1>
        <p>Learn why homeowners chose Block for their renovation.</p>
    </div>


    <div class="row py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card w-100">
                        <div class="face front-face">
                            <img src="https://images.unsplash.com/photo-1557862921-37829c790f19?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1051&q=80"
                                alt="" class="profile">
                            <div class="pt-3 text-uppercase name">
                                Robert Garrison
                            </div>
                            <div class="designation">Android Developer</div>
                        </div>
                        <div class="face back-face">
                            <span class="fa fa-quote-left"></span>
                            <div class="testimonial">
                                I made bacck the purchase price in just 48 hours! Thank you for making it pain less,
                                pleasant.
                                The service was execellent. I will refer everyone I know.
                            </div>
                            <span class="fa fa-quote-right"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card w-100">
                        <div class="face front-face">
                            <img src="https://images.unsplash.com/photo-1600486913747-55e5470d6f40?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                                alt="" class="profile">
                            <div class="pt-3 text-uppercase name">
                                Jeffery Kennan
                            </div>
                            <div class="designation">Full Stack Developer</div>
                        </div>
                        <div class="face back-face">
                            <span class="fa fa-quote-left"></span>
                            <div class="testimonial">
                                Really good, you have saved our business! I made bacck the purchase price in just 48
                                hours!
                                man, this thing is getting better and better as I learn more about it.
                            </div>
                            <span class="fa fa-quote-right"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card w-100">
                        <div class="face front-face">
                            <img src="https://images.unsplash.com/photo-1614574762522-6ac2fbba2208?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjY2fHxtYW58ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                alt="" class="profile">
                            <div class="pt-3 text-uppercase name">
                                Issac Maxwell
                            </div>
                            <div class="designation">Finance Director</div>
                        </div>
                        <div class="face back-face">
                            <span class="fa fa-quote-left"></span>
                            <div class="testimonial">
                                Account keeper is the most valuable business research we have EVER purchased. Without
                                electrician, we would ahave gone bankrupt by now.
                            </div>
                            <span class="fa fa-quote-right"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection