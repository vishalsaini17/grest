@extends('frontend.layouts.master')

@section('title',' Register Page')

@section('main-content')
	<!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0);">Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
            
    <!-- Shop Login -->
    <section class="shop login section pt-4">
        <div class="container">
            <div class="row"> 
                <div class="col-lg-8 card mx-auto px-2 py-3 col-12">
                    <div class="login-form">
                        <h2>Register</h2>
                        <p class="mb-0">Please register in order to checkout more quickly</p>
                        <!-- Form -->
                        <form class="form card-body" method="post" action="{{route('register.submit')}}">
                            @csrf
                            <div class="row">
                                <div class="col-12 d-flex justify-content-between" style="gap: 1rem">
                                    <div class="form-group w-100">
                                        <label>First Name<span>*</span></label>
                                        <input type="text" name="first_name" data-name="registerName" placeholder="" required="required" value="{{old('first_name')}}">
                                        @error('first_name')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group w-100">
                                        <label>Last Name<span>*</span></label>
                                        <input type="text" name="last_name" data-name="registerName" placeholder="" required="required" value="{{old('last_name')}}">
                                        @error('last_name')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <input type="hidden" name="name" value="">
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Your Email<span>*</span></label>
                                        <input type="text" name="email" placeholder="" required="required" value="{{old('email')}}">
                                        @error('email')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Your Mobile Number<span>*</span></label>
                                        <input type="tel" maxlength="10" pattern="[1-9]{1}[0-9]{9}" required name="phone" placeholder="" value="{{old('phone')}}">
                                        @error('phone')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Your Password<span>*</span> <small>(at least 6 characters long)</small></label>
                                        <input type="password" name="password" placeholder="" required="required" value="{{old('password')}}">
                                        @error('password')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Confirm Password<span>*</span></label>
                                        <input type="password" name="password_confirmation" placeholder="" required="required" value="{{old('password_confirmation')}}">
                                        @error('password_confirmation')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class=" justify-content-around align-items-center text-center">
                                    <button  class="btn bg-grest px-5 mx-auto d-block" style="" type="submit">Sign up</button>
                                    <span class="my-3 d-block my-3">Already have account? Try</span>
                                        <a href="{{route('login.form')}}" class="btn btn-primary">Login</a>
                                        {{-- <a href="{{route('login.redirect','facebook')}}" class="btn btn-facebook"><i class="ti-facebook"></i></a> --}}
                                        <a href="{{route('login.redirect','facebook')}}" class="btn px-3 btn-facebook"><i class="fa fa-facebook mr-2"></i> Login with Facebook</a>
                                        {{-- <a href="{{route('login.redirect','github')}}" class="btn btn-github"><i class="ti-github"></i></a> --}}
                                        {{-- <a href="{{route('login.redirect','google')}}" class="btn btn-google"><i class="ti-google"></i></a> --}}
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--/ End Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Login -->
@endsection

@push('styles')
<style>
    .shop.login .form .btn{
        margin-right:0;
    }
    .btn-facebook{
        background:#39579A;
    }
    .btn-facebook:hover{
        background:#073088 !important;
    }
    .btn-github{
        background:#444444;
        color:white;
    }
    .btn-github:hover{
        background:black !important;
    }
    .btn-google{
        background:#ea4335;
        color:white;
    }
    .btn-google:hover{
        background:rgb(243, 26, 26) !important;
    }
</style>
@endpush
@push('scripts')
<script>
    $(function () {
        $("input[data-name=registerName]").change(function(){
            var fname = $("input[name=first_name]").val()
            var lname = $("input[name=last_name]").val()
            $("input[name=name]").val(`${fname} ${lname}`)
        })
    });
    
</script>
@endpush