<div class=" col-lg-3">
  <div class=" p-0 px-2">
    <label   for="title">
      Phone :&nbsp;&nbsp;
      <i class="fa fa-plus text-left  btn btn-info btn-sm" onclick="addphone()"></i></label>
  </div>
  <div class="  p-0" id="phone">

    <div class="row">
      <div class="col-lg-10">
          <input type="text" name="phone[]" class="form-control" placeholder="phone"  >&nbsp;
      </div>
      <div class="col-lg-2">
          <i style="" onclick="$(this).parent().parent().remove()" class="clsebutton">&times;</i>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  
    function addphone(){
  $("#phone").append('    <div class="row">      <div class="col-lg-10">          <input type="text" name="phone[]" class="form-control" placeholder="phone"  >&nbsp;      </div>      <div class="col-lg-2">          <i style="" onclick="$(this).parent().parent().remove()" class="clsebutton">&times;</i>      </div>    </div>');
}
</script>

