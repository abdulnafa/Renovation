@extends('adminlayout.main')

@section('admin-dashboard')



<div class="container">
    <div class="row">
        <h1>Add Service</h1>
    </div>


   
    <div class="row">
        <form action="@if(isset($data)) {{Route('services.update',$data->id)}} @else {{Route('services.store')}} @endif" method="post">
            @csrf
            @isset($data)
            {{ method_field('PUT') }}
            @endisset()
            <div>
                <label>Select Service</label>
               <input type="text" class="form-control" name="service" @isset($data) value="{{$data->name}}"   @endisset() placeholder="Enter Service Name"/>
            </div>
           
        
            
           
    <button type="submit" class="btn btn-primary mt-2">Save</button>
        </form>
    </div>
</div>


@endsection()