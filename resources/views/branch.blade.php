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
							<li><a class="active" href="index.html">Home</a></li>
							<li>
								<a href="hotel.html" class="fh5co-sub-ddown">Hotel</a>
								<ul class="fh5co-sub-menu">
								 	<li><a href="#">Luxe Hotel</a></li>
								 	<li><a href="#">Deluxe Hotel</a></li>
									<li>
										<a href="#" class="fh5co-sub-ddown">King Hotel</a>
										<ul class="fh5co-sub-menu">
											<li><a href="http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template" target="_blank">Build</a></li>
											<li><a href="http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap" target="_blank">Work</a></li>
											<li><a href="http://freehtml5.co/preview/?item=light-free-html5-template-bootstrap" target="_blank">Light</a></li>
											<li><a href="http://freehtml5.co/preview/?item=relic-free-html5-template-using-bootstrap" target="_blank">Relic</a></li>
											<li><a href="http://freehtml5.co/preview/?item=display-free-html5-template-using-bootstrap" target="_blank">Display</a></li>
											<li><a href="http://freehtml5.co/preview/?item=sprint-free-html5-template-bootstrap" target="_blank">Sprint</a></li>
										</ul>
									</li>
									<li><a href="#">Five Star Hotel</a></li> 
								</ul>
							</li>
							<li><a href="services.html">Services</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="contact.html">Contact</a></li>
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
		   	<li style="background-image:  url({{asset('frontend/images/slider1.jpg')}});">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<p><span>Bora Hotel</span></p>
		   						<h2>Reserve Room for Family Vacation</h2>
			   					<p>
			   						<a href="#" class="btn btn-primary btn-lg">Book Now</a>
			   					</p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image:  url({{asset('frontend/images/slider2.jpg')}});">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<p><span>Deluxe Hotel</span></p>
		   						<h2>Make Your Vacation Comfortable</h2>
			   					<p>
			   						<a href="#" class="btn btn-primary btn-lg">Book Now</a>
			   					</p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image:  url({{asset('frontend/images/slider3.jpg')}});">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<p><span>Luxe Hotel</span></p>
		   						<h2>A Best Place To Enjoy Your Life</h2>
			   					<p>
			   						<a href="#" class="btn btn-primary btn-lg">Book Now</a>
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


    <h1>All Branch</h1>
          <ul>
              @foreach ($branches as $branch)
              <li class="nav-item">
                  <a class="nav-link" href="{{url('branch/'.$branch->id)}}"><i  class="fa fa-tshirt"></i>{{$branch->name}}</a>
              </li>
              @endforeach
          </ul>

      </nav>
    </div>
@endsection