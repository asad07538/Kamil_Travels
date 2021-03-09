@extends('layouts.admin.master')

@section('content')


<div class="container">
	<div class="row  p-3 justify-content-center">
		<div class="col-md-10">
			
	<div class="px-3">
		<h4 class="text-center p-3" >Customer Create</h4>
	</div>
	<form action="{{ route('customer_update')}}" method="post">
		@csrf
		@include('common::forms.personform')
		<hr>
		<div class="form-group text-right">
			<input type="submit" class="btn btn-primary" value="Update">
		</div>
	</form>
		</div>
	</div>
	
</div>




@endsection