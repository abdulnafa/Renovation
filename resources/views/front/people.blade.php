@extends('layouts.main')
@section('title', 'People')
@section('my-content')


<!-- header  -->
<div class="container-fluid whychooseushead peoplehead">
    <div class="px-md-5 py-5">


        <div class="row px-md-0 px-4">
            <div class="col-md-6 whychooseussection">
                <h1>Our People</h1>
                <p>Your local Refresh Renovations business is led by a highly trained renovation consultant who is supported by a team of industry professionals. </p>
            </div>
        </div>
    </div>
</div>




@livewire('people')
@endsection