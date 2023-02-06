@extends('layouts.main')
@section('title',"About Us")

@section('my-content')


<div class="container-fluid">
    <div class="row py-md-5 py-3 ">
     
 <h3 class="text-center aboutushead py-2">About Us</h3>
      

        
       
    </div>
    <div class="row py-4 px-md-5 px-2">
        <div class="col-md-6">
            <h1 class="renoarttitle">RENO – ART CONTRACTING INC</h1>
            <p>Reno-Art Contracting Inc was founded in 2017. Since then, we have been working in the general
                contracting and project management fields. Our mission is to provide seamless, high-quality products and
                services
                at a fair price; completed quickly with minimal inconvenience to the client. With 10 years of service to
                the public
                sector, as well as private sector, we have completed several projects at Toronto, Barrie, Peel Region,
                Niagara Region
                and several others locations. This has given us the upper hand as we are familiar and comfortable with
                all scopes of
                work. After numerous years of working alongside subcontractors, and maintaining relationships, we have a
                database
                of subcontractors who look forward to working with us, and competitively pricing our projects. Our
                database has
                subcontractors that do every scope of work, giving us the ability to qualify for all kinds of job
                categories. Our onsite
                supervisor and project coordinator is First Aid and CPR Certified, WHMIS Certified. Our employees always
                conduct
                their work in accordance to the Accessibility for Ontarians with Disability Act and the Accessibility
                Standards for
                Customer Service Regulations
            </p>
            <p>Reno-Art Contracting Inc has provided service to the public sector for several years. We have completed
                many projects in the Greater Toronto Area and around GTA, all with outstanding results. Our employees
                are trained
                in all scopes of public work. These include understanding specifications and project drawings,
                identifying conflicts
                and taking immediate action to resolve them, and providing necessary paperwork such as Material Safety
                Data
                Sheets, Workplace Safety and Insurance Board documents, Notice of Projects, Insurance documentation, and
                any
                other required information. All confidential information is kept within our office, which is alarm
                monitored at all
                times. Files are only distributed to team members involved within the project. To guarantee a safe
                arrival, we typically
                courier documents sealed with our own forces, or with our trusted dispatching firm.
                Every project is provided with a briefing for all subcontractors to ensure everyone is familiar with
                their scope of work,
                and with our goals. We provide updated schedules regularly to our team allowing everyone to be aware of
                what is
                required. Each site is provided with up to date schedule and project drawings, directions to the nearest
                hospital in
                case of emergency, WSIB certification, and a contact list, including 24 hour contacts. Along with
                coordinating in
                advance, we ensure everyone is properly trained for each individual project, and that any unnecessary
                delays are
                averted.
            </p>
            <p>With respect to our financial stability, we have an excellent relationship with our financial
                institution.
                We keep a positive account balance at most times and we have established a 100k unsecured operating line
                of credit.
                Our account manager is always available to us when the need arises. At every year-end our chartered
                accountant
                prepares review of engagement financial statements. We have also an excellent relationship with our
                bonding
                facility. Therefore, we can provide all bonds when they are required. </p>
            <p>We have continued to provide an excellent and hassle free service, and completed within anticipated
                schedule if not sooner. We look forward to working with you soon, and hope to hear from you soon.
            </p>
        </div>
        <div class="col-md-6">
            <div>
                <img src="{{asset('assets/images/aboutus/one.jpg')}}" class="img-fluid" />
            </div>
            <div>
                <img src="{{asset('assets/images/aboutus/two.jpg')}}" class="img-fluid" />
            </div>
            <div>
                <img src="{{asset('assets/images/aboutus/three.jpg')}}" class="img-fluid" />
            </div>
        </div>
    </div>
</div>



<!-- Remodeling Cards  -->
<div class="container-fluid mb-5">
    <div class="row py-5 text-center aboutserviceshead ">
        <h1>All Services</h1>
    </div>


    <div class="row g-3">
        <div class="col-lg-3 col-md-4">
            <div class="remodelingbox">
                <div class="remodelingboximage"
                    style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('assets/images/remodeling/card1.jpg'); background-size:cover">
                    <div class="title">
                        <h1>Full Home Renovation</h1>
                    </div>
                </div>
                <div class="content">
                    <p>At Refresh, our Remodeling Consultants utilize our proven 5-step method to deliver fantastic home
                        renovations to homeowners across the United States.</p>
                </div>


            </div>
        </div>



        <div class="col-lg-3 col-md-4">
            <div class="remodelingbox">
                <div class="remodelingboximage"
                    style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('assets/images/remodeling/card2.jpg'); background-size:cover">
                    <div class="title">
                        <h1>Kitchen Renovation</h1>
                    </div>
                </div>
                <div class="content">
                    <p>At Refresh, our Remodeling Consultants utilize our proven 5-step method to deliver fantastic home
                        renovations to homeowners across the United States.</p>
                </div>


            </div>
        </div>




        <div class="col-lg-3 col-md-4">
            <div class="remodelingbox">
                <div class="remodelingboximage"
                    style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('assets/images/remodeling/card3.jpg'); background-size:cover">
                    <div class="title">
                        <h1>Bathroom Renovation</h1>
                    </div>
                </div>
                <div class="content">
                    <p>At Refresh, our Remodeling Consultants utilize our proven 5-step method to deliver fantastic home
                        renovations to homeowners across the United States.</p>
                </div>


            </div>
        </div>





        <div class="col-lg-3 col-md-4">
            <div class="remodelingbox">
                <div class="remodelingboximage"
                    style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('assets/images/remodeling/card4.jpg'); background-size:cover">
                    <div class="title">
                        <h1>House Renovation</h1>
                    </div>
                </div>
                <div class="content">
                    <p>At Refresh, our Remodeling Consultants utilize our proven 5-step method to deliver fantastic home
                        renovations to homeowners across the United States.</p>
                </div>


            </div>
        </div>































    </div>
</div>



<!-- Why Choose Us  -->



<div class="container-fluid bg bg-light p-md-5 py-3 mt-5 why-choose">
    <div class="px-md-5">
        <h1 class="heading text-center">Why choose Us?</h1>

        <div class="row mt-5">
            <div class="col-md-6 mt-3">
                <div class="avatar-icon-left text-center"><i class="fa fa-tv"></i></div>
                <h3 class="text-center  head-1">Online systems</h3>
                <p>Refresh’s innovative online systems keep everything running smoothly. Our project management systems
                    keep all areas of your renovation organised, while our customer portal allows you to stay updated,
                    wherever you may be.</p>
            </div>
            <div class="col-md-6 mt-3">
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



@endsection()