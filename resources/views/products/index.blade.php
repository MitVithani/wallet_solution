@extends('layouts.app')

@section('page_css')
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="{{ asset('public/css/image-uploader.min.css') }}" rel="stylesheet">
    <style>
        /* body {
            overflow-y: hidden;
        } */
    </style>
@endsection
@section('navbar_header')
<div class="container">
    <span class="navbar-brand add-item-text">
        Client {{count($products)}} order
    </span>
</div>
@endsection

@section('content')

    <div class="content px-3 product-list">
        <span>
        Heater
        </span>
        <span class="float-right">
        <a class="btn btn-success" href="{{ route('products.create') }}" >+</a>
        </span>

        <table class="table product-table">
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>
                            <div class="">
                                <input name="product_ids" type="hidden" value="{{$product->id}}"/>
                                {{-- <img class="product-img" src="{{asset('public/img/empty_cart.png')}}" /> --}}
                                <img class="product-img" src="{{ !empty($product->productImage[0]->image) ? asset($product->productImage[0]->image) : ''}}" />

                            </div>
                        </td>
                        <td>
                            <div class="align-self-center text-center">
                                <span class="minus" onclick='ChangeQuantity("minus", {{$product->id}})'>-</span>
                                <input id="qun_{{$product->id}}" name="quantity" type="text" disabled value="{{$product->quantity}}"/>
                                <span class="plus" onclick='ChangeQuantity("plus", {{$product->id}})'>+</span>
                            </div>
                        </td>
                        <td>
                            <div class="align-self-center text-center">
                                <b>USD <span id="product_price_{{$product->id}}">{{$product->price}}</span></b>
                            </div>
                        </td>
                        <td>
                            <div class="align-self-center text-center">
                                <b>USD <span name="product_price_total" id="product_price_total_{{$product->id}}" >0</span></b>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        <hr>

    </div>
    <div class="card p0 m0 ">
        <div class="col-12 row pt-2">
            <div class="col-6">
                Cart Locked<br>
                Item quatity not editable by customer.
            </div>
            <div class="col-6 webkit-right">
                <input type="checkbox" />
            </div>
        </div>
        <div class="col-12 row pt-2">
            <div class="col-6">
                Subtotal
            </div>
            <div class="col-6 webkit-right">
                <b>USD <span id="subtotal">0</span></b>
            </div>
        </div>
        <div class="col-12 row pt-2">
            <div class="col-6">
                Send Order
            </div>
            <div class="col-6 webkit-right">
                <b>USD <span id="sendorder">0</span></b>
            </div>
        </div>
        <div class="share-icon-div">
            <table class="">
                <tr>
                    <td>
                        <a href="{{ url('usersProducts'). '/' . $user_id}}">
                            <img class="share-img" src="{{asset('public/img/whatsapp.png')}}">
                        </a>
                    </td>
                    <td>
                        <img class="share-img" src="{{asset('public/img/qr-code-scan.png')}}">
                    </td>
                    <td>
                        <img class="share-img" src="{{asset('public/img/link.png')}}">
                    </td>
                </tr>
                <tr>
                    <td>
                        WhatsApp
                    </td>
                    <td>
                        QR Code
                    </td>
                    <td>
                        Copy Link
                    </td>
                </tr>
            </table>
        </div>
    </div>


@endsection

@section('page_scripts')
    <script>
        $(document).ready(function() {
            var subtotal= 0;
            var sendorder= 0;
            $('input[name^="product_ids"]').each(function(){
                var product_id = $(this).val();
                var product_price = $('#product_price_' + product_id).text();
                var product_quantity = $('#qun_' + product_id).val();
                product_price_total_val = product_price * product_quantity;
                $('#product_price_total_' + product_id).text(product_price_total_val);
                sendorder += product_price_total_val;
                subtotal += product_price_total_val;
            });
            $('#subtotal').text(subtotal);
            $('#sendorder').text(sendorder);
		});
        function ChangeQuantity(p_type, product_id){
            var $input = $('#qun_' + product_id);
            if(p_type == "minus"){
                var count = parseInt($input.val()) - 1;
            }else if(p_type == "plus"){
                var count = parseInt($input.val()) + 1;
            }
            count = count < 0 ? 0 : count;
            $.ajax({
                url: "{{ url('change_quantity') }}",
                type: 'POST',
                data: {_token:  $('meta[name="csrf-token"]').attr('content'), count: count, product_id: product_id},
                dataType: 'JSON',
                success: function (res) {
                    $input.val(count);
                    $input.change();
                    var product_price = $('#product_price_' + product_id).text();
                    product_price_total_val = product_price * count;
                    product_price = $('#product_price_total_' + product_id).text(product_price_total_val);
                }
            });
        }
    </script>
@endsection

