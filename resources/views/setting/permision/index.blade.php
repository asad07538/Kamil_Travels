@extends('layouts.admin.master')

@section('content')

<div class="container">
    <div class="row  p-3">
        
    <h2>Permissions</h2>
    <table class="table table-striped table-bordered">
        <thead class="bg-dark text-white">
            <th class="p-2">Name</th>
            <th class="p-2">Description</th>
        </thead>
    @foreach ($permissions as $permission)
        <tr>
            <td class="p-1">
                <strong> {{$permission->name}}</strong>
            </td>
            <td class="p-1">
               {{$permission->description}}
            </td>
        </tr>
    @endforeach
    </table>

    </div>
</div>


@endsection


