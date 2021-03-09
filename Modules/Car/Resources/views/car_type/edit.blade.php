@extends('layouts.admin.master')

@section('content')


<div class="container ">
<div class="row  p-3  justify-content-center">
<div class="col-md-12">
	<div class="px-3">
		<h4 class="text-center p-3" >Edit Car Type</h4>
	</div>
	<form action="{{ route('car_type_update',$car_type->id)}}" method="post">
		@csrf

		@include('car::car_type.form')
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