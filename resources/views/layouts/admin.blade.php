<!DOCTYPE html>
<html>
	<head>
		{{-- META DATA --}}
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		@yield('meta-data')

		{{-- SITE META --}}
		<meta name="url" content="">
		<meta name="type" content="website">
		<meta name="title" content="{{ env('APP_NAME') }}">
		<meta name="description" content="{{ env('APP_DESC') }}">
		<meta name="image" content="/images/UI/banners/faculty.jpg">
		<meta name="image:alt" content="/images/UI/banners/faculty.jpg">
		<meta name="keywords" content="">
		<meta name="application-name" content="Defensive Measures Add-on Guide">

		{{-- OG META --}}
		<meta name="og:url" content="">
		<meta name="og:type" content="website">
		<meta name="og:title" content="{{ env('APP_NAME') }}">
		<meta name="og:description" content="{{ env('APP_DESC') }}">
		<meta name="og:image" content="images/UI/banners/faculty.jpg">
		<meta name="og:image:alt" content="images/UI/banners/faculty.jpg">

		{{-- jQuery 3.6.0 --}}
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		<!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> -->

		{{-- jQuery UI 1.12.1 --}}
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

		{{-- Removes the code that shows up when script is disabled/not allowed/blocked --}}
		<script type="text/javascript" id="for-js-disabled-js">$('head').append('<style id="for-js-disabled">#js-disabled { display: none; }</style>');$(document).ready(function() {$('#js-disabled').remove();$('#for-js-disabled').remove();$('#for-js-disabled-js').remove();});</script>

		{{-- popper.js 1.16.0 --}}
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

		{{-- Bootstrap 4.4 --}}
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

		{{-- Slick Carousel 1.9.0 --}}
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"/>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>

		{{-- Sweet Alert 2 --}}
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

		{{-- Chart.js 3.1.1 --}}
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.1.1/chart.min.js" integrity="sha512-BqNYFBAzGfZDnIWSAEGZSD/QFKeVxms2dIBPfw11gZubWwKUjEgmFUtUls8vZ6xTRZN/jaXGHD/ZaxD9+fDo0A==" crossorigin="anonymous"></script>

		{{-- Summernote 0.8.18 --}}
		<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js" defer></script>

		{{-- Custom CSS --}}
		<style>
			body {font-family: Arial, Helvetica, sans-serif;}

			.navbar {
				width: 100%;
				background-color: #555;
				overflow: auto;
			}

			.navbar a {
				float: right;
				padding: 15px;
				padding right: 5px;
				color: white;
				text-decoration: none;
				font-size: 15px;
			}

			.navbar a:hover {
				background-color: #256e83;
			}

			.System-name{
				font-size: 20px;
				float: left;
				color:white;
				padding-left: 25px;
			}

			@media screen and (max-width: 500px) {
				.navbar a {
					float: none;
					display: block;
				}
			}
		</style>
		@yield('css')

		{{-- Fontawesome --}}
		<script src="https://kit.fontawesome.com/d4492f0e4d.js" crossorigin="anonymous"></script>

		{{-- Input Mask 5.0.5 --}}
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.5/jquery.inputmask.min.js"></script>
		{{-- Favicon --}}
		<link rel='icon' type='image/png' href='{{ asset("images/UI/favicon.png") }}'>
		
		{{-- Title --}}
		<title>{{ env('APP_NAME') }} | @yield('title')</title>
	</head>
	
	<body>
		{{-- NEW NAVBAR --}}
		<nav class="navbar navbar-expand-lg">
			<a class="navbar-brand" href="#">Achiever's CREST</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navcontent" aria-controls="navcontent" aria-expanded="false" aria-label="Toggle Navbar Content">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navcontent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a href="#" class="nav-link"><i class="fa fa-fw fa-user mr-2"></i>Users</a>
					</li>

					<li class="nav-item">
						<a href="#" class="nav-link"><i class="fa-sharp fa-solid fa-print mr-2"></i>Reports</a>
					</li>

					<li class="nav-item">
						<a href="#" class="nav-link"><i class="fa-solid fa-handshake mr-2"></i>Services</a>
					</li>

					<li class="nav-item">
						<a href="#" class="nav-link"><i class="fa fa-fw fa-envelope mr-2"></i>Registration</a>
					</li>

					<li class="nav-item">
						<a href="#" class="nav-link"><i class="fa-sharp fa-solid fa-chart-line mr-2"></i>Dashboard</a>
					</li>

					<li class="nav-item">
						<a href="#" class="nav-link"><i class="fa fa-fw fa-home mr-2"></i>Home</a>
					</li>
				</ul>
			</div>
		</nav>


		{{-- OLD NAVBAR --}}
		{{--<div class="navbar">
			<a href="#"><i class="fa fa-fw fa-user"></i> Users </a>
			<a href="#"><i class="fa-sharp fa-solid fa-print"></i> Reports </a>
			<a href="#"><i class="fa-solid fa-handshake"></i>	Services </a>
			<a href="#"><i class="fa fa-fw fa-envelope"></i> Registration</a> 
			<a href="#"><i class="fa-sharp fa-solid fa-chart-line"></i> Dashboard</a>
			<a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a> 
			<h5 class="System-name">Achiever's CREST</h5>
		</div>--}}

		@yield('content')
	</body>
</html>