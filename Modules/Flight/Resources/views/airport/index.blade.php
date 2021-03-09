@extends('layouts.admin.master')

@section('content')
<div class="container  p-0">
	<div class="row p-3">
		<div class="col-md-6">
			<h4 >Airports</h4>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('airport_create')}}" class="btn btn-primary">Add New Airport</a>
		</div>
	</div>
	<table class="table table-responsive-sm table-striped ">
		<thead>
			<tr>
				<th>S.No</th>
				<th>Name</th>
				<th>IATA Code</th>
				<th>Country</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($airports as $airport)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$airport->name}}</td>
				<td>{{$airport->iata_code}}</td>
				<td>{{$airport->country->name}}</td>
				<td>
					<a href="{{ route('airport_edit',$airport->id)}}" class="btn btn-primary btn-sm"><i>Edit</i></a>
					<a href="{{ route('airport_delete',$airport->id)}}" class="btn btn-primary btn-sm"><i>Delete</i></a>
				</td>
			</tr>
			@endforeach
		</tbody>		
	</table>
	<div class="p-3 	">
		<!-- airports->links() }} -->
	</div>
</div>




@endsection