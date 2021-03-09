@extends('layouts.admin.master')

@section('content')
<div class="container  p-0">
	<div class="row p-3">
		<div class="col-md-6">
			<h4 >Flights</h4>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('country_create')}}" class="btn btn-primary">Add New Flight</a>
		</div>
	</div>
	<table class="table table-responsive-sm table-striped ">
		<thead>
			<tr>
				<th>S.No</th>
				<th>Name</th>
				<th>Airline</th>
				<th>Sector</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($flights as $flight)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$flight->name}}</td>
				<td>{{$flight->airline->name}}</td>
				<td>{{$flight->sector->name}}</td>
				<td>
					<a href="{{ route('country_edit',$flight->id)}}" class="btn btn-primary btn-sm"><i>Edit</i></a>
					<a href="{{ route('country_delete',$flight->id)}}" class="btn btn-primary btn-sm"><i>Delete</i></a>
				</td>
			</tr>
			@endforeach
		</tbody>		
	</table>
	<div class="p-3">
		<!-- $flights->links() }} -->
	</div>
</div>




@endsection