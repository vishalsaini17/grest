@extends('frontend.layouts.master')

@section('title',' Order Track Page')

@section('main-content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0);">Order Track</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
<section class="tracking_box_area section_gap py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-12">
                <div class="tracking_box_inner center-div">
                    <h2>Track Your Order</h2>
                    <p>To track your order please enter your Order ID from the receipt or the confirmation email received. Click on the track button after entering the ID in the box below.
                        </p>
                    <form class="row form-group tracking_form my-4" action="{{route('product.track.order')}}" method="post" novalidate="novalidate">
                      @csrf
                        <div class="col-12 form-group">
                            <input type="text" class="form-control p-2"  name="order_number" placeholder="Enter your order number">
                        </div>
                        <div class="col-12 text-center mt-5 form-group">
                            <button type="submit" value="Track Order" class="btn btn-secondary">Track Order</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</section>
@endsection