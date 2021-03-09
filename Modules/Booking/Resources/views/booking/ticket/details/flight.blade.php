	<div class="row">
		<div class="col-md-6">
			<h3>Flight Detail</h3>
		</div>
		<div class="col-md-6 text-right">
		@if($booking->status != "complete")
			<a href="{{ route('booking_create_pnr_flight',['id'=>$booking->id,'pnr_id'=>$pnr->id])}}" class="btn btn-sm btn-primary">Add Flight Details</a>
		@endif
		</div>
	</div>
	<div>
		<table class="table table-responsive-sm">
			<tr>
				<th class="py-1">Flight</th>
				<th class="py-1">Airport From</th>
				<th class="py-1">Airport To</th>
				<th class="py-1">Depart Date</th>
				<th class="py-1">Depart Time</th>
				<th class="py-1">Arrival Time</th>
				<th class="py-1">Bag</th>
				<th class="py-1">Class</th>
				<th class="py-1">Status</th>
			</tr>
			@foreach($pnr->flights as $flight)
				<tr>
					<td class="py-1">{{$flight->schedule_flights->flight->name}}</td>
					<td class="py-1">{{$flight->schedule_flights->flight->sector->departure_airport->name}}</td>
					<td class="py-1">{{$flight->schedule_flights->flight->sector->arrival_airport->name}}</td>
					<td class="py-1">{{$flight->schedule_flights->departure_date}}</td>
					<td class="py-1">{{$flight->schedule_flights->departure_time}}</td>
					<td class="py-1">{{$flight->schedule_flights->arrival_time}}</td>
					<td class="py-1">{{$flight->bag}}</td>
					<td class="py-1">{{$flight->class}}</td>
					<td class="py-1">{{$flight->class}}</td>
				</tr>
			@endforeach
		</table>
	</div>