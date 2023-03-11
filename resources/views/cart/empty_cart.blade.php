@extends('layouts.app')

@section('navbar_header')
    <div class="container">
        <span class="navbar-brand add-item-text">
            Add item
        </span>
    </div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <img class="empty-cart-imge" src="{{asset('public/img/empty_cart.png')}}"/>

            {{-- <div class="col-md-4"> --}}
            <h2 class="pt-4 font-weight-bold">
                Your cart is currently empty
            </h2>
            <h4 class="pt-4 bold ">
                As you create new items, they will be saved in your cart. You can always add or edit items from "cart" tab
            </h4>

            <a href="{{ route('products.create') }}" class="btn add-item-btn mt-5">
                Add a product or service
            </a>
            {{-- </div> --}}
            {{-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection
