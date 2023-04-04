@extends('layouts.app')

@section('page_css')
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="{{ asset('public/css/image-uploader.min.css') }}" rel="stylesheet">
    <style>

    </style>
@endsection
@section('navbar_header')
{{-- <div class="container"> --}}
    <span class="navbar-brand add-item-text">
        Client {{count($products)}} order
    </span>
{{-- </div> --}}
@endsection

@section('content')

    <div class="content px-3 product-list product-listscroll">
        <span class="float-right">
        <a class="btn btn-success" href="{{ route('products.create') }}" >+</a>
        </span>

        <table class="table product-table">
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>
                            <div class="">
                                <input name="product_ids" type="hidden" value="{{$product->id}}"/>
                                {{-- <img class="product-img" src="{{asset('public/img/empty_cart.png')}}" /> --}}
                                <img class="product-img" src="{{ !empty($product->productImage[0]->image) ? asset($product->productImage[0]->image) : ''}}" />

                            </div>
                        </td>
                        <td>
                            <div class="align-self-center text-center p-2">
                                <b>{{$product->name}}</b>
                            </div>

                            <div class="align-self-center text-center counter-number">
                                <span class="minus" onclick='ChangeQuantity("minus", {{$product->id}})'>-</span>
                                <input id="qun_{{$product->id}}" name="quantity" type="text" disabled value="{{$product->quantity}}"/>
                                <span class="plus" onclick='ChangeQuantity("plus", {{$product->id}})'>+</span>
                            </div>
                        </td>
                        <td>
                            <div class="align-self-center text-center">
                                <b>USD <span id="product_price_{{$product->id}}">{{$product->price}}</span></b>
                            </div>
                        </td>
                        <td class="position-relative">
                            <div class="align-self-center text-center">
                                <b>USD <span name="product_price_total" id="product_price_total_{{$product->id}}" >0</span></b>
                            </div>
                            <div class="position-absolute top-100 start-50 translate-middle fixed-bottom" data-toggle="modal" data-target="#discount" data-whatever="{{$product->id}}">
                                Apply discount
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        <hr>

    </div>
    <div class="card p0 m0 bottomNavbar">
        <div class="col-12 row pt-2 pr-0">
            <div class="col-9">
                Cart Locked<br>
                Item quatity not editable by customer.
            </div>
            <div class="col-3 webkit-right pr-0">
                <input type="checkbox" />
            </div>
        </div>
        <div class="col-12 row pt-2 pr-0">
            <div class="col-9">
                Subtotal
            </div>
            <div class="col-3 webkit-right pr-0">
                <b>USD <span id="subtotal">0</span></b>
            </div>
        </div>
        <div class="col-12 row pt-2 pr-0 ">
            <div class="col-9">
                Send Order
            </div>
            <div class="col-3 webkit-right pr-0">
                <b>USD <span id="sendorder">0</span></b>
            </div>
        </div>
        <div class="share-icon-div">
            <table class="">
                <tr>
                    <td>
                        <a class="d-none whatsapp a" href="whatsapp://send?text={{ url('usersProducts'). '/' . $user_id}}">
                        </a>
                        <div onclick="whatsapp()" href="whatsapp://send?text={{ url('usersProducts'). '/' . $user_id}}">
                            <img class="share-img" src="{{asset('public/img/whatsapp.png')}}">
                        </div>
                    </td>
                    <td>
                        <button onclick="qrCodeScan()" type="button" class="btn " data-toggle="modal" data-target="#qr-code">
                            <img class="share-img" src="{{asset('public/img/qr-code-scan.png')}}">
                          </button>
                    </td>
                    <td>
                        <img class="share-img" onclick="copyToClipboard()" src="{{asset('public/img/link.png')}}">
                    </td>
                    <td>
                        <img class="share-img" onclick="more()" src="{{asset('public/img/more.png')}}" style="cursor: pointer">
                    </td>
                </tr>
                <tr>
                    <td>
                        WhatsApp
                    </td>
                    <td>
                        QR Code
                    </td>
                    <td>
                        Copy Link
                    </td>
                    <td>
                        More
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="qr-code">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">QR Code</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <img id='barcode' src="https://api.qrserver.com/v1/create-qr-code/?data={{ url('usersProducts'). '/' . $user_id}}&amp;size=470x470" alt=""  width="100%" height="auto" />
                </div>

                {{-- <!-- Modal footer -->
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div> --}}

            </div>
        </div>
    </div>
    <div class="modal fade" id="discount">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Discounts</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="card-body mb-12">
                        <div class="form-check">
                                <input type="hidden" id="productId">
                                <input class="form-check-input" type="radio" name="discountRB" id="discount1" value="flat" checked>
                                <label class="form-check-label" for="discount1">
                                    Flat
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="discountRB" id="discount2" value="percentage">
                                <label class="form-check-label" for="discount2">
                                    % Discount
                                </label>
                        </div>

                        <div class="form-outline">
                            <input type="text" name="discountAmt" id="discountAmt" class="form-control" required>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <div class="footer">
                        {{-- {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!} --}}
                        <button type="button" class="btn btn-primary discountForm" data-dismiss="modal" >Submit</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('page_scripts')
    <script>
        $(document).ready(function() {
            $(".discountForm").click(function(){
                var discountAmt = $('#discountAmt').val();
                var productId = $('#productId').val();
                var discountType = $("input[name='discountRB']:checked").val();
                $.ajax({
                    url: "{{ url('change_discount') }}",
                    type: 'POST',
                    data: {_token:  $('meta[name="csrf-token"]').attr('content'), discountAmt: discountAmt, product_id: productId, discountType: discountType},
                    dataType: 'JSON',
                    success: function (res) {

                    }
                });
            })

            $('#discount').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var recipient = button.data('whatever') // Extract info from data-* attributes
                var modal = $(this)
                modal.find('#productId').val(recipient)
            })

            priceCount();
		});

        function whatsapp() {

        }

        function qrCodeScan() {

        }

        function more() {

        }

        function priceCount(){
            var subtotal= 0;
            var sendorder= 0;
            $('input[name^="product_ids"]').each(function(){
                var product_id = $(this).val();
                var product_price = $('#product_price_' + product_id).text();
                var product_quantity = $('#qun_' + product_id).val();
                product_price_total_val = product_price * product_quantity;
                $('#product_price_total_' + product_id).text(product_price_total_val);
                sendorder += product_price_total_val;
                subtotal += product_price_total_val;
            });
            $('#subtotal').text(subtotal);
            $('#sendorder').text(sendorder);
        }

        function ChangeQuantity(p_type, product_id){
            var $input = $('#qun_' + product_id);
            if(p_type == "minus"){
                var count = parseInt($input.val()) - 1;
            }else if(p_type == "plus"){
                var count = parseInt($input.val()) + 1;
            }
            count = count < 0 ? 0 : count;
            $.ajax({
                url: "{{ url('change_quantity') }}",
                type: 'POST',
                data: {_token:  $('meta[name="csrf-token"]').attr('content'), count: count, product_id: product_id},
                dataType: 'JSON',
                success: function (res) {
                    $input.val(count);
                    $input.change();
                    var product_price = $('#product_price_' + product_id).text();
                    product_price_total_val = product_price * count;
                    $('#product_price_total_' + product_id).text(product_price_total_val);
                    priceCount();
                }
            });
        }

        function copyToClipboard() {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val("{{ url('usersProducts'). '/' . $user_id}}").select();
            document.execCommand("copy");
            $temp.remove();
        }

    </script>
@endsection
