@extends('layouts.main')
@section('my-content')
<div class="container-fluid py-3">
    <div class="container">
        <div class="row">
            <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button"
            role="tab" aria-controls="nav-home" aria-selected="true">All</button>
        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button"
            role="tab" aria-controls="nav-profile" aria-selected="false">Kitchen</button>
        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button"
            role="tab" aria-controls="nav-contact" aria-selected="false">Bathroom</button>
    </div>
</nav>
        </div>
    </div>
</div>

<div class="tab-content" id="nav-tabContent">

    <!-- All  -->
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="container-fluid">
            <div class="row g-3 py-5">
                <div class="col-lg-3 col-md-4">
                    <div class="card" >
                        <img src="{{asset('assets/images/design/gallerybottom.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nero</h5>
                            <div class="row">
                                <div class="col">
                                    <span class="badge bg-secondary">Contemporary</span>
                                </div>

                                <div class="col">
                                    <span class="badge bg-secondary">Warm</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>



                <div class="col-lg-3 col-md-4">
                    <div class="card" >
                        <img src="{{asset('assets/images/design/one.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nero</h5>
                            <div class="row">
                                <div class="col">
                                    <span class="badge bg-secondary">Contemporary</span>
                                </div>

                                <div class="col">
                                    <span class="badge bg-secondary">Warm</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>




                <div class="col-lg-3 col-md-4">
                    <div class="card" >
                        <img src="{{asset('assets/images/design/two.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nero</h5>
                            <div class="row">
                                <div class="col">
                                    <span class="badge bg-secondary">Contemporary</span>
                                </div>

                                <div class="col">
                                    <span class="badge bg-secondary">Warm</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>




                <div class="col-lg-3 col-md-4">
                    <div class="card" >
                        <img src="{{asset('assets/images/design/three.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nero</h5>
                            <div class="row">
                                <div class="col">
                                    <span class="badge bg-secondary">Contemporary</span>
                                </div>

                                <div class="col">
                                    <span class="badge bg-secondary">Warm</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>





                <div class="col-lg-3 col-md-4">
                    <div class="card" >
                        <img src="{{asset('assets/images/design/four.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nero</h5>
                            <div class="row">
                                <div class="col">
                                    <span class="badge bg-secondary">Contemporary</span>
                                </div>

                                <div class="col">
                                    <span class="badge bg-secondary">Warm</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>





                <div class="col-lg-3 col-md-4">
                    <div class="card" >
                        <img src="{{asset('assets/images/design/five.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nero</h5>
                            <div class="row">
                                <div class="col">
                                    <span class="badge bg-secondary">Contemporary</span>
                                </div>

                                <div class="col">
                                    <span class="badge bg-secondary">Warm</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>





                <div class="col-lg-3 col-md-4">
                    <div class="card" >
                        <img src="{{asset('assets/images/design/six.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nero</h5>
                            <div class="row">
                                <div class="col">
                                    <span class="badge bg-secondary">Contemporary</span>
                                </div>

                                <div class="col">
                                    <span class="badge bg-secondary">Warm</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>




                <div class="col-lg-3 col-md-4">
                    <div class="card" >
                        <img src="{{asset('assets/images/design/seven.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nero</h5>
                            <div class="row">
                                <div class="col">
                                    <span class="badge bg-secondary">Contemporary</span>
                                </div>

                                <div class="col">
                                    <span class="badge bg-secondary">Warm</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4">
                    <div class="card" >
                        <img src="{{asset('assets/images/design/eight.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nero</h5>
                            <div class="row">
                                <div class="col">
                                    <span class="badge bg-secondary">Contemporary</span>
                                </div>

                                <div class="col">
                                    <span class="badge bg-secondary">Warm</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>



                <div class="col-lg-3 col-md-4">
                    <div class="card" >
                        <img src="{{asset('assets/images/design/nine.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nero</h5>
                            <div class="row">
                                <div class="col">
                                    <span class="badge bg-secondary">Contemporary</span>
                                </div>

                                <div class="col">
                                    <span class="badge bg-secondary">Warm</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>




                <div class="col-lg-3 col-md-4">
                    <div class="card" >
                        <img src="{{asset('assets/images/design/ten.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nero</h5>
                            <div class="row">
                                <div class="col">
                                    <span class="badge bg-secondary">Contemporary</span>
                                </div>

                                <div class="col">
                                    <span class="badge bg-secondary">Warm</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>



                <div class="col-lg-3 col-md-4">
                    <div class="card" >
                        <img src="{{asset('assets/images/design/eleven.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nero</h5>
                            <div class="row">
                                <div class="col">
                                    <span class="badge bg-secondary">Contemporary</span>
                                </div>

                                <div class="col">
                                    <span class="badge bg-secondary">Warm</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4">
                    <div class="card" >
                        <img src="{{asset('assets/images/design/one.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nero</h5>
                            <div class="row">
                                <div class="col">
                                    <span class="badge bg-secondary">Contemporary</span>
                                </div>

                                <div class="col">
                                    <span class="badge bg-secondary">Warm</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>



                <div class="col-lg-3 col-md-4">
                    <div class="card" >
                        <img src="{{asset('assets/images/design/two.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nero</h5>
                            <div class="row">
                                <div class="col">
                                    <span class="badge bg-secondary">Contemporary</span>
                                </div>

                                <div class="col">
                                    <span class="badge bg-secondary">Warm</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>




                <div class="col-lg-3 col-md-4">
                    <div class="card" >
                        <img src="{{asset('assets/images/design/three.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nero</h5>
                            <div class="row">
                                <div class="col">
                                    <span class="badge bg-secondary">Contemporary</span>
                                </div>

                                <div class="col">
                                    <span class="badge bg-secondary">Warm</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>




                <div class="col-lg-3 col-md-4">
                    <div class="card" >
                        <img src="{{asset('assets/images/design/four.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nero</h5>
                            <div class="row">
                                <div class="col">
                                    <span class="badge bg-secondary">Contemporary</span>
                                </div>

                                <div class="col">
                                    <span class="badge bg-secondary">Warm</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>



                <div class="col-lg-3 col-md-4">
                    <div class="card" >
                        <img src="{{asset('assets/images/design/five.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nero</h5>
                            <div class="row">
                                <div class="col">
                                    <span class="badge bg-secondary">Contemporary</span>
                                </div>

                                <div class="col">
                                    <span class="badge bg-secondary">Warm</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>





                <div class="col-lg-3 col-md-4">
                    <div class="card" >
                        <img src="{{asset('assets/images/design/six.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nero</h5>
                            <div class="row">
                                <div class="col">
                                    <span class="badge bg-secondary">Contemporary</span>
                                </div>

                                <div class="col">
                                    <span class="badge bg-secondary">Warm</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>




                <div class="col-lg-3 col-md-4">
                    <div class="card" >
                        <img src="{{asset('assets/images/design/seven.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nero</h5>
                            <div class="row">
                                <div class="col">
                                    <span class="badge bg-secondary">Contemporary</span>
                                </div>

                                <div class="col">
                                    <span class="badge bg-secondary">Warm</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>


    <!-- Kitchen  -->
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">Kitchen</div>


    <!-- Bathroom  -->

    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">Bathroom</div>
</div>

@endsection()