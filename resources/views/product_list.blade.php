@extends('mainlayout')

@section('content')
<style>

@media only screen and (max-width: 960px) {
    .footerrow{
        text-align: center;
    }
    #inner-div .card{
        width: 300px !important;
        background-color:rgb(0, 0, 0);
        box-shadow: 0 0 4px 4px rgb(54, 63, 78);
        border-radius: 20px;
    }
    #inner-div .card-body{
        padding: 0% !important;
        margin: 0% !important;
    }
    #inner-div .card-title{
    font-size:24px !important;
    }

}
.wallet_font{
    font-weight: 600;
}
.wallet_strike{
    text-decoration: line-through;
    color:#9da3a3;
}

.img-fluid {
    max-width: 100%;
    height: auto;
}
img {
    vertical-align: middle;
    border-style: none;
}
.align-items-center {
    justify-content: space-between;
}
.rounded {
    border-radius: 0.10rem !important;
}
.border {
     border: 1px solid  #454545 !important;
}
.wallet_visit_seller{
    background-color: #454545;
    color: #ffffff !important;
    width: 100%;
    padding: 5px 5px;
    border-radius: 25px 25px;
}

.card{
    box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
}
 .card:hover {
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}
#outer-div {
    width: 100%;
    text-align: center;
    background-color: #0a0a2a;
    border-radius: 7px;
    height:225px;
}
#inner-div {
    display: inline-block;
    margin: 20px auto;
    padding: 30px;
}
#inner-div .card{
    width: 500px;
    height:125px;
    background-color:rgb(0, 0, 0);
    box-shadow: 0 0 4px 4px rgb(54, 63, 78);
    border-radius: 20px
    /* margin-top:50px; */
}
#inner-div .card-body{
    padding: 0%;
}
#inner-div .card-title{
    color:#A0D18C;font-weight:400;font-family:Fugaz One;font-size:44px;
}

</style>

{{-- <img src="{{ asset('public/img/Rectangle.png')}}" alt="" height="45px" width="100%"> --}}
    <div class="container">

        <!--banner-->
        <div id="outer-div">
            <div id="inner-div">
                <div class="card mr-auto ml-auto">
                    <div class="row no-gutters">
                        <div class="col-md-3 col-5">
                            <img src="{{asset('public/img/gimg.png')}}" height="124" width="124" alt="...">
                        </div>
                        <div class="col-md-9 col-7">
                            <div class="card-body text-left ml-4">
                                <div class="card-title ml-1">Women Loves</div>
                                <a href="{{ url()->previous() }}">
                                    <img src="{{asset('public/img/share.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--product list-->
        <section class="mb-4">
                <div class="row text-center">
                    @if(count($products)!='0')
                        @foreach ($products as $key => $product)
                        <div class="col-3 col-xl-3 col-lg-5 col-md-6 col-sm-8 col-6">
                            @if($product->is_visible == "on")
                                @php
                                    $product_id = $product->id;
                                    $productdata=\App\Models\Product_Image::where('p_id',$product_id)->first();
                                    $product_img=$productdata->image ?? '';
                                @endphp
                                    <div class="card mt-4">
                                        <div class="card-body" style="padding:4px">
                                            <a href="{{route('product_detail',['pid'=>$product->id])}}">
                                                <img
                                                    src="{{ asset($product_img)}}"
                                                    style="border-radius:7px;"
                                                    height="210px" width="90%"
                                                >
                                            </a>

                                                    <div class="text-center wallet_font pname mt-2 tt-line-clamp tt-clamp-2">
                                                        <a href="{{route('product_detail',['pid'=>$product->id])}}" class="text-reset">{{$product->name}}</a>
                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col text-center wallet_font">
                                                            $&nbsp;{{$product->discount_price}}
                                                        </div>
                                                        <div class="col text-center wallet_strike">
                                                            $&nbsp;{{$product->price}}
                                                        </div>
                                                    </div>

                                                    <form action="{{ route('cart_store') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf

                                                        <input type="hidden" value="{{ $product->id }}" name="product_id">
                                                        <input type="hidden" value="{{ $product->price }}" name="price">
                                                        <input type="hidden" value="1" name="qty">

                                                    {{-- <div style="width: 100% !important;"> --}}
                                                        <div class="text-center mt-2 ">
                                                            <button type="submit" class="border-0 wallet_visit_seller text-reset ">{{('Add To Cart')}}</button>
                                                        </div>
                                                    {{-- </div> --}}

                                                    </form>

                                        </div>
                                    </div>
                            @endif
                        </div>
                        @endforeach
                    @else
                         {{('no product funds')}}
                    @endif
                </div>
            </div>
            {{-- {{ $products->links() }} --}}
        </section>
    </div>

@endsection
