@extends('layouts.admin.master')

@section('content')
<div class="container  ">
	<div class="row p-3 justify-content-center">
		<div class="col-md-6">
			<h3>driver: {{$driver->person->name}}</h3>
			<h4>{{$driver->person->surname}}</h4>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('driver_edit',$driver->id)}}" class="btn btn-primary btn-sm"><i>Edit</i></a>
			<a href="{{ route('driver_delete',$driver->id)}}" class="btn btn-primary btn-sm"><i>Delete</i></a>
		</div>
	</div>
	<table class="table ">
		<tr>
			<th>Name</th>
			<td>{{$driver->person->name}}</td>
			<th>Surname</th>
			<td>{{$driver->person->surname}}</td>
		</tr>
		<tr>
			<th>Date of Birth</th>
			<td>{{$driver->person->date_of_birth}}</td>
			<th>CINC</th>
			<td>{{$driver->person->cnic}}</td>
		</tr>
		<tr>
			<th>Gender</th>
			<td>{{$driver->person->gender}}</td>
			<th></th>
			<td></td>
		</tr>
	</table>
	<div class="row p-3 justify-content-center">
		<div class="col-md-3">
			<h5>Phones</h5>
			<table class="table">
				@foreach($driver->person->phones as $phone)
					<tr><td>{{$phone->number}}</td></tr>
				@endforeach
			</table>
		</div>
		<div class="col-md-3">
			<h5>Emails</h5>
			<table class="table">
				@foreach($driver->person->emails as $email)
					<tr><td>{{$email->email}}</td></tr>
				@endforeach
			</table>
		</div>
		<div class="col-md-3">
			<h5>Address</h5>
			<table class="table">
				@foreach($driver->person->address as $address)
					<tr><td>{{$address->address}}</td></tr>
				@endforeach
			</table>
		</div>
		<div class="col-md-3">
			<h5>Fax</h5>
			<table class="table">
				@foreach($driver->person->faxes as $faxes)
					<tr><td>{{$faxes->fax}}</td></tr>
				@endforeach
			</table>
		</div>
	</div>
	<hr>
	<div class="row p-3 justify-content-center">
		<h3>Accounts</h3>
		<div class="col-md-11 text-center">
			<a href="{{ route('accounts_show',$driver->account_head_id) }}" class="btn btn-primary btn-sm">Ticketing Account</a>
		</div>
	</div>
</div>




@endsection