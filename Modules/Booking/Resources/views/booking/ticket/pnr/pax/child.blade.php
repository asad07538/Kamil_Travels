<hr>
	<div class="card p-2">
		<h4 class="text-center">Child</h4>
    @for($i=1;$i<=$pnr->child;$i++)

				<div class="row mx-3">
					<div class="form-group col-md-3 p-0 m-0">
						<label>Title</label><br>
						<select name="child_title[]" class="form-control p-1">
							<option>MSTR</option>
							<option>MISS</option>
						</select>
					</div>
					<div class="form-group col-md-3 p-0 m-0">
						<label>Name</label>
						<input type="text" name="child_name[]" class="form-control p-1">
					</div>
					<div class="form-group col-md-3 p-0 m-0">
						<label>Surname</label>
						<input type="text" name="child_surname[]" class="form-control p-1">
					</div>
					<div class="form-group  col-md-3 p-0 m-0">
						<label>Date Of Birth</label>
						<input type="date" name="child_dob[]" class="form-control p-1">
					</div>

					<div class="form-group col-md-3 p-0 m-0">
						<label>Phone Number</label>
						<input type="text" name="child_pohne[]" class="form-control p-1">
					</div>
					<div class="form-group col-md-3 p-0 m-0">
						<label>Nationality</label>
						<select name="child_country[]" class="form-control p-1">
							<option disabled="" selected="">Select Country</option>
							@foreach($countries as $country)
								<option value="{{$country->id}}">{{$country->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group col-md-3 p-0 m-0">
						<label>National ID #</label>
						<input type="text" name="child_cnic[]" class="form-control p-1">
					</div>
					<div class="form-group col-md-3 p-0 m-0">
						<label>Member ID</label>
						<input type="text" name="child_member_id[]" class="form-control p-1">
					</div>
					<div class="form-group col-md-3 p-0 m-0">
						<label>Email</label>
						<input type="email" name="child_email[]" class="form-control p-1">
					</div>
		</div>
			<hr>
		@endfor
		</div>
