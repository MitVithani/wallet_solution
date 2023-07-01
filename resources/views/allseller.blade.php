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
    @media only screen and (max-width: 800px) {
    .card{
        width: 168px !important;
    }
    .wallet_margin{
        margin-left: 0px !important;
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
        column-gap: 22px !important;
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
        border-radius: 7px 7px 7px 7px;
    }
    .col-12    {
        margin: 0% !important;
        padding: 1% !important;
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
    </style>

    <section class="pt-4 mb-2">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="fw-600 h4">{{('All Shops') }}</h1>
                </div>
            </div>
    </section>
    <hr style="height:1px;color:#d5dbdb;background-color:#d5dbdb;margin-top:1px;">
        <section class="mb-4">
            <div class="container">
                <div class="row wallet_margin">
                    @foreach ($shops as $key => $shop)
                        {{-- <div class="text-center border border-light rounded my-2 mx-2">
                                <div class="col-12 text-center"> --}}
                                    <div class="card my-3" style="border: none;width:210px">
                                        <div class="card-body" style="padding: 3%">
                                            <a href="{{route('product_list',['id'=>$shop->id])}}">
                                                <img
                                                    src="{{ asset('public/logo/'.$shop->logo)}}"
                                                    class="img-fluid"
                                                    style="height: 135px !important;width:215px;border-radius:7px;"
                                                >
                                            </a>
                                            <div class="col-12">
                                                <div class="">
                                                    <h2 class="h6 fw-600 text-center">
                                                        <a href="{{route('product_list',['id'=>$shop->id])}}" class="text-reset">{{$shop->shop_name}}</a>
                                                    </h2>
                                                    <div style="width: 100% !important;">
                                                        <div class="text-center wallet_visit_seller">
                                                            <a href="{{route('product_list',['id'=>$shop->id])}}" class="text-reset">{{('Visit Seller')}}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                    @endforeach
                </div>
            </div>
            {{ $shops->links() }}
        </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
