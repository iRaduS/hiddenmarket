@extends('master.main')


@section('title','Sign in')

@section('content')


<div class="card auth-card mt-5">
    <div class="card-body text-center">
            <span class="welcome-text">Welcome Back !</span>

            <div class="mt-4 text-left">
                <form action="{{ route('auth.signin.post') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group"> 
                        <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                        </div>
                         <input type="text" required class="form-control auth-input @error('username',$errors) is-invalid @enderror" placeholder="Enter Username" name="username" id="username">
                      </div>
                      @error('username',$errors)
                        <p class="text-danger">{{$errors->first('username')}}</p>
                      @enderror 
                    </div>
                    <div class="form-group"> 
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                            </div>
                            <input type="password" required class="form-control auth-input @error('password',$errors) is-invalid @enderror" placeholder="Enter Password" name="password"
                            id="password">                      
                        </div>
                      @error('password',$errors)
                        <p class="text-danger">{{$errors->first('password')}}</p>
                      @enderror
                    </div>
                    @include('includes.captcha')
                    <div class="form-group text-center m-0">
                        <button type="submit" class="btn auth-input btn-indigo btn-block">Login</button>
                    </div>
                    @include('includes.flash.error')

                </form>
            </div>
                <div class="mt-1" style="font-size: 14px">
                    <a href=" {{route("auth.forgotpass")}} " style="text-decoration: none;">Forgot password?
                    </a><span style="color: grey">- Need an account? </span><a href=" {{route("auth.signup")}} " style="text-decoration: none;">Register
                    </a>
                </div>
        </div>
    </div>


@stop