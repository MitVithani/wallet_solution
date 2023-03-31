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
    <div class="content px-3">

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

            <div class="btn add-item-btn mt-5" onclick="checkoutnow()">
                Checkout Now
            </div>
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
                            <input type="text" name="fullName" id="fullName" class="form-control" placeholder="Full Name">
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
                        <button type="button" class="btn btn-primary userForm" data-dismiss="modal" >Submit</button>
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
            $(".discountForm").click(function(){
                var fullName = $('#fullName').val();
                var email = $('#email').val();
                var phone_number = $("#phone_number").val();
                if(fullName == ""){
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
                    url: "{{ url('change_discount') }}",
                    type: 'POST',
                    data: {_token:  $('meta[name="csrf-token"]').attr('content'), fullName: fullName, email: email, phone_number: phone_number},
                    dataType: 'JSON',
                    success: function (res) {

                    }
                });
            });
		});

        function checkoutnow()
        {
            var userData = localStorage.getItem('userData');
            if(userData){
                alert('hy');
            }else{
                $('#userForm').modal('show');
                // var userData = localStorage.setItem('userData', 'userData');
            }
        }

    </script>
@endsection

