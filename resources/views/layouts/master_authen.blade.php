<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Boonyuan Bar & Restaurant</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--===============================================================================================-->
		<link rel="icon" type="image/png" href="{{asset('authen/images/icons/favicon.ico')}}" />
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="{{asset('authen/vendor/bootstrap/css/bootstrap.min.css')}}">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="{{asset('authen/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="{{asset('authen/fonts/iconic/css/material-design-iconic-font.min.css')}}">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="{{asset('authen/vendor/animate/animate.css')}}">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="{{asset('authen/vendor/css-hamburgers/hamburgers.min.css')}}">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="{{asset('authen/vendor/animsition/css/animsition.min.css')}}">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="{{asset('authen/vendor/select2/select2.min.css')}}">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="{{asset('authen/vendor/daterangepicker/daterangepicker.css')}}">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="{{asset('authen/css/util.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('authen/css/main.css')}}">
		<!--===============================================================================================-->
	</head>
</head>
<body>
    @include('sweetalert::alert')

	@yield('content')

	<script src="{{asset('authen/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('authen/vendor/animsition/js/animsition.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('authen/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('authen/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('authen/vendor/select2/select2.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('authen/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('authen/vendor/daterangepicker/daterangepicker.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('authen/vendor/countdowntime/countdowntime.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('authen/js/main.js')}}"></script>

</body>
</html>
