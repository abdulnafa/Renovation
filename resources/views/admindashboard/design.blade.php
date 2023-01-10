@extends('adminlayout.main')

@section('admin-dashboard')



<!-- Design Section  -->

<div class="logosection container py-1">
    <div class="row">
        <div class="col-3 ms-auto d-flex justify-content-end"><a href="{{Route('designs.create')}}"
                class="btn btn-primary">Add New</a></div>
    </div>
    <div class="row">
        <h1 class="text-center">All Designs</h1>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Service</th>
                <th>Design Name</th>
                <th>DesignImage</th>
                <th>Tags</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
                @if(count($datas)>0)
                @foreach($datas as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->servicename}}</td>
                    <td>{{$data->designname}}</td>
                    <td><img src="{{asset('storage/dashboardpics/designs/')}}/{{$data->designimage}}" width="40px" height="40px"></td>
                    <td>{{$data->tag1}},{{$data->tag2}},{{$data->tag3}}</td>
                    <td><a href="{{Route('designs.edit',$data->id)}}" class="btn btn-success">Edit</a></td>
                    <td><a  href="{{Route('designs.destroy',$data->id)}}" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach()
                @endif
            </tbody>
          
        </table>
    </div>
</div>






@endsection()