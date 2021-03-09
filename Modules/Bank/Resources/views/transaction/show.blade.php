@extends('layouts.admin.master')

@section('content')
<div class="container p-3">
	<div class="row px-5">
		<div class="col-md-6">
			<h4 class="text-center p-3" >Transaction Code</h4>
		</div>
		<div class="col-md-6">
			<a href="" class="btn btn-primary">Edit</a>
			<a href="" class="btn btn-delete">Delete</a>
		</div>
	</div>
	<div class="row">
		<div class=" col-md-6">
			<label>Transactio Type: </label>
		</div>
		<div class=" col-md-6">
			<label>Transactio From: </label>
		</div>
		<div class=" col-md-6">
			<label>Transactio To: </label>
		</div>
		<div class=" col-md-6">
			<label>Date: </label>
		</div>
		<div class=" col-md-6">
			<label>Cheque: </label>
		</div>
		<div class=" col-md-6">
			<label>Transaction Number: </label>
		</div>
		<div class=" col-md-6">
			<label>Deposit Slip: </label>
		</div>
	</div>
</div>
@endsection