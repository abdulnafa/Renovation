@extends('layouts.main')

@section('my-content')



<div class="container-fluid  loginbackground">
    <div class="row">
        <div class="col-md-6 d-md-flex d-none align-items-center">
            <img src="{{asset('assets/images/loginleft2.webp')}}" class="img-fluid" />
        </div>
        <div class="col-md-6 px-md-5 px-5  formright">
            <div>


                <x-guest-layout>

                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf


                        <div class="row">
                            <div class="col-12">
                                <x-input-label for="email" :value="__('Email')" />
                            </div>
                            <div class="col-12">
                                <x-text-input id="email" class="form-control block mt-1 w-full" type="email"
                                    name="email" :value="old('email')" required autofocus />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                        </div>


                        <div class="row mt-4">
                            <div class="col-12">
                                <x-input-label for="password" :value="__('Password')" />
                            </div>

                            <div class="col-12">
                                <x-text-input id="password" class="form-control block mt-1 w-full" type="password"
                                    name="password" required autocomplete="current-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>



                        </div>


                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox"
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                    name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                            <div class="row">
                                <div class="col-12">

                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                </div>
                            </div>

                            @endif
                            <div class="row mt-5">
                                <div class="col-12 loginbuttondiv">

                                    <x-primary-button class="ml-3">
                                        {{ __('Log in') }}
                                    </x-primary-button>
                                </div>
                            </div>

<!-- 
                            <div class="row">
    <div class="flex items-center justify-end mt-4">
            <a href="{{ url('login/google') }}">
                <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png">
            </a>
        </div>
    </div> -->

                        </div>
                    </form>


                </x-guest-layout>
            </div>
        </div>
    </div>




</div>


    




@endsection