@extends('layouts.admin.master')

@section('content')
<div class="container">
		<div>
			<h4 class="text-center p-3" >Pax Details</h4>
		</div>
		<div class="row ">	
		<div class="col-md-3 ">
			<div class="card p-3">
				<h5>Reservation Summary</h5>
				<div>
					<strong> Flight Number: </strong>
				</div>
				<div>
					<strong> Res Class: </strong>
				</div>
				<div>
					<strong> Fight Date: </strong>
				</div>
				<div>
					<strong> Stop Quantity: </strong>
				</div>
				<div>
					<strong> From: </strong>
				</div>
				<div>
					<strong> To: </strong>
				</div>
				<div>
					<strong> Departure Hour: </strong>
				</div>
				<div>
					<strong> Arrival Hour: </strong>
				</div>
				<div>
					<strong> Status: </strong>
				</div>
			</div>
		</div>
		<div class="col-md-9">
		<form class="" action="{{ route('pax') }}" method="post">
		@csrf
		<!-- Contact Person -->
		@include('reservation::reservation/create/pax_detail.contact_person')
		<!-- Adult -->
		@include('reservation::reservation/create/pax_detail.adult')
		<!-- Child -->
		@include('reservation::reservation/create/pax_detail.child')
		<!-- Infant -->
		@include('reservation::reservation/create/pax_detail.infant')
		
		<div class="form-group m-3 text-right">
			<input type="submit" name="" class="btn btn-primary px-4" value="Continue">
		</div>
		</form>			
		</div>
	</div>
</div>
@endsection