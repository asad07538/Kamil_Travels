@extends('layouts.admin.master')

@section('content')
<div class="container ">
	<div class="row p-3 justify-content-center ">
		<div class="col-md-8"> 
			
	<div class="px-3">
		<h4 class="text-center p-3" >Bank Edit</h4>
	</div>
	<form action="{{ route('bank_update') }}" method="post">
		@csrf
		<div class="form-group">
			<label>Bank Name</label>
			<input type="hidden" name="id" value="{{$bank->id}}">
			<input type="text" name="bank_name" value="{{$bank->name}}" class="form-control" placeholder="Bank Name" required="">
		</div>
		<div class="form-group text-right">
			<input type="submit" class="btn btn-primary px-5" value="Update">
		</div>
	</form> 
		</div>
	</div>
	
</div>




@endsection