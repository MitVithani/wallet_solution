@extends('mainlayout')

@section('content')
        <!--main banner-->
        <section>
            <div class="container">
                <div class="row">
                    <img class="img-left" src="{{ asset('public/img/Vector.png')}}" alt="" style="margin-left:-117px" width="10%" height="10%">
                    <div class="col-xl-5 col-lg-7 text-left" id="main_banner_text">
                        <div class="heading">
                            <span>Find The Best Product Item For You</span>
                        </div>
                        <div class="text2">
                            <span>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</span>
                        </div>
                        <a name="" id="" class="btn mb-3 mt-4" href="#" role="button" style="border: 2px solid #646262;background-color:#A0D18C">Shop Now</a>
                    </div>
                    <div class="col-xl-7 col-lg-5" id="main_banner_img">
                        <img src="{{ asset('public/img/main.png')}}" alt="" width="100%">
                    </div>
                </div>
            </div>
        </section>

        <!--new in store-->
        <section style="margin-top:50px" id="gb1">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12 heading">
                            New In Store
                    </div>
                    <div class="col-12 text2">
                            Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                    </div>
                </div>
                <div class="row text-center">
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
            </div>
        </section>

        <!--easy payment service-->
        <section  style="margin-top:50px" id="gb2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('public/img/girlimg.png')}}" alt="" width="100%" height="600px">
                    </div>
                    <div class="col-md-6">
                        <div class=" text-left">
                            <div class="">
                                <div class="ep_t1"> Best Seller Product Sale & EASY Payment Services.</div>
                                <div class="ep_t2 mt-2">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</div>
                                {{-- <a name="" id="" class="btn" href="#" role="button" style="border: 2px solid #646262;background-color:#A0D18C">Shop Now</a> --}}
                                <div class="rectangle">
                                    <div class="row text-center">
                                        <div class="col" style="margin-top:10px;border-right:1px solid black;">
                                            <div style="font-size:30px;font-weight:900;line-height:20px;">2023</div>
                                            Fifash Founded
                                        </div>
                                        <div class="col" style="margin-top:10px;border-right:1px solid black;">
                                            <div style="font-size:30px;font-weight:900;line-height:20px">8900+</div>
                                            Product Sold
                                        </div>
                                        <div class="col" style="margin-top:10px;">
                                            <div style="font-size:30px;font-weight:900;line-height:20px">3100+</div>
                                            Best Reviews
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Best seller-->
        <section style="margin-top:100px">
            <div class="container" style="border:2px solid #636363">
                <div class="row mt-5 mb-5">
                    <div class="col-xl-6 col-lg-7 text-left">
                        <div class="heading mt-2">Best Seller</div>
                        <div class="bset_sel_t2 mt-4">Shop Smarter: Discover Our New E-Commerce App, Revolutionize Your Shopping Experience with Our E-Commerce Website! Unleash the Power of Online Shopping: Introducing Our E-Commerce Platform!</div>
                        <a href="{{route('all_seller')}}" id="" class="btn mt-4 mb-3" name="" role="button" style="border: 2px solid #A0D18C;color:#A0D18C">All Shop</a>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <div class="row wallet_margin mt-4 mb-4">
                            @foreach ($shops as $key => $shop)
                            @if($key >= '2')
                                @break
                            @endif
                                <div class="col-6 col-xl-6 col-6">
                                    <div class="card">
                                        <div class="card-body" style="padding:2px">
                                            <a href="{{route('product_list',['id'=>$shop->id])}}">
                                                <img
                                                    src="{{ asset('public/logo/'.$shop->logo)}}"
                                                    style="border-radius:7px;"  height="200px" width="100%"
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
                    </div>
                </div>
            </div>
        </section>

        <!--our seller-->
        <section class="mb-4" style="margin-top:50px">
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <div class="heading">Our Seller</div>
                    </div>
                </div>
                <img src="{{ asset('public/img/left.png')}}" alt="" style="margin-left:-70px" width="12%">
                    <div class="row" style="margin-top:-150px">
                        <img src="{{ asset('public/img/Vector.png')}}" alt="" class="vector_img" width="12%">
                        <div class="row text-center osmargin">
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
                    </div>
                    <img src="{{ asset('public/img/Vector.png')}}" alt="" style="margin-left:-100px;margin-top:-100px" width="12%">
                    <img src="{{ asset('public/img/right.png')}}" alt="" class="right_vector_img" style="margin-top:-100px" width="12%">
            </div>
            {{ $shops->links() }}
        </section>

        <!--what seller say about us-->
        <section style="margin-top:50px">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-12">
                            <div class="heading">What Seller say about Us</div>
                        </div>
                    </div>
                    <div class="row mt-4 text-center">
                        <div class="col-xxl-3 col-lg-4 col-md-12 col-sm-10 col-12">
                            <div class="card mt-2">
                                <div class="card-body" style="padding:20px 0%">
                                    <div class="row">
                                        <div class="card_t1">
                                            Amet minim mollit non deserunt ullamco</div>
                                        </div>
                                        <div class="row mx-1">
                                            <div class="card_t2">
                                                Amet minim mollit non deserunt ullamco
                                                est sit aliqua dolor do amet sint. Velit officia
                                                consequat duis enim velit mollit.</div>
                                        </div>
                                        <img style="margin-top:20px !important" src="{{ asset('public/img/cartimg.png')}}" alt="" height="80px" width="80px" class="mx-10"><br/>
                                        <div class="cname">
                                                Anisa Zahara</div>
                                        <div class="ctype">
                                                Customer</div>
                                    </div>
                            </div>
                        </div>

                        <div class="col-xxl-3 col-lg-4 col-md-12 col-sm-10 col-12">
                            <div class="card mt-2">
                                <div class="card-body" style="padding:20px 0%">
                                    <div class="row">
                                        <div class="card_t1">
                                            Amet minim mollit non deserunt ullamco</div>
                                        </div>
                                    <div class="row mx-1">
                                        <div class="card_t2">
                                            Amet minim mollit non deserunt ullamco
                                            est sit aliqua dolor do amet sint. Velit officia
                                            consequat duis enim velit mollit.</div>
                                    </div>

                                    <img style="margin-top:20px !important" src="{{ asset('public/img/cartimg.png')}}" alt="" height="80px" width="80px" class="mx-10"><br/>
                                    <div class="cname">
                                            Anisa Zahara</div>
                                    <div class="ctype">
                                            Customer</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-3 col-lg-4 col-md-12 col-sm-10 col-12">
                            <div class="card mt-2">
                                <div class="card-body" style="padding:20px 0%">
                                    <div class="row">
                                        <div class="card_t1">
                                            Amet minim mollit non deserunt ullamco</div>
                                        </div>
                                    <div class="row mx-1">
                                        <div class="card_t2">
                                            Amet minim mollit non deserunt ullamco
                                            est sit aliqua dolor do amet sint. Velit officia
                                            consequat duis enim velit mollit.</div>
                                    </div>

                                    <img style="margin-top:20px !important" src="{{ asset('public/img/cartimg.png')}}" alt="" height="80px" width="80px" class="mx-10"><br/>
                                    <div class="cname">
                                            Anisa Zahara</div>
                                    <div class="ctype">
                                            Customer</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </section>

        <section style="margin-top:50px">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12 col-xl-12 col-lg-6">
                        <img src="{{ asset('public/img/footerimg.png')}}" alt="" width="100%">
                    </div>
                </div>
            </div>
        </section>
@endsection

