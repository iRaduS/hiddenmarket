@extends('master.main')


@section('title','Sign Up')

@section('content')


    <div class="card auth-card mt-5">
        <div class="card-body text-center">
            <span class="welcome-text">Create An Account</span>
            <div class="mt-3">
                <form action="{{route('auth.signup.post')}}" method="post">
                    {{csrf_field()}}

                    <div class="form-group ">
                        <input type="text" class="form-control @if($errors->has('username')) is-invalid @endif" placeholder="Username" name="username" id="username">
                        @if($errors->has('username'))
                            <p class="text-danger">{{$errors->first('username')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control @if($errors->has('password')) is-invalid @endif" placeholder="Password" name="password"
                            id="password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control @if($errors->has('password')) is-invalid @endif" placeholder="Confirm Password"
                            name="password_confirmation" id="password_confirm">
                    </div>
                    @if($errors->has('password'))
                        <p class="text-danger">{{$errors->first('password')}}</p>
                    @endif
                    <div class="form-group">
                        <input type="password" class="form-control @if($errors->has('pin')) is-invalid @endif" placeholder="Pin" name="pin"
                            id="pin">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control @if($errors->has('pin')) is-invalid @endif" placeholder="Confirm Pin"
                            name="pin_confirmation" id="pin_confirm">
                    </div>
                    @if($errors->has('pin'))
                        <p class="text-danger">{{$errors->first('pin')}}</p>
                    @endif
                    @include('includes.captcha')
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-indigo w-100">Sign Up</button>
                    </div>
                    <div class="form-group text-center">
                        <a href="{{route('auth.signin')}}" class="text-muted">Already have an account ?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


@stop