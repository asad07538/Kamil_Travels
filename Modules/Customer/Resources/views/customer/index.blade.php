@extends('layouts.admin.master')

@section('content')
<div class="container ">
	<div class="row p-3">
		<div class="col-md-6">
			<h4 >Customers</h4>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('customer_create')}}" class="btn btn-primary">Add New Customer</a>
		</div>
	</div>
	<table class="table table-responsive-sm table-striped">
		<thead>
			<tr>
				<th>S.No</th>
				<th>Name</th>
				<th>Surname</th>
				<th>CNIC</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($customers as $customer)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$customer->person->name}}</td>
				<td>{{$customer->person->surname}}</td>
				<td>{{$customer->person->cnic}}</td>
				<td><a href="{{ route('customer_show',$customer->id)}}" class="btn btn-primary btn-sm"><i>Show</i></a>
			</tr>
			@endforeach
		</tbody>		
	</table>
</div>




@endsection