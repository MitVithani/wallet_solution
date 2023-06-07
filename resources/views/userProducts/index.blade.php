@extends('layouts.app')

@section('page_css')
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="{{ asset('public/css/image-uploader.min.css') }}" rel="stylesheet">
    <style>
        /* body {
            overflow-y: hidden;
        } */
        .borderless td, .borderless tr {
            border-top: none
        }
        @media (min-width: 1200px){
            .container {
                max-width: 512px !important;
            }
        }
    </style>
@endsection
@section('navbar_header')
    <div class="d-block">
        <div class="float-left pt-3 pr-2">
            <img class="user-shop-img" src="{{ asset('public/logo') . '/' . $userDtl->logo }}"/>
        </div>
        <div class="float-right pt-4 shop-info">
            <b>{{$userDtl->name}}</b>
            <p class="">
                Secure Checkout
            </p>
        </div>
    </div>
@endsection

@section('content')
    <?php
        $subTotal = 0;
    ?>
    <div class="px-3">

        <div class="d-block add-item-text">
            <h2 class="d-inline">YOUR CART</h2>
            <h4 class="d-inline">({{count($productDtl)}} items)</h4>
        </div>
        <div class="table-responsive">
            <table class="table borderless user-product-table" cellspacing="0" cellpadding="0">
                <tbody>
                    @foreach ($productDtl as $product)
                        <tr style="border-top: 0.5px solid gray">
                            <td style="font-size: 15px">
                                <p class="mb-0">{{$product->name}}</p>
                                <p style="font-size: 12px" class="mb-0">Qty $ {{$product->quantity}}</p>
                                <p style="font-size: 12px" class="mb-0"> USD <span>{{$product->price}}</span></p>
                            </td>
                            <td>
                                {{-- <input id="qun_{{$product->id}}" type="hidden" value="{{$product->quantity}}"/> --}}
                                <div class="align-self-center text-center counter-number">
                                    @if($linkProductDtl->is_cart_lock != 1)
                                    <span class="minus" onclick='ChangeQuantity("minus", {{$product->id}} ,{{$product->share_url_product_id}})'>-</span>
                                    @endif

                                    <input id="qun_{{$product->id}}" name="quantity" type="text" disabled value="{{$product->quantity}}" style="width: 100px; text-align: center;"/>

                                    @if($linkProductDtl->is_cart_lock != 1)
                                    <span class="plus" onclick='ChangeQuantity("plus", {{$product->id}}, {{$product->share_url_product_id}})'>+</span>
                                    @endif
                                </div>
                                <span class="d-none" id="product_price_{{$product->id}}">{{$product->price}}</span>

                                <input name="user_product_ids" type="hidden" value="{{$product->id}}"/>
                                <input id="discount_type_{{$product->id}}" name="discount_type" type="hidden" value="{{$product->discount_type}}"/>
                                <input id="discount_{{$product->id}}" name="discount" type="hidden" value="{{$product->discount}}"/>
                                <input id="discount_price_{{$product->id}}" name="discount_price" type="hidden" value="{{$product->discount_price}}"/>
                            </td>
                            <td>
                                <img class="user-product-img float-right" data-toggle="modal" data-target="#product_img_{{$product->id}}" src="{{ !empty($product->productImage[0]->image) ? asset($product->productImage[0]->image) : ''}}" />
                            </td>

                        </tr>
                        {{-- <tr>
                            <td class="pb-0 user-product-quantity">
                                <p class="mb-0">Qty $ {{$product->quantity}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="pt-0 user-product-price">
                                <p class="mb-0"> USD <span>{{$product->price}}</span></p>
                            </td>

                        </tr> --}}
                        <?php
                            $subTotal += $product->price * $product->quantity;
                        ?>

                        <div class="modal fade" id="product_img_{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="product_img_Label" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Product Detils</h4>
                                        {{-- <a href="{{ url('edit') . '/' . $product->id }}" class="close add-item-text">Edit</a> --}}
                                        {{-- <a href="{{ url('delete') . '/' . $product->id }}" class="close add-item-text">Delete</a> --}}
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card p-3">
                                            <div class="container-fliud">
                                                <div class="wrapper row">
                                                    <div class="preview col-md-6">
                                                        <div class="preview-pic tab-content">
                                                            <div class="tab-pane active">
                                                                <img id="main_product_image{{$product->id}}" src="{{ !empty($product->productImage[0]->image) ? asset($product->productImage[0]->image) : ''}}" />
                                                            </div>
                                                        </div>
                                                        <ul class="preview-thumbnail nav nav-tabs">
                                                            @if(!empty($product->productImage))
                                                            @foreach ($product->productImage as $productImage)
                                                                <li><img onclick="changeImage(this, '{{$product->id}}')" src="../{{$productImage->image}}" /></li>
                                                            @endforeach
                                                            @endif
                                                        </ul>
                                                    </div>
                                                    <div class="details col-md-6">
                                                        <h3 class="product-title">{{$product->name}}</h3>
                                                        <p class="product-description">{{$product->additional_details}}</p>
                                                        <p>Describe Item:
                                                            <span class="product-description">{{$product->describe_item}}</span>
                                                        </p>
                                                        <h5 class="quantity">quantity: <span>${{$product->quantity}}</span></h5>
                                                        <h5 class="">Current Price: <span>${{$product->price}}</span></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    <div style="border-top: 0.5px solid gray" class="">
        <div class="col-12 row pt-2 pr-0">
            <div class="col-8">
                Subtotal ({{ count($productDtl) }} items)
            </div>
            <div class="col-4 webkit-right user-product-total pr-0">
                <b>USD <span id="subtotal">{{$subTotal}}</span></b>
            </div>
        </div>
        <div class="col-12 row pt-2 pr-0">
            <div class="col-8">
                Discount Total
            </div>
            <div class="col-4 webkit-right pr-0">
                <b>USD <span id="discountTotal">0</span></b>
            </div>
        </div>
        <div class="col-12 row pt-2 pr-0">
            <div class="col-8">
                Delivary Charge
            </div>
            <div class="col-4 webkit-right pr-0">
                <b>USD <span id="delivary_charge">{{$linkProductDtl->delivary_charge ?? '0'}}</span></b>
            </div>
        </div>
        <div class="col-12 row pt-2 pr-0">
            <div class="col-8">
                Total <span>(inclusive of VAT)</span>
            </div>
            <div class="col-4 webkit-right user-product-total pr-0">
                <b>USD <span id="sendorder">0</span></b>
            </div>
        </div>
        <div class="col-12 row pt-2 d-flex justify-content-center">
            {{-- <a href="{{ url('usersProducts/check_out'). '/' . $userDtl->id}}" class="btn add-item-btn mt-5">
                Checkout Now
            </a> --}}
            <form action="{{ url('send_payment') }}" method="POST">
                @csrf
                <input type="hidden" id="amount" name="amount" value="0"/>
                <input type="hidden" name="user_id" value="{{$userDtl->id}}"/>
                <input type="hidden" name="link_product_dtl" value="{{$linkProductDtl->id}}"/>
                <input type="hidden" class="cust_id" name="cust_id" value=""/>
                <button type="button" class="btn add-item-btn mt-5" id="checkoutbtn" onclick="checkoutnow()">
                    Checkout Now
                </button>
            </form>
        </div>
    </div>

    <div class="modal fade" id="userForm">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Information</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="card-body mb-12">
                        <div class="form-outline mb-4">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Full Name">
                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" name="address" id="address" class="form-control" placeholder="Address">
                        </div>
                        {{-- <div class="form-outline">
                            <input type="text" name="discountAmt" id="discountAmt" class="form-control" placeholder="">
                        </div> --}}
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <div class="footer">
                        {{-- {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!} --}}
                        <button type="button" class="btn btn-primary saveCustomerData theamBtnColor" data-dismiss="modal" >Submit</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="paymentModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Payment Details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="card mx-auto">
                        <form class="card-details ">
                            <div class="form-group mb-0">
                                    <p class="text-warning mb-0">Card Number</p>
                                        <input type="text" name="card-num" placeholder="1234 5678 9012 3457" size="17" id="cno" minlength="19" maxlength="19">
                                    <img src="https://img.icons8.com/color/48/000000/visa.png" width="64px" height="60px" />
                            </div>

                            <div class="form-group">
                                <p class="text-warning mb-0">Cardholder's Name</p> <input type="text" name="card_holder_name" placeholder="Name" size="17">
                            </div>
                            <div class="form-group pt-2">
                                <div class="row d-flex">
                                    <div class="col-sm-4">
                                        <p class="text-warning mb-0">Expiration</p>
                                        <input type="text" name="exp" placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7">
                                    </div>
                                    <div class="col-sm-3">
                                        <p class="text-warning mb-0">CVV</p>
                                        <input type="password" name="cvv" placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3">
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <div class="footer">
                        {{-- {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!} --}}
                        <button type="button" class="btn btn-primary sendPayment" data-dismiss="modal" >Submit</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection

@section('page_scripts')
    <script>
        $(document).ready(function() {
            $(".navbar-nav").hide();
            var userData = localStorage.getItem('userData');
            if(userData){
                // console.log(userData);
                $('.cust_id').val(jQuery.parseJSON(userData).cust_id);
                $('#checkoutbtn').removeAttr("type").attr("type", "submit");
            }
            $(".saveCustomerData").click(function(){
                var name = $('#name').val();
                var email = $('#email').val();
                var phone_number = $("#phone_number").val();
                var address = $("#address").val();
                if(name == ""){
                    alert("Please enter full name");
                    return false;
                }else if(email == ""){
                    alert("Please enter email");
                    return false;
                }else if(phone_number == ""){
                    alert("Please enter phone number");
                    return false;
                }else if(address == ""){
                    alert("Please enter address");
                    return false;
                }
                $.ajax({
                    url: "{{ url('save_customer') }}",
                    type: 'POST',
                    data: {_token:  $('meta[name="csrf-token"]').attr('content'), name: name, email: email, phone_number: phone_number, address: address},
                    dataType: 'JSON',
                    success: function (res) {
                        $('.cust_id').val(res.request.cust_id);
                        if(res.status == 1){ // new customer
                            localStorage.setItem('userData', JSON.stringify(res.request));
                        }else if(res.status == 2){ // old customer
                            localStorage.setItem('userData', JSON.stringify(res.request));
                        }
                        alert('Registration Successfully');
                        checkoutnow();
                    }
                });
            });

            $(".sendPayment").click(function(){
                var card_num = $('#card-num').val();
                var card_holder_name = $('#card_holder_name').val();
                var exp = $("#exp").val();
                var cvv = $("#cvv").val();
                if(card_num == ""){
                    alert("Please enter Card Number");
                    return false;
                }else if(card_holder_name == ""){
                    alert("Please enter Card Holder Name");
                    return false;
                }else if(cvv == ""){
                    alert("Please enter Expiration");
                    return false;
                }else if(cvv == ""){
                    alert("Please enter CVV");
                    return false;
                }
                $.ajax({
                    url: "{{ url('send_payment') }}",
                    type: 'POST',
                    data: {_token:  $('meta[name="csrf-token"]').attr('content'), card_num: card_num, card_holder_name: card_holder_name, exp: exp, cvv: cvv},
                    dataType: 'JSON',
                    success: function (res) {
                        console.log(res);
                        if(res.status == 1){ // new customer
                            localStorage.setItem('userData', JSON.stringify(res.request));
                        }else if(res.status == 2){ // old customer
                            localStorage.setItem('userData', JSON.stringify(res.request));
                        }
                    }
                });
            });
            priceCount();
		});
        function priceCount(){
            var subtotal= 0;
            var sendorder= 0;
            var discountTotal= 0;
            $('input[name^="user_product_ids"]').each(function(){
                var product_id = $(this).val();
                if(parseInt(product_id) != 0){
                    var product_price = $('#product_price_' + product_id).text();
                    var product_quantity = $('#qun_' + product_id).val();
                    var discount_type = $('#discount_type_' + product_id).val();
                    var discount = $('#discount_' + product_id).val();
                    var discount_price = $('#discount_price_' + product_id).val();
                    // console.log(discount_type + ' - ' + discount + ' - ' + discount_price);
                    if(product_quantity == 0){
                        $('#product_tr_' + product_id).addClass('emptyQtyTableTab');
                    }else{
                        $('#product_tr_' + product_id).removeClass('emptyQtyTableTab');
                        product_price_total_val = product_price * product_quantity;
                        $('#product_price_total_' + product_id).text(product_price_total_val);
                        sendorder += product_price_total_val;
                        if(discount_type == 'flat' && discount != ''){
                            discountTotal +=  product_price - discount_price;
                        }else if(discount_type == 'percentage' && discount != ''){
                            discountTotal +=  discount_price * product_quantity;
                        }

                        subtotal += product_price_total_val;
                    }
                }
            });
            console.log(subtotal);
            $('#subtotal').text(subtotal);
            $('#discountTotal').text((Math.round(discountTotal * 100) / 100).toFixed(2));
            $('#sendorder').text(sendorder - (Math.round(discountTotal * 100) / 100).toFixed(2) + parseInt($('#delivary_charge').text()));
            // console.log(parseInt($('#delivary_charge').text()));
            $('#amount').val(sendorder - ((Math.round(discountTotal * 100) / 100).toFixed(2)) + parseInt($('#delivary_charge').text()));
        }
        function changeImage(element, product_id) {
            var main_prodcut_image = document.getElementById('main_product_image' + product_id);
            main_prodcut_image.src = element.src;
        }

        function ChangeQuantity(p_type, product_id, share_url_product_id){
            var $input = $('#qun_' + product_id);
            if(p_type == "minus"){
                var count = parseInt($input.val()) - 1;
            }else if(p_type == "plus"){
                var count = parseInt($input.val()) + 1;
            }
            count = count < 0 ? 0 : count;
            $.ajax({
                url: "{{ url('user_change_quantity') }}",
                type: 'POST',
                data: {_token:  $('meta[name="csrf-token"]').attr('content'), count: count, id: share_url_product_id},
                dataType: 'JSON',
                success: function (res) {
                    $input.val(count);
                    $input.change();
                    var product_price = $('#product_price_' + product_id).text();
                    product_price_total_val = product_price * count;
                    $('#product_price_total_' + product_id).text(product_price_total_val);
                    priceCount();
                }
            });
        }

        // function saveCustomerData() {

        //     $.ajax({
        //             url: "{{ url('save_customer') }}",
        //             type: 'POST',
        //             data: {_token:  $('meta[name="csrf-token"]').attr('content'), name: name, email: email, phone_number: phone_number},
        //             dataType: 'JSON',
        //             success: function (res) {

        //             }
        //         });
        // }

        function checkoutnow()
        {
            var userData = localStorage.getItem('userData');
            if(userData){
                // $('#paymentModal').modal('show');
                // console.log(userData);
                $('.cust_id').val();
                $('#checkoutbtn').removeAttr("type").attr("type", "submit");
            }else{
                $('#userForm').modal('show');
                // var userData = localStorage.setItem('userData', 'userData');
            }
        }

    </script>
@endsection

