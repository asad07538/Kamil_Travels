@extends('layouts.admin.master')

@section('content')
<div class="container ">
	<div class="row p-3 justify-content-center">
		<div class="col-md-8">	
			<div class="px-3">
				<h4 class="text-center p-3" >Bank Account Create</h4>
			</div>
			<form action="{{ route('bank_accounts_store')}}" method="post">
				<input type="hidden" name="bank" value="{{$bank->id}}">
				@csrf
				<div class="form-group">
					<label>Account Title</label>
					<input type="text" name="title" placeholder="Title" class="form-control" required="">
				</div>
				<div class="form-group">
					<label>Account No</label>
					<input type="text" name="account_no" placeholder="Account No" class="form-control" required="">
				</div>
				<div class="form-group">
					<label>Branch</label>
					<input type="text" name="branch" placeholder="Branch" class="form-control" required="">
				</div>
				<div class="form-group text-right">
					<input type="submit" class="btn btn-primary" value="Update">
				</div>
			</form>
		</div>
	</div>
</div>
@endsection