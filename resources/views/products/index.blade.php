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

        <span class="float-left">
            <div class="btn cust-product-btns" onclick="clearAllqty()" >Clear All</div>
        </span>
        <span class="float-right">
            <a class="btn cust-product-btns" style="font-size: 20px" href="{{ route('products.create') }}" >+</a>
        </span>

        <table class="table product-table">
            <tbody>
                @foreach ($products as $product)
                    <tr id="product_tr_{{$product->id}}" class='{{($product->quantity == 0) ? "emptyQtyTableTab" : ""  }}' >
                        <td>
                            <div>
                                <input name="product_ids" type="hidden" value="{{$product->id}}"/>
                                <input id="discount_type_{{$product->id}}" name="discount_type" type="hidden" value="{{$product->discount_type}}"/>
                                <input id="discount_{{$product->id}}" name="discount" type="hidden" value="{{$product->discount}}"/>
                                <input id="discount_price_{{$product->id}}" name="discount_price" type="hidden" value="{{$product->discount_price}}"/>
                                {{-- <img class="product-img" src="{{asset('public/img/empty_cart.png')}}" /> --}}
                                <img id="product_img_{{$product->id}}" data-toggle="modal" data-target="#product_img_{{$product->id}}"  class="product-img" src="{{ !empty($product->productImage[0]->image) ? asset($product->productImage[0]->image) : ''}}" />

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
                            <div class="position-absolute top-100 start-50 translate-middle fixed-bottom p-1 text-danger" data-toggle="modal" data-target="#discount" data-whatever="{{$product->id}}">
                                Apply discount
                            </div>
                        </td>
                    </tr>

                    <div class="modal fade" id="product_img_{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="product_img_Label" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Product Detils</h4>
                                    <a href="{{ url('edit') . '/' . $product->id }}" class="close add-item-text">Edit</a>
                                    <a href="{{ url('delete') . '/' . $product->id }}" class="close add-item-text">Delete</a>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="card p-3">

                                        <div class="container-fliud">
                                            <div class="wrapper row">
                                                <div class="preview col-md-6">

                                                    <div class="preview-pic tab-content">
                                                      <div class="tab-pane active"><img id="main_product_image{{$product->id}}" src="{{ !empty($product->productImage[0]->image) ? asset($product->productImage[0]->image) : ''}}" /></div>

                                                    </div>
                                                    <ul class="preview-thumbnail nav nav-tabs">
                                                        @if(!empty($product->productImage))
                                                        @foreach ($product->productImage as $productImage)
                                                            <li><img onclick="changeImage(this, '{{$product->id}}')" src="{{$productImage->image}}" /></li>
                                                        @endforeach
                                                        @endif
                                                    </ul>
                                                </div>
                                                <div class="details col-md-6">
                                                    <h3 class="product-title">{{$product->name}}</h3>
                                                    <p class="product-description">{{$product->additional_details}}</p>
                                                    <p>Describe Item:
                                                        <span class="product-description">{{$product->describe_item}}</span>
                                                    </p>
                                                    <h5 class="quantity">quantity: <span>${{$product->quantity}}</span></h5>
                                                    <h5 class="">Current Price: <span>${{$product->price}}</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>

        <hr>

    </div>
    <div class="container card p0 m0 bottomNavbar">
        <div class="col-12 row pt-2 pr-0">
            <div class="col-9">
                Cart Locked<br>
                Item quatity not editable by customer.
            </div>
            <div class="col-3 webkit-right pr-0">
                <input type="checkbox" id="cart_lock"/>
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
        <div class="col-12 row pt-2 pr-0">
            <div class="col-9">
                Delivary Charge
            </div>
            <div class="col-3 webkit-right pr-0" data-toggle="modal" data-target="#delivaryCharge">
                <b>USD <span id="delChargeTotal">0</span></b>
            </div>
        </div>
        <div class="col-12 row pt-2 pr-0">
            <div class="col-9">
                Discount Total
            </div>
            <div class="col-3 webkit-right pr-0">
                <b>USD <span id="discountTotal">0</span></b>
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
                        <a class="d-none whatsapp a" href="whatsapp://send?text={{ url('usersProducts'). '/' . $link}}">
                        </a>
                        <div onclick="whatsapp()" href="whatsapp://send?text={{ url('usersProducts'). '/' . $link}}">
                            <img class="share-img" style="margin-left: 10px;" src="{{asset('public/img/whatsapp.png')}}">
                        </div>
                        <div>
                            WhatsApp
                        </div>
                    </td>
                    <td>
                        <span onclick="qrCodeScan()" data-toggle="modal" data-target="#qr-code">
                            <img class="share-img" style="margin-left: 6px;" src="{{asset('public/img/qr-code-scan.png')}}">
                        </span>
                        <div>
                            QR Code
                        </div>
                    </td>
                    <td>
                        <img class="share-img" style="margin-left: 10px;" onclick="copyToClipboard()" src="{{asset('public/img/link.png')}}">
                        <div>
                            Copy Link
                        </div>
                    </td>
                    <td>
                        <img class="share-img" style="margin-left: -6px;" onclick="more()" src="{{asset('public/img/more.png')}}" style="cursor: pointer">
                        <div>
                            More
                        </div>
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
                    <img id='barcode' src="https://api.qrserver.com/v1/create-qr-code/?data={{ url('usersProducts'). '/' . $link}}&amp;size=470x470" alt=""  width="100%" height="auto" />
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
                        <button type="button" class="btn btn-primary discountForm theamBtnColor" data-dismiss="modal" >Submit</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="delivaryCharge">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Delivary Charges</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="card-body mb-12">
                        <div class="form-outline">
                            <input type="text" name="delivary_charge" id="delivary_charge" class="form-control" required>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <div class="footer">
                        {{-- {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!} --}}
                        <button type="button" class="btn btn-primary delivaryCharge theamBtnColor" >Submit</button>
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

            priceCount();

            $('#cart_lock').click(function() {
                if(!$(this).is(':checked')){
                    $('.product-list').removeClass('product_list_disable');
                }
                else
                {
                    $('.product-list').addClass('product_list_disable');
                }
            });

            $(".delivaryCharge").click(function(){
                var delivary_charge = $('#delivary_charge').val();
                localStorage.setItem('delivary_charge', delivary_charge);
                // $('#delChargeTotal').text(delivary_charge);
                priceCount();

            });

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
                        var discount_price = $('#discount_price_' + productId).val(res.discount_price);
                        var discount_price = $('#discount_' + productId).val(res.discount);
                        var discount_type = $('#discount_type_' + productId).val(res.discount_type);
                        priceCount();
                    }
                });
            })

            $('#discount').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var recipient = button.data('whatever') // Extract info from data-* attributes
                var modal = $(this)
                modal.find('#productId').val(recipient)
            })

		});

        function whatsapp() {
            if (confirm('Are you sure you went to create new link ?')) {
                var sUrl = `{{ url('usersProducts'). '/' . $link}}`;
                console.log(sUrl);
                var sMsg = encodeURIComponent(sUrl);
                var whatsapp_url = "whatsapp://send?text=" + sMsg;
                window.location.href = whatsapp_url;
                saveLink();
            }
        }

        function copyToClipboard() {
            if (confirm('Are you sure you went to create new link ?')) {
                saveLink();
                var $temp = $("<input>");
                $("body").append($temp);
                $temp.val("{{ url('usersProducts'). '/' . $link}}").select();
                document.execCommand("copy");
                $temp.remove();
            }
        }

        function qrCodeScan() {
            if (confirm('Are you sure you went to create new link ?')) {
                saveLink();
            }
        }

        function more() {
            if (confirm('Are you sure you went to create new link ?')) {
                saveLink();
            }
        }

        function saveLink(){
            var link = "{{ $link }}";
            var delivary_charge = localStorage.getItem('delivary_charge');
            $.ajax({
                url: "{{ url('save_link') }}",
                type: 'POST',
                data: {_token:  $('meta[name="csrf-token"]').attr('content'), link: link, delivary_charge: delivary_charge},
                dataType: 'JSON',
                success: function (res) {

                }
            });
        }
        function changeImage(element, product_id) {
            var main_prodcut_image = document.getElementById('main_product_image' + product_id);
            main_prodcut_image.src = element.src;
        }

        function priceCount(){
            var subtotal= 0;
            var sendorder= 0;
            var discountTotal= 0;
            $('input[name^="product_ids"]').each(function(){
                var product_id = $(this).val();
                var product_price = $('#product_price_' + product_id).text();
                var product_quantity = $('#qun_' + product_id).val();
                var discount_type = $('#discount_type_' + product_id).val();
                var discount = $('#discount_' + product_id).val();
                var discount_price = $('#discount_price_' + product_id).val();
                // console.log(discount_type + ' - ' + discount + ' - ' + discount_price);
                if(product_quantity == 0){
                    $('#product_tr_' + product_id).addClass('emptyQtyTableTab');
                }else{
                    $('#product_tr_' + product_id).removeClass('emptyQtyTableTab');
                    product_price_total_val = product_price * product_quantity;
                    $('#product_price_total_' + product_id).text(product_price_total_val);
                    sendorder += product_price_total_val;
                    if(discount_type == 'flat' && discount != ''){
                        discountTotal +=  product_price - discount_price;
                    }else if(discount_type == 'percentage' && discount != ''){
                        discountTotal +=  discount_price * product_quantity;
                    }

                    subtotal += product_price_total_val;
                }
            });
            var delivary_charge = localStorage.getItem('delivary_charge');
            $('#delChargeTotal').text(delivary_charge);
            $('#subtotal').text(subtotal);
            $('#discountTotal').text((Math.round(discountTotal * 100) / 100).toFixed(2));
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

        function clearAllqty() {
            if (confirm('Are you sure you went to clear all product quantity?')) {
                $.ajax({
                    url: "{{ url('clear_quantity') }}",
                    type: 'POST',
                    data: {_token:  $('meta[name="csrf-token"]').attr('content')},
                    dataType: 'JSON',
                    success: function (res) {
                        $('input[name^="quantity"]').each(function(){
                            $(this).val(0);
                        });
                        $('input[name^="discount_type"]').each(function(){
                            $(this).val('');
                        });
                        $('input[name^="discount"]').each(function(){
                            $(this).val('');
                        });
                        $('input[name^="discount_price"]').each(function(){
                            $(this).val('');
                        });
                        priceCount();
                    }
                });
            }
        }

    </script>
@endsection
