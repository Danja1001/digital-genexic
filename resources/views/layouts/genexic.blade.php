<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="IE=edge" />
	<title>Gelexic</title>

	<!-- CSS -->
	<link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" media="screen">
	<link href="{{ asset('assets/css/media.css') }}" rel="stylesheet" media="screen">
	<link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" media="screen">
	<link href="{{ asset('assets/css/style-without-scss.css') }}" rel="stylesheet" media="screen">
	<!-- END OF CSS -->
	<!--SCRIPT -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="{{ asset('assets/js/wow.min.js') }}"></script>
	<!-- END OF SCRIPT -->
</head>

<body>

	<!-- PRELOADER -->
	<div class="preloader">
		<div class="cssload-loader"></div>
	</div>
	<!-- YIELD PAGE -->

	<main>
		@yield('content')
	</main>

	<script src="{{ asset('assets/canvas/lib/jquery-1.11.0.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.isotope.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.isotope.sloppy-masonry.min.js') }}"></script>
	<script src="{{ asset('assets/canvas/waterpipe.js') }}"></script>
	<script src="{{ asset('assets/js/main.js') }}"></script>
	<script>
		function func() {
			var smokyBG = $(' #wavybg-wrapper').waterpipe({
				gradientStart: '#000000',
				gradientEnd: '#9b6dc2',
				smokeOpacity: 0.1,
				numCircles: 3,
				maxMaxRad: 'auto',
				minMaxRad: 'auto',
				minRadFactor: 0,
				iterations: 8,
				drawsPerFrame: 10,
				lineWidth: 1.1,
				speed: 1,
				bgColorInner: "#2F1B56",
				bgColorOuter: "#170117",
			});
		}
		setTimeout(func, 1000);
	</script>
	<script>
		new WOW().init();
	</script>
</body>

</html>