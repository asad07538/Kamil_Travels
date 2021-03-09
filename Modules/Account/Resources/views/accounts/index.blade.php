@extends('layouts.admin.master')

@section('content')
<div class="container ">
	<div class="row p-3">
		<div class="col-md-6">
			<h4>Accounts</h4>
		</div>
	</div>
	<table class="table table-responsive-sm table-striped ">
		<thead>
			<tr>
				<th>S.No</th>
				<th>Name</th>
				<th>Head Account</th>
				<th>Root Account</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($accounts as $account)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$account->title}}</td>
				<td>{{$account->parent->title}}</td>
				<td>{{$account->parent->parent->title}}</td>
				<td>
					<a href="{{ route('root_accounts_show',$account->id)}}" class="btn btn-primary btn-sm"><i>View</i></a>
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