<div class="row justify-content-center">
	<div class="form-group col-md-6 ">
		<label>Car</label>
		<select class="form-control" name="car">
			<option disabled="" selected="">Select Car</option>
			@foreach($cars as $car)
				<option value="{{$car->id}}">{{$car->no_plate}}, {{$car->type->name}}, 
					@if($car->company){{$car->company->name}} @else Self @endif</option>
			@endforeach
		</select>
	</div>
	<div class="form-group col-md-6 ">
		<label>Driver</label>
		<select class="form-control" name="driver">
			<option disabled="" selected="">Select Driver</option>
			@foreach($drivers as $driver)
				<option value="{{$driver->id}}">{{$driver->person->name}},@if($driver->company) {{$driver->company->name}} @endif</option>
			@endforeach
		</select>
	</div>
	<div class="form-group col-md-6" >
		<label>From</label>
		<select class="form-control" name="from">
			<option>Sector</option>
			@foreach($locations as $location)
				<option value="{{$location->id}}">{{$location->name}}, {{$location->city->name}}, {{$location->city->country->name}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group col-md-6">
		<label>To</label>
		<select class="form-control" name="to">
			<option>To </option>
			@foreach($locations as $location)
				<option value="{{$location->id}}">{{$location->name}}, {{$location->city->name}}, {{$location->city->country->name}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group col-md-6">
		<label>Traveling Date</label>
		<input type="date" name="d_date" class="form-control">
	</div>
	<div class="form-group col-md-6">
		<label>Traveling Time</label>
		<input type="time" name="d_time" class="form-control">
	</div>
	<div class="form-group col-md-6">
		<label>Arrival Date</label>
		<input type="date" name="a_date" class="form-control">
	</div>
	<div class="form-group col-md-6">
		<label>Arrival Time</label>
		<input type="time" name="a_time" class="form-control">
	</div>
</div>








