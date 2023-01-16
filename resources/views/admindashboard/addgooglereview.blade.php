@extends('adminlayout.main')

@section('admin-dashboard')



<div class="container px-5">
    <div class="row">
        <h1>Add Review</h1>
    </div>
    <div class="row">
        <form action="@if(isset($data)) {{Route('googlereviews.update',$data->id)}} @else {{Route('googlereviews.store')}}    @endif() " method="post" enctype="multipart/form-data">
            @csrf
            @isset($data)  
            {{ method_field('PUT') }}
            
            @endisset()
            <div class="row">
                <label for="name">Name</label>
                <input type="text" placeholder="Name:" @isset($data) value="{{$data->name}}"  @endisset() class="form-control" name="name" id="name"/>
            </div>
            <div class="row">
                <label for="description">Description</label>
                <input type="text" placeholder="Description:" @isset($data) value="{{$data->description}}"  @endisset()  class="form-control" name="description" id="description"/>
            </div>
            <div class="row">
                <label for="rating">Select Rating Statrs</label>
                <select class="form-control" name="rating" id="rating">
                    <option value="">Select Rating Stars</option>
                    <option value="1" @isset($data) @if($data->stars=='1') selected @endif()  @endisset() >one</option>
                    <option value="2"  @isset($data) @if($data->stars=='2') selected @endif()  @endisset()>two</option>
                    <option value="3" @isset($data) @if($data->stars=='3') selected @endif()  @endisset()>three</option>
                    <option value="4"  @isset($data) @if($data->stars=='4') selected @endif()  @endisset()>four</option>
                    <option value="5"  @isset($data) @if($data->stars=='5') selected @endif()  @endisset()>five</option>
               
                </select>
            </div>
            <div class="row">
                <label for="reviewimage">Google Review</label>
                <input type="file" class="form-control" name="reviewimage" id="reviewimage"/>
            </div>
            <div class="row">
                <div class="col">
            @isset($data) <img src="{{asset('storage/dashboardpics/reviews/')}}/{{$data->reviewimage}}" width="50px" height="50px"/> @endisset
            </div>
            </div>
            
            
            <!-- <img src="{{asset('storage/dashboardpics/logos/')}}/@if(isset($data)){{$data->logoimg}}@endif" width="50px"/> -->
            
    <button type="submit" class="btn btn-primary mt-2">Save</button>
        </form>
    </div>
</div>


@endsection()