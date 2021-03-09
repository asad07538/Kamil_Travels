@extends('layouts.admin.master')

@section('content')


<div class="container ">
<div class="row  p-3 justify-content-center">
<div class="col-md-12">
	<div class="px-3">
		<h4 class="text-center p-3" >Add New Room</h4>
	</div>
	<form action="{{ route('room_store')}}" method="post">
		@csrf
		<div class="row">
			<div class="form-group col-md-4 ">
				<label>Room Number</label>
				<input type="text" name="room_number" class="form-control"> 
			</div>
			<div class="form-group col-md-4 ">
				<label>Hotel</label>
				<select name="hotel" class="form-control">
					<option selected="" disabled="">Select Hotel</option>
					@foreach($hotels as $hotel)
						<option value="{{$hotel->id}}">{{$hotel->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group col-md-4 ">
				<label>Room Types</label>
				<select name="room_type" class="form-control">
					<option selected="" disabled="">Select Room Type</option>
					@foreach($roomtypes as $type)
						<option value="{{$type->id}}"> {{$type->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group col-md-4 ">
				<label>No Of Beds</label>
				<input type="text" name="no_of_beds" class="form-control"> 
			</div>
		</div>
			<div class="form-group  ">
				<label>Description</label>
				<input type="text" name="description" class="form-control"> 
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