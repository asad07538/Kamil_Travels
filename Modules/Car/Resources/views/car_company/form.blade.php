<div class="row justify-content-center">
<div class="col-md-6 ">
	
	<div class="form-group  ">
		<label>Company Name</label>
		<input type="text" name="company_name" class="form-control"> 
	</div>
	<div class="form-group  ">
		<label>Address</label>
		<input type="text" name="company_address" class="form-control"> 
	</div>
	<div class="form-group ">
    	<label   for="title">
      	Phone :&nbsp;&nbsp;
      	<i class="fa fa-plus text-left  btn btn-info btn-sm" onclick="addphone()"></i></label>
		  <div class="m-0  p-0" id="phone">
		    <div class="row">
		      <div class="col-lg-10">
		          <input type="text" name="company_contact[]" class="form-control" placeholder="phone"  >&nbsp;
		      </div>
		      <div class="col-lg-2">
		          <i style="" onclick="$(this).parent().parent().remove()" class="clsebutton">&times;</i>
		      </div>
		    </div>
		  </div>
	</div>

</div>
</div>






<script type="text/javascript">
  
    function addphone(){
  $("#phone").append('    <div class="row">      <div class="col-lg-10">          <input type="text" name="company_contact[]" class="form-control" placeholder="phone"  >&nbsp;      </div>      <div class="col-lg-2">          <i style="" onclick="$(this).parent().parent().remove()" class="clsebutton">&times;</i>      </div>    </div>');
}
</script>

