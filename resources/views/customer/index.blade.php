@extends('layouts.guest.master')

@section('content')

@if(Auth::user()->type=="customer")
	@include('admin.customer')
@endif

@endsection
