@extends('layouts.admin.master')

@section('content')
<div class="container py-3">
		<div>
			<h3 class="text-center p-3" >New Reservation</h3>
		</div>
<div class="card ">
	<div class="card-header bg-dark text-white p-1">
		<div class="row m-3">
		<!-- Radio Buttons -->
			<div class="form-check col-md-3">
				<label class="form-check-label">
					<input type="radio" class="form-check-input" value="oneway" name="flightoption" selected="" onclick="oneway()">One Way
				</label>
			</div>
			<div class="form-check col-md-3">
				<label class="form-check-label">
					<input type="radio" class="form-check-input" value="return" name="flightoption" onclick="returnway()">Round Trip 
				</label>
			</div>
			<div class="form-check col-md-3">
				<label class="form-check-label">
					<input type="radio" class="form-check-input" value="multi" name="flightoption" onclick="multiway()">Multiple Directional
				</label>
			</div>
		</div>		
	</div>
		<form class="" action="" method="post">
		@csrf
	<div class="card-body">



		<div class="container" id="flightway">
			

<!-- OneWay -->
<div class="row">
	<div class="form-group col-md-3 p-1">
		<label>From</label>
		<select name="from[]" class="form-control">
			<option selected="" disabled="">Select Airport</option>
			@foreach($airports as $airport)
			<option value="{{$airport->id}}">{{$airport->name}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group col-md-3 p-1">
		<label>To</label>
		<select name="to[]" class="form-control">
			<option selected="" disabled="">Select Airport</option>
			@foreach($airports as $airport)
			<option value="{{$airport->id}}">{{$airport->name}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group  col-md-3 p-1">
		<label>Flight No</label>
		<input type="text" name="flight[]" class="form-control">	
	</div>
	<div class="form-group col-md-3 p-1">
		<label>Departure Date</label>
		<input type="date" name="d_date[]" class="form-control">
	</div>
	<div class="form-group col-md-3 p-1">
		<label>Cabin</label>
		<input type="text" name="cabin[]" class="form-control">
	</div>
	<div class="form-group col-md-3 p-1">
		<label>Bag</label>
		<input type="text" name="bag[]" class="form-control">
	</div>
</div>

<!-- Return -->
<!-- <div class="row">
	<div class="form-group col-md-3 p-1">
		<label>From</label>
		<input type="from[]" class="form-control" name="">
	</div>
	<div class="form-group col-md-3 p-1">
		<label>To</label>
		<input type="to[]" class="form-control" name="">
	</div>
	<div class="form-group  col-md-3 p-1">
		<label>Flight No</label>
		<input type="text" name="d_flight[]" class="form-control">	
	</div>
	<div class="form-group col-md-3 p-1">
		<label>Departure Date</label>
		<input type="d_date[]" class="form-control" name="">
	</div>
	<div class="form-group  col-md-3 p-1">
		<label>Flight No</label>
		<input type="text" name="r_flight[]" class="form-control">	
	</div>
	<div class="form-group col-md-3 p-1">
		<label>Return Date</label>
		<input type="r_date[]" class="form-control" name="">
	</div>
	<div class="form-group col-md-3 p-1">
		<label>Departure Cabin Class</label>
		<input type="d_cabin[]" class="form-control" name="">
	</div>
	<div class="form-group col-md-3 p-1">
		<label>Return Cabin Class</label>
		<input type="r_cabin[]" class="form-control" name="">
	</div>
	<div class="form-group col-md-3 p-1">
		<label>Departure Bag</label>
		<input type="d_bag[]" class="form-control" name="">
	</div>
	<div class="form-group col-md-3 p-1">
		<label>Return Bag</label>
		<input type="r_bag[]" class="form-control" name="">
	</div>
</div> -->

<!-- Multi -->
<!--  
<div class="row">
	<div class="form-group col-md-3 p-1">
		<label>From</label>
		<input type="from[]" class="form-control" name="">
	</div>
	<div class="form-group col-md-3 p-1">
		<label>To</label>
		<input type="to[]" class="form-control" name="">
	</div>
	<div class="form-group  col-md-3 p-1">
		<label>Flight No</label>
		<input type="text" name="flight[]" class="form-control">	
	</div>
	<div class="form-group col-md-3 p-1">
		<label>Multi Date</label>
		<input type="date[]" class="form-control" name="">
	</div>
	<div class="form-group col-md-3 p-1">
		<label>Cabin Class</label>
		<input type="cabin[]" class="form-control" name="">
	</div>
</div> 
<div id="flights">
	
</div>

<div class="text-left">
	<input type="button" onclick="faddroute()" id="addroute" class="btn btn-info" value="Add Routes">
</div> -->

</div>
<hr>
		<div class="row">
			<div class="form-group col-md-5">
				<label>Airline</label>
				<select class="form-control">
					<option selected="" disabled="">Select Airline</option>
				</select>
			</div>

			<div class="form-group col-md-2">
				 <label  >Adult</label>
				 <input type="number" name="adults" min="0" value="0" class="form-control">
			</div>
			<div class="form-group col-md-2">
				 <label  >Child</label>
				 <input type="number" name="children" min="0" value="0" class="form-control">
			</div>
			<div class="form-group col-md-2">
				 <label > Infant</label>
				 <input type="number" name="infants" min="0" value="0" class="form-control">
			</div>
		</div>
		</div>
		<div class="card-footer px-3">
			<div class="form-group text-right">
				<input type="submit" name="" class="btn btn-primary px-4" value="Continue">
			</div>
		</div>
		</form>
	</div>
</div>



<script type="text/javascript">
	function oneway(){
		$("#flightway").html('<div class="row">	<div class="form-group col-md-3 p-1">		<label>From</label>		<input type="from[]" class="form-control" name="">	</div>	<div class="form-group col-md-3 p-1">		<label>To</label>		<input type="to[]" class="form-control" name="">	</div>	<div class="form-group col-md-3 p-1">		<label>Departure Date</label>		<input type="d_date[]" class="form-control" name="">	</div>	<div class="form-group col-md-3 p-1">		<label>Cabin</label>		<input type="cabin[]" class="form-control" name="">	</div></div>');
	}
	function returnway(){
		$("#flightway").html('<div class="row">	<div class="form-group col-md-3 p-1">		<label>From</label>		<input type="from[]" class="form-control" name="">	</div>	<div class="form-group col-md-3 p-1">		<label>To</label>		<input type="to[]" class="form-control" name="">	</div>	<div class="form-group  col-md-3 p-1">		<label>Flight No</label>		<input type="text" name="d_flight[]" class="form-control">		</div>	<div class="form-group col-md-3 p-1">		<label>Departure Date</label>		<input type="d_date[]" class="form-control" name="">	</div>	<div class="form-group  col-md-3 p-1">		<label>Flight No</label>		<input type="text" name="r_flight[]" class="form-control"></div>	<div class="form-group col-md-3 p-1">		<label>Return Date</label>		<input type="r_date[]" class="form-control" name="">	</div>	<div class="form-group col-md-3 p-1">		<label>Departure Cabin Class</label>		<input type="d_cabin[]" class="form-control" name="">	</div>	<div class="form-group col-md-3 p-1">		<label>Return Cabin Class</label>		<input type="r_cabin[]" class="form-control" name="">	</div>	<div class="form-group col-md-3 p-1">		<label>Departure Bag</label>		<input type="d_bag[]" class="form-control" name="">	</div>	<div class="form-group col-md-3 p-1">		<label>Return Bag</label>		<input type="r_bag[]" class="form-control" name="">	</div></div>');
	}
	function multiway(){
		$("#flightway").html(' <div class="row">	<div class="form-group col-md-3 p-1">		<label>From</label>		<input type="from[]" class="form-control" name="">	</div>	<div class="form-group col-md-3 p-1">		<label>To</label>		<input type="to[]" class="form-control" name="">	</div>	<div class="form-group  col-md-3 p-1">		<label>Flight No</label>		<input type="text" name="flight[]" class="form-control">		</div><div class="form-group col-md-3 p-1">		<label>Multi Date</label>		<input type="date[]" class="form-control" name="">	</div>	<div class="form-group col-md-3 p-1">		<label>Cabin Class</label>		<input type="cabin[]" class="form-control" name="">	</div></div> <div id="flights"></div><div class="text-left"><input type="button" onclick="faddroute()" id="addroute" class="btn btn-info" value="Add Routes"></div>');
	}


	function faddroute(){
		$("#flights").append('<div class="row">	<div class="form-group col-md-3 p-1">		<label>From</label>		<input type="from[]" class="form-control" name="">	</div>	<div class="form-group col-md-3 p-1">		<label>To</label>		<input type="to[]" class="form-control" name="">	</div>	<div class="form-group  col-md-3 p-1">		<label>Flight No</label>		<input type="text" name="flight[]" class="form-control"></div>	<div class="form-group col-md-3 p-1">		<label>Multi Date</label>		<input type="date[]" class="form-control" name="">	</div>	<div class="form-group col-md-3 p-1">		<label>Cabin Class</label>		<input type="cabin[]" class="form-control" name="">	</div></div> ')

	}
</script>

@endsection