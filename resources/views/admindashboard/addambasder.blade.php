@extends('adminlayout.main')

@section('admin-dashboard')



<div class="container">
    <div class="row">
        <h1>Add Image</h1>
    </div>
    <div class="row">
        <form action="@if(isset($data)) {{Route('ambesders.update',$data->id)}} @else {{Route('ambesders.store')}} @endif" method="post" enctype="multipart/form-data">
            @csrf
            @isset($data)
            {{ method_field('PUT') }}
            @endisset()
            <input type="file" class="form-control" name="ambasderimage"/>
            <div class="row py-2">
            @isset($data)
            <div class="col-2">
              <img src="{{asset('storage/dashboardpics/ambasders/')}}/@if(isset($data)){{$data->image}}@endif" width="50px" />  
            </div>
            
            @endisset
            </div>
          
    <button type="submit" class="btn btn-primary mt-2">Save</button>
        </form>
    </div>
</div>


@endsection()