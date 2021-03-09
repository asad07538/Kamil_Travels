@extends('layouts.admin.master')

@section('content')
<div class="container">
	<div class="row p-3">
		<div class="col-md-6">
			<h4>Sale:{{$booking->code}}</h4>
			<h5>PNR Fare Detail</h5>
		</div>
	</div>
	<form action="{{ route('booking_store_pnr_fare')}}" method="post">
	@csrf
	<input type="hidden" name="booking" value="{{$booking->id}}">
	<input type="hidden" name="pnr" value="{{$pnr->id}}">
	<div class="row">
		<table class="table table-responsive-sm table-hover">
			<thead>
				<tr>
					<th>Pax Type</th>
					<th>Fare</th>
					<th>Sub Charge</th>
					<th>Tax</th>
					<th>Sub Total</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><input type="hidden" name="pax_type[]" value="{{$pnr->adult_fare->id}}">Adult</td>
					<td><input type="text" name="fare[]" class="form-control"></td>
					<td><input type="text" name="subcharge[]" class="form-control"></td>
					<td><input type="text" name="tax[]" class="form-control"></td>
					<td><input type="text" name="subtotal[]" class="form-control"></td>
					<td><input type="text" name="total[]" class="form-control"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="pax_type[]" value="{{$pnr->child_fare->id}}">Child</td>
					<td><input type="text" name="fare[]" class="form-control"></td>
					<td><input type="text" name="subcharge[]" class="form-control"></td>
					<td><input type="text" name="tax[]" class="form-control"></td>
					<td><input type="text" name="subtotal[]" class="form-control"></td>
					<td><input type="text" name="total[]" class="form-control"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="pax_type[]" value="{{$pnr->infant_fare->id}}">Infant</td>
					<td><input type="text" name="fare[]" class="form-control"></td>
					<td><input type="text" name="subcharge[]" class="form-control"></td>
					<td><input type="text" name="tax[]" class="form-control"></td>
					<td><input type="text" name="subtotal[]" class="form-control"></td>
					<td><input type="text" name="total[]" class="form-control"></td>
				</tr>
			</tbody>
		</table>
	</div>
		<div class="text-right">
			<input type="submit" name="submit" value="next" class="btn btn-primary">
			<input type="submit" name="submit" value="Finish" class="btn btn-primary">
		</div>
	</form>

</div>
@endsection