<div class="main-panel">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
              <div class="container-fluid dashboard-content ">
                <div class="ecommerce-widget">
                  <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                      <div class="card">
                        <h5 class="card-header">Demand Update</h5>
                        <div class="card-body p-0">
                          <div class="container-fluid">
                            <div class="row justify-content-center">
                              <div class="col-lg-12">
                                <div class="card">
                                  <div class="card-body">
                                    <div class="table-responsive">
                                      <div class="form-validation">
                                        <form class="form-valide" action="<?php echo base_url('User/save')?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                          <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="val-username">Title Of Service <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-md-9">
                                              <input type="text" class="form-control" id="title" name="title" value="<?php echo $user_edit[0]['title']?>">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="val-password">Brief Desciption <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-md-9">
                                              <textarea class="form-control" name="description" ><?php echo $user_edit[0]['description']?></textarea>
                                            </div>
                                          </div>
                                          
                                           <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="val-password">Project Category <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-md-9">

                                              <select name="project_category">
                                                <?php foreach($project_category as $p):  ?>
                                                <option value="<?= $p->project_id ?>" <?= ($user_edit[0]['project_category'] == $p->project_id)?'selected':'' ?>>  <?= $p->title ?></option>
                                              <?php endforeach ?>
                                              </select>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="val-confirm-password">Upload Picture <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-md-9">
                                              <input type="file" class="form-control" id="image" name="profile_image">

                                              <input type="hidden" name="user_image" value="<?php echo $user_edit[0]['image']?>">
                                              <input type="hidden" name="id" value="<?php echo $user_edit[0]['id']?>">
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <div class="col-lg-9 ml-auto">
                                              <button type="submit" class="btn btn-primary">OK</button>
                                            </div>
                                          </div>
                                        </form>
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