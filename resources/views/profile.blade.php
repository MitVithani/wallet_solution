@extends('mainlayout')
@section('content')
<style>
    .card{
    box-shadow: 0px 0px 10px 5px rgb(207, 206, 206);
}
</style>

<div class="container">
    <div class="row my-2    ">
        <div class="col-md-10 mx-auto">
            <form action="{{route('user_profile_update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Basic Info-->
                <div class="card  border-0">
                    <div class="card-body">
                        <div class="row px-3 pb-3">
                            <div class="fs-19s fw-600">{{ ('Update profile')}}</div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">{{ ('Your Name') }}</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" placeholder="{{ ('Your Name') }}" name="name" value="{{ auth()->user()->name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">{{ ('Your Phone') }}</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" placeholder="{{ ('Your Phone')}}" name="phone" value="{{ auth()->user()->phone_number }} ">
                            </div>
                        </div>
                        {{-- <div class="form-group row">
                            <label class="col-md-2 col-form-label">{{ ('Photo') }}</label>
                            <div class="col-md-10">
                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-soft-secondary font-weight-medium">{{ ('Browse')}}</div>
                                    </div>
                                    <div class="form-control file-amount">{{ ('Choose File') }}</div>
                                    <input type="hidden" name="photo" value="{{ Auth::user()->avatar_original }}" class="selected-files">
                                </div>
                                <div class="file-preview box sm">
                                </div>
                            </div>
                        </div> --}}
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">{{ ('Your E-mail') }}</label>
                            <div class="col-md-10">
                                <input type="email" class="form-control" placeholder="{{ ('New E-mail') }}" name="new_email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">{{ ('Your Password') }}</label>
                            <div class="col-md-10">
                                <input type="password" class="form-control" placeholder="{{ ('New Password') }}" name="new_password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">{{ ('Confirm Password') }}</label>
                            <div class="col-md-10">
                                <input type="password" class="form-control" placeholder="{{ ('Confirm Password') }}" name="confirm_password">
                            </div>
                        </div>

                        <div class="form-group my-2 text-right">
                            <button type="submit" class="btn wallet_button" >{{('Update Profile')}}</button>
                        </div>
                    </div>
                </div>


            </form>
        </div>
    </div>
</div>



@endsection
