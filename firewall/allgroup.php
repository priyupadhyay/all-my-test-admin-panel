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
                        <th>id</th>
                        <th>name</th>
                        <th>Description</th>
                        <th>trainer_id</th>                                          
                        <th>status</th>
                        <th>actions</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>Description</th>
                        <th>trainer_id</th>                                          
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

 
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    function myFunctionView(x){
      window.location="groupdetails.php?id="+x+"";      
    }
</script>
<script>  
var questionData = [{}]; 
    function myFunctionDelete(x){
		$.ajax({
		   type:'DELETE',
		   url:'http://35.194.226.60:3000/api/v1/groups/'+x,
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
		   url:'http://35.194.226.60:3000/api/v1/groups',
		   data:'',
		   success:function(data){
				console.log(data); 
				var allData = data.response;
				
			
				$.each(allData, function(key,value) {
					var x = {                          
					   "id": value.id,
					   "name": value.name,
					   "Desc": value.description,
					   "trainer": value.trainer_id,
					   "status": value.status,                          
					   "action":"<a  class='btn btn-link btn-info btn-just-icon' onclick='myFunctionView("+value.id+")'><i class='material-icons'>dvr</i></a><a class='btn btn-link btn-danger btn-just-icon' onclick='myFunctionDelete("+value.id+")'><i class='material-icons'>close</i></a>"                    
					};
					questionData.push(x);
				});
				questionData.splice(0, 1);
				console.log(questionData); 
				
				for (var i in questionData) {
					$("#tabl").append('<tr id="'+questionData[i].id+'"><td>'+questionData[i].id+'</td><td>'+questionData[i].name+'</td><td>'+questionData[i].Desc+'</td><td>'+questionData[i].trainer+'</td><td>'+questionData[i].status+'</td><td>'+questionData[i].action+'</td></tr>');
				}
			}
		});	
	});

</script>

 
</html>

