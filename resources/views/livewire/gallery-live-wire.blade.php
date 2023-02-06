<div>
    <!-- Gallery -->

  

    <div class="container-fluid gal-section">
        <h3 class="mt-5">Feature Projects</h3>
        <hr>


      
        <div class="row mt-5">
            <div class="col-md-3 pb-md-0 pb-3">
                <div class="card filter-section">
                    <span>filter</span>

                    <span id="room">Room <i class="bi bi-plus"></i></span>
                    <div class="list1 p-2">
                        <form method="post">
                            <label for=""><input type="checkbox" name="bathroom" id="bathroom"
                                    wire:click="designSelect" value="bathroom" wire:model="bathroom"> Bathroom</label>
                            <br>
                            <label for=""><input type="checkbox" name="kitchen" id="kitchen" wire:click="designSelect"
                                    value="kitchen" wire:model="kitchen"> Kitchen</label>

                        </form>
                    </div>

                    <span id="build" style="border-bottom: none">Building Type <i class="bi bi-plus"></i></span>
                    <div class="list2 p-2">
                        <label for=""><input type="checkbox" name="" id=""> Condo</label>
                        <br>
                        <label for=""><input type="checkbox" name="" id=""> Co-op</label>
                        <br>
                        <label for=""><input type="checkbox" name="" id=""> Single or Multi family house</label>
                    </div>

                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    @isset($alldata)
                    @foreach($alldata as $alldata)
                    <div class="col-md-6">
                        
                            <div>
                                 <img 
                                src="{{asset('storage/dashboardpics/gallery/')}}/{{$alldata->galleryimage}}"  width="100%" height="250px" style="object-fit:cover" alt="">
                            </div>
                           
                            <div class="title"><h5>Project #{{$alldata->id}}</h5></div>
                        
                    </div>


                    @endforeach()
              
@endisset()



                </div>


            </div>
        </div>
    </div>

   


</div>
</div>
<!-- Gallery -->
</div>