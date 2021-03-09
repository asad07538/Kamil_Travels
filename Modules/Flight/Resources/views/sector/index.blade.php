@extends('layouts.admin.master')

@section('content')

<div class="container p-0">
	<div class="row p-3">
		<div class="col-md-6">
			<h4 >Sectors</h4>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('sector_create')}}" class="btn btn-primary">Add New sector</a>
		</div>
	</div>
	<table class="table table-responsive-sm table-striped table-bordered">
		<thead>
			<tr>
				<th>S.No</th>
				<th>Name</th>
				<th>Departure Airport</th>
				<th>Arrival Airport</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($sectors as $sector)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$sector->name}}</td>
				<td>{{$sector->departure_airport->name}}</td>
				<td>{{$sector->arrival_airport->name}}</td>
				<td>
					<a href="{{ route('sector_edit',$sector->id)}}" class="btn btn-primary btn-sm"><i>Edit</i></a>
					<a href="{{ route('sector_delete',$sector->id)}}" class="btn btn-primary btn-sm"><i>Delete</i></a>
				</td>
			</tr>
			@endforeach
		</tbody>		
	</table>
	<div class="p-3 	">
	</div>
</div>




@endsection