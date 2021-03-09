@extends('layouts.admin.master')

@section('content')
<div class="container p-3">
	<div class="p-3">
		<h4 class="text-center p-3" >Bank Account Create</h4>
	</div>
	<form>
		<div class="row">
		<div class="form-group col-md-6">
			<label>Transaction Type</label>
			<select  class="form-control" required="">
				<option disabled="" selected="">Select Type</option>
				<option value="">Bank Deposit</option>
				<option value="">Bank withdraw</option>
				<option value="">Bank Payment</option>
				<option value="">Bank Receipt</option>
			</select>
		</div>
		<div class="form-group col-md-6">
			<label>Transaction Through</label>
			<select  class="form-control" required="">
				<option disabled="" selected="">Select Type</option>
				<option value="">Cheque</option>
				<option value="">Cash</option>
				<option value="">Online Transaction</option>
				<option value="">ATM</option>
			</select>
		</div>
		<div class="form-group col-md-6">
			<label>Date</label>
			<input type="date" name="bank_name" class="form-control" required="">
		</div>
		<div class="form-group col-md-6">
			<label>Transaction From</label>
			<select class="form-control">
				<option disabled="" selected="">Select Account</option>
			</select>
		</div>
		<div class="form-group col-md-6">
			<label>Transaction To</label>
			<select class="form-control">
				<option disabled="" selected="">Select Account</option>
			</select>
		</div>
		<div class="form-group col-md-6">
			<label>Cheque No/Transaction No</label>
			<input type="text" name="bank_name" class="form-control" required="">
		</div>
		<div class="form-group col-md-6">
			<label>Deposit/withdraw Slip</label>
			<input type="file" name="bank_name" class="form-control" required="">
		</div>
		</div>
		<div class="form-group text-right">
			<input type="submit" class=" btn btn-primary px-5" value="Update">
		</div>

	</form>
	
</div>




@endsection