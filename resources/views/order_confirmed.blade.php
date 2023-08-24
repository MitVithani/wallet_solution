@extends('mainlayout')
<style>
    .card{
    box-shadow: 0px 0px 10px 5px rgb(207, 206, 206);
}
</style>


@section('content')

<section class="py-4">
    <div class="container text-left">
        <div class="row">
            <div class="col-xl-10 mx-auto">
                @php
                    // $first_order = $combined_order->orders->first()
                @endphp
                <div class="text-center py-4 mb-4">
                    <i class="la la-check-circle la-3x text-success mb-3"></i>
                    <h1 class="h3 mb-3 fw-600">{{ ('Thank You for Your Order!')}}</h1>
                </div>
                <div class="card border-0 rounded mb-4">
                    <div class="card-body">
                        <h5 class="fw-600 mb-3 fs-19 pb-2">{{ ('Order Summary')}}</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <table class="table noborder">
                                    <tr>
                                        <td class="w-50 fw-600">{{ ('Order date')}}:</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="w-50 fw-600">{{ ('Name')}}:</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="w-50 fw-600">{{ ('Email')}}:</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="w-50 fw-600">{{ ('Shipping address')}}:</td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table class="table noborder">
                                    <tr>
                                        <td class="w-50 fw-600">{{ ('Order status')}}:</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="w-50 fw-600">{{ ('Total order amount')}}:</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="w-50 fw-600">{{ ('Shipping')}}:</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="w-50 fw-600">{{ ('Payment method')}}:</td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 pt-2">
                        <div class="card  border-0 rounded">
                            <div class="card-body">
                                <div class="text-center py-4 mb-4">
                                    <h2 class="h5">{{ ('Order Code:')}} <span class="fw-700 text-success">{{('989765')}}</span></h2>
                                </div>

                                    <h5 class="fw-600 mb-3 fs-17 pb-2">{{ ('Order Details')}}</h5>
                                    <div class="">
                                        <table class="table aiz-table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th width="30%">{{ ('Product')}}</th>
                                                    <th>{{ ('Variation')}}</th>
                                                    <th data-breakpoints="md">{{ ('Quantity')}}</th>
                                                    <th data-breakpoints="md">{{ ('Delivery Type')}}</th>
                                                    <th class="text-right">{{ ('Price')}}</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                    <tr>
                                                        <td>{{ ('1') }}</td>
                                                        <td>{{('Product Name')}}
                                                        </td>
                                                        <td>
                                                            {{ ('variation') }}
                                                        </td>
                                                        <td>
                                                            {{ ('1') }}
                                                        </td>
                                                        <td>

                                                        </td>
                                                        <td class="text-right"></td>
                                                    </tr>

                                            </tbody>
                                        </table>
                                    </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pt-2">
                        <div class="card  border-0 rounded">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-5 col-md-6 mr-0">
                                        <table class="table noborder">
                                            <tbody>
                                                <tr>
                                                    <th>{{ ('Subtotal')}}</th>
                                                    <td class="">
                                                        <span class="fw-600">{{('price') }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>{{ ('Shipping')}}</th>
                                                    <td class="">
                                                        <span class="fw-600">{{('shipping_cost') }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>{{ ('Tax')}}</th>
                                                    <td class="">
                                                        <span class="fw-600">{{('tax') }}</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th>{{ ('Total')}}</th>
                                                    <td class="">
                                                        <span class="fw-600">{{('1000')}}</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
</section>
@endsection
