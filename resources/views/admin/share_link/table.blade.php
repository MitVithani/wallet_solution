<div class="table-responsive">
    <table class="table " id="users-table" width="100%">
        <thead>
        <tr>
            <th>Name</th>
            <th>Shop</th>
            <th>Link</th>
            <th>Customer</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($shareLinks as $shareLink)
            <tr>
                {{-- {{dd($shareLink->user->name ?? 'hy')}} --}}
                <td>{{ $shareLink->user->name ?? '' }}</td>
                <td>{{ $shareLink->user->shop_name ?? '' }}</td>
                <td>{{ $shareLink->rand_link ?? '' }}</td>
                <td><a href="#" data-toggle="modal" data-target="#cusModal{{$shareLink->id}}">{{ !empty($shareLink->customer->name) ? $shareLink->customer->name : '' }}</a></td>
                <td>{{ ($shareLink->status == 1) ? 'Confirm' : '' }}</td>
                <td width="120">
                    <a data-toggle="modal" data-target="#productModal{{$shareLink->id}}" class='btn btn-default btn-xs'>
                        <i class="far fa-eye"></i>
                    </a>
                </td>
            </tr>

            <div class="modal fade" id="cusModal{{$shareLink->id}}" tabindex="-1" role="dialog" aria-labelledby="cusModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="cusModalLabel">Customer Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="message-text" class="col-form-label"><b>Message</b></label>
                                </div>
                                <div class="col-md-1">
                                    :
                                </div>
                                <div class="col-md-6">
                                    {{ $shareLink->customer->name ?? ''}}
                                </div>
                                <div class="col-md-5">
                                    <label for="message-text" class="col-form-label"><b>Email</b></label>
                                </div>
                                <div class="col-md-1">
                                    :
                                </div>
                                <div class="col-md-6">
                                    {{ $shareLink->customer->email ?? ''}}
                                </div>
                                <div class="col-md-5">
                                    <label for="message-text" class="col-form-label"><b>Phone Number</b></label>
                                </div>
                                <div class="col-md-1">
                                    :
                                </div>
                                <div class="col-md-6">
                                    {{ $shareLink->customer->phone_number ?? ''}}
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="productModal{{$shareLink->id}}" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="productModalLabel">Products Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div>
                                <div class="row">
                                    @foreach ($shareLink->shareUrlProduct as $shareUrlProduct)
                                        <div class="col-md-3 pt-3">
                                            <div>
                                                <img class="product-img" src="{{ !empty($shareUrlProduct->product->productImage[0]->image) ? asset($shareUrlProduct->product->productImage[0]->image) : ''}}" style="width: 70px; height: 70px;" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="align-self-center text-center p-2">
                                                <b>{{$shareUrlProduct->product->name}}</b>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="align-self-center text-center counter-number">
                                                {{$shareUrlProduct->quantity}}
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="align-self-center text-center">
                                                <b>USD <span id="product_price_{{$shareUrlProduct->product->id}}">{{$shareUrlProduct->discount_price}}</span></b>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="align-self-center text-center">
                                                <b>USD <span name="product_price_total" id="product_price_total_{{$shareUrlProduct->product->id}}" > {{$shareUrlProduct->quantity * $shareUrlProduct->discount_price}} </span></b>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        @endforeach
        </tbody>
    </table>
</div>
