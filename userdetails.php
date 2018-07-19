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
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="../assets/img/faces/marc.jpg" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray" id="uname"></h6>
                  <h4 class="card-title text-gray" id="name"></h4>                 
                  <h5 class="card-title text-gray" id="email"></h4>
                  <h4 class="card-title text-gray" id="type"></h4>
                </div>
              </div>

            </div>
            

            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-icon card-header-rose">
                  <div class="card-icon">
                    <i class="material-icons">perm_identity</i>
                  </div>
                  <h4 class="card-title">Edit Profile -
                    <small class="category">Complete your profile</small>
                  </h4>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Company (disabled)</label>
                          <input type="text" class="form-control" disabled>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" name="uname" id="uname1" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" id="email1" name='email' class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Fist Name</label>
                          <input type="text" id="fname" name='fname' class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input type="text" id="lname" name='lname' class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Address</label>
                          <input type="text" id="address" name='address' class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">City</label>
                          <input type="text" name='city' class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Country</label>
                          <input type="text" name='country' class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Postal Code</label>
                          <input type="text" name='postalcode' class="form-control">
                        </div>
                      </div>
                    </div>
					<div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Type</label>
                          <input type="text" name='type' id='type1' class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>About Me</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                            <textarea class="form-control" name='about' rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="button" onClick='updateProfile()' class="btn btn-rose pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
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
 <script>
	 var val = <?php echo $id ?>;  
	$(document).ready(function(){
		$.ajax({
		   type:'GET',
		   url:'http://35.194.226.60:3000/api/v1/users/'+val,
		   data:'',
		   success:function(data){
			   $('#name').html((data.response[0]["name"]));   
			   $('#uname').html("username - "+(data.response[0]["uname"]));   
			   $('#email').html((data.response[0]["email"]));
			   $('#type').html((data.response[0]["type"])); 
			   
			   $('#fname').val((data.response[0]["name"]));   
			   $('#uname1').val((data.response[0]["uname"]));   
			   $('#email1').val((data.response[0]["email"]));
			   $('#type1').val((data.response[0]["type"]));        
			   console.log(data);
		   }
		});
	});
	
	function updateProfile(){
		
		var dt= {
            "name": $('#fname').val()+$('#lname').val(),
            "uname": $('#uname1').val(), 
            "email": $('#email1').val(), 
            "type": $('#type1').val(), 
         };
		
		$.ajax({
			type:'PUT',
			url:'http://35.194.226.60:3000/api/v1/users/'+val,
			data: dt,
			success:function(data){
				alert(data.response[0].msg);
				console.log(data);
			}
		});
	}
	
</script>