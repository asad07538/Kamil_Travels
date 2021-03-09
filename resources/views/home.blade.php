@extends('layouts.guest.master')

@section('content')
<div class="col-sm-12" >

<div class="row banner " style="background-image: url('{{ asset( 'dashboard/123.jpg') }}'); height: 80vh;    justify-content: center;
    align-items: center; 
    background-position-x: initial;
    background-position-y: initial;
    background-size: 100%;
    background-repeat: repeat-x;
    background-attachment: initial;
    background-origin: initial;
    background-clip: initial;">
  <div class="container text-dark">
    <!-- <h1 class="text-center text-white">Naynawa Travels and Tour</h1> -->
    <!-- <p class="text-center text-white">Providing you highest quality of services</p> -->
    <!-- <div class="text-center"> -->
    <!-- @Auth -->
      <!-- <a class="btnn btn-main" href="{{ route('reservation_create') }}">Make a BBooking</a> -->
    <!-- @endauth -->
    <!-- </div> -->
  </div>
</div>

    @auth
  @include('content/accounts')
    @endauth

  <!-- @include('content/about') -->
  <!-- @include('content/flight') -->
  @include('content/facts')
  @include('content/team')
  @include('content/franchices')



</div>


      
@endsection
