<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

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
			<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
			<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
			<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
			<link href="css/style.css" rel="stylesheet" media="screen">
			<link href="css/media.css" rel="stylesheet" media="screen">
			<link href="css/animate.css" rel="stylesheet" media="screen">
			<link href="css/style-without-scss.css" rel="stylesheet" media="screen">
		<!-- END OF CSS -->
		<!--SCRIPT -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
			<script src="js/wow.min.js"></script>
		<!-- END OF SCRIPT -->
	</head>
<body>

<!-- PRELOADER -->
<div class="preloader">
	<div class="cssload-loader"></div>
</div>

	<header>	
			<div class="container-fluid header-background" id="wavybg-wrapper" style="width: 100%; height: 100%;">
				<canvas>Your browser does not support HTML5 canvas.</canvas>
					<div class="mobile">
						<a class="mobile-menu-toggle js-toggle-menu hamburger-menu" href="#">
							    <span class="menu-item"></span>
							    <span class="menu-item"></span>
							    <span class="menu-item"></span>
						</a>
						<nav class="mobile-nav-wrap">
							<ul class="mobile-header-nav">
								<li><a href="index.html">home</a></li>
								<li><a href="o_nas.html">about us</a></li>
								<li><a href="services.html">services</a></li>
								<li><a href="portfolio.html">portfolio</a></li>
								<li><a href="blog.html">blog</a></li>
								<li><a href="contacts.html">contact us</a></li>
							</ul>
						</nav>
					</div>
					<div class="row padding-top-header">
						<div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
							<div class="header-logo"> 
								<a href="index.html"><img src="img/Logo.svg" alt="#"></a>
							</div>
						</div>
						<div class="col-lg-6 col-lg-push-1 col-md-7 col-md-push-1 col-sm-8 col-sm-push-1 col-xs-8 nav-media">
							<div class="header-nav wow flipInX">
								<ul> 
									<li><a href="index.html">home</a></li>
									<li><a href="o_nas.html">about us</a></li>
									<li><a href="services.html">services</a></li>
									<li><a href="portfolio.html">portfolio</a></li>
									<li><a href="blog.html">blog</a></li>
									<li><a href="contacts.html">contact us</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row header-section-two">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 digital-agency">
							<h1>We are <br> digital agency</h1>
							<p>We Create Your Imagination Into Reality</p>
							<div class="button-container-1">
						      	<span class="mas">Get in touch</span>
						    	<button id='go2' type="button" name="Hover">Get in touch</button>
							</div>
							<div class="block-social">
								<ul> 
									<li><a href="#" id="zoom-fade1">facebook</a></li>
									<li><a href="#" id="zoom-fade2">twitter</a></li>
									<li><a href="#" id="zoom-fade3">linkedin</a></li>
								</ul>
							</div>
						</div>
					</div>
			</div>
    </header>
    
    <!-- YIELD PAGE -->

    <main>
            @yield('content')
    </main>

	<script src="canvas/lib/jquery-1.11.0.min.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src ='js/jquery.isotope.sloppy-masonry.min.js'></script>
	<script src="canvas/waterpipe.js"></script>
	<script src="js/main.js"></script>
	<script>
		function func() {
		   var smokyBG = $('#wavybg-wrapper').waterpipe({
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
	<script>new WOW().init();</script>
</body>
</html>
