<!doctype html>
<html lang="en">
  <head>
    <title>All Products</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

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
.wallet_margin{
    display: flex;
    flex-direction: ltr;
    flex-wrap: wrap;
    align-content: center !important;
    column-gap: 42px;
}
.align-items-center {
    justify-content: space-between;
}
.rounded {
    border-radius: 0.10rem !important;
}
.border {
     border: 1px solid  #36a0a6 !important;
}
.wallet_visit_seller{
    background-color: #454545;
    color: #ffffff;
    width: 100%;
    padding: 3px 5px;
    border-radius: 25px 25px;
}
.wallet_product_disc{
    /* background-image: linear-gradient(#5CEBD2, #15D1F0); */
    height: 30px;
    width: 30px;
    border-radius: 50%;
    display: inline-block;
    font-size: 10px;
    color: white;
    font-weight: 600;
}

.col-12{
    margin: 0% !important;
    padding: 1% !important;
}
.card{
    box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
}
 .card:hover {
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}

a{
    text-decoration: none !important;
}
.pname{
    height:30px;
    display: inline-block;
    width: 180px;
    white-space: nowrap;
    overflow: hidden !important;
    text-overflow: ellipsis;"
}
.nav-link{
    color:#A0D18C!important;
}
/* .rectangle{
    background-color: #0a0a2a;
    border-radius: 7px;
    height:225px;
} */


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

<img src="{{ asset('public/img/Rectangle.png')}}" alt="" height="45px" width="100%">
    <div class="container">

        <!--header-->
        <section class="mb-2">
            <div class="row">
                <div class="col-lg-12 text-center">
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
        </section>

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
                                            <div class="col-12">
                                                    <div class="text-center wallet_font pname">
                                                        <a href="{{route('product_detail',['pid'=>$product->id])}}" class="text-reset">{{$product->name}}</a>
                                                    </div>

                                                    <div class="row"  style="height:40px;">
                                                        <div class="col text-center wallet_font">
                                                            $&nbsp;{{$product->discount_price}}
                                                        </div>
                                                        <div class="col text-center wallet_strike">
                                                            $&nbsp;{{$product->price}}
                                                        </div>
                                                    </div>

                                                    <div style="width: 100% !important;">
                                                        <div class="text-center wallet_visit_seller" style="height:34px">
                                                            <a href="{{route('product_detail',['pid'=>$product->id])}}" role="button" class="text-reset wallet_font">{{('Add To Cart')}}</a>
                                                        </div>
                                                    </div>
                                            </div>
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

                        <p style="margin-top:-10px;color:#A0D18C;font-weight:800;font-family:Fugaz One;font-size:60px;line-height:88px">4pay.ai</p>

                        <p>
                        Emerce is a modern ajax<br/>
                        powered WooCommerce<br/>
                        Theme with enriched<br/>
                        options.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-4">
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
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-4">
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

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-4">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact Us</h6>
                        <p>2938 Westhemier Rd. Santa Ana,
                        Illinos Mark Street 33990
                        </p>
                        <p>(374) 480 - 39100</p>
                        <p>hello@domain.com</p>
                        <p></p>
                    </div>
                    <!-- Grid column -->
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
