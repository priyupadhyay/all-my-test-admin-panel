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
                      <tbody>
                        
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


 //$(document).ready(function() {
        $(function(){
          getData("tests", function(data){
          console.log(data); 
          
          //$.each(data.response, function (index, value) {
        //console.log(value.description);
    //});      
    
    

var allData = data.response;
        var questionData = [{}];
        
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
var table1 = $('#datatables1').DataTable( {
            Language: {
            Processing: ""
            },
            processing : true,
            data: questionData,
            columns: [
                {"data": "test_id"},
                {"data": "title"},
                {"data": "Desc"},
                {"data": "test_file_id"},
                {"data": "scheduled_date"},
                {"data": "end_date"},
                {"data": "status"},
                {"data": "group_id"},
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

</html>

