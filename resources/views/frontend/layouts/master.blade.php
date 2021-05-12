<!DOCTYPE html>
<html lang="en">
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
<head>
	@include('frontend.layouts.head')	
</head>
<body class="js">
	
	<!-- Preloader Uncomment below and from Active.JS for preloader to work -->
	{{-- <div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div> --}}
	<!-- End Preloader -->
	
	@include('frontend.layouts.notification')
	<!-- Header -->
	@include('frontend.layouts.header')
	<!--/ End Header -->
	@yield('main-content')
	
	@include('frontend.layouts.footer')

	@yield('script')
</body>
</html>