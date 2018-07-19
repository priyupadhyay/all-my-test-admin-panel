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
              <div class="card">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">assignment</i>
                  </div>
                  <h4 class="card-title">DataTables.net</h4>
                </div>
                <div class="card-body">
                  <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
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
                <!-- end content-->
              </div>
              <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
          </div>
          <!-- end row -->
        </div>
      </div>


 <?php
 include '../parts/footer_one.php';
 ?>

 </body>

 <?php>
 include '../parts/footer_two.php';
 ?>

<script>


    function myFunctionView(x){
      window.location="userdetails.php?id="+x+"";      
    }
    
    function myFunctionDelete(x){
      $(function(){
        deleteData("users/"+x, function(data){
          console.log(data); 
        });       
      });
	  
	  $.ajax({
		   type:'DELETE',
		   url:'http://35.194.226.60:3000/api/v1/users/'+x,
		   data:'',
		   success:function(data){
				//alert(data);
				var row = document.getElementById(x);
				row.parentNode.removeChild(row);
			}
		});
     
    } 
  </script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$.ajax({
		   type:'GET',
		   url:'http://35.194.226.60:3000/api/v1/users',
		   data:'',
		   success:function(data){
		   
				for (var i in data.response) {
					$("#tabl").append('<tr id="'+data.response[i].user_id+'"><td>'+data.response[i].user_id+'</td><td>'+data.response[i].name+'</td><td>'+data.response[i].uname+'</td><td>'+data.response[i].email+'</td><td>'+data.response[i].type+'</td><td>'+data.response[i].status+'</td><td><a href="#" class="btn btn-link btn-info btn-just-icon" onclick="myFunctionView('+data.response[i].user_id+')"><i class="material-icons">dvr</i></a><a href="#" class="btn btn-link btn-danger btn-just-icon" onclick="myFunctionDelete('+data.response[i].user_id+')"><i class="material-icons">close</i></a></td></tr>');
				}
			}
		});	
	});
</script>
</html>

