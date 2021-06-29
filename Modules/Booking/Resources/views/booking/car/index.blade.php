

<div class="row px-2">
  <div class="col-md-6">
    <h2>Car Bookings</h2>
  </div>
  <div class="col-md-6 text-right">
    @if($booking->status != "complete")
    <a href="{{ route('booking_car_booking_list',$booking->id)}}" class="btn btn-primary btn-sm">ADD</a>
    @endif
  </div>
</div>
<div id="accordion">
  @foreach($booking->car_bookings as $car_booking)
    <div class="card m-2">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapse{{$car_booking->id}}">
           Passenger Name : {{$car_booking->person->name}}
        </a>
      </div>
      <div id="collapse{{$car_booking->id}}" class="collapse " data-parent="#accordion">
        <table class="table table-responsive-sm">
            <tr>
              <th class="py-1">Company</th>
              <th class="py-1">Car</th>
              <th class="py-1">Driver</th>
              <th class="py-1">Sector</th>
            </tr>
            <tr>
              <td class="py-1">
              {{$car_booking->car_booking->car->company ? $car_booking->car_booking->car->company->name :""}}</td>
              <td class="py-1">
              
              {{$car_booking->car_booking->car->type? $car_booking->car_booking->car->type->name : ""}}</td>
              <td class="py-1">
        {{$car_booking->car_booking->driver->person ? $car_booking->car_booking->driver->person->name: ""}}
              </td>
              <td class="py-1">
        {{$car_booking->car_booking->sector->name ? $car_booking->car_booking->sector->name: ""}}
              </td>
            </tr>
            <tr>
              <th class="py-1">Time</th>
              <th class="py-1">Total Fare</th>
              <th class="py-1">Received</th>
              <th class="py-1">Remaining</th>
            </tr>
            <tr>
              <td class="py-1">{{$car_booking->car_booking->traveling_date}}, {{$car_booking->car_booking->traveling_time}}</td>
              <td class="py-1">{{$car_booking->total_fare}}</td>
              <td class="py-1">{{$car_booking->received}}</td>
              <td class="py-1">{{$car_booking->remaining}}</td>
            </tr>
            <tr>
              <td colspan="4" class="text-right">
                <a href="{{ route('booking_car_booking_show',['bid'=>$booking->id,'cbid'=>$car_booking->id])}}" class="btn btn-primary btn-sm">View Detail</a>
              </td>
            </tr>
        </table>
      </div>
    </div>
  @endforeach
</div>

<hr>