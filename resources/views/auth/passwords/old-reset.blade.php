@extends('frontend.layouts.master')

{{-- @extends('layouts.app') --}}

@section('main-content')
 <!-- Breadcrumbs -->
 <div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="javascript:void(0);">Forgot Password</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<section class="shop login section">
<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3 col-12">
            <div class="login-form">
                <h2>Forgot Password</h2>
                <p>We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!</p>
                {{-- <div class="card-header">{{ __('Reset Password') }}</div> --}}

                <div class="col-12">
                    @if (session('status'))
                        <div class="alert alert-success text-center" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="">Enter your registred Email</label>

                            {{-- <div class="col-md-6"> --}}
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            {{-- </div> --}}
                        </div>

                        <div class="form-group text-center mt-5">
                            {{-- <div class="col-md-6 offset-md-4"> --}}
                                <button type="submit" class="btn btn-secondary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            {{-- </div> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
