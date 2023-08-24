@extends('mainlayout')

@section('content')
    <style>
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
        .fsize{
            font-size: 18px;
            font-weight: 500;
        }
        h2,h4{
            color: #546A86;
        }
        .main_content{
            margin-top:-150px
        }

    </style>

    <div class="container mb-4">
        <img src="{{ asset('public/img/left.png')}}" alt="" style="margin-left:-70px" width="12%">
        <div class="col-md-12 text-center main_content">
            <h2>About Us</h2>
            <div class="mt-4 fsize">
                Are you hoping to grow your company to new heights and achieve record sales?
                For you, we provide the intriguing solution of 4pay
            </div>
            <div class="mt-4">
                Your company can prosper in the digital era with *, communicating with consumers in ways that have never been possible before, and easily turning more sales. Our state-of-the-art E-Commerce platform provides your customers with a smooth and user-friendly purchase experience, increasing engagement and brand loyalty.
                We recognize that launching a new business or being in the beginning phases of one might seem like a difficult endeavor. There are other factors to take into account, such as creating an online presence, choosing the ideal items for your target market, and figuring out the intricacies of payment processing.
            </div>
            <h4 class="mt-4">But don't worry, you're insured by us</h4>
            <div class="mt-4 mb-4 fsize">
                Let us work with you to achieve success. Join the growing number of business owners who have trusted us with their goals and seen incredible outcomes.
                Start working with 4pay right away to learn how we can make your company dreams a reality.
            </div>
        </div>
        <img src="{{ asset('public/img/right.png')}}" alt="" class="right_vector_img" style="margin-top:-100px" width="12%">
    </div>

@endsection
