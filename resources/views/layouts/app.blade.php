<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>@yield('title')</title>

		<!-- Fuentes-->
		<link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

		<!-- Estilo-->
		<link href="{{ asset('template/css/sb-admin.css') }}" rel="stylesheet">


	</head>
	<body class="bg-dark">

		<main>
			<div class="container">
				@yield('content')
			</div>
		</main>

		<!-- Bootstrap -->
		<script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>
		<script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

		<!-- JavaScript-->
		<script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
	</body>
</html>
