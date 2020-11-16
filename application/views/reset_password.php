<style>
   .col-form-label {
      top: -15px !important;
      color: grey !important;
   }
</style>
<div class="main-panel">
   <div class="content">
      <div class="container-fluid">
         <div class="row">       
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
               <?php if($this->session->flashdata('faild_confirm')){ ?>
                     <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong>Error!</strong> <?php echo $this->session->flashdata('faild_confirm'); ?>
                     </div>
               <?php } else if($this->session->flashdata('faild_old')) { ?>
                     <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong>Error!</strong> <?php echo $this->session->flashdata('faild_old'); ?>
                    </div>
               <?php } ?>
               <?php if($this->session->flashdata('sec_faild_confirm')){ ?>
                     <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong>Error!</strong> <?php echo $this->session->flashdata('sec_faild_confirm'); ?>
                     </div>
               <?php } else if($this->session->flashdata('sec_faild_old')) { ?>
                     <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong>Error!</strong> <?php echo $this->session->flashdata('sec_faild_old'); ?>
                    </div>
               <?php } ?>
               <div class="card match-card">
                  <div class="card-body p-0">
                     <div class="container-fluid">
                        <div class="row justify-content-center">
                           <div class="col-lg-12">
                              <div class="card" >
                                 <div class="card-body">
                                    <?php if($this->session->flashdata('result')){?>
                                       <div class="alert alert-success">
                                          <?php echo $this->session->flashdata('result'); } ?>
                                       </div>
                                    <div class="table-responsive">
                                       <h2 style="margin-left:15px;">Admin Pass</h2><hr>
                                       <div class="form-validation">
                                          <form class="form-valide" action="<?php echo base_url('UserSetting/updatePwd')?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                             <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="val-username">
                                                   <?=('Old Password')?></span>
                                                </label>
                                                <div class="col-md-9">
                                                   <input type="password" class="form-control" id="password" name="password" value="">
                                                   <span class="text-danger" ><?php echo form_error('password'); ?></span>
                                                </div>
                                             </div>
                                             <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="val-password">
                                                   <?=('New Password')?>*</span>
                                                </label>
                                                <div class="col-md-9">
                                                   <input type="password" class="form-control" id="newpass" name="newpass" value="">
                                                   <span class="text-danger" ><?php echo form_error('newpass'); ?></span> 
                                                </div>
                                             </div>
                                             <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="val-password">
                                                   <?= ('Confirm Password')?>*</span>
                                                </label>
                                                <div class="col-md-9">
                                                   <input type="password" class="form-control" id="confpassword" name="confpassword" value="">
                                                   <span class="text-danger" ><?php echo form_error('confpassword'); ?></span>
                                                </div>
                                             </div>
                                             <div class="form-group row">
                                                <div class="col-lg-9 ml-auto">
                                                   <button type="submit" class="btn btn-primary"><?=('Update Admin Pass')?></button>
                                                </div>
                                             </div>
                                          </form>
                                       </div>
                                       <br>
                                       <h2 style="margin-left:15px;">Safty Pass</h2><hr>
                                       <div class="form-validation">
                                          <form class="form-valide" action="<?php echo base_url('UserSetting/updateSecPwd')?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                             <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="val-username">
                                                   <?=('Old Password')?></span>
                                                </label>
                                                <div class="col-md-9">
                                                   <input type="password" class="form-control" id="password" name="sec_password" value="">
                                                   <span class="text-danger" ><?php echo form_error('password'); ?></span>
                                                </div>
                                             </div>
                                             <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="val-password">
                                                   <?=('New Password')?>*</span>
                                                </label>
                                                <div class="col-md-9">
                                                   <input type="password" class="form-control" id="newpass" name="sec_newpass" value="">
                                                   <span class="text-danger" ><?php echo form_error('newpass'); ?></span> 
                                                </div>
                                             </div>
                                             <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="val-password">
                                                   <?= ('Confirm Password')?>*</span>
                                                </label>
                                                <div class="col-md-9">
                                                   <input type="password" class="form-control" id="confpassword" name="sec_confpassword" value="">
                                                   <span class="text-danger" ><?php echo form_error('confpassword'); ?></span>
                                                </div>
                                             </div>
                                             <div class="form-group row">
                                                <div class="col-lg-9 ml-auto">
                                                   <button type="submit" class="btn btn-primary"><?=('Update Safty Pass')?></button>
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