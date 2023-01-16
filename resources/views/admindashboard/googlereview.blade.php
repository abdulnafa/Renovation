@extends('adminlayout.main')

@section('admin-dashboard')



<!-- Design Section  -->

<div class="logosection container py-1">
    <div class="row">
        <div class="col-3 ms-auto d-flex justify-content-end"><a href="{{Route('googlereviews.create')}}"
                class="btn btn-primary">Add New</a></div>
    </div>
    <div class="row">
        <h1 class="text-center">All Reviews</h1>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Stars</th>
                <th>Image</th>
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
                    <td>{{$data->description}}</td>
                    <td>{{$data->stars}}</td>
                    <td>{{$data->reviewimage}}</td>
                    <td><a href="{{Route('googlereviews.edit',$data->id)}}" class="btn btn-success">Edit</a></td>
                    <td><a href="{{Route('googlereviews.destroy',$data->id)}}" class="btn btn-danger">Delete</a></td>
                   
                </tr>

                @endforeach()

                @endisset()
               
            </tbody>
          
          
        </table>
    </div>
</div>






@endsection()