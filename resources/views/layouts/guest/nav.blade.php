<nav class="navbar navbar-expand-md  sticky-top shadow-sm" style="background:rgb(250, 250, 250, 0.7); color: black; box-shadow: 2px 2px green;">
<div class="container">
<a class="navbar-brand pt-0 " href="{{ url('/') }}"> 
    <img src="{{ asset('logo/logo.png')}}" alt="images" width="40px">
    {{ config('app.name', 'Kamil Travel & Tours') }}
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<!-- Left Side Of Navbar -->
<ul class="navbar-nav mr-auto">

</ul>
<!-- Right Side Of Navbar -->
<ul class="navbar-nav ml-auto">
    <!-- Authentication Links -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}"><i class="fa fa-home"> {{ __('Home') }}</i></a>
        </li>
    @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Flight') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('About') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Services') }}</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else
        @can('has_per','customer')
<!--             <li  class="nav-item">
                <a class="nav-link" href=""><i class="fa fa-ticket">My Orders</i></a>
            </li> -->
            <li  class="nav-item">
                <a class="nav-link" href=""><i class="fa fa-ticket"> Request Booking</i></a>
            </li>
            <li  class="nav-item">
                <a class="nav-link" href="{{ route('bookings')}}"><i class="fa fa-ticket"> My Bookings</i></a>
            </li>
<!--             <li  class="nav-item">
                <a class="nav-link" href=""><i class="fa fa-ticket">Ticket Bookings</i></a>
            </li>
            <li  class="nav-item">
                <a class="nav-link" href=""><i class="fa fa-ticket">Hotel Bookings</i></a>
            </li> -->
        @endcan
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <i class="fa fa-usesr">
                    <img src="{{ Auth::user()->image }}" width="20px" height="20px" class="rounded-circle"> {{ Auth::user()->name }}  &nbsp;&nbsp; <span class="caret"></span>
                </i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('profile.my') }}">
                    {{ __('My Profile') }}
                </a>
                @can('has_per','setting')
                <a class="dropdown-item" href="{{ route('setting') }}">
                    {{ __('Setting') }}
                </a>
                @endcan
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
</ul>
</div>
</div>
</nav>
<style type="text/css">
    
    a{
        color:black;
        font-weight: bolder;
    }
</style>
