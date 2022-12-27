@extends('layouts.main')

@section('my-content')

<div class="container-fluid px-0 kithcenhead washroomhead">
    <div class="row">
        <div class="col-md-6 px-0">
            <div class="herobackgorund position-relative">
            <h1 class="animatedtext"></h1>
            </div>

        </div>
        <div class="col-md-6  ps-5 pt-5 rightside">
            <h1>Block Bathroom</h1>
            <p>Achieve your bathroom vision from design to build with expert guidance for your renovation.</p>
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
                <h1><b>Thoughtfully selected for lasting quality</b>, With premium materials and hundreds of possibilities, designing your dream bathroom is easy with Block..</h1>
            </div>
        </div>
    </div>
</div>


<!-- Gallery  -->
<div class="container-fluid px-0 kitchengallery">
    <div class="row">
        <div class="col-md-6 px-0">
            <div class="gallerytop">
                <img src="{{asset('assets/images/washroom/washroom1.jpg')}}" class="img-fluid" />
            </div>
            <div class="gallerybottom">
                <img src="{{asset('assets/images/washroom/washroom2.jpg')}}" class="img-fluid" />
            </div>
        </div>
        <div class="col-md-6 px-0">
            <div class="gallerytop">
                <img src="{{asset('assets/images/washroom/washroom3.jpg')}}" class="img-fluid" />
            </div>
            <div class="gallerybottom">
                <img src="{{asset('assets/images/washroom/washroom4.jpg')}}" class="img-fluid" />
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
                            <img src="{{asset('assets/images/kitchen/icon1.svg')}}" width="200px"  />
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
                            <img src="{{asset('assets/images/kitchen/icon2.svg')}}" width="200px"  />
                        </div>
                        <h5 class="mb-3">DESIGN SATISFACTION </h5>
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
                            <img src="{{asset('assets/images/kitchen/icon3.svg')}}" width="200px"  />
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
                <img src="{{asset('assets/images/washroom/section1.jpg')}}" class="img-fluid" />
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
                <img src="{{asset('assets/images/washroom/section2.jpg')}}" class="img-fluid" />
            </div>
        </div>
    </div>
</div>



<!-- Common Questions  -->

<div class="container-fluid py-5">
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
                                What's included in my estimate?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Your estimate provides a price range for the full scope of your intended renovation. The estimate is divided into three parts: Materials, Services, and Construction.
Materials consists of all fixtures, finishes, and associated shipping costs. Through our relationship with our vendors, we pass trade discounts onto you. Services includes design services, building approval, 3D renderings, procurement, and project support from beginning to end of your renovation. Finally, Construction consists of home protection, demolition, and labor by a certified and vetted partner contractor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How does payment work?
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
                                How long does a renovation take?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>On average, Block bathrooms are built within 4-6 weeks, compared to the industry average of 3 months. These 4-6 weeks include demolition, framing, plumbing, tiling, and electrical work. The exact timeline of your renovation is determined after we assess your site conditions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <img src="{{asset('assets/images/kitchen/questionsection.jpg')}}" class="img-fluid rounded" />
            </div>
        </div>
    </div>
</div>
@endsection