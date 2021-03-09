@extends('layouts.admin.master')

@section('content')

<div>
<div class="container">
    <div class="row p-3">
        <div class="col-md-4 px-4 " class="text-center">
            <div class="card">
                <div class="card-header text-center">
                    <img src="{{ asset($user->image) }}"  class="rounded-circle" width="250px">
                </div>
                <div class="card-body">
                    <h2>{{$user->name}}</h2>
                    <h5>{{$user->email}}</h5>
                </div>
                <div class="card-footer text-right">
                    @can("has_per","user-edit")
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#usereditmodal">
                        Edit User
                    </button>
                    @endcan
                    @can("has_per","user-delete")
                    <a href="{{ route('user.delete', $user->id )}}" class="btn btn-danger btn-sm text-right" >Delete</a>
                    @endcan
                </div>
            </div>        
        </div>
        <div class="col-md-8">    
            <table class="table table-striped ">
                <thead style="background: black; color:white;">
                    <th>Group Name</th>
                    <th>Description</th>
                    <th>View</th>
                </thead>
                @foreach($user->groups as $group)
                <tr>
                    <td>{{$group->name}}</td>
                    <td>{{$group->description}}</td>
                    <td><a href="/group/{{$group->id}}">View</a></td>
                </tr>
                @endforeach
            </table>
            <table class="table table-striped ">
                <thead style="background: black; color:white;">
                    <th>Permission Name</th>
                    <th>Description</th>
                </thead>
                @foreach($user->permissions as $permission)
                <tr>
                    <td>{{$permission->name}}</td>
                    <td>{{$permission->description}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
  
  @include('setting/users/edit')

@endsection


