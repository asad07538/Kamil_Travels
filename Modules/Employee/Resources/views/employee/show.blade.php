@extends('layouts.admin.master')

@section('content')
<div class="container  ">
	<div class="row p-3 justify-content-center">
		<div class="col-md-6">
			<h3>Employee: {{$employee->person->name}}</h3>
			<h4>{{$employee->person->surname}}</h4>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('employee_edit',$employee->id)}}" class="btn btn-primary btn-sm"><i>Edit</i></a>
			<a href="{{ route('employee_delete',$employee->id)}}" class="btn btn-primary btn-sm"><i>Delete</i></a>
		</div>
	</div>
	<table class="table ">
		<tr>
			<th>Name</th>
			<td>{{$employee->person->name}}</td>
			<th>Surname</th>
			<td>{{$employee->person->surname}}</td>
		</tr>
		<tr>
			<th>Email</th>
			<td>{{$employee->user->email}}</td>
			<th>Date of Birth</th>
			<td>{{$employee->person->date_of_birth}}</td>
		</tr>
		<tr>
			<th>CINC</th>
			<td>{{$employee->person->cnic}}</td>
			<th>Gender</th>
			<td>{{$employee->person->gender}}</td>
		</tr>
	</table>
	<div class="row p-3 justify-content-center">
		<div class="col-md-3">
			<h5>Phones</h5>
			<table class="table">
				@foreach($employee->person->phones as $phone)
					<tr><td>{{$phone->number}}</td></tr>
				@endforeach
			</table>
		</div>
		<div class="col-md-3">
			<h5>Emails</h5>
			<table class="table">
				@foreach($employee->person->emails as $email)
					<tr><td>{{$email->email}}</td></tr>
				@endforeach
			</table>
		</div>
		<div class="col-md-3">
			<h5>Address</h5>
			<table class="table">
				@foreach($employee->person->address as $address)
					<tr><td>{{$address->address}}</td></tr>
				@endforeach
			</table>
		</div>
		<div class="col-md-3">
			<h5>Fax</h5>
			<table class="table">
				@foreach($employee->person->faxes as $faxes)
					<tr><td>{{$faxes->fax}}</td></tr>
				@endforeach
			</table>
		</div>
	</div>
	<hr>
	<div class="row p-3 justify-content-center">
		<h3>Accounts</h3>
		<div class="col-md-11 text-center">
			<a href="{{ route('accounts_show',$employee->ticketing_account_id) }}" class="btn btn-primary btn-sm">Ticketing Account</a>
			<a href="{{ route('accounts_show',$employee->salary_account_id) }}" class="btn btn-primary btn-sm">Salary</a>
			<a href="{{ route('accounts_show',$employee->loan_account_id) }}" class="btn btn-primary btn-sm">Loan</a>
			<a href="{{ route('accounts_show',$employee->mistake_account_id) }}" class="btn btn-primary btn-sm">Mistake</a>
			<a href="{{ route('accounts_show',$employee->allowed_expance_account_id) }}" class="btn btn-primary btn-sm">Expances</a>
		</div>
	</div>
</div>




@endsection