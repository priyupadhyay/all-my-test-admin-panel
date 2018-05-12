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
                           
                            <textarea class="form-control" rows="30" id="question" disabled></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-rose pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
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
                      
                     <input type="submit" value="Edit" class="btn btn-rose btn-round" disabled>

                     </form>   
                          
                  <a href="#pablo" class="btn btn-rose btn-round">Edit</a>
    
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
        var val = <?php echo $id ?>;       
          getData("tests/"+val, function(data){
            $('#name').val((data.response[0]["name"]));   
            $('#name1').html((data.response[0]["name"]));   
            $('#desc').val((data.response[0]["description"]));
            $('#sch_date').val((data.response[0]["scheduled_date"]));
            $('#end_date').val((data.response[0]["end_date"]));
            $('#inst').val("Some Instruction");  
            var url = data.response[0]["file_url"];
            $.get(url, function (data, status) {
                console.log(data);
                $.each(data, function(key,value) {
                    $('#question').append("\n\n");
                    $('#question').append(value.id+". "); 
                    $('#question').append(value.title);  
                    $('#question').append("\n\n");  
                    $('#question').append(value.body);   
                });                    
                });              

          console.log(data);
          });
        });
</script>