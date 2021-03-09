@extends('layouts.admin.master')

@section('content')

<div class="container">
		<div>
			<h4 class="text-center p-3" >Pax Details</h4>
		</div>
		<div class="row  justify-content-center">	
		<div class="col-md-12">
		<form class="" action="{{ route('booking_store_pnr_pax') }}" method="post">
		@csrf
		<input type="hidden" name="booking" value="{{$booking->id}}">
		<input type="hidden" name="pnr" value="{{$pnr->id}}">
		<!-- Contact Person -->
		<!-- include('booking::booking/ticket/pnr/pax/contact_person') -->
		<!-- Adult -->
		@include('booking::booking/ticket/pnr/pax/adult')
		<!-- Child -->
		@include('booking::booking/ticket/pnr/pax/child')
		<!-- Infant -->
		@include('booking::booking/ticket/pnr/pax/infant')
		
			<div class="form-group m-3 text-right">
				<input type="submit" name="submit" value="next" class="btn btn-primary px-4">
				<input type="submit" name="submit" value="finish" class="btn btn-primary px-4">
			</div>
		</form>			
		</div>
	</div>
</div>
@endsection