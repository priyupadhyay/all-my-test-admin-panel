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
                      <div class="col-md-12">
                        <div class="form-group">                          
                          <input id="inst" type="text" class="form-control text-center" disabled>
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
                      
                     <input type="button" id='btnSubmit' onClick='updateQuestion()' value="Update" class="btn btn-rose btn-round" disabled>

                     </form>   
                          
                  <a onClick="removeClass()" class="btn btn-rose btn-round">Edit</a>
    
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
                           
                            <div class="form-control question-control" id="question"></div>
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

 <?php>
 include '../parts/footer_two.php';
 ?>
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script>
  var val = <?php echo $id ?>;  
	$(document).ready(function(){
		$.ajax({
			type:'GET',
			url:'http://35.194.226.60:3000/api/v1/tests/'+val,
			data:'',
			success:function(data){
				$('#name').val((data.response[0]["name"]));   
				$('#name1').html((data.response[0]["name"]));   
				$('#desc').val((data.response[0]["description"]));
				$('#sch_date').val((data.response[0]["scheduled_date"]));
				$('#end_date').val((data.response[0]["end_date"]));
				$('#inst').val("Some Instruction");  
				var url1 = data.response[0]["file_url"];
				
				$.ajax({
					type:'GET',
					url:url1,
					data:'',
					success:function(data,status){
						$('#question').append("<p>ID : "+data.questionPaperDetails.id); 
						$('#question').append("<br>Title: "+data.questionPaperDetails.title);  
						$('#question').append("<br>Subject: "+data.questionPaperDetails.subject);  
						$('#question').append("<br>Marks: "+data.questionPaperDetails.marks);   
						$('#question').append("<br>Date: "+data.questionPaperDetails.date);      
						$('#question').append("<br><br><h3>Questions:</h3> ");
						$.each(data.questions, function(key,value) {   
							$('#question').append("<br>Question_id: "+value.question_id);
							$('#question').append("<br>Image: "+value.ques_img);
							$('#question').append("<br>Section: "+value.section);
							$('#question').append("<br>Question: "+value.ques_txt);
							$('#question').append("<h5>options:</h5> <br>a.)"+value.options.option1+"b.)"+value.options.option2+"c.)"+value.options.option3+"d.)"+value.options.option4+"e.)"+value.options.option5);
							$('#question').append("<br><br>answer: "+value.answer);
							$('#question').append("<br>marks: "+value.marks);
						});
						$('#question').append("<br><br><br></p>");
					}
				});
				console.log(data);
			}
		});
	});
	
	function removeClass(){
		$('#name').removeAttr("disabled"); 
		$('#name1').removeAttr("disabled"); 
		$('#desc').removeAttr("disabled"); 
		$('#sch_date').removeAttr("disabled"); 
		$('#end_date').removeAttr("disabled"); 
		$('#inst').removeAttr("disabled"); 
		$('#question').removeAttr("disabled"); 		
		$('#btnSubmit').removeAttr("disabled"); 		
	}
	
	function updateQuestion(){
		$.ajax({
			type:'PUT',
			url:'http://35.194.226.60:3000/api/v1/tests/'+val,
			data:'',
			success:function(data){
				// console.log(data);
				location.reload();
			}
		});
	}
	
</script>