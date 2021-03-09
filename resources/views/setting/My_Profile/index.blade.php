@extends('layouts.admin.master')

@section('content')


<div>
<section id="main-container">
<div class="container">
<div class="card  m-3 p-0">
        <div class="card-header bg-dark text-white text-center">
         <img src="{{asset($user->image)}}" class="rounded-circle" style="width: 162px;height: 162px;">   
            <h2 class="text-center">{{$user->name}}</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">Name</div>
                <div class="col-lg-8">
                     <strong>{{$user->name}}</strong>
                </div>
                <div class="col-lg-4">Email</div>
                <div class="col-lg-8">
                     <strong>{{$user->email}}</strong>
                </div>
            </div>
        </div>
        <div class="card-footer  bg-dark text-white text-center">
            @can('has_per','update-profile')
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#profileupdatemodal">Update Profile</button>
            @endcan
            @can('has_per','profile-password-change')
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#passwordupdatemodal">Update Password</button>
            @endcan
        </div>
</div>

</div>
</div>
</section>
</div>

@include('setting.My_Profile.change-password')
@include('setting.My_Profile.update-profile')
@endsection


