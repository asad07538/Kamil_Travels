@extends('layouts.admin.master')

@section('content')
<div class="container ">
	<div class="row p-3">
		<div class="col-md-6">
			<h4 >Rooms</h4>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('room_create')}}" class="btn btn-primary">Add Room</a>
		</div>
	</div>
	<table class="table table-responsive-sm table-striped">
		<thead>
			<tr>
				<th>S.No</th>
				<th>Room No</th>
				<th>Type</th>
				<th>Hotel</th>
				<th>No of Beds</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($rooms as $room)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$room->room_no}}</td>
				<td>{{$room->hotel->name}}</td>
				<td>{{$room->type->name}}</td>
				<td>{{$room->no_of_beds}}</td>
				<td><a href="{{ route('room_show',$room->id)}}" class="btn btn-primary btn-sm"><i>Show</i></a>
			</tr>
			@endforeach
		</tbody>		
	</table>
</div>




@endsection