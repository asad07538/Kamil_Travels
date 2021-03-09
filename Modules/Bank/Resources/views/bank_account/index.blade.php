@extends('layouts.admin.master')

@section('content')
<div class="container  ">
	<div class="row p-3">
			<h4 >Bank Accounts</h4>
	</div>
	<table class="table table-responsive-sm table-striped ">
		<thead>
			<tr>
				<th>S.No</th>
				<th>Title</th>
				<th>Branch</th>
				<th>Bank_id</th>
				<th>Account No</th>
				<th>View</th>
			</tr>
		</thead>
		<tbody>
			@foreach($bank_accounts as $bank_account)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$bank_account->title}}</td>
				<td>{{$bank_account->branch}}</td>
				<td>{{$bank_account->bank->name}}</td>
				<td>{{$bank_account->account_no}}</td>
				<td><a href="{{ route('bank_accounts_show',$bank_account->id)}}" class="btn btn-primary btn-sm"><i>View</i></a></td>

			</tr>
			@endforeach
		</tbody>		
	</table>
</div>




@endsection