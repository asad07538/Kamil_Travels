@extends('layouts.admin.master')

@section('content')

<div class="container">
<div class="mx-auto col-md-12">
<div class="text-center">
    <h2 class="text-primary text-capitalize">{{$group->name}}</h2>
    <h5 class="text-primary text-capitalize">{{$group->description}}</h5>
</div>

</div>
<div class="mx-auto col-md-12">

<div class="card">
    <div class="card-header">
        <h4 class="mb-0">{{'Group Details'}}</h4>
    </div>
        <div class="card-body p-0">
            <table class="table table-striped table-bordered">
                <thead class="cheadgray">
                    <th>Allowed Permissions</th>
                    <th>Description</th>
                </thead>
                @foreach ($group->permissions as $per)
                    <tr>
                        <td>
                            <strong>{{$per->name}}</strong>
                        </td>
                        <td>
                            {{$per->description}}
                        </td>
                    </tr>
                @endforeach
            </table>

        </div>
        <div class="card-footer">
             <div class="col-md-12 text-right">
            @can("has_per","group-edit")

            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#groupeditmodal">
                Edit Group
            </button>
            @endcan
            @can("has_per","group-delete")
            <a href="{{ route('group.delete', $group->id )}}"  class="btn btn-danger btn-sm">Delete</a>
            @endcan
            </div>
        </div>
</div>
</div>

</div>


@include('setting/group/edit')

@endsection


