@extends('layouts.admin.master')

@section('content')
<div class="container ">
	<div class="row p-3">
		<div class="col-md-6">
			<h4>Head Accounts</h4>
		</div>
	</div>
	<table class="table table-responsive-sm table-striped ">
		<thead>
			<tr>
				<th>S.No</th>
				<th>Name</th>
				<th>Root Account</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($head_accounts as $head_account)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$head_account->title}}</td>
				<td>{{$head_account->parent->title}}</td>
				<td>
					<a href="{{ route('head_accounts_show',$head_account->id)}}" class="btn btn-primary btn-sm"><i>View</i></a>
				</td>
			</tr>
			@endforeach
		</tbody>		
	</table>
	<div class="p-3">
		<!-- $root_accounts->links() }} -->
	</div>
</div>




@endsection