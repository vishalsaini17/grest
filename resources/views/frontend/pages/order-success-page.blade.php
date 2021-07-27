@extends('frontend.layouts.master')
@section('title', 'Cart Page')
@section('main-content')

<div class="empty-cart">
  {{-- <img src="{{asset('frontend/img/sad_cart.png')}}"> --}}
  <h1>Thanks for your order</h1>
  {{-- <p class="">Go to Orders</p> --}}
  <a href="{{route('manage.orders')}}" class="btn btn-secondary text-white mt-5">Go to Orders</a>
  <a href="{{route('product-grids')}}" class="btn btn-grest text-white mt-5">Go Shopping</a>
</div>

<X-news

@endsection
@push('styles')

@endpush
@push('scripts')
 

@endpush
