@extends('layouts.admin.master')

@section('content')

<div class="container ">
<div class="row p-3">
	<div class="col-md-6">
		<h4 >Cities</h4>
	</div>
	<div class="col-md-6 text-right">
		<a href="{{ route('city_create')}}" class="btn btn-primary">Add city</a>
	</div>
</div>
<table class="table table-responsive-sm table-striped ">
	<thead>
		<tr>
			<th>S.No</th>
			<th>City Name</th>
			<th>Country</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($cities as $city)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{$city->name}}</td>
			<td>{{$city->country->name}}</td>
			<td>
				<a href="{{ route('city_edit',$city->id)}}" class="btn btn-primary btn-sm"><i>Edit</i></a>
				<a href="{{ route('city_delete',$city->id)}}" class="btn btn-primary btn-sm"><i>Delete</i></a>
			</td>
		</tr>
		@endforeach
	</tbody>		
</table>
<div class="p-3 	">
	 <!-- $cities->links() }} -->
</div>
</div>




@endsection