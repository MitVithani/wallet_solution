<!doctype html>
<html lang="en">
  <head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <style>
        /* @media only screen and (max-width: 800px) {
    .wallet_margin .card{
        width: 168px !important;
    }
    .wallet_margin{
        margin-left: 0px !important;
    }
    } */
    @media only screen and (max-width: 960px) {
        #main_banner_img
            {
              order: 1 !important;
            }
            #main_banner_text{
                order: 2 !important;
            }
            .osmargin{
                margin-top: 50px !important;
                margin-bottom:0%;
            }
            .rectangle{
                display:none;
            }
            .footerrow{
            text-align: center;
            }
            .img-left{
                display:none;
            }
            .heading{
               font-size:33px !important;line-height:40px !important;
            }
            .text2{
                font-size:20px !important;line-height:30px !important;
            }
            .ep_t1{
                font-size:35px !important;line-height:40px !important;
            }
            .ep_t2,.bset_sel_t2{
                font-size:18px !important;line-height:25px !important;
            }
            .vector_img {
                margin-left:1100px
            }
            .right_vector_img {
                margin-left: 1050px
            }
    }
    .osmargin{
            margin-top: -110px;
            margin-bottom:-110;
        }
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
    .align-items-center {
        justify-content: space-between;
    }
    .rounded {
        border-radius: 0.10rem;
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
    a{
        text-decoration: none !important;
    }
    .hcolor{
        color: #454545;
    }
    .nav-link{
        color:#A0D18C!important;
    }
    span{
        font-family: Frank Ruhl;
    }
    .rectangle {
        height: 70px;
        width: 500px;
        background-color:#546A86;
        color:#A0D18C;
        margin-left: -200px;
        margin-top: 50px;
    }
    #gb1{
        background-image: linear-gradient(to right, #c6d0d6 , #ffffff, #ffffff, #ffffff);
    }
    #gb2{
        background-image: linear-gradient(to right, #ffffff, #ffffff, #ffffff,#c6d0d6);
    }
    .heading{
        color: #454545;font-size:64px;font-weight:900;line-height:80px;font-family: Frank Ruhl;
    }
    .text2{
        color: #454545;font-size:24px;font-weight:400;line-height:40px;font-family: Frank Ruhl;
    }
    .bset_sel_t2{
        color: #454545;font-size:20px;font-weight:400;line-height:30px;
    }
    .card_t1{
       color: #454545;font-size:30px;font-weight:900;line-height:36px;font-family: Frank Ruhl;
    }
    .card_t2{
        margin-top:20px;color: #454545;font-size:20px;font-weight:400;line-height:25px;font-family:Lato;
    }
    .cname{
        color: #454545;font-size:23px;font-weight:900;line-height:36px;font-family: Frank Ruhl;
    }
    .ctype{
        color: #454545;font-size:20px;font-weight:400;line-height:25px;font-family: Frank Ruhl;
    }
    .ep_t1{
        color: #454545;font-size:55px;font-weight:900;line-height:70px;
    }
    .ep_t2{
        color: #454545;font-size:20px;font-weight:400;line-height:24px;
    }
    .footer_text{
        margin-top:-10px;color:#A0D18C;font-weight:800;font-family:Fugaz One;font-size:60px;line-height:88px;
    }

    .tt-line-clamp {
    overflow: hidden;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    }
    .tt-line-clamp.tt-clamp-1 {
        -webkit-line-clamp: 1;
    }
    .tt-line-clamp.tt-clamp-2 {
        -webkit-line-clamp: 2;
    }
    .tt-line-clamp.tt-clamp-3 {
        -webkit-line-clamp: 3;
    }
    .vector_img {
        margin-left: 0px
    }
    .right_vector_img {
        margin-left: 0px
    }
    </style>

    <div class="">
        <section class="mb-2">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <img src="{{ asset('public/img/Rectangle.png')}}" alt="" height="45px" width="100%">
                        <div class="container">
                            <nav class="navbar navbar-expand-lg navbar-light pt-0">
                                <a class="navbar-brand" href="#">
                                    <img src="{{ asset('public/img/4pay.png')}}" alt="">
                                </a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto ml-auto">
                                        <li class="nav-item">
                                        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="#">Overview<span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="#">Shop<span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="#">About Us<span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="#">In Store<span class="sr-only">(current)</span></a>
                                        </li>
                                    </ul>
                                    <button type="button" class="btn btn-light" style="border: 2px solid #646262">List my business</button>
                                    <img src="{{ asset('public/img/Vector.png')}}" alt="" style="margin-right:-80px;margin-left:20px" width="12%">
                                </div>
                            </nav>
                        </div>

                        {{-- for main image --}}
                    </div>
                </div>
        </section>

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
                        <a name="" id="" class="btn mt-4 mb-3" href="#" role="button" style="border: 2px solid #A0D18C;color:#A0D18C">Login</a>
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
    </div>
    <!-- Footer -->
    <footer
        class="text-left text-lg-start text-white"
        style="background-color: #546A86">
          <!-- Grid container -->
        <div class="container pt-4 pb-0">
            <!-- Section: Links -->
            <section class="">
              <!--Grid row-->
                <div class="row footerrow">
                <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto">
                        <p class="footer_text">4pay.ai</p>
                        <p>Emerce is a modern ajax<br/>
                            powered WooCommerce<br/>
                            Theme with enriched<br/>
                            options.</p>
                    </div>
                <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Information</h6>
                        <p>
                            <a class="text-white" href="#">Return Policy</a>
                        </p>
                        <p>
                            <a class="text-white" href="#">General Question</a>
                        </p>
                        <p>
                            <a class="text-white" href="#">Terms & Condition</a>
                        </p>
                        <p>
                            <a class="text-white" href="#">Privacy Policy</a>
                        </p>
                    </div>
                <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />
                <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            Quick links
                        </h6>
                        <p>
                            <a class="text-white" href="#">About Us</a>
                        </p>
                        <p>
                            <a class="text-white" href="#">Cart Page</a>
                        </p>
                        <p>
                            <a class="text-white" href="#">Contact Us</a>
                        </p>
                        <p>
                            <a class="text-white" href="#">Help & Support</a>
                        </p>
                    </div>
                <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />

                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact Us</h6>
                            <p>2938 Westhemier Rd. Santa Ana,
                            Illinos Mark Street 33990
                            </p>
                            <p>(374) 480 - 39100</p>
                            <p>hello@domain.com</p>
                    </div>
              </div>
              <!--Grid row-->
            </section>
            <!-- Section: Links -->
                <hr class="mt-4 m-0" style="color:#ffffff;background-color:white">

            <!-- Section: Copyright -->
            <section class="pt-3 pt-0">
              <div class="row d-flex text-left ml-2">
                <div class="col-4 col-md-4 col-lg-4 text-md-start">
                    <p>Copyright ©4pay  2023,</p>
                </div>
                <div class="col-4 col-md-4 col-lg-4 text-md-start">
                    <p> 4 pay</p>
                </div>
                <div class="col-4 col-md-4 col-lg-4 text-md-start">
                    <p>. All Rights Reserved by 4pay</p>
                </div>
              </div>
            </section>
        </div>
          <!-- Grid container -->
    </footer>
    <!-- Footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
