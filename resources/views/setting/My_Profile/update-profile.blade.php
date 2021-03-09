<!-- The Modal -->
<div class="modal fade" id="profileupdatemodal">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update Profile</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
        <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
            <div class="modal-body">
              @csrf
              <div class="form-group">
                  <label>Email</label>
                  <input class="form-control"  type="text" value="{{$user->email}}" disabled="" >
              </div>
              <div class="form-group">
                  <label>Name</label>
                  <input class="form-control"  type="text" name="name"  value="{{$user->name}}">
              </div>
              <div class="form-group">
                  <label>Change Image</label>
                  <input type="file" name="image" class="form-control"  value="{{$user->image}}">
              </div>
            </div>
            <div class="modal-footer">
                <div  class="form-group text-right">
                    <input class="btn btn-primary solid blank"  type="submit" name="" value="Update">
                </div>
            </div>
        </form>
    </div>
  </div>
</div>  