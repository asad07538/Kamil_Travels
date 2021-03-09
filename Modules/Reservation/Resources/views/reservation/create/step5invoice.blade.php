@extends('layouts.admin.master')

@section('content')
<div class="container">
	<div>
		<h4 class="text-center p-3" >Reservation Details</h4>
	</div>
	<h4>PNR :dshfk876</h4>
	<hr style="border-bottom: 2px solid black;">
	<div class="row m-3">		
		<div class="col-md-6 ">
			 <div> PNR:</div>
			 <div> Status:</div>
			 <div> Child PNR:</div>
			 <div> PNR Created On:</div>
			 <div> Option Date:</div>
		</div>	
		<div class="col-md-6 ">
			 <div> Contact Person:</div>
			 <div> Telephone:</div>
			 <div> Email:</div>
			 <div> Sale Location:</div>
			 <div> Parent Sale Location:</div>
			 <div> User Name:</div>
			 <div> Parent PNR NO:</div>
		</div>
	</div>
	<h4>Pax Details</h4>
	<hr style="border-bottom: 2px solid black;">
	<table class="table table-responsive-sm">
		<thead>
			<tr>
				<th></th>
				<th>Ticket No</th>
				<th>Surname</th>
				<th>Name</th>
				<th>G</th>
				<th>Date Of Birth</th>
				<th>Pax Type</th>
				<th>FF</th>
				<th>Nationality No</th>
				<th>Nationality	</th>
			</tr>
			<tr>
				<td><input type="checkbox" name=""></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</thead>
	</table>
	<h4>Flight Details</h4>
	<hr style="border-bottom: 2px solid black;">
	<div class="row m-3">		

	</div>
	<h4>Display Options</h4>
	<hr style="border-bottom: 2px solid black;">
	<div class="row m-3">		

	</div>
	<h4>Flight Options</h4>
	<hr style="border-bottom: 2px solid black;">
	<div class="row m-3">		

	</div>
	<h4>SSR Options</h4>
	<hr style="border-bottom: 2px solid black;">
	<div class="row m-3">		

	</div>
</div>
@endsection