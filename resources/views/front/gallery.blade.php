@extends('layouts.main')

@section('my-content')
<!-- Gallery -->
<div class="container-fluid">

    <div class="row text-center py-3 px-5 filterhead">
        <div class="col-4">
            <h1>Block Project Gallery</h1>
        </div>
        <div class="col-8 selectservice d-flex justify-content-end align-items-center">
            <select class="form-select" aria-label="Default select example">
                <option value="">Select Serve</option>
                <option value="bathrom">Bathroom</option>
                <option value="kitchen">Kitchen</option>
            </select>
        </div>
    </div>

    <div class="row py-5 fullgallerydiv">


        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <img src="{{asset('assets/images/gallery/gallery1.jpg')}}" class="w-100 shadow-1-strong rounded mb-4"
                alt="Boat on Calm Water" />

            <img src="{{asset('assets/images/gallery/gallery2.jpg')}}" class="w-100 shadow-1-strong rounded mb-4"
                alt="Wintry Mountain Landscape" />


            <img src="{{asset('assets/images/gallery/gallery3.jpg')}}" class="w-100 shadow-1-strong rounded mb-4"
                alt="Wintry Mountain Landscape" />



            <img src="{{asset('assets/images/gallery/gallery4.jpg')}}" class="w-100 shadow-1-strong rounded mb-4"
                alt="Wintry Mountain Landscape" />




            <img src="{{asset('assets/images/gallery/gallery5.jpg')}}" class="w-100 shadow-1-strong rounded mb-4"
                alt="Wintry Mountain Landscape" />



            <img src="{{asset('assets/images/gallery/gallery6.jpg')}}" class="w-100 shadow-1-strong rounded mb-4"
                alt="Wintry Mountain Landscape" />
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="{{asset('assets/images/gallery/gallery7.jpg')}}" class="w-100 shadow-1-strong rounded mb-4"
                alt="Mountains in the Clouds" />

            <img src="{{asset('assets/images/gallery/gallery8.jpg')}}" class="w-100 shadow-1-strong rounded mb-4"
                alt="Boat on Calm Water" />

            <img src="{{asset('assets/images/gallery/gallery9.jpg')}}" class="w-100 shadow-1-strong rounded mb-4"
                alt="Mountains in the Clouds" />

            <img src="{{asset('assets/images/gallery/gallery10.jpg')}}" class="w-100 shadow-1-strong rounded mb-4"
                alt="Boat on Calm Water" />



            <img src="{{asset('assets/images/gallery/gallery11.jpg')}}" class="w-100 shadow-1-strong rounded mb-4"
                alt="Mountains in the Clouds" />

            <img src="{{asset('assets/images/gallery/gallery12.jpg')}}" class="w-100 shadow-1-strong rounded mb-4"
                alt="Boat on Calm Water" />

            <img src="{{asset('assets/images/gallery/gallery13.jpg')}}" class="w-100 shadow-1-strong rounded mb-4"
                alt="Boat on Calm Water" />
           
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="{{asset('assets/images/gallery/gallery15.jpg')}}" class="w-100 shadow-1-strong rounded mb-4"
                alt="Waves at Sea" />

            <img src="{{asset('assets/images/gallery/gallery16.jpg')}}" class="w-100 shadow-1-strong rounded mb-4"
                alt="Yosemite National Park" />

            <img src="{{asset('assets/images/gallery/gallery17.jpg')}}" class="w-100 shadow-1-strong rounded mb-4"
                alt="Waves at Sea" />

            <img src="{{asset('assets/images/gallery/gallery18.jpg')}}" class="w-100 shadow-1-strong rounded mb-4"
                alt="Yosemite National Park" />




            <img src="{{asset('assets/images/gallery/gallery19.jpg')}}" class="w-100 shadow-1-strong rounded mb-4"
                alt="Waves at Sea" />

            <img src="{{asset('assets/images/gallery/gallery20.jpg')}}" class="w-100 shadow-1-strong rounded mb-4"
                alt="Yosemite National Park" />
            <img src="{{asset('assets/images/gallery/gallery21.jpg')}}" class="w-100 shadow-1-strong rounded mb-4"
                alt="Yosemite National Park" />
        </div>


    </div>
</div>
<!-- Gallery -->
@endsection