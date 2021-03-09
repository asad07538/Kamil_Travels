@extends('layouts.admin.master')

@section('content')
<div class="container  ">
	<div class="row p-3 justify-content-center">
		<div class="col-md-6">
			<h3>Car Company: {{$car_company->name}}</h3>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('car_company_edit',$car_company->id)}}" class="btn btn-primary btn-sm"><i>Edit</i></a>
			<a href="{{ route('car_company_delete',$car_company->id)}}" class="btn btn-primary btn-sm"><i>Delete</i></a>
		</div>
	</div>
	<table class="table ">
		<tr>
			<th>Name</th>
			<td>{{$car_company->name}}</td>
		</tr>
		<tr>	
			<th>Address</th>
			<td>{{$car_company->address}}</td>
		</tr>
		<tr>
			<td >Phone:No</td>
			<td >
		@foreach($car_company->phones as $phone)
				{{$phone->number}} , 
		@endforeach
			</td>
		</tr>
	</table>
	<hr>
	<div class="row p-3 justify-content-center">
		<div class="col-md-6">
			<h3>Contact Persons: </h3>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('car_company_edit',$car_company->id)}}" class="btn btn-primary btn-sm"><i>Add Contact Person</i></a>
		</div>
	</div>
	<hr>
	<div class="row p-3 justify-content-center">
		<h3>Accounts</h3>
		<div class="col-md-11 text-center">
			<a href="{{ route('accounts_show',$car_company->account_head_id) }}" class="btn btn-primary btn-sm">Account</a>
		</div>
	</div>
</div>




@endsection