@extends('layouts.admin.master')

@section('content')
<div class="container">
	<div class="row p-3">
		<div class="col-md-6">
			<h4 >{{$root_accounts->title}}</h4>

			<a href="{{ route('country_edit',$root_accounts->id)}}" class="btn btn-primary btn-sm"><i>Edit</i></a>
			<a href="{{ route('country_delete',$root_accounts->id)}}" class="btn btn-primary btn-sm"><i>Delete</i></a>

		</div>
	</div>
	<table class="table table-responsive-sm table-striped ">
		<thead>
			<tr>
				<th>S.No</th>
				<th>Name</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($root_accounts->child as $child)
			<tr>
				<td>{{$child->iteration}}</td>
				<td>{{$child->title}}</td>
				<td>
					<a href="{{ route('head_accounts_show',$child->id)}}" class="btn btn-primary btn-sm"><i>View</i></a>
				</td>
			</tr>
			@endforeach
		</tbody>		
	</table>
	<div class="p-3">
	</div>
</div>




@endsection