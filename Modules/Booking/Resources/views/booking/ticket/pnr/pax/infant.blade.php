<hr>
<div class="card p-2">
	<h4 class="text-center">Infant</h4>
    @for($i=1;$i<=$pnr->infant;$i++)

			<div class="row mx-3">
				<div class="form-group col-md-3 p-0 m-0">
					<label>Current Adult</label><br>
					<select name="infant_current_adult[]" class="form-control p-1">
						<option selected="" disabled="">Select Adult</option>
					    @for($i=1;$i<=$pnr->adult;$i++)
							<option value="{{$i}}">{{$i}}</option>
					    @endfor
					</select>
				</div>
					<div class="form-group col-md-3 p-0 m-0">
						<label>Name</label>
						<input type="text" name="infant_name[]" class="form-control p-1">
					</div>
					<div class="form-group col-md-3 p-0 m-0">
						<label>Surname</label>
						<input type="text" name="infant_surname[]" class="form-control p-1">
					</div>
					<div class="form-group  col-md-3 p-0 m-0">
						<label>Date Of Birth</label>
						<input type="date" name="infant_dob[]" class="form-control p-1">
					</div>

					<div class="form-group col-md-3 p-0 m-0">
						<label>Phone Number</label>
						<input type="text" name="infant_pohne[]" class="form-control p-1">
					</div>
					<div class="form-group col-md-3 p-0 m-0">
						<label>Nationality</label>
						<select name="infant_country[]" class="form-control p-1">
							<option disabled="" selected="">Select Country</option>
							@foreach($countries as $country)
								<option value="{{$country->id}}">{{$country->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group col-md-3 p-0 m-0">
						<label>National ID #</label>
						<input type="text" name="infant_cnic[]" class="form-control p-1">
					</div>
			</div>
			<hr>
	@endfor
</div>
