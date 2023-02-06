<div>
    <!-- Gallery -->

    <div class="container-fluid gal-section">
        <h3 class="mt-5">Peoples</h3>
        <hr>


        <div class="row mt-5">
            <div class="col-md-3 pb-md-0 pb-5">
                <div class="card filter-section">
                    <span>filter People</span>

                    <span id="room">Country <i class="bi bi-plus"></i></span>
                    <div class="list1 p-2">
                        <label for=""><input type="checkbox" name="" id=""> Australia</label>
                        <br>
                        <label for=""><input type="checkbox" name="" id=""> New Zealand</label>
                        <br>
                        <label for=""><input type="checkbox" name="" id=""> United Kingdom</label>
                        <br>
                        <label for=""><input type="checkbox" name="" id=""> United States</label>
                    </div>

                    <span id="build" style="border-bottom: none">Region <i class="bi bi-plus"></i></span>
                    <div class="list2 p-2">
                        <label for=""><input type="checkbox" name="" id=""> Houston</label>
                        <br>
                        <label for=""><input type="checkbox" name="" id=""> Lake Oswego</label>
                        <br>
                        <label for=""><input type="checkbox" name="" id=""> Mianmi</label>
                        <br>
                        <label for=""><input type="checkbox" name="" id=""> Missouri</label>
                        <br>
                        <label for=""><input type="checkbox" name="" id=""> Orlando</label>
                        <br>
                        <label for=""><input type="checkbox" name="" id=""> Pensacola</label>
                        <br>
                        <label for=""><input type="checkbox" name="" id=""> Phonix</label>
                        <br>
                        <label for=""><input type="checkbox" name="" id=""> Portland</label>
                        <br>
                        <label for=""><input type="checkbox" name="" id=""> Scottsdele</label>
                        <br>
                        <label for=""><input type="checkbox" name="" id=""> South East</label>
                        <br>
                        <label for=""><input type="checkbox" name="" id=""> Sugarland</label>

                        <br>
                        <label for=""><input type="checkbox" name="" id=""> The Woodlands</label>
                    </div>

                </div>
            </div>
            <div class="col-md-8 pb-5">
                <div class="row  g-4">


                    <div class="col-lg-4 col-md-6 ">
                        <div class="peoplebox">
                            <div class="imgtop">
                                <img class="img-fluid" src="{{asset('assets/images/people/people1.jpeg')}}"  alt="">
                            </div>
                            <div class="content">
                                <h1>Becky Phillip</h1>
                                <p>Managing Director</p>
                                <p class="linktype">South East Orlando</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4 col-md-6 ">
                        <div class="peoplebox">
                            <div class="imgtop">
                                <img class="img-fluid" src="{{asset('assets/images/people/people2.jpeg')}}" alt="">
                            </div>
                            <div class="content">
                                <h1>Douglas Flores</h1>
                                <p>Remodeling Consultant</p>
                                <p class="linktype">Miami</p>
                            </div>

                        </div>

                    </div>




                    <div class="col-lg-4 col-md-6 ">
                        <div class="peoplebox">
                            <div class="imgtop">
                                <img class="img-fluid" src="{{asset('assets/images/people/people3.jpeg')}}" alt="">
                            </div>
                            <div class="content">
                                <h1>Chris Kuhr</h1>
                                <p>Managing Director/Renovation Consultant</p>
                                <p class="linktype">Lake Oswego</p>
                            </div>

                        </div>

                    </div>




                    <div class="col-lg-4 col-md-6 ">
                        <div class="peoplebox">
                            <div class="imgtop">
                                <img class="img-fluid" src="{{asset('assets/images/people/people4.jpeg')}}" alt="">
                            </div>
                            <div class="content">
                                <h1>William Nelson</h1>
                                <p>Managing Director/Renovation Consultant</p>
                                <p class="linktype">Pensacola</p>
                            </div>

                        </div>

                    </div>




                    <div class="col-lg-4 col-md-6 ">
                        <div class="peoplebox">
                            <div class="imgtop">
                                <img class="img-fluid" src="{{asset('assets/images/people/people5.jpeg')}}" alt="">
                            </div>
                            <div class="content">
                                <h1>Rick Maddox</h1>
                                <p>Design & Build Consultant / Owner</p>
                                <p class="linktype">Scottsdale</p>
                            </div>

                        </div>

                    </div>



                    <div class="col-lg-4 col-md-6 ">
                        <div class="peoplebox">
                            <div class="imgtop">
                                <img class="img-fluid" src="{{asset('assets/images/people/people6.jpeg')}}" alt="">
                            </div>
                            <div class="content">
                                <h1>Terry Phillip</h1>
                                <p>Managing Director</p>
                                <p class="linktype">South East Orlando</p>
                            </div>

                        </div>

                    </div>



                    <div class="col-lg-4 col-md-6 ">
                        <div class="peoplebox">
                            <div class="imgtop">
                                <img class="img-fluid" src="{{asset('assets/images/people/people7.jpeg')}}" alt="">
                            </div>
                            <div class="content">
                                <h1>Kevin Revere</h1>
                                <p>Managing Director</p>
                                <p class="linktype">Sugarland</p>
                            </div>

                        </div>

                    </div>



                    <div class="col-lg-4 col-md-6 ">
                        <div class="peoplebox">
                            <div class="imgtop">
                                <img class="img-fluid" src="{{asset('assets/images/people/people8.jpeg')}}" alt="">
                            </div>
                            <div class="content">
                                <h1>Robert Setzekorn</h1>
                                <p>Franchise Manager/ Remodeling Consultant</p>
                                <p class="linktype">The Woodlands</p>
                            </div>

                        </div>

                    </div>



                </div>


            </div>
        </div>
    </div>

    {{-- <div class="row text-center py-3 px-5 filterhead">
    <div class="col-4">
        <h1>Block Project Gallery</h1>
    </div>
    <div class="col-8 selectservice d-flex justify-content-end align-items-center">
        <form >
        <select class="form-select" aria-label="Default select example" wire:change="ChangeGallery($event.target.value)">
            <option value="">Select Serve</option>
            <option value="bathroom">Bathroom  </option>
            <option value="kitchen">Kitchen</option>
        </select>

        </form>

    </div>
</div>

<div class="row py-5 fullgallerydiv g-3"> --}}


    {{-- 
@foreach($alldata as $gallerypics)
    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0 maingalleryimagesdiv">
        <img src="{{asset('storage/dashboardpics/gallery/')}}/{{$gallerypics->galleryimage}}" class="w-100
    shadow-1-strong rounded mb-4"
    alt="Boat on Calm Water" style="height:250px; object-fit:cover" />

</div>
@endforeach()


</div>
</div>
<!-- Gallery -->
</div>

--}}