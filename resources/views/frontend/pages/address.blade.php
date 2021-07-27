@extends('frontend.layouts.manage')

@section('manage-content')

<div class="col-lg-3 col-md-3 col-sm-12 col-12 bg-white p-3">
  <div class="my-profile">
    <h4 class="d-inline-block">My Account</h4>
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
    <div class="text-center w-100"><a href="{{route('user-profile')}}" class="btn w-50 mt-3 btn-outline-secondary">Edit</a></div>
  </div>
</div>
<div class="col-lg-9 col-md-9 col-sm-12">

  <!-- *************** Blade Component ************-->
  <x-addresses title="Delivery Address" type="address"/>

</div>
    
@endsection