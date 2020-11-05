
<div class="main-panel">
  <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon match-box">
                      <i class="material-icons">person</i>
                    </div>
                    <p class="card-category"><?= ('Number of Users')?></p>
                    <h3 class="card-title"><?= $user ?>
                      <small></small>
                    </h3>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <!-- <i class="material-icons text-danger">warning</i> -->
                      <a href="#pablo"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon match-box">
                      <i class="material-icons">business</i>
                    </div>
                    <p class="card-category"><?= ('Number Of Projects') ?></p>
                    <h3 class="card-title"><?= $project ?></h3>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                     <!--  <i class="material-icons">date_range</i>  -->
                    </div>
                  </div>
                </div>
              </div>
                <!-- <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card card-stats">
                    <div class="card-header card-header-danger card-header-icon">
                      <div class="card-icon">
                        <i class="material-icons">info_outline</i>
                      </div>
                      <p class="card-category">Number Of Demands</p>
                      <h3 class="card-title"><?= $demand ?></h3>
                    </div>
                    <div class="card-footer">
                      <div class="stats">
                        <i class="material-icons">local_offer</i> Tracked from Github
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="card card-stats">
                    <div class="card-header card-header-info card-header-icon">
                      <div class="card-icon">
                        <i class="fa fa-twitter"></i>
                      </div>
                      <p class="card-category"><?= ('Followers')?></p>
                      <h3 class="card-title">+245</h3>
                    </div>
                    <div class="card-footer">
                      <div class="stats">
                        <i class="material-icons">update</i> Just Updated
                      </div>
                    </div>
                  </div>
                </div> -->
            </div>
        
            <div class="row">
              <!-- <div class="col-lg-6 col-md-12">
                <div class="card">
                  <div class="card-header card-header-tabs card-header-primary">
                    <div class="nav-tabs-navigation">
                      <div class="nav-tabs-wrapper">
                        <span class="nav-tabs-title">Tasks:</span>
                        <ul class="nav nav-tabs" data-tabs="tabs">
                          <li class="nav-item">
                            <a class="nav-link active" href="#profile" data-toggle="tab">
                              <i class="material-icons">bug_report</i> Bugs
                              <div class="ripple-container"></div>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#messages" data-toggle="tab">
                              <i class="material-icons">code</i> Website
                              <div class="ripple-container"></div>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#settings" data-toggle="tab">
                              <i class="material-icons">cloud</i> Server
                              <div class="ripple-container"></div>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="tab-pane active" id="profile">
                        <table class="table">
                          <tbody>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="" checked>
                                    <span class="form-check-sign">
                                      <span class="check"></span>
                                    </span>
                                  </label>
                                </div>
                              </td>
                              <td>Sign contract for "What are conference organizers afraid of?"</td>
                              <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                  <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                  <i class="material-icons">close</i>
                                </button>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <span class="form-check-sign">
                                      <span class="check"></span>
                                    </span>
                                  </label>
                                </div>
                              </td>
                              <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                              <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                  <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                  <i class="material-icons">close</i>
                                </button>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <span class="form-check-sign">
                                      <span class="check"></span>
                                    </span>
                                  </label>
                                </div>
                              </td>
                              <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                              </td>
                              <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                  <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                  <i class="material-icons">close</i>
                                </button>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="" checked>
                                    <span class="form-check-sign">
                                      <span class="check"></span>
                                    </span>
                                  </label>
                                </div>
                              </td>
                              <td>Create 4 Invisible User Experiences you Never Knew About</td>
                              <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                  <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                  <i class="material-icons">close</i>
                                </button>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="tab-pane" id="messages">
                        <table class="table">
                          <tbody>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="" checked>
                                    <span class="form-check-sign">
                                      <span class="check"></span>
                                    </span>
                                  </label>
                                </div>
                              </td>
                              <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                              </td>
                              <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                  <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                  <i class="material-icons">close</i>
                                </button>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <span class="form-check-sign">
                                      <span class="check"></span>
                                    </span>
                                  </label>
                                </div>
                              </td>
                              <td>Sign contract for "What are conference organizers afraid of?"</td>
                              <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                  <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                  <i class="material-icons">close</i>
                                </button>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="tab-pane" id="settings">
                        <table class="table">
                          <tbody>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <span class="form-check-sign">
                                      <span class="check"></span>
                                    </span>
                                  </label>
                                </div>
                              </td>
                              <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                              <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                  <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                  <i class="material-icons">close</i>
                                </button>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="" checked>
                                    <span class="form-check-sign">
                                      <span class="check"></span>
                                    </span>
                                  </label>
                                </div>
                              </td>
                              <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                              </td>
                              <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                  <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                  <i class="material-icons">close</i>
                                </button>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="" checked>
                                    <span class="form-check-sign">
                                      <span class="check"></span>
                                    </span>
                                  </label>
                                </div>
                              </td>
                              <td>Sign contract for "What are conference organizers afraid of?"</td>
                              <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                  <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                  <i class="material-icons">close</i>
                                </button>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
              <div class="col-lg-12 col-md-12">
                <div class="card">
                  <div class="card-header card-header-warning match-box">
                    <h4 class="card-title"><?= ('Latest Projects')?></h4>
                    <p class="card-category"><?= ('New projects')?></p>
                  </div>
                  <div class="card-body table-responsive">
                    <table id="dtBasicExample1" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                      <thead class="text-warning">
                        <th><?= ('ID')?></th>
                        <th><?= ('Title')?></th>
                        <th><?= ('Description')?></th>
                        <th><?= ('Category')?></th>
                        <th><?= ('Budget')?></th>
                      </thead>
                      <tbody>
                        <?php $count = 0;?>
                       <?php foreach($latest_project_list as $latest_project)  :?>
                        <tr>
                          <?php $count++; ?>
                          <td><?= $count ?></td>
                          <td><?= $latest_project->publish_title ?></td>
                          <td><?= $latest_project->publish_descrition ?></td>
                          <td><?= $latest_project->product_caterory_name ?></td>
                          <td><?= empty($latest_project->currency)?'':$latest_project->currency ?><?= $latest_project->budget ?></td>
                        </tr>
                       <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
               <div class="col-lg-12 col-md-12">
                <div class="card">
                  <div class="card-header card-header-warning match-box">
                    <h4 class="card-title"><?= ('Latest Users')?></h4>
                    <p class="card-category"><?= ('New Users')?></p>
                  </div>
                  <div class="card-body table-responsive">
                    
                    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                    
                      <thead class="text-warning">
                        <th><?= ('ID')?></th>
                        <th><?= ('First Name')?></th>
                        <th><?= ('Last Name')?></th>
                        <th><?= ('Email')?></th>
                        <th><?= ('Mobile Number')?></th>
                      </thead>
                      <tbody>
                        <?php $count = 0;?>
                       <?php foreach($latest_user_list as $latest_user_list)  :?>
                        <tr>
                          <?php $count++; ?>
                          <td><?= $count ?></td>
                          <td><?= $latest_user_list->first_name ?></td>
                          <td><?= $latest_user_list->last_name ?></td>
                          <td><?= $latest_user_list->email ?></td>
                          <td><?= $latest_user_list->mobile_no ?></td>                          
                        </tr>
                       <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
  </div>
</div>

<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script>
// Basic example
$(document).ready(function () {
  $('#dtBasicExample').DataTable({
    "paging": true, // false to disable pagination (or any other option)
    "pageLength": 10
  });
  $('#dtBasicExample1').DataTable({
    "paging": true, // false to disable pagination (or any other option)
    "pageLength": 10
  });
  $('.dataTables_length').addClass('bs-select');
});
</script>