@extends('frontend.layouts.master')
@section('title', 'Cart Page')
@section('main-content')

<div class="empty-cart">
  <img src="{{asset('frontend/img/sad_cart.png')}}">
  <h3>Your shopping cart is empty</h3>
  <p class="">Add something to make it happy :)</p>

  <a href="{{route('product-grids')}}" class="btn btn-grest text-white mt-5">Go Shopping</a>
</div>

<X-news

@endsection
@push('styles')

@endpush
@push('scripts')
 

@endpush
