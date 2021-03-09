@extends('layouts.admin.master')

@section('content')
<div class="container">
	<div class="row p-3 justify-content-center">
		<div class="col-md-8">
			
	<div class="px-3">
		<h4 class="text-center p-3" >Bank Account Edit</h4>
	</div>
	<form action="{{ route('bank_accounts_update')}}" method="post">
		@csrf
		<div class="form-group">
			<label>Account Title</label>
			<input type="hidden" name="id" value="{{$bank_account->id}}">
			<input type="text" name="title" placeholder="Title" class="form-control" required="" value="{{$bank_account->title}}">
		</div>
		<div class="form-group">
			<label>Account No</label>
			<input type="text" name="account_no" placeholder="Account No" class="form-control" required=""  value="{{$bank_account->account_no}}">
		</div>
		<div class="form-group">
			<label>Bank</label>
			<select name="bank"  class="form-control">
				<option disabled="" selected="">Select Bank</option>
				@foreach($banks as $bank)
					<option value="{{$bank->id}}" @if($bank_account->id==$bank->id)selected @endif >{{$bank->name}}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<label>Branch</label>
			<input type="text" name="branch" placeholder="Branch" class="form-control" required="" value="{{$bank_account->branch}}">
		</div>
		<div class="form-group text-right">
			<input type="submit" class="btn btn-primary" value="Update">
		</div>
	</form>
		</div>
	</div>
	
</div>




@endsection