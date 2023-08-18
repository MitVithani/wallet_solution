@extends('mainlayout')

    @section('content')
    <style>
    body{
        overflow-x: hidden;
    }
    .img-fluid {
        max-width: 100%;
        height: auto;
    }
    img {
        vertical-align: middle;
        border-style: none;
    }
    .border {
        border: 1px solid  #36a0a6;
    }
    .wallet_visit_seller{
        /* background-image: linear-gradient(#11CFF1, #94FFBA); */
        background-color: #454545;
        color: #ffffff;
        width: 100%;
        padding: 3px 5px;
        border-radius: 7px 7px 7px 7px;
    }
    .card{
        box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 4px 4px rgba(0,0,0,0.23);
    }
    .card:hover {
        box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
    }
    </style>


        <!--our seller-->

            <div class="container mb-4">
                    {{-- <div class="row"> --}}
                        <div class="row text-center">
                            <div class="col-md-12">
                                <div class="heading">All Seller</div>
                            </div>
                            @foreach ($shops as $key => $shop)
                                <div class="col-3 col-xl-3 col-lg-5 col-md-6 col-sm-8 col-6">
                                    <div class="card mt-4">
                                        <div class="card-body" style="padding:2px">
                                            <a href="{{route('product_list',['id'=>$shop->id])}}">
                                                                        <img
                                                                            src="{{ asset('public/logo/'.$shop->logo)}}"
                                                                            style="border-radius:7px;" height="200px" width="100%"
                                                                        >
                                            </a>
                                            <div class="p-1">
                                                <h2 class="h6 fw-600 text-center">
                                                    <a href="{{route('product_list',['id'=>$shop->id])}}" class="text-reset">{{$shop->shop_name}}</a>
                                                </h2>

                                                <div class="text-center wallet_visit_seller">
                                                    <a href="{{route('product_list',['id'=>$shop->id])}}" class="text-reset">{{('Visit Seller')}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>



            {{ $shops->links() }}


@endsection
