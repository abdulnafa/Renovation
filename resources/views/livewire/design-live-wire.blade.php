<div>
    <div class="container-fluid ">
        <div class="row border border-dark">
            <div class="col-6 p-lg-4 design-lab">
                <h1>DESIGN LIBRARY</h1>
            </div>
            <div class="col-6  p-lg-4 design-lab">
                <p>Jump start your design process by choosing an expert-curated Look that <br>
                    resonates with you. You’ll then work with your dedicated Project Planner and <br>
                    Designer to arrive at your “just right” design.</p>
            </div>
        </div>
        <div class="">
            <div class="row border border-dark border-top-0">
                <nav class="cat-filter">

                    <div class="" id="nav-tab" role="tablist">
                        <div class="row">
                            <div class="col-4 cat-sec nav-link" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">
                                <span>All <i class="bi bi-arrow-right"></i></span>
                            </div>

                            <div class="col-4 cat-sec nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                aria-selected="false">
                                <span>Kitchen <i class="bi bi-arrow-right"></i></span>
                            </div>
                            <div class="col-4 cat-sec nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                                aria-selected="false">
                                <span>Bathroom <i class="bi bi-arrow-right"></i></span>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row mt-4 w-75 ">
            <div class="col-2">
                <select name="style" class="form-select" id="design-select" style="width='10px'!important;" >
                    <option value="" selected>Style</option>
                    <option value="">Classic</option>
                    <option value="">Trabsitional</option>
                    <option value="">Contemporary</option>
                </select></div>
            <div class="col-2">
                 <select name="color" class="form-select" id="design-select">
                    <option value="" selected>Color</option>
                    <option value="">Classic</option>
                    <option value="">Trabsitional</option>
                    <option value="">Contemporary</option>
                </select>
            </div>
            <div class="col-2">
                 <select name="lifestyle" class="form-select" id="design-select">
                    <option value="" selected>Lifestyle</option>
                    <option value="">Classic</option>
                    <option value="">Trabsitional</option>
                    <option value="">Contemporary</option>
                </select>
            </div>
        </div>

    </div>

    <div class="tab-content" id="nav-tabContent">

        <!-- All  -->
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="container-fluid">
                <div class="row g-3 py-5">
                    @isset($alldesign)
                        @foreach ($alldesign as $data)
                            <div class="col-lg-3 col-md-4">
                                <div class="card">
                                    <img src="{{ asset('storage/dashboardpics/designs/') }}/{{ $data->designimage }}"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title  text-capitalize">{{ $data->designname }}</h5>
                                        <div class="row">
                                            <div class="col">
                                                <span class="badge">{{ $data->tag1 }}</span>
                                            </div>

                                            <div class="col">
                                                <span class="badge">{{ $data->tag2 }}</span>
                                            </div>
                                            <div class="col">
                                                <span class="badge">{{ $data->tag3 }}</span>
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
                        @foreach ($kitchendesign as $kitchendesign)
                            <div class="col-lg-3 col-md-4">
                                <div class="card">
                                    <img src="{{ asset('storage/dashboardpics/designs/') }}/{{ $kitchendesign->designimage }}"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title text-capitalize">{{ $kitchendesign->designname }}</h5>
                                        <div class="row">
                                            <div class="col">
                                                <span class="badge bg-secondary">{{ $kitchendesign->tag1 }}</span>
                                            </div>

                                            <div class="col">
                                                <span class="badge bg-secondary">{{ $kitchendesign->tag2 }}</span>
                                            </div>
                                            <div class="col">
                                                <span class="badge bg-secondary">{{ $kitchendesign->tag3 }}</span>
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
                        @foreach ($bathroomdesign as $bathroomdesign)
                            <div class="col-lg-3 col-md-4">
                                <div class="card">
                                    <img src="{{ asset('storage/dashboardpics/designs/') }}/{{ $bathroomdesign->designimage }}"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title  text-capitalize">{{ $bathroomdesign->designname }}</h5>
                                        <div class="row">
                                            <div class="col">
                                                <span class="badge bg-secondary">{{ $bathroomdesign->tag1 }}</span>
                                            </div>

                                            <div class="col">
                                                <span class="badge bg-secondary">{{ $bathroomdesign->tag2 }}</span>
                                            </div>
                                            <div class="col">
                                                <span class="badge bg-secondary">{{ $bathroomdesign->tag3 }}</span>
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
