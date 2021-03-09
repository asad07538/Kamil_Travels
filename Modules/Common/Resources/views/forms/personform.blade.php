<div class="row">
	<div class="form-group col-lg-3 ">
		<label>Name</label>
		<input type="text" name="name" class="form-control" required="">
	</div>
	<div class="form-group col-lg-3 ">
		<label>Sur_Name &nbsp;&nbsp;&nbsp;</label>
		<input type="text" name="sur_name" class="form-control">
	</div>
	<div class="form-group col-lg-3 ">
		<label>Cnic &nbsp;&nbsp;&nbsp;</label>
		<input type="text" name="cnic" class="form-control">
	</div>
 	<div class="form-group col-lg-3 ">
		<label>Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><br>
		<select name="gender" class="form-control">
			<option value="male">Male</option>
			<option value="female">Female</option>
			<!-- <option value="B">Both</option> -->
		</select>
	</div>
	<div class="form-group col-lg-3 ">
		<label>Country</label><br>
		<select name="country" class="form-control">
			<option disabled="" selected="">Select Country</option>
			@foreach($countries as $country)
				<option value="{{$country->id}}">{{$country->name}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group col-lg-3 ">
		<label>Date Of Birth</label>
		<input type="date" name="date_of_birth" class="form-control">
	</div>
	@include('common::forms.addressform')
	@include('common::forms.emailform')
	@include('common::forms.faxform')
	<!-- @include('common::forms.websiteform') -->
	@include('common::forms.phoneform')
</div>