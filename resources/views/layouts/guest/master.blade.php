@extends('layouts.app')

@section('contents')
	@include('layouts.guest.nav')
	<div style="min-height: 500px;">
		@yield('content')
	</div>
	@include('layouts.guest.footer')
@endsection