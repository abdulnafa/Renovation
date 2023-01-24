@extends('layouts.main')
@section('title', 'Business Oppertunites')
@section('my-content')

<div class="container-fluid businessheadertop">
    <div class="row">
        <div class="col-md-6 businessleft">
            <h1>Build your own thriving business in the $300 billion remodeling sector!</h1>
            <p><b>Bring your business leadership skills</b> to pull together a world class home renovation business with
                our unique model. Swinging a hammer is someone else's job!</p>
            <p>
                Refresh Renovations is your opportunity to own a unique, fast-growing business that turns the enormous
                potential of the U.S. renovations and remodeling market into a highly scalable business using our
                customer-pleasing, highly-differentiated approach. </p>
            <p>This is your chance to get in on the ground floor of the U.S. expansion of a successful global business.
            </p>
            <button>Get in touch Today</button>
        </div>
        <div class="col-md-6 businessright">
            <img src="{{asset('assets/images/businessoppertunities/businesstopbg.jpg')}}" class="img-fluid" />
        </div>
    </div>
</div>


<!-- Sections -->

<div class="container-fluid businessections">
    <!-- Section 1  -->
    <div class="row  py-5">
        <div class="col-md-6 businessectionleft">
            <img src="{{asset('assets/images/businessoppertunities/section1.jpg')}}" class="img-fluid" />
        </div>
        <div class="col-md-6 businessection1right">
            <h1>Bigger than fitness and beauty… even bigger than fast food!</h1>
            <p>The renovation sector is huge, fragmented and ready for the professional, customer-focused approach your
                Refresh Renovations business will deliver.</p>
            <button>Get In Touch</button>
        </div>
    </div>
    <!-- Section 2  -->
    <div class="row  py-5">

        <div class="col-md-6 businessection1right">
            <h1>Get into business with the company that’s changing the way the world renovates.</h1>
            <p>Refresh Renovations is unique. You’ll own a business that brings a professional, customer-focused
                approach to a sector dominated until now by small operators, and known for its uncertain timelines and
                budgets.</p>
            <p>Homeowners love the difference our franchisees deliver!</p>
            <div class="row py-2">
                <div class="col-1">
                    <img src="{{asset('assets/images/businessoppertunities/one.svg')}}" class="img-fluid" />
                </div>
                <div class="col">
                    <b>Professional approach- </b> stand out from smaller local operators
                </div>
            </div>



            <div class="row py-2">
                <div class="col-1">
                    <img src="{{asset('assets/images/businessoppertunities/two.svg')}}" class="img-fluid" />
                </div>
                <div class="col">
                    <b>Professional project management- </b> industry-leading online platforms and technology tools to
                    help you build and run your business
                </div>
            </div>


            <div class="row py-2">
                <div class="col-1">
                    <img src="{{asset('assets/images/businessoppertunities/three.svg')}}" class="img-fluid" />
                </div>
                <div class="col">
                    <b>Professional results- </b> a process and outcome our customers love, driving high referral rates
                    and follow-on business
                </div>
            </div>

            <div class="py-2">
                <button>Get In Touch</button>
            </div>

        </div>

        <div class="col-md-6 businessectionleft">
            <img src="{{asset('assets/images/businessoppertunities/section2.jpg')}}" class="img-fluid" />
        </div>
    </div>
</div>


<!-- Finally, a renovation experience that puts the customer at the center. -->

<div class="container-fluid renovationexperience">
    <div class="container">
        <div class="row">
            <div class="col-md-5 renovationexperienceleft">
                <h1>Finally, a renovation experience that puts the customer at the center.</h1>
                <p>Refresh Renovations’ unique five step process makes it easier for homeowners to get great results –
                    results they’re happy to pay for and tell their friends about</p>
            </div>
            <div class="col-md-7 d-flex justify-content-around align-items-center renovationexperienceright">
                <div
                    style="background-image: url('assets/images/businessoppertunities/rounded1.jpg'); background-size:cover; width:150px; height:150px; border-radius:50%;">
                </div>
                <div><i class="bi bi-chevron-right"></i></div>
                <div
                    style="background-image: url('assets/images/businessoppertunities/rounded2.jpg'); background-size:cover; width:150px; height:150px; border-radius:50%;">
                </div>
                <div><i class="bi bi-chevron-right"></i></div>
                <div
                    style="background-image: url('assets/images/businessoppertunities/rounded3.jpg'); background-size:cover; width:150px; height:150px; border-radius:50%;">
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Renovation results you’ll be proud to deliver. -->


