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
                  <h6 class="card-category text-gray">Test Details</h6>
                     <form>

                     <div class="col-md-12">
                        <div class="form-group">                          
                          <input id="name" type="text" class="form-control text-center" disabled>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">  
                            <textarea id="desc"  class="form-control text-center" disabled>

                            </textarea>  
                        </div>
                      </div>
					  <input type="hidden" value="" id="group_id"/>
					  <input type="hidden" value="" id="test_file_id"/>
                      <div class="col-md-12">
                        <div class="form-group">                          
                          <input id="inst" type="text" class="form-control text-center" disabled>
                        </div>
                      </div> 
					  <div class="col-md-12">
                        <div class="form-group">                          
                          <input id="tname" type="text" class="form-control text-center" disabled>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">                          
                          <input id="sch_date" type="text" class="form-control datetimepicker text-center" disabled>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">                          
                          <input id="end_date" type="text" class="form-control datetimepicker  text-center" disabled>
                        </div>
                      </div>
                      
                     <input type="button" id="btnSubmit" value="Update" onClick="updateQuestion()" style="display:none"  class="btn btn-rose btn-round">

                     </form>   
                          
                  <a onClick="removeClass()" id="btnEdit" class="btn btn-rose btn-round">Edit</a>
    
    
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-icon card-header-rose">
                  <div class="card-icon">
                    <i class="material-icons">question_answer</i>
                  </div>
                  <h4 class="card-title">TEST -
                    <small id="name1" class="category"></small>
                  </h4>
                </div>
                <div class="card-body">
                  <form>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Question</label>
                          <div class="form-group">
                           
                            <div class="question-control" id="question"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- <button type="submit" class="btn btn-rose pull-right">Update Profile</button> -->
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

 <?php
 include '../parts/footer_two.php';
 ?>
 <script>
     $(function(){         
        var val = <?php echo $id ?>;       
          getData("tests/"+val, function(data){
            $('#name').val((data.response[0]["name"]));   
            $('#name1').html((data.response[0]["name"]));   
            $('#tname').html((data.response[0]["by"]));   
            $('#desc').val((data.response[0]["description"]));
            $('#sch_date').val((data.response[0]["scheduled_date"]));
            $('#end_date').val((data.response[0]["end_date"]));
            $('#test_file_id').val((data.response[0]["test_file_id"]));
            $('#group_id').val((data.response[0]["group_id"]));
            $('#inst').val("Some Instruction");  
            var url = data.response[0]["file_url"];
            $.get(url, function (data, status) {
                $('#question').append("<p>ID : "+data.questionPaperDetails.id); 
				$('#question').append("<br>Title: "+data.questionPaperDetails.title);  
				$('#question').append("<br>Subject: "+data.questionPaperDetails.subject);  
				$('#question').append("<br>Marks: "+data.questionPaperDetails.marks);   
				$('#question').append("<br>Date: "+data.questionPaperDetails.date);      
				$('#question').append("<br><br><h3>Questions:</h3> ");
				$.each(data.questions, function(key,value) {   
					$('#question').append("<br>Section: "+value.section);
					$('#question').append("<br>Question: "+value.ques_txt);
					$('#question').append("<h5>options:</h5> <br> a.) "+value.options.option1+" b.) "+value.options.option2+" c.) "+value.options.option3+" d.) "+value.options.option4+" e.) "+value.options.option5);
					$('#question').append("<br><br>answer: "+value.answer);
					$('#question').append("<br>marks: "+value.marks);
				});
				$('#question').append("<br><br><br></p>");                    
		    });              

          console.log(data);
          });
        });
		
	function removeClass(){
		$('#name').removeAttr("disabled"); 
		$('#name1').removeAttr("disabled"); 
		$('#desc').removeAttr("disabled"); 
		$('#sch_date').removeAttr("disabled"); 
		$('#tname').removeAttr("disabled"); 
		$('#end_date').removeAttr("disabled"); 
		$('#inst').removeAttr("disabled"); 
		$('#question').removeAttr("disabled"); 		
		$('#btnSubmit').removeAttr("disabled"); 		
		$('#btnSubmit').show();
		$('#btnEdit').hide(); 		
	}
	
	function updateQuestion(){	
 var val = <?php echo $id ?>;    	
		 var title = $('#name').val();
         var description = $('#desc').val();
         var instructions = $('#inst').val();     
         var scheduledDate = $('#sch_date').val();   
         var endDate = $('#end_date').val();     
         var group_id = $('#group_id').val();     
         var test_file_id = $('#test_file_id').val();     

         req = {
            "title": title,
            "description": description, 
            "instructions": instructions, 
            "scheduled_date": scheduledDate,
            "end_date" : endDate,
            "group_id" : group_id,
            "test_file_id" : test_file_id,
         };
		 
		 console.log(req);
		
		putData('tests/'+val,req,function(data){
			location.reload();
		});
	}
</script>