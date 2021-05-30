<div class="delivery-info p-3 bg-white">
    <h4 class="heading">{{$title}}</h4>
    <div class="address-boxes row">
      <!-- Fetching Saved addresses -->
      @foreach ($address as $a)                          
    <div class="col-md-6">
      <address class="old-adds add-box" data-address-ID="{{$a->id}}">
        <ul>
          <li class="aName"><p>{{$a->name}}</p></li>
          <li class="aPhone"><p><span>+91 </span>{{$a->phone}}</p></li>
          <li class="my-2 aAddress"><span>{{$a->address}} <p class="aPin d-inline">{{($a->pincode != null)? $a->pincode : 'No Pincode available' }}</p></span></li>
          <li>
            <div action="/set-default-address" method="post" class="d-flex align-items-center">
              @csrf
              <input type="hidden" name="name" value="{{$a->name}}">
              <input type="hidden" name="phone" value="{{$a->phone}}">
              <input type="hidden" name="address" value="{{$a->address}}">
              <input type="hidden" name="pincode" value="{{$a->pincode}}">
              <input type="hidden" name="address_id" value="{{$a->id}}">
              <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
              <input type="checkbox" /*onclick="this.form.submit()"*/ {{($a->is_default == 1)? 'checked': ''}} name="is_default" class="mr-2">
              Default Address
              {{-- <input type="submit" value="Submit"> --}}
              <a href="#" data-toggle="modal" data-target="#editAddressModal" class="ml-auto text-uppercase mx-1 editBtn text-info">Edit</a>
              {{-- <a href="{{"deleteAdd/".$a->id}}" class="text-danger text-uppercase mx-1">Delete</a> --}}
              <a href="javascript:;" onclick="delAddress({{$a->id}})" id="deleteMe" class="text-danger text-uppercase mx-1">Delete</a>
            </div>
          </li>
          
        </ul>
      </address>
    </div> 
    @endforeach
      <!-- Add New address Box -->
      <div class="col-md-6">
        <div class="new-add add-box">
          <a class="" href="" data-toggle="modal" data-target="#addAddressModal" type="button"> <i class="fa fa-plus-circle d-block mb-2"></i> Add a new delivery address</a>           
        </div>
      </div>
      <!-- New address Box Ends -->
    </div>
  </div>

  
@section('script')
<script>
  function delAddress(id){

    var z = confirm("Do you want to delete this ?");
    if (z == true) {
      // window.location.assign(`deleteAdd/${id}`); 
      $.ajax({
        url: `deleteAdd/${id}`,
        type: "get",
        success: function(data){
          $(`address[data-address-id=${id}]`).parent().remove()
        },
        error: function (xhr, ajaxOptions, thrownError) {
        alert(xhr.status);
        alert(thrownError);
      }
      })
    }

  }

</script>
@endsection