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
          <div class="wrap">
		<div class="container">
			<div class="row">
				<div id="availability">
					<form action="{{url('checkroom')}}" method="POST">
                                                            @csrf 

						
						<div class="a-col alternate">
							<div class="input-field">
								<label for="date-start">Check In</label>
								<input type="date" class="form-control" name="start_date" />
							</div>
						</div>
						<div class="a-col alternate">
							<div class="input-field">
								<label for="date-end">Check Out</label>
								<input type="date" class="form-control" name="end_date" />
							</div>
						</div>
						<div class="a-col action">
							<button type="submit"><span>Check</span>Availability</button>
								
							
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
@if(isset($rooms))
    

          <div>
                    <nav class="navbar bg-light">
                    
                    
                        <h1>All Available Rooms</h1>
                        <form action="{{url('checkout')}}" method="POST">
                              @csrf 

                              <input type="text" name="booking_name" placeholder="booking name">
                              <ul>
                                  @foreach ($rooms as $room)
                                  <li class="nav-item">
                                        <input type="checkbox" name="room_id[]" value="{{$room->id}}"><label>{{$room->room_number}} {{$room->type}}({{$room->price}}$)</label>
                   
                                  </li>
                                  @endforeach
                              </ul>
                              <button type="submit">Booking</button>
								
							
                        </form>
                          </nav>
                        </div>
@endif
@endsection