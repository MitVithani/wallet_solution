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
                                <input id="discount_type_{{$product->id}}" type="hidden" value="{{$product->discount_type}}"/>
                                <input id="discount_{{$product->id}}" type="hidden" value="{{$product->discount}}"/>
                                <input id="discount_price_{{$product->id}}" type="hidden" value="{{$product->discount_price}}"/>
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
                            <div class="position-absolute top-100 start-50 translate-middle fixed-bottom p-1" data-toggle="modal" data-target="#discount" data-whatever="{{$product->id}}">
                                Apply discount
                            </div>
                        </td>
                    </tr>

                    <div class="modal fade" id="product_img_{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="product_img_Label" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Product Detils</h4>
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
                                                    <h3 class="product-title">{{$product->name}} <a href="{{ url('edit') . '/' . $product->id }}"><i class="fa fa-edit"></i> </a> </h3>
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
@endsection

@section('page_scripts')
    <script>
        $(document).ready(function() {

            $('#cart_lock').click(function() {
                if(!$(this).is(':checked')){
                    $('.product-list').removeClass('product_list_disable');
                }
                else
                {
                    $('.product-list').addClass('product_list_disable');
                }
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
                        var discount_price = $('#discount_price_' + productId).val(res);
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

            priceCount();
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
            $.ajax({
                url: "{{ url('save_link') }}",
                type: 'POST',
                data: {_token:  $('meta[name="csrf-token"]').attr('content'), link: link},
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
                    if(discount_type != '' && discount != ''){
                        discountTotal +=  product_price - discount_price;
                    }
                    subtotal += product_price_total_val;
                }
            });
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
                        priceCount();
                    }
                });
            }
        }

    </script>
@endsection
