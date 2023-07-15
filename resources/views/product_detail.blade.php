<!doctype html>
<html lang="en">
  <head>
    <title>product detail</title>
    <!-- Required meta tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
<style>

@media only screen and (max-width:950px) {
    .pro_gallery_img{
        display:none;
    }
    .image_hw{
    width:450px !important;
    height:450px !important;
    }
    .slider{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .slide_img{
    border:1px solid #16cdbb;
    }
    .simage_hw{
        width:98px !important;
        height:98px !important;
    }
    table{
        margin: 0% !important;
    }
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
    #cateimg{
        width:150px;
    }
}


@media only screen and (min-width: 950px) {
    .slider{
        display: none;
    }

}

table{
    font-family: Frank Ruhl;
}

.rounded {
    border-radius: 0.25rem !important;
}
.bg-white {
    background-color: #fff !important;
}
.shadow-sm {
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05) !important;
}
.fs-20 {
    font-size: 1.8rem !important;
    color:#454545;
    font-weight: 600;
}
.wallet_price{
    font-weight: 700;
    font-size: 1.3rem;
}
.wallet_description{
    font-weight: 500;
    font-size: 1.2rem;
}
.wallet_visit_seller{
    background-color:#454545;
    color: #ffffff;
    width: 100%;
    padding: 3px 0px;
    border-radius: 25px 25px;
}
.wallet_font{
    font-weight: 600;
}
.card-body{
    padding: 0% !important;
}
.img-fluid {
    max-width: 100%;
    height: auto;
    border:1px solid #16cdbb;
    border-radius: 0.25rem;
}
img {
    vertical-align: middle;
    border-style: none;
}
.pro_img{
    border:1px solid #16cdbb;
    margin:5px 0%;
}
.pro_gallery_img{
    height: 152px;
    width:150px;
    margin:5px 0%;
    border:1px solid #16cdbb;
}
.image_hw{
    width:480px;
    height:480px;
}
/* .card-body:active{
    border:2px solid red;
} */
.active{

    /* border:1px solid #16cdbb;
    border-radius: 0.25rem; */
}
.card{
    border:none !important;
}
.nav-link{
    color:#A0D18C!important;
}
#checkoutbtn{
    height: 34px;
    border: 0;
}
.pname{
    height:30px;
    display: inline-block;
    width: 180px;
    white-space: nowrap;
    overflow: hidden !important;
    text-overflow: ellipsis;"
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
#ralated_pro{
    box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
}
#ralated_pro:hover {
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}
a{
    text-decoration: none !important;
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
                            <div class="card-title">Shop Now</div>
                            <a href="{{ url()->previous() }}">
                                <img src="{{asset('public/img/backtocatalog.png')}}" alt="" id="cateimg">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="mb-4 pt-3">

            <div class="bg-white shadow-sm rounded p-3">
                @foreach ($product_details as $key => $product)
                    @php
                        $product_id = $product->id;
                        // $productdata=\App\Models\Product_Image::where('p_id',$product_id)->first();
                        $productdatas = \App\Models\Product_Image::where('p_id',$product_id)->get();
                        $product_img_main = $productdatas[0]->image ?? '';
                    @endphp
                <div class="row">
                    {{-- gallery images --}}
                    <div class="col-2 mb-4">
                        @foreach ($productdatas as $productdata)
                            <div class="row ml-1">
                                <div class="card pro_gallery_img">
                                    <div class="card-body active">
                                        <a href="#" class="aimg">
                                            <img
                                                src="{{ asset($productdata->image)}}"
                                                class="img-fluid"
                                                style="border-radius:0.25rem;height:150px;width:150px;"
                                                onclick="myFunction(this)"
                                            >
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{-- main image --}}
                    <div class="col-xl-5 col-lg-6 mb-4">
                        <div class="card pro_img">
                            <div class="card-body">
                                <a href="#">
                                    <img
                                        src="{{ asset($product_img_main)}}"
                                        class="img-fluid image_hw"
                                        style="border-radius:0.25rem;"
                                        id="expandedImg"
                                    >
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- for mobileview --}}

                    <div class="slider">
                        <div class="row">
                            @foreach ($productdatas as $productdata)
                            <div class="col-4">
                                <div class="card slide_img">
                                    <div class="card-body">
                                        <a href="#" class="aimg">
                                            <img
                                                src="{{ asset($productdata->image)}}"
                                                class="img-fluid"
                                                style="border-radius:0.25rem;height:150px;width:150px;"
                                                onclick="myFunction(this)"
                                            >
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>


                    <div class="col-xl-5 col-lg-6">
                        <div class="text-left">
                            <div class="row">
                                <form action="{{ url('send_payment') }}" method="POST">

                                    <table width="90%" cellpadding="15px" style="margin-top:-20px">
                                        <tr>
                                            <td colspan="2">
                                                <span class="fs-20">{{$product->name}}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="wallet_price">${{$product->discount_price}}</span></td>

                                            {{-- <td>$800</td> --}}
                                        </tr>
                                        <tr>
                                            <td colspan="2"><span class="wallet_description">{{$product->describe_item}}</span></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="text-center wallet_visit_seller" style="width:180px;height:32px;">
                                                    <a onclick='ChangeQuantity("minus")'><i class="fa-solid fa-circle-minus fa-2xl" style="color:#e2e3e5;"></i></a>
                                                    <span id="quantity" class="text-reset wallet_font" style="margin:0% 27%">1</span>
                                                    <a onclick='ChangeQuantity("plus")'><i class="fa-solid fa-circle-plus fa-2xl" style="color:#e2e3e5;"></i></a>
                                                </div>
                                                @csrf
                                                <input type="hidden" id="amount" name="amount" value="0"/>
                                                <input type="hidden" id="product_price" name="product_price" value="{{$product->discount_price}}"/>
                                                <input type="hidden" class="cust_id" name="cust_id" value=""/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{-- <div class="text-center wallet_visit_seller" style="height:34px"> --}}
                                                <button id="checkoutbtn" role="button" class="text-center wallet_visit_seller" onclick="checkoutnow()" style="width:80px;">{{('Pay Now')}}</button>
                                                {{-- </div> --}}
                                            </td>
                                            <td>
                                                <button id="checkoutbtn" role="button" class="text-center wallet_visit_seller" onclick="checkoutnow()" style="width:180px;">{{('Share Payment Link')}}</button>

                                                {{-- <div class="text-center wallet_visit_seller" style="height:34px;width:180px">
                                                    <a href="#" role="button" class="text-reset wallet_font">{{('Share Payment Link')}}</a>
                                                </div> --}}
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>


        <div class="modal fade" id="userForm">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Information</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="card-body mb-12">
                            <div class="form-outline mb-4">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Full Name">
                            </div>
                            <div class="form-outline mb-4">
                                <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-outline mb-4">
                                <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="Phone Number">
                            </div>
                            <div class="form-outline mb-4">
                                <input type="text" name="address" id="address" class="form-control" placeholder="Address">
                            </div>
                            {{-- <div class="form-outline">
                                <input type="text" name="discountAmt" id="discountAmt" class="form-control" placeholder="">
                            </div> --}}
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <div class="footer">
                            {{-- {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!} --}}
                            <button type="button" class="btn btn-primary saveCustomerData theamBtnColor" data-dismiss="modal" >Submit</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--related products-->
    <section class="mb-4">
        <div class="row text-center">
            @if(count($related_products)!='0')
                @foreach ($related_products as $key => $product)
                <div class="col-3 col-xl-3 col-lg-5 col-md-6 col-sm-8 col-6">
                    @if($product->is_visible == "on")
                        @php
                            $product_id = $product->id;
                            $productdata=\App\Models\Product_Image::where('p_id',$product_id)->first();
                            $product_img=$productdata->image ?? '';
                        @endphp
                            <div class="card mt-4" id="ralated_pro">
                                <div class="card-body" style="padding:4px !important">
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            priceCount();
            var userData = localStorage.getItem('userData');
            if(userData){
                // console.log(userData);
                $('.cust_id').val(jQuery.parseJSON(userData).cust_id);
                $('#checkoutbtn').removeAttr("type").attr("type", "submit");
            }

            $(".saveCustomerData").click(function(){
                var name = $('#name').val();
                var email = $('#email').val();
                var phone_number = $("#phone_number").val();
                var address = $("#address").val();
                if(name == ""){
                    alert("Please enter full name");
                    return false;
                }else if(email == ""){
                    alert("Please enter email");
                    return false;
                }else if(phone_number == ""){
                    alert("Please enter phone number");
                    return false;
                }else if(address == ""){
                    alert("Please enter address");
                    return false;
                }
                $.ajax({
                    url: "{{ url('save_customer') }}",
                    type: 'POST',
                    data: {_token:  $('meta[name="csrf-token"]').attr('content'), name: name, email: email, phone_number: phone_number, address: address},
                    dataType: 'JSON',
                    success: function (res) {
                        $('.cust_id').val(res.request.cust_id);
                        if(res.status == 1){ // new customer
                            localStorage.setItem('userData', JSON.stringify(res.request));
                        }else if(res.status == 2){ // old customer
                            localStorage.setItem('userData', JSON.stringify(res.request));
                        }
                        alert('Registration Successfully');
                        checkoutnow();
                    }
                });
            });
        });

        function priceCount(){
            var amountVal = $('#product_price').val() * parseInt($('#quantity').text());
            $('#amount').val(amountVal);
        }
        function ChangeQuantity(p_type){
            var $input = $('#quantity');
            if(p_type == "minus"){
                var count = parseInt($input.text()) - 1;
            }else if(p_type == "plus"){
                var count = parseInt($input.text()) + 1;
            }
            count = count < 0 ? 0 : count;
            $input.text(count);
            priceCount();
        }

        function checkoutnow()
        {
            var userData = localStorage.getItem('userData');
            console.log(userData);
            if(userData){
                // $('#paymentModal').modal('show');
                // console.log(userData);
                $('.cust_id').val();
                $('#checkoutbtn').removeAttr("type").attr("type", "submit");
            }else{
                $('#userForm').modal('show');
                // var userData = localStorage.setItem('userData', 'userData');
            }
        }

        //for image gallery

        function myFunction(imgs) {
        var expandImg = document.getElementById("expandedImg");
        expandImg.src = imgs.src;
        expandImg.parentElement.style.display = "block";
        }

        var cardbody = document.getElementsByClassName("card-body");

        for (var i = 0; i < cardbody.length; i++) {
            cardbody[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
  });
}

    </script>

    </body>
</html>
