@extends('frontend.layouts.master')
{{-- @extends('layouts.app') --}}

@section('main-content')
<section class="section verify">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Verify Your Email Address') }}</div>
                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success text-center" role="alert">
                                <p>A fresh verification link has been sent to your email address <span class="email-field text-danger"></span></p>
                            </div>
                        @endif
                        <p style="color:#000">Before proceeding, please check your email <span class="email-field text-danger"></span> for a verification link. If you did not receive the email, </p>
                        {{-- {{ __('') }}
                        {{ __('') }}, --}}
                        <input type="hidden" name="email" value="{{ Auth::User()->email }}">
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Click here to request another') }}</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // 
    const hideEmail = email => {
        let e = email.split('@')
        return e[0].slice(0, 2)+e[0].split('').map(a=>a='*').slice(2,e[0].length-1).join('')+e[0].substr(e[0].length-1)
                +'@'
                +e[1].slice(0,2)+e[1].split('').map(a=>a='*').slice(0,e[1].length-3).join('')+e[1].substr(e[1].length-1)
    }
    // $(document).ready(function () {
    //     $('#email').text(hideEmail())
    // });
    setTimeout(function () {
        $('.email-field').text(hideEmail($('input[name="email"]').val()))
    }, 1)
</script>
@endsection
