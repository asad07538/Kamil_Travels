@extends('layouts.admin.master')

@section('content')
<div class="container py-3">
	<div class="row p-3">
		<div class="col-md-6">
			<h3>Reservations</h3>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('reservation_create') }}" class="btn btn-primary">Make a Booking</a>
		</div>
	</div>
	<table class="table table-responsive-sm table-bordered table-striped">
		<thead>
			<tr>
				<th>S.No</th>
				<th>Date</th>
				<th>Agent</th>
				<th>Customer</th>
				<th>Airline</th>
				<th>PNR</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($reservations as $reservation)
			<tr>
				<td>{{$reservation->id}}</td>
				<td>{{$reservation->date}}</td>
				<td>{{$reservation->created_by->name}}</td>
				<td>{{$reservation->airline}}</td>
				<td>{{$reservation->date}}</td>
				<td>{{$reservation->date}}</td>
				<td><a href="{{ route('reservation_show', $reservation->id) }}">View</a></td>
			</tr>
			@endforeach
		</tbody>
		<tfoot>
			
		</tfoot>
	</table>
	
</div>




@endsection