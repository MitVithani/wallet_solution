<!doctype html>
<html lang="en">
  <head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--aiz css-->
    <link href="{{ asset('assets/css/aiz-core.css') }}" rel="stylesheet" type="text/css"/>

    <!-- font awsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" integrity="sha512-vebUliqxrVkBy3gucMhClmyQP9On/HAWQdKDXRaAlb/FKuTbxkjPKUyqVOxAcGwFDka79eTF+YXwfke1h3/wfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

    }
    .vector_img {
                margin-left:1100px;
            }
            .right_vector_img {
                margin-left: 1050px;
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
    .wallet_font{
        font-weight: 600;
    }
    .wallet_strike{
        text-decoration: line-through;
        color:#9da3a3;
    }
    .wallet_visit_seller{
        background-color: #454545;
        color: #ffffff !important;
        width: 100%;
        padding: 5px 5px;
        border-radius: 25px 25px;
    }
    .home_visit_seller{
        /* background-image: linear-gradient(#11CFF1, #94FFBA); */
        background-color: #454545;
        color: #ffffff;
        width: 100%;
        padding: 3px 5px;
        border-radius: 7px 7px 7px 7px;
    }

    .card_shadow{
        box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 4px 4px rgba(0,0,0,0.23);
    }
    .card_shadow:hover {
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
    .spanfont{
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
/*bootstrap extend*/
.fw-100 {
    font-weight: 100 !important;
}
.fw-200 {
    font-weight: 200 !important;
}
.fw-300 {
    font-weight: 300 !important;
}
.fw-400 {
    font-weight: 400 !important;
}
.fw-500 {
    font-weight: 500 !important;
}
.fw-600 {
    font-weight: 600 !important;
}
.fw-700 {
    font-weight: 700 !important;
}
.fw-800 {
    font-weight: 800 !important;
}
.fw-900 {
    font-weight: 900 !important;
}

.fs-8 {
    font-size: 0.5rem !important;
}
.fs-9 {
    font-size: 0.5625rem !important;
}
.fs-10 {
    font-size: 0.625rem !important;
}
.fs-11 {
    font-size: 0.6875rem !important;
}
.fs-12 {
    font-size: 0.75rem !important;
}
.fs-13 {
    font-size: 0.8125rem !important;
}
.fs-14 {
    font-size: 0.875rem !important;
}
.fs-15 {
    font-size: 0.9375rem !important;
}
.fs-15 {
    font-size: 0.9375rem !important;
}
.fs-16 {
    font-size: 1rem !important;
}
.fs-17 {
    font-size: 1.0625rem !important;
}
.fs-18 {
    font-size: 1.125rem !important;
}
.fs-19 {
    font-size: 1.1875rem !important;
}
.fs-20 {
    font-size: 1.25rem !important;
}
.fs-21 {
    font-size: 1.3125rem !important;
}
.fs-22 {
    font-size: 1.375rem !important;
}
.fs-23 {
    font-size: 1.4375rem !important;
}
.fs-24 {
    font-size: 1.5rem !important;
}

.noborder td,th{
        border: 0 !important;
    }

.aiz-table {
    height: 0;
    opacity: 1;
}
div.footable-loader {
    height: 220px;
}
.aiz-table.footable,
.aiz-table.footable-details {
    opacity: 1;
    height: auto;
}
div.footable-loader > span.fooicon {
    border: 4px solid #1e1e2d;
    border-right-color: transparent;
    border-radius: 50%;
}
div.footable-loader > span.fooicon:before,
div.footable-loader > span.fooicon:after {
    content: none;
}
.aiz-table thead th {
    border-top: 0;
    border-bottom: 1px solid #eceff7;
}
.aiz-table th {
    font-weight: 600;
}
.aiz-table td,
.aiz-table th {
    border-top: 1px solid #eceff7;
}
.aiz-table td,
.aiz-table th {
    padding: 0.3rem 0.15rem;
}
.aiz-table.table-bordered td,
.aiz-table.table-bordered th {
    border: 1px solid #eceff7;
}
.aiz-table .footable-detail-row > td {
    padding: 0;
}
.aiz-table .footable-toggle {
    height: 16px;
    width: 16px;
    line-height: 16px;
    font-size: 16px;
    border-radius: 4px;
    text-align: center;
    opacity: 1;
    color: var(--white);
    background-color: var(--aaa);
    margin-right: 10px;
}
.aiz-table .footable-toggle.fooicon-minus {
    color: var(--white);
    background-color: var(--aaa);
}
.aiz-table.footable > tbody > tr.footable-empty > td {
    font-size: 20px;
    position: relative;
    padding-top: 100px;
}

.aiz-table.footable > tbody > tr.footable-empty > td:before {
    content: "\f119";
    font-family: "Line Awesome Free";
    font-weight: 900;
    position: absolute;
    left: 50%;
    top: 20px;
    font-size: 60px;
    opacity: 0.5;
    transform: translate(-50%, 0px);
}
.aiz-table .footable-pagination-wrapper {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: space-between;
    justify-content: space-between;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-top: 1rem;
}

.aiz-table .footable-page-link,
.aiz-table .footable-page.disabled .footable-page-link {
    min-width: 36px;
    min-height: 36px;
    line-height: 36px;
    text-align: center;
    padding: 0;
    border: 0;
    font-size: 0.875rem;
    border-radius: 50% !important;
    color: var(--dark);
    display: inline-block;
}

.aiz-table .footable-page {
    margin: 0 2px;
}

.aiz-table .active .footable-page-link,
.aiz-table .footable-page-link:hover {
    background-color: var(--primary);
    color: #fff;
}

.wallet_button{
    border: 2px solid #646262;
    background-color:#A0D18C;
}

    </style>

        <section class="mb-2">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <img src="{{ asset('public/img/Rectangle.png')}}" alt="" height="45px" width="100%">
                        <div class="container">
                            <nav class="navbar navbar-expand-lg navbar-light pt-0">
                                <a class="navbar-brand" href="{{route('userhome')}}">
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
                                    <a name="" id="" class="btn btn-light" href="{{ route('register') }}" style="border: 2px solid #646262" role="button">List my business</a>
                                    {{-- <button type="button" class="btn btn-light" style="border: 2px solid #646262">List my business</button> --}}
                                    <img src="{{ asset('public/img/Vector.png')}}" alt="" style="margin-right:-80px;margin-left:20px" width="12%">
                                </div>
                            </nav>
                        </div>

                        {{-- for main image --}}
                    </div>
                </div>
        </section>

        <div class="">
            @yield('content')
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
                        <a class="text-white" href="{{route('term_condition')}}">Terms & Condition</a>
                    </p>
                    <p>
                        <a class="text-white" href="{{route('privacy')}}">Privacy Policy</a>
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
                        <a class="text-white" href="{{route('aboutus')}}">About Us</a>
                    </p>
                    <p>
                        <a class="text-white" href="#">Cart Page</a>
                    </p>
                    <p>
                        <a class="text-white" href="{{route('acceptable_use_policy')}}">Acceptable Use Policy</a>
                    </p>
                    <p>
                        <a class="text-white" href="{{route('activities')}}">Prohibited Businesses-Activities</a>
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
<script src="{{ asset('assets/js/aiz-core.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

