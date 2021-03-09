@extends('layouts.admin.master')

@section('content')

<div class="p-3">
  
</div>
<div class="row px-2">
  <div class="col-md-6">
    <h2>Select a Car Bookings</h2>
  </div>
</div>
<div class="card m-2 px-3 py-5">
    <table class="table table-responsive-sm">
      <thead>
      <tr>
        <th>S.No</th>
        <th>Driver</th>
        <th>Car</th>
        <th>Company</th>
        <th>Sector</th>
        <th>Date</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($carbookings as $car_booking)
      <tr>
        <td class="p-1">{{$loop->iteration}}</td>
        <td class="p-1">{{$car_booking->driver->person->name}}</td>
        <td class="p-1">{{$car_booking->car->type->name}}</td>
        <td class="p-1">{{$car_booking->car->company->name}}</td>
        <td class="p-1">{{$car_booking->sector->name}}</td>
        <td class="p-1">{{$car_booking->traveling_date}}</td>
        <td class="p-1">{{$car_booking->status}}</td>
        <!-- <td class="p-1">$car_booking}}</td> -->
        <td class="p-1"><a href="{{ route('booking_car_booking_select',['bid'=>$booking->id,'cbid'=>$car_booking->id])}}" class="btn btn-primary btn-sm">Select</a></td>
      </tr>
    @endforeach
      </tbody>
    </table>
</div>

<hr>

@endsection