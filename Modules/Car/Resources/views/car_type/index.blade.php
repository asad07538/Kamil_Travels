@extends('layouts.admin.master')

@section('content')
<div class="container ">
	<div class="row p-3">
		<div class="col-md-6">
			<h4 >Car Types</h4>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('car_type_create')}}" class="btn btn-primary">Add Car Type</a>
		</div>
	</div>
	<table class="table table-responsive-sm table-hover">
		<thead>
			<tr>
				<th>S.No</th>
				<th>Name</th>
				<th>Seats</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($car_types as $car_type)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$car_type->name}}</td>
				<td>{{$car_type->seats}}</td>
				<td><a href="{{ route('car_type_show',$car_type->id)}}" class="btn btn-primary btn-sm"><i>Show</i></a>
			</tr>
			@endforeach
		</tbody>		
	</table>
</div>




@endsection