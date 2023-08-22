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
                                        <div class="col-md-8">
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
        </div>

        <!-- Button trigger modal -->
        <div class="row">
            <div class="col-md-12 text-center my-3">
                <button type="button" id="btn" class="btn wallet_button">{{('Pay Now')}}
                </button>
            </div>
        </div>

    {{-- @endif --}}
</div>

      <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="examplemodal"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add Address</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <div class="modal-body pb-0">
                        <form class="form-default" role="form" action="{{route('store_address')}}" method="POST">
                            @csrf
                            @php
                                $address = \App\Models\Address::where('user_id',auth()->user()->id)->first();
                            @endphp

                                <div class="p-3">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class="fs-16 fw-600">{{ ('First Name')}}</label>
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control mb-3" placeholder="{{ ('First Name')}}" value="{{$address->firstname ?? ''}}" name="firstname" required>
                                        </div>

                                        <div class="col-md-2">
                                            <label class="fs-16 fw-600">{{ ('Last Name')}}</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control mb-3" placeholder="{{ ('Last Name')}}" value="{{$address->lastname ?? ''}}" name="lastname" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class="fs-16 fw-600">{{ ('Country')}}</label>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <select class="form-control aiz-selectpicker"  data-placeholder="{{ ('Select your country') }}" name="country" required>
                                                    <option value="">{{ ('Select your country') }}</option>
                                                        @foreach (\App\Models\Country::get() as $key => $country)
                                                            <option value="{{ $country->name }}"  @isset($address) @if($address->country ==  $country->name) selected @endif @endif>{{ $country->name }}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <label class="fs-16 fw-600">{{ ('State')}}</label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-control mb-3 aiz-selectpicker"  data-placeholder="{{ ('Select State') }}" name="state" required>
                                                <option value="">{{ ('Select State') }}</option>
                                                    @foreach (\App\Models\State::get() as $key => $state)
                                                    <option value="{{ $state->name }}" @isset($address) @if($address->state ==  $state->name) selected @endif @endif>{{ $state->name }}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class="fs-16 fw-600">{{ ('City')}}</label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-control mb-3 aiz-selectpicker"  data-placeholder="{{ ('Select City') }}" name="city" required>
                                                <option value="">{{ ('Select City') }}</option>
                                                    @foreach (\App\Models\City::get() as $key => $city)
                                                            <option value="{{ $city->name }}" @isset($address) @if($address->city ==  $city->name) selected @endif @endif>{{ $city->name }}</option>
                                                    @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-2">
                                            <label class="fs-16 fw-600">{{ ('Postal code')}}</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control mb-3" placeholder="{{ ('Enter Your Postal Code')}}" name="postal_code" value="{{$address->postal_code ?? ''}}" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class="fs-16 fw-600">{{ ('Phone')}}</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control mb-3" placeholder="{{ ('+880')}}" name="phone" value="{{$address->phone ?? ''}}" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class="fs-16 fw-600">{{ ('Address')}}</label>
                                        </div>
                                        <div class="col-md-10">
                                            @isset($address)
                                                <textarea class="form-control mb-3" placeholder="{{ ('Enter Your Address')}}" rows="2" name="address" required>{{$address->address}}</textarea>
                                            @else
                                                <textarea class="form-control mb-3" placeholder="{{ ('Enter Your Address')}}" rows="2" name="address" required></textarea>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn wallet_button col-4">{{('Pay Now')}}</button>
                                    </div>
                                </div>

                        </form>
                    </div>
                {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">save</button>
                </div> --}}
            </div>
        </div>
      </div>



<script type="text/javascript">

    $('#btn').on('click',function(e){
        e.preventDefault();
        $('#examplemodal').modal('show');
    });

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
