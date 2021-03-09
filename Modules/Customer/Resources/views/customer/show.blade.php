@extends('layouts.admin.master')

@section('content')
<div class="container  ">
	<div class="row p-3 justify-content-center">
		<div class="col-md-6">
			<h3>Customer: {{$customer->person->name}}</h3>
			<h4>{{$customer->person->surname}}</h4>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('customer_edit',$customer->id)}}" class="btn btn-primary btn-sm"><i>Edit</i></a>
			<a href="{{ route('customer_delete',$customer->id)}}" class="btn btn-primary btn-sm"><i>Delete</i></a>
		</div>
	</div>
	<table class="table ">
		<tr>
			<th>Name</th>
			<td>{{$customer->person->name}}</td>
			<th>Surname</th>
			<td>{{$customer->person->surname}}</td>
		</tr>
		<tr>
			<th>Date of Birth</th>
			<td>{{$customer->person->date_of_birth}}</td>
			<th>CINC</th>
			<td>{{$customer->person->cnic}}</td>
		</tr>
		<tr>
			<th>Gender</th>
			<td>{{$customer->person->gender}}</td>
			<th></th>
			<td></td>
		</tr>
	</table>
	<div class="row p-3 justify-content-center">
		<div class="col-md-3">
			<h5>Phones</h5>
			<table class="table">
				@foreach($customer->person->phones as $phone)
					<tr><td>{{$phone->number}}</td></tr>
				@endforeach
			</table>
		</div>
		<div class="col-md-3">
			<h5>Emails</h5>
			<table class="table">
				@foreach($customer->person->emails as $email)
					<tr><td>{{$email->email}}</td></tr>
				@endforeach
			</table>
		</div>
		<div class="col-md-3">
			<h5>Address</h5>
			<table class="table">
				@foreach($customer->person->address as $address)
					<tr><td>{{$address->address}}</td></tr>
				@endforeach
			</table>
		</div>
		<div class="col-md-3">
			<h5>Fax</h5>
			<table class="table">
				@foreach($customer->person->faxes as $faxes)
					<tr><td>{{$faxes->fax}}</td></tr>
				@endforeach
			</table>
		</div>
	</div>
	<hr>
	<div class="row p-3 justify-content-center">
		<h3>Accounts</h3>
		<div class="col-md-11 text-center">
			<a href="{{ route('accounts_show',$customer->account_head_id) }}" class="btn btn-primary btn-sm">Ticketing Account</a>
			<a href="{{ route('accounts_show',$customer->refund_id) }}" class="btn btn-primary btn-sm">Refund Account</a>
			<a href="{{ route('accounts_show',$customer->agreement_account_id) }}" class="btn btn-primary btn-sm">Agreement Account</a>
		</div>
	</div>
</div>




@endsection