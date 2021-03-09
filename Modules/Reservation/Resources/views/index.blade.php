@extends('layouts.admin.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('reservation.name') !!}
    </p>
@endsection
