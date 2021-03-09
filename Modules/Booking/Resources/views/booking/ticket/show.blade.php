@extends('layouts.admin.master')

@section('content')
<div class="container ">
	<div class="row p-3">
		<div class="col-md-6">
			<h4><a href="{{ route('booking_show',$booking->id)}}">Invoice Code: {{$booking->code}}</a></h4>
			<h5>PNR: {{$pnr->name}}</h5>
			<h6>
				@if($pnr->airline)
						Airline: {{$pnr->airline->title}}
				@endif
			</h6>
		</div>
	</div>
	<hr>
		@include('booking::booking.ticket.details.iternary')
	<hr>
		@include('booking::booking.ticket.details.flight')
	<hr>
		@include('booking::booking.ticket.details.passenger')
	<hr>
		@include('booking::booking.ticket.details.fare')
</div>
@endsection