@extends('frontend.layouts.master')

@section('title', "Manage || $profile->name")
    
@section('main-content')


<div class="container-fluid profile-page" style="background-color: #F1F3F5">
  <div class="container py-5">
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
            <div class="col-lg-7 col-md-6 col-sm-10 col-10">

              {{-- @yield('manage-content') --}}

              <!-- *************** Blade Component ************-->
              <x-addresses title="Delivery Address" type="address"/>


            </div>
          </div>
        </div>
      </div>
  </div>
</div>

<!-- Modal -->
{{-- <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
</div> --}}


@endsection
