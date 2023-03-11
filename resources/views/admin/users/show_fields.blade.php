<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- Shop Name Field -->
<div class="col-sm-12">
    {!! Form::label('shop_name', 'Shop Name:') !!}
    <p>{{ $user->shop_name }}</p>
</div>

<!-- Phone Number Field -->
<div class="col-sm-12">
    {!! Form::label('phone_number', 'Phone Number:') !!}
    <p>{{ $user->phone_number }}</p>
</div>

<!-- Admin email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- logo Field -->
<div class="col-sm-12">
    {!! Form::label('logo', 'Logo:') !!}
    <p><img src="{{ asset('public/logo') .'/'. $user->logo}}"width="100" height="100"></p>
</div>

<div class="col-sm-12">
    {!! Form::label('company_name', 'Company Name:') !!}
    <p>{{ $user->company_name }}</p>
</div>

<div class="col-sm-12">
    {!! Form::label('tax_number', 'Tax Number:') !!}
    <p>{{ $user->tax_number }}</p>
</div>

<div class="col-sm-12">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $user->address }}</p>
</div>

<div class="col-sm-12">
    {!! Form::label('city_name', 'City Name:') !!}
    <p>{{ $user->city_name }}</p>
</div>

<div class="col-sm-12">
    {!! Form::label('bank_iban', 'Bank IBAN:') !!}
    <p>{{ $user->bank_iban }}</p>
</div>

