@extends('layouts.main')

@section('my-content')

<div class="container-fluid px-0 kithcenhead">
    <div class="row">
        <div class="col-md-6 px-0">
            <div class="herobackgorund position-relative">
                <h1 id="typingtext">Typing</h1>
            </div>

        </div>
        <div class="col-md-6  ps-5 pt-5 rightside">
            <h1>Block Kitchen</h1>
            <p>Thoughtfully designed for lasting quality, optimize your kitchen with Block from design to build.</p>
            <ul>
                <li>ALL FIXTURES, MATERIALS, AND LABOR INCLUDED</li>
                <li>BUILT BY A LOCAL, VETTED CONTRACTOR</li>
                <li>MANAGE YOUR RENOVATION DIGITALLY</li>
            </ul>
        </div>
    </div>
</div>


<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 d-flex align-items-center">
                <h1>DESIGNED FOR EVERYDAY LIFE</h1>
            </div>
            <div class="col-md-8">
                <h1><b>Thoughtfully selected for lasting quality</b>, our kitchen materials are anchored by Caesarstone
                    countertop and cabinetry options that are both beautiful and functional.</h1>
            </div>
        </div>
    </div>
</div>


<!-- Gallery  -->
<div class="container-fluid px-0 kitchengallery">
    <div class="row">
        <div class="col-md-6 px-0">
            <div class="gallerytop">
                <img src="{{asset('assets/images/kitchen/galleryleft.jpg')}}" class="img-fluid" />
            </div>
            <div class="gallerybottom">
                <img src="{{asset('assets/images/kitchen/galleryleftbottom.jpg')}}" class="img-fluid" />
            </div>
        </div>
        <div class="col-md-6 px-0">
            <div class="gallerytop">
                <img src="{{asset('assets/images/kitchen/gallerytop.jpg')}}" class="img-fluid" />
            </div>
            <div class="gallerybottom">
                <img src="{{asset('assets/images/kitchen/gallerybottom.jpg')}}" class="img-fluid" />
            </div>
        </div>
    </div>
</div>

<!-- We know renovations are scary, so we've got your back: -->

<div class="container-fluid renovationscary py-5">
    <div class="container">
        <div class="row text-center py-5 text-white">
            <h2>We know renovations are scary, so we've got your back:</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card border-light p-1 p-md-4 mb-4 mb-lg-0">
                    <div class="card-body">
                        <div class="icon icon-shape icon-shape-primary rounded-circle mb-4">
                            <img src="{{asset('assets/images/kitchen/lightbulb.png')}}" class="img-fluid" />
                        </div>
                        <h5 class="mb-3">Ideas and Concepts</h5>
                        <p>Designed with the latest design trends in mind. Our product feels modern, creative, and
                            beautiful.</p>
                        <a href="#" class="btn btn-sm btn-primary animate-up-1">Read more</a>
                    </div>
                </div>

            </div>
            <!-- two  -->

            <div class="col-lg-4 col-md-6">
                <div class="card border-light p-1 p-md-4 mb-4 mb-lg-0">
                    <div class="card-body">
                        <div class="icon icon-shape icon-shape-primary rounded-circle mb-4">
                            <img src="{{asset('assets/images/kitchen/lightbulb.png')}}" class="img-fluid" />
                        </div>
                        <h5 class="mb-3">Ideas and Concepts</h5>
                        <p>Designed with the latest design trends in mind. Our product feels modern, creative, and
                            beautiful.</p>
                        <a href="#" class="btn btn-sm btn-primary animate-up-1">Read more</a>
                    </div>
                </div>

            </div>

            <!-- three  -->

            <div class="col-lg-4 col-md-6">
                <div class="card border-light p-1 p-md-4 mb-4 mb-lg-0">
                    <div class="card-body">
                        <div class="icon icon-shape icon-shape-primary rounded-circle mb-4">
                            <img src="{{asset('assets/images/kitchen/lightbulb.png')}}" class="img-fluid" />
                        </div>
                        <h5 class="mb-3">Ideas and Concepts</h5>
                        <p>Designed with the latest design trends in mind. Our product feels modern, creative, and
                            beautiful.</p>
                        <a href="#" class="btn btn-sm btn-primary animate-up-1">Read more</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



<!-- section one  -->

<div class="container-fluid py-5 section1">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('assets/images/kitchen/section1.jpg')}}" class="img-fluid"/>
            </div>
            <div class="col-md-6 pt-3 ps-3">
                <h1>DESIGN BACKED BY QUALITY STANDARDS</h1>
                <p>As with our bathroom designs, our kitchens follow rigorous construction standards and are built by contractors who follow best-in-class protocol.</p>
            </div>
        </div>
    </div>
</div>


<!-- section two  -->

<div class="container-fluid py-5 section2">
    <div class="container">
        <div class="row">
           
            <div class="col-md-6 pt-3 ps-3">
                <h1>THOUSANDS OF CUSTOMIZABLE OPTIONS</h1>
                <p>From innovative storage solutions to under-cabinet lighting, we’ve developed design options adaptable to different layouts and lifestyles.</p>
            </div>

            <div class="col-md-6">
                <img src="{{asset('assets/images/kitchen/section2.jpg')}}" class="img-fluid"/>
            </div>
        </div>
    </div>
</div>
@endsection