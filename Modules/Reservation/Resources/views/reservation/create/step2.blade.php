@extends('layouts.admin.master')

@section('content')
<div class="container">
		<div>
			<h4 class="text-center p-3" >Enter Fair</h4>
		</div>
		<form class="" action="" method="post">
		@csrf
		<div class="row mx-3">		
		<table class="table table-responsive ">
			<thead>
				<tr>
					<th>Count</th>
					<th>B_Fare</th>
					<th>Surcharges</th>
					<th>Tax</th>
					<th>SubTotal</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th class="p-0">Adult
					<input type="hidden" name="adult" id="adult" value="">
					</th>
					<th class="p-1"><input type="" name="b_fare[]"></th>
					<th class="p-1"><input type="" name="surchage[]"></th>
					<th class="p-1"><input type="" name="tax[]"></th>
					<th class="p-1"><input type="" name="subtotal[]"></th>
					<th class="p-1"><input type="" name="total[]"></th>
				</tr>
				<tr>
					<th class="p-0">Child
					<input type="hidden" name="child" id="child" value="">
					</th>
					<th class="p-1"><input type="" name="b_fare[]"></th>
					<th class="p-1"><input type="" name="surchage[]"></th>
					<th class="p-1"><input type="" name="tax[]"></th>
					<th class="p-1"><input type="" name="subtotal[]"></th>
					<th class="p-1"><input type="" name="total[]"></th>
				</tr>
				<tr>
					<th class="p-1">Infant
					<input type="hidden" name="Infant" id="infant" value="">
					</th>
					<th class="p-1"><input type="" name="b_fare[]"></th>
					<th class="p-1"><input type="" name="surchage[]"></th>
					<th class="p-1"><input type="" name="tax[]"></th>
					<th class="p-1"><input type="" name="subtotal[]"></th>
					<th class="p-1"><input type="" name="total[]"></th>
				</tr>
			</tbody>
			<tfoot>
					<tr>
						<th colspan="5" class="text-right p-1">Total Base Fare</th>
						<th class="p-1"><input type="" name=""></th>
					</tr>
					<tr>
						<th colspan="5" class="text-right p-1">Total Equiv  Fare</th>
						<th class="p-1"><input type="" name=""></th>
					</tr>
					<tr>
						<th colspan="5" class="text-right p-1">Total Tax</th>
						<th class="p-1"><input type="" name=""></th>
					</tr>
					<tr>
						<th colspan="5" class="text-right p-1">Total Surcharge</th>
						<th class="p-1"><input type="" name=""></th>
					</tr>
					<tr>
						<th colspan="5" class="text-right p-1">Total ServiceCharge</th>
						<th class="p-1"><input type="" name=""></th>
					</tr>
					<tr>
						<th colspan="5" class="text-right p-1">Ticket Based Taxes</th>
						<th class="p-1"><input type="" name=""></th>
					</tr>
					<tr>
						<th colspan="5" class="text-right p-1">Total Amount</th>
						<th class="p-1"><input type="" name=""></th>
					</tr>
				</tfoot>
		</table>
	</div>
		
		<div class="form-group mx-5 text-right">
			<input type="button" name="" class=" btn btn-primary px-4" value="Back">
			<input type="submit" name="" class="btn btn-primary px-4" value="Continue">
		</div>
		</form>
</div>




@endsection