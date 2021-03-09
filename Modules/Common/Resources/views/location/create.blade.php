@extends('layouts.admin.master')

@section('content')


<div class="container">
	<div class="row  p-3 justify-content-center">
		<div class="col-md-8">
			
	<div class="px-3">
		<h4 class="text-center p-3" >Location Create</h4>
	</div>
	<form action="{{ route('location_store')}}" method="post">
		@csrf
		<div class="form-group">
			<label>Location Name</label>
			<input type="text" name="name" placeholder="location Name" class="form-control @error('name') is-invalid @enderror">

			@error('name')
			    <div class="text-red" style="color: red;">{{ $message }}</div>
			@enderror
		</div>

		<div class="form-group">
			<label>City</label>
			<select  name="city"  class="form-control @error('city') is-invalid @enderror">
				<option disabled="" selected="">Select city</option>
			@foreach($cities 	 as $city)
				<option value="{{$city->id}}"> {{$city->name}}</option>
			@endforeach
			</select>
			@error('city')
			    <div class="text-red" style="color: red;">{{ $message }}</div>
			@enderror
		</div>
		
		<div class="form-group text-right">
			<input type="submit" class="btn btn-primary" value="Update">
		</div>
	</form>
		</div>
	</div>
	
</div>




@endsection