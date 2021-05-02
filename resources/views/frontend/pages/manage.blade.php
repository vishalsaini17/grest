@extends('frontend.layouts.master')

@section('main-content')

<div class="container-fluid profile-page" style="background-color: #F1F3F5">
  <div class="container py-5">
    {{-- <h1>User Manage page</h1> --}}
      <nav class="my-profile-nav row justify-content-center">
        <ul class="sub-menu col-9 d-flex">
          <li><a href="#">My Profile</a></li>
          <li><a href="#">My Orders</a></li>
        </ul>
        <ul>
          <li>
            <a href="#">Logout</a>
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
                  <p class="card-text text-left"><span><i class="fa fa-envelope"></i> {{$profile->email}}</span></p>
                  <p class="card-text text-left"><span class="text-muted"><b>Role: </b> {{$profile->role}}</span></p>
                  <p class="card-text text-left"><span class="text-muted"><b>Phone: </b> {{($profile->phone)? $profile->phone : '--N/A--'}}</span></p>
                  <p>
                    {{-- @php
                        dd($profile);
                    @endphp --}}
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-10 col-10 bg-white mx-3 p-3">
              <div class="delivery-info">
                <h4 class="heading">Delivery Address</h4>
                <div class="address-boxes row">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

  </div>
</div>
@endsection