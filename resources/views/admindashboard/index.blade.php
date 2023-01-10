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

            <div class="col-md-4">
                <input type="file" class="form-control" name="firstslider" id="firstsliderfile" />

                <div><img
                        src="@if(count($data)!=0){{ asset('storage/dashboardpics/slider/'.$data[0]->slider1) }}@endif()"
                        id="firstsliderimage" width="100%" height="250px" /></div>

                <div class="py-2">
                    <h6>Heading 1</h6><input type="text" id="slider1heading1" name="slider1heading1"
                        placeholder="Heading 1" @if(count($data)>0) value="{{$data[0]->slider1title1}}" @endif()
                    class="form-control"/>
                </div>
                <div class="py-2">
                    <h6>Heading 2</h6><input type="text" id="slider1heading2" name="slider1heading2"
                        placeholder="Heading 2" @if(count($data)>0) value="{{$data[0]->slider1title2}}" @endif
                    class="form-control"/>
                </div>

            </div>

            <div class="col-md-4">
                <input type="file" class="form-control" name="secondslider" id="secondsliderfile" />

                <img src=" @if(count($data)!=0){{ asset('storage/dashboardpics/slider/'.$data[0]->slider2) }}@endif()"
                    id="secondsliderimage" width="100%" height="250px" />

                <div class="py-2">
                    <h6>Heading 1</h6><input type="text" id="slider2heading1" name="slider2heading1"
                        placeholder="Heading 1" @if(count($data)>0) value="{{$data[0]->slider2title1}}" @endif
                    class="form-control"/>
                </div>
                <div class="py-2">
                    <h6>Heading 2</h6><input type="text" id="slider2heading2" name="slider2heading2"
                        placeholder="Heading 2" @if(count($data)>0) value="{{$data[0]->slider2title2}}" @endif
                    class="form-control"/>
                </div>

            </div>


            <div class="col-md-4">
                <input type="file" class="form-control" name="thirdslider" id="thirdsliderfile" />

                <img src=" @if(count($data)!=0){{ asset('storage/dashboardpics/slider/'.$data[0]->slider3) }} @endif()"
                    id="thirdsliderimage" width="100%" height="250px" />

                <div class="py-2">
                    <h6>Heading 1</h6><input type="text" id="slider3heading1" name="slider3heading1"
                        placeholder="Heading 1" @if(count($data)>0) value="{{$data[0]->slider3title1}}" @endif
                    class="form-control"/>
                </div>
                <div class="py-2">
                    <h6>Heading 2</h6><input type="text" id="slider3heading2" name="slider3heading2"
                        placeholder="Heading 2" @if(count($data)>0) value="{{$data[0]->slider3title2}}" @endif
                    class="form-control"/>
                </div>

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
        <div class="col-3 ms-auto d-flex justify-content-end"><a href="{{Route('showcompanylog')}}"
                class="btn btn-primary">Add New</a></div>
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
            @if(count($logos)!=0)
            @foreach($logos as $logo)
            <tr>
                <td>{{$logo->id}}</td>
                <td><img src="{{asset('storage/dashboardpics/logos/')}}/{{$logo->logoimg}}" width="50px" /></td>
                <td> <a href="{{Route('showcompanylog',['id'=>$logo->id])}}" class="btn btn-success">Edit</a></td>
                <td><a href="{{Route('deletecompanylogo',['id'=>$logo->id])}}" class="btn btn-danger">Delete</>
                </td>
            </tr>
            @endforeach
            @endif
        </table>
    </div>
</div>



<!-- Plane card section  -->

<div class="container">
    <div class="row py-3">
        <h1 class="text-center">Plane Card Section</h1>
    </div>
    <form action="{{Route('saveplanecard')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="imgtop">
                    <img src="{{asset('assets/images/dashboardstaticpics/uploadimageicon.png')}}" class="cardimageicon"
                        id="cardoneimageicon" />
                    <img src="{{asset('storage/dashboardpics/cards/')}}/@if(count($planecards)!=0){{$planecards[0]->cardoneimg}}@endif()"
                        width="100%" height="100%" id="cardoneimg" />
                    <input type="file" class="d-none" name="cardonefile" id="cardonefile" />
                </div>
                <div class="cardtitle">
                    <input type="text" value=" @if(count($planecards)!=0){{$planecards[0]->cardonetitle}}@endisset()"
                        name="cardonetitle" />
                </div>
                <div class="cardcontent">
                    <textarea type="text" name="cardonecontent"
                        rows="50">  @if(count($planecards)!=0){{$planecards[0]->cardonecontent}}@endif()</textarea>
                </div>
            </div>


            <div class="col-md-4">
                <div class="imgtop">
                    <img src="{{asset('assets/images/dashboardstaticpics/uploadimageicon.png')}}" class="cardimageicon"
                        id="cardtwoimageicon" />
                    <img src="{{asset('storage/dashboardpics/cards/')}}/@if(count($planecards)!=0){{$planecards[0]->cardtwoimg}}@endif()"
                        width="100%" height="100%" id="cardtwoimg" />
                    <input type="file" class="d-none" name="cardtwofile" id="cardtwofile" />
                </div>
                <div class="cardtitle">
                    <input type="text" value=" @if(count($planecards)!=0){{$planecards[0]->cardtwotitle}}@endif()"
                        name="cardtwotitle" />
                </div>
                <div class="cardcontent">
                    <textarea type="text" name="cardtwocontent"
                        rows="50"> @if(count($planecards)!=0){{$planecards[0]->cardtwocontent}}@endif()</textarea>
                </div>
            </div>




            <div class="col-md-4">
                <div class="imgtop">
                    <img src="{{asset('assets/images/dashboardstaticpics/uploadimageicon.png')}}" class="cardimageicon"
                        id="cardthreeimageicon" />
                    <img src="{{asset('storage/dashboardpics/cards/')}}/@if(count($planecards)!=0){{$planecards[0]->cardthreeimg}}@endif()"
                        width="100%" height="100%" id="cardthreeimg" />
                    <input type="file" class="d-none" name="cardthreefile" id="cardthreefile" />
                </div>
                <div class="cardtitle">
                    <input type="text" value=" @if(count($planecards)!=0){{$planecards[0]->cardthreetitle}}@endif()"
                        name="cardthreetitle" />
                </div>
                <div class="cardcontent">
                    <textarea type="text" name="cardthreecontent"
                        rows="50"> @if(count($planecards)!=0){{$planecards[0]->cardthreecontent}}@endif()</textarea>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-2 ms-auto d-flex justify-content-end"> <button class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</div>


@endsection()