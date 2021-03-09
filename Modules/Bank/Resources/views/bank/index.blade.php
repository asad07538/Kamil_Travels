@extends('layouts.admin.master')

@section('content')
<div class="container ">
	<div class="row p-3">
		<div class="col-md-6">
			<h3 class=" " >Banks</h3>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('bank_create') }}" class="btn btn-primary">Add Bank</a>
		</div>
	</div>
	<table class="table table-striped ">
		<thead>
			<th>S.No</th>
			<th>Name</th>
			<th>Action</th>
		</thead>
		<tbody>
			@foreach($banks as $bank)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$bank->name}}</td>
					<td>
						<a href="{{route('bank_show', $bank->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-eye"> View</i></a>
						<a href="{{route('bank_edit', $bank->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"> Edit</i></a>
						<a href="{{route('bank_delete', $bank->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"> Delete</i></a></td>
				</tr>
			@endforeach
		</tbody>		
	</table>
</div>




@endsection