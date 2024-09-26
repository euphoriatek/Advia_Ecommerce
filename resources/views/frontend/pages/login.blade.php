@extends('frontend.layouts.master')

@section('title','Adivaa || Login Page')

@section('main-content') 
<!-- Shop Login -->
<div class="hero-banner inner-banner login-page">
    <div class="container">
        <div class="login-form">
            <form class="form" method="post" action="{{route('login.submit')}}">
                @csrf
                <h5>Login</h5>
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{old('email')}}">
                            @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" value="{{old('password')}}">
                            @error('password')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="form-group">
                            <div class="form-group">
                                <div class="form-check p-0">
                                    <input id='four' type='checkbox' />
                                    <label for='four'><span></span>Remember me</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="form-group text-right">
                            <div class="forgot-password"><a href="#">Forgot Password</a></div>
                        </div>
                    </div>
                </div>
                <div class="login-btn text-center mb-5"><button type="submit" class="btn btn-primary">Login</button>
                </div>
                <div class="signup-link text-center mb-4">
                    <p>Not a Member? <a href="{{ url('user/register') }}">Sign up</a></p>
                </div>
            </form>
            <div class="connect-login text-center">
                <a href="#"><i class="fa-brands fa-google"></i></a>
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            </div>
        </div>
    </div>
</div>
<!--/ End Login -->
@endsection