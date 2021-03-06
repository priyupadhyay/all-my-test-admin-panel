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
                
                  <!-- <form method="get" action="" class="form-horizontal">

                    <div class="row">
                      <label class="col-sm-2 col-form-label">Title</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <input type="email" class="form-control">
                          <span class="bmd-help">plesae give a title.</span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Description</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <textarea class="form-control"></textarea>
                          <span class="bmd-help">plesae give a description.</span>
                        </div>
                      </div>
                    </div>

                   <div class="row">
                      <label class="col-sm-2 col-form-label">Select Group</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                            <select id="groupSelect" class="form-control">
                                
                            </select>
                      
                          <span class="bmd-help">plesae select a group</span>
                        </div>
                      </div>
                    </div>  

                    <div class="row">
                      <label class="col-sm-2 col-form-label">Scheduled Date</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                        <input type="text" class="form-control datetimepicker text-center">
                          <span class="bmd-help">plesae give a Date for start of a test.</span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">End Date</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                        <input type="text" class="form-control datetimepicker text-center">
                          <span class="bmd-help">plesae give a Date for End of a test.</span>
                        </div>
                      </div>
                    </div>     
                    
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Select Group</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                            <select id="groupSelect" class="form-control">
                                
                            </select>
                      
                          <span class="bmd-help">plesae select a group</span>
                        </div>
                      </div>
                    </div>  
                    
                    <input type="submit" value="Insert" class="btn btn-rose btn-round">
                    
                  </form> -->

<!-- Wizard Form -->
<div class="wizard-container">
              <div class="card card-wizard" data-color="rose" id="wizardProfile">
                <form action="" method="" novalidate="novalidate">
                  <!--        You can switch " data-color="primary" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                  <div class="card-header text-center">
                    <h3 class="card-title">
                      Add New Test
                    </h3>
                    <h5 class="card-description">Create a new test based on the available Question Papers.</h5>
                  </div>
                  <div class="wizard-navigation">
                    <ul class="nav nav-pills">
                      <li class="nav-item" style="width: 33.3333%;">
                        <a class="nav-link active" href="#about" data-toggle="tab" role="tab">
                          Test Details
                        </a>
                      </li>
                      <li class="nav-item" style="width: 33.3333%;">
                        <a class="nav-link" href="#account" data-toggle="tab" role="tab">
                          Select Question Paper
                        </a>
                      </li>
                      <li class="nav-item" style="width: 33.3333%;">
                        <a class="nav-link" href="#address" data-toggle="tab" role="tab">
                          Select Group
                        </a> 
                      </li>
                    </ul>
                  <div class="moving-tab" style="width: 171.233px; transform: translate3d(-8px, 0px, 0px); transition: transform 0s;">
                          Test Details
                        </div></div>
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="tab-pane active" id="about">
                        <h5 class="info-text"> Let's start with the basic information for the test.</h5>
                        <div class="row justify-content-center">
                          
                          <div class="col-sm-6">
                            <div class="input-group form-control-lg">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">turned_in_not</i>
                                </span>
                              </div>
                              <div class="form-group bmd-form-group has-danger">
                                <label for="title" class="bmd-label-floating">Title (required)</label>
                                <input type="text" class="form-control" id="title" name="title" required="" aria-required="true">
                              </div>
                            </div>
                            <div class="input-group form-control-lg">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">info</i>
                                </span>
                              </div>
                              <div class="form-group bmd-form-group has-danger">
                                <label for="description" class="bmd-label-floating">Description</label>
                                <textarea class="form-control" id="description" aria-required="true">
                                </textarea>
                              </div>

                            <div class="input-group form-control-lg">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">assignment_late</i>
                                </span>
                              </div>
                              <div class="form-group bmd-form-group has-danger">
                                <label for="exampleInput11" class="bmd-label-floating">Instructions</label>
                                <textarea class="form-control" id="instructions" aria-required="true">
                                </textarea>
                              </div>
                            </div>
 
							<div class="input-group form-control-lg">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">assignment_late</i>
                                </span>
                              </div>
                              <div class="form-group bmd-form-group has-danger">
                                <label for="scheduledDate" class="bmd-label-floating">Date</label>
                                <input type="text" class="form-control datetimepicker" id="scheduledDate"/>		
                              </div>
                            </div>

							<div class="input-group form-control-lg">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">assignment_late</i>
                                </span>
                              </div>
                              <div class="form-group bmd-form-group has-danger">
                                <label for="endDate" class="bmd-label-floating">End Date</label>
                                <input type="text" class="form-control datetimepicker" id="endDate"/>
                              </div>
                            </div>



                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <div class="tab-pane" id="account">
                        <h5 class="info-text"> Select a Question Paper </h5>
                        <div class="row justify-content-center">
                          <div class="col-lg-10">
                            <!-- <div class="row"> -->



                        <div class="material-datatables">
                          <table id="questionPaperTable" class="table table-striped table-no-bordered table-hover" cellspacing="0">
                            <thead>
                              <tr>
                              
                              <th>Actions</th>
                              <th>name</th>
                              <th>marks</th>
                              <th>duration</th>
                              <th>subject</th>
                              <th>class</th>                             
                              <th>by</th>
                              <th>url</th>
                              
                              </tr>
                            </thead>
                            <tfoot>
                              <tr>
                              
                              <th>Actions</th>
                              <th>name</th>
                              <th>marks</th>
                              <th>duration</th>
                              <th>subject</th>
                              <th>class</th>                             
                              <th>by</th>
                              <th>url</th>
                             
                              </tr>
                            </tfoot>
                            <tbody>
                              
                            </tbody>
                          </table>
                        </div>



                            <!-- </div> -->
                          </div>
                        </div>
                      </div>

                      <div class="tab-pane" id="address">
                        <h5 class="info-text"> Select a Group </h5>
                        <div class="row justify-content-center">
                          <div class="col-lg-10">
                            <!-- <div class="row"> -->



                        <div class="material-datatables">
                          <table id="datatables1" class="table table-striped table-no-bordered table-hover" cellspacing="0">
                            <thead>
                              <tr>
                              <th>action</th>
                              <th>Name</th>
                              <th>Description</th>
                              </tr>
                            </thead>
                            <tfoot>
                              <tr>
                              <th>action</th>
                              <th>Name</th>
                              <th>Description</th>
                              </tr>
                            </tfoot>
                            <tbody>
                              
                            </tbody>
                          </table>
                        </div>



                            <!-- </div> -->
                          </div>
                        </div>
                      </div>
                     
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="mr-auto">
                      <input type="button" class="btn btn-previous btn-fill btn-default btn-wd disabled" name="previous" value="Previous">
                    </div>
                    <div class="ml-auto">
                      <input type="button" class="btn btn-next btn-fill btn-rose btn-wd" name="next" value="Next">
                      <input type="button" onclick = "postTest()" class="btn btn-finish btn-fill btn-rose btn-wd" name="finish" value="Finish" style="display: none;">
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </form>
              </div>
            </div>
