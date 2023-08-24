@extends('mainlayout')
@section('content')
<style>
    .card{
    box-shadow: 0px 0px 10px 5px rgb(207, 206, 206);
}
</style>

<div class="container">

    <div class="row my-2 ">
        <div class="col-md-6 mx-auto">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            <form action="{{route('user_profile_update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Basic Info-->
                <div class="card  border-0">
                    <div class="card-body">
                        <div class="col-md-12 text-center px-3 pb-3">
                            <div class="fs-19 fw-600" style="color: #546A86;">{{ ('Update profile')}}</div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-12 col-form-label"><span class="fw-500">{{ ('Your Name') }}</span></label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="{{ ('Your Name') }}" name="name" value="{{ auth()->user()->name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-12 col-form-label"><span class="fw-500">{{ ('Your Phone') }}</span></label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="{{ ('Your Phone')}}" name="phone" value="{{ auth()->user()->phone_number }} ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-12 col-form-label"><span class="fw-500">{{ ('Your E-mail') }}</span></label>
                            <div class="col-md-12">
                                <input type="email" class="form-control" placeholder="{{ ('New E-mail') }}" name="new_email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-12 col-form-label"><span class="fw-500">{{ ('Your Password') }}</span></label>
                            <div class="col-md-12">
                                <input type="password" class="form-control" placeholder="{{ ('New Password') }}" name="new_password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-12 col-form-label"><span class="fw-500">{{ ('Confirm Password') }}</span></label>
                            <div class="col-md-12">
                                <input type="password" class="form-control" placeholder="{{ ('Confirm Password') }}" name="confirm_password">
                            </div>
                        </div>

                        <div class="form-group my-2 text-right">
                            <button type="submit" class="btn paybtn" >{{('Update Profile')}}</button>
                        </div>
                    </div>
                </div>


            </form>
        </div>
    </div>
</div>



@endsection
