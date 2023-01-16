@extends('adminlayout.main')

@section('admin-dashboard')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 ms-auto">
<a href="{{Route('ambesders.create')}}" class="btn btn-primary">Add New</a>
        </div>
    </div>

<div class="row">
    <h1>All Ambasders</h1>
</div>
    <table class="table table-bordered">
<thead>
 
    <tr>
        <th>ID</th>
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
        <td><img src="{{asset('storage/dashboardpics/ambasders')}}/{{$data->image}}" width="70px" height="auto" style="object-fit:cover"/></td>
        <td><a href="{{Route('ambesders.edit',$data->id)}}" class="btn btn-success">Edit</a></td>
        <td><a href="{{Route('ambesders.destroy',$data->id)}}"  class="btn btn-danger">Delete</a></td>
    </tr>
    @endforeach()
    @endisset()
</tbody>
    </table>
</div>

@endsection()