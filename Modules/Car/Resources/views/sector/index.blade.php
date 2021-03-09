@extends('layouts.admin.master')

@section('content')
<div class="container ">
	<div class="row p-3">
		<div class="col-md-6">
			<h4 >Sectors</h4>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('car_sector_create')}}" class="btn btn-primary">Add Car Sector</a>
		</div>
	</div>
	<table class="table table-responsive-sm table-striped">
		<thead>
			<tr>
				<th>S.No</th>
				<th>Name</th>
				<th>From</th>
				<th>To</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($car_sectors as $sector)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$sector->name}}</td>
				<td>{{$sector->location_from->name}}</td>
				<td>{{$sector->location_to->name}}</td>
				<td><a href="{{ route('sector_show',$sector->id)}}" class="btn btn-primary btn-sm"><i>Show</i></a>
			</tr>
			@endforeach
		</tbody>		
	</table>
</div>




@endsection