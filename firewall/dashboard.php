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
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons"></i>
                  </div>
                  <h4 class="card-title">Tests</h4>
                </div>
                <div class="card-body ">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="table-responsive table-sales">
                        <table class="table">
                          <tbody>
                            <tr>
                              <td>
                                <div class="flag">
                                  <img src="../assets/img/flags/US.png" </div>
                              </td>
                              <td>Group 1</td>
                              <td class="text-right">
                                2.920
                              </td>
                              <td class="text-right">
                                53.23%
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="flag">
                                  <img src="../assets/img/flags/DE.png" </div>
                              </td>
                              <td>Group 2</td>
                              <td class="text-right">
                                1.300
                              </td>
                              <td class="text-right">
                                20.43%
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="flag">
                                  <img src="../assets/img/flags/AU.png" </div>
                              </td>
                              <td>Group 3</td>
                              <td class="text-right">
                                760
                              </td>
                              <td class="text-right">
                                10.35%
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="flag">
                                  <img src="../assets/img/flags/GB.png" </div>
                              </td>
                              <td>Group 4</td>
                              <td class="text-right">
                                690
                              </td>
                              <td class="text-right">
                                7.87%
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="flag">
                                  <img src="../assets/img/flags/RO.png" </div>
                              </td>
                              <td>Test Group</td>
                              <td class="text-right">
                                600
                              </td>
                              <td class="text-right">
                                5.94%
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="flag">
                                  <img src="../assets/img/flags/BR.png" </div>
                              </td>
                              <td>Group Imaran</td>
                              <td class="text-right">
                                550
                              </td>
                              <td class="text-right">
                                4.34%
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        </div>
                        </div>
                        <div class="col-md-6 ml-auto mr-auto">
                          <div id="worldMap" style="height: 300px;"></div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                      </div>
                      <!-- <button type="button" class="btn btn-round btn-default dropdown-toggle btn-link" data-toggle="dropdown">
    7 days
</button> -->
                      <div class="row">
                        <div class="col-md-4">
                          <div class="card card-chart">
                            <div class="card-header card-header-rose" data-header-animation="true">
                              <div class="ct-chart" id="websiteViewsChart"></div>
                            </div>
                            <div class="card-body">
                              <div class="card-actions">
                                <button type="button" class="btn btn-danger btn-link fix-broken-card">
                                  <i class="material-icons">build</i> Fix Header!
                                </button>
                                <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom" title="Refresh">
                                  <i class="material-icons">refresh</i>
                                </button>
                                <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="Change Date">
                                  <i class="material-icons">edit</i>
                                </button>
                              </div>
                              <h4 class="card-title">Users</h4>
                              <p class="card-category">Last Campaign Performance</p>
                            </div>
                            <div class="card-footer">
                              <div class="stats">
                                <i class="material-icons">access_time</i> campaign sent 2 days ago
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="card card-chart">
                            <div class="card-header card-header-success" data-header-animation="true">
                              <div class="ct-chart" id="dailySalesChart"></div>
                            </div>
                            <div class="card-body">
                              <div class="card-actions">
                                <button type="button" class="btn btn-danger btn-link fix-broken-card">
                                  <i class="material-icons">build</i> Fix Header!
                                </button>
                                <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom" title="Refresh">
                                  <i class="material-icons">refresh</i>
                                </button>
                                <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="Change Date">
                                  <i class="material-icons">edit</i>
                                </button>
                              </div>
                              <h4 class="card-title">Groups</h4>
                              <p class="card-category">
                                <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                            </div>
                            <div class="card-footer">
                              <div class="stats">
                                <i class="material-icons">access_time</i> updated 4 minutes ago
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="card card-chart">
                            <div class="card-header card-header-info" data-header-animation="true">
                              <div class="ct-chart" id="completedTasksChart"></div>
                            </div>
                            <div class="card-body">
                              <div class="card-actions">
                                <button type="button" class="btn btn-danger btn-link fix-broken-card">
                                  <i class="material-icons">build</i> Fix Header!
                                </button>
                                <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom" title="Refresh">
                                  <i class="material-icons">refresh</i>
                                </button>
                                <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="Change Date">
                                  <i class="material-icons">edit</i>
                                </button>
                              </div>
                              <h4 class="card-title">Tests</h4>
                              <p class="card-category">Last Campaign Performance</p>
                            </div>
                            <div class="card-footer">
                              <div class="stats">
                                <i class="material-icons">access_time</i> campaign sent 2 days ago
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