@extends('layouts.admin.master')

@section('content')
<div class="container  ">
	<div class="row justify-content-center p-3">
		<div class=""></div>
		<div class="col-md-12">
			<h3>Title: {{$bank_account->title}}</h3>


			<table class="table">
				<tr>
					<th>Account Title</th>
					<td>{{$bank_account->title}}</td>
					<th>Account NO</th>
					<td>{{$bank_account->account_no}}</td>
				</tr>
				<tr>
					<th>Bank</th>
					<td><a href="{{route('bank_show',$bank_account->bank->id)}}">{{$bank_account->bank->name}}</a></td>
					<th>Branch</th>
					<td>{{$bank_account->branch}}</td>
				</tr>
			</table>
			<hr>
			<h4 class="text-center">Bank Accounts</h4>
			<div class="text-center">
				<a href="{{ route('accounts_show',$bank_account->account_head_id)}}" class="btn btn-primary">Account</a>
			</div>
		</div>
	</div>
</div>
@endsection
