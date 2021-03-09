@extends('layouts.admin.master')

@section('content')


<div class="container ">
<div class="row  p-3 justify-content-center">
	<div class="col-md-10">
	<div class="px-3">
		<h4 class="text-center p-3" >Airport Create</h4>
	</div>
	<form action="{{ route('airport_store')}}" method="post">
		@csrf
		<div class="form-group">
			<label>Airport Name</label>
			<input type="text" name="name" placeholder="Airport Name" class="form-control"class="@error('name') is-invalid @enderror">
			@error('name')
			    <div class="text-red" style="color: red;">{{ $message }}</div>
			@enderror
		</div>
		<div class="form-group">
			<label>IATA Code</label>
			<input type="text" name="iata_code" placeholder="IATA Code" class="form-control">
			@error('iata_code')
			    <div class="text-red" style="color: red;">{{ $message }}</div>
			@enderror
		</div>
		<div class="form-group">
			<label>Country</label>
			<select name="country" class="form-control">
				<option selected="" disabled="">Select Country</option>
				@foreach($countries as $country)
					<option value="{{$country->id}}">{{$country->name}}</option>
				@endforeach
			</select>
			@error('country')
			    <div class="text-red" style="color: red;">{{ $message }}</div>
			@enderror
		</div>
		
		<div class="form-group text-right">
			<input type="submit" class="btn btn-primary" value="Save">
		</div>
	</form>
		</div>
	</div>
	
</div>




@endsection