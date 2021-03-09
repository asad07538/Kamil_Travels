@extends('layouts.admin.master')

@section('content')
<div class="container">
	<div class="row p-3 justify-content-center">
		<div class="col-md-6">
			<h3>Room Types: {{$roomtype->name}}</h3>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('room_type_edit',$roomtype->id)}}" class="btn btn-primary btn-sm"><i>Edit</i></a>
			<a href="{{ route('room_type_delete',$roomtype->id)}}" class="btn btn-primary btn-sm"><i>Delete</i></a>
		</div>
	</div>
	<div class="p-5">
		<h3>Description</h3>
		<hr>
		{{$roomtype->description}}
	</div>
</div>




@endsection