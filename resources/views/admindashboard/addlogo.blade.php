@extends('adminlayout.main')

@section('admin-dashboard')



<div class="container">
    <div class="row">
        <h1>Add Logo</h1>
    </div>
    <div class="row">
        <form action="@if(isset($data)) {{Route('savecompanylogoimage',['id'=>$data->id])}} @else {{Route('savecompanylogoimage')}} @endif" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" class="form-control" name="companylogo"/>
            @isset($data)
            <img src="{{asset('storage/dashboardpics/logos/')}}/@if(isset($data)){{$data->logoimg}}@endif" width="50px"/>
            @endisset
    <button type="submit" class="btn btn-primary mt-2">Save</button>
        </form>
    </div>
</div>


@endsection()