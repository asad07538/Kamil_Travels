@extends('layouts.admin.master')

@section('content')
<div class="container">
	<div class="row p-3">
		<div class="col-md-6">
			<h4>Sale:{{$booking->code}}</h4>
			<h5>Add Ticket Numbers</h5>
		</div>
	</div>
	<form action="{{ route('pnr_ticket_number_store')}}" method="post">
	@csrf
	<input type="hidden" name="booking" value="{{$booking->id}}">
	<input type="hidden" name="pnr" value="{{$pnr->id}}">
<table class="table table-responsive-sm  table-striped">
	<thead>
		<tr>
			<th>Pax Type</th>
			<th>Name</th>
			<th>SurName</th>
			<th>CNIC</th>
			<th>Ticket No</th>
		</tr>
	</thead>
	<tbody>
		@foreach($pnr->passengers as $pax)
		<tr>
			<input type="hidden" name="pax_id[]" value="{{$pax->id}}">
			<td class="py-1">{{$pax->pax_type}}</td>
			<td class="py-1">{{$pax->person->name}}</td>
			<td class="py-1">{{$pax->person->surname}}</td>
			<td class="py-1">{{$pax->person->cnic}}</td>
			<td class="py-1"><input type="text" name="ticket_no[]" required="" class="form-control"></td>
		</tr>
		@endforeach
	</tbody>
</table>
	<div class="p-2 text-right">
		<input type="submit" name="" class="btn btn-primary" value="Store">
	</div>

</form>
</div>
@endsection