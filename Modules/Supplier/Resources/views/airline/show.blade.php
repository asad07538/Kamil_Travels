@extends('layouts.admin.master')

@section('content')
<div class="container  ">
	<div class="row p-3 justify-content-center">
		<div class="col-md-6">
			<h3>{{$airline->name}}</h3>
			<h4>{{$airline->code}}</h4>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('airline_edit',$airline->id)}}" class="btn btn-primary btn-sm"><i>Edit</i></a>
			<a href="{{ route('airline_delete',$airline->id)}}" class="btn btn-primary btn-sm"><i>Delete</i></a>
		</div>
	</div>
	<div class="row p-3 justify-content-center">
		<div class="col-md-6">
			<h3>Commission</h3>
			<table class="table">
				<tr>
					<th class="py-2">System</th>
					<td class="py-2">{{$airline->comm_system}}</td>
				</tr>
				<tr>
					<th class="py-2">Domestic</th>
					<td class="py-2">{{$airline->comm_international_per}}</td>
				</tr>
				<tr>
					<th class="py-2">International</th>
					<td class="py-2">{{$airline->comm_domestic_per}}</td>
				</tr>
			</table>
		</div>
		<div class="col-md-6">
			<h3>System</h3>
			<table class="table">
				<tr>
					<th class="py-2">System</th>
					<td class="py-2">{{$airline->service_system}}</td>
				</tr>
				<tr>
					<th class="py-2">Domestic</th>
					<td class="py-2">{{$airline->service_international_per}}</td>
				</tr>
				<tr>
					<th class="py-2">International</th>
					<td class="py-2">{{$airline->service_domestic_per}}</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="row p-3 justify-content-center">
			<h3>Accounts</h3>
		<div class="col-md-11 justify-content-center">
			<a href="{{ route('accounts_show',$airline->agreement)}}" class="btn btn-primary btn-sm">Agreement Account</a>
			<a href="{{ route('accounts_show',$airline->ticketing_account)}}" class="btn btn-primary btn-sm">Ticketing Account</a>
			<a href="{{ route('accounts_show',$airline->commission_account)}}" class="btn btn-primary btn-sm">Commission Account</a>
			<a href="{{ route('accounts_show',$airline->refund_account)}}" class="btn btn-primary btn-sm">Refund Account</a>
			<a href="{{ route('accounts_show',$airline->wht_account)}}" class="btn btn-primary btn-sm">WHT Account</a>
			<a href="{{ route('accounts_show',$airline->service_charge_account)}}" class="btn btn-primary btn-sm">Service Charge Account</a>
		</div>
	</div>
</div>




@endsection