@extends('App.app')
@section('content')
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