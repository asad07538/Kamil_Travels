@extends('layouts.admin.master')

@section('content')
<div class="container ">
	<div class="row p-3">
		<div class="col-md-6">
			<h4>Invoice Code: {{$booking->code}}</h4>
			<h5>Hotel: {{$hotel->name}}</h5>
		</div>
	</div>
	<hr>
		@include('booking::booking.hotel.details.room')
	<hr>
		@include('booking::booking.hotel.details.guests')
</div>
@endsection