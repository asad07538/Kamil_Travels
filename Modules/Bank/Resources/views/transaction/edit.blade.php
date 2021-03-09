@extends('layouts.admin.master')

@section('content')
<div class="container p-3">
	<div class="px-3">
		<h4 class="text-center p-3" >Bank Account Create</h4>
	</div>
	<form>
		<div class="form-group">
			<label>Transaction Type</label>
			<input type="text" name="bank_name" class="form-control" required="">
		</div>
		<div class="form-group">
			<label>Date</label>
			<input type="text" name="bank_name" class="form-control" required="">
		</div>
		<div class="form-group">
			<label>Transaction From</label>
			<select class="form-control">
				<option disabled="" selected="">Select Account</option>
			</select>
		</div>
		<div class="form-group">
			<label>Transaction To</label>
			<select class="form-control">
				<option disabled="" selected="">Select Account</option>
			</select>
		</div>
		<div class="form-group">
			<label>Cheque No</label>
			<input type="text" name="bank_name" class="form-control" required="">
		</div>
		<div class="form-group">
			<label>Transaction No</label>
			<input type="text" name="bank_name" class="form-control" required="">
		</div>
		<div class="form-group">
			<label>Deposit Slip</label>
			<input type="text" name="bank_name" class="form-control" required="">
		</div>
		<div class="form-group">
			<input type="submit" class="form-control btn btn-primary" value="Update">
		</div>
	</form>
	
</div>




@endsection