@extends('adminlayout.main')

@section('admin-dashboard')

<div class="gallerymaindiv container">
    <div class="row">
        <h1>Gallery</h1>
    </div>
    <form method="post" id="galleryform" enctype="multipart/form-data">
    <div class="row">
        <div class="col-6 ps-5">
            <a class="btn btn-primary" id="addnewbutton">Add New</a>
        </div>
        <div class="col-6 d-flex justify-content-end pe-5 d-none"> <button type="submit" id="savegalleryimage" class="btn btn-primary">Save</button></div>
    </div>
    <div class="row">
        <div class="hiddendiv">
            <div class="hiddenbox">
                <h2>Select Service</h2>

                <div class="d-flex"><label for="kitchen" class="w-25">Kitchen</label> <input type="radio"
                        class="form-control servicecheck" name="service" id="kitchen" value="kitchen" /></div>

                <div class="d-flex"> <label for="bathroom" class="w-25">Bathroom</label><input type="radio"
                        class="form-control servicecheck" name="service" id="bathroom" value="bathroom" /></div>
            </div>


        </div>
        <input type="file" id="galleryimagefile" name="galleryimagefile" wire:change="$emit('savegallerypic')" class="d-none" />
    </div>
    </form>
    <div class="row allgalleryphotos py-5">
        @isset($gallerydata)
        @foreach($gallerydata as $data)
      
    <div class="col-md-3 my-2 ">
   
                    <div class="galleryimgbox position-relative">
                    <a class="crosgalleryimage" href="{{Route('deletegallaryimage',['id'=>$data->id])}}">
            <span>X</span>
</a>
        <img src="{{asset('storage/dashboardpics/gallery/')}}/{{$data->galleryimage}}" width='100%' height='100%'/>
        
                    </div>
                  
                </div>
               
@endforeach
                @endisset()
    </div>
</div>


@endsection()