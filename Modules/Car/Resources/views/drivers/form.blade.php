<div class="row justify-content-center">
	<div class="form-group col-md-5">
		<label>Company</label>
		<select class="form-control" name="company">
			<option disabled="" selected="">Select Company</option>
			<option value="0">Self</option>
			@foreach($companies as $company)
				<option value="{{$company->id}}">{{$company->name}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group col-md-5">
		<label>Licence</label>
		<input type="text" name="licence_no" class="form-control">
	</div>
</div>
<div class="row p-3">
	@include('common::forms.personform')
</div>