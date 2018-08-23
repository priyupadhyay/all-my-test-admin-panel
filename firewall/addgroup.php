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
				<div class="wizard-navigation">
                    <ul class="nav nav-pills groupt-tabss" style="padding-top:15px;">
                      <li class="nav-item" style="width: 49%;">
                        <a class="nav-link active" id="groupAnchor" href="#group" data-toggle="tab" role="tab">
                          Add  new Group
                        </a>
                      </li>
                      <li class="nav-item" style="width: 49%;">
                        <a class="nav-link"  id="PaperAnchor"  href="#Paper" data-toggle="tab" role="tab">
                          Select Question Paper
                        </a>
                      </li>
                    </ul>
                </div>

           <div class="card-body">
			<div class="tab-content">
              <div class="tab-pane moving-tab active" id="group">
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
					 
                    <button type="button" class="btn btn-next btn-fill btn-rose btn-wd" name="next" onclick="add_designS_nextstep_second()" value="Next" >Next</button>                 
                  </form>
                 <center>
                  <h4 id="users"></h4>
                </center>
                </div>
					<div class="tab-pane" id="Paper">
						<div class="container-fluid">
						  <div class="row">
						  <div class="col-md-12">
							<div class="card">
								<h5 class="info-text"> Select Students to add to group rthrh</h5>
								<div class="row justify-content-center">
								  <div class="col-lg-10">
									<!-- <div class="row"> --> 

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
							  <button  onclick="postUser();" type="button" class="btn btn-rose btn-round">submit</button>  
							  </div>
							</div>
						</div>
					</div>

			</div>
			</div>
               
              </div>
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

    function postUser() {
        $( function(){
         
         var n = $('#name').val();
         var d = $('#description').val();
         var t = $('#userSelect').val();   
         req = {"name": n,"description": d,"trainer_id": t};

          postData("groups", req , function(data){
            if(data.error==null){
				var id;
				var dd = data.response;
				console.log(dd);
				$.each(dd,function(key,value){
					words = value;
					 var n = words.split(" ");
						id =  n[n.length - 1];
						alert(id);
				});
               swal({ title: 'Success', text: "Group Added Successfully", type: 'success-message', showCancelButton: false, confirmButtonColor: '#e09c19', cancelButtonColor: '#214dde', confirmButtonText: 'ok, Take to all Tests!' }).then(function(isConfirm) { if (isConfirm) { location.href="../firewall/add_students_group.php?id="+id} })
				   return false;
            //$('#users').html(syntaxHighlight("Recored Inserted Successflly"));
            } else{
            showSwal('error', data.error);            
            }
          });           
        });
      }

</script>

 <script>
  $(function(){
          getData("users", function(data){
          console.log(data); 
         var allData = data.response;
        var questionData = [{}];
        
        $.each(allData, function(key,value) {
            if(value.type == 'Student'){
				var x = {                          
				   "user_id": value.user_id,
				   "name": value.name,
				   "uname": value.uname,
				   "email": value.email,
				   "type": value.type,
				   "status": value.status,                            
				   "action":"<input type='checkbox' name='stuid' id='stuid' value='"+value.user_id+"'/>"                    
				};
			    questionData.push(x);
			}
        });
            questionData.splice(0, 1);
		var table1 = $('#datatables1').DataTable({
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
		
		function add_designS_nextstep_second(){  
			$("#group").removeClass('active show'); 
			$("#Paper").addClass('active show'); 
			$("#groupAnchor").removeClass('active'); 
			$("#PaperAnchor").addClass('active'); 
		}
		
 </script>