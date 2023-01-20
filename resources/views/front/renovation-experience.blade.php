@extends('layouts.main')
@section('title', 'Renovation Experience')
@section('my-content')
    <div class="container-fluid p-5 reno-bg" style="background-image: url('assets/images/experience/bg.jpg');">

        <div class="card p-5 w-50">
            <div class="link-card">
                <h1 class="card-title text-white" style="font-size: 36px">
                    The Renovation Experience
                </h1>
                <span class="paragraph">
                    Don't Stress - our structured process has been design to<br> complete projects on time and on budget
                </span>
            </div>
        </div>

    </div>



    {{-- timeline --}}


    <div class="container timeline">
        <div class="row">
            <div class="col-4 mt-5 content-main">
                <span style="text-align:right;display:inline-block; ">Refresh’s process supports a bespoke design and build:
                    a renovation tailored to your lifestyle requirements and taste.
                    Your local renovation consultant will manage every aspect for you - working to keep everything on
                    track.</span>

                <h1 style="text-align: right">Your Style,<br>
                    Your Budget,<br>
                    Our Expertise</h1>
            </div>
            <div class="col-8 ps-5">



                <div class="row ps-5">
                    <div class="col-1 mt-3">
                        <span class="icon"><i class="bi bi-chevron-down"></i></span>
                    </div>
                    <div class="col-8">
                        <div class="sections">
                            <span class="iocon">Step 1</span>
                            <div class="h4">Briefing / Initial Consultation
                                <p>The first thing your renovation consultant will want to know is what it is that you want
                                    to
                                    achieve through your home
                                    renovation. In this initial consultation, you can throw all of your ideas on the table -
                                    your
                                    consultant will then tailor them to your property and budget.</p>
                            </div>
                        </div>
                    </div>

                </div>




                <div class="row mt-5 ps-5">
                    <div class="col-1 mt-3">
                        <span class="icon" ><i style="background-color: #F08F00" class="bi bi-chevron-down"></i></span>
                    </div>
                    <div class="col-8">
                        <div class="sections">
                            <span>Step 2</span>
                            <div class="h4">Concept and Feasibility
                                <p>The first thing your renovation consultant will want to know is what it is that you want
                                    to
                                    achieve through your home
                                    renovation. In this initial consultation, you can throw all of your ideas on the table -
                                    your
                                    consultant will then tailor them to your property and budget.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row ps-5">
                    <div class="col-1 mt-3">
                        <span class="icon"><i style="background-color: #7B4088"  class="bi bi-chevron-down"></i></span>
                    </div>
                    <div class="col-8">
                        <div class="sections">
                            <span>Step 3</span>
                            <div class="h4">Working Drawings and Costing
                                <p>The first thing your renovation consultant will want to know is what it is that you want
                                    to
                                    achieve through your home
                                    renovation. In this initial consultation, you can throw all of your ideas on the table -
                                    your
                                    consultant will then tailor them to your property and budget.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row ps-5">
                    <div class="col-1 mt-3">
                        <span class="icon"><i style="background-color: #4C983B"  class="bi bi-chevron-down"></i></span>
                    </div>
                    <div class="col-8">
                        <div class="sections">
                            <span>Step 4</span>
                            <div class="h4">Your Finished Renovation
                                <p>The first thing your renovation consultant will want to know is what it is that you want
                                    to
                                    achieve through your home
                                    renovation. In this initial consultation, you can throw all of your ideas on the table -
                                    your
                                    consultant will then tailor them to your property and budget.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg bg-light p-5 mt-5 why-choose">
        <div class="container">
            <h1 class="heading text-center">Why choose Refresh?</h1>
           
            <div class="row mt-5">
                <div class="col-6 mt-3">
                    <div class="avatar-icon-left text-center"><i class="fa fa-tv"></i></div>
                    <h3 class="text-center  head-1">Online systems</h3>
                     <p>Refresh’s innovative online systems keep everything running smoothly. Our project management systems
                keep all areas of your renovation organised, while our customer portal allows you to stay updated,
                wherever you may be.</p>
                </div>
                <div class="col-6 mt-3">
                    <div class="avatar-icon-right text-center"><i class="fa-regular fa-clock"></i></div>
                    <h3 class="text-center head-2">Professional project management</h3>
                    <p>It is your local project manager’s job to support you every step of the way. Your consultant will be
                        your one point of contact throughout your renovation, keeping you updated and
                        striving to exceed your renovation expectations. All you need to do is watch the progress and enjoy
                        the result!</p>
                </div>
            </div>


        </div>
    </div>

<div class="container-fluid p-3 completed" style="background-color: #FF7C55">
    <h2 class="text-center text-white">We've completed <b>thousands of renovation projects</b>  worldwide</h2>
</div>
<div class="consult p-5">
<h1 class="text-center">Talk to a renovation consultant today</h1>
<p class="text-center mx-auto w-75">
    
     If you would like to find out how Refresh Renovations can support you with a high quality, efficient home renovation,
     get in touch today. Your local Refresh Renovations consultant will be happy to meet with you for a free, no obligations consultation.</p>
  
   <center>  <button>Get in touch</button></center>
   
</div>

@endsection
