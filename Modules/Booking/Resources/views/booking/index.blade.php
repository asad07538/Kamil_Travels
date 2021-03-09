@extends('layouts.admin.master')

@section('content')
<div class="container ">
	<div class="row p-3">
		<div class="col-md-6">
			<h4>Sales</h4>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('booking_create')}}" class="btn btn-primary btn-sm">New Sale</a>
		</div>
	</div>
	<div class="">
		<table class="table">
			<thead>
				<tr>
					<th>S.No</th>
					<th>Customer</th>
					<th>Sale By</th>
					<th>Date</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($bookings as $booking)
				<tr>
					<td>{{$booking->code}}</td>
					<td>@if($booking->customer)
							{{$booking->customer->title}}
						@endif
					</td>
					<td>{{$booking->sale_person->title}}</td>
					<td>{{$booking->date}}</td>
					<td>
						<a href="{{ route('booking_show',$booking->id)}}" class="btn btn-sm btn-primary">View</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		
	</div>
</div>




@endsection