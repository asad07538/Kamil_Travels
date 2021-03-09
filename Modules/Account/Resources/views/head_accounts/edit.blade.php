@extends('layouts.admin.master')
@section('content')
<div class="container  ">
	<div class="row justify-content-center p-3">
		<div class="col-md-8"> 
			
	<div class="px-3">
		<h4 class="text-center p-3" >Account Edit</h4>
	</div>
	<form action="{{ route('head_accounts_update') }}" method="post">
		<input type="hidden" name="id" value="{{$head_account->id}}">
		@csrf
		<div class="form-group">
			<label>Head Account Title</label>
			<input type="text" name="title" class="form-control" placeholder="Account Title" required="" value="{{$head_account->title}}">
		</div>
		<div class="form-group">
			<label>Root Account</label>
			<select class="form-control" name="root_account" required="">
				<option>Select Root Account</option>
				@foreach($root_accounts as $account)
					<option value="{{$account->id}}">{{$account->title}}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group text-right">
			<input type="submit" class="btn btn-primary px-5" value="Update">
		</div>
	</form> 
		</div>
	</div>
	
</div>
@endsection