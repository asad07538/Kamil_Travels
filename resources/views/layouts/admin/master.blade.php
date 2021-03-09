@extends('layouts.app')

@section('contents')

<div class="wrapper d-flex align-items-stretch">
	@include('layouts.admin.sidebar')
      <div id="content" class="p-0 p-md-0 pt-0">
			@include('layouts.admin.navbar')
			<div class="">
				@yield('content')
			</div>
      </div>
</div>


@endsection