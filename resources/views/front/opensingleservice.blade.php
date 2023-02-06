@extends('layouts.main')
@section('title', 'Kitchen')
@section('my-content')




<!-- Head  -->

<div class="container-fluid  kithcenhead">
    <div class="row">
        <div class="col-md-6 px-0">
            <div class="">
                <div class="owl-carousel owl-theme">




                    <div class="item opensingletopitem">
                        <img src="{{asset('storage/dashboardpics/Allservices/')}}/{{$allservicedata[0]->headtopimgonefile}}"
                            class="img-fluid" />
                    </div>


                    <div class="item opensingletopitem">
                        <img src="{{asset('storage/dashboardpics/Allservices/')}}/{{$allservicedata[0]->headtopimgtwofile}}"
                            class="img-fluid" />
                    </div>


                    <div class="item opensingletopitem">
                        <img src="{{asset('storage/dashboardpics/Allservices/')}}/{{$allservicedata[0]->headtopimgthreefile}}"
                            class="img-fluid" />
                    </div>



                </div>
            </div>

        </div>
        <div class="col-md-6   rightside">
            <h1>{{$allservicedata[0]->headtoptitle}}</h1>
            <p>{{$allservicedata[0]->headtopparagraph}}</p>
            <ul>
                <li>{{$allservicedata[0]->headtoplist1}}</li>
                <li>{{$allservicedata[0]->headtoplist2}}</li>
                <li>{{$allservicedata[0]->headtoplist3}}</li>
            </ul>
            <div class="row">
                <button>Contact Us</button>
            </div>
        </div>
    </div>
</div>

<!-- every day life  -->


<div class="container-fluid py-5 everydaylife">
    <div class="px-md-5">
        <div class="row">
            <div class="col-md-4 d-flex align-items-center">
                <h1>DESIGNED FOR EVERYDAY LIFE</h1>
            </div>
            <div class="col-md-8">
                <h2><b>Thoughtfully selected for lasting quality</b>, our kitchen materials are anchored by Caesarstone
                    countertop and cabinetry options that are both beautiful and functional.</h2>
            </div>
        </div>
    </div>
</div>


<!-- Gallery  -->
<div class="container-fluid  kitchengallery">
    <div class="row">
        <div class="col-md-6 px-0">
            <div class="gallerytop">
                <img src="{{asset('assets/images/kitchen/Gallery_2_d__3x.webp')}}" class="img-fluid" />
            </div>
            <div class="gallerybottom">
                <img src="{{asset('assets/images/kitchen/Gallery_3_d__3x.webp')}}" class="img-fluid" />
            </div>
        </div>
        <div class="col-md-6 px-0">
            <div class="gallerytop">
                <img src="{{asset('assets/images/kitchen/Gallery_4_d__3x.webp')}}" class="img-fluid" />
            </div>
            <div class="gallerybottom">
                <img src="{{asset('assets/images/kitchen/projects_messer_d__3x.webp')}}" class="img-fluid" />
            </div>
        </div>
    </div>
</div>

<!-- We know renovations are scary, so we've got your back: -->

<div class="container-fluid renovationscary py-5">
    <div class="px-5">
        <div class="row text-center py-5">
            <h2>We know renovations are scary, so we've got your back:</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card  p-1 p-md-4 mb-4 mb-lg-0 bg-transparent ">
                    <div class="card-body">
                        <div class="icon icon-shape icon-shape-primary rounded-circle mb-4">
                            <img src="{{asset('storage/dashboardpics/Allservices/')}}/{{$allservicedata[0]->servicecardonefile}}"
                                width="200px" />
                        </div>
                        <h5 class="mb-3">{{$allservicedata[0]->servicecardonetitle}}</h5>
                        <p>{{$allservicedata[0]->servicecardonecontent}}</p>

                    </div>
                </div>

            </div>
            <!-- two  -->

            <div class="col-lg-4 col-md-6">
                <div class="card  p-1 p-md-4 mb-4 mb-lg-0  bg-transparent">
                    <div class="card-body">
                        <div class="icon icon-shape icon-shape-primary rounded-circle mb-4">
                            <img src="{{asset('storage/dashboardpics/Allservices/')}}/{{$allservicedata[0]->servicecardtwofile}}"
                                width="200px" />
                        </div>
                        <h5 class="mb-3">{{$allservicedata[0]->servicecardtwotitle}}</h5>
                        <p>{{$allservicedata[0]->servicecardtwocontent}}</p>

                    </div>
                </div>

            </div>

            <!-- three  -->

            <div class="col-lg-4 col-md-6">
                <div class="card  p-1 p-md-4 mb-4 mb-lg-0  bg-transparent">
                    <div class="card-body">
                        <div class="icon icon-shape icon-shape-primary rounded-circle mb-4">
                            <img src="{{asset('storage/dashboardpics/Allservices/')}}/{{$allservicedata[0]->servicecardthreefile}}"
                                width="200px" />
                        </div>
                        <h5 class="mb-3">{{$allservicedata[0]->servicecardthreetitle}}</h5>
                        <p>{{$allservicedata[0]->servicecardonecontent}}
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



<!-- section one  -->

<div class="container-fluid py-5 kitchen section1">
    <div class="px-md-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('assets/images/kitchen/section1.jpg')}}" class="img-fluid" />
            </div>
            <div class="col-md-6 pt-3 ps-3">
                <h1>DESIGN BACKED BY QUALITY STANDARDS</h1>
                <p>As with our bathroom designs, our kitchens follow rigorous construction standards and are built by
                    contractors who follow best-in-class protocol.</p>
            </div>
        </div>
    </div>
</div>


<!-- section two  -->

<div class="container-fluid py-5 section2">
    <div class="px-md-5">
        <div class="row">

            <div class="col-md-6 pt-3 ps-3">
                <h1>THOUSANDS OF CUSTOMIZABLE OPTIONS</h1>
                <p>From innovative storage solutions to under-cabinet lighting, we’ve developed design options adaptable
                    to different layouts and lifestyles.</p>
            </div>

            <div class="col-md-6">
                <img src="{{asset('assets/images/kitchen/section2.jpg')}}" class="img-fluid" />
            </div>
        </div>
    </div>
</div>



<!-- Common Questions  -->

<div class="container-fluid py-5 commonquestiondiv">
    <div class="px-md-5">
        <div class="row">
            <div class="col-md-6">

                <div class="row py-3">
                    <h1>Common Questions</h1>
                </div>
                <div class="accordion" id="accordionExample">

                    @isset( $servicefaq)
                    @php 
   
                    $show='show';

                    @endphp



                    @foreach( $servicefaq as $servicefaq)

                    
                   

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{$servicefaq->id}}">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse{{$servicefaq->id}}" aria-expanded="true" aria-controls="collapse{{$servicefaq->id}}">
                                {{$servicefaq->question}}
                            </button>
                        </h2>
                        <div id="collapse{{$servicefaq->id}}" class="accordion-collapse collapse {{$show}}" aria-labelledby="heading{{$servicefaq->id}}"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>{{$servicefaq->answer}}</p>
                            </div>
                        </div>
                    </div>
                  
@php 
$show='';

@endphp


                    @endforeach


                    @endisset





                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <img src="{{asset('assets/images/kitchen/projects_messer_d__3x.webp')}}" class="img-fluid rounded" />
            </div>
        </div>
    </div>
</div>
@endsection