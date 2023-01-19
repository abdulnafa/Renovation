@extends('layouts.main')
@section('title', 'People')
@section('my-content')


<!-- header  -->
<div class="container-fluid whychooseushead peoplehead">
    <div class="container py-5">


        <div class="row">
            <div class="col-md-6 whychooseussection">
                <h1>Our People</h1>
                <p>Your local Refresh Renovations business is led by a highly trained renovation consultant who is supported by a team of industry professionals. </p>
            </div>
        </div>
    </div>
</div>




@livewire('people')
@endsection