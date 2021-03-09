<div class="row">
	<div class="form-group col-md-6">
		<label>Chases Number</label>
		<input type="text" name="chases_no" class="form-control">
	</div>
	<div class="form-group col-md-6">
		<label>Registration Number</label>
		<input type="text" name="registration_no" class="form-control">
	</div>
	<div class="form-group col-md-6">
		<label>Car Type</label>
		<select class="form-control" name="car_type">
			<option disabled="" selected="">Select Car Type</option>
			@foreach($car_types as $car_type)
			<option value="{{$car_type->id}}">{{$car_type->name}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group col-md-6">
		<label>Car Company</label>
		<select class="form-control" name="car_company">
			<option disabled="" selected="">Select Car Company</option>
			<option value="0">Self</option>
			@foreach($companies as $car_company)
			<option value="{{$car_company->id}}">{{$car_company->name}}</option>
			@endforeach
		</select>
	</div>
</div>