@extends('frontend.layouts.master')

@section('title', 'Manage')
    

@section('main-content')

<div class="container-fluid profile-page" style="background-color: #F1F3F5">
  <div class="container py-5">
    {{-- <h1>User Manage page</h1> --}}
      <nav class="my-profile-nav row justify-content-center">
        <ul class="sub-menu col-9 d-flex">
          <li><a href="{{route('manage')}}">My Profile</a></li>
          <li><a href="#">My Orders</a></li>
        </ul>
        <ul>
          <li>
            {{-- <a href="{{route('user.logout')}}">Logout</a> --}}
            <a href="#" data-target="#logoutModal" data-toggle="modal">Logout</a>
          </li>
        </ul>
      </nav>

      {{-- @php
          // dd($profile);
           dd($address);
      @endphp --}}

      <div class="my-profile-details">
        <div class="container py-5">
          <div class="row justify-content-center">
            <div class="col-lg-3 col-md-4 col-sm-10 col-10 bg-white mx-3 p-3">
              <div class="my-profile">
                <h4>My Account</h4>
                <div class="image text-center">
                  @if($profile->photo)
                  <img class="card-img-top img-fluid roundend-circle mt-4" style="border-radius:50%;height:80px;width:80px;margin:auto;" src="{{$profile->photo}}" alt="profile picture">
                  @else
                  <img class="card-img-top img-fluid roundend-circle mt-4" style="border-radius:50%;height:80px;width:80px;margin:auto;" src="{{asset('backend/img/avatar.png')}}" alt="profile picture">
                  @endif
                </div>
                <div class="details">
                  <h5 class="card-title text-left"><small> <i class="fa {{ ($profile->role === 'admin') ? 'fa-user-plus' : 'fa-user' }} "></i> {{$profile->name}}</small></h5>
                  <p class="card-text text-left"><i class="fa fa-envelope"></i> {{$profile->email}}</p>
                  <p class="card-text text-left text-muted"><b>Role: </b> {{$profile->role}}</p>
                  <p class="card-text text-left text-muted"><b>Phone: </b> {{($profile->phone)? $profile->phone : '--N/A--'}}</p>
                  <p class="d-none">ID: {{$profile->id}}</p>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-10 col-10 bg-white mx-3 p-3">
              <div class="delivery-info">
                <h4 class="heading">Delivery Address</h4>
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
                          <form action="/set-default-address" method="post" class="d-flex align-items-center">
                            @csrf
                            <input type="hidden" name="address_id" value="{{$a->id}}">
                            <input type="hidden" name="user_id" value="{{$profile->id}}">
                            <input type="checkbox" onclick="this.form.submit()" {{($a->is_default == 1)? 'checked': ''}} name="is_default" class="mr-2">
                            Default Address
                            {{-- <input type="submit" value="Submit"> --}}
                            <a href="#" data-toggle="modal" onclick="updateAddress()" data-target="#editAddressModal" class="ml-auto text-uppercase mx-1 editBtn text-info">Edit</a>
                            {{-- <a href="{{"deleteAdd/".$a->id}}" class="text-danger text-uppercase mx-1">Delete</a> --}}
                            <a href="javascript:;" onclick="delAddress({{$a->id}})" id="deleteMe" class="text-danger text-uppercase mx-1">Delete</a>
                          </form>
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
                  {{-- <div class="col-md-6">
                    <div class="old-adds add-box">
                      
                    </div>
                  </div> --}}


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog confirmation" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm Delete?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are You Sure?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" onclick="">Delete</button>
      </div>
    </div>
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
            <input type="tel" maxlength="10" required placeholder=" Enter Mobile Number" pattern="[1-9]{1}[0-9]{9}" name="phone" class="form-control floating-Placeholder">
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
                <input type="hidden" name="user_id" value="{{$profile->id}}">
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

<!--Update Address Modal -->
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
            <label for="name">Mobile Number</label>
            <input type="tel" maxlength="10" required placeholder=" Enter Mobile Number" pattern="[1-9]{1}[0-9]{9}" name="phone" class="form-control">
          </div>
          <div class="form-group col-lg-12">
            <textarea type="text" name="address" required placeholder="Enter address" class="form-control"></textarea>
          </div>
          <div class="col-lg-12 form-group">
            <div class="d-flex justify-content-around">
              <input type="text" maxlength="6" required name="pincode" placeholder="Enter 6 digit Pincode" class="form-control">
              <span class="font-bold w-100 text-right" style="margin: .5rem 2rem;">Make this Address default?</span>
              <select type="radio" class="mb-0" name="is_default" >
                <option value="1">Yes</option>
                <option value="0">No</option>
              </select>
                <input type="hidden" name="user_id" value="{{$profile->id}}">
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
<!-- Update Address Modal Ends -->

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog logout" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="{{route('user.logout')}}">Logout</a>
      </div>
    </div>
  </div>
</div>


@endsection

@section('script')
    <script>
      function delAddress(id){

        var z = confirm("Do you want to delete this ?");
        if (z == true) {
          debugger
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

      function updateAddress(){
        
      }


    </script>
@endsection