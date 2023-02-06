@extends('adminlayout.main')

@section('admin-dashboard')

<div class="container">
    <div class="row py-3 px-3">
        <div class="col-3">
            <h1>All Services</h1>
        </div>
        <div class="ms-auto col-2 d-flex align-items-center">
            <form action="{{Route('addallservices')}}" method="post" enctype="multipart/form-data">
                @csrf
            <select class="form-control d-none" name="service">
                <option value="">Select Service</option>
                @isset( $servicesname)
                @foreach( $servicesname as  $servicesname)
                <option value="{{$servicesname->name}}" @if($servicesname->name==$name) selected @endif> {{$servicesname->name}}</option>
                @endforeach
                @endisset
            </select>

        </div>


    </div>


    <!-- Top Head  -->
    <!-- Left Side Carosel images  -->
    <div class="row py-3">
        <div class="col-md-6">
            <div class="row">
                <h6>Left Side Slider Images</h6>
                <div class="col-4">
                    <div>
                        <h6>First</h6>
                        <input type="file" class="d-none" name="headtopimgonefile" id="headtopimgonefile" />
                    </div>
                    <div class="headtopimgdiv headtopimgonediv">
                        <img src="{{asset('assets/images/dashboardstaticpics/uploadimageicon.png')}}"
                            class="serviceimageicon" id="serviceimageoneicon">
                        <img src="{{asset('storage/dashboardpics/Allservices/')}}/@if(count($allservicesdata)!=0){{$allservicesdata[0]->headtopimgonefile}}@endif" class="headtopimageshow" id="headtoponeimageshow" />
                    </div>


                </div>
                <div class="col-4">
                    <div>
                        <h6>Second</h6>
                        <input type="file" class="d-none" name="headtopimgtwofile" id="headtopimgtwofile" />
                    </div>
                    <div class="headtopimgdiv headtopimgtwodiv">
                        <img src="{{asset('assets/images/dashboardstaticpics/uploadimageicon.png')}}"
                            class="serviceimageicon" id="serviceimagetwoicon">
                        <img src="{{asset('storage/dashboardpics/Allservices/')}}/@if(count($allservicesdata)!=0){{$allservicesdata[0]->headtopimgtwofile}}@endif" class="headtopimageshow" id="headtoptwoimageshow" />
                    </div>


                </div>

                <div class="col-4">
                    <div>
                        <h6>Third</h6>
                        <input type="file" class="d-none" name="headtopimgthreefile" id="headtopimgthreefile" />
                    </div>
                    <div class="headtopimgdiv headtopimgthreediv">
                        <img src="{{asset('assets/images/dashboardstaticpics/uploadimageicon.png')}}"
                            class="serviceimageicon" id="serviceimagethreeicon">
                        <img src="{{asset('storage/dashboardpics/Allservices/')}}/@if(count($allservicesdata)!=0){{$allservicesdata[0]->headtopimgthreefile}}@endif" class="headtopimageshow" id="headtopthreeimageshow" />
                    </div>


                </div>
            </div>

        </div>
        <div class="col-md-6">
            <h6>Right Side</h6>

            <input type="text" name="headtoptitle" value="@if(count($allservicesdata)!=0){{$allservicesdata[0]->headtoptitle}}@endif" class="form-control my-1" placeholder="Enter Title" />
            <input type="text" name="headtopparagraph"  value="@if(count($allservicesdata)!=0){{$allservicesdata[0]->headtopparagraph}}@endif" class="form-control my-1" placeholder="Enter Paragraph" />
            <input type="text" name="headtoplist1"  value="@if(count($allservicesdata)!=0){{$allservicesdata[0]->headtoplist1}}@endif"  class="form-control my-1" placeholder="Write List1" />
            <input type="text" name="headtoplist2"  value="@if(count($allservicesdata)!=0){{$allservicesdata[0]->headtoplist2}}@endif"  class="form-control my-1" placeholder="Write List2" />
            <input type="text" name="headtoplist3"  value="@if(count($allservicesdata)!=0){{$allservicesdata[0]->headtoplist3}}@endif"  class="form-control my-1" placeholder="Write List3" />
        </div>
    </div>


    <!-- All Services  -->




    <div class="container">
        <div class="row py-3">
            <h1 class="text-center">Service Card Section</h1>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="imgtop">
                    <img src="{{asset('assets/images/dashboardstaticpics/uploadimageicon.png')}}" class="cardimageicon"
                        id="servicecardoneimageicon" />
                    <img src="{{asset('storage/dashboardpics/Allservices/')}}/@if(count($allservicesdata)!=0){{$allservicesdata[0]->servicecardonefile}}@endif" width="100%" height="100%" id="servicecardoneimg" />
                    <input type="file" class="d-none" name="servicecardonefile" id="servicecardonefile" />
                </div>
                <div class="cardtitle">
                    <input type="text" value="@if(count($allservicesdata)!=0){{$allservicesdata[0]->servicecardonetitle}}@endif" name="servicecardonetitle" />
                </div>
                <div class="cardcontent">
                    <textarea type="text" name="servicecardonecontent" rows="50">@if(count($allservicesdata)!=0) {{$allservicesdata[0]->servicecardonecontent}} @endif  </textarea>
                </div>
            </div>


            <div class="col-md-4">
                <div class="imgtop">
                    <img src="{{asset('assets/images/dashboardstaticpics/uploadimageicon.png')}}" class="cardimageicon"
                        id="servicecardtwoimageicon" />
                    <img src="{{asset('storage/dashboardpics/Allservices/')}}/@if(count($allservicesdata)!=0){{$allservicesdata[0]->servicecardtwofile}} @endif" width="100%" height="100%" id="servicecardtwoimg" />
                    <input type="file" class="d-none" name="servicecardtwofile" id="servicecardtwofile" />
                </div>
                <div class="cardtitle">
                    <input type="text" value="@if(count($allservicesdata)!=0){{$allservicesdata[0]->servicecardtwotitle}}@endif" name="servicecardtwotitle" />
                </div>
                <div class="cardcontent">
                    <textarea type="text" name="servicecardtwocontent" rows="50">@if(count($allservicesdata)!=0){{$allservicesdata[0]->servicecardtwocontent}} @endif</textarea>
                </div>
            </div>




            <div class="col-md-4">
                <div class="imgtop">
                    <img src="{{asset('assets/images/dashboardstaticpics/uploadimageicon.png')}}" class="cardimageicon"
                        id="servicecardthreeimageicon" />
                    <img src="{{asset('storage/dashboardpics/Allservices/')}}/@if(count($allservicesdata)!=0){{$allservicesdata[0]->servicecardthreefile}}@endif" width="100%" height="100%" id="servicecardthreeimg" />
                    <input type="file" class="d-none" name="servicecardthreefile" id="servicecardthreefile" />
                </div>
                <div class="cardtitle">
                    <input type="text" value="@if(count($allservicesdata)!=0){{$allservicesdata[0]->servicecardthreetitle}} @endif" name="servicecardthreetitle" />
                </div>
                <div class="cardcontent">
                    <textarea type="text" name="servicecardthreecontent" rows="50">@if(count($allservicesdata)!=0){{$allservicesdata[0]->servicecardthreecontent}} @endif</textarea>
                </div>
            </div>

        </div>


    </div>

<div class="py-3 d-flex justify-content-end">
  <button class="btn btn-primary">Save</button>  
</div>

</form>
    <!-- Common Questions -->


    <div class="row py-4">
        <div class="col-3">
            <h1>Common Question</h1>
        </div>

        
    </div>

<div class="row py-4">
<form action="{{Route('addquestion')}}" method="post">
    @csrf
<input type="text" name="question" class="form-control my-2" placeholder="Enter Question?" />
<input type="text" name="answer" class="form-control my-2" placeholder="Enter Answer?" />
<input type="hidden" name="service" value="{{$name}}" />
<button class="btn btn-primary">Save Question</button>

</form>
</div>

<div class="row py-3">

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Question</th>
            <th>Answer</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
@isset($faq)
@foreach($faq as $faq)
        <tr>
            <td>{{$faq->id}}</td>
            <td>{{$faq->question}}</td>
            <td>{{$faq->answer}}</td>
            <td><a class="btn btn-danger" href="{{Route('deletefaq',['id'=>$faq->id,'name'=>$name])}}">Delete</a></td>
        </tr>
@endforeach
        @endisset
    </tbody>
</table>

</div>


    <!-- -------------------------------------------Services Cards-----------------------------------------  -->
</div>



@endsection()