@extends('layouts.admin.master')

@section('content')
<div class="container  ">
	<div class="row p-3 justify-content-center">
		<div class="col-md-6">
			<h3>car: {{$car->id}}</h3>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('car_edit',$car->id)}}" class="btn btn-primary btn-sm"><i>Edit</i></a>
			<a href="{{ route('car_delete',$car->id)}}" class="btn btn-primary btn-sm"><i>Delete</i></a>
		</div>
	</div>
	<table class="table ">
		<tr>
			<th>Type</th>
			<td>{{$car->type->name}}</td>
			<th>Company</th>
			<td>
				@if($car->company)
					{{$car->company->name}}
				@else
					Self
				@endif
			</td>
		</tr>
		<tr>
			<th>Seats</th>
			<td>{{$car->type->seats}}</td>
			<th>Company Address</th>
			<td>
				@if($car->company)
					{{$car->company->address}}
				@else
					Self
				@endif
			</td>
		</tr>
		<tr>
			<th>No Plate</th>
			<td>{{$car->no_plate}}</td>
			<th>Chases No</th>
			<td>{{$car->chaces_no}}</td>
		</tr>
	</table>
	<hr>
</div>




@endsection