<div class="container-fluid px-5 py-5">
    <div class="row">
        <h1>Renovation results you’ll be proud to deliver.</h1>
        <p>Every renovation your team completes – big or small – is an advertisement for your business. And with ads
            like these, you won’t lack leads!</p>
    </div>
    <div class="row">
        <div class="businessoppertunity owl-carousel owl-theme">
            <div class="item">
                <img src="{{asset('assets/images/businessoppertunities/one.jpeg')}}" class="img-fluid" />
            </div>
            <div class="item">
                <img src="{{asset('assets/images/businessoppertunities/two.jpeg')}}" class="img-fluid" />
            </div>
            <div class="item">
                <img src="{{asset('assets/images/businessoppertunities/three.jpeg')}}" class="img-fluid" />
            </div>
            <div class="item">
                <img src="{{asset('assets/images/businessoppertunities/four.jpeg')}}" class="img-fluid" />
            </div>

        </div>
    </div>
</div>




<!-- "There's no ceiling on my earnings. I can build as big a business as I want."  -->
<div class="container-fluid">
    <div class="row ceilingbackground">

        <div class="col-md-6 ms-auto d-flex flex-column justify-content-center ceilingcolumn">
            <h1>"There's no ceiling on my earnings. I can build as big a business as I want."</h1>
            <p>Kevin R (ex oil industry), Houston, TX</p>
            <button>Get In Touch</button>
        </div>
    </div>
</div>



<!-- Have questions? Let's talk. -->


<div class="container-fluid px-5 py-5 questiontalk">
    <div class="row">
        <div class="col-md-6 pt-5">
            <h1>Have questions? Let's talk.</h1>
            <p>Request a call today and you’ll speak directly to top-level management – not a sales team. We are
                extremely hands-on. We love hearing from people ready to take charge of their own careers and start a
                business with Refresh Renovations. Even if you’re in the early stages of considering options, we’d love
                to talk and answer any questions you have about the opportunity. We get that this is often a joint
                decision, so partners are always welcome.</p>
            <button>Get In Touch Today</button>
        </div>
        <div class="col-md-6">
            <img src="{{asset('assets/images/businessoppertunities/questiontalk.jpg')}}" class="img-fluid" />
        </div>
    </div>

</div>


<!-- Map Section  -->

<div class="container-fluid px-5 py-5">
    <div class="row">
        <div class="col-md-6">
            <h1>4 States and counting:
                where will your
                Refresh journey start?</h1>
            <p>Refresh Renovations franchises are operating right now in Texas, Florida, Oregon and Arizona. </p>
            <p>If you’re in one of these states, or our other priority states of North Carolina, Pennsylvania, New
                Jersey and Michigan, we’d love to hear from you right away!</p>
            <p>We also offer franchises in: AL, AK, AR, CO, CT, DC, DE, GA, ID, IA, KS, KY, LA, MA, ME, MS, MO, MT, NV,
                NH, NM, OH, OK, SC, TN, VT, WV, WY.</p>
            <p>As a Refresh Renovations business owner, you’ll benefit from our collaborative territory model. A typical
                territory has a substantial renovation market opportunity made up of thousands of projects, so each
                franchisee only needs a small market share to grow a substantial business. View the territory disclaimer
                here.</p>
        </div>
        <div class="col-md-6">
            <img src="{{asset('assets/images/businessoppertunities/map.svg')}}" class="img-fluid" />
        </div>
    </div>
</div>



<!-- Take your first step today. -->

<div class="container-fluid px-5 py-5">
    <div class="row">
    <div class="col-md-6">
            <img src="{{asset('assets/images/businessoppertunities/girlphone.jpg')}}" class="img-fluid" />
        </div>

        <div class="col-md-6 pt-5">
            <h1>Take your first step today.</h1>
            <p>We’re in growth mode and looking for strong franchise partners. From making that first call to being open for business could take you as little as three months. </p>
            <p>We’re changing the way the world renovates. We’d love you to join us.</p>
            
        </div>
     
    </div>
</div>

@endsection()