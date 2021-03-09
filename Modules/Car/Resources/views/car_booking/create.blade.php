@extends('layouts.admin.master')

@section('content')


<div class="container ">
<div class="row justify-content-center  p-3 ">
<div class="col-md-12">
	<div class="px-3">
		<h4 class="text-center p-3" >Add New Car Booking</h4>
	</div>
	<form action="{{ route('car_booking_store')}}" method="post">
		@csrf

		@include('car::car_booking.form')
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