<!-- Wizard Form Ends-->

            </div>
        </div>
      </div>

 <?php

 include '../parts/footer_one.php';
 ?>

 </body>

 <?php
 include '../parts/footer_two.php';
 ?>
  
 <script>
     $(function(){     
        
        getData("questionpaper", function(data){
        console.log(data); 
        var allData = data.response;
        var questionData = [{}];
        
        $.each(allData, function(key,value) {
            var x = { 
                "id": value.id,
                "name": value.name,
                "marks": value.marks,
                "duration": value.duration,
                "subject": value.subject,
                "class": value.class,
                "by": value.by,
                "url": "<a href='http://msmypaper.com/jsonqp/"+value.id+".json' class='btn btn-link btn-info btn-just-icon'><i class='material-icons'>dvr</i></a>",
                "answer":"<a href='http://msmypaper.com/jsonqp/"+value.id+".json' class='btn btn-link btn-info btn-just-icon' ><i class='material-icons'>dvr</i></a><a href='#' class='btn btn-link btn-success btn-just-icon' onclick=selectQp("+value.file_url_answer+")><i class='material-icons'>close</i></a>",
                "Action":"<input  class='form-control' type='radio' id='"+value.id+"' name='testFileId' value='"+value.id+"'>"
                };
            questionData.push(x);
        });
            questionData.splice(0, 1);
        var table1 = $('#questionPaperTable').DataTable({
            Language: {
            Processing: ""
            },
            processing : true,
            data: questionData,
            columns: [
                // {"data": "id"},
                {"data": "Action"},
                {"data": "name"},
                {"data": "marks"},
                {"data": "duration"},
                {"data": "subject"},
                {"data": "class"},
                {"data": "by"},
                {"data": "url"},
                // {"data": "answer"},
                ]
            });
                
      });

		
        getData("groups", function(data){
          console.log(data); 
		  var allData = data.response;
		  var groupdata = [{}];
          /* $.each(data.response, function(key, value) {   
          $('#groupSelect')
          .append($("<option></option>")
                      .attr("value",value.id)
                      .text(value.name)); 
          }); */
		  
		   $.each(allData, function(key,value) {
            var x = { 
				"name": value.name,
                "description": value.description,
                // "id": value.id,
                // "status": value.status,
                // "trainer_id": value.trainer_id,
                "Action":"<input class='form-control' type='radio' id='"+value.id+"' name='groupId' value='"+value.id+"'>"
                };
            groupdata.push(x);
        });
            groupdata.splice(0, 1);
        var table2 = $('#datatables1').DataTable({
            Language: {
            Processing: ""
            },
            processing : true,
            data: groupdata,
            columns: [
                {"data": "Action"},
                {"data": "name"},
                {"data": "description"},
                ]
            });
            
        });           
      });

      function postTest() {
        $( function(){
         
         var title = $('#title').val();
         var description = $('#description').val();
         var instructions = $('#instructions').val();   
         var testFileId = $('input[name=testFileId]:checked').val();   
         var scheduledDate = $('#scheduledDate').val();   
         var endDate = $('#endDate').val();   
         var groupId = $('input[name=groupId]:checked').val();   


         req = {
            "title": title,
            "description": description, 
            "instructions": instructions, 
            "test_file_id": testFileId, 
            "scheduled_date": scheduledDate,
            "end_date" : endDate,
            "group_id" : groupId,
         };
		 
		 // alert(title);
		 // alert(description);
		 // alert(instructions);
		 // alert(testFileId);
		 // alert(scheduledDate);
		 // alert(endDate);
		 // alert(groupId);

         console.log(req);

		postData("tests", req , function(data){
            if(data.error==null){
              // showSwal('success-message', "Test Added Successfully");
			  swal({ title: 'Success', text: "Test Added Successfully", type: 'success-message', customClass:"btn btn-success",showCancelButton: false, confirmButtonColor: '#e09c19', cancelButtonColor: '#214dde', confirmButtonText: 'ok, Take to all Tests!' }).then(function(isConfirm) { if (isConfirm) { location.href="../firewall/alltest.php"} else{
				  $('#title').val()="";
				  $('#description').val()="";
				  $('#endDate').val()="";
				  $('#instructions').val()="";
				  $('#scheduledDate').val()="";
			  } })
            } else{
            showSwal('error', data.error);            
            }
          }); 
		 
        });
      }
</script>
