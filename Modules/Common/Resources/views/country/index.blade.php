@extends('layouts.admin.master')

@section('content')

<div class="container ">
<div class="row p-3">
	<div class="col-md-6">
		<h4 >Countries</h4>
	</div>
	<div class="col-md-6 text-right">
		<a href="{{ route('country_create')}}" class="btn btn-primary">Add Country</a>
	</div>
</div>
<table class="table table-responsive-sm table-striped ">
	<thead>
		<tr>
			<th>S.No</th>
			<th>Name</th>
			<th>Code</th>
			<th>Dialing Code</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($countries as $country)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{$country->name}}</td>
			<td>{{$country->code}}</td>
			<td>{{$country->dialing_code}}</td>
			<td>
				<a href="{{ route('country_edit',$country->id)}}" class="btn btn-primary btn-sm"><i>Edit</i></a>
				<a href="{{ route('country_delete',$country->id)}}" class="btn btn-primary btn-sm"><i>Delete</i></a>
			</td>
		</tr>
		@endforeach
	</tbody>		
</table>
<div class="p-3 	">
	{{ $countries->links() }}
</div>
</div>




@endsection