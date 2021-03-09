@extends('layouts.admin.master')

@section('content')
<div class="container  ">
	<div class="row p-3 justify-content-center">
		<div class="col-md-6">
			<h3>Car Type: {{$car_type->name}}</h3>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('car_type_edit',$car_type->id)}}" class="btn btn-primary btn-sm"><i>Edit</i></a>
			<a href="{{ route('car_type_delete',$car_type->id)}}" class="btn btn-primary btn-sm"><i>Delete</i></a>
		</div>
	</div>
	<table class="table ">
		<tr>
			<th>Name</th>
			<td>{{$car_type->name}}</td>
		</tr>
		<tr>
			<th>Seats</th>
			<td>{{$car_type->seats}}</td>
		</tr>
	</table>
</div>




@endsection