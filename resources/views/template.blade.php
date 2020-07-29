<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DataWarga</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
</head>

<body>
	<? php
	$halaman='';
	if (Request::segment(1) == 'keluarga') {
		$halaman = 'keluarga';
	}
	?>

	<div class="container">
		@include('navbar')
		@yield('main')
	</div>
		@yield('footer')
	<script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/bootstrap.js') }}"></script>

</body>
</html>