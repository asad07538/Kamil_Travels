@extends('layouts.guest.master')

@section('content')
<form method="POST" action="{{ route('register') }}"  enctype="multipart/form-data">
<!-- <div class="container"> -->
<div class="row justify-content-center p-4">
        <div class="col-md-4">
            <img src="{{ asset('backgrounds/registration_card.jpg')}}" width="100%" style="margin: -20px;">
        </div>
        <div class="col-md-8">
        <div class="row">
                @csrf
                <div class="form-group col-md-4">
                    <label for="name" class="col-form-label text-md-right">{{ __('Name') }}</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name"  autofocus placeholder="Name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="sur_name" class="col-form-label text-md-right">{{ __('Surname') }}</label>
                    <input id="sur_name" type="text" class="form-control @error('sur_name') is-invalid @enderror" name="sur_name" value="{{ old('sur_name') }}" required autocomplete="sur_name" autofocus placeholder="Surname" >
                    @error('sur_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="country" class="col-form-label text-md-right">{{ __('Nationality') }}</label>
                    <select for="country" name="country" class="form-control @error('sur_name') is-invalid @enderror">
                        <option disabled="" selected="">Select Country</option>
                        @foreach($countries as $country)
                        <option value="{{$country->id}}">{{$country->name}}</option>
                        @endforeach
                    </select>
                    @error('country')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="father_name" class="col-form-label text-md-right">{{ __('Father Name') }}</label>
                    <input id="father_name" type="father_name" class="form-control @error('father_name') is-invalid @enderror" name="father_name" value="{{ old('father_name') }}" required autocomplete="father_name">
                    @error('father_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="dob" class="col-form-label text-md-right">{{ __('Date of Birth') }}</label>
                    <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required autocomplete="dob" >
                    @error('dob')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="gender" class="col-form-label text-md-right">{{ __('Gender') }}</label>
                    <select id="gender" name="gender"  class="form-control @error('gender') is-invalid @enderror" required autocomplete="gender" > 
                        <option value="male">{{ __('Male') }}</option>
                        <option value="female">{{ __('Female') }}</option>
                    </select>
                    @error('gender')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="cnic" class="col-form-label text-md-right">{{ __('CNIC') }}</label>
                    <input id="cnic" type="cnic" class="form-control @error('cnic') is-invalid @enderror" name="cnic" value="{{ old('cnic') }}" required autocomplete="CNIC">
                    @error('cnic')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="phone_no" class="col-form-label text-md-right">{{ __('Mobile Number ') }}</label>
                    <input id="phone_no" type="phone_no" class="form-control @error('phone_no') is-invalid @enderror" name="phone_no" value="{{ old('phone_no') }}" required autocomplete="phone_no">
                    @error('phone_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="image" class="col-form-label text-md-right">{{ __('Profile Image') }}</label>
                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" required autocomplete="image">

                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
        </div>
    <div class="form-group mb-0 text-right">
        <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
    </div>
</div>
</div>
            </form>
<!-- </div> -->
@endsection
