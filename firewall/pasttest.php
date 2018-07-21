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
                        <th>test_id</th>
                        <th>title</th>
                        <th>Description</th>
                        <th>test_file_id</th>
                        <th>scheduled_date</th>
                        <th>end_date</th>
                        <th>end_date</th>
                        <th>group_id</th>
                        <th>actions</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                        <th>test_id</th>
                        <th>title</th>
                        <th>Description</th>
                        <th>test_file_id</th>
                        <th>scheduled_date</th>
                        <th>end_date</th>
                        <th>end_date</th>
                        <th>group_id</th>
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
      window.location="testdetails.php?id="+x+"";      
    }
    
    function myFunctionDelete(x){
      $(function(){
        deleteData("tests/"+x, function(data){
          console.log(data); 
        });       
      });
     
    }
	
	$(document).ready(function(){
		$.ajax({
		   type:'GET',
		   url:'http://35.194.226.60:3000/api/v1/tests/time/past',
		   data:'',
		   success:function(data){
				console.log(data); 
				var allData = data.response;
				$.each(allData, function(key,value) {
                    var x = {                          
					   "test_id": value.test_id,
					   "title": value.title,
					   "Desc": value.description,
					   "test_file_id": value.test_file_id,
					   "scheduled_date": value.scheduled_date,
					   "end_date": value.end_date,
					   "status": value.status,
					   "group_id": value.group_id,       
					   "action":"<a href='#' class='btn btn-link btn-info btn-just-icon' onclick='myFunctionView("+value.test_id+")'><i class='material-icons'>dvr</i></a><a href='#' class='btn btn-link btn-danger btn-just-icon' onclick='myFunctionDelete("+value.test_id+")'><i class='material-icons'>close</i></a>"                    
					};
					questionData.push(x);
				});
				questionData.splice(0, 1);
				console.log(questionData); 
					
				for (var i in questionData) {
					$("#tabl").append('<tr id="'+questionData[i].test_id+'"><td>'+questionData[i].test_id+'</td><td>'+questionData[i].title+'</td><td>'+questionData[i].description+'</td><td>'+questionData[i].test_file_id+'</td><td>'+questionData[i].scheduled_date+'</td><td>'+questionData[i].end_date+'</td><td>'+questionData[i].status+'</td><td>'+questionData[i].group_id+'</td><td>'+questionData[i].action+'</td></tr>');
				}
			}
		});	
	});

</script>

</html>

