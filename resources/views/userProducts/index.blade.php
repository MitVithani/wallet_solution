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
            <h4 class="d-inline">(2 items)</h4>
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

            <div class="btn add-item-btn mt-5" onclick="checkoutNow()">
                Checkout Now
            </div>
        </div>
    </div>


@endsection

@section('page_scripts')
    <script>
        function checkoutNow() {
            var userData = localStorage.getItem('userData');
            if(userData){
                alert('hy');
            }
        }
    </script>
@endsection

