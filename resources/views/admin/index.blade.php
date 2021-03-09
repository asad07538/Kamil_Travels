@extends('layouts.admin.master')

@section('content')

@if(Auth::user()->type=="super_user")
	@include('admin.super_user')
@endif
@if(Auth::user()->type=="admin")
	@include('admin.admin')
@endif
@if(Auth::user()->type=="employee")
	@include('admin.employee')
@endif
@if(Auth::user()->type=="customer")
	@include('admin.customer')
@endif

@endsection
