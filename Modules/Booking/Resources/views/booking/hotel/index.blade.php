<div class="row px-2">
  <div class="col-md-6">
    <h2>Hotels</h2>
  </div>
  <div class="col-md-6 text-right">
    @if($booking->status != "complete")
    <a href="{{ route('booking_create_pnr',$booking->id)}}" class="btn btn-primary btn-sm">ADD</a>
    @endif
  </div>
</div>

<div id="accordion">
  @foreach($booking->hotel_bookings as $hotel)
    <div class="card m-2">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapse{{$pnr->id}}">
         {{$hotel->name}}
        </a>
      </div>
      <div id="collapse{{$pnr->id}}" class="collapse show" data-parent="#accordion">
        <div class="card-body p-0">
          <table class="table">
            <tr>
              <th>Adult</th>
              <th>Child</th>
            <tr>
              <th colspan="6" class="text-right"><a href="{{ route('booking_pnr_show',['id'=>$booking->id,'pnr_id'=>$pnr->id])}}" class="btn btn-primary btn-sm">View Details</a></th>
            </tr>
          </table>
        </div>
      </div>
    </div>
  @endforeach
</div>

<hr>