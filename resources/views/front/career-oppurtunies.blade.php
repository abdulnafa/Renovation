@extends('layouts.main')
@section('title', 'Renovation Career')
@section('my-content')
    <div class="container-fluid p-5 reno-bg" style="background-image: url('assets/images/experience/bg.jpg');">

        <div class="card p-5 w-50">
            <div class="link-card">
             
                <h1 class="card-title text-white" style="font-size: 36px">
                    Career Opportunities
                </h1>
                <span class="paragraph">
                    Refresh has rapidly become the largest building company in the world that specialises in design and
                    build home renovations.
            </div>
        </div>

    </div>

    <div class="row mb-5">
        <div class="col-5 enquiry-left ms-5 mt-5">
            <p>Refresh has rapidly become the largest building company in the world that specialises in design and build
                home renovations.
                We would like to hear from you if you are interested in Project Managers, Administrators and Renovation
                Consultants career opportunities.
                If you are interested in working with Refresh as a contractor, please click here to submit your application.
                Refresh is operating in New Zealand, Australia, UK and the USA.</p>

            <h2 class="heading w-75">We’re changing the way the world renovates</h2>

            <p>Refresh is applying the commercial business model, scale, processes and IT systems that are commonly found in
                the New Home and Commercial segments, to the fragmented
                renovation segment. Watch this video that provides an overview of how we are changing the way the world
                renovates</p>

            <h2>Renovations has a professional approach to project management</h2>
            <p>The Refresh business model is more like a large new home builder or commercial contractor than a traditional,
                owner operator trade builder.

                The franchise business owner has commercial expertise and has responsibility for running the business and
                managing the overall team. The Project Managers have building and project management experience. They are
                responsible for keeping projects on track.

                Also like the new home builders, Refresh manages the entire planning process. The Project Manager drives
                both the project planning and project delivery stages.</p>


            <h2>Could this be the opportunity for you?</h2>
            <p>Refresh is creating new career and partnership opportunities by establishing a large scale business supported
                by best practice processes and systems.

                If you have the right skills and capabilities this could be what you are looking for.</p>


            <h5>Attitude and skills</h5>
            <li>Great communicator with specifiers, trades and homeowners</li>
            <li>Must like working with IT systems and prescribed processes</li>
            <li>Relates to the Refresh model and wants to help change how the world renovates</li>
              <br>
            <p>If you are interested in finding out more about opportunities with Refresh, submit your application using the
                form alongside.</p>

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
                    <h3>Career Enquiry</h3>
                    <p class="w-100">Complete the form below if you are interested in career opportunities at Refresh
                        Renovations.</p>

                    <h6>Full Name</h6>
                    <input type="text" name="fname" class="form form-control" id="">

                    <h6>Email</h6>
                    <input type="email" name="email" class="form form-control" id="">

                    <h6>Phone</h6>
                    <input type="number" name="number" class="form form-control" id="">

                    <h6>Role applying for:</h6>
                    <select class="form-select">
                        <option value="">Project Manager</option>
                        <option value="">Administrator</option>
                        <option selected value="">Renovation Consultant</option>
                    </select>

                    <h6>Territory</h6>
                    <select class="form-select">
                        <option checked value="">Select</option>
                        <option value="AB">Alberta</option>
                        <option value="BC">British Columbia</option>
                        <option value="MB">Manitoba</option>
                        <option value="NB">New Brunswick</option>
                        <option value="NL">Newfoundland and Labrador</option>
                        <option value="NS">Nova Scotia</option>
                        <option value="ON">Ontario</option>
                        <option value="PE">Prince Edward Island</option>
                        <option value="QC">Quebec</option>
                        <option value="SK">Saskatchewan</option>
                        <option value="NT">Northwest Territories</option>
                        <option value="NU">Nunavut</option>
                        <option value="YT">Yukon</option>
                    </select>


                    <h6>Attach CV (Optional)</h6>
                    <input type="file" class="form-control" name="" id="">
                    <br>

                    <label for=""><input type="checkbox" name="policy" id="" checked> &nbsp; I have read,
                        understood and accepted the Privacy Policy.</label>
                    <label for=""><input type="checkbox" name="policy" id="" checked> &nbsp; <b> Sign me
                            up to receive home improvement advice and inspirational ideas.</b> <br>
                        (Don’t worry - if you change your mind you can unsubscribe anytime)</label>

                    <button class="btn btn-primary w-100 mt-3 p-2">Submit Enquiry</button>

                </div>
            </form>
        </div>
    </div>


@endsection
