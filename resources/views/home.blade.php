@extends('App.app')
@section('content')

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

<div>
	<nav class="navbar bg-light">

		<h1>All Hotel</h1>
		<ul>
			@foreach ($hotels as $hotel)
			<li class="nav-item">
				<a class="nav-link" href="{{url('hotel/'.$hotel->id)}}"><i
						class="fa fa-tshirt"></i>{{$hotel->name}}</a>
			</li>
			@endforeach
		</ul>

	</nav>
</div>

@endsection