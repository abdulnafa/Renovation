@extends('layouts.main')
@section('title', 'Renovation Enquiry')
@section('my-content')
    <div class="container-fluid p-5 reno-bg" style="background-image: url('assets/images/experience/bg.jpg');">

        <div class="card p-5 w-50">
            <div class="link-card">
                <h1 class="card-title text-white" style="font-size: 36px">
                    Contact Us
                </h1>
                <span class="paragraph">
                    Meet your local renovation consultant for a free consultation - in - person or online!
                </span>
            </div>
        </div>

    </div>

    <div class="row mb-5">
        <div class="col-5 enquiry-left ms-5 mt-5">
            <h2 class="heading w-75">Get in touch if you are thinking about renovating</h2>
            <p>Get in touch to arrange a consultation with a consultant in your area. <br> Refresh consultants can guide you
                through any local regulations your <br> project may require and will be your one point of contact throughout
                the <br> renovation.</p>
            <h3>Renovations</h3>
            <h5>Head Office Phone Number:</h5>
            <p>Call us <span><a href="">+64 9 303 0670</a> </span> </p>

            <h5>Head Office Physical Address:</h5>
            <p>Level 1, 287 Parnell Road,<br>
                Parnell, Auckland, 1052 <br>
                New Zealand</p>


            <h5>Head Office Postal Address:</h5>
            <p>PO Box 37-941, <br>
                Parnell, Auckland, 1151 <br>
                New Zealand</p>


        </div>
        <div class="col-6 bg bg-light ms-5 enquiry-right">
            <form action="" method="POST">
                <div class="form-div p-5">
                    <h3>Get In Touch</h3>
                    <p>Get in touch if you are interested in a quote or consultation</p>

                    <h6>Full Name</h6>
                    <input type="text" name="fname" class="form form-control" id="">

                    <h6>Email</h6>
                    <input type="email" name="email" class="form form-control" id="">
                    
                    <h6>Phone</h6>
                    <input type="number" name="number" class="form form-control" id="">
                    
                    <h6>Zip Code</h6>
                    <input type="zipcode" name="text" class="form form-control" id="">
                    <p class="w-75 info my-2">We ask for your postcode so we can seamlessly connect you with a Renovation consultant in your area. Don't know your postcode? Click here to find it.</p>
                    
                    <h6>How can we help?</h6>
                    <textarea name="description" id="" cols="20" rows="5" class="form form-control" >
                        
                    </textarea>
                   <label for=""><input type="checkbox" name="policy" id="" checked> &nbsp; I have read, understood and accepted the Privacy Policy.</label>
                    <label for=""><input type="checkbox" name="policy" id="" checked> &nbsp; <b> Sign me up to receive home improvement advice and inspirational ideas.</b>  <br>
(Don’t worry - if you change your mind you can unsubscribe anytime)</label>

<button class="btn btn-primary w-100 mt-3 p-2">Send Message</button>

                </div>
            </form>
        </div>
    </div>


@endsection
