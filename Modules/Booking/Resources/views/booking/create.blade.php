@extends('layouts.admin.master')

@section('content')
<div class="container ">
	<div class="row p-3">
		<div class="col-md-6">
			<h4>New Sale {{$booking->code}}</h4>
		</div>
	</div>

	<div class="row justify-content-center">
		<div class="col-md-12 ">
			@include('booking::booking.tabs')
		</div>
	</div>
		<h3>Total Fare Details</h3>
	<div class="row p-3">
		<div class="form-group col-md-2 left-border">
			<label><strong>Total :</strong>
		</label><br>
			{{$booking->total_amount}}
		</div>
		<div class="form-group col-md-2 left-border">
			<label><strong>Discount</strong>
				@if($booking->status != "complete")
				<a href="" class="btn btn-primary btn-sm py-1">Edit</a>
				@endif
			</label><br>
			{{$booking->discount}}
		</div>
		<div class="form-group col-md-2 left-border">
			<label><strong>Extra</strong>
				@if($booking->status != "complete")
				<a href="" class="btn btn-primary btn-sm py-1">Adjust</a>
				@endif
			</label><br>
			{{$booking->extra}}
		</div>
		<div class="form-group col-md-2 left-border">
			<label><strong>Total Receivable</strong></label><br>
			{{$booking->total_receivable}}
		</div>
		<div class="form-group col-md-2 left-border">
			<label><strong>Received</strong></label><br>
			{{$booking->received_amount}}
		</div>
	</div>
		@if($booking->status != "complete")
		<h3>Payments</h3>
		<div class="text-center">
			<a href="{{ route('booking_payment_cash',$booking->id)}}" class="btn btn-primary">Cash</a>	
			<a href="{{ route('booking_payment_credit',$booking->id)}}" class="btn btn-primary">Credit</a>	
			<a href="{{ route('booking_payment_cheque',$booking->id)}}" class="btn btn-primary">Cheque</a>	
		</div>
		@endif
</div>




@endsection