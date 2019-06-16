@extends('layouts.master')

@section('content')


<div class="page-content">
    <!-- Start breadcume area -->
    <div class="breadcume-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcrumb">
                        <a title="Return to Home" href="index.html" class="home"><i class="fa fa-home"></i></a>
                        <span class="navigation-pipe">&gt;</span>
                        Login
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End breadcume area -->
    <!-- LOGIN-AREA START -->
    <div class="lognin-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h4 class="cart-title">Login</h4>
                </div>
            </div>
            <div class="row">
                <!-- Registered-Customers Start -->
                <div class="col-md-6">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="registered-customers">
                            <h3>REGISTERED CUSTOMERS</h3>
                            <div class="registered">
                                <p>If you have an account with us, Please log in.</p>
                                <div class="row">
                                    <div class="col-md-12">

                                        <input id="email" type="email" class="custom-form @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="Email Address" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">

                                        <input id="password" type="password" class="custom-form @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        
                                    </div>
                                </div>
                                <div class="form-check mb-5" >
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                <button class="btn btnContact" type="submit">login</button>
                                <p style="float:right"><label class="forgot">
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif    
                                </label></p>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Registered-Customers End -->
                <div class="col-md-6">
                        <div class="new-customers">
                            <h3>NEW CUSTOMERS</h3>
                            <div class="btn-register-now">
                                    <b>You don't have account yet, Go now and make a new  account easily</b>
                                    <p>Create an account for fast checkout and easy access to your orders + you can add products to wishlish</p>
                                    <a href="{{ route('register') }}" class="btn">Register Now</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGIN-AREA END -->
</div>

@endsection
