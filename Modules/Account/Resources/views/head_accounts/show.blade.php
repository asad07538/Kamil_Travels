@extends('layouts.admin.master')

@section('content')
<div class="container ">
	<div class="row p-3">
		<div class="col-md-6">
			<h4>Head Account: {{$head_account->title}}</h4>
			<h5>Root Account: 
				<a href="{{ route('root_accounts_show',$head_account->parent->id)}}">
					{{$head_account->parent->title}}
				</a>
			</h5>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('head_accounts_edit',$head_account->id)}}" class="btn btn-primary btn-sm"><i>Edit</i></a>
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
			@foreach($head_account->child as $child)
			<tr>
				<td>{{$child->iteration}}</td>
				<td>{{$child->title}}</td>
				<td>
					<a href="{{ route('accounts_show',$child->id)}}" class="btn btn-primary btn-sm"><i>View</i></a>

				</td>
			</tr>
			@endforeach
		</tbody>		
	</table>
	<div class="p-3">
	</div>
</div>




@endsection