@extends('layout')

@section('nav_bar_content')
    <a class="nav-link d-inline float-right text-dark font-weight-bold side-text" href="{{ route('user_login') }}">Login</a>
@endsection
@section('content')
    <form action="{{ route('post_user_registration') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="user-details user-details-login">
            <div class="container">
                {{-- <h1>Profil Image Upload</h1> --}}

            </div>

            <div class="input-box">
                <span class="details">Name</span>
                <input type="text" id="name" name="name" placeholder="Enter your name" value="{{ old('name') }}" required autofocus>
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>

            <div class="input-box">
                <span class="details">Phone Number</span>
                <input type="text" id="phone_number" name="phone_number" placeholder="Enter your number" {{ old('phone_number') }} required >
                @if ($errors->has('phone_number'))
                    <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                @endif
            </div>


            <div class="input-box">
                <span class="details">E-Mail Address</span>
                <input type="text" id="email_address" name="email" placeholder="Enter your email" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div class="input-box">
                <span class="details">Password</span>
                <input type="password" id="password" placeholder="Enter your password" name="password" value="{{ old('password') }}" required>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="input-box">
                <span class="details">Confirm Password</span>
                <input type="password" id="password_confirmation" placeholder="Enter Confirm password" name="password_confirmation" value="" required>
                @if ($errors->has('confirm_password'))
                    <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                @endif
            </div>

        </div>
        <button type="submit" class="user-details-login-button">
            Register
        </button>
    </form>
@endsection
