<div class="row pb-3">
	<div class="col-md-6">
		<h3>Fare Detail</h3>
	</div>
	<div class="col-md-6 text-right">
		@if($booking->status != "complete")
		<a href="{{ route('booking_create_pnr_fare',['id'=>$booking->id,'pnr_id'=>$pnr->id])}}" class="btn btn-sm btn-primary">Edit Fare Details</a>
		@endif
	</div>
</div>

<div class="container mb-5">
	<table class="table table-responsive-sm">
		<thead>
			<tr>
				<th>PAx Type</th>
				<th>Fare</th>
				<th>Sub Charge</th>
				<th>Tax</th>
				<th>Sub Total</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="py-1">Adult</td>
				<td class="py-1">{{$pnr->adult_fare->fare}}</td>
				<td class="py-1">{{$pnr->adult_fare->subcharge}}</td>
				<td class="py-1">{{$pnr->adult_fare->tax}}</td>
				<td class="py-1">{{$pnr->adult_fare->subtotal}}</td>
				<td class="py-1">{{$pnr->adult_fare->total}}</td>
			</tr>
			<tr>
				<td class="py-1">Child</td>
				<td class="py-1">{{$pnr->child_fare->fare}}</td>
				<td class="py-1">{{$pnr->child_fare->subcharge}}</td>
				<td class="py-1">{{$pnr->child_fare->tax}}</td>
				<td class="py-1">{{$pnr->child_fare->subtotal}}</td>
				<td class="py-1">{{$pnr->child_fare->total}}</td>
			</tr>
			<tr>
				<td class="py-1">Infant</td>
				<td class="py-1">{{$pnr->infant_fare->fare}}</td>
				<td class="py-1">{{$pnr->infant_fare->subcharge}}</td>
				<td class="py-1">{{$pnr->infant_fare->tax}}</td>
				<td class="py-1">{{$pnr->infant_fare->subtotal}}</td>
				<td class="py-1">{{$pnr->infant_fare->total}}</td>
			</tr>
		</tbody>
	</table>
</div>

	