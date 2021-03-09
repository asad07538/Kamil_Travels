@extends('layouts.guest.master')

@section('content')
<div class="container p-5">
<div class="row">
	<div class="col-md-4">
		<h3>Import main ledger</h3>
		<form action="{{ route('mainimport')}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label>select file</label>
				<input type="file" name="file" class="form-control">
			</div>
			<div>
				<input type="submit" name="submit" value="import" class="form-control">
			</div>
		</form>
	</div>
	<div class="col-md-4">
		<h3>Import client ledger</h3>
		<form action="{{ route('customerimport')}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label>select file</label>
				<input type="file" name="file" class="form-control">
			</div>
			<div>
				<input type="submit" name="submit" value="import" class="form-control">
			</div>
		</form>
	</div>
	<div class="col-md-4">
		<h3>search</h3>
		<a href="{{ route('search')}}">Search</a>
	</div>
</div>
<div>
	{{@count($main)}}
</div>
	<div class="result">
		<table class="table "> 
			<thead>
				<tr>
					<th>Row</th>
					<th>ticket_no</th>
					<th>found</th>
				</tr>
			</thead>
			<tbody>
					@foreach($main as $m)
						@if($m->found == 0)
						<tr>
							<td>{{$m->id}}</td>		
							<td>{{$m->ticket_no}}</td>		
							<td>{{$m->found}}</td>		
						</tr>
						@endif
					@endforeach

			</tbody>
		</table>
	</div>
<!--     <div class="row justify-content-center p-3">
        main->links() }}
    </div> -->
</div>
@endsection