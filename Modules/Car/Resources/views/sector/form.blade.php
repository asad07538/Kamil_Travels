<div class="row justify-content-center">
	<div class="col-md-6">
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" >
		</div>
		<div class="form-group">
			<label>Location From</label>
			<select class="form-control" name="location_from">
				<option disabled="" selected="">Location From</option>
				@foreach($locations as $location)
					<option value="{{$location->id}}">{{$location->name}}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<label>Location To</label>
			<select class="form-control" name="location_to">
				<option disabled="" selected="">Location To</option>
				@foreach($locations as $location)
					<option value="{{$location->id}}">{{$location->name}}</option>
				@endforeach
			</select>
		</div>
	</div>
</div>