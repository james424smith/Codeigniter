<style>
    .dashboard-wrapper {
    margin-left: 245px;
    margin-top: 41px;
}
.col-md-12.image_project {
    margin-left: 254px;
}
.card_admin form.form-valide input {
    background: #d4d4d4;
    border: none;
    padding: 5px 15px;
    font-size: 13px;
    width: 339px;
}
.card_admin form.form-valide textarea {
    background: #d4d4d4;
    border: none;
    padding: 5px 15px;
    font-size: 13px;
    width: 339px;
    height: 83px !important;
}
.card-header{
    display:none;
}

</style>

<div class="col-md-9">
<div class="dashboard-wrapper">
    <div class="container  dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" >
                <div class="card_admin">
                    <div class="card-header"><h5 class="mb-0"></h5></div>
                    <div class="card-body">
                        <form class="form-valide" action="<?php echo base_url('ProjectList/save_projectlist')?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">

                            <div class="form-group row">
                                <label class="col-md-3 "><?= $this->lang->line('Title Of Project')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="title" name="title" value="<?php echo $project_edit[0]['title'];?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="val-password"><?= $this->lang->line('Brief Desciption')?> <span class="text-danger">*</span>
                                </label>
                                <div class="col-md-9">                         
                                    <textarea class="tinymce" name="description" id="texteditor" value="description"><?php echo $project_edit[0]['description'];?></textarea>
                                </div>
                            </div>

                             <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="val-password"><?= $this->lang->line('Budget')?><span class="text-danger">*</span>
                                </label>
                                <div class="col-md-9">                         
                                    <input type="text" class="tinymce" name="budget" id="texteditor" value="<?php echo $project_edit[0]['budget'];?>">
                                </div>  
                            </div>
                              
                              <div class="form-group row">
                                <div class="col-md-12 image_project" >
                                    <img  name="projectimage" width="80px" height="100px" id="preview_image" src="<?= base_url() ?>uploads/project_image/<?php echo $project_edit[0]['picture_url']; ?>">
                                </div>
                              </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label"  for="val-confirm-password"><?= $this->lang->line('Upload Image')?> <span class="text-danger">*</span>
                                </label>
                                
                                <div class="col-md-9">
                                    
                                   <input type="file"  id="image" name="profile_image" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    <input type="hidden" name="id" value="<?php echo $project_edit[0]['project_id']; ?>">
                                    
                                    <button type="submit" class="btn btn-primary"><?= $this->lang->line('Submit')?></button>
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
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script> 
<script>
    function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#preview_image').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

$("#image").change(function() {
  readURL(this);
});</script>