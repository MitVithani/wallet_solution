@extends('layouts.app')

@section('page_css')
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="{{ asset('public/css/image-uploader.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <style>
        .toggle.ios, .toggle-on.ios, .toggle-off.ios { border-radius: 20rem; }
        .toggle-on, .btn-success{
            background-color: #a0d18c !important;
            color: black;
            border-color: #a0d18c !important;
        }
        .btn-danger, .toggle-off{
            background-color: gray !important;
            color: white;
            border-color: gray !important;
        }
        .toggle.ios .toggle-handle { border-radius: 20rem; }
    </style>
@endsection

@section('navbar_header')
{{-- <div class="container"> --}}

    <span class="navbar-brand add-item-text">
        Add item
    </span>
{{-- </div> --}}
@endsection

@section('content')
    {{-- <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Create User</h1>
                </div>
            </div>
        </div>
    </section> --}}

    <div class="content px-3">

        <div class="card">
            {!! Form::open(['route' => ['productUpdate'], 'method' => 'post']) !!}

            <div class="card-body">
                <input type="hidden" name="product_id" id="product_id" class="form-control" value="{{$productDtl->id ?? ''}}">

                {{-- <div class="row"> --}}
                    @include('products.fields')
                {{-- </div> --}}
            </div>

            <div class="card-footer">
                {!! Form::submit('Update', ['class' => 'btn btn-primary discountForm theamBtnColor']) !!}
                <a href="{{ route('products.index') }}" class="btn btn-default">Cancel</a>
            </div>
            {!! Form::close() !!}

        </div>
    </div>
@endsection

@section('page_scripts')
    <script src="{{ asset('public/js/image-uploader.min.js') }}"></script>

    <script>
        $('.product_img').imageUploader();
            $('#chkToggle').bootstrapToggle();
        // $(document).ready(function() {


            $(".btn-secondary").on('click', function() {
                var quantityval = $(this).children("input").val();
                if(quantityval == 0){
                    $('#quantity').css('display', '');
                }else{
                    $('#quantity').css('display', 'none');
                }
                // alert(quantityval);
            });
		// });

    </script>
@endsection
