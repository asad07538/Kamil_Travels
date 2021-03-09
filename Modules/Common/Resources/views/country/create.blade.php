@extends('layouts.admin.master')

@section('content')


<div class="container ">
	<div class="row  p-3  justify-content-center">
		<div class="col-md-8">
			
	<div class="px-3">
		<h4 class="text-center p-3" >Country Create</h4>
	</div>
	<form action="{{ route('country_store')}}" method="post">
		@csrf
		<div class="form-group">
			<label>Country Name</label>
			<input type="text" name="name" placeholder="Country Name" class="form-control" class="@error('title') is-invalid @enderror">
			@error('name')
			    <div class="text-red" style="color: red;">{{ $message }}</div>
			@enderror
		</div>
		<div class="form-group">
			<label>Code</label>
			<input type="text" name="code" placeholder="Country Code" class="form-control">
			@error('code')
			    <div class="text-red" style="color: red;">{{ $message }}</div>
			@enderror
		</div>
		<div class="form-group">
			<label>Dialing Code</label>
			<input type="text" name="dialing_code" placeholder="Dialing Code" class="form-control">
			@error('dialing_code')
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