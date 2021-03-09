<nav class="navbar navbar-expand-md  shadow-sm" style="background-color: #23282d; color: white;" >
<div class="container">
<a class="navbar-brand" style="border-bottom: 3px solid  #40ff00;" href="{{ url('/') }}"> 
    {{ config('app.name', 'Naynawa Travels and Tour') }}
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
            <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
        </li>
    @guest
<!--         <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Flight') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('About') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Services') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> -->
        </li>
<!--         @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif -->
    @else
        <li class="nav-item">
            <a class="nav-link" href="{{ route('reservation') }}">{{ __('Reservation') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('bank_index') }}">{{ __('Bank') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">{{ __('Cash') }}</a>
        </li>
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                Accounts
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('user.index') }}">
                    {{ __('Account') }}
                </a>
                <a class="dropdown-item" href="{{ route('customer_index') }}">
                    {{ __('Customers') }}
                </a>
                <a class="dropdown-item" href="{{ route('user.index') }}">
                    {{ __('Suppliers') }}
                </a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                Reports
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('countries') }}">
                    {{ __('Sale') }}
                </a>
                <a class="dropdown-item" href="{{ route('countries') }}">
                    {{ __('Sale') }}
                </a>
                <a class="dropdown-item" href="{{ route('customer_index') }}">
                    {{ __('Airline') }}
                </a>
            </div>
        </li>

<!--         <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                Statics
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="">
                    {{ __('Countries') }}
                </a>
                <a class="dropdown-item" href="">
                    {{ __('Airports') }}
                </a>
                <a class="dropdown-item" href="">
                    {{ __('Sectors') }}
                </a>
                <a class="dropdown-item" href="">
                    {{ __('Flights') }}
                </a>
                <a class="dropdown-item" href="">
                    {{ __('Flight Schedules') }}
                </a>
            </div>
        </li> -->
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <img src="{{ Auth::user()->image }}" width="20px" height="20px" class="rounded-circle"> {{ Auth::user()->name }}   <span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                @can('has_per', 'user-index')
                <a class="dropdown-item" href="{{ route('user.index') }}">
                    {{ __('Users') }}
                </a>
                @endcan
                @can('has_per', 'group-index')
                <a class="dropdown-item" href="{{ route('group.index') }}">
                    {{ __('Groups') }}
                </a>
                @endcan
                @can('has_per','permission-index')
                <a class="dropdown-item" href="{{ route('permission.index') }}">
                    {{ __('Permissions') }}
                </a>
                @endcan
                @can('has_per','my-profile')
                <a class="dropdown-item" href="{{ route('profile.my') }}">
                    {{ __('My Profile') }}
                </a>
                @endcan
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
