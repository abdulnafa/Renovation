@extends('layouts.main')

@section('my-content')



<!-- Main Slider End  -->


<div class="container-fluid">
    <div class="container">
        <div class="row py-3">
            <h1 class="text-center">Renovation Gallery</h1>
        </div>
        <div>

            <div class="gallerytopslickslider owl-carousel owl-theme">
                <div class="item position-relative">
                    <div  class="mainitemimage"><img src="{{asset('assets/images/gallery/gallery1.jpg')}}" class="img-fluid" /></div>

                    <div class="imagesbox">
                        <div class="row">
                            <div class="col-6">
                                <img src="{{asset('assets/images/gallery/gallery6.jpg')}}" class="img-fluid"
                                    width="100%" height="50%" />
                            </div>
                            <div class="col-6">
                                <img src="{{asset('assets/images/gallery/gallery8.jpg')}}" class="img-fluid"
                                    width="100%" height="50%" />
                            </div>

                            <div class="col-6">
                                <img src="{{asset('assets/images/gallery/gallery17.jpg')}}" class="img-fluid"
                                    width="100%" height="50%" />
                            </div>

                            <div class="col-6">
                                <img src="{{asset('assets/images/gallery/gallery23.jpg')}}" class="img-fluid"
                                    width="100%" height="50%" />
                            </div>
                        </div>
                    </div>

                </div>
                <div class="item position-relative">

                   <div  class="mainitemimage"> <img src="{{asset('assets/images/gallery/gallery2.jpg')}}" class="img-fluid" /></div>
                   <div class="imagesbox">
                        <div class="row">
                            <div class="col-6">
                                <img src="{{asset('assets/images/gallery/gallery1.jpg')}}" class="img-fluid"
                                    width="100%" height="50%" />
                            </div>
                            <div class="col-6">
                                <img src="{{asset('assets/images/gallery/gallery2.jpg')}}" class="img-fluid"
                                    width="100%" height="50%" />
                            </div>

                            <div class="col-6">
                                <img src="{{asset('assets/images/gallery/gallery3.jpg')}}" class="img-fluid"
                                    width="100%" height="50%" />
                            </div>

                            <div class="col-6">
                                <img src="{{asset('assets/images/gallery/gallery4.jpg')}}" class="img-fluid"
                                    width="100%" height="50%" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                   <div class="mainitemimage"> <img src="{{asset('assets/images/gallery/gallery3.jpg')}}" class="img-fluid" /></div>

                   <div class="imagesbox">
                        <div class="row">
                            <div class="col-6">
                                <img src="{{asset('assets/images/gallery/gallery7.jpg')}}" class="img-fluid"
                                    width="100%" height="50%" />
                            </div>
                            <div class="col-6">
                                <img src="{{asset('assets/images/gallery/gallery8.jpg')}}" class="img-fluid"
                                    width="100%" height="50%" />
                            </div>

                            <div class="col-6">
                                <img src="{{asset('assets/images/gallery/gallery9.jpg')}}" class="img-fluid"
                                    width="100%" height="50%" />
                            </div>

                            <div class="col-6">
                                <img src="{{asset('assets/images/gallery/gallery1.jpg')}}" class="img-fluid"
                                    width="100%" height="50%" />
                            </div>
                        </div>
                    </div>

                </div>

            </div>










        </div>
    </div>
</div>



@livewire('gallery-live-wire')
@endsection