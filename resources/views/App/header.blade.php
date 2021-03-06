<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Luxe &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="{{asset('frontend/favicon.ico')}}">
	<!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,900,700,900italic' rel='stylesheet' type='text/css'> -->

	<!-- Stylesheets -->
	<!-- Dropdown Menu -->
	<link rel="stylesheet" href="{{asset('frontend/css/superfish.css')}}">
	<!-- Owl Slider -->
	<!-- <link rel="stylesheet" href="css/owl.carousel.css"> -->
	<!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
	<!-- Date Picker -->
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap-datepicker.min.css')}}">
	<!-- CS Select -->
	<link rel="stylesheet" href="{{asset('frontend/css/cs-select.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/cs-skin-border.css')}}">

	<!-- Themify Icons -->
	<link rel="stylesheet" href="{{asset('frontend/css/themify-icons.css')}}">
	<!-- Flat Icon -->
	<link rel="stylesheet" href="{{asset('frontend/css/flaticon.css')}}">
	<!-- Icomoon -->
	<link rel="stylesheet" href="{{asset('frontend/css/icomoon.css')}}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('frontend/css/flexslider.css')}}">
	
	<!-- Style -->
	<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{asset('frontend/js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	<div id="fh5co-wrapper">
		<div id="fh5co-page">
		   <div id="fh5co-header">
		      <header id="fh5co-header-section">
			<div class="container">
			      <div class="nav-header">
			      <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
				      <h1 id="fh5co-logo"><a href="index.html">Luxe</a></h1>
				         <nav id="fh5co-menu-wrap" role="navigation">
					      <ul class="sf-menu" id="fh5co-primary-menu">
						@guest
						      @if (Route::has('login'))
						        <li class="nav-item">
							 <a class="nav-link" href="{{ route('login') }}">{{__('Login') }}</a>
						        </li>
						      @endif
						      @if (Route::has('register'))
							<li class="nav-item">
							  <a class="nav-link" href="{{ route('register') }}">{{__('Register')}}</a>
							</li>
						      @endif
						      @else
						         <li>
							 <div aria-labelledby="navbarDropdown" style="color: black">
							      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{__('Logout')}}</a>
							         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
								      @csrf
							         </form>
							  </div>
							</li>
						      @endguest
	      
						      </ul>
					      </nav>
					      </div>
					      </div>
				      </header>
	      
			      </div>
			      <!-- end:fh5co-header -->
			      <aside id="fh5co-hero" class="js-fullheight">
				      <div class="flexslider js-fullheight">
					      <ul class="slides">
						      <li
							      style="background-image:  url({{asset('frontend/images/slider1.jpg')}});">
							      <div class="overlay-gradient"></div>
							      <div class="container">
								      <div
									      class="col-md-12 col-md-offset-0 text-center slider-text">
									      <div
										      class="slider-text-inner js-fullheight">
										      <div class="desc">
											      <p><span>Bora
													      Hotel</span>
											      </p>
											      <h2>Reserve Room for
												      Family
												      Vacation
											      </h2>
											      <p>
												      <a href="#"
													      class="btn btn-primary btn-lg">Book
													      Now</a>
											      </p>
										      </div>
									      </div>
								      </div>
							      </div>
						      </li>
						      <li
							      style="background-image:  url({{asset('frontend/images/slider2.jpg')}});">
							      <div class="overlay-gradient"></div>
							      <div class="container">
								      <div
									      class="col-md-12 col-md-offset-0 text-center slider-text">
									      <div
										      class="slider-text-inner js-fullheight">
										      <div class="desc">
											      <p><span>Deluxe
													      Hotel</span>
											      </p>
											      <h2>Make Your
												      Vacation
												      Comfortable
											      </h2>
											      <p>
												      <a href="#"
													      class="btn btn-primary btn-lg">Book
													      Now</a>
											      </p>
										      </div>
									      </div>
								      </div>
							      </div>
						      </li>
	      
					      </ul>
				      </div>
			      </aside>
	      
	      
		      </div>
		      <!-- END fh5co-page -->
	      
	      </div>