@extends('layouts.admin.master')

@section('content')

<div class="container">
    <div class="row  p-3">
        <h2 class="col-md-6 px-4 " class="text-center">
            Groups
        </h2>
        <div class="col-md-6 px-4 text-right">
        <input type="text" name="myInput" onkeyup="tablefilterfunction(grouptable,1)" placeholder="Search Group">
        @can("has_per","group-create") 
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#groupmodal">
            Add New Group
        </button>
        @endcan
        </div>
    <table class="table table-striped table-bordered table-responsive-sm" id="grouptable">
        <thead class="bg-dark text-white">
            <th>Name</th>
            <th>Description</th>
            @can("has_per","group-show")
            <th>View</th>
            @endcan
        </thead>
    @foreach ($groups as $group)
        <tr>
            <td>
                <strong>{{$group->name}}</strong>
            </td>
            <td>
                {{$group->description}}
            </td>
            @can("has_per","group-show")
            <td>
                <a href="/group/{{$group->id}}" class="btn btn-primary btn-sm">View</a>
            </td>
            @endcan
        </tr>
    @endforeach
    </table>
    </div>
</div>





  

  @include('setting/group/create')

@endsection


