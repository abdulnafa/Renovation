@extends('adminlayout.main')

@section('admin-dashboard')



<!-- Design Section  -->

<div class="logosection container py-1">
    <div class="row">
        <div class="col-3 ms-auto d-flex justify-content-end"><a href="{{Route('services.create')}}"
                class="btn btn-primary">Add New</a></div>
    </div>
    <div class="row">
        <h1 class="text-center">All Services</h1>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Service</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
                @isset($data)
                @foreach($data as $data)
                <tr> 
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td><a class="btn btn-success" href="{{Route('allservices',$data->name)}}">Add Data</a></td>
                    <td><a href="{{Route('services.edit',$data->id)}}" class="btn btn-success">Edit</a></td>
                    <td><a href="{{Route('services.destroy',$data->id)}}" class="btn btn-danger">Delete</a></td>
                   
                </tr>

                @endforeach()

                @endisset()
               
            </tbody>
          
          
        </table>
    </div>
</div>






@endsection()