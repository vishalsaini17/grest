@extends('frontend.layouts.manage')

@section('manage-content')

<div class="col-12 card d-block mb-5 mr-3">
  
  <div class="table-responsive card-body">
    <h4 class="title">All Orders</h4>
    @if(count($orders)>0)
    <table class="table table-bordered hover" id="order-dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>S.N.</th>
          <th>Order No.</th>
          <th>Name</th>
          {{-- <th>Email</th> --}}
          <th>Quantity</th>
          {{-- <th>Shipping</th> --}}
          <th>Total Amount</th>
          <th>Status</th>
          {{-- <th>Action</th> --}}
        </tr>
      </thead>
      <tbody>
        @foreach($orders as $order)  
        @php
            $shipping_charge=DB::table('shippings')->where('id',$order->shipping_id)->pluck('price');
        @endphp  
            <tr onclick='window.location="/my-orders/{{$order->id}}"' class="trHover">
            {{-- <tr onclick="showOrder({{$order->id}})" class="trHover"> --}}
                <td>{{$loop->iteration}}</td>
                <td>{{$order->order_number}}</td>
                <td>{{$order->first_name}} {{$order->last_name}}</td>
                {{-- <td>{{$order->email}}</td> --}}
                <td>{{$order->quantity}}</td>
                {{-- <td>@foreach($shipping_charge as $data) ₹ {{number_format($data)}} @endforeach</td> --}}
                <td>₹ {{number_format($order->total_amount)}}</td>
                <td>
                    @if($order->status=='new')
                      <span class="badge badge-primary">{{$order->status}}</span>
                    @elseif($order->status=='process')
                      <span class="badge badge-warning">{{$order->status}}</span>
                    @elseif($order->status=='delivered')
                      <span class="badge badge-success">{{$order->status}}</span>
                    @else
                      <span class="badge badge-danger">{{$order->status}}</span>
                    @endif
                </td>
                {{-- <td class="d-flex justify-content-evenly">
                    <a href="{{route('user.order.show',$order->id)}}" class="btn btn-warning btn-sm float-left mr-1"  data-toggle="tooltip" title="view" data-placement="bottom"><i class="fa fa-eye"></i></a>
                    <form method="POST" action="{{route('user.order.delete',[$order->id])}}">
                      @csrf 
                      @method('delete')
                          <button class="btn btn-danger btn-sm dltBtn" data-id={{$order->id}}  data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash-o"></i></button>
                    </form>
                </td> --}}
            </tr>  
        @endforeach
      </tbody>
    </table>
    {{-- <span>{{$orders->links()}}</span> --}}
    @else
      <h6 class="text-center">No orders found!!! Please order some products</h6>
    @endif
  </div>
</div>

<div class="col-12 bg-white p-3 mb-4 mr-3">
  <div class="order_details mx-0">
    @if (isset($searchOrder))
    <header class="d-flex justify-content-between">
      <h4>Order Details #</h4>
      <h4>{{$searchOrder->order_number}}</h4>
    </header>
    <div class="order-items my-3">
        @foreach($orderFromCart as $order)
          @php
            // Fetch products from Ordered List
            $cart=DB::table('products')->where('id',$order->product_id)->first();
            $photo=explode(',',$cart->photo);  
          @endphp

          <ul class="list-group my-2">
            <div class="row mx-auto d-flex list-group-item list-group-item-action">
              <div class="item col-lg-8 col-12 d-flex">
                <div class="obj-fit-parent" style="width: 100px;">
                  <img src="{{ $photo[0] }}" class="img-fluid" alt="quixote">
                </div>
                <div class="flex-column ml-3">
                  <h5 class="product-name card-title"><a href="{{ route('product-detail', $cart->slug) }}" target="_blank">{{$cart->title}} ({{($cart->color)? $cart->color.',' : ''}} {{$cart->ram}} GB RAM, {{$cart->size}} GB Storage)</a></h5>
                  <ul>
                    <li>Cosmatic condition: <span class="{{($cart->condition == 'superb') ? 'condition-pill-S' : (($cart->condition == 'better') ? 'condition-pill-B' : 'condition-pill')}}">{{$cart->condition}}</span></li>
                  </ul>
                </div>
              </div>
              <div class="qunt center col-lg-1 col-7">
                <span>x{{$order->quantity}}</span>
              </div>
              <div class="amount center col-lg-3 col-5">
                <?php $amount= $cart->price-($cart->price*$cart->discount)/100  ?> 
                <span>Rs. {{number_format($amount,2)}}</span>
              </div>
            </div>
          </ul>
          
        @endforeach
        <div class="totals ml-auto col-lg-5 col-12 mr-3">
          <div class="sub-total">
            Sub Total: <span class="float-right">Rs. {{number_format(($searchOrder->total_amount + $searchOrder->coupon),2)}}</span>
          </div>
          <div class="ship">
            Shipping: <span class="float-right">Rs. {{number_format(0,2)}}</span>
          </div>
          @if ($searchOrder->coupon)
          <div class="coupon">
            Discount: <span class="float-right text-success">- Rs. {{number_format($searchOrder->coupon,2)}}</span>
          </div>
          @endif
          <div class="total">
            Total Amount: <span class="float-right">Rs. {{number_format($searchOrder->total_amount,2)}}</span>
          </div>
        </div>
      </div>
      <div class="summary d-none my-3">
        <h5 class="">Summary</h5>
        <div class="d-flex order-summary">
          <ul class="d-flex flex-column key mr-3">
            <li> Order Number</li>
            <li> Order placed on </li>
            <li> Total Quantity </li>
            <li> Order Status </li>
            <li> Shipping Charges </li>
            <li> Total Price </li>
            <li> Coupon Discount </li>
            <li> Total Payble </li>
          </ul>
          <div class="value">
            <p class="">#{{$searchOrder->order_number}}</p>
            <p class="">{{$searchOrder->created_at->format('d M Y')}}</p>
            <p class="">{{$searchOrder->quantity}}</p>
            <p class="">{{$searchOrder->status}}</p>
            <p class="">₹ 0.00</p>
            <p class="">₹ {{number_format($searchOrder->total_amount + $searchOrder->coupon)}}</p>
            <p class="green-link">₹ {{number_format($searchOrder->coupon)}}</p>
            <p class="red-link">₹ {{number_format($searchOrder->total_amount)}}</p>
          </div>
        </div>

      </div>
      
    </div>
      
      @else
        <div class="text-center h4">Select an order for showing its detials</div>
      @endif
  </div>
</div>
    
@endsection

@push('scripts')
  <script>
    // function showOrder(orderId){
    //     $.ajax({
    //       type: "get",
    //       url: `/my-orders/${orderId}`,
    //       success: function (response) {},
    //       error: function (xhr, ajaxOptions, thrownError) {
    //         alert(xhr.status);
    //         alert(thrownError);
    //       }
    //     });
    //   }
      
    
  </script>
@endpush