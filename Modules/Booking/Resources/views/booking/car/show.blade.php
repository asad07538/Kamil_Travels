@extends('layouts.admin.master')

@section('content')
<div class="card m-2 p-3">
    <h2><a href="{{ route('booking_show',$carbooking->booking->id) }}" >Car Booking</a></h2>
    <table class="table table-responsive-sm">
      <thead>
        <tr>
          <th class="p-1">Driver</th>
          <th class="p-1">Car</th>
          <th class="p-1">Company</th>
          <th class="p-1">Sector</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="p-1">{{$carbooking->car_booking->driver->person->name}}</td>
          <td class="p-1">{{$carbooking->car_booking->car->type->name}}</td>
          <td class="p-1">{{$carbooking->car_booking->car->company->name}}</td>
          <td class="p-1">{{$carbooking->car_booking->sector->name}}</td>
        </tr>
      </tbody>
    </table>
    <div>
    <hr>
      <h5>Passenger Detail</h5>
      <div class="row">
        <div class="form-group col-md-3 left-border">
          <label>Name</label><br> 
          {{$carbooking->person->name}}
        </div>
        <div class="form-group col-md-3 left-border">
          <label>CNIC</label><br>
          {{$carbooking->person->cnic}}
        </div>
        <div class="form-group col-md-3 left-border">
          <label>Contact Number</label><br>
          @foreach($carbooking->person->phones as $phone)
            {{$phone->number}},<br>
          @endforeach
        </div>
        <div class="form-group col-md-3 left-border">
          <label>Email</label><br>
          @foreach($carbooking->person->emails as $email)
            {{$email->email}},<br>
          @endforeach
        </div>
        <div class="form-group col-md-3 left-border">
          <label>Address</label><br>
          @foreach($carbooking->person->address as $address)
            {{$address->address}},<br>
          @endforeach
        </div>
      </div>
      <h5>Fair Detail</h5>
      <div class="row">
        <div class="form-group col-md-3  left-border">
          <label>Total Fare</label><br>
          {{$carbooking->total_fare}}
        </div>
        <div class="form-group col-md-3  left-border">
          <label>Received</label><br>
          {{$carbooking->received}}
        </div>
        <div class="form-group col-md-3  left-border">
          <label>Remaining</label><br>
          {{$carbooking->remaining}}
        </div>
      </div>
    </div>
</div>


<hr>

@endsection