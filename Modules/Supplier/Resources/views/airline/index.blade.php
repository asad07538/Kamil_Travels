@extends('layouts.admin.master')

@section('content')
<div class="container  p-3">
	<div class="row p-3">
		<div class="col-md-6">
			<h4 >Airlines</h4>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('airline_create')}}" class="btn btn-primary">Add New airline</a>
		</div>
	</div>
	<table class="table table-responsive-sm table-striped ">
		<thead>
			<tr>
				<th>S.No</th>
				<th>Name</th>
				<th>IATA Code</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($airlines as $airline)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$airline->name}}</td>
				<td>{{$airline->code}}</td>
				<td>
					<a href="{{ route('airline_show',$airline->id)}}" class="btn btn-primary btn-sm"><i>View</i></a>

				</td>
			</tr>
			@endforeach
		</tbody>		
	</table>
	<div class="p-3 	">
	</div>
</div>




@endsection