<div class="main-panel">
   <div class="content">
      <div class="container-fluid">
         <div class="row">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
               <div class="card">
                  <div class="card-body p-0">
                     <div class="container-fluid">
                        <div class="row justify-content-center">
                           <div class="col-lg-12">
                              <div class="card">
                                 <div class="card-body">
                                    <?php if($this->session->flashdata('result')){?>
                                       <div class="alert alert-success">
                                          <?php echo $this->session->flashdata('result'); } ?>
                                       </div>
                                    <div class="table-responsive">
                                       <div class="form-validation">
                                          <form class="form-valide" action="<?php echo base_url('UserSetting/updatePwd')?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                             <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="val-username">
                                                   <?= $this->lang->line('Old Password')?></span>
                                                </label>
                                                <div class="col-md-9">
                                                   <input type="password" class="form-control" id="password" name="password" value="">
                                                   <span class="text-danger" ><?php echo form_error('password'); ?></span>
                                                </div>
                                             </div>
                                             <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="val-password">
                                                   <?= $this->lang->line('New Password')?>*</span>
                                                </label>
                                                <div class="col-md-9">
                                                   <input type="password" class="form-control" id="newpass" name="newpass" value="">
                                                   <span class="text-danger" ><?php echo form_error('newpass'); ?></span> 
                                                </div>
                                             </div>
                                             <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="val-password">
                                                   <?= $this->lang->line('Confirm Password')?>*</span>
                                                </label>
                                                <div class="col-md-9">
                                                   <input type="password" class="form-control" id="confpassword" name="confpassword" value="">
                                                   <span class="text-danger" ><?php echo form_error('confpassword'); ?></span>
                                                </div>
                                             </div>
                                             <div class="form-group row">
                                                <div class="col-lg-9 ml-auto">
                                                   <button type="submit" class="btn btn-primary"><?= $this->lang->line('Update Password')?></button>
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