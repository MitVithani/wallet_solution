@extends('mainlayout')

@section('content')
<style>
    .h_50{
        height: 170px;
    }
    .w_30{
        width: 130px;
    }
    .list-group-item{
        border: 3px solid #e8e9f0;
        border-radius: 0.8rem !important;
    }
    .img-fit{
        border-radius: 0.5rem !important;
    }
    .wallet_visit_seller{
    background-color:#454545;
    color: #ffffff;
    width: 100%;
    padding: 5px 0px;
    border-radius: 25px 25px;
}
.wallet_font{
    font-weight: 600;
}
#trashicon{
    background-color: #454545;
    color: #ffffff;
}
#product_amount{
    font-weight: 600;
    color:#454545;
    font-size: 18px;
}
#product_name{
    font-weight: 500;
    color:#454545;
    font-size: 18px;
}

</style>
<div class="container">
    {{-- @if ($carts && count($carts) > 0) --}}
        <div class="row">
            <div class="col-xl-7 mx-auto">
                <ul class="list-group">
                    @foreach ($carts as $key => $cartItem)
                    @php
                        $product = \App\Models\Product::find($cartItem['product_id']);
                        $product_id = $product->id;
                        $productdata=\App\Models\Product_Image::where('p_id',$product_id)->first();
                        $product_img=$productdata->image ?? '';
                    @endphp

                         <li class="list-group-item px-0 py-3 mb-3">
                            <div class="row">
                                <div class="col-md-12  d-flex">
                                    <span class="col-md-4 ml-0">
                                        <img
                                            src="{{ asset($product_img)}}"
                                            class="img-fit mx-auto h_50 w_30"
                                        >
                                    </span>
                                    <span style="margin-left: -80px;z-index:100;margin-top:-10px" >
                                        <a href="{{route('removeFromCart',['id'=>$product->id])}}"
                                            {{-- onclick="removeFromCartView(event, {{ $cartItem['id'] }})" --}}
                                            class="btn btn-icon btn-sm rounded-circle" id="trashicon">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </span>
                                    <span class="col-md-8"  style="display: block !important;" >
                                        <div class="col-md-12">
                                            <span class="tt-line-clamp tt-clamp-2" id="product_name">{{$product->name}}</span>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <span class="tt-line-clamp tt-clamp-2" id="product_amount">$&nbsp;{{$product->price}}</span>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                                <div class="text-center wallet_visit_seller" style="width:180px;">
                                                    <button class="increment-btn rounded-circle" onclick='ChangeQuantity("minus")'><i class="fa-solid fa-minus fa-sm"></i></button>
                                                    <span id="quantity" class="qty-input text-reset wallet_font" style="padding:0% 27%">{{$cartItem->qty}}</span>
                                                    <button class="decrement-btn rounded-circle" onclick='ChangeQuantity("plus")'><i class="fa-solid fa-plus fa-sm"></i></button>
                                                </div>

                                        </div>
                                    </span>
                                </div>

                            </div>
                         </li>
                    @endforeach
                </ul>
            </div>
            <div clas="col-xl-5 mx-auto">

            </div>
        </div>
    {{-- @endif --}}
</div>


<script type="text/javascript">
    $(document).ready(function() {

        // increment product quantity when + button is clicked
        $('.increment-btn').on('click', function(e) {
            e.preventDefault();

            let inc_value = $('.qty-input').val();
            let value = parseInt(inc_value, 10);
            value = isNaN(value) ? 0 : value;

            if(value < 100) {
                value++;
                $('.qty-input').val(value);
            }
        });

        // decrement product quantity when - button is clicked
        $('.decrement-btn').on('click', function(e) {
            e.preventDefault();

            let inc_value = $('.qty-input').val();
            let value = parseInt(inc_value, 10);

            value = isNaN(value) ? 0 : value;
            if(value > 1) {
                value--;
                $('.qty-input').val(value);
            }
        });
    });
</script>
@endsection
