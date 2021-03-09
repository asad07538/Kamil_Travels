<nav class="navbar navbar-expand-md bg-white p-1 pr-4 pl-2 ">
  <!-- Brand -->
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <!-- <span class="navbar-toggler-icon"></span> -->
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
        </button>
  <a class="navbar-brand" href="#">
    <!-- <div class="custom-menu"> -->
    <!-- </div> -->
  {{ config('app.name', 'Naynawa Travels and Tour') }}</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <i class="fa fa-bars"></i>
    <!-- <span class="navbar-toggler-icon"></span> -->
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
     <ul class="navbar-nav mr-auto">

    </ul>
<!-- Right Side Of Navbar -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-bell"></i> Notification</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-envelope"></i> Message</a>
      </li>

      <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              <img src="{{ Auth::user()->image }}" width="30px" height="30px" class="rounded-circle"> {{ Auth::user()->name }} &nbsp;&nbsp;<span class="caret"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              @can('has_per','my-profile')
              <a class="dropdown-item" href="{{ route('profile.my') }}">
                  {{ __('My Profile') }}
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
    </ul>
  </div>
</nav>




