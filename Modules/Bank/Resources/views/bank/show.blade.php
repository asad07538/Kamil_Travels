@extends('layouts.admin.master')

@section('content')
<div class="container  ">
	<div class="row justify-content-center p-3">
		<div class="col-md-6">
			<h3>{{$bank->name}}</h3>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('bank_accounts_create',$bank->id)}}" class="btn btn-primary">Add New Account</a>
		</div>
			<hr>
			<h5>Bank Accounts</h5>
			<table class="table table-responsive-sm table-striped">
				<thead>
					<tr>
						<th>S.No</th>
						<th>Account Title</th>
						<th>Account No</th>
						<th>View</th>
					</tr>
				</thead>
				<tbody>
					@foreach($bank->bank_accounts as $account)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$account->title}}</td>
						<td>{{$account->account_no}}</td>
						<td>
							<a href="{{ route('bank_accounts_show',$account->id)}}" class="btn btn-primary btn-sm">View</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>




@endsection