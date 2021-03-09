@extends('layouts.admin.master')

@section('content')

<div class="container ">
<div class="row p-3">
	<div class="col-md-6">
		<h4 >Locations</h4>
	</div>
	<div class="col-md-6 text-right">
		<a href="{{ route('location_create')}}" class="btn btn-primary">Add location</a>
	</div>
</div>
<table class="table table-responsive-sm table-striped ">
	<thead>
		<tr>
			<th>S.No</th>
			<th>Name</th>
			<th>City</th>
			<th>Country</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($locations as $location)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{$location->name}}</td>
			<td>{{$location->city->name}}</td>
			<td>{{$location->city->country->name}}</td>
			<td>
				<a href="{{ route('location_edit',$location->id)}}" class="btn btn-primary btn-sm"><i>Edit</i></a>
				<a href="{{ route('location_delete',$location->id)}}" class="btn btn-primary btn-sm"><i>Delete</i></a>
			</td>
		</tr>
		@endforeach
	</tbody>		
</table>
<div class="p-3 	">
	 <!-- $cities->links() }} -->
</div>
</div>




@endsection