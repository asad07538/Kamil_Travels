<nav id="sidebar" style="overflow: auto; scroll-behavior: none  ; background-color:  rgb(255, 230, 230);">
  <div class="p-2 pt-1">
  <h3 class="text-center">
    <img src="{{ asset('logo/logo.png')}}" alt="Kamil Travel and Tours" width="80px" height="50px;"> 
  </h3>
    <ul class="list-unstyled sidebars components mb-5">
      <li class="active">
      <a href="{{ route('home')}}">
        <i class="fa fa-home"> Home</i>
      </a>
      </li>
@can('has_per','sale')
<!-- Sales -->
      <li >
        <a href="{{ route('booking_index')}}">
          <i class="fa fa-ticket"> Sale</i>
        </a>
      </li>
@endcan
@can('has_per','refund')
<!-- Refund -->
      <li >
        <a href="">
          <i class="fa fa-ticket"> Refund</i>
        </a>
      </li>
<!-- Transactions -->
@endcan
@can('has_per','transaction')
      <li class="">
        <a href="#transaction" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
          <i class="fa fa-ticket">Transactions</i> </a>
        <ul class="collapse list-unstyled" id="transaction">
        <li>
            <a href="#">Bank Transactions </a>
        </li>
        <li>
            <a href="#">Cash Transactions</a>
        </li>
        </ul>
      </li>
@endcan
@can('has_per','voucher')
<!-- wallet -->
      <li class="">
        <a href="#wallet" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
          <i class="fa fa-ticket"> Vouchers</i> </a>
        <ul class="collapse list-unstyled" id="wallet">
          <li>
              <a href="#">Receipt Voucher </a>
          </li>
          <li>
              <a href="#">Payment Voucher</a>
          </li>
          <li>
              <a href="#">Journal Voucher</a>
          </li>
        </ul>
      </li>
@endcan
@can('has_per','accounts')
<!-- Accounts -->
      <li>
      <a href="#accounts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-calculator"></i> Accounts</a>
      <ul class="collapse list-unstyled" id="accounts">
        <li>
            <a href="{{ route('root_accounts')}}">Root Accounts</a>
        </li>
        <li>
            <a href="{{ route('head_accounts')}}">Head Accounts</a>
        </li>
        <li>
            <a href="{{ route('accounts')}}">Transaction Accounts</a>
        </li>
        <li>
            <a href="{{ route('airline_index')}}">Airline</a>
        </li>
        <li>
            <a href="{{ route('employee_index')}}">Empoyees</a>
        </li>
        <li>
            <a href="{{ route('customer_index')}}">Customers</a>
        </li>
        <li>
            <a href="{{ route('bank_index')}}">Banks</a>
        </li>
        <li>
            <a href="{{ route('bank_accounts')}}">Bank Accounts</a>
        </li>
      </ul>
      </li>
<!-- Setting -->
@endcan
@can('has_per','setting')
      <li>
      <a href="#setting" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-calculator"></i> Setting</a>
      <ul class="collapse list-unstyled" id="setting">
        <li>
            <a href="{{ route('countries') }}">Countries</a>
            <a href="{{ route('city_index')}}">Cities</a>
            <a href="{{ route('location_index')}}">Locations</a>
            <a href="{{ route('airports') }}">Airports</a>
            <a href="{{ route('sectors') }}">Sectors</a>
            <a href="{{ route('flights') }}">Flights</a>
            <a href="{{ route('flight_schedules') }}">Flight Schedules</a>
        </li>
      </ul>
      </li>
@endcan
@can('has_per','car')
<!-- Car -->
      <li>
      <a href="#car" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-calculator"></i> Car</a>
      <ul class="collapse list-unstyled" id="car">
        <li>
            <a href="{{ route('car_booking_index') }}">Bookings</a>
            <a href="{{ route('car_company_index') }}">Companies</a>
            <a href="{{ route('car_sector_index') }}">Sector</a>
            <a href="{{ route('car_type_index') }}">Types</a>
            <a href="{{ route('car_index') }}">Cars</a>
            <a href="{{ route('driver_index') }}">Drivers</a>
        </li>
      </ul>
      </li>
<!-- Hotel -->
@endcan
@can('has_per','hotel')
      <li>
      <a href="#hotel" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-calculator"></i>Hotel</a>
      <ul class="collapse list-unstyled" id="hotel">
        <li> 
            <a href="{{ route('hotel_index') }}">Hotels</a>
            <a href="{{ route('room_index') }}">Rooms</a>
            <a href="{{ route('room_type_index') }}">Room Types</a>
        </li>
      </ul>
      </li>
@endcan

@can('has_per','user_management')
<!-- User management -->
      <li>
      <a href="#usermanagement" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <i class="fa fa-user"> User management</i>
      </a>
      <ul class="collapse list-unstyled" id="usermanagement">
        @can('has_per', 'user-index')
          <li>
            <a href="{{ route('user.index') }}">{{ __('Users') }}</a>
          </li>
        @endcan
        @can('has_per', 'group-index')
        <li>
          <a href="{{ route('group.index') }}">{{ __('Groups') }}</a>
        </li>
        @endcan
        @can('has_per','permission-index')
        <li>
          <a  href="{{ route('permission.index') }}">{{ __('Permissions') }}</a>
        </li>
        @endcan
        @can('has_per','setting')
        <!-- <li> -->
          <!-- <a  href=" route('setting') }}">{{ __('Setting') }}</a> -->
        <!-- </li> -->
        @endcan

      </ul>
      </li>
@endcan


    </ul>

  <div class="mb-5">
  </div>

  </div>
</nav>