@extends('layouts.app')

@section('page_css')
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="{{ asset('public/css/image-uploader.min.css') }}" rel="stylesheet">
    <style>
        body {
            overflow-y: hidden;
        }
        .borderless td, .borderless tr {
            border-top: none
        }
    </style>
@endsection
@section('navbar_header')
    <div class="d-block">
        <div class="float-left">
            <img style="width: 100px; height: 100px;" src="{{ asset('public/logo') . '/' . $userDtl->logo }}"/>
        </div>
        <div class="float-right pt-4">
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
            <h3 class="d-inline">(2 items)</h3>
        </div>
        <div class="table-responsive">
            <table class="table borderless" cellspacing="0" cellpadding="0">
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
                            <td>
                                <p>Qty {{$product->quantity}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                USD <span>{{$product->price}}</span>
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
    <div class="card p0 m0">
        <div class="col-12 row pt-2">
            <div class="col-6">
                Subtotal ({{ count($productDtl) }} items)
            </div>
            <div class="col-6 webkit-right">
                <b>USD <span id="subtotal">{{$subTotal}}</span></b>
            </div>
        </div>
        <div class="col-12 row pt-2">
            <div class="col-6">
                Total <span>(inclusive of VAT)</span>
            </div>
            <div class="col-6 webkit-right">
                <b>USD <span id="sendorder">{{$subTotal}}</span></b>
            </div>
        </div>
        <div class="col-12 row pt-2 d-flex justify-content-center">
            <a href="{{ url('usersProducts/check_out'). '/' . $userDtl->id}}" class="btn add-item-btn mt-5">
                Checkout Now
            </a>
        </div>
    </div>


@endsection

@section('page_scripts')
    <script>

    </script>
@endsection

