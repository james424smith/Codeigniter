<div class="dashboard-wrapper">
   <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="ecommerce-widget">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <h5 class="card-header">Edit Team Members</h5>
                            <div class="card-body p-0">
                                <div class="container-fluid">
                                   <div class="row justify-content-center">
                                      <div class="col-lg-12">
                                         <div class="card">
                                            <div class="card-body">
                                               <div class="table-responsive">
                                                  <div class="form-validation">
                                                     <form class="form-valide" action="<?php echo base_url('HomeContent/save_team')?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                                        <div class="form-group row">
                                                           <label class="col-md-3 col-form-label" for="val-username">Member Name <span class="text-danger">*</span>
                                                           </label>
                                                           <div class="col-md-9">
                                                              <input type="text" class="form-control" id="title" name="member_name" value="<?php echo $our_team_data[0]['member_name']?>">
                                                           </div>
                                                        </div>
                                                        <div class="form-group row">
                                                           <label class="col-md-3 col-form-label" for="val-password">Member Skills <span class="text-danger">*</span>
                                                           </label>
                                                           <div class="col-md-9">
                                                              <textarea class="tinymce" name="member_skills" id="texteditor" ><?php echo $our_team_data[0]['member_skills']?></textarea>
                                                           </div>
                                                        </div>
                                                        <div class="form-group row">
                                                           <label class="col-md-3 col-form-label" for="val-password">Member Bio <span class="text-danger">*</span>
                                                           </label>
                                                           <div class="col-md-9">
                                                              <textarea class="tinymce" name="member_bio" id="texteditor1" ><?php echo $our_team_data[0]['member_bio']?></textarea>
                                                           </div>
                                                        </div>
                                                        <div class="form-group row">
                                                           <label class="col-md-3 col-form-label" for="val-confirm-password">Upload Picture <span class="text-danger">*</span>
                                                           </label>
                                                           <div class="col-md-9">
                                                              <input type="file" class="form-control" id="image" name="member_profile">
                                                              <input type="hidden" name="member_profile" value="<?php echo $our_team_data[0]['member_profile']?>">
                                                              <input type="hidden" name="team_id" value="<?php echo $our_team_data[0]['team_id']?>">
                                                           </div>
                                                        </div>
                                                        <div class="form-group row">
                                                           <div class="col-lg-9 ml-auto">
                                                           <button type="submit" class="btn btn-primary">Submit</button>
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
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
 CKEDITOR.replace( 'texteditor' );
</script>
<script>
 CKEDITOR.replace( 'texteditor1' );
</script>