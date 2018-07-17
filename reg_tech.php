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
     <div class=""col-md-4 col-md-offset-4><h3>Register Teacher</h3></div>
              <form id="TypeValidation" class="form-horizontal" action="" method="">
                <div class="card ">
                  <div class="card-header card-header-rose card-header-text">
                    <div class="card-text">
                      <h4 class="card-title">Required Info.</h4>
                    </div>
                  </div>
                  <div class="card-body "> 
                      <div class="row">
                      <div class="col-md-6 offset-md-5" >
                        <button class="btn btn-google">
                          <i class="fa fa-google-plus"></i> Register With Google
                        </button>
                      </div>
                      <div class="col-md-6 offset-md-3">
                          <select class="selectpicker" data-size="7" data-style="btn btn-primary btn-round" title="Single Select">
                            <option disabled selected>Select Organisation</option>
                            <option value="2">Foobar</option>
                            <option value="3">Is great</option>
                          </select>
                        </div>
                      </div>                   
                  </div>
                  <div class="card-footer ml-auto mr-auto">
                    <button type="submit" class="btn btn-rose">Next</button>
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

