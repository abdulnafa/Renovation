@extends('layouts.main')

@section('my-content')




<!-- Head  -->

<div class="container-fluid px-0 kithcenhead">
    <div class="row">
        <div class="col-md-6 px-0">
            <div class="">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="{{asset('assets/images/kitchen/kitchen1.webp')}}" class="img-fluid" />
                    </div>
                    <div class="item">
                        <img src="{{asset('assets/images/kitchen/kitchen2.webp')}}" class="img-fluid" />
                    </div>

                </div>
            </div>

        </div> 
        <div class="col-md-6   rightside">
            <h1>Kitchen</h1>
            <p>Thoughtfully designed for lasting quality, optimize your kitchen with Block from design to build.</p>
            <ul>
                <li>ALL FIXTURES, MATERIALS, AND LABOR INCLUDED</li>
                <li>BUILT BY A LOCAL, VETTED CONTRACTOR</li>
                <li>MANAGE YOUR RENOVATION DIGITALLY</li>
            </ul>
            <div class="row">
                <button>Contact Us</button>
            </div>
        </div>
    </div>
</div>

<!-- every day life  -->


<div class="container-fluid py-5 everydaylife">
    <div class="container">
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
<div class="container-fluid px-0 kitchengallery">
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
                            <img src="{{asset('assets/images/kitchen/Icon_Insurance.svg')}}" width="200px" />
                        </div>
                        <h5 class="mb-3">CHANGE ORDER PROMISE</h5>
                        <p>We plan renovations to our best ability, and do not profit from change orders.</p>

                    </div>
                </div>

            </div>
            <!-- two  -->

            <div class="col-lg-4 col-md-6">
                <div class="card  p-1 p-md-4 mb-4 mb-lg-0  bg-transparent">
                    <div class="card-body">
                        <div class="icon icon-shape icon-shape-primary rounded-circle mb-4">
                            <img src="{{asset('assets/images/kitchen/Icon_ChangeOrder__1_.svg')}}" width="200px" />
                        </div>
                        <h5 class="mb-3">$1 MILLION INSURANCE COVERAGE </h5>
                        <p>We back our construction standards with an industry leading insurance policy.</p>

                    </div>
                </div>

            </div>

            <!-- three  -->

            <div class="col-lg-4 col-md-6">
                <div class="card  p-1 p-md-4 mb-4 mb-lg-0  bg-transparent">
                    <div class="card-body">
                        <div class="icon icon-shape icon-shape-primary rounded-circle mb-4">
                            <img src="{{asset('assets/images/kitchen/Icon_Design__1_.svg')}}" width="200px" />
                        </div>
                        <h5 class="mb-3">DESIGN SATISFACTION PROMISE</h5>
                        <p>Finding the right design is a journey. We’ll work beside you to nail something you’ll love
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



<!-- section one  -->

<div class="container-fluid py-5 kitchen section1">
    <div class="container">
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
    <div class="container">
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
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <div class="row py-3">
                    <h1>Common Questions</h1>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What kitchen brands do you offer?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>For cabinetry, Block features manufacturers at different price points, including CNC
                                    Cabinets, 6 Square Cabinets, and Dura Supreme. When it comes to cabinetry, you can
                                    achieve your ideal look while respecting your budget.
                                    For kitchen plumbing fixtures, Block offers national brands such as Kohler and
                                    Delta.
                                    Appliances are a critical component of your kitchen in terms of design and
                                    functionality. We recommend that you select your own appliances that work with your
                                    specific preferences, lifestyle, and budget.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What's included in my estimate?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Your estimate provides a price range for the full scope of your intended renovation.
                                    The estimate is divided into three parts: Materials, Services, and Construction.
                                    Materials consists of all fixtures, finishes, and associated shipping costs. Through
                                    our relationship with our vendors, we pass trade discounts onto you. Services
                                    includes design services, building approval, 3D renderings, procurement, and project
                                    support from beginning to end of your renovation. Finally, Construction consists of
                                    home protection, demolition, and labor by a certified and vetted partner contractor.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How does payment work?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>When you work with Block, you have the option to make payments by ACH and all major
                                    credit cards.
                                    Your project will have standard payment terms, including an initial $500 deposit to
                                    reserve your renovation and then installments. The first installment occurs at your
                                    project kickoff. The second occurs when when your Permits & Approvals and Design are
                                    completed. Your third installment includes any potential change orders at project
                                    completion.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <img src="{{asset('assets/images/kitchen/projects_messer_d__3x.webp')}}" class="img-fluid rounded" />
            </div>
        </div>
    </div>
</div>
@endsection