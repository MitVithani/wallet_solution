@extends('mainlayout')

@section('content')

    <style>
        .wallet_card{
            border-radius: 15px;
            border:1px solid #03254C;
            box-shadow: 0px 0px 2px 2px #d4d3d3;
        }
    </style>

    <div class="container my-4">

        <div class="row">
            <div class="col-xl-10 mx-auto">
                <div class="row">
                    <div class="col-md-10">
                        <span class="fw-700 fs-22" style="color:#212529">{{ ('My Orders') }}</span>
                    </div>
                </div>
                <div class="card wallet_card">
                    <div class="card-body table-responsive-md">
                        <table class="table aiz-table mb-0">
                            <thead>
                                <tr>
                                    <th>{{ ('Order number')}}</th>
                                    <th>{{ ('Order Date')}}</th>
                                    <th>{{ ('Amount')}}</th>
                                    <th>{{ ('Delivery Status')}}</th>
                                    <th>{{ ('Payment Status')}}</th>
                                    <th class="text-right">{{ ('Options')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a style="color:#0077FF" href="#">{{ ('order_code') }}</a>
                                    </td>
                                    <td>{{ ('date')}}</td>
                                    <td>
                                        {{('grand_total') }}
                                    </td>
                                    <td>
                                        {{('status')}}
                                    </td>
                                    <td>
                                        {{('status')}}
                                    </td>
                                    <td class="text-right" width="10%">
                                        <div class="dropdown show">
                                            <a style="border-radius: 5px;
                                            color:black;
                                            border:1px solid #03254C !important;
                                            box-shadow: 0px 0px 10px 5px #f9f9f9;
                                            background-color:#ffffff !important" class="btn-sm btn-secondary d-flex justify-content-between px-3 py-0" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action<i class="fa-solid fa-caret-down mt-1 pl-1"></i>
                                            </a>

                                            <div  style="border-radius: 5px;border:1px solid #03254C !important;min-width:5.8rem !important" class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a href="#" class=" px-1 py-0 dropdown-item confirm-delete" data-href="#" title="{{ ('Cancel') }}"  style="font-size: 14px;">
                                                    <i class="las la-trash"></i>&nbsp;&nbsp;<span class="fs-12">Delete</span>
                                                </a>

                                                <a href="{{route('order_detail')}}" class=" px-1 py-0 dropdown-item" title="{{ ('Order Details') }}" style="font-size: 14px;">
                                                    <i class="las la-eye"></i>&nbsp;&nbsp;<span class="fs-12">View</span>
                                                </a>
                                                <a class=" px-1 py-0 dropdown-item" href="#" title="{{ ('Download Invoice') }}" style="font-size: 14px;">
                                                    <i class="las la-download"></i>&nbsp;&nbsp;<span class="fs-12">Download</span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
