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
    @if(isset($productDtl->productImage))
        @foreach($productDtl->productImage as $img)
            @php $rand = rand(111111111,999999999) @endphp
            {{-- {{dd($img)}} --}}
            <img class="{{ $rand }}" src="{{ asset($img->image ?? '') }}" height="80px" style="position: relative" alt="">
            <span class="{{ $rand }}" onclick="remove_img('{{ $rand }}','{{ $productDtl->id }}','{{ $img->id }}')" style="color: white;position: absolute;margin-left: -20px;margin-top: 0px;font-size: 24px;background: red;height: 32px">&times;</span>
        @endforeach
    @endif
<div class="form-outline mb-4">
    <label class="form-label" for="name">Name or pruduct or serivce</label>
    <input type="text" name="name" id="name" class="form-control" value="{{$productDtl->name ?? ''}}" required>

</div>
<div class="form-outline mb-4">
    <label class="form-label" for="price">Price</label>
    <input type="text" name="price" id="price" class="form-control" value="{{$productDtl->price ?? ''}}" required>

</div>
<div class="form-outline mb-4">
    <label class="form-label" for="additional_details">Additional Details     (Optional)</label>
    <input type="text" name="additional_details" id="additional_details" class="form-control" value="{{$productDtl->additional_details ?? ''}}">
</div>

<div class="form-outline mb-4">
    <label class="form-label" for="describe_item">Describe this item</label>
    <input type="text" name="describe_item" id="describe_item" class="form-control" value="{{$productDtl->describe_item ?? ''}}" required>
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

    <input type="text" name="quantity" id="quantity" class="form-control" value="{{$productDtl->quantity ?? ''}}">
    {{-- <span> You have an endless stock available.</span> --}}
</div>

<div class="form-check form-check-inline mt-4 col-12 row">
    <div class="col-9">
        <label for="is_delivery" class="form-check-label">Delivery</label>
        <br>
        {{-- <label class="toggle-second-line">Application for physical product</label> --}}
        <label class="blockquote-footer-label">Application for physical product</label>
        <label class="blockquote-footer-label-thrid">Delivery address and delivery opetions will be required for customers to complete purchase</label>

    </div>
    <div class="col-3 webkit-right">
        <input id="is_delivery" name="is_delivery" class="form-check-input" type="checkbox" data-toggle="toggle" data-style="ios" data-onstyle="success" data-offstyle="danger" {{!empty($productDtl->is_delivery) && $productDtl->is_delivery == "on" ? 'checked' : ''}}>
    </div>

    {{-- </div> --}}


    {{-- <label class="form-label">Delivery address and delivery opetions will be required for customers to complete purchase</label> --}}
</div>

<div class="form-check form-check-inline mt-4 col-12 row">
    <div class="col-9">
        <label class="form-check-label">Visible on my store</label>
        <label class="blockquote-footer-label">Show this items to anyone who visites</label>
    </div>
    <div class="col-3 webkit-right">
        <input name="is_visible" class="form-check-input" type="checkbox" data-toggle="toggle" data-style="ios" data-onstyle="success" data-offstyle="danger" {{!empty($productDtl->is_visible) && $productDtl->is_visible == "on" ? 'checked' : ''}} {{ $productDtl->is_visible ?? ''}}>
    </div>

</div>
<script>

function remove_img(rand,id,img) {
    var token="{{ csrf_token() }}";
    $.ajax({
        type: 'post',
        url: "{{url('remove_img')}}",
        data: {id:id,img:img,_token:token},
        success: function (action) {
            $("." + rand).remove();
        }
    });
}
</script>
