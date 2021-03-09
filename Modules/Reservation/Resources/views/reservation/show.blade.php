@extends('layouts.admin.master')

@section('content')
<div class="container py-3">
	<div>
		<h3 class="text-center p-3" >New Reservation</h3>
	</div>
	<!-- Iternary and Fare List -->
	<div class="card my-3">
		<div class="card-header">
			<div class="row">
				<div class="col-md-6">
					<h4>Iternary Detail & Flight Details</h4>
				</div>
				<div class="col-md-6 text-right">
					<a href="{{ route('flight')}}" class="btn btn-primary">Add Iternary Detail</a>
				</div>
			</div>
		</div>
		<div class="card-body p-0">
			<div class="row m-3">		
					 <div class="col-md-4"><strong> Adults:</strong> 6</div>
					 <div class="col-md-4"><strong> Childs:</strong> 6</div>
					 <div class="col-md-4"><strong> Infant:</strong> 6</div>
			</div>
			<hr>
			<table class="table table-responsive-sm table-striped">
				<thead>
					<tr>
						<th>From </th>
						<th>To</th>
						<th>Flight No</th>
						<th>Departure Date</th>
						<th>Arrival Date</th>
						<th>Cabin</th>
						<th>Class</th>
						<th>Bag</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>From </td>
						<td>To</td>
						<td>Flight No</td>
						<td>Departure Date</td>
						<td>Arrival Date</td>
						<td>Cabin</td>
						<td>Class</td>
						<td>Bag</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<!-- Fare Details -->
	<div class="card my-3">
		<div class="card-header">
			<div class="row">
				<div class="col-md-6">
					<h4>Fare Options</h4>
				</div>
				<div class="col-md-6 text-right">
					<a href="{{ route('fare')}}"  class="btn btn-primary">Add Fare Detail</a>
				</div>
			</div>
		</div>
		<div class="card-body p-2 ">
			<table class="table table-responsive-sm  ">
				<thead>
					<tr>
						<th>Count</th>
						<th>B_Fare</th>
						<th>Surcharges</th>
						<th>Tax</th>
						<th>SubTotal</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th class="p-0">Adult
						<input type="hidden" name="adult" id="adult" value="">
						</th>
						<th class="p-1"><input type="" name="b_fare[]"></th>
						<th class="p-1"><input type="" name="surchage[]"></th>
						<th class="p-1"><input type="" name="tax[]"></th>
						<th class="p-1"><input type="" name="subtotal[]"></th>
						<th class="p-1"><input type="" name="total[]"></th>
					</tr>
					<tr>
						<th class="p-0">Child
						<input type="hidden" name="child" id="child" value="">
						</th>
						<th class="p-1"><input type="" name="b_fare[]"></th>
						<th class="p-1"><input type="" name="surchage[]"></th>
						<th class="p-1"><input type="" name="tax[]"></th>
						<th class="p-1"><input type="" name="subtotal[]"></th>
						<th class="p-1"><input type="" name="total[]"></th>
					</tr>
					<tr>
						<th class="p-1">Infant
						<input type="hidden" name="Infant" id="infant" value="">
						</th>
						<th class="p-1"><input type="" name="b_fare[]"></th>
						<th class="p-1"><input type="" name="surchage[]"></th>
						<th class="p-1"><input type="" name="tax[]"></th>
						<th class="p-1"><input type="" name="subtotal[]"></th>
						<th class="p-1"><input type="" name="total[]"></th>
					</tr>
				</tbody>
				<tfoot>
						<tr>
							<th colspan="5" class="text-right p-1">Total Base Fare</th>
							<th class="p-1"><input type="" name=""></th>
						</tr>
						<tr>
							<th colspan="5" class="text-right p-1">Total Equiv  Fare</th>
							<th class="p-1"><input type="" name=""></th>
						</tr>
						<tr>
							<th colspan="5" class="text-right p-1">Total Tax</th>
							<th class="p-1"><input type="" name=""></th>
						</tr>
						<tr>
							<th colspan="5" class="text-right p-1">Total Surcharge</th>
							<th class="p-1"><input type="" name=""></th>
						</tr>
						<tr>
							<th colspan="5" class="text-right p-1">Total ServiceCharge</th>
							<th class="p-1"><input type="" name=""></th>
						</tr>
						<tr>
							<th colspan="5" class="text-right p-1">Ticket Based Taxes</th>
							<th class="p-1"><input type="" name=""></th>
						</tr>
						<tr>
							<th colspan="5" class="text-right p-1">Total Amount</th>
							<th class="p-1"><input type="" name=""></th>
						</tr>
					</tfoot>
			</table>
		</div>
	</div>
	<!-- Pax Details -->
	<div class="card my-3">
		<div class="card-header">
			<div class="row">
				<div class="col-md-6">
					<h4>Passenger Details</h4>
				</div>
				<div class="col-md-6 text-right">
					<a href="{{ route('pax')}}" class="btn btn-primary">Add Pax Detail</a>
				</div>
			</div>
		</div>
		<div class="card-body p-0">
			<table class="table table-responsive-sm table-striped">
				<thead>
					<tr>
						<th>S.No</th>
						<th>Name</th>
						<th>Surname</th>
						<th>DOB</th>
						<th>Nationality</th>
						<th>National ID</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>S.No</td>
						<td>Name</td>
						<td>Surname</td>
						<td>DOB</td>
						<td>Nationality</td>
						<td>National ID</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<!-- Payment Details -->
	<div class="card my-3">
		<div class="card-header">
			<div class="row">
				<div class="col-md-6">
					<h4>Payment</h4>
				</div>
				<div class="col-md-6 text-right">
					<a href="{{ route('payment') }}" class="btn btn-primary">Add Payment</a>
				</div>
			</div>
		</div>
		<div class="card-body p-0">
			<table class="table table-striped table-responsive-sm">
				<thead>
					<tr>
						<td>S.No</td>
						<td>Payment Type</td>
						<td>Date</td>
						<td>Amount</td>
						<td>Cheque</td>
						<td>File</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>S.No</td>
						<td>Payment Type</td>
						<td>Date</td>
						<td>Amount</td>
						<td>Cheque</td>
						<td>File</td>
						
					</tr>
				</tbody>
			</table>			
		</div>
	</div>




@endsection