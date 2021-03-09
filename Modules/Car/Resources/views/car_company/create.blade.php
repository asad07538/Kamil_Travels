@extends('layouts.admin.master')

@section('content')


<div class="container ">
<div class="row   p-3  justify-content-center">
<div class="col-md-12">
	<div class="px-3">
		<h4 class="text-center p-3" >Add New Car Company</h4>
	</div>
	<form action="{{ route('car_company_store')}}" method="post">
		@csrf

		@include('car::car_company.form')
		<hr>
		<div class="form-group text-right">
			<input type="submit" class="btn btn-primary" value="Save">
		</div>
	</form>
	<hr>
</div>
</div>
</div>




@endsection