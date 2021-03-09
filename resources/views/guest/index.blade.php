@extends('layouts.guest.master')

@section('content')
<div class="col-sm-12" style="margin-top: -60px" >
<div class="row banner " style="background-image: url('{{ asset('images/img/image3.jpg')}}'); height: 80vh;    justify-content: center;
    align-items: center; 
    background-position-x: initial;
    background-position-y: initial;
    background-size: 100%;
    background-repeat: repeat-x;
    background-attachment: initial;
    background-origin: initial;
    background-clip: initial;">
<!--   <div class="container text-dark">
    <h1 class="text-center text-white p-2" style="text-decoration: underline;  text-shadow: 2px 2px 5px blue;">
      <em>Kamil Travel and Tours</em>
  </h1>
  <hr>
    <h4 class="text-center text-white"  style="text-decoration: underline;  text-shadow: 2px 2px 5px blue;">Providing you highest quality of services</h4>
    <br>
    <div class="text-center">
    @Auth
      <a class="btnn btn-main" href="{{ route('reservation_create') }}">Make a Booking</a>
    @else
      <a class="btn btn-primary" style="" href="{{ route('reservation_create') }}">Member Ship</a>
    @endauth
    </div>
  </div> -->
</div>

    @auth
  @include('content/accounts')
    @endauth

  @include('content/about')
  @include('content/flight')
  @include('content/facts')
  @include('content/team')
  @include('content/franchices')
</div>     


<style type="text/css">
  
.refl {
text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
}
</style> 

<script type="text/javascript">
  $( document ).ready(function() {
      new WOW().init();
  });
</script>
@endsection
