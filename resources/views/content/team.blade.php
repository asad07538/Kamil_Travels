

<div class="row p-5"  style="background-color:  #F3F3F9  ;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-12">
          <h3 class="text-center">Our Team</h3>
      </div>
      @foreach($employees as $employee)
      <div class="card col-md-2 col-sm-6 p-0 m-3 text-center  dashcards" >
        <div class="card-up aqua-gradient " style="height: 80px; background: linear-gradient(to bottom, #9999ff 0%, #99ff33 100%)">
          
        </div>
        <div class="justify-content-center avatar ">
          <img src="{{ asset($employee->user->image) }}" width="150px" height="150px"   style="border-radius: 100%; border:3px solid white; margin-top: -70px;" >
        </div>
        <div class="px-3">
          <h3>{{$employee->name}}</h3>
          <hr>
          <i class="fa fa-email m-1">{{$employee->user->email}}</i>
          <i class="fa fa-phone m-1"> 0732897878</i>
          <hr>
        </div>
      </div>
      @endforeach


    </div>
  </div>
</div>