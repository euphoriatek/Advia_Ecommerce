@extends('frontend.layouts.master') @section('title','Adivaa || Register Page')
@section('main-content')

<!-- Shop Login -->
<div class="hero-banner inner-banner signup-page">
    <div class="container">
        <div class="login-form">
            <form class="form" method="post" action="{{route('register.submit')}}">
                @csrf
                <h5>Sign up</h5>
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" aria-describedby="name" value="{{old('name')}}">
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-12 mb-3">
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" id="email" aria-describedby="name" value="{{old('email')}}">
                            @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-12 mb-3">
                        <div class="form-group">
                            <label for="Password" class="form-label">Password</label>
                            <input type="Password" name="password" class="form-control" id="Password" aria-describedby="Password" value="{{old('password')}}">
                            @error('password')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-12 mb-2">
                        <div class="form-group">
                            <label for="confirm-password" class="form-label">Confirm Password</label>
                            <input type="Password" name="password_confirmation" class="form-control" id="confirm-password"
                                aria-describedby="confirm-password" value="{{old('password_confirmation')}}">
                            @error('password_confirmation')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-12 mb-4">
                        <div class="form-group">
                            <div class="form-check p-0">
                                <input id="four" type="checkbox" />
                                <label for="four"><span></span>I accept the terms of use & Privacy
                                    Policy</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="login-btn text-center mb-3">
                    <button type="submit" class="btn btn-primary">Sign up</button>
                </div>
                <div class="signup-link text-center">
                    <p>Already have an account? <a href="{{ url('user/login') }}"> Login</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
<!--/ End Login -->
@endsection