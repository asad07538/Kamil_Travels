@extends('layouts.admin.master')

@section('content')
<div class="container ">
	<div class="row p-3">
		<div class="col-md-6">
			<h4>Account: {{$account->title}}</h4>
			<h5>Head Account: 
				<a href="{{ route('head_accounts_show',$account->parent->id)}}">
					{{$account->parent->title}}</a>
			</h5>
			<h5>Root Account: 
				<a href="{{ route('root_accounts_show',$account->parent->parent->id)}}">
					{{$account->parent->parent->title}}	
				</a>
			</h5>
		</div>
		<div class="col-md-6 text-right">
			<a href="{{ route('country_edit',$account->id)}}" class="btn btn-primary btn-sm"><i>Edit</i></a>
			<a href="{{ route('country_delete',$account->id)}}" class="btn btn-primary btn-sm"><i>Delete</i></a>
		</div>
	</div>
	<div class=" p-3">
		<h3>Transactions</h3>
	</div>
</div>




@endsection