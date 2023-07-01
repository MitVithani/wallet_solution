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
}

@media only screen and (min-width: 950px) {
    .slider{
        display: none;
    }

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
    color:#0199c1;
    font-weight: 500;
}
.wallet_price{
    font-weight: 700;
    font-size: 1.3rem;
}
.wallet_description{
    font-weight: 500;
    font-size: 1.1rem;
}
.wallet_visit_seller{
    background-image: linear-gradient(#59a8ee, #2cc99a);
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

    border:2px solid #16cdbb;
    border-radius: 0.25rem;
}
.card{
    border:none !important;
}

</style>

    <section class="mb-4 pt-3">
        <div class="container">
            <div class="bg-white shadow-sm rounded p-3">
                @foreach ($product_details as $key => $product)
                    @php
                        $product_id = $product->id;
                        $productdata=\App\Models\Product_Image::where('p_id',$product_id)->first();
                        $product_img=$productdata->image ?? '';
                    @endphp
                <div class="row">
                    {{-- gallery images --}}
                    <div class="col-2 mb-4">
                        <div class="row ml-1">
                            <div class="card pro_gallery_img">
                                <div class="card-body active">
                                    <a href="#" class="aimg">
                                        <img
                                            src="{{ asset('public/img/logo4.jpg')}}"
                                            class="img-fluid"
                                            style="border-radius:0.25rem;height:150px;width:150px;"
                                            onclick="myFunction(this)"
                                        >
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row ml-1">
                            <div class="card pro_gallery_img">
                                <div class="card-body">
                                    <a href="#" class="aimg">
                                        <img
                                            src="{{ asset('public/img/logo.jpg')}}"
                                            class="img-fluid"
                                            style="border-radius:0.25rem;height:150px;width:150px"
                                            onclick="myFunction(this)"
                                        >
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- main image --}}
                    <div class="col-xl-5 col-lg-6 mb-4">
                        <div class="card pro_img">
                            <div class="card-body">
                                <a href="#">
                                    <img
                                        src="{{ asset('public/img/logo4.jpg')}}"
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
                            <div class="col-4">
                                <div class="card slide_img">
                                    <div class="card-body">
                                        <a href="#" class="aimg">
                                            <img
                                                src="{{ asset('public/img/logo4.jpg')}}"
                                                class="img-fluid"
                                                style="border-radius:0.25rem;height:150px;width:150px;"
                                                onclick="myFunction(this)"
                                            >
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card slide_img">
                                    <div class="card-body">
                                        <a href="#" class="aimg">
                                            <img
                                                src="{{ asset('public/img/logo.jpg')}}"
                                                class="img-fluid"
                                                style="border-radius:0.25rem;height:150px;width:150px"
                                                onclick="myFunction(this)"
                                            >
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card slide_img">
                                    <div class="card-body">
                                        <a href="#" class="aimg">
                                            <img
                                                src="{{ asset('public/img/logo4.jpg')}}"
                                                class="img-fluid"
                                                style="border-radius:0.25rem;height:150px;width:150px"
                                                onclick="myFunction(this)"
                                            >
                                        </a>
                                    </div>
                                </div>
                            </div>
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
                                                    <a onclick='ChangeQuantity("plus")'><i class="fa-solid fa-circle-plus fa-2xl" style="color:#e2e3e5;"></i></a>
                                                    <span id="quantity" class="text-reset wallet_font" style="margin:0% 27%">1</span>
                                                    <a onclick='ChangeQuantity("minus")'><i class="fa-solid fa-circle-minus fa-2xl" style="color:#e2e3e5;"></i></a>
                                                </div>
                                                @csrf
                                                <input type="hidden" id="amount" name="amount" value="0"/>
                                                <input type="hidden" id="product_price" name="product_price" value="{{$product->discount_price}}"/>
                                                <input type="hidden" class="cust_id" name="cust_id" value=""/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="text-center wallet_visit_seller" style="height:34px">
                                                <button id="checkoutbtn" role="button" class="text-reset wallet_font" onclick="checkoutnow()">{{('Pay Now')}}</button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-center wallet_visit_seller" style="height:34px;width:180px">
                                                    <a href="#" role="button" class="text-reset wallet_font">{{('Share Payment Link')}}</a>
                                                </div>
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
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
