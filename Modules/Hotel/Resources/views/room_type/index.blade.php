@extends('layouts.admin.master')

@section('content')
<div class="container ">
	<div class=" row p-3">
		<div class="col-md-6">
			<h4 >Room Types</h4>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('room_type_create')}}" class="btn btn-primary">Add Room Type</a>
		</div>
	</div>
	<table class="table table-responsive-sm table-striped">
		<thead>
			<tr>
				<th>S.No</th>
				<th>Name</th>
				<th>Description</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($roomtypes as $room_type)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$room_type->name}}</td>
				<td>{{$room_type->description}}</td>
				<td><a href="{{ route('room_type_show',$room_type->id)}}" class="btn btn-primary btn-sm"><i>Show</i></a>
			</tr>
			@endforeach
		</tbody>		
	</table>
</div>




@endsection