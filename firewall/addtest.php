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
              <div class="card ">
                <div class="card-header card-header-rose card-header-text">
                  <div class="card-text">
                    <h4 class="card-title">Add new Test</h4>
                  </div>
                </div>
                <div class="card-body ">
                  <form method="get" action="" class="form-horizontal">

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
                    
                  </form>
                </div>
              </div>
            </div>
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
     $(function(){     
        getData("groups", function(data){
          console.log(data); 
          $.each(data.response, function(key, value) {   
        $('#groupSelect')
         .append($("<option></option>")
                    .attr("value",value.id)
                    .text(value.name)); 
        });
        });           
        });
</script>