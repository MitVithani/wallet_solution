<!doctype html>
<html lang="en">
  <head>
    <title>all sellers</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

<style>
.wallet_font{
    font-weight: 600;
}
.wallet_strike{
    text-decoration: line-through;
    color:#9da3a3;
}
@media only screen and (max-width: 800px) {
    .product_box{
        width:180px !important;
        height:280px !important;
    }
    .wallet_margin{
        display: flex;
        flex-direction: ltr;
        flex-wrap: wrap;
        align-content: center !important;
        column-gap: 10px !important;
        margin-left: 10px !important;
        }
}
section {
    display: block;
    margin: 0% !important;
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
    background-image: linear-gradient(#11CFF1, #94FFBA);
    color: #ffffff;
    width: 100%;
    padding: 3px 5px;
    border-radius: 25px 25px;
}
.wallet_product_disc{
    background-image: linear-gradient(#11CFF1, #94FFBA);
    height: 30px;
    width: 30px;
    border-radius: 50%;
    display: inline-block;
    font-size: 10px;
    color: white;
    font-weight: 600;
}
.product_box{
    border:1px solid rgb(22, 205, 187);
    width:200px;
    height:300px;
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
.container{
    padding: 0% !important;
}
a{
    text-decoration: none !important;
}
</style>

    <section class="pt-4 mb-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="fw-600 h4">{{('All Products') }}</h1>
                </div>
            </div>
        </div>
    </section>
    <hr style="height:1px;color:#d5dbdb;background-color:#d5dbdb;margin-top:1px;">
        <section class="mb-4">
            <div class="container">
                <div class="row wallet_margin">
                    @if(count($products)!='0')
                        @foreach ($products as $key => $product)
                            @if($product->is_visible == "on")
                                @php
                                    $product_id = $product->id;
                                    $productdata=\App\Models\Product_Image::where('p_id',$product_id)->first();
                                    $product_img=$productdata->image ?? '';
                                @endphp
                                    <div class="card my-3 product_box">
                                        <div class="card-body" style="padding: 3%">
                                                {{-- <div class="col-4" style="margin-left:145px;margin-bottom:-15px">
                                                    <div class="wallet_product_disc text-center">
                                                            <p class="mt-2">-{{('77')}}%</p>
                                                    </div>
                                                </div> --}}
                                            <a href="{{route('product_detail',['pid'=>$product->id])}}">
                                                <img
                                                    src="{{ asset($product_img)}}"
                                                    class="img-fluid"
                                                    style="height: 160px !important;width:190px;border-radius:7px;"
                                                >
                                            </a>
                                            <div class="col-12">
                                                    <div class="text-center wallet_font" style="height:30px">
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
                        @endforeach
                    @else
                         {{('no product funds')}}
                    @endif
                </div>
            </div>
            {{-- {{ $products->links() }} --}}
        </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
