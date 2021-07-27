@extends('frontend.layouts.master')

@section('title', "Manage || $profile->name")
    
@section('main-content')


<div class="profile-page" style="background-color: #F1F3F5">
  <div class="container py-5 mx-auto row justify-content-center">
      <nav class="my-profile-nav col-lg-10 col-12 px-0 ">
        <ul class="sub-menu d-flex">
          <li><a href="{{route('manage.profile')}}" class="{{ Request::path()=='my-profile' ? 'active' : '' }}">My Profile</a></li>
          <li><a href="{{route('manage.orders')}}" class="{{ Request::path()=='my-orders' ? 'active' : '' }}">My Orders</a></li>
          <li class="ml-auto"><a href="#" data-target="#logoutModal" data-toggle="modal">Logout</a></li>
        </ul>
      </nav>

      <div class="py-5 my-profile-details col-lg-10 col-12 px-0">
        <div class="mx-auto">
          <div class="row justify-content-center ml-1">

              @yield('manage-content')

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
