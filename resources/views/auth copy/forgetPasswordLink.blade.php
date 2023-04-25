@extends('layout')

@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Reset Password</div>
                    <div class="card-body">
                        <form class="otp-form">
                            @csrf

                            <div class="form-group row">
                                <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                                {{-- <div class="col-md-1">
                                    <input id="country_code" type="text" class="form-control numberonly" name="country_code" value="+" required autocomplete="country_code">
                                </div> --}}
                                <div class="col-md-5">
                                    <input id="phone_number" type="text" class="form-control phone-field phone_number numberonly @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number">
                                </div>
                            </div>
                            <div class="send-otp-class" style="display: none">
                                <div class="form-group row ">
                                    <label for="otp" class="col-md-4 col-form-label text-md-right">{{ __('OTP') }}</label>

                                    <div class="col-md-6">
                                        <input id="otp" type="text" class="form-control numberonly" name="otp" value="{{ old('otp') }}" required autocomplete="otp">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="button" class="btn btn-primary btn-send-otp" onclick="SendOtp()">
                                        {{ __('Send OTP Code') }}
                                    </button>
                                    <button type="button" class="btn btn-primary send-otp-class" style="display: none" onclick="VerifyOtp()">
                                        {{ __('Verify OTP') }}
                                    </button>
                                </div>
                            </div>

                        </form>
                        <form class="pas-form" style="display: none">
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="button" class="btn btn-primary" onclick="ChangeOtp()">
                                        {{ __('Reset Password') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('page_scripts')
    {{-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
            crossorigin="anonymous">
    </script> --}}
    <script src="{{ asset('public/county_code/js/jquery.ccpicker.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('public/county_code/css/jquery.ccpicker.css') }}">
    <script>
        $(document).ready(function() {
            $("#phone_number").CcPicker();

            $('.numberonly').keypress(function (e) {

                var charCode = (e.which) ? e.which : event.keyCode

                if (String.fromCharCode(charCode).match(/[^0-9]/g))

                    return false;

            });
		});
        function SendOtp(){
            var phone = $('#phone_number').val();
            var phoneCode = $('#phone_number_phoneCode').val();
            var filter_phone = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/;
            if (!filter_phone.test(phone)) {
                alert('Please Enter valid phone number');
                return false;
            }
            $.ajax({
                url: "{{ url('send_otp') }}",
                type: 'POST',
                data: {_token:  $('meta[name="csrf-token"]').attr('content'), phone: phone, phoneCode: phoneCode},
                dataType: 'JSON',
                success: function (res) {
                    if(res == 1){
                        $('#phone_number').attr('disabled', 'disabled');
                        $('.btn-send-otp').css('display', 'none');;
                        $('.send-otp-class').css('display', 'block');
                    }if(res == 2){
                        alert('This number is not register with us');

                    }else{
                        alert('Something went wrong try again later');
                    }
                }
            });
        }
        function VerifyOtp(){
            var phone = $('#phone_number').val();
            var otp = $('#otp').val();
            $.ajax({
                url: "{{ url('verify_otp') }}",
                type: 'POST',
                data: {_token:  $('meta[name="csrf-token"]').attr('content'), phone: phone, otp: otp},
                dataType: 'JSON',
                success: function (res) {
                    if(res == 1){
                        $('.otp-form').css('display', 'none');
                        $('.change-pass-form').css('display', 'none');
                        $('.pas-form').css('display', 'block');
                    }else{
                        alert("Wrong OTP");
                    }
                }
            });
        }
        function ChangeOtp(){
            var phone = $('#phone_number').val();
            var password = $('#password').val();
            var password_confirm = $('#password-confirm').val();
            if(password != password_confirm){
                alert('Password and confirmation password do not match');
            }
            $.ajax({
                url: "{{ url('change_password') }}",
                type: 'POST',
                data: {_token:  $('meta[name="csrf-token"]').attr('content'), password: password, password_confirm: password_confirm, phone: phone},
                dataType: 'JSON',
                success: function (res) {
                    if(res == 1){
                        alert("Password change successfully");
                        var route = "{{ url('login') }}";
                        location.href = route;
                    }else{
                        alert("Something went wrong");
                    }
                }
            });
        }
    </script>
@endsection
