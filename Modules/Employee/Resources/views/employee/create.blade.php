@extends('layouts.admin.master')

@section('content')


<div class="container ">
<div class="row  p-3 justify-content-center">
<div class="col-md-12">
	<div class="px-3">
		<h4 class="text-center p-3" >Add New Employee</h4>
	</div>
	<form action="{{ route('employee_store')}}" method="post" enctype="multipart/form-data">
		@csrf
		@include('common::forms.personform') 
		<div class="row">
	      <div class="form-group col-md-6">
	          <label>Choose Image</label>
	          <input type="file" name="image" class="form-control" required="">
	      </div> 
	      <div class="form-group col-md-6">
	          <label>Employee Type</label>
	          <select name="emp_type" class="form-control">
	          	<option value="1">Admin</option>
	          	<option value="2">Employee</option>
	          	<option value="3">Agent</option>
	          </select>
	      </div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-6">
				<h5>Note:</h5>
				<p>Your First Email Will be considered as the primary email and used for login.</p>
			</div>
			<div class="col-md-6">
				<div class="form-group text-right">
					<input type="submit" class="btn btn-primary" value="Save">
				</div>
			</div>
		</div>
	</form>
	<hr>
</div>
</div>
</div>




@endsection