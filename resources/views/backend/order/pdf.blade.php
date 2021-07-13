<!DOCTYPE html>
<html>
<head>
  {{-- @dd($order) --}}
  <title>Order @if($order)- {{$order->order_number}} @endif</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style type="text/css">
    body{
      font-family: Arial, Helvetica, sans-serif
    }

    ul li{
      list-style: none;
    }
    .invoice-header {
      background: #f7f7f7;
      padding: 10px 20px 10px 20px;
      border-bottom: 1px solid gray;
    }
    .site-logo {
      margin: 0.5rem 1.5rem;
      /* flex: 0 0 30%;
      max-width: 30%; */
    }
    .invoice-right-top h3 {
      padding-right: 20px;
      margin-top: 20px;
      color: #5cb85c;
      font-size: 30px!important;
      font-family: serif;
    }
    .invoice-left-top {
      border-left: 4px solid #5cb85c;
      padding-left: 20px;
      padding-top: 20px;
    }
    .invoice-left-top p {
      margin: 0;
      line-height: 20px;
      font-size: 16px;
      margin-bottom: 3px;
    }

    .authority h5 {
      margin-top: -10px;
    }
    .thanks h4 {
      font-style: italic;
      font-size: 25px;
      font-weight: normal;
      margin-top: 20px;
    }
    .site-address p {
      line-height: 6px;
      font-weight: 300;
    }
    .site-address p a {
      color: #fff;
      font-size: 1rem;
      font-weight: 600
    }
    /* .container{
      max-width: 900px
    } */
    .bg-grest{
      background-color: #ea2953;
      color: #fff
    }

    .order_details header{
      background: #EEEEEE;
      color: #718096;
      font-weight: 800;
      padding: 1rem 2rem;
    }
    .order_details header h4{
      margin-bottom: 0;
      font-weight: 700;
    }
    .card-title a{
      color: #000;
    }
    .center{
      text-align: right;
      font-size: 1.5rem;
      margin-top: auto;
    }
    .totals{
      font-size: 1.2rem;
      font-weight: 600;
    }
    .totals .total span {
      color: #ea2953;
      font-size:1.3rem;
    }
    .totals .total{
      border: 1px solid#718096;
      border-left: none;
      border-right: none;
      margin-top: 0.2rem
    }
    .condition {
  text-transform: uppercase;
  font-size: 0.8rem;
  color: #ffc107;
}

.condition-S {
  color: #2cc95b;
  text-transform: uppercase;
  font-size: 0.8rem;
}

.condition-B {
  color: #17a2b8;
  text-transform: uppercase;
  font-size: 0.8rem;
}

.condition-pill {
  display: inline-block !important;
  border-radius: 5px;
  background: #ffc107;
  color: #fff;
  font-size: 0.8rem;
  padding: 0 0.5rem;
  text-transform: uppercase;
}

.condition-pill-S {
  display: inline-block !important;
  border-radius: 5px;
  background: #2cc95b;
  color: #fff;
  font-size: 0.8rem;
  padding: 0 0.5rem;
  text-transform: uppercase;
}

.condition-pill-B {
  display: inline-block !important;
  border-radius: 5px;
  background: #17a2b8;
  color: #fff;
  font-size: 0.8rem;
  padding: 0 0.5rem;
  text-transform: uppercase;
}
  </style>
