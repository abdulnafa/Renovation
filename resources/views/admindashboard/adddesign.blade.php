@extends('adminlayout.main')

@section('admin-dashboard')



<div class="container">
    <div class="row">
        <h1>Add Design</h1>
    </div>


   
    <div class="row">
        <form action="@if(isset($design)) {{Route('designs.update',$design->id)}} @else {{Route('designs.store')}} @endif" method="post" enctype="multipart/form-data">
            @csrf
            @isset($design)
            {{ method_field('PUT') }}
            @endisset()
            <div>
                <label>Select Service</label>

                 <select class="form-select form-control" name="designservice">
                <option value="kitchen" @isset($design) @if($design->servicename=='kitchen') selected @endif() @endisset()>Kitchen</option>
                <option value="bathroom" @isset($design) @if($design->servicename=='bathroom') selected @endif() @endisset()>Bathroom</option>
            </select>
            </div>
            <div>
                <label for="designname">Design Name</label>
                <input type="text" id="designname" name="designname" @isset($design) value="{{$design->designname}}" @endisset  class="form-control" placeholder="Design Name"/>
            </div>
           <div>
            <labe for="designimage">Select Image</labe>
            <input type="file" class="form-control" name="designimage" id="designimage"/>
            @isset($design)
        
            <img src="{{asset('storage/dashboardpics/designs/')}}/{{$design->designimage}}" class="img-fluid" width="100px" height="100px"/>


            @endisset()
           </div>
           <div>
            <label>Tags</label>
            <div class="row">
                <div class="col-4"> <input type="text" name="tag1" id="tag1" @isset($design) value="{{$design->tag1}}"  @endisset() class="form-control" placeholder="Tag 1"/></div>
                <div class="col-4"> <input type="text" name="tag2" id="tag2" @isset($design) value="{{$design->tag2}}"  @endisset() class="form-control" placeholder="Tag 2"/></div>
                <div class="col-4"> <input type="text" name="tag3" id="tag3" @isset($design) value="{{$design->tag3}}"  @endisset() class="form-control" placeholder="Tag 3"/></div>
                
            </div>
           
           </div>
            
            @isset($data)
            <img src="{{asset('storage/dashboardpics/logos/')}}/@if(isset($data)){{$data->logoimg}}@endif" width="50px"/>
            @endisset
    <button type="submit" class="btn btn-primary mt-2">Save</button>
        </form>
    </div>
</div>


@endsection()