@extends('layouts.admin.master')

@section('content')
<div class="container">
<div class="row p-3">
    <h2 class="col-md-6">
        Users
    </h2>
    <div class="col-md-6 text-right">
        @can("has_per","user-create")
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#usermodal">
            Add New User
        </button>
        @endcan
    </div>
<table class="table table-striped  table-responsive-sm ">
    <thead class="bg-dark text-white">
        <th>Image</th>
        <th>User Name</th>
        <th>Email</th>
        @can("has_per","user-show")
        <th>View</th>
        @endcan
    </thead>
    @foreach($users as $user)
    <tr>
        <td class="p-0"><img src="{{asset($user->image)}}"  class="rounded-circle"  width="50px;"></td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        @can("has_per","user-show")
        <td><a href="/users/{{$user->id}}" class="btn btn-sm btn-primary">View</a></td>
        @endcan
    </tr>
    @endforeach
</table>
</div>
</div>
@can("has_per","user-create")
    @include('setting/users/create')
@endcan
@endsection


