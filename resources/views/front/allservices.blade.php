@extends('layouts.main')
@section('my-content')

<div class="container-fluid py-5">
    <div class="container">
        <div class="row allserviceshead">
            <h1>All Services</h1>
        </div>
<div class="row">
    <div class="col-md-4 p-3">
        <a href="{{Route('front.kitchen')}}">
        <div class="servicesbox">
<h1>Kitchen</h1>
        </div>

        </a>
    </div>

    <div class="col-md-4 p-3">
<a href="{{Route('front.washroom')}}">
        <div class="servicesbox">
<h1>Bathroom</h1>
        </div>
        </a>

    </div>
</div>
    </div>
</div>

@endsection()