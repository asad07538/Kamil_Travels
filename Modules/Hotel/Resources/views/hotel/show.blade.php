@extends('layouts.admin.master')

@section('content')
<div class="container  ">
	<div class="row p-3 justify-content-center">
		<div class="col-md-6">
			<h3>hotel: {{$hotel->name}}</h3>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('hotel_edit',$hotel->id)}}" class="btn btn-primary btn-sm"><i>Edit</i></a>
			<a href="{{ route('hotel_delete',$hotel->id)}}" class="btn btn-primary btn-sm"><i>Delete</i></a>
		</div>
	</div>


	<div class="row p-3 justify-content-center">

		<div class="col-md-3">
			<h5>Name</h5>
			<h5>{{$hotel->name}}</h5>
		</div>
		<div class="col-md-3">
			<h5>Address</h5>
			<h5>{{$hotel->address}}</h5>
		</div>
		<div class="col-md-3">
			<h5>Location</h5>
			<h5>{{$hotel->location->name}}</h5>
		</div>
		<div class="col-md-3">
			<h5>Contacts</h5>
			<table class="table">
				@foreach($hotel->person->phones as $phone)
					<tr><td class="p-1">{{$phone->number}}</td></tr>
				@endforeach
			</table>
		</div>

	</div>
	<hr>
	<h4>Contact Person</h4>
	<table class="table ">
		<tr>
			<th>Name</th>
			<td>{{$hotel->person->name}}</td>
			<th>Surname</th>
			<td>{{$hotel->person->surname}}</td>
		</tr>
		<tr>
			<th>Date of Birth</th>
			<td>{{$hotel->person->date_of_birth}}</td>
			<th>CINC</th>
			<td>{{$hotel->person->cnic}}</td>
		</tr>
		<tr>
			<th>Gender</th>
			<td>{{$hotel->person->gender}}</td>
			<th></th>
			<td></td>
		</tr>
	</table>
	<div class="row p-3 justify-content-center">
		<div class="col-md-3">
			<h5>Phones</h5>
			<table class="table">
				@foreach($hotel->person->phones as $phone)
					<tr><td>{{$phone->number}}</td></tr>
				@endforeach
			</table>
		</div>
		<div class="col-md-3">
			<h5>Emails</h5>
			<table class="table">
				@foreach($hotel->person->emails as $email)
					<tr><td>{{$email->email}}</td></tr>
				@endforeach
			</table>
		</div>
		<div class="col-md-3">
			<h5>Address</h5>
			<table class="table">
				@foreach($hotel->person->address as $address)
					<tr><td>{{$address->address}}</td></tr>
				@endforeach
			</table>
		</div>
		<div class="col-md-3">
			<h5>Fax</h5>
			<table class="table">
				@foreach($hotel->person->faxes as $faxes)
					<tr><td>{{$faxes->fax}}</td></tr>
				@endforeach
			</table>
		</div>
	</div>
	<hr>
	<div class="row p-3 justify-content-center">
		<h3>Accounts</h3>
		<div class="col-md-11 text-center">
			<a href="{{ route('accounts_show',$hotel->booking_account_id) }}" class="btn btn-primary btn-sm">Ticketing Account</a>
		</div>
	</div>
</div>




@endsection