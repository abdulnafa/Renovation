@extends('layouts.main')
@section('title', 'How It Works')
@section('my-content')




<!-- Sticky Header like for steps  -->


<nav class="navbar navbar-expand-lg py-3 howitworksnavbar">
    <div class="px-md-5 mx-auto">
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto howitworksstickynavbar">
                <li class="nav-item active mx-5 border border-dark">
                    <a class="nav-link px-5" href="#howitworksplane">PLANE</a>
                </li>
                <li class="nav-item mx-5  border border-dark">
                    <a class="nav-link px-5" href="#howitworksdesign">DESIGN</a>
                </li>
                <li class="nav-item mx-5  border border-dark">
                    <a class="nav-link px-5" href="#howitworksbuild">BUILD</a>
                </li>
                <li class="nav-item mx-5  border border-dark ">
                    <a class="nav-link px-5" href="#howitworksmanage">MANAGE</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



<!-- Plane  -->

<div class="container-fluid steplistinggroup py-5 howitworksstep1" id="howitworksplane">
    <div class="px-md-5 my-5">
        <div class="row" id="plan-heading">
            <div class="col-lg-5 col-md-8 mx-auto text-center py-1">
                <h2 >1. PLAN WITH PRECISION</h2>
                <p>Your dedicated project planner will teach you everything <br> you need to know about renovating and set
                    your project <br>  up for success.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <img src="{{asset('assets/images/howitworks/Plane.webp')}}" class="img-fluid" />
            </div>
            <div class="col-md-6 ">
                <ul  class="mt-5 content-head">
                    <li>
                        <div>
                            <hr class="">
                            <h3><span  class="plus first"><i  class="fa-light fa-plus"></i></span>  Dedicated Project Planner</h3>
                            <p >Our project planners are our resident renovation experts. From co-ops to single family
                                houses, rip & replace renos to full gut builds, they’ve seen it all. They’ll work with
                                you to set up your project, and teach you everything you need to know about the
                                ins-and-outs of renovating.</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <hr>
                            <h3><span   class="plus"><i  class="fa-light fa-plus"></i> Tailored Scope of Work</h2>
                            <p>We pride ourselves on providing homeowners with a transparent, accurate scope of work. No
                                low-balling you to get you through the door, no hidden fees. We want you to be able to
                                plan precisely for the renovation you want.</p>
                        </div>
                    </li>

                    <li>
                        <div>
                            <hr class="mt-5">
                            <h3><span   class="plus"><i  class="fa-light fa-plus"></i> Realistic Project Timeline</h2>
                            <p >We’ll work with you to set up a project timeline that works with your schedule and
                                enables the contractor to execute a high-quality build. Our experience means we know
                                exactly where to trim the fat, and exactly where to focus in order to ensure that you
                                get the best</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>





<!-- Design  -->

<div class="container-fluid steplistinggroup py-5 howitworksstep2" id="howitworksdesign">
    <div class="px-md-5 my-5">
        <div class="row">
            <div class="col-lg-7 col-md-9 mx-auto text-center py-5">
                <h2>2. DESIGN WITH CONFIDENCE</h2>
                <p>No matter your budget, tastes, or existing layout, our award winning team of designers and curated
                    materials library will help you create a space that’s truly your own..</p>
            </div>
        </div>
        <div class="row ">

            <div class="col-md-6 mt-5">
                <ul>
                    <li>
                        <div>
                            <hr>
                            <h3><span   class="plus first"><i  class="fa-light fa-plus"></i></span> Flexible Design Packages</h3>
                            <p>Everyone’s scopes and budgets are different. That’s why we have a range of design
                                packages that can be adapted to your particular project. Going for a simple rip &
                                replace? We have you covered. Want something more dramatic? We got you there too</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <hr>
                            <h3><span   class="plus"><i  class="fa-light fa-plus"></i></span> Expansive Materials Library</h3>
                            <p>Our library is curated by our team so that you can be confident in the quality of the
                                materials that’ll end up in your home. Plus, our designers have made sure that
                                everything works well together, so that there’s no such thing as a wrong combination.
                                Hundreds of materials, thousands of possibilities, one design perfect for you.</p>
                        </div>
                    </li>

                    <li>
                        <div>
                            <hr>
                            <h3><span   class="plus"><i  class="fa-light fa-plus"></i></span> Award Winning Design Team</h3>
                            <p>You’ll get to work with our team of trained architects and designers to articulate your
                                vision and bring it to life. Our designers have built their careers crafting interior
                                spaces, and now their expertise will be dedicated to tailoring your space to you.</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <img src="{{asset('assets/images/howitworks/Design.webp')}}" class="img-fluid" />
            </div>
        </div>
    </div>
