@extends('layouts.app')

@section('content')
<div class="container py-5">
	<div class="row justify-content-center">
		<div class="col-md-3 m-3">
			<a href="{{ route('bank_banks')}}" class=" card text-center btn">
				<h4 class="text-center p-5">Banks</h4>
			</a>
		</div>
		<div class="col-md-3 m-3">
			<a href="{{ route('bank_accounts')}}" class=" card text-center btn">
				<h4 class="text-center p-5">Accounts</h4>
			</a>
		</div>
		<div class="col-md-3 m-3">
			<a href="{{ route('bank_transactions')}}" class=" card text-center btn">
				<h4 class="text-center p-5">Transaction</h4>
			</a>
		</div>
	</div>
</div>
@endsection