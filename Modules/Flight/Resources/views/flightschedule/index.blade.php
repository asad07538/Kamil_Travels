@extends('layouts.admin.master')

@section('content')

<div class="container card p-0">
	<div class="row p-3">
		<div class="col-md-6">
			<h4 >Flight Schedules</h4>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('flight_create')}}" class="btn btn-primary">Add New flight</a>
		</div>
	</div>
	<table class="table table-responsive-sm table-striped ">
		<thead>
			<tr>
				<th>S.No</th>
				<th>Flight</th>
				<th>Departure Date</th>
				<th>Departure Time</th>
				<th>Arrival Time</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($scheduleflights as $sc_flight)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$sc_flight->flight->name}}</td>
				<td>{{$sc_flight->departure_date}}</td>
				<td>{{$sc_flight->departure_time}}</td>
				<td>{{$sc_flight->arrival_time}}</td>
				<td>
					<a href="{{ route('flight_edit',$sc_flight->id)}}" class="btn btn-primary btn-sm"><i>Edit</i></a>
					<a href="{{ route('flight_delete',$sc_flight->id)}}" class="btn btn-primary btn-sm"><i>Delete</i></a>
				</td>
			</tr>
			@endforeach
		</tbody>		
	</table>
	<div class="p-3 	">
	</div>
</div>




@endsection