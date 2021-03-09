@extends('layouts.admin.master')

@section('content')
<div class="container ">
	<div class="row p-3">
		<div class="col-md-6">
			<h4 >Car Bookings</h4>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('car_booking_create')}}" class="btn btn-primary">Add Booking</a>
		</div>
	</div>
	<table class="table table-responsive-sm table-striped">
		<thead>
			<tr>
				<th>S.No</th>
				<th>Driver</th>
				<th>Car</th>
				<th>Companu</th>
				<th>Sector</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($car_bookings as $car_booking)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$car_booking->driver->person->name}}</td>
				<td>{{$car_booking->car->type->name}}</td>
				<td>
					@if($car_booking->car)
						{{$car_booking->car->company->name}}
					@endif
				</td>
				<td>{{$car_booking->sector->name}}</td>
				<td>{{$car_booking->status}}</td>
				<td><a href="{{ route('car_booking_show',$car_booking->id)}}" class="btn btn-primary btn-sm"><i>Show</i></a>
			</tr>
			@endforeach
		</tbody>		
	</table>
</div>




@endsection