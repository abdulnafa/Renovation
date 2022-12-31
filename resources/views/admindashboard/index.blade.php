@extends('adminlayout.main')

@section('admin-dashboard')
<!-- Slider Pics  -->
<div class="sliderpart container py-3">
    <div class="row">
        <h1 class="text-center text-black">Select Header Slider Pics</h1>
    </div>
    <form action="{{Route('sliderpics')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class=" row g-3">

            <div class="col-4">
                <input type="file" class="form-control" name="firstslider" id="firstsliderfile" />
                <img src="{{ asset('storage/dashboardpics/slider/'.$data[0]->slider1) }}" id="firstsliderimage"
                    width="100%" height="250px" />
            </div>

            <div class="col-4">
                <input type="file" class="form-control" name="secondslider" id="secondsliderfile" />
                <img src="{{ asset('storage/dashboardpics/slider/'.$data[0]->slider2) }}" id="secondsliderimage"
                    width="100%" height="250px" />
            </div>


            <div class="col-4">
                <input type="file" class="form-control" name="thirdslider" id="thirdsliderfile" />
                <img src="{{ asset('storage/dashboardpics/slider/'.$data[0]->slider3) }}" id="thirdsliderimage"
                    width="100%" height="250px" />
            </div>


        </div>


        <div class="row py-5 pe-3">
            <div class="col-3 ms-auto d-flex justify-content-end"><button type="submit"
                    class="btn btn-primary btn-sm">Save</button></div>

        </div>
    </form>
</div>


<!-- Logo Section  -->

<div class="logosection container py-1">
    <div class="row">
        <div class="col-3 ms-auto d-flex justify-content-end"><a href="{{Route('showcompanylog')}}" class="btn btn-primary">Add New</a></div>
    </div>
<div class="row">
    <h1 class="text-center">Change Logo</h1>
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Logo Image</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        @if(isset($logos))
        @foreach($logos as $logo)
        <tr>
            <td>{{$logo->id}}</td>
            <td><img src="{{asset('storage/dashboardpics/logos/')}}/{{$logo->logoimg}}" width="50px"/></td>
            <td> <a href="{{Route('showcompanylog',['id'=>$logo->id])}}" class="btn btn-success">Edit</a></td>
            <td><a href="{{Route('deletecompanylogo',['id'=>$logo->id])}}" class="btn btn-danger">Delete</></td>
        </tr>
        @endforeach
        @endif
    </table>
</div>
</div>


@endsection()