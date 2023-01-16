<div>
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                            aria-selected="true">All</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                            type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Kitchen</button>
                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                            type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Bathroom</button>
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
                    @isset($alldesign)
                    @foreach($alldesign as $data)

                    <div class="col-lg-3 col-md-4">
                        <div class="card">
                            <img src="{{asset('storage/dashboardpics/designs/')}}/{{$data->designimage}}"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title  text-capitalize">{{$data->designname}}</h5>
                                <div class="row">
                                    <div class="col">
                                        <span class="badge bg-secondary">{{$data->tag1}}</span>
                                    </div>

                                    <div class="col">
                                        <span class="badge bg-secondary">{{$data->tag2}}</span>
                                    </div>
                                    <div class="col">
                                        <span class="badge bg-secondary">{{$data->tag3}}</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach()
                    @endisset()



                </div>
            </div>
        </div>


        <!-- Kitchen  -->
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <div class="container-fluid">
                <div class="row g-3 py-5">
                    @isset($kitchendesign)
                    @foreach($kitchendesign as $kitchendesign)

                    <div class="col-lg-3 col-md-4">
                        <div class="card">
                            <img src="{{asset('storage/dashboardpics/designs/')}}/{{$kitchendesign->designimage}}"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-capitalize">{{$kitchendesign->designname}}</h5>
                                <div class="row">
                                    <div class="col">
                                        <span class="badge bg-secondary">{{$kitchendesign->tag1}}</span>
                                    </div>

                                    <div class="col">
                                        <span class="badge bg-secondary">{{$kitchendesign->tag2}}</span>
                                    </div>
                                    <div class="col">
                                        <span class="badge bg-secondary">{{$kitchendesign->tag3}}</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach()
                    @endisset()



                </div>
            </div>
        </div>


        <!-- Bathroom  -->

        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
        <div class="container-fluid">
                <div class="row g-3 py-5">
                    @isset($bathroomdesign)
                    @foreach($bathroomdesign as $bathroomdesign)

                    <div class="col-lg-3 col-md-4">
                        <div class="card">
                            <img src="{{asset('storage/dashboardpics/designs/')}}/{{$bathroomdesign->designimage}}"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title  text-capitalize">{{$bathroomdesign->designname}}</h5>
                                <div class="row">
                                    <div class="col">
                                        <span class="badge bg-secondary">{{$bathroomdesign->tag1}}</span>
                                    </div>

                                    <div class="col">
                                        <span class="badge bg-secondary">{{$bathroomdesign->tag2}}</span>
                                    </div>
                                    <div class="col">
                                        <span class="badge bg-secondary">{{$bathroomdesign->tag3}}</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach()
                    @endisset()



                </div>
            </div>
        </div>
        </div>
    </div>
</div>