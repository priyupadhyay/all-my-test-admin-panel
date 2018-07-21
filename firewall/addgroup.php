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

<div class="content">
        <div class="container-fluid">
          <div class="row">
          <div class="col-md-12">
              <div class="card ">
                <div class="card-header card-header-rose card-header-text">
                  <div class="card-text">
                    <h4 class="card-title">Add new Group</h4>
                  </div>
                </div>
                <div class="card-body ">
                  <form class="form-horizontal" action="#">

                    <div class="row">
                      <label class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <input required type="text" id="name" class="form-control">
                          <span class="bmd-help">plesae give a Name.</span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Description</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <textarea required id="description" class="form-control"></textarea>
                          <span class="bmd-help">plesae give a description.</span>
                        </div>
                      </div>
                    </div>

                   <div class="row">
                      <label class="col-sm-2 col-form-label">Select Trainer</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                            <select required id="userSelect" class="form-control">
	
                            </select>
                      
                          <span class="bmd-help">plesae select a Trainer/Faculty</span>
                        </div>
                      </div>
                    </div>  

                    
                    <button  onclick="postUser();" class="btn btn-rose btn-round">submit</button>
                   
                    
                  </form>
                 <center>
                  <h4 id="users"></h4>
                </center>
                
                </div>
               
              </div>
            </div>
        </div>
      </div>

 <?php

 include '../parts/footer_one.php';
 ?>

 </body>

 <?php>
 include '../parts/footer_two.php';
 ?>
 
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script>
	$(document).ready(function(){
		$.ajax({
		   type:'GET',
		   url:'http://35.194.226.60:3000/api/v1/users/type/Faculty',
		   data:'',
		   success:function(data){
				console.log(data); 
				$.each(data.response, function(key, value) {   
					$('#userSelect')
					 .append($("<option></option>")
					 .attr("value",value.user_id)
					 .text(value.name)); 
				});
			}
		});		
	});
		
</script>
<script>
    function postUser() {
        var n = $('#name').val();
         var d = $('#description').val();
         var t = $('#userSelect').val();   
         req = {"name": n,"description": d,"trainer_id": t};

		 $.ajax({
		   type:'POST',
		   url:'http://35.194.226.60:3000/api/v1/groups',
		   data:req,
		   success:function(data){
				console.log(data); 
				if(data.error==null){
					$('#users').html(syntaxHighlight("Recored Inserted Successflly"));
				} else{
					$('#users').html(syntaxHighlight(data.error));            
				}
			}
		});
		 
      }

</script>