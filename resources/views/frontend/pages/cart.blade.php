@extends('frontend.layouts.master')
@section('title', 'Cart Page')
@section('main-content')
  <!-- Breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="bread-inner">
            <ul class="bread-list">
              <li><a href="{{ 'home' }}">Home<i class="ti-arrow-right"></i></a></li>
              <li class="active"><a href="">Cart</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Breadcrumbs -->

                {{-- @dd($products) --}}
                {{-- @dd(Session::get('coupon')) --}}
                {{-- @dd(Auth::user()->email) --}}
  <!-- Shopping Cart -->
  <div class="shopping-cart section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
          <!-- Shopping Summery -->
          <div class="shopping-summary">
            <div class="row">
              <div class="col-12">
                <h4 class="pt-2 pl-3 pb-1 text-white bg-primary">Cart Items</h4>
                <form action="{{ route('cart.update') }}" method="POST">
                  @csrf
                  {{-- @dd(Helper::getAllProductFromCart()) --}}
                  @foreach (Helper::getAllProductFromCart() as $key => $cart)
                  {{-- @dd($cart->product['summary']) --}}
                  {{-- @dump($product) --}}
                  @php
                    $photo = explode(',', $cart->product['photo']);
                  @endphp

                  <ul class="list-group my-2">
                    <div class="list-group-item list-group-item-action d-flex align-items-center">
                      <div class="obj-fit-parent" style="width: 150px;">
                        <img src="{{ $photo[0] }}" class="img-fluid" alt="quixote">
                      </div>   
                      <div class="flex-column">
                        <h5 class="product-name card-title"><a href="{{ route('product-detail', $cart->product['slug']) }}" target="_blank">{{ $cart->product['title'] }}</a></h5>
                        <ul>
                          <li>{!!$cart->product['summary']!!}</li>
                          <li>Cosmatic condition: <span class="badge badge-info badge-pill">{{$cart->product['condition']}}</span></li>
                        </ul>
                        <div class="input-group qty d-inline-block">
                          <span class="button minus">
                            <button type="button" class="btn btn-grest btn-number" {{($cart->quantity == 1)? 'disabled': ''}} data-type="minus" data-field="quant[{{ $key }}]">
                              <i class="ti-minus"></i>
                            </button>
                          </span>
                          <input type="text" name="quant[{{ $key }}]" class="input-number text-center" data-min="1" data-max="100" value="{{ $cart->quantity }}">
                          <input type="hidden" name="qty_id[]" value="{{ $cart->id }}">
                          <span class="button plus">
                            <button type="button" class="btn btn-grest btn-number" data-type="plus" data-field="quant[{{ $key }}]">
                              <i class="ti-plus"></i>
                            </button>
                          </span>
                        </div>
                        <a href="{{ route('cart-delete', $cart->id) }}" class="mx-4"><i class="fa fa-trash fa-2x"></i></a>
                        <button class="btn btn-info float-md-right d-inline-block" type="submit">Update</button>
                        <h5 class="ml-auto red-link d-inline-block my-2">??? {{ number_format($cart->quantity * $cart['price']) }}</h5>
                        <span class="ml-auto my-2"><del>??? {{ number_format($cart->quantity * $cart->product['price']) }}</del></span>
                      </div>
                    </div>
                  </ul>

                  @endforeach
                </div>
              </form>
            </div>
          </div>

          <table class="table d-none shopping-summery">
            <thead>
              <tr class="main-hading">
                <th>PRODUCT</th>
                <th>NAME</th>
                <th class="text-center">UNIT PRICE</th>
                <th class="text-center">QUANTITY</th>
                <th class="text-center">TOTAL</th>
                <th class="text-center"><i class="ti-trash remove-icon"></i></th>
              </tr>
            </thead>            
            <tbody id="cart_item_list">
              <form action="{{ route('cart.update') }}" method="POST">
                @csrf
                @if (Helper::totalCartPrice() != 0)
                  @foreach (Helper::getAllProductFromCart() as $key => $cart)
                  {{-- @dd($cart); --}}
                    <tr>
                      @php
                        $photo = explode(',', $cart->product['photo']);
                      @endphp
                      <td class="image" data-title="No"><img data-toggle="modal" data-target="#quickViewModal" src="{{ $photo[0] }}" alt="{{ $photo[0] }}"></td>
                      <td class="product-des" data-title="Description">
                        <p class="product-name"><a href="{{ route('product-detail', $cart->product['slug']) }}" target="_blank">{{ $cart->product['title'] }}</a></p>
                        <p class="product-des">{!! $cart['summary'] !!}</p>
                      </td>
                      <td class="price" data-title="Price"><span>??? {{ number_format($cart['price']) }}</span></td>
                      @php
                        // dd($cart);
                      @endphp
                      <td class="qty" data-title="Qty">
                        <!-- Input Order -->
                        <div class="input-group">
                          <div class="button minus">
                            <button type="button" class="btn btn-grest btn-number" {{($cart->quantity == 1)? 'disabled': ''}} data-type="minus" data-field="quant[{{ $key }}]">
                              <i class="ti-minus"></i>
                            </button>
                          </div>
                          <input type="text" name="quant[{{ $key }}]" class="input-number" data-min="1" data-max="100" value="{{ $cart->quantity }}">
                          <input type="hidden" name="qty_id[]" value="{{ $cart->id }}">
                          <div class="button plus">
                            <button type="button" class="btn btn-grest btn-number" data-type="plus" data-field="quant[{{ $key }}]">
                              <i class="ti-plus"></i>
                            </button>
                          </div>
                        </div>
                        <!--/ End Input Order -->
                      </td>
                      <td class="total-amount cart_single_price" data-title="Total"><span class="money">??? {{ number_format($cart->quantity * $cart['price']) }}</span></td>

                      <td class="action" data-title="Remove"><a href="{{ route('cart-delete', $cart->id) }}"><i class="ti-trash remove-icon"></i></a></td>
                    </tr>
                  @endforeach
                  <track>
										<td class="text-right" colspan="6">
											<button class="btn btn-info float-right" type="submit">Update</button>
										</td>
                  </track>
                @else
                  <tr>
                    <td class="text-center" colspan="6">
                      There are no items in the cart. <a href="{{ route('product-grids') }}">Continue shopping</a>

                    </td>
                  </tr>
                @endif
                {{-- @dd(Helper::getAllProductFromCart()) --}}

              </form>
            </tbody>
          </table>
          <!--/ End Shopping Summery -->
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          @if (Helper::totalCartPrice() != 0)
          <h4 class="pt-2 pl-3 pb-1 text-white bg-primary">Cart Totals</h4>
          <div class="right">
            <ul>
              <li class="order_subtotal" data-price="{{ Helper::totalCartPrice() }}">Cart Subtotal<span  class="font-weight-bold">??? {{ number_format($cartTotal) }}</span></li>
              <li class="order_subtotal" data-price="{{ Helper::totalCartPrice() }}">You Save<span  class="font-weight-bold green-link">- ??? {{ number_format($cartTotal - Helper::totalCartPrice()) }}</span></li>
              <li class="order_subtotal" data-price="{{ Helper::totalCartPrice() }}">Cart Total<span  class="font-weight-bold red-link font-large">??? {{ number_format(Helper::totalCartPrice()) }}</span></li>
              {{-- <div id="shipping" style="display:none;">
                <li class="shipping">
                  Shipping {{session('shipping_price')}}
                  @if (count(Helper::shipping()) > 0 && Helper::cartCount() > 0)
                    <div class="form-select">
                      <select name="shipping" class="nice-select">
                        <option value="">Select</option>
                        @foreach (Helper::shipping() as $shipping)
                        <option value="{{$shipping->id}}" class="shippingOption" data-price="{{$shipping->price}}">{{$shipping->type}}: ??? {{$shipping->price}}</option>
                        @endforeach
                      </select>
                    </div>
                  @else 
                    <div class="form-select">
                      <span>Free</span>
                    </div>
                  @endif
                </li>
              </div> --}}
              {{-- @if (session()->has('coupon'))
                <li class="coupon_price" data-price="{{ $couponVal }}">You Save<span class="green-link">??? {{ number_format($couponVal) }}</span></li>
              @endif
              @php
                $total_amount = Helper::totalCartPrice();
                if (session()->has('coupon')) {
                    $total_amount = $total_amount - $couponVal;
                }
              @endphp
              @if (session()->has('coupon'))
                <li class="last" id="order_total_price">You Pay<span>??? {{ number_format($total_amount, 0) }}</span></li>
              @else
                <li class="last" id="order_total_price">You Pay<span>??? {{ number_format($total_amount, 0) }}</span></li>
              @endif --}}
            </ul>
            <div class="button5">
              <a href="{{ route('checkout') }}" class="btn w-100 {{(Helper::totalCartPrice() == 0)? 'disabled-link' : ''}} btn-grest checkout-btn">Checkout</a>
              <a href="{{ route('product-grids') }}" class="btn text-dark"><i class="fa fa-angle-double-left"></i> Continue shopping</a>
            </div>
          </div>
          @endif

        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <!-- Total Amount -->
          <div class="total-amount">
            <div class="row">
              <div id="app" class="col-12 d-none">
              {{-- <div class="col-lg-8 col-md-5 col-12">
                <div class="left">
                  <div class="coupon">
									<form action="{{route('coupon-store')}}" method="POST">
											@csrf
											<input name="code" placeholder="Enter Your Coupon">
											<button class="btn btn-grest">Apply</button>
										</form>
									</div> --}}
                  {{-- <div class="checkbox">`
										@php 
											$shipping=DB::table('shippings')->where('status','active')->limit(1)->get();
										@endphp
										<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox" onchange="showMe('shipping');"> Shipping</label>
									</div> 
                </div> --}}
              </div>
              
            </div>
          </div>
          <!--/ End Total Amount -->
        </div>
      </div>
    </div>
  </div>
  <!--/ End Shopping Cart -->

  <x-shop-service-comp />

  <!-- Start Shop Newsletter  -->
  @include('frontend.layouts.newsletter')
  <!-- End Shop Newsletter -->

  {{-- <button type="button" class="btn btn-grest" data-toggle="modal" data-target="#exampleModal">
		Launch demo modal
	</button> --}}

  <!-- Modal -->
  <div class="modal fade" id="quickViewModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
        </div>
        <div class="modal-body">
          <div class="row no-gutters">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <!-- Product Slider -->
              <div class="product-gallery">
                <div class="quickview-slider-active">
                  <div class="single-slider">
                    <img src="images/modal1.jpg" alt="#">
                  </div>
                  <div class="single-slider">
                    <img src="images/modal2.jpg" alt="#">
                  </div>
                  <div class="single-slider">
                    <img src="images/modal3.jpg" alt="#">
                  </div>
                  <div class="single-slider">
                    <img src="images/modal4.jpg" alt="#">
                  </div>
                </div>
              </div>
              <!-- End Product slider -->
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="quickview-content">
                <h2>Flared Shift Dress</h2>
                <div class="quickview-ratting-review">
                  <div class="quickview-ratting-wrap">
                    <div class="quickview-ratting">
                      <i class="yellow fa fa-star"></i>
                      <i class="yellow fa fa-star"></i>
                      <i class="yellow fa fa-star"></i>
                      <i class="yellow fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <a href="#"> (1 customer review)</a>
                  </div>
                  <div class="quickview-stock">
                    <span><i class="fa fa-check-circle-o"></i> in stock</span>
                  </div>
                </div>
                <h3>$29.00</h3>
                <div class="quickview-peragraph">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
                </div>
                <div class="size">
                  <div class="row">
                    <div class="col-lg-6 col-12">
                      <h5 class="title">Size</h5>
                      <select>
                        <option selected="selected">s</option>
                        <option>m</option>
                        <option>l</option>
                        <option>xl</option>
                      </select>
                    </div>
                    <div class="col-lg-6 col-12">
                      <h5 class="title">Color</h5>
                      <select>
                        <option selected="selected">orange</option>
                        <option>purple</option>
                        <option>black</option>
                        <option>pink</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="quantity">
                  <!-- Input Order -->
                  <div class="input-group">
                    <div class="button minus">
                      <button type="button" class="btn btn-grest btn-number" disabled data-type="minus" data-field="quant[1]">
                        <i class="ti-minus"></i>
                      </button>
                    </div>
                    <input type="text" name="quant[1]" class="input-number" data-min="1" data-max="1000" value="1">
                    <div class="button plus">
                      <button type="button" class="btn btn-grest btn-number" data-type="plus" data-field="quant[1]">
                        <i class="ti-plus"></i>
                      </button>
                    </div>
                  </div>
                  <!--/ End Input Order -->
                </div>
                <div class="add-to-cart">
                  <a href="#" class="btn btn-grest">Add to cart</a>
                  <a href="#" class="btn min"><i class="ti-heart"></i></a>
                  <a href="#" class="btn min"><i class="fa fa-compress"></i></a>
                </div>
                <div class="default-social">
                  <h4 class="share-now">Share:</h4>
                  <ul>
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                    <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal end -->

@endsection
@push('styles')
  <style>
    li.shipping {
      display: inline-flex;
      width: 100%;
      font-size: 14px;
    }

    li.shipping .input-group-icon {
      width: 100%;
      margin-left: 10px;
    }

    .input-group-icon .icon {
      position: absolute;
      left: 20px;
      top: 0;
      line-height: 40px;
      z-index: 3;
    }

    .form-select {
      height: 30px;
      width: 100%;
    }

    .form-select .nice-select {
      border: none;
      border-radius: 0px;
      height: 40px;
      background: #f6f6f6 !important;
      padding-left: 45px;
      padding-right: 40px;
      width: 100%;
    }

    .list li {
      margin-bottom: 0 !important;
    }

    .list li:hover {
      background: #F7941D !important;
      color: white !important;
    }

    .form-select .nice-select::after {
      top: 14px;
    }

  </style>
@endpush
@push('scripts')
  <script src="{{ asset('frontend/js/nice-select/js/jquery.nice-select.min.js') }}"></script>
  <script src="{{ asset('frontend/js/select2/js/select2.min.js') }}"></script>
  <script>
    $(document).ready(function() {
      $("select.select2").select2();
    });
    $('select.nice-select').niceSelect();

  </script>
  <script>
    $(document).ready(function() {
      $('.shipping select[name=shipping]').change(function() {
        let cost = parseFloat($(this).find('option:selected').data('price')) || 0;
        let subtotal = parseFloat($('.order_subtotal').data('price'));
        let coupon = parseFloat($('.coupon_price').data('price')) || 0;
        // alert(coupon);
        $('#order_total_price span').text('$' + (subtotal + cost - coupon).toFixed(2));
      });
    });

    $(document).ready(function() {
      if ($(".order_subtotal span").text() == 0) {
        $('.checkout-btn').addClass('disabled-link')
      }
    });

  </script>

@endpush
