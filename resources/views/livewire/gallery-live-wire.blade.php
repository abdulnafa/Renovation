<div>
     <!-- Gallery -->
 
<div class="container-fluid gal-section">
 <h3 class="mt-5">Feature Projects</h3>
        <hr>


<div class="row mt-5">
    <div class="col-3">
        <div class="card filter-section">
            <span>filter</span>
            
             <span id="room">Room  <i class="bi bi-plus"></i></span>
             <div class="list1 p-2">
                <label for=""><input type="checkbox" name="" id=""> Bathroom</label>
                <br>
                <label for=""><input type="checkbox" name="" id=""> Kitchen</label>
             </div>
          
            <span id="build" style="border-bottom: none">Building Type  <i class="bi bi-plus"></i></span>
             <div class="list2 p-2">
                <label for=""><input type="checkbox" name="" id=""> Condo</label>
                <br>
                <label for=""><input type="checkbox" name="" id=""> Co-op</label>
                <br>
                <label for=""><input type="checkbox" name="" id=""> Single or Multi family house</label>
             </div>
           
        </div>
    </div>
    <div class="col-8">
        <div class="row">
            <div class="col-6">
                <div class="img-section">
                    <img class="img-fluid" src="{{asset('assets/images/gallery/gallery2.jpg')}}" alt="">
                    <div class="title">Project #08098</div>
                </div>
            </div>
            <div class="col-6">
                 <div class="img-section">
                    <img class="img-fluid" src="{{asset('assets/images/gallery/gallery2.jpg')}}" alt="">
                    <div class="title">Project #08098</div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-6">
                <div class="img-section">
                    <img class="img-fluid" src="{{asset('assets/images/gallery/gallery2.jpg')}}" alt="">
                    <div class="title">Project #08098</div>
                </div>
            </div>
            <div class="col-6">
                 <div class="img-section">
                    <img class="img-fluid" src="{{asset('assets/images/gallery/gallery2.jpg')}}" alt="">
                    <div class="title">Project #08098</div>
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
        <img src="{{asset('storage/dashboardpics/gallery/')}}/{{$gallerypics->galleryimage}}" class="w-100 shadow-1-strong rounded mb-4"
            alt="Boat on Calm Water" style="height:250px; object-fit:cover" />
   
    </div>
    @endforeach()
  

</div>
</div>
<!-- Gallery -->
</div>

 --}}

