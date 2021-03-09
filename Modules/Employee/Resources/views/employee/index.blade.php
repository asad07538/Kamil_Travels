@extends('layouts.admin.master')

@section('content')
<div class="container ">
	<div class="row p-3">
		<div class="col-md-6">
			<h4 >Employees</h4>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('employee_create')}}" class="btn btn-primary">Add New employee</a>
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
			@foreach($employees as $employee)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$employee->person->name}}</td>
				<td>{{$employee->person->surname}}</td>
				<td>{{$employee->person->cnic}}</td>
				<td><a href="{{ route('employee_show',$employee->id)}}" class="btn btn-primary btn-sm"><i>Show</i></a>
			</tr>
			@endforeach
		</tbody>		
	</table>
</div>




@endsection