@extends('layouts.admin.master')

@section('content')

<script type="text/javascript">
	
	// consol	e.log("sdhfkjdks");

function paymentTypes(){

	var type=$("#paymentType").val();
	if (type=="cash") {
		$("#paymentTyperow").html('<div class="form-group col-md-4">				<label>Received</label>				<input type="number" min="0" name="received" class="form-control">			</div>	');
	}
	if (type=="cheque") {
		$("#paymentTyperow").html('<div class="form-group col-md-4">				<label>Received</label>				<input type="number" min="0" name="received" class="form-control">			</div>			<div class="form-group col-md-4">				<label>Cheque No</label>				<input type="text" name="cheque" class="form-control">			</div>');
	}
	if (type=="credit") {
		$("#paymentTyperow").html();
	}
	if (type=="deposit") {
		$("#paymentTyperow").html('			<div class="form-group col-md-4">				<label>Deposit Into</label>				<input type="text" name="deposit_slip" class="form-control">			</div>			<div class="form-group col-md-4">				<label>Deposit Slip</label>				<input type="file" name="deposit_slip" class="form-control">			</div>');
	}
	if (type=="transaction") {
		$("#paymentTyperow").html('			<div class="form-group col-md-4">				<label>Deposit Into</label>				<input type="text" name="deposit_slip" class="form-control">			</div>			<div class="form-group col-md-4">				<label>Transaction Code</label>				<input type="text" name="transaction_code" class="form-control">			</div>');
	}
}
</script>
<div class="container">
<div class="row justify-content-center">
<div class="card col-md-10 my-3">
	<div>
		<h4 class="text-center p-3" >Payment</h4>
	</div>	
	<form class="" action="{{ route('payment') }}" method="post">
	@csrf
	<div class="row">
		<div class="form-group col-md-4">
			<label>Payment Type</label>
			<select class="form-control" onchange="paymentTypes()" id="paymentType">
				<option value="cash" selected="">Cash</option>
				<option value="cheque">Cheque</option>
				<option value="credit">Credit</option>
				<option value="deposit">Bank Deposit</option>
				<option value="transaction">Online Transaction</option>
			</select>
		</div>
		<div class="form-group col-md-4">
			<label>Client</label>
			<select class="form-control" name="customer">
				<option selected="" disabled="">Select Customer</option>
				<option>Self</option>
			</select>
		</div>
		<div class="form-group col-md-4">
			<label>Amount Receivable</label>
			<input type="text" name="total_receivable" readonly="" class="form-control">
		</div>
	</div>
	<div id="paymentTyperow" class="row">
		<div class="form-group col-md-4">
			<label>Received</label>
			<input type="number" min="0" name="received" class="form-control">
		</div>
	</div>
	<div class="text-right">
		<div class="form-group ">
			<input type="submit" name="" value="Finish" class=" px-4 btn btn-primary">
		</div>
	</div>

	</form>
</div>
</div>
</div>


@endsection