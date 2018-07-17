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

 
 <div class="col-md-12" style="margin-top: 10%;">
     <div class=""col-md-4 col-md-offset-4><h3>Shedule Tests</h3></div>
              <form id="TypeValidation" class="form-horizontal" action="" method="">
                <div class="card ">
                  <div class="card-header card-header-rose card-header-text">
                    <div class="card-text">
                      <h4 class="card-title">Required Info.</h4>
                    </div>
                  </div>
                  <div class="card-body ">
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Test Title</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <input class="form-control" type="text" name="required" required="true" />
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Description</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <input class="form-control" type="text" name="required" required="true" />
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Instructions</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <input class="form-control" type="text" name="required" required="true" />
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Scheduled Date</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                        <input type="text" class="form-control datepicker" value="10/05/2016">
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">End Date</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                        <input type="text" class="form-control datepicker" value="10/05/2016">
                        </div>
                      </div>
                      
                    </div>
                    



                    
                    
                    
                    
                    
                  </div>
                  <div class="card-footer ml-auto mr-auto">
                    <button type="submit" class="btn btn-rose">Submit</button>
                  </div>
                </div>
              </form>
            </div>


<?Php
 include '../parts/footer_one.php';
 include '../parts/footer_two.php';

?>
</body>
</html>

