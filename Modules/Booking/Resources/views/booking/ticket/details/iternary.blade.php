<div class="row">
<div class="col-md-6">
	<h3>Iternary Detail</h3>
</div>
<div class="col-md-6 text-right">
		@if($booking->status != "complete")
	<a href="{{ route('booking_create_pnr_iternary',['id'=>$booking->id,'pnr_id'=>$pnr->id])}}" class="btn btn-sm btn-primary">Edit Iternary</a>
		@endif
</div>
</div>
<table class="table table-responsive-sm">
	<tr>
	  <th class="py-2">Issue Date</th>
	  <th class="py-2">PNR</th>
	  <th class="py-2">Adult</th>
	  <th class="py-2">Child</th>
	  <th class="py-2">Infant</th>
	</tr>
	<tr>
	  <td class="py-1">{{$pnr->issue_date}}</td>
	  <td class="py-1">{{$pnr->name}}</td>
	  <td class="py-1">{{$pnr->adult}}</td>
	  <td class="py-1">{{$pnr->child}}</td>
	  <td class="py-1">{{$pnr->infant}}</td>
	</tr>
</table>