</head>
<body>
{{-- @dd($order) --}}
@if($order)
<div class="container">
  <div class="invoice-header d-flex bg-grest align-items-center">
    <div class="site-logo">
      <img src="{{asset('backend/img/logo2O.png')}}" class="img-fluid" alt="">
    </div>
    <div class="site-address">
      <h4>{{env('APP_NAME')}}: Gadget Restoration</h4>
      <small>{{env('APP_ADDRESS')}}</small>
      @php
              $settings=DB::table('settings')->get();
              // dd($settings[0]->phone);
              @endphp
      <p class="mt-2">Phone: <a href="tel:{{$settings[0]->phone}}">{{$settings[0]->phone}}</a></p>
      <p>Email: <a href="mailto:{{$settings[0]->email}}">{{$settings[0]->email}}</a></p>
    </div>
  </div>
  <div class="invoice-description">
    <div class="invoice-left-top">
      <h6>Invoice to</h6>
       <h3>{{$order->first_name}} {{$order->last_name}}</h3>
       <div class="address">
        {{-- <p><strong>Country: </strong>{{$order->country}}</p> --}}
        <p><strong>Address: </strong>{{ $order->address1 }}</p>
         <p><strong>Phone:</strong> {{ $order->phone }}</p>
         <p><strong>Email:</strong> {{ $order->email }}</p>
       </div>
    </div>

  </div>
  <section class="order_details pt-3">
    <header class="d-flex justify-content-between">
      <h4>Order Details #</h4>
      <h4>{{$order->order_number}}</h4>
    </header>
    {{-- <div class="headline row d-none px-3 py-2">
      <p class="col-7">Product Description</p>
      <p class="col-2 text-center">Quantity</p>
      <p class="col-2 text-center">Amount</p>
    </div> --}}
    <div class="order-items">
      @foreach($order->cart_info as $cartItem)
        @php
          $cart=DB::table('products')->where('id',$cartItem->product_id)->get();
          $photo=explode(',',$cart[0]->photo);
        @endphp
        <ul class="list-group my-2">
          <div class="row mx-auto d-flex list-group-item list-group-item-action">
            <div class="item col-8 d-flex">
              <div class="obj-fit-parent" style="width: 100px;">
                <img src="{{ $photo[0] }}" class="img-fluid" alt="quixote">
              </div>
              <div class="flex-column ml-3">
                <h5 class="product-name card-title"><a href="{{ route('product-detail', $cart[0]->slug) }}" target="_blank">{{$cart[0]->title}} ({{($cart[0]->color)? $cart[0]->color.',' : ''}} {{$cart[0]->ram}} GB RAM, {{$cart[0]->size}} GB Storage)</a></h5>
                <ul>
                  <li>Cosmatic condition: <span class="{{($cart[0]->condition == 'superb') ? 'condition-pill-S' : (($cart[0]->condition == 'better') ? 'condition-pill-B' : 'condition-pill')}}">{{$cart[0]->condition}}</span></li>
                </ul>
              </div>
            </div>
            <div class="qunt center col-1">
              <span>x{{$cartItem->quantity}}</span>
            </div>
            <div class="amount col-3 center">
              <?php $amount= $cart[0]->price-($cart[0]->price*$cart[0]->discount)/100  ?> 
              <span>Rs. {{number_format($amount,2)}}</span>
            </div>
          </div>
        </ul>    
      @endforeach
    </div>
    <div class="totals ml-auto col-5">
      <div class="sub-total">
        Sub Total: <span class="float-right">Rs. {{number_format($order->sub_total,2)}}</span>
      </div>
      <div class="ship">
        Shipping: <span class="float-right">Rs. {{number_format(0,2)}}</span>
      </div>
      @if ($order->coupon)
      <div class="coupon">
        Discount: <span class="float-right text-success">- Rs. {{number_format($order->coupon,2)}}</span>
      </div>
      @endif
      <div class="total">
        Total Amount: <span class="float-right">Rs. {{number_format($order->total_amount,2)}}</span>
      </div>
    </div>


    <table class="table d-none table-bordered table-stripe">
      <thead>
        <tr>
          <th scope="col" class="col-6">Product</th>
          <th scope="col" class="col-3">Quantity</th>
          <th scope="col" class="col-3">Total</th>
        </tr>
      </thead>
      <tbody>
      @foreach($order->cart_info as $cart)
      @php 
        $product=DB::table('products')->where('id',$cart->product_id)->get();
      @endphp
        <tr>
          <td><span>
              @foreach($product as $pro)
              @php
                $photo=explode(',',$pro->photo);
              @endphp
              {{-- <img src="{{$photo[0]}}" alt=""> --}}
                {{$pro->title}}
              @endforeach
            </span></td>
          <td>x{{$cart->quantity}}</td>
          <td><span>Rs. {{number_format($cart->price,2)}}</span></td>
        </tr>
      @endforeach
      </tbody>
      <tfoot>
        <tr>
          <th scope="col" class="empty"></th>
          <th scope="col" class="text-right">Subtotal:</th>
          <th scope="col"> <span>Rs. {{number_format($order->sub_total,2)}}</span></th>
        </tr>
      {{-- @if(!empty($order->coupon))
        <tr>
          <th scope="col" class="empty"></th>
          <th scope="col" class="text-right">Discount:</th>
          <th scope="col"><span>-{{$order->coupon->discount(Helper::orderPrice($order->id, $order->user->id))}}{{Helper::base_currency()}}</span></th>
        </tr>
      @endif --}}
        <tr>
          <th scope="col" class="empty"></th>
          @php
            $shipping_charge=DB::table('shippings')->where('id',$order->shipping_id)->pluck('price');
          @endphp
          <th scope="col" class="text-right ">Shipping:</th>
          <th><span>Rs. {{number_format($shipping_charge[0],2)}}</span></th>
        </tr>
        <tr>
          <th scope="col" class="empty"></th>
          <th scope="col" class="text-right">Total:</th>
          <th>
            <span>
                Rs. {{number_format($order->total_amount,2)}}
            </span>
          </th>
        </tr>
      </tfoot>
    </table>

  </section>

  <section class="shop-again mt-5">
    <div class="text-white p-5 text-italic text-center" style="background: #12152E;">
      <h4 class="text-center italic">Thanks for shopping, Save 10% on next order, Use "GrestGet10"</h4>
      <a href="{{route('product-grids')}}" class="btn mt-3 btn-danger btn-lg"> Shop Now!</a>
    </div>
  </section>
  {{-- <div class="thanks text-success mt-3">
    <h4>Thank you for your business !!</h4>
  </div>
  <div class="authority float-right mt-5">
    <p>-----------------------------------</p>
    <h5>Authority Signature:</h5>
  </div>
  <div class="clearfix"></div> --}}
@else
  <h5 class="text-danger">Invalid</h5>
@endif
</div>
</body>
</html>