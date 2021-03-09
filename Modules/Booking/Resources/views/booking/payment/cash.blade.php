@extends('layouts.admin.master')

@section('content')
<form action="{{ route('booking_payment_cash_store')}}" method="post">
@csrf
<input type="hidden" name="bid" value="{{$booking->id}}">
<div class="container ">
	<h1 class="text-center py-2">Booking Code: {{$booking->code}}</h1>
	<h4>Cash Receipt</h4>
	<div class="">
		<h3>Tickets</h3>
		<table class="table ">
			<thead>
				<tr>
					<td>Name </td>
					<td>Ticket No</td>
					<td>Fare</td>
				</tr>
			</thead>
			<tbody>
			  @foreach($booking->tickets as $pnr)
				  @foreach($pnr->passengers as $ticket)
				  <tr>
				  	<td class="p-1">{{$ticket->person->name}}</td>
				  	<td class="p-1">{{$ticket->person->name}}</td>
				  	<!-- <td class="p-1">{{$ticket->fare}}</td> -->
				  	<td class="p-1">{{$ticket->fare->total}}</td>
				  </tr>
				  @endforeach
			  @endforeach
			</tbody>
		</table>
	</div>
	<div class="row p-3">
		<div class="form-group col-md-4">
			<label>Customer</label>
			<select class="form-control">
				<option selected="" disabled="">Select Customer</option>
			</select>
		</div>
		<div class="form-group col-md-4">
			<label>Total</label>
			<input type="text" name="total" readonly="" value="{{$booking->total_amount}}" class="form-control">
		</div>
		<div class="form-group col-md-4">
			<label>Discount</label>
			<input type="text" name="discount" readonly="" class="form-control" value="{{$booking->discount}}">
		</div>		
		<div class="form-group col-md-4">
			<label>Total Receivable</label>
			<input type="text" name="receivable" readonly="" class="form-control" value="{{$booking->extra}}">
		</div>		
		<div class="form-group col-md-4">
			<label>Amount Received</label>
			<input type="text" name="reveived" class="form-control" placeholder="Amount Received">
		</div>
	</div>
	<div class="text-right px-4">
		<input type="submit" name="" value="Submit" class="btn btn-primary">
	</div>



</form>


@endsection