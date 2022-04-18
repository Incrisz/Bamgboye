<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">

    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    @include('backend.static.head.script')
	<title>LFC - @yield('title')</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">

		<!--sidebar wrapper -->
      
        @include('backend.static.bar.sidebar')
		<!--end sidebar wrapper -->



		<!--start menubar -->
        @include('backend.static.bar.menubar')
		<!--end menubar -->


		<!--start page wrapper -->
		{{-- CONTENT --}}

        @yield('content')

        {{-- END CONTENT --}}
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="search-overlay"></div>
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2022. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!--start SIDEBAR2-->
	<!--start SIDEBAR2-->
	@include('backend.static.bar.sidebar2')
	<!--end SIDEBAR2-->
    @include('backend.static.foot.script')
</body>


</html>