<div class="row px-2">
  <div class="col-md-6">
    <h2>Tour</h2>
  </div>
  <div class="col-md-6 text-right">
	@if($booking->status != "complete")
	    <a href="{{ route('booking_create_pnr',$booking->id)}}" class="btn btn-primary btn-sm">ADD</a>
	@endif
  </div>
</div>
<hr>