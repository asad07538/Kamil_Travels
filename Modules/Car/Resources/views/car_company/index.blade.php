@extends('layouts.admin.master')

@section('content')
<div class="container ">
	<div class="row  p-3">
		<div class="col-md-6">
			<h4 >Car Companies</h4>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('car_company_create')}}" class="btn btn-primary">Add Car Company</a>
		</div>
	</div>
	<table class="table table-responsive-sm table-striped">
		<thead>
			<tr>
				<th>S.No</th>
				<th>Name</th>
				<th>Address</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($car_companys as $car_company)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$car_company->name}}</td>
				<td>{{$car_company->address}}</td>
				<td><a href="{{ route('car_company_show',$car_company->id)}}" class="btn btn-primary btn-sm"><i>Show</i></a>
			</tr>
			@endforeach
		</tbody>		
	</table>
</div>




@endsection