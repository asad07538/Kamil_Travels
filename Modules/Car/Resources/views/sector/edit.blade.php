@extends('layouts.admin.master')

@section('content')


<div class="container ">
<div class="row  p-3 justify-content-center">
<div class="col-md-12">
	<div class="px-3">
		<h4 class="text-center p-3" >Edit Sector {{$car_sector}}</h4>
	</div>
	<form action="{{ route('car_sector_update',$car_sector->id)}}" method="post">
		@csrf

		@include('car::sector.form')
		<hr>
		<div class="form-group text-right">
			<input type="submit" class="btn btn-primary" value="Save">
		</div>
	</form>
	<hr>
</div>
</div>
</div>




@endsection