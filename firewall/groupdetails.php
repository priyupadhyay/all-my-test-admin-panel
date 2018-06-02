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
                  <button class="btn btn-primary  btn-round" data-toggle="modal" data-target="#myModal">
                       EDIT
                      </button>
                </div>
                
              </div>

            </div>

             <!-- Classic Modal -->
             <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                <input type="text" id="title" class="form-control">
                                <textarea required id="description1" class="form-control"></textarea>
                                <select required id="userSelect" class="form-control">
                              
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
                      <tbody>
                        
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
 <script>
     $(function(){     
        getData("users/type/Faculty", function(data){
          console.log(data); 
          $.each(data.response, function(key, value) {   
        $('#userSelect')
         .append($("<option></option>")
                    .attr("value",value.user_id)
                    .text(value.name)); 
        });
        });           
        });
   

     $(function(){         
        var val = <?php echo $id ?>;
        var namee="";       
          getData("groups/"+val, function(data){              
              var val1 = data.response[0]["trainer_id"]; 
              $(function(){
              getData("users/"+val1, function(data1){
              namee = data1.response[0]["name"];
            $('#title').val((data.response[0]["name"]));
            $('#description1').val((data.response[0]["description"])); 
            $('#name').html((data.response[0]["name"]));   
            $('#uname').html("id - "+(data.response[0]["id"]));   
            $('#description').html((data.response[0]["description"]));
            $('#trainer_id').html(namee+"("+val1+")");        
            console.log(data);             
            });
          });

            
          });
        });


 function putUser() {
        $( function(){
         var val = <?php echo $id ?>;
         var n = $('#title').val();
         var d = $('#description1').val();
         var t = $('#userSelect').val();   
         req = {"name": n,"description": d,"trainer_id": t};         
          putData("groups/"+val, req , function(data){
            location.reload();
          });
          
        });
      }


</script>


<script>


function myFunctionView(x){
  window.location="userdetails.php?id="+x+"";      
}

function myFunctionDelete(x){
  $(function(){
    var val = <?php echo $id ?>;
    deleteData("groups/removestudent/"+val+"/"+x, function(data){
      console.log(data); 
    });       
  });
 
}


//$(document).ready(function() {
    $(function(){
        var val = <?php echo $id ?>;       
      getData("groups/"+val+"/users", function(data){
      console.log(data); 
      
      //$.each(data.response, function (index, value) {
    //console.log(value.description);
//});      



var allData = data.response;
    var questionData = [{}];
    
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
var table1 = $('#datatables1').DataTable( {
        Language: {
        Processing: ""
        },
        processing : true,
        data: questionData,
        columns: [
            {"data": "user_id"},
            {"data": "name"},
            {"data": "uname"},
            {"data": "email"},
            {"data": "type"},                
            {"data": "status"},           
            {"data": "action"},

        ]
        });



      });          
    });
//});
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#datatables').DataTable({
      "pagingType": "full_numbers",
      "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
      ],
      responsive: true,
      language: {
        search: "_INPUT_",
        searchPlaceholder: "Search records",
      }

    });


    var table = $('#datatables').DataTable();

    // Edit record
    table.on('click', '.edit', function() {
      $tr = $(this).closest('tr');

      var data = table.row($tr).data();
      alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
    });

    // Delete a record
    table.on('click', '.remove', function(e) {
      $tr = $(this).closest('tr');
      table.row($tr).remove().draw();
      e.preventDefault();
    });

    //Like record
    table.on('click', '.like', function() {
      alert('You clicked on Like button');
    });

    $('.card .material-datatables label').addClass('form-group');
  });
</script>
