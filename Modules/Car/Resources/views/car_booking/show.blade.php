@extends('layouts.admin.master')

@section('content')
<div class="container ">
	<div class="row p-3">
		<div class="col-md-6">
			<h4 >Car Bookings: {{$carboking->id}}</h4>
		</div>
	</div>
	<table class="table table-responsive-sm table-striped">
			<tr>
				<th>Car</th>
				<th>Seats</th>
				<th>Company</th>
				<th>Driver</th>			
			</tr>
			<tr>
				<td class="p-1">{{$carboking->car->type->name}}</td>
				<td class="p-1">{{$carboking->car->type->seats}}</td>
				<td class="p-1">
					@if($carboking->car->company)
						{{$carboking->car->company->name}}
					@endif
				</td>
				<td class="p-1">{{$carboking->driver->person->name}}</td>
			</tr>
			<tr>
				<th>departure date</th>
				<th>departure time</th>
				<th>arrival date</th>
				<th>arrival time</th>
			</tr>
			<tr>
				<td class="p-1">{{$carboking->traveling_date}}</td>
				<td class="p-1">{{$carboking->traveling_time}}</td>
				<td class="p-1">{{$carboking->arrival_date}}</td>
				<td class="p-1">{{$carboking->arrival_time}}</td>
			</tr>
	</table>
	<div class="row p-3">
		<div class="col-md-6">
			<h4>Passengers</h4>
		</div>
	</div>
	<hr>
	<table class="table table-responsive-sm table-striped">
		<tr>
			<th>Booking</th>
			<th>Passenger</th>
			<th>Email</th>
			<th>Seat No</th>
			<th>Total Fare</th>
			<th>Received</th>
			<th>Remaining</th>
		</tr>
		@foreach($carboking->passengers as $car_pax)
		<tr>
			<td class="p-1">{{$car_pax->booking->id}}</td>
			<td class="p-1">{{$car_pax->person->name}}</td>
			<td class="p-1">{{$car_pax->person->email}}</td>
			<td class="p-1">{{$car_pax->seat_no}}</td>
			<td class="p-1">{{$car_pax->total_fare}}</td>
			<td class="p-1">{{$car_pax->received}}</td>
			<td class="p-1">{{$car_pax->remaining}}</td>
		</tr>
		@endforeach
		<tfoor>
			<th colspan="3">Total</th>
			<th></th>
			<th></th>
			<th></th>
		</tfoor>

	</table>
	<div class="row p-3">
		<div class="col-md-6">
			<h4>Driver</h4>
		</div>
	</div>
	<hr>
	<table class="table table-responsive-sm table-striped">
		<tr>
			<th></th>
		</tr>
		<tr>
			<td class="p-1">{{$carboking->advance}}</td>
			<td class="p-1">{{$carboking->advance_received_by_office}}</td>
			<td class="p-1">{{$carboking->received_from_driver}}</td>
			<td class="p-1">{{$carboking->remaining_balance}}</td>
		</tr>
	</table>
	<div class="row p-3">
		<div class="col-md-6">
			<h4>Expences</h4>
		</div>
	</div>
	<hr>
	<table class="table table-responsive-sm table-striped">
		<tr>
			<th>Fuel</th>
			<th>Driver Comm</th>
			<th>Tools</th>
			<th>Other Expances</th>
			<th>Total </th>
		</tr>
		<tr>
			<td class="p-1">{{$carboking->fuel}}</td>
			<td class="p-1">{{$carboking->com_driver}}</td>
			<td class="p-1">{{$carboking->tools}}</td>
			<td class="p-1">{{$carboking->other_expances}}</td>
			<td class="p-1">{{$carboking->total_expances}}</td>
		</tr>
	</table>
</div>




@endsection