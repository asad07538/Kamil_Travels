@extends('layouts.admin.master')

@section('content')
<div class="container ">
	<div class="row p-3">
		<div class="col-md-6">
			<h4 >Hotels</h4>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('hotel_create')}}" class="btn btn-primary">Add Hotel</a>
		</div>
	</div>
	<table class="table table-responsive-sm table-striped">
		<thead>
			<tr>
				<th>S.No</th>
				<th>Name</th>
				<th>Address</th>
				<th>Location</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($hotels as $hotel)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$hotel->name}}</td>
				<td>{{$hotel->address}}</td>
				<td>{{$hotel->location->name}},{{$hotel->location->city->name}}</td>
				<td><a href="{{ route('hotel_show',$hotel->id)}}" class="btn btn-primary btn-sm"><i>Show</i></a>
			</tr>
			@endforeach
		</tbody>		
	</table>
</div>




@endsection