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
            <div class="d-flex align-items-center">
              <input type="hidden" name="name" value="{{$a->name}}">
              <input type="hidden" name="phone" value="{{$a->phone}}">
              <input type="hidden" name="address" value="{{$a->address}}">
              <input type="hidden" name="pincode" value="{{$a->pincode}}">
              <input type="hidden" name="address_id" value="{{$a->id}}">
              <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
              @if ($type == 'selectAdd')
              <input type="checkbox" onclick="setAddDefault({{$a->id}})" {{($a->is_default == 1)? 'checked': ''}} name="is_default" class="mr-2">
              Select Address
              @else
              <input type="checkbox" onclick="setAddDefault({{$a->id}})" {{($a->is_default == 1)? 'checked': ''}} name="is_default" class="mr-2">
              Default Address
              <a href="#" data-toggle="modal" data-target="#editAddressModal" class="ml-auto text-uppercase mx-1 editBtn text-info">Edit</a>
              <a href="javascript:;" onclick="delAddress({{$a->id}})" id="deleteMe" class="text-danger text-uppercase mx-1">Delete</a>
              @endif
            </div>
          </li>
          
        </ul>
      </address>
    </div> 
    @endforeach
      {{-- @if ($type == 'address') --}}
        <!-- Add New address Box -->
          <div class="col-md-6">
            <div class="new-add add-box">
              <a class="" href="" data-toggle="modal" data-target="#addAddressModal" type="button"> <i class="fa fa-plus-circle d-block mb-2"></i> Add a new delivery address</a>           
            </div>
          </div>
        <!-- New address Box Ends -->
      {{-- @endif --}}
    </div>
  </div>


  <!--Add Address Modal -->
<div class="modal fade" id="addAddressModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog inputFileds" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Address</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/addAddress" class="row">
          @csrf
          <div class="form-group col-lg-6 col-12">
            <input type="name" name="name" required placeholder="Enter Name" class="form-control floating-Placeholder">
          </div>
          <div class="form-group col-lg-6 col-12">
            <input type="tel" maxlength="10" pattern="[1-9]{1}[0-9]{9}" required placeholder=" Enter Mobile Number" name="phone" class="form-control floating-Placeholder">
          </div>
          <div class="form-group col-lg-12">
            <textarea type="textarea" name="address" required placeholder="Enter address" class="form-control floating-Placeholder"></textarea>
          </div>
          <div class="col-lg-12 form-group">
            <div class="d-flex justify-content-around">
              <input type="text" maxlength="6" required name="pincode" placeholder="Enter 6 digit Pincode" class="form-control floating-placeholder">
              <span class="font-bold w-100 text-right" style="margin: 0.5rem 2rem">Make this Address default?</span>
              <select type="radio" class="mb-0" name="is_default" >
                <option value="1">Yes</option>
                <option value="0">No</option>
              </select>
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
            </div>
            
          </div>
          <div class="form-group col-6 mx-auto text-center">
            <input type="submit" value="Submit" class="btn btn-lg btn-success mx-3">
            <input type="reset" value="Reset" class="btn btn-lg btn-secondary mx-3">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Add Address Modal Ends -->

<!--Edit Address Modal -->
<div class="modal fade" id="editAddressModal" tabindex="-1" role="dialog" aria-labelledby="editAddressModalLabel" aria-hidden="true">
  <div class="modal-dialog inputFileds" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editAddressModalLabel">Update Address</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/updateAddress" class="row">
          @csrf
          <input type="hidden" name="id" value="">
          <div class="form-group col-lg-6 col-12">
            <label for="name">Name</label>
            <input type="text" name="name" required placeholder="Enter Name" class="form-control">
          </div>
          <div class="form-group col-lg-6 col-12">
            <label for="phone">Mobile Number</label>
            <input type="tel" maxlength="10" required placeholder=" Enter Mobile Number" pattern="[1-9]{1}[0-9]{9}" name="phone" class="form-control">
          </div>
          <div class="form-group col-lg-12">
            <label for="address">Address</label>
            <textarea type="text" name="address" required placeholder="Enter address" class="form-control"></textarea>
          </div>
          <div class="col-lg-12 form-group">
            <div class="d-flex justify-content-around">
              <label for="pincode" class="mt-3">Pincode</label>
              <input type="text" maxlength="6" required name="pincode" placeholder="Enter 6 digit Pincode" class="form-control">
              <span class="font-bold w-100 text-right" style="margin: .5rem 2rem;">Make this Address default?</span>
              <select type="radio" class="mb-0" name="is_default" >
                <option value="1">Yes</option>
                <option value="0">No</option>
              </select>
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                <input type="hidden" name="address_id" value="">
            </div>
            
          </div>
          <div class="form-group col-6 mx-auto text-center">
            <input type="submit" value="Update" class="btn btn-lg btn-success mx-3">
            <input type="reset" value="Reset" class="btn btn-lg btn-secondary mx-3">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Edit Address Modal Ends -->
  
@push('scripts')
  <script>
  // Delete address Confirmation
  function delAddress(id) {

    var z = confirm("Do you want to delete this ?");
    if (z == true) {
      // window.location.assign(`deleteAdd/${id}`); 
      $.ajax({
        url: `deleteAdd/${id}`,
        type: "get",
        success: function (data) {
          $(`address[data-address-id=${id}]`).parent().remove()
        },
        error: function (xhr, ajaxOptions, thrownError) {
          alert(xhr.status);
          alert(thrownError);
        }
      })
    }
  }

  // Set Default address by Checkbox
  function setAddDefault(addId) {
    $(':checkbox').prop('checked', false)
    $(`[value=${addId}]`).siblings(':checkbox').prop('checked', true)

    $.ajax({
      url: `/set-default-address/${addId}`,
      type: 'get',
      success: function () {
      },
      error: function (xhr, ajaxOptions, thrownError) {
        alert(xhr.status);
        alert(thrownError);
      }
    })
  }

  // Edit Modal placing items Dynamically
  // Ignore innerChild Function
  $.fn.ignore = function (sel) {
    return this.clone().find(sel || ">*").remove().end()
  }

  // Custom Code
  $('.editBtn').click(function () {
    var name = $(this).parents('li').siblings('.aName').find('p').html()
    var phone = $(this).parents('li').siblings('.aPhone').find('p').ignore('span').html()
    var address = $(this).parents('li').siblings('.aAddress').find('span').ignore('p').text()
    var pincode = $(this).parents('li').siblings('.aAddress').find('p').html()
    var addressID = $(this).siblings('input[name="address_id"]').val()


    var modal = $('#editAddressModal')
    modal.find('input[name="name"]').val(name)
    modal.find('input[name="phone"]').val(phone)
    modal.find('textarea[name="address"]').val(address)
    modal.find('input[name="address_id"]').val(addressID)
    var modalPincode = modal.find('input[name="pincode"]')
    if (pincode === 'No Pincode available') {
      modalPincode.val('')
    } else {
      modalPincode.val(pincode)
    }

  })
  </script>

@endpush