@extends('layout')

@section('nav_bar_content')
    <a class="nav-link d-inline float-right text-dark font-weight-bold side-text" href="{{ route('register') }}">Register</a>
@endsection
@section('content')
    <form action="{{ route('login.post') }}" method="POST">
        @csrf
        <div class="user-details user-details-login">
            <div class="input-box">
                <span class="details">E-Mail Address</span>
                <input type="text" id="email_address" placeholder="Enter your name" class="form-control" name="email" required autofocus>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div class="input-box">
                <span class="details">Password</span>
                <input type="password" id="password" class="form-control" name="password" required>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="input-box">
                <label>
                    <a href="{{ route('forget.password.get') }}">Reset Password</a>
                </label>
            </div>
        </div>
        @if ($errors->has('email'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

        <button type="submit" class="user-details-login-button">
            Login
        </button>
    </form>
@endsection
