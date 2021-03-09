<!-- The Modal -->
<div class="modal fade" id="passwordupdatemodal">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update Password</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
        <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
            <div class="modal-body">
              @csrf
              @method('put')
              <div class="form-group">
                  <label>Old Password</label>
                  <!-- <input type="hidden" name="email" value="{{$user->email}}"> -->
                  <input class="form-control"  type="password" name="old_password"  placeholder="Old Password">
              </div>
              <div class="form-group">
                  <label>New Password</label>
                  <input class="form-control"  type="password" name="password" placeholder="New Password">
              </div>
              <div class="form-group">
                  <label>Confirm Password</label>
                  <input class="form-control"  type="password" name="password_confirmation" placeholder="Confirm Password">
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