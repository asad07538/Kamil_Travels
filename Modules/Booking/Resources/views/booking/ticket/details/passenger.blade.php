<div class="row">
	<div class="col-md-6">
		<h3>Passenger Detail</h3>
	</div>
	<div class="col-md-6 text-right">
		@if($booking->status != "complete")
		<a href="{{ route('pnr_enter_ticket_number',['id'=>$booking->id,'pnr_id'=>$pnr->id])}}" class="btn btn-sm btn-primary ">Add Ticket Numbers</a>
		@endif
		@if($booking->status != "complete")
		<a href="{{ route('booking_create_pnr_pax',['id'=>$booking->id,'pnr_id'=>$pnr->id])}}" class="btn btn-sm btn-primary ">Add Passenger Details</a>
		@endif
	</div>
</div>

<div class="container">
	<table class="table table-responsive-sm table-hover">
		<thead>
			<tr>
				<td>Ticket #</td>
				<td>Pax</td>
				<td>Name</td>
				<td>SurName</td>
				<td>Country</td>
				<td>DOB</td>
				<td>Gender</td>
				<td>CNIC</td>
				<td>Current Adult</td>
			</tr>
		</thead>
		@if($pnr->passengers)
		@foreach($pnr->passengers as $pax)
		<tr>
			<td class="py-1">{{$pax->ticket_no}}</td>
			<td class="py-1">{{$pax->pax_type}}</td>
			<td class="py-1">{{$pax->person->name}}</td>
			<td class="py-1">{{$pax->person->surname}}</td>
			<td class="py-1">{{$pax->person->nationality->name}}</td>
			<td class="py-1">{{$pax->person->date_of_birth}}</td>
			<td class="py-1">{{$pax->person->gender}}</td>
			<td class="py-1">{{$pax->person->cnic}}</td>
			<td class="py-1">{{$pax->current_adult}}</td>
		</tr>
		@endforeach
		@endif
	</table>
</div>

