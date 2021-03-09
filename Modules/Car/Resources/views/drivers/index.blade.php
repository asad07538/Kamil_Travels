@extends('layouts.admin.master')

@section('content')
<div class="container ">
	<div class="row p-3">
		<div class="col-md-6">
			<h4 >Drivers</h4>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('driver_create')}}" class="btn btn-primary">Add Driver</a>
		</div>
	</div>
	<table class="table table-responsive-sm table-striped">
		<thead>
			<tr>
				<th>S.No</th>
				<th>Name</th>
				<th>Surname</th>
				<th>CNIC</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($drivers as $driver)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$driver->person->name}}</td>
				<td>{{$driver->person->surname}}</td>
				<td>{{$driver->person->cnic}}</td>
				<td><a href="{{ route('driver_show',$driver->id)}}" class="btn btn-primary btn-sm"><i>Show</i></a>
			</tr>
			@endforeach
		</tbody>		
	</table>
</div>




@endsection