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

        <div class="d-block">
            <h2 class="d-inline">YOUR CART</h2>
            <h4 class="d-inline">({{count($productDtl)}} items)</h4>
        </div>
        <div class="table-responsive">
            <table class="table borderless user-product-table" cellspacing="0" cellpadding="0">
                <tbody>
                    @foreach ($productDtl as $product)
                        <tr>
                            <td>
                                <p>{{$product->name}}</p>
                            </td>
                            <td rowspan="3">
                                <img class="user-product-img float-right" src="{{ !empty($product->productImage[0]->image) ? asset($product->productImage[0]->image) : ''}}" />

                                {{-- <img class="product-img " style="width: 100px; height: 100px;" src="{{asset('public/img/empty_cart.png')}}" /> --}}
                            </td>

                        </tr>
                        <tr>
                            <td class="pb-0 user-product-quantity">
                                <p class="mb-0">Qty {{$product->quantity}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="pt-0 user-product-price">
                                <p class="mb-0"> USD <span>{{$product->price}}</span></p>
                            </td>

                        </tr>
                        <?php
                            $subTotal += $product->price * $product->quantity;
                        ?>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    <div class="">
        <div class="col-12 row pt-2">
            <div class="col-8">
                Subtotal ({{ count($productDtl) }} items)
            </div>
            <div class="col-4 webkit-right user-product-total">
                <b>USD <span id="subtotal">{{$subTotal}}</span></b>
            </div>
        </div>
        <div class="col-12 row pt-2">
            <div class="col-8">
                Total <span>(inclusive of VAT)</span>
            </div>
            <div class="col-4 webkit-right user-product-total">
                <b>USD <span id="sendorder">{{$subTotal}}</span></b>
            </div>
        </div>
        <div class="col-12 row pt-2 d-flex justify-content-center">
            {{-- <a href="{{ url('usersProducts/check_out'). '/' . $userDtl->id}}" class="btn add-item-btn mt-5">
                Checkout Now
            </a> --}}
            <form action="{{ url('send_payment') }}" method="POST">
                @csrf
                <input type="hidden" name="amount" value="{{$subTotal}}"/>
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
                if(name == ""){
                    alert("Please enter full name");
                    return false;
                }else if(email == ""){
                    alert("Please enter email");
                    return false;
                }else if(phone_number == ""){
                    alert("Please enter phone number");
                    return false;
                }
                $.ajax({
                    url: "{{ url('save_customer') }}",
                    type: 'POST',
                    data: {_token:  $('meta[name="csrf-token"]').attr('content'), name: name, email: email, phone_number: phone_number},
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
		});

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
                console.log(userData);
                $('.cust_id').val();
                $('#checkoutbtn').removeAttr("type").attr("type", "submit");


            }else{
                $('#userForm').modal('show');
                // var userData = localStorage.setItem('userData', 'userData');
            }
        }

    </script>
@endsection

