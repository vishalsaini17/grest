@php
    // dd(Auth::user());
    $orders = App\Models\Order::where('user_id', Auth::user()->id)->paginate(10);
    // dd($orders);
@endphp

<div class="table-responsive">
    @if(count($orders)>0)
    <table class="table table-bordered" id="order-dataTable" width="100%" cellspacing="0">
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
          <th>Action</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>S.N.</th>
          <th>Order No.</th>
          <th>Name</th>
          {{-- <th>Email</th> --}}
          <th>Quantity</th>
          {{-- <th>Shipping</th> --}}
          <th>Total Amount</th>
          <th>Status</th>
          <th>Action</th>
          </tr>
      </tfoot>
      <tbody>
        @foreach($orders as $order)  
        @php
            $shipping_charge=DB::table('shippings')->where('id',$order->shipping_id)->pluck('price');
        @endphp  
            <tr>
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
                <td class="d-flex justify-content-evenly">
                    <a href="{{route('user.order.show',$order->id)}}" class="btn btn-warning btn-sm float-left mr-1"  data-toggle="tooltip" title="view" data-placement="bottom"><i class="fas fa-eye"></i></a>
                    <form method="POST" action="{{route('user.order.delete',[$order->id])}}">
                      @csrf 
                      @method('delete')
                          <button class="btn btn-danger btn-sm dltBtn" data-id={{$order->id}}  data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>  
        @endforeach
      </tbody>
    </table>
    <span>{{$orders->links()}}</span>
    @else
      <h6 class="text-center">No orders found!!! Please order some products</h6>
    @endif
  </div>

  @push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css"> --}}
    <style>
      .flex.justify-between.flex-1{
        display: none;
      }
      .w-5{
        width: 5%;
      }
      .flex.justify-between.flex-1 + div{
        text-align: center;
      }
      .flex.justify-between.flex-1 + div > div{
        margin: 0.5rem
      }
    </style>
  @endpush

  @push('scripts')

  <!-- Page level plugins -->
  {{-- <script src="{{asset('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script> --}}

  <!-- Page level custom scripts -->
  {{-- <script src="{{asset('backend/js/demo/datatables-demo.js')}}"></script> --}}

  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script>
      
      $('#order-dataTable').DataTable( {
          "paging": false,
          "pagingType": "first_last_numbers"
          // "target":[8]
          // "searchable":true,
          // scrollY: 400
            "columnDefs":[
            //     {
                    "orderable":false,
            //         "targets":[8],
            //     }
            ]
        } );

        // Sweet alert

        function deleteData(id){
            
        }
  </script>
  @endpush