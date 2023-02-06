@extends('layouts.main')
@section('title', 'Why Choose Us')

@section('my-content')

<!-- header  -->
<div class="container-fluid whychooseushead">
    <div class="px-md-5 py-5">


        <div class="row px-md-0 px-3">
            <div class="col-lg-6 col-md-9  whychooseussection">
                <h1>Why you'll be happy you choose us</h1>
                <p>At Refresh Renovations we’re changing how the world renovates. We put your needs at the heart of our
                    process, then manage every step for you from “what if” to “what a result!” </p>
            </div>
        </div>
    </div>
</div>


<!-- Section 1  -->

<div class="container-fluid whychooseus section1 px-5 py-5">
    <div class="row">
        <div class="col-md-6 left d-flex justify-content-center">
            <img src="{{asset('assets/images/whychooseus/section1.jpg')}}" class="img-fluid" />
        </div>
        <div class="col-md-6 content">
            <h2>We’re changing how the world renovates</h2>
            <p>We look to do things differently and have transformed the traditional renovation approach where the
                homeowner manages a builder, designer, consents, suppliers and co-ordinating trades. Instead, we are a
                design and build renovation company that works with you to reduce the risk of your project going over
                time and budget with a process which aligns trades, suppliers and designer relationships and getting all
                the necessary permits and compliances approved. Our secret is in the planning.</p>
            <a>Learn how we’re changing the way the world renovates</a>
        </div>
    </div>
</div>


<!-- Section 2  -->

<div class="container-fluid whychooseus section2 px-5 py-5">
    <div class="row">

        <div class="col-md-6 content">
            <h2>Use a locally owned and operated renovation company</h2>
            <p>You will have one point of contact who manages all aspects of your project from planning to completion.
                Their goal is to create an exciting and stress-free experience by understanding your requirements,
                delivering a quality service through clear communication to you and the trades and then project managing
                the build.</p>
            <a>Find your local Refresh Renovations Consultant</a>
        </div>

        <div class="col-md-6 left  d-flex justify-content-center">
            <img src="{{asset('assets/images/whychooseus/section2.jpg')}}" class="img-fluid" />
        </div>
    </div>
</div>




<!-- Section 3  -->

<div class="container-fluid whychooseus section3 px-5 py-5">
    <div class="row">
        <div class="col-md-6 left  d-flex justify-content-center">
            <img src="{{asset('assets/images/whychooseus/section3.jpg')}}" class="img-fluid" />
        </div>
        <div class="col-md-6 content">
            <h2>Relax knowing you’re getting value from your budget</h2>
            <p>For renovations to run smoothly, they require expert planning and management. According to research
                company BRANZ*, 30% of a homeowner’s budget goes to waste in a typical renovation (that does not use
                Refresh’s process). Refresh’s processes and systems simplify the home renovation experience, allowing
                each stage to be carefully planned and managed. This creates a foundation for projects to be
                cost-effective and accurately priced from the start.

                * (BRANZ) Building Research Association of NZ, Study Report SR 284 (2013)</p>
            <a>Learn more about the Refresh process</a>
        </div>
    </div>
</div>





<!-- Section 4  -->

<div class="container-fluid whychooseus section4 px-5 py-5">
    <div class="row">

        <div class="col-md-6 content">
            <h2>You’ll always feel in Control</h2>
            <p>Refresh’s online customer portal, Control, makes it easy for you to carry on with your daily routine
                while your home renovation is managed for you. You’ll be able to access an online dashboard providing
                live updates throughout the renovation process that you can check anytime, anywhere - even on holiday
            </p>
            <a>Find out more about Refresh’s Customer Portal</a>
        </div>

        <div class="col-md-6 left  d-flex justify-content-center">
            <img src="{{asset('assets/images/whychooseus/section4.jpg')}}" class="img-fluid" />
        </div>
    </div>
</div>





<!-- Section 5  -->

<div class="container-fluid whychooseus section5 px-5 py-5">
    <div class="row">
        <div class="col-md-6 left  d-flex justify-content-center">
            <img src="{{asset('assets/images/whychooseus/section5.jpg')}}" class="img-fluid" />
        </div>
        <div class="col-md-6 content">
            <h2>Create a home you’ll be proud of</h2>
            <p>Having worked with your renovation consultant throughout the planning stages and have now completed the
                build, it’s your time to put your feet up, relax and enjoy making memories in your updated home.</p>
            <a>Enquire now</a>
        </div>
    </div>
</div>



<!-- Google Reviews  -->


<div class="container-fluid px-2 googlereviewsection py-5">
    <div class="px-5">
        <div class="row coloredrow my-5">
            <div class="col-md-9 col-12 text-sm-start text-center">
                <h1 class="text-left googlereviewheading">Google Recensioner</h1>
            </div>
            <div class="col-md-3 col-12 text-sm-end text-center">
                <img src="{{asset('assets/images/index/googlereviews.png')}}" alt="google Reviews"
                    class="googlereviewimg img-fluid">
            </div>
        </div>



        <div class="row">


            <div class="owl-carousel owl-theme px-md-3">

                @isset($reviews)
                @if($reviews!=null)
                @foreach($reviews as $reviews)
                <div class=" item p-md-3 p-2">
                    <div class="reviewbox">
                        <div class="row">
                            <div class="col-md-3 d-md-block d-none ">
                                <img src="{{asset('storage/dashboardpics/reviews')}}/{{$reviews->reviewimage}}" />
                            </div>
                            <div class="col-md-9">
                                <h5>{{$reviews->name}}</h5>
                                <h6>{{$reviews->created_at->format('d-m-Y')}}</h6>
                            </div>
                        </div>
                        <div class="d-flex py-3">
                            @php
                            $count=$reviews->stars;
                            for($i=0; $i<$count; $i++){ @endphp <i class="fa-solid fa-star"></i>

                                @php
                                }
                                @endphp

                                <!-- <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i> -->
                        </div>
                        <div>
                            <p>{{$reviews->description}}</p>
                        </div>
                    </div>

                </div>
                @endforeach()
                @endif()
                @endisset()

            </div>
        </div>
    </div>
</div>

<!-- Google Reviews End  -->



<!-- Talk to a renovation consultant today -->


<div class="container-fluid talksection">
    <div class="row px-md-2 px-3">
        <div class="col-md-7 mx-auto">
            <h1>Talk to a renovation consultant today</h1>
            <p>If you would like to find out how Refresh Renovations can support you with a high quality, efficient home renovation, get in touch today. Your local Refresh Renovations consultant will be happy to meet with you for a free, no obligations consultation.</p>
            <button>Get In Touch</button>
        </div>
    </div>
</div>
@endsection