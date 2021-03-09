@extends('layouts.admin.master')

@section('content')
<div class="container  ">
	<div class="row p-3 justify-content-center">
		<div class="col-md-6">
			<h3>Sector: {{$car_sector}}</h3>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('car_sector_edit',$car_sector->id)}}" class="btn btn-primary btn-sm"><i>Edit</i></a>
			<a href="{{ route('car_sector_delete',$car_sector->id)}}" class="btn btn-primary btn-sm"><i>Delete</i></a>
		</div>
	</div>
	<table class="table ">
		<tr>
			<th>Name</th>
			<td>{{$car_sector->id}}</td>
			<th>Surname</th>
			<td>{{$car_sector->id}}</td>
		</tr>
	</table>
</div>




@endsection