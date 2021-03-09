@extends('layouts.admin.master')

@section('content')
<div class="container p-3">
	<div class="row p-5">
		<div class="col-md-6">
			<h4 >Bank Transactions</h4>
		</div>
		<div class="col-md-6 text-right ">
			<a href="{{ route('bank_transactions_create')}}" class="btn btn-primary">New Transaction</a>
		</div>
	</div>
	<table class="table table-responsive-sm ">
		<thead>
			<th>Transaction Code</th>
			<th>Transact Type</th>
			<th>Transact From</th>
			<th>Transact To</th>
			<th>Date</th>
			<th>Action</th>
		</thead>
		<tbody>
			<td>sdjk</td>
			<td>sdjk</td>
			<td>sdjk</td>
			<td>sdjk</td>
			<td>sdjk</td>
			<td>
				<a href="">Edit	</a>
				<a href=""><i class="fa fa-eye">View</i></a>
			</td>
		</tbody>		
	</table>
</div>
@endsection