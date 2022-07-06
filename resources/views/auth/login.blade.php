@extends('layouts.app')

@section('content')

<style>
    .app {
        background-image: url({{url('assets/login_bg.png')}});
        background-size: cover;
        height: 100vh;
    }
    
    input[type="email"],
    input[type="password"] {
        background: transparent !important;
        color: rgba(255, 255, 255, .9) !important;
        font-size: 14px;
        padding: 15px;
        border-radius: 10px;
    }

    input[type="email"]:focus {
        outline: none;
    }
    .input-box {
        position: relative;
    }
    .input-box small {
        position: absolute;
    }
    small.email {
        left: -77px;
        top: -18px;
    }
    small.password {
        left: -48px;
        top: -18px;
    }
    ::-ms-reveal {
        filter: invert(100%);
    }
    .text-fpwd, .text-rmbr {
        color: rgba(255, 255, 255, .9) !important;
    }
    input[type="checkbox"] {
        background: #999;
        padding: 10px;
        border-color: #fff !important;
    }
</style>
<div class="app" style="position: relative">
    <div class="container">
        <div class=" justify-content-center" style="display: grid; place-items:center; ">
                <div class="card" style="margin-top: 135px;width: 564px; height: 564px; border-radius: 24px; backdrop-filter: blur(10px); background-color: rgba(0, 0, 0, .2); padding: 27px 70px; border: 1px solid #999; ">
                    <div class="text-center">
                        <img src="{{ asset('assets/logo.png')}}" alt="">
    
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="row mb-3" style="position: relative;">
                                
    
                                <div class="col-md-12 input-box">
                                    <small class="col-md-4 email col-form-label text-md-end" style="color: rgba(255, 255, 255, .9)">{{ __('Email') }}</small>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                          
    
                                <div class="col-md-12 input-box">
                                    <small class="col-md-4 password col-form-label text-md-end" style="color: rgba(255,255,255,.9);">{{ __('Password') }}</small>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <div class="col-md-12" style="display: flex; width: 100%; justify-content: space-between; position: relative;">
                                    <div class="form-check" style="display: flex; align-items: center;">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}
                                        style="position: absolute; top: -5px;">
    
                                        <label style="color: rgba(255, 255, 255, 0.9); padding-left: 10px;" class="text-rmber form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                    <div>
                                        <a class="text-fpwd" href="#">Forgot Password?</a>
                                    </div>
    
                                </div>
                            </div>
    
                            <div class="row mb-0 mt-4">
                                <div class="col-md-12">
                                    <button type="submit" class="btn" style="background: #39B74E; color: #fff; padding: 13px 0; font-size: 18px; font-weight: bold; width: 100%; border: 1px solid #fff; border-radius: 10px; letter-spacing: 1px;">
                                        {{ __('Log in') }}
                                    </button>
                                </div>
                                <div class="text-center text-white mt-3">
                                    <span style="font-weight: 400; font-size: 16px;">dont have an account yet? register <a href="#">here</a></span>
    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>

</div>
@endsection
