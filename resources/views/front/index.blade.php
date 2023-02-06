@extends('layouts.main')
@section('title', 'Home Page')
@section('my-content')





<!-- Logos Section  -->

<div class="container-fluid py-3 logossection py-5">
    <div class="px-5">
        <div class="row text-center ">
            <div class="col">
                <div>
                    <img src="{{asset('assets/images/index/firstlogo.svg')}}" class="img-fluid" />
                </div>
                <p class="logop">"Block Renovation is here to simplify the process."</p>
            </div>


            <div class="col">
                <div>
                    <img src="{{asset('assets/images/index/secondlogo.svg')}}" class="img-fluid" />
                </div>
                <p class="logop">“This startup is on a mission to make home renovations easier"</p>
            </div>



            <div class="col">
                <div>
                    <img src="{{asset('assets/images/index/thirdlogo.svg')}}" class="img-fluid" />
                </div>
                <p class="logop">"Bathrooms have suddenly become the easiest reno to tackle"</p>
            </div>



            <div class="col">
                <div>
                    <img src="{{asset('assets/images/index/fourthlogo.svg')}}" class="img-fluid" />
                </div>
                <p class="logop">"In addition to getting a contractor, you're also getting the eye of a design
                    professional."</p>
            </div>



            <div class="col">
                <div>
                    <img src="{{asset('assets/images/index/fifthlogo.svg')}}" class="img-fluid" />
                </div>
                <p class="logop">"Streamlining timely aspects like layout, materials selection, and building approvals"
                </p>
            </div>
        </div>
    </div>
</div>


<!-- Cards section steps  -->

<div class="container-fluid indexcards py-5">
    <div class="px-5">

        <div class="row  indexcardshead">
            <div class="col-md-4">
                <h1>ONE COMPLETE PLATFORM</h1>
            </div>
            <div class="col-md-8">
                <p>Access Block’s tools to plan, design, and build your renovation with the industry's top designers and
                    contractors.</p>
                <div><a>LEARN HOW IT WORKS</a></div>
            </div>
        </div>




        <div class="row">
            <!-- box 1  -->
            <div class="col-md-4 mb-md-0 mb-3">
                <div class="card" style="width: 100%;">
                    <img src="{{asset('assets/images/design/twelve.jpg')}}" style="object-fit:cover"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">@if($indexcards!=null){{$indexcards->cardonetitle}}@endif()</h5>
                        <p class="card-text">@if($indexcards!=null){{$indexcards->cardonecontent}}@endif()</p>

                    </div>
                </div>
            </div>


            <!-- box 2  -->
            <div class="col-md-4 mb-md-0 mb-3">
                <div class="card" style="width: 100%;">
                    <img src="{{asset('assets/images/design/eight.jpg')}}" style="object-fit:cover" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">@if($indexcards!=null){{$indexcards->cardtwotitle}}@endif()</h5>
                        <p class="card-text">@if($indexcards!=null){{$indexcards->cardtwocontent}}@endif()</p>

                    </div>
                </div>
            </div>


            <!-- Box 3  -->

            <div class="col-md-4 mb-md-0 mb-3">
                <div class="card" style="width: 100%;">
                    <img src="{{asset('assets/images/design/fourteen.jpg')}}" style="object-fit:cover"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">@if($indexcards!=null){{$indexcards->cardthreetitle}}@endif()</h5>
                        <p class="card-text">@if($indexcards!=null){{$indexcards->cardthreecontent}}@endif()</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Discover a world of design  -->
<div class="container-fluid discoverworldfulldiv">
    <div class="row">
        <div class="innerbox">
            <h1>Discover a world of design</h1>
            <button>Explor Our Collections</button>
        </div>
    </div>
</div>

<!-- Our Renovation  -->

<div class="container-fluid py-5 indexrenovation">
    <div class="px-md-5 px-2">
        <div class="row py-5">
            <h1 class="text-center">OUR RENOVATIONS</h1>
        </div>
        <div class="row renovationcards">
            <div class="col-md-6 mb-md-0 mb-3">
                <h2 class="text-center py-5">Bathrooms</h2>
                <div class="card">
                    <img src="{{asset('assets/images/index/renovation1.webp')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">4 WEEKS AVERAGE BUILD</h5>
                        <h1 class="card-text">Build your dream bathroom with premium fixtures and finishes..</h1>
                        <a href="#" class="">LEARN MORE</a>
                    </div>
                </div>

            </div>


            <div class="col-md-6  mb-md-0 mb-3">
                <h2 class="text-center py-5">Kitchens</h2>
                <div class="card">
                    <img src="{{asset('assets/images/index/renovation2.webp')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">6 WEEKS AVERAGE BUILD</h5>
                        <h1 class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</h1>
                        <a href="#" class="">LEARN MORE</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- Brand Abesder  -->



<div class="container-fluid brandabesder">



    <div class="px-md-5 px-2 ">
        <div class=" brandssection">
            <div class="owl-carousel owl-theme">
                @isset($ambester)
                @foreach($ambester as $ambester)
                <div class="item">
                    <div>
                        <img src="{{asset('storage/dashboardpics/ambasders/')}}/{{$ambester->image}}"
                            class="img-fluid" />
                    </div>
                </div>
                @endforeach()
                @endisset()






            </div>
        </div>
    </div>
</div>













<!-- Brand Abesder End -->





<!-- Gallery section  -->


<div class="container-fluid py-5 px-0 overflow-hidden gallerymainsection">

    <div class="row text-center gallerymainsectionhead">
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

<!-- Brand Section  Start -->

<div class="container-fluid">
    <div class="row">

    </div>
</div>

<!-- Brand Section End -->



<!-- Testimonail  -->

<!-- 
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
</div> -->

@endsection