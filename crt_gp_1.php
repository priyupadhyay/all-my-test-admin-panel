<!DOCTYPE html>
<html lang="en">

<?php
 include '../parts/header_one.php';
 ?>

<title>
 Material Dashboard by Creative Tim
</title>

<?Php
 include '../parts/header_two.php';
 include '../parts/nav.php';
 include '../parts/navtop.php';
 ?>

 <div class="col-md-12" style="margin-top: 10%;">
     <div class=""col-md-4 col-md-offset-4><h3>Create Group</h3></div>
              <form id="TypeValidation" class="form-horizontal">
                <div class="card ">
                  <div class="card-header card-header-rose card-header-text">
                    <div class="card-text">
                      <h4 class="card-title">Required Info.</h4>
                    </div>
                  </div>
                  <div class="card-body "> 
                      <div class="row">
                      <label class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <input class="form-control" type="text" name="name" required="true" />
                        </div>
                      </div> 
                    </div>   
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Description</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <input class="form-control" type="text" name="description" required="true" />
                          <input class="form-control" value="" type="hidden" name="trainer_id" required="true" />
                        </div>
                      </div> 
                    </div> 
                                    
                  </div>
                  <div class="card-footer ml-auto mr-auto">
                    <button type="button" onClick="createGroup1()" class="btn btn-rose">Next</button>
                  </div>
                </div>
              </form>
            </div>


<?Php
 include '../parts/footer_one.php';
 include '../parts/footer_two.php';

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	function createGroup1(){
		var name = $("#name").val();
		var description = $("#description").val();
		var trainer_id = $("#trainer_id").val();
		$.ajax({
		   type:'POST',
		   url:'http://35.194.226.60:3000/api/v1/groups',
		   data:'name='+name+'&description='+description+'&trainer_id='+trainer_id,
		   success:function(data){
			   if(data.status == 200){
				   window.location.href = configuration.api_url+"/crt_gp_2.php";
			   }else{
				   alert(data.response.msg);
			   }
			   
			}
		});
	}
</script>
</body>
</html>

