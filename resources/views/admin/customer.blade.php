<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="card p-0 mx-2 my-4 text-center  dashcards">

		        <div class="card-up aqua-gradient p-3" style="height: 90px; background: linear-gradient(to bottom, #9999ff 0%, #99ff33 100%)">
		        	<h2>Welcome Mr. {{Auth::user()->name}}, {{Auth::user()->customer->person->surname}}</h2>
		        </div>

				<table class="table table-striped">
					<tr>
						<th colspan="6 text-center">Your Scored Points Detail</th>
					</tr>
		          	<tr>
		          		<th class="py-1">Total Points:</th>
		          		<td class="py-1">{{Auth::user()->customer->total_points}}</td>
		          		<th class="py-1">Total Points:</th>
		          		<td class="py-1">{{Auth::user()->customer->used_points}}</td>
		          		<th class="py-1">Total Points:</th>
		          		<td class="py-1">{{Auth::user()->customer->remaining_points}}</td>
		          	</tr>
		          </table>
			</div>
		</div>
		<div class="col-md-4">
	      <div class="card p-0  mx-2 my-4 text-center  dashcards" >
	        <div class="card-up aqua-gradient " style="height: 80px; background: linear-gradient(to bottom, #9999ff 0%, #99ff33 100%)">
	        </div>
	        <div class="justify-content-center avatar ">
	          <img src="{{ asset(Auth::user()->image) }}" width="150px" height="150px"   style="border-radius: 100%; border:3px solid white; margin-top: -70px;" >
	        </div>
	        <div class="px-0 text-left py-2">
	          <table class="table table-striped">
	          	<tr>
	          		<th class="py-1 text-center " colspan="2">Member Id:{{Auth::user()->email}}</th>
	          	</tr>
	          	<tr>
	          		<th class="py-1">Name:</th>
	          		<td class="py-1">{{Auth::user()->name}}</td>
	          	</tr>
	          	<tr>
	          		<th class="py-1">CNIC:</th>
	          		<td class="py-1">{{Auth::user()->cnic}}</td>
	          	</tr>
	          	<tr>
	          		<th class="py-1">Email:</th>
	          		<td class="py-1">{{Auth::user()->email}}</td>
	          	</tr>
	          	<tr>
	          		<th class="py-1">Father Name:</th>
	          		<td class="py-1">{{Auth::user()->customer->person->father_name}}</td>
	          	</tr>
	          	<tr>
	          		<th class="py-1">Nationality:</th>
	          		<td class="py-1">{{Auth::user()->customer->person->nationality->name}}</td>
	          	</tr>
	          	<tr>
	          		<th class="py-1">Date Of Birth:</th>
	          		<td class="py-1">{{Auth::user()->customer->person->date_of_birth}}</td>
	          	</tr>
	          	<tr>
	          		<th class="py-1">Gender:</th>
	          		<td class="py-1">{{Auth::user()->customer->person->gender}}</td>
	          	</tr>
	          	<tr>
	          		<th class="py-1">Phone:</th>
	          		<td class="py-1">{{Auth::user()->customer->person->phones[0]->number}}</td>
	          	</tr>
	          </table>
	          <hr>
	        </div>
	      </div>
		</div>
	</div>
</div>