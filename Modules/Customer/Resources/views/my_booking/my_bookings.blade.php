@extends('layouts.guest.master')

@section('content')


<div class="container p-4">
	<div class="row">
		<div class="col-md-4">
			<div class="card m-2 ">
				
			<h3 class="text-center p-2">Account Details</h3>	
			<table class="table table-striped table-hover ">
				<tr>
					<th>Title</th>
					<td>{{Auth::user()->customer->general_account->title}}</td>
				</tr>
				<tr>
					<th>Credit Limit</th>
					<td>{{Auth::user()->customer->general_account->credit_limit}}</td>
				</tr>
				<tr>
					<th>Credit Days</th>
					<td>{{Auth::user()->customer->general_account->credit_days}}</td>
				</tr>
			</table>	
			</div>
		</div>
		<div class="col-md-8">
			<div class="card m-2">			
				<h3 class="text-center p-2">Bookings</h3>	
				<table class="table table-striped table-hover table-responsive-sm">
					<thead>
						<tr>
							<th>Booking Code</th>
							<th>Date</th>
							<th>Total</th>
							<th>Discount</th>
							<th>Total Receivable</th>
							<th>Received</th>
							<th>Status</th>
							<th>View</th>
						</tr>
					</thead>
					<tbody>
						@foreach(Auth::user()->customer->general_account->bookings as $booking)
						<tr>
							<td>{{$booking->code}}</td>
							<td>{{$booking->date}}</td>
							<td>{{$booking->total_amount}}</td>
							<td>{{$booking->discount}}</td>
							<td>{{$booking->total_receivable}}</td>
							<td>{{$booking->received_amount}}</td>
							<td>{{$booking->status}}</td>
							<td>
								<a href=""><i class="fa fa-eye"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection
