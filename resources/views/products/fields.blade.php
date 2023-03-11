@csrf
{{-- <div class="form-outline mb-4 row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
    <div class="col-md-6">
        <input type="text" id="name" class="form-control" name="name" required>
        @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
    </div>
</div> --}}

<div class="form-outline mb-4">
    <div class="input-field">
        <label class="active">Add Photos(Optional)</label>
        <div class="product_img" style="padding-top: .5rem;"></div>
    </div>
</div>
<div class="form-outline mb-4">
    <label class="form-label" for="name">Name or pruduct or serivce</label>
    <input type="text" name="name" id="name" class="form-control" required>

</div>
<div class="form-outline mb-4">
    <label class="form-label" for="price">Price</label>
    <input type="text" name="price" id="price" class="form-control" required>

</div>
<div class="form-outline mb-4">
    <label class="form-label" for="additional_details">Additional Details     (Optional)</label>
    <input type="text" name="additional_details" id="additional_details" class="form-control">
</div>

<div class="form-outline mb-4">
    <label class="form-label" for="describe_item">Describe this item</label>
    <input type="text" name="describe_item" id="describe_item" class="form-control" required>
</div>

<div class="form-outline">
    <label class="form-label">Quantity</label>
    {{-- <br>
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-secondary active">
            <input type="radio" name="quantity" id="unlimited" value="1" checked> Unlimited
        </label>
        <label class="btn btn-secondary">
            <input type="radio" name="quantity" id="limited" value="0"> Limited
        </label>
    </div> --}}

    <input type="text" name="quantity" id="quantity" class="form-control">
    {{-- <span> You have an endless stock available.</span> --}}
</div>

<div class="form-check form-check-inline mt-4 col-md-12 row">
    <div class="col-md-6">
        <label for="is_delivery" class="form-check-label">Delivery</label>
        <br>
        {{-- <label class="toggle-second-line">Application for physical product</label> --}}
        <label class="blockquote-footer-label">Application for physical product</label>
        <label class="blockquote-footer-label-thrid">Delivery address and delivery opetions will be required for customers to complete purchase</label>

    </div>
    <div class="col-md-6 webkit-right">
        <input id="is_delivery" name="is_delivery" class="form-check-input" type="checkbox" data-toggle="toggle" data-style="ios" data-onstyle="success" data-offstyle="danger">
    </div>

    {{-- </div> --}}


    {{-- <label class="form-label">Delivery address and delivery opetions will be required for customers to complete purchase</label> --}}
</div>

<div class="form-check form-check-inline mt-4 col-md-12 row">
    <div class="col-md-6">
        <label class="form-check-label">Visible on my store</label>
        <label class="blockquote-footer-label">Show this items to anyone who visites</label>
    </div>
    <div class="col-md-6 webkit-right">
        <input name="is_visible" class="form-check-input" type="checkbox" data-toggle="toggle" data-style="ios" data-onstyle="success" data-offstyle="danger">
    </div>

</div>
