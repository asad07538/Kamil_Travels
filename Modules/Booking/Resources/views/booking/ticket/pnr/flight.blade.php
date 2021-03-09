@extends('layouts.admin.master')

@section('content')
<div class="container">
	<div class="row p-3">
		<div class="col-md-6">
			<h4>Sale:{{$booking->code}}</h4>
			<h5>PNR Flight Detail</h5>
		</div>
	</div>
	<input type="hidden" id="sector_count" value="1">
	<form action="{{route('booking_store_pnr_flight')}}" method="post">
	@csrf
	<input type="hidden" name="booking" value="{{$booking->id}}">
	<input type="hidden" name="pnr" value="{{$pnr->id}}">
	<div class="row p-2">
	<div class="container" id="flightway">
		<div class="row">
			<div class="form-group col-md-3 p-1">
				<label>From</label>
				<select name="from[]" id="from_1" class="form-control">
					<option selected="" disabled="">Select Airport</option>
					@foreach($airports as $airport)
					<option value="{{$airport->id}}">{{$airport->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group col-md-3 p-1">
				<label>To</label>
				<select name="to[]" id="to_1" class="form-control">
					<option selected="" disabled="">Select Airport</option>
					@foreach($airports as $airport)
					<option value="{{$airport->id}}">{{$airport->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group   col-md-3 p-1">
				<label>Flight No</label>
				<input type="text" name="flight[]"  id="flight_1" class="form-control">	
			</div>
			<div class="form-group col-md-3 p-1">
				<label>Departure Date</label>
				<input type="date" name="d_date[]" class="form-control">
			</div>
			<div class="form-group col-md-3 p-1">
				<label>Departure Time</label>
				<input type="time" name="d_time[]" class="form-control">
			</div>
			<div class="form-group col-md-3 p-1">
				<label>Arrival Time</label>
				<input type="time" name="a_time[]" class="form-control">
			</div>
			<div class="form-group col-md-3 p-1">
				<label>Cabin</label>
				<input type="text" name="cabin[]" class="form-control">
			</div>
			<div class="form-group col-md-3 p-1">
				<label>Bag</label>
				<input type="number" name="bag[]" value="30" min="0" class="form-control">
			</div>
		</div>
		<div id="flights">
		</div>
			<div class="text-left">
				<input type="button" onclick="faddroute()" id="addroute" class="btn btn-info" value="Add Routes">
			</div>
		</div>
		<hr>
	</div>
	<div class="card-footer px-3">
		<div class="form-group text-right">
			<input type="submit" name="submit" class="btn btn-primary px-4" value="next">
			<input type="submit" name="submit" class="btn btn-primary px-4" value="Finish">
		</div>
	</div>
	</form>
</div>



<script type="text/javascript">
	function oneway(){
		$("#flightway").html('<div class="row">	<div class="form-group col-md-3  p-1">		<label>From</label>		<input type="from[]" class="form-control" name="">	</div>	<div class="form-group col-md-3  p-1">		<label>To</label>		<input type="to[]" class="form-control" name="">	</div>	<div class="form-group col-md-3  p-1">		<label>Departure Date</label>		<input type="d_date[]" class="form-control" name="">	</div>	<div class="form-group col-md-3  p-1">		<label>Cabin</label>		<input type="cabin[]" class="form-control" name="">	</div></div>');
	}
	function returnway(){
		$("#flightway").html('<div class="row">	<div class="form-group col-md-3 p-1">		<label>From</label>		<input type="from[]" class="form-control" name="">	</div>	<div class="form-group col-md-3 p-1">		<label>To</label>		<input type="to[]" class="form-control" name="">	</div>	<div class="form-group  col-md-3 p-1">		<label>Flight No</label>		<input type="text" name="d_flight[]" class="form-control">		</div>	<div class="form-group col-md-3 p-1">		<label>Departure Date</label>		<input type="d_date[]" class="form-control" name="">	</div>	<div class="form-group  col-md-3 p-1">		<label>Flight No</label>		<input type="text" name="r_flight[]" class="form-control"></div>	<div class="form-group col-md-3 p-1">		<label>Return Date</label>		<input type="r_date[]" class="form-control" name="">	</div>	<div class="form-group col-md-3 p-1">		<label>Departure Cabin Class</label>		<input type="d_cabin[]" class="form-control" name="">	</div>	<div class="form-group col-md-3 p-1">		<label>Return Cabin Class</label>		<input type="r_cabin[]" class="form-control" name="">	</div>	<div class="form-group col-md-3 p-1">		<label>Departure Bag</label>		<input type="d_bag[]" class="form-control" name="">	</div>	<div class="form-group col-md-3 p-1">		<label>Return Bag</label>		<input type="r_bag[]" class="form-control" name="">	</div></div>');
	}
	function multiway(){
		$("#flightway").html(' <div class="row">	<div class="form-group col-md-3 p-1">		<label>From</label>		<input type="from[]" class="form-control" name="">	</div>	<div class="form-group col-md-3 p-1">		<label>To</label>		<input type="to[]" class="form-control" name="">	</div>	<div class="form-group  col-md-3 p-1">		<label>Flight No</label>		<input type="text" name="flight[]" class="form-control">		</div><div class="form-group col-md-3 p-1">		<label>Multi Date</label>		<input type="date[]" class="form-control" name="">	</div>	<div class="form-group col-md-3 p-1">		<label>Cabin Class</label>		<input type="cabin[]" class="form-control" name="">	</div></div> <div id="flights"></div><div class="text-left"><input type="button" onclick="faddroute()" id="addroute" class="btn btn-info" value="Add Routes"></div>');
	}


	function faddroute(){
		var count_row=$("#sector_count").val();
		count_row=count_row+1;
		$("#sector_count").val(count_row);

		var html=$("#flighthtml").html();
		$("#flights").append('<div class="row">			<div class="form-group col-md-3 p-1">				<label>From</label>				<select name="from[]" id="from_'+count_row+'" class="form-control">					<option selected="" disabled="">Select Airport</option>					@foreach($airports as $airport)					<option value="{{$airport->id}}">{{$airport->name}}</option>					@endforeach				</select>			</div>			<div class="form-group col-md-3 p-1">				<label>To</label>				<select name="to[]" id="to_'+count_row+'" class="form-control">					<option selected="" disabled="">Select Airport</option>					@foreach($airports as $airport)					<option value="{{$airport->id}}">{{$airport->name}}</option>					@endforeach				</select>			</div>			<div class="form-group   col-md-3 p-1">				<label>Flight No</label>				<input type="text" name="flight[]"  id="flight_'+count_row+'" class="form-control">				</div>			<div class="form-group col-md-3 p-1">				<label>Departure Date</label>				<input type="date" name="d_date[]" class="form-control">			</div>			<div class="form-group col-md-3 p-1">				<label>Departure Time</label>				<input type="date" name="d_time[]" class="form-control">			</div>			<div class="form-group col-md-3 p-1">				<label>Arrival Time</label>				<input type="date" name="a_time[]" class="form-control">			</div>			<div class="form-group col-md-3 p-1">				<label>Cabin</label>				<input type="text" name="cabin[]" class="form-control">			</div>			<div class="form-group col-md-3 p-1">				<label>Bag</label>				<input type="text" name="bag[]" value="30" class="form-control">			</div>		</div>');

	}
</script>
@endsection