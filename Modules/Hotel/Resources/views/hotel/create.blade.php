@extends('layouts.admin.master')

@section('content')


<div class="container ">
<div class="row  p-3 justify-content-center">
<div class="col-md-12">
	<div class="px-3">
		<h4 class="text-center p-3" >Add New Hotel</h4>
	</div>
	<form action="{{ route('hotel_store')}}" method="post">
		@csrf
		<div class="row">
			
			<div class="form-group col-md-6 ">
				<label>Hotel Name</label>
				<input type="text" name="hotel_name" class="form-control"> 
			</div>
			<div class="form-group col-md-6 ">
				<label>Hotel Contact</label>
				<input type="text" name="hotel_contact[]" class="form-control"> 
			</div>
			<div class="form-group col-md-6 ">
				<label>Address</label>
				<input type="text" name="hotel_address" class="form-control"> 
			</div>
			<div class="form-group col-md-6 ">
				<label>Location</label>
				<select class="form-control" name="hotel_location">
					<option disabled="" selected="">Select Location</option>
					@foreach($locations as $location)
						<option value="{{$location->id}}">{{$location->name}},{{$location->city->name}}</option>
					@endforeach
				</select>
			</div>
		</div>
		<hr>
		<div class="form-group text-right">
			<input type="submit" class="btn btn-primary" value="Update">
		</div>
	</form>
	<hr>
</div>
</div>
</div>




@endsection