</div>




<!-- Build  -->

<div class="container-fluid steplistinggroup py-5 howitworksstep1" id="howitworksbuild">
    <div class="px-md-5 my-5">
        <div class="row">
            <div class="col-lg-5 col-md-8 mx-auto text-center py-5">
                <h2>3. BUILD WITH THE BEST</h2>
                <p>A good contractor is hard to find. Our contractor network is thoroughly vetted and equipped with
                    Block tools to ensure a quality build.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <img src="{{asset('assets/images/howitworks/Build.webp')}}" class="img-fluid" />
            </div>
            <div class="col-md-6 mt-5">
                <ul>
                    <li>
                        <div>
                            <hr>
                            <h3><span   class="plus first"><i  class="fa-light fa-plus"></i></span> 7% Acceptance Rate</h3>
                            <p>We’ve done the work of vetting our contractors, so you don’t have to. Each contractor in
                                our elite network is selected from a pool of hundreds of applicants based on everything
                                from past and ongoing projects to business structure. This small community of
                                exceptional builders is fully licensed, insured, and proven to consistently produce
                                best-in-class results.</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <hr>
                            <h3><span  class="plus"><i  class="fa-light fa-plus"></i></span> Matching Algorithm</h3>
                            <p>Every project has its own fingerprint based on all the variables that go into it. We take
                                those considerations and match you with a builder based on the unique needs and
                                conditions of the project</p>
                        </div>
                    </li>

                    <li>
                        <div>
                            <hr>
                            <h3><span   class="plus"><i  class="fa-light fa-plus"></i></span> Block Builder App</h3>
                            <p>We’ve equipped our contractors with a set of digital tools that make it easy to track
                                progress, send you updates, and manage their work flows. Our contractors are better at
                                their jobs because we’re good at ours.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>





<!-- Manage  -->

<div class="container-fluid steplistinggroup py-5 howitworksstep2" id="howitworksmanage">
    <div class="px-md-5 my-5">
        <div class="row">
            <div class="col-lg-7 col-md-9 mx-auto text-center py-5">
                <h2>4. MANAGE WITH EASE</h2>
                <p>We’ve developed a platform where you can manage your renovation from the comfort of, well... anywhere. Owning your project has never been so easy.</p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 mt-5">
                <ul>
                    <li>
                        <div>
                            <hr>
                            <h3><span  class="plus first"><i  class="fa-light fa-plus"></i></span> Project Dashboard</h3>
                            <p>Your dashboard provides you with a single place to manage your entire project. Easily review your designs, make payments, get build updates, and more.</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <hr>
                            <h3><span class="plus"><i  class="fa-light fa-plus"></i></span> Notifications</h3>
                            <p>Everytime a milestone is hit, you’ll be notified through your dashboard and get pictures from the renovation site so that you can track your project’s progress. You won’t miss a screw, nail, or bolt along the way..</p>
                        </div>
                    </li>

                    <li>
                        <div>
                            <hr>
                            <h3><span   class="plus"><i  class="fa-light fa-plus"></i></span> Block Support</h3>
                            <p >If you run into any problems during your build, our team will be right there to get your project back on track. Even the best made plans can run into roadblocks, but with Block, you can rest assured that there will always be someone there to help.</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <img src="{{asset('assets/images/howitworks/Manage.webp')}}" class="img-fluid" />
            </div>
        </div>
    </div>
</div>





@endsection