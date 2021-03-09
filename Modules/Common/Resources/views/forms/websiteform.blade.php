<div class="  col-lg-3">
  <div class=" p-0 px-2">
    <label   for="title">
      Website:&nbsp;&nbsp;
      <i class="fa fa-plus text-left  btn btn-info btn-sm" onclick="addwebsite()"></i></label>
  </div>
  <div class=" p-0" id="website">
      <input type="text" name="website[]" class="form-control" placeholder="website"  style="margin:3px;">&nbsp;
  </div>
</div>

  <script type="text/javascript">
  	
  function addwebsite(){
    $("#website").append('<div><input type="text" name="website[]" class="form-control" placeholder="Website"  style="margin:3px;"><i style="" onclick="$(this).parent().remove()">&times;</i></div>');
  }
  </script>