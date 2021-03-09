@extends('layouts.admin.master')

@section('content')
<div class="container ">
	<div class="row p-3">
		<div class="col-md-6">
			<h4 >Cars</h4>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('car_create')}}" class="btn btn-primary">Add Car</a>
		</div>
	</div>
	<table class="table table-responsive-sm table-striped">
		<thead>
			<tr>
				<th>S.No</th>
				<th>Car Type</th>
				<th>Company</th>
				<th>No Plate</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($cars as $car)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$car->type->name}}</td>
				<td>
					@if($car->company)
						{{$car->company->name}}
					@endif
				</td>
				<td>{{$car->no_plate}}</td>
				<td><a href="{{ route('car_show',$car->id)}}" class="btn btn-primary btn-sm"><i>Show</i></a>
			</tr>
			@endforeach
		</tbody>		
	</table>
</div>




@endsection