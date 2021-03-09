@extends('layouts.admin.master')

@section('content')


<div class="container ">
<div class="row  p-3 justify-content-center">
<div class="col-md-12">
	<div class="px-3">
		<h4 class="text-center p-3" >Add New Room Type</h4>
	</div>
	<form action="{{ route('room_type_store')}}" method="post">
		@csrf
			<div class="form-group  ">
				<label>Name</label>
				<input type="text" name="name" class="form-control"> 
			</div>
			<div class="form-group  ">
				<label>Description</label>
				<input type="text" name="description" class="form-control"> 
			</div>
		<div class="form-group text-right">
			<input type="submit" class="btn btn-primary" value="Update">
		</div>
	</form>
	<hr>
</div>
</div>
</div>




@endsection