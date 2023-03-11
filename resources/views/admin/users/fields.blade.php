@csrf
<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
    <div class="col-md-6">
        <input type="text" id="name" class="form-control" name="name" required value="{{$user->name}}" value="{{$user->name}}">
        @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="shop_name" class="col-md-4 col-form-label text-md-right">Shop Name</label>
    <div class="col-md-6">
        <input type="text" id="shop_name" class="form-control" name="shop_name" required value="{{$user->shop_name}}" >
        @if ($errors->has('shop_name'))
            <span class="text-danger">{{ $errors->first('shop_name') }}</span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>
    <div class="col-md-6">
        <input type="text" id="phone_number" class="form-control" name="phone_number" required value="{{$user->phone_number}}" >
        @if ($errors->has('phone_number'))
            <span class="text-danger">{{ $errors->first('phone_number') }}</span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
    <div class="col-md-6">
        <input type="text" id="email_address" class="form-control" name="email" required value="{{$user->email}}">
        @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="logo" class="col-md-4 col-form-label text-md-right">Company Logo</label>
    <div class="col-md-6">
        <input type="file" id="logo" class="form-control" name="logo" accept="image/*" >
        @if ($errors->has('logo'))
            <span class="text-danger">{{ $errors->first('logo') }}</span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="company_name" class="col-md-4 col-form-label text-md-right">Company Name</label>
    <div class="col-md-6">
        <input type="text" id="company_name" class="form-control" name="company_name" required value="{{$user->company_name}}" >
        @if ($errors->has('company_name'))
            <span class="text-danger">{{ $errors->first('company_name') }}</span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="tax_number" class="col-md-4 col-form-label text-md-right">Tax Number</label>
    <div class="col-md-6">
        <input type="text" id="tax_number" class="form-control" name="tax_number" value="{{$user->tax_number}}">
        @if ($errors->has('tax_number'))
            <span class="text-danger">{{ $errors->first('tax_number') }}</span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="address" class="col-md-4 col-form-label text-md-right">Address</label>
    <div class="col-md-6">
        <input type="text" id="address" class="form-control" name="address" required value="{{$user->address}}" >
        @if ($errors->has('address'))
            <span class="text-danger">{{ $errors->first('address') }}</span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="city_name" class="col-md-4 col-form-label text-md-right">City Name</label>
    <div class="col-md-6">
        <input type="text" id="city_name" class="form-control" name="city_name" required value="{{$user->city_name}}" >
        @if ($errors->has('city_name'))
            <span class="text-danger">{{ $errors->first('city_name') }}</span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="bank_iban" class="col-md-4 col-form-label text-md-right">Bank IBAN</label>
    <div class="col-md-6">
        <input type="text" id="bank_iban" class="form-control" name="bank_iban" value="{{$user->bank_iban}}">
        @if ($errors->has('bank_iban'))
            <span class="text-danger">{{ $errors->first('bank_iban') }}</span>
        @endif
    </div>
</div>