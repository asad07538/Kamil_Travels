@extends('layouts.admin.master')

@section('content')

<div class="px-2">
  <div class="">
    <h2>Please Provide Details</h2>
  </div>
</div>

<form action="{{ route('booking_car_booking_store')}}" method="post" >
  @csrf
  <input type="hidden" name="cbid" value="{{$carbooking->id}}">
  <input type="hidden" name="bid" value="{{$booking->id}}">

<div class="card m-2 p-3">
    <table class="table table-responsive-sm">
      <thead>
      <tr>
        <th>Driver</th>
        <th>Car</th>
        <th>Company</th>
        <th>Sector</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="p-1">{{$carbooking->driver->person->name}}</td>
        <td class="p-1">{{$carbooking->car->type->name}}</td>
        <td class="p-1">
        {{$carbooking->car->company ? $car_booking->car->company->name : ""}}
        </td>
        <td class="p-1">{{$carbooking->sector->name}}</td>
      </tr>
      </tbody>
    </table>
    <div>
    <hr>
      <h5>Passenger Detail</h5>
      <div class="row">
        <div class="form-group col-md-4">
          <label>Name</label>
          <input type="text" name="name" class="form-control" required="">
        </div>
        <div class="form-group col-md-4">
          <label>CNIC</label>
          <input type="text" name="cnic" class="form-control">
        </div>
        <div class="form-group col-md-4">
          <label>Contact Number</label>
          <input type="text" name="phone" class="form-control">
        </div>
        <div class="form-group col-md-4">
          <label>Email</label>
          <input type="text" name="email" class="form-control">
        </div>
        <div class="form-group col-md-4">
          <label>Address</label>
          <input type="text" name="address" class="form-control">
        </div>
      </div>
    <hr>
      <h5>Fair Detail</h5>
      <div class="row">
        <div class="form-group col-md-4">
          <label>Total Fare</label>
          <input type="number" min="0" value="0" name="total_fare" class="form-control">
        </div>
<!--         <div class="form-group col-md-4">
          <label>Received</label>
          <input type="number" min="0" value="0" name="received" class="form-control">
        </div>
        <div class="form-group col-md-4">
          <label>Remaining</label>
          <input type="number" min="0" value="0" name="remaining" class="form-control">
        </div>
      </div> -->
    </div>
    <div class="text-right">
      <input type="submit" name="" value="finish" class="btn btn-primary">
    </div>
</div>
</form>


<hr>

@endsection