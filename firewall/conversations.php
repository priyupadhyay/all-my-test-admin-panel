<?php
 include '../parts/header_one.php';
 ?>

<title>
 Conversations
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
              <div class="card">
                <div class="card-header card-header-icon card-header-success">
                  <div class="card-icon">
                    <i class="material-icons">perm_identity</i>
                  </div>
                  <h4 class="card-title">All Conversations

                  </h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive table-sales">
                        <table class="table">
                          <tbody>
                            <tr>
                              
                              <td>
                                <a href="#"><img src="../assets/img/faces/marc.jpg" class="img img-thumbnail" width="50"></a>
                              </td>
                              <td>
                                <a href="#"><h4>Priyank Upadhyay</h4></a>
                              </td>
                              
                            </tr>
                            <tr>
                             <td>
                                <a href="#"><img src="http://webiconspng.com/wp-content/uploads/2016/11/avatar_business_costume_male_man_office_user_icon_403022.png" class="img img-thumbnail" width="50"></a>
                              </td>
                              <td>
                                <a href="#"><h4>Md Imran</h4></a>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <a href="#"><img src="https://cdn0.iconfinder.com/data/icons/iconshock_guys/128/andrew.png" class="img img-thumbnail" width="50"></a>
                              </td>
                              <td>
                                <a href="#"><h4>Saurabh Kumar</h4></a>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <a href="#"><img src="http://www.ggtelecom.ca/assets/images/chat-avatar.jpg" class="img img-thumbnail" width="50"></a>
                              </td>
                              <td>
                                <a href="#"><h4>Anil Shah</h4></a>
                              </td>
                            </tr>
                            
                          </tbody>
                        </table>
                    </div>
                  </div>
              </div>

            </div>
            

            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-icon card-header-success">
                  <div class="card-icon">
                    <i class="material-icons">message</i>
                  </div>
                  <h4 class="card-title">Priyank Upadhyay
                  </h4>
                </div>
                <div class="card-body">
                  <table class="table">
                    <col width="100">
                        <tbody>
                          <tr>
                            <td>
                                <a href="#"><img src="https://cdn0.iconfinder.com/data/icons/iconshock_guys/128/andrew.png" class="img img-thumbnail" width="50"></a>
                              </td>
                            <td>
                              <p>This is a sample message</p>
                            </td>
                            
                          </tr>


                          <tr>
                            <td>
                                <a href="#"><img src="http://www.ggtelecom.ca/assets/images/chat-avatar.jpg" class="img img-thumbnail" width="50"></a>
                              </td>
                            <td>
                              <p>This is a another message</p>
                            </td>
                            
                          </tr>


                          <tr>
                            <td>
                                <a href="#"><img src="https://cdn0.iconfinder.com/data/icons/iconshock_guys/128/andrew.png" class="img img-thumbnail" width="50"></a>
                              </td>
                            <td>
                              <p>This is a yet another message</p>
                            </td>
                            
                          </tr>



                        </tbody>
                      </table>
                </div>
                <div class="card-footer">
                   <div class="col-sm-9">
                        <div class="form-group has-success bmd-form-group">
                          <label for="exampleInput2" class="bmd-label-floating">Success input</label>
                          <input type="text" class="form-control" id="message">
                          </div>   
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group has-success bmd-form-group">
                          <button type="submit" class="btn btn-fill btn-success">Send<div class="ripple-container"></div></button>
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
 $id = $_GET['id']; 
 ?>

 </body>

 <?php
 include '../parts/footer_two.php';
 ?>
 <script>
     
</script>