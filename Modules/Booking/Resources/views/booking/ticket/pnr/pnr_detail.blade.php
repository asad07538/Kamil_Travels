@extends('layouts.admin.master')

@section('content')
<div class="container">
	<div class="row p-3">
		<div class="col-md-6">
			<h4>Sale:{{$booking->code}}</h4>
			<h5>NEW PNR Detail</h5>
		</div>
	</div>
	<form action="{{ route('booking_store_pnr_iternary')}}" method="post">
	@csrf
	<input type="hidden" name="booking" value="{{$booking->id}}">
	<input type="hidden" name="pnr" value="{{$pnr->id}}">

	<div class="row">
		<div class="form-grourp col-md-4">
			<label>PNR</label>
			<input type="text" name="pnr_name" required="" class="form-control">
		</div>
		<div class="form-grourp col-md-4">
			<label>Issue Date</label>
			<input type="date" name="date" required="" class="form-control">
		</div>
		<div class="form-grourp col-md-4">
			<label>Airline</label>
			<select class="form-control" required="" name="airline">
				<option disabled="" selected="">Select Airline</option>
				@foreach($airlines as $account)
					<option value="{{$account->id}}">{{$account->title}}</option>
				@endforeach
			</select>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="form-grourp col-md-4">
			<label>Adults</label>
			<input type="number" min="0" required="" value="0" name="adults" class="form-control">
		</div>
		<div class="form-grourp col-md-4">
			<label>Child</label>
			<input type="number" min="0" required="" value="0" name="childs" class="form-control">
		</div>
		<div class="form-grourp col-md-4">
			<label>Infant</label>
			<input type="number" min="0" required="" value="0" name="infants" class="form-control">
		</div>
	</div>
	<hr>
		<div class="form-grourp text-right pb-3">
			<input type="submit" name="submit" class="btn btn-primary " value="next">
			<input type="submit" name="submit" class="btn btn-primary " value="Finish">
		</div>

	</form>
</div>
@endsection