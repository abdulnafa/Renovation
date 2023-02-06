@extends('layouts.main')

@section('my-content')

<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-md-block d-none">
            <img src="{{asset('assets/images/loginleft2.webp')}}" class="img-fluid" />
            </div>


            <div class="col-md-6 p-md-5 px-2">
            <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="row">
            <div class="col-3">
            <x-input-label for="name" :value="__('Name')" />
            </div>
            <div class="col">
  
            <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
          
        </div>

        <!-- Email Address -->
        <div class="row mt-4">
            <div class="col-3">
            <x-input-label for="email" :value="__('Email')" />
            </div>
            <div class="col">
            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            
            
        </div>

        <!-- Password -->
        <div class="row mt-4">
            <div class="col-3">
            <x-input-label for="password" :value="__('Password')" />

            </div>
            <div class="col">
            <x-text-input id="password" class="form-control"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            

           
        </div>

        <!-- Confirm Password -->
        <div class="row mt-4">
<div class="col-3">
<x-input-label for="password_confirmation" :value="__('Confirm Password')" />
</div>
<div class="col">
<x-text-input id="password_confirmation" class="form-control"
                            type="password"
                            name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
</div>
            

          
        </div>

        <div class="flex items-center justify-end mt-4">
            <div class="row ps-5">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
            </div>
            <div class="row">
<x-primary-button class="btn btn-sm btn-primary">
                {{ __('Register') }}
            </x-primary-button>
            </div>

            
        </div>
    </form>
</x-guest-layout>
            </div>
        </div>
    </div>
</div>





  






@endsection