@extends('adminlayout.main')

@section('admin-dashboard')

<form action="{{Route('footerdetail')}}" method="post">
    @csrf
<div class="container py-4 px-5">
    <h2>Footer Details</h2>
    <div class="row">
        <h4>Social Link</h4>
    </div>
    <div class="row my-2">
        <div class="col-2 "><label for="facebook">Facebook</label></div>
        <div class="col"><input type="text" name="facebook" @if($data!=null) value="{{$data->facebook}}"  @endif() class="form-control" id="facebook" placeholder="Enter Facebook Url" />
        </div>
    </div>

<div class="row my-2">
    <div class="col-2"><label for="twitter">Twitter</label></div>
   <div class="col"> <input type="text" name="twitter"  @if($data!=null) value="{{$data->twitter}}"  @endif()  id="twitter" class="form-control" placeholder="Enter twitter Url" /></div>
</div>

<div class="row my-2">
    <div class="col-2"><label for="google">Google</label></div>
   <div class="col"> <input type="text" name="google"  @if($data!=null) value="{{$data->google}}"  @endif()  id="google" class="form-control" placeholder="Enter google Url" /></div>
</div>



<div class="row my-2">
    <div class="col-2"><label for="instagram">Instagram</label></div>
   <div class="col"> <input type="text"  @if($data!=null) value="{{$data->instagram}}"  @endif()  name="instagram" class="form-control" id="instagram" placeholder="Enter instagram Url" /></div>
</div>



<div class="row my-2">
    <div class="col-2"><label for="linkedin">linkedin</label></div>
   <div class="col"> <input type="text" class="form-control"  @if($data!=null) value="{{$data->linkedin}}"  @endif()  name="linkedin" id="linkedin" placeholder="Enter linkedin Url" /></div>
</div>







<div class="row my-2">
    <div class="col-2"><label for="github">github</label></div>
   <div class="col"> <input type="text" name="github"  @if($data!=null) value="{{$data->github}}"  @endif()  class="form-control" id="github" placeholder="Enter github Url" /></div>
</div>


<div class="row mt-4">
<h3>Contact Detail</h3>

<div class="row my-2">
    <div class="col-2"><label for="address">address</label></div>
   <div class="col"> <input type="text" name="address" id="address"  @if($data!=null) value="{{$data->address}}"  @endif()  class="form-control" placeholder="Enter address Url" /></div>
</div>


<div class="row my-2">
    <div class="col-2"><label for="mail">mail</label></div>
   <div class="col"> <input type="text" name="mail" id="mail"  @if($data!=null) value="{{$data->mail}}"  @endif()  class="form-control" placeholder="Enter mail Url" /></div>
</div>



<div class="row my-2">
    <div class="col-2"><label for="number">number</label></div>
   <div class="col"> <input type="text" name="number" id="number"  @if($data!=null) value="{{$data->number}}"  @endif()  class="form-control" placeholder="Enter number Url" /></div>
</div>

<div class="row my-2">
    <div class="col-2"><label for="ptcl">Ptcl Number</label></div>
   <div class="col"> <input type="text" name="ptcl" id="ptcl"  @if($data!=null) value="{{$data->ptcl}}"  @endif()  class="form-control" placeholder="Enter number Url" /></div>
</div>

<div class="row my-4" >
    <div class="col-3 ms-auto d-flex justify-content-end">
        <button class="btn btn-primary">Save</button>
    </div>
</div>

</div>

</form>














</div>

@endsection()