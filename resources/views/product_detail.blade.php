<!doctype html>
<html lang="en">
  <head>
    <title>product detail</title>
    <!-- Required meta tags -->
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
    height: 100px;
    width:100px;
    /* margin:5px 0%; */
    border:1px solid rgb(22, 205, 187);
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
    background-image: linear-gradient(#59a8ee, rgb(44, 201, 154));
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
}
img {
    vertical-align: middle;
    border-style: none;
}
.pro_img{
    border:1px solid rgb(22, 205, 187);
    margin:5px 0%;
}
.pro_gallery_img{
    height: 152px;
    width:150px;
    margin:5px 0%;
    border:1px solid rgb(22, 205, 187);
}
.image_hw{
    width:480px;
    height:480px;
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
                                <div class="card-body">
                                    <a href="#">
                                        <img
                                            src="{{ asset('public/assets/images/profile.jpg')}}"
                                            class="img-fluid"
                                            style="border-radius:7px;height:150px;width:150px"
                                        >
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row ml-1">
                            <div class="card pro_gallery_img">
                                <div class="card-body">
                                    <a href="#">
                                        <img
                                            src="{{ asset('public/assets/images/profile.jpg')}}"
                                            class="img-fluid"
                                            style="border-radius:7px;height:150px;width:150px"
                                        >
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row ml-1">
                            <div class="card pro_gallery_img">
                                <div class="card-body">
                                    <a href="#">
                                        <img
                                            src="{{ asset('public/assets/images/profile.jpg')}}"
                                            class="img-fluid"
                                            style="border-radius:7px;height:150px;width:150px"
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
                                        src="{{ asset('public/assets/images/profile.jpg')}}"
                                        class="img-fluid image_hw"
                                        style="border-radius:7px;"
                                    >
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="slider">
                        <div class="row">
                            <div class="col-4">
                                <div class="card slide_img">
                                    <div class="card-body">
                                        <a href="#">
                                            <img
                                                src="{{ asset('public/assets/images/profile.jpg')}}"
                                                class="simage_hw"
                                                style="border-radius:7px;"
                                            >
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card slide_img">
                                    <div class="card-body">
                                        <a href="#">
                                            <img
                                                src="{{ asset('public/assets/images/profile.jpg')}}"
                                                class="simage_hw"
                                                style="border-radius:7px;"
                                            >
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card slide_img">
                                    <div class="card-body">
                                        <a href="#">
                                            <img
                                                src="{{ asset('public/assets/images/profile.jpg')}}"
                                                class="simage_hw"
                                                style="border-radius:7px;"
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
                                <table width="90%" cellpadding="15px" style="margin-top:-20px">
                                    <tr>
                                        <td colspan="2">
                                            <span class="fs-20">{{$product->name}}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="wallet_price">${{$product->price}}.00</span></td>
                                        {{-- <td>$800</td> --}}
                                    </tr>
                                    <tr>
                                        <td colspan="2"><span class="wallet_description">{{$product->describe_item}}</span></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="text-center wallet_visit_seller" style="width:180px;height:32px;">
                                                <a href=""><i class="fa-solid fa-circle-plus fa-2xl" style="color:#e2e3e5;"></i></a>
                                                <span class="text-reset wallet_font" style="margin:0% 27%">{{('5')}}</span>
                                                <a href=""><i class="fa-solid fa-circle-minus fa-2xl" style="color:#e2e3e5;"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-center wallet_visit_seller" style="height:34px">
                                            <a href="#" role="button" class="text-reset wallet_font">{{('Pay Now')}}</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center wallet_visit_seller" style="height:34px;width:180px">
                                                <a href="#" role="button" class="text-reset wallet_font">{{('Share Payment Link')}}</a>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
