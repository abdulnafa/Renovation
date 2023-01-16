<div>
     <!-- Gallery -->
<div class="container-fluid">

<div class="row text-center py-3 px-5 filterhead">
    <div class="col-4">
        <h1>Block Project Gallery</h1>
    </div>
    <div class="col-8 selectservice d-flex justify-content-end align-items-center">
        <form >
        <select class="form-select" aria-label="Default select example" wire:change="ChangeGallery($event.target.value)">
            <option value="">Select Serve</option>
            <option value="bathroom">Bathroom</option>
            <option value="kitchen">Kitchen</option>
        </select>

        </form>

    </div>
</div>

<div class="row py-5 fullgallerydiv g-3">



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



