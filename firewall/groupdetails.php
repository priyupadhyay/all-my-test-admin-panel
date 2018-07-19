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

            <div class="col-md-4">
              <div class="card card-profile">
                
                <div class="card-body">
                <h4 class="card-title">Group Details</h4>
                  <h6 class="card-category text-gray" id="uname"></h6>
                  <h4 class="card-title text-gray" id="name"></h4>                 
                  <h5 class="card-title text-gray" id="description"></h4>
                  <h4 class="card-title text-gray" id="trainer_id"></h4>
                  <button id="myBtn" class="btn btn-primary" type="button"  data-toggle="modal" data-target="#group-model">
                       EDIT
                      </button>
                </div>
                
              </div>

            </div>
		

					<!-- Classic Modal -->
					<div id="group-model" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Edit Group</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <i class="material-icons">clear</i>
                              </button>
                            </div>
                            <div class="modal-body">
                             
                              <div class="form-group bmd-form-group is-filled">                                
                                <input type="text" id="title" name='title' class="form-control">
                                <textarea required id="description1" name='description' class="form-control"></textarea>
                                <select required id="userSelect" name="trainer_id" class="form-control">
                              
                              </select>
                                
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" onclick="putUser();" class="btn btn-link">Update</button>
                              <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--  End Modal -->
            

            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-icon card-header-rose">
                  <div class="card-icon">
                    <i class="material-icons">perm_identity</i>
                  </div>
                  <h4 class="card-title">Student Profile -
                    <small class="category">Student Assosiated with this group</small>
                  </h4>
                </div>
                <div class="material-datatables">
                    <table id="datatables1" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                        <th>user_id</th>
                        <th>name</th>
                        <th>username</th>
                        <th>email</th>
                        <th>type</th>
                        <th>status</th>                        
                        <th>actions</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                        <th>user_id</th>
                        <th>name</th>
                        <th>username</th>
                        <th>email</th>
                        <th>type</th>
                        <th>status</th>                        
                        <th>actions</th>
                        </tr>
                      </tfoot>
                      <tbody id="tabl">
                        
                       </tbody>
                    </table>
                  </div>
              </div>
            </div>

            
          </div>
        </div>
      </div>

 <?php

 include '../parts/footer_one.php';
 $id = $_GET['id']; 
 ?>

 </body>

 <?php>
 include '../parts/footer_two.php';
 ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script>
     /* $(function(){     
        getData("users/type/Faculty", function(data){
          console.log(data); 
          $.each(data.response, function(key, value) {   
        $('#userSelect')
         .append($("<option></option>")
                    .attr("value",value.user_id)
                    .text(value.name)); 
        });
        });           
        }); */
   
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
	
	$(document).ready(function(){
		var val = <?php echo $id ?>;
		$.ajax({
		   type:'GET',
		   url:'http://35.194.226.60:3000/api/v1/groups/'+val,
		   data:'',
		   success:function(data){
				var val1 = data.response[0]["trainer_id"]; 
				$(function(){
					$.ajax({
					   type:'GET',
					   url:'http://35.194.226.60:3000/api/v1/users/'+val1,
					   data:'',
					   success:function(data){
							console.log(data); 
							namee = data.response[0]["name"];
							$('#title').val((data.response[0]["name"]));
							$('#description1').val((data.response[0]["description"])); 
							$('#name').html((data.response[0]["name"]));   
							$('#uname').html((data.response[0]["uname"]));   
							$('#description').html((data.response[0]["description"]));
							$('#trainer_id').html(namee+"("+val1+")");        
							console.log(data); 
						}
					});  
			  });
		   }
		});	
	});
	
	function putUser() {
         var val = <?php echo $id ?>;
         var n = $('#title').val();
         var d = $('#description1').val();
         var t = $('#userSelect').val();   
         req = {"name": n,"description": d,"trainer_id": t}; 

			$.ajax({
			   type:'PUT',
			   url:'http://35.194.226.60:3000/api/v1/groups/'+val,
			   data:req,
			   success:function(data){
					location.reload();
				}
			});  
		}


</script>

<script>

	var questionData = [{}];
	var val = <?php echo $id ?>;	
	
	function myFunctionView(x){
	  window.location="userdetails.php?id="+x+"";      
	}

	function myFunctionDelete(x){
		$.ajax({
		   type:'DELETE',
		   url:'http://35.194.226.60:3000/api/v1/groups/removestudent/'+val+'/'+x,
		   data:'',
		   success:function(data){
				//alert(data);
				var row = document.getElementById(x);
				row.parentNode.removeChild(row);
			}
		});
	}

	
	$(document).ready(function(){
		
		$.ajax({
		   type:'GET',
		   url:'http://35.194.226.60:3000/api/v1/groups/'+val+'/users',
		   data:'',
		   success:function(data){
				console.log(data); 
				var allData = data.response;
				$.each(allData, function(key,value) {
					 var x = {                          
                       "user_id": value.user_id,
                       "name": value.name,
                       "uname": value.uname,
                       "email": value.email,
                       "type": value.type,
                       "status": value.status,                            
                       "action":"<a href='#' title='view details of the students' class='btn btn-link btn-info btn-just-icon' onclick='myFunctionView("+value.user_id+")'><i class='material-icons'>dvr</i></a><a href='#' title='remove student from the group' class='btn btn-link btn-danger btn-just-icon' onclick='myFunctionDelete("+value.user_id+")'><i class='material-icons'>close</i></a>"                    
                    };
					questionData.push(x);
				});
				questionData.splice(0, 1);
				console.log(questionData); 
				
				for (var i in questionData) {
					$("#tabl").append('<tr id="'+questionData[i].user_id+'"><td>'+questionData[i].user_id+'</td><td>'+questionData[i].name+'</td><td>'+questionData[i].uname+'</td><td>'+questionData[i].email+'</td><td>'+questionData[i].type+'</td><td>'+questionData[i].status+'</td><td>'+questionData[i].action+'</td></tr>');
				}
			}
		});	
	});

</script>