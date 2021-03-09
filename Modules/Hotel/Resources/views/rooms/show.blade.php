@extends('layouts.admin.master')

@section('content')
<div class="container  ">
	<div class="row p-3 justify-content-center">
		<div class="col-md-6">
			<h3>Room: {{$room->name}}</h3>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('room_edit',$room->id)}}" class="btn btn-primary btn-sm"><i>Edit</i></a>
			<a href="{{ route('room_delete',$room->id)}}" class="btn btn-primary btn-sm"><i>Delete</i></a>
		</div>
	</div>
	<table class="table ">
		<tr>
			<th>Name</th>
			<td>{{$room->room_no}}</td>
			<th>No Of Beds</th>
			<td>{{$room->no_of_beds}}</td>
		</tr>
		<tr>
			<th>Room type</th>
			<td>{{$room->type->name}}</td>
			<td></td>
			<td></td>
		</tr>
	</table>
	<div class=" p-3">
	<h3>Description</h3>
	<hr>
		<p>
			{{$room->description}}
		</p>
	</div>
</div>




@endsection