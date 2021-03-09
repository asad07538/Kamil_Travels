<hr>
<div class="card p-2">
	<h4 class="text-center">Adult</h4>
    @for($i=1;$i<=$pnr->adult;$i++)

	<!-- foreach($pnr-> as $pax) -->
		<div class="row mx-3">
			<div class="form-group col-md-3 p-0 m-0">
				<label>Gender</label><br>
				<select name="adult_gender[]"  class="form-control p-1">
					<option>Male</option>
					<option>Female</option>
				</select>
			</div>
			<div class="form-group col-md-3 p-0 m-0">
				<label>Name</label>
				<input type="text" name="adult_name[]" class="form-control p-1">
			</div>
			<div class="form-group col-md-3 p-0 m-0">
				<label>Surname</label>
				<input type="text" name="adult_surname[]" class="form-control p-1">
			</div>
			<div class="form-group  col-md-3 p-0 m-0">
				<label>Date Of Birth</label>
				<input type="date" name="adult_dob[]" class="form-control p-1">
			</div>

			<div class="form-group col-md-3 p-0 m-0">
				<label>Phone Number</label>
				<input type="text" name="adult_pohne[]" class="form-control p-1">
			</div>
			<div class="form-group col-md-3 p-0 m-0">
				<label>Nationality</label>
				<select name="adult_country[]" class="form-control p-1">
					<option disabled="" selected="">Select Country</option>
					@foreach($countries as $country)
						<option value="{{$country->id}}">{{$country->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group col-md-3 p-0 m-0">
				<label>National ID #</label>
				<input type="text" name="adult_cnic[]" class="form-control p-1">
			</div>
			<div class="form-group col-md-3 p-0 m-0">
				<label>Member ID</label>
				<input type="text" name="adult_member_id[]" class="form-control p-1">
			</div>
			<div class="form-group col-md-3 p-0 m-0">
				<label>Email</label>
				<input type="email" name="adult_email[]" class="form-control p-1">
			</div>
		</div>
		<hr>
	<!-- endforeach -->
	@endfor
</div>
