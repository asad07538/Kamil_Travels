@extends('layouts.admin.master')

@section('content')
<div class="container p-3">
	<h4 class="px-4 py-2" >New Airlines</h4>
	<form action="{{ route('airline_store')}}" method="post"> 
		@csrf
	<div class="container">	
	<div class="row p-3">
		<div class="form-group col-md-6">
			<label>Name</label>
			<input type="text" placeholder="Name" name="name" class="form-control">
		</div>
		<div class="form-group col-md-6">
			<label>Code</label>
			<input type="text" placeholder="Code" name="code" class="form-control">
		</div>
	<div class="col-md-6 p-3">
		<h5>Commission</h5>
<!-- Commission System -->
		<div class="form-group">
			<label>Commission System</label>
			<select name="commission_system"  class="form-control">
				<option>Instantly</option>
				<option>Forenight</option>
			</select>
		</div>
		<div class="form-group">
			<label>Commission International</label>
			<input type="number" min="0" value="0" required="" name="commission_international" class="form-control">
		</div>
		<div class="form-group">
			<label>Commission Domestic</label>
			<input type="number" min="0" value="0" required="" name="commission_domestic" class="form-control">
		</div>
	</div>
	<div class="col-md-6  p-3">
		<h5>Service Charge</h5>
<!-- Service Charege -->
		<div class="form-group ">
			<label>Service Charge System</label>
			<select name="service_charge_system"  class="form-control">
				<option>Instantly</option>
				<option>Forenight</option>
			</select>
		</div>
		<div class="form-group ">
			<label>Commission International</label>
			<input type="number" min="0" value="0" required="" name="service_charge_international" class="form-control">
		</div>
		<div class="form-group ">
			<label>Commission Domestic</label>
			<input type="number" min="0" value="0" required="" name="service_charge_domestic" class="form-control">
		</div>
<!--  -->
	</div>
		<div class="form-group text-right">
			<input type="submit" class="btn btn-primary">
		</div>
	</div>
	</div>
	</form>
</div>




@endsection