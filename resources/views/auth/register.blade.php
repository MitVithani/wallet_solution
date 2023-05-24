@extends('layout')

@section('nav_bar_content')
    <a class="nav-link d-inline float-right text-dark font-weight-bold" href="{{ route('login-user') }}">Login</a>
@endsection
@section('content')
    <form action="{{ route('register.post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="user-details">
            <div class="container">
                {{-- <h1>Profil Image Upload</h1> --}}
                <div class="avatar-upload">
                    <div class="avatar-preview">
                        <div id="imagePreview" style="background-image: url({{ url('public/img/logo4.jpg') }});">
                        </div>
                    </div>
                    <div class="avatar-edit">
                        {{-- <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" /> --}}
                        <input type="file" id="logo" class="auth-class-input" name="logo" accept="image/*" required>
                        <label for="logo">Change Profile Picture</label>
                    </div>
                </div>
            </div>

            <div class="input-box">
                <span class="details">Name</span>
                <input type="text" id="name" name="name" placeholder="Enter your name" value="{{ old('name') }}" required autofocus>
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>

            <div class="input-box">
                <span class="details">Shop Name</span>
                <input type="text" id="shop_name" name="shop_name" placeholder="Enter your shop name" value="{{ old('shop_name') }}" required>
                @if ($errors->has('shop_name'))
                    <span class="text-danger">{{ $errors->first('shop_name') }}</span>
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
                <span class="details">Company Name</span>
                <input type="text" id="company_name" placeholder="Enter your company name" name="company_name" value="{{ old('company_name') }}" required >
                @if ($errors->has('company_name'))
                    <span class="text-danger">{{ $errors->first('company_name') }}</span>
                @endif
            </div>

            <div class="input-box">
                <span class="details">Tax Number</span>
                <input type="text" id="tax_number" placeholder="Enter your Tax Number" name="tax_number" value="{{ old('tax_number') }}" required>
                @if ($errors->has('tax_number'))
                    <span class="text-danger">{{ $errors->first('tax_number') }}</span>
                @endif
            </div>

            <div class="input-box">
                <span class="details">Address</span>
                <input type="text" id="address" placeholder="Enter your address" name="address" value="{{ old('address') }}"  required>
                @if ($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                @endif
            </div>

            <div class="input-box">
                <span class="details">City Name</span>
                <input type="text" id="city_name" placeholder="Enter your city name" name="city_name" value="{{ old('city_name') }}" required>
                @if ($errors->has('city_name'))
                    <span class="text-danger">{{ $errors->first('city_name') }}</span>
                @endif
            </div>

            <div class="input-box">
                <span class="details">Bank IBAN</span>
                <input type="text" id="bank_iban" placeholder="Enter your bank iban" name="bank_iban" value="{{ old('bank_iban') }}"  required>
                @if ($errors->has('bank_iban'))
                    <span class="text-danger">{{ $errors->first('bank_iban') }}</span>
                @endif
            </div>


        </div>
        <button type="submit" class="button">
            Register
        </button>
    </form>
@endsection
@section('page_scripts')
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#logo").change(function() {
        readURL(this);
    });
</script>
@endsection
