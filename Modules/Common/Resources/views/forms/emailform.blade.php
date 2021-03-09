<div class=" col-lg-3">
  <div class=" p-0 px-2 ">
    <label   for="title">
      Email:&nbsp;&nbsp;
      <i class="fa fa-plus text-left  btn btn-info btn-sm" onclick="addemail()"></i></label>
  </div>
  <div class=" p-0" id="email">
    <div class="row">
      <div class="col-lg-10">
          <input type="text" name="email[]" class="form-control" placeholder="Email" required="">
      </div>
      <div class="col-lg-2">
          <!-- <i style="" onclick="$(this).parent().parent().remove()" class="clsebutton">&times;</i> -->
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
	
function addemail(){
  $("#email").append('    <div class="row">      <div class="col-lg-10">          <input type="text" name="email[]" class="form-control" placeholder="Email"  >      </div>      <div class="col-lg-2">          <i style="" onclick="$(this).parent().parent().remove()" class="clsebutton">&times;</i>      </div>    </div>');
}
</script>