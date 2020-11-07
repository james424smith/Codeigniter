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
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="card_admin">
                    <div class="card-header"><h5 class="mb-0"></h5></div>
                    <div class="card-body">
                        <form class="form-valide" action="<?php echo base_url('litigationsList/save_litigations')?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">

                             <div class="form-group row">
                                <label class="col-md-3 "><?= ('Project Id')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="project_id" name="project_id" value="<?php echo $litigations_edit[0]['project_id'];?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 "><?= ('User Email')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="user_email" name="user_email" value="<?php echo $litigations_edit[0]['user_email'];?>">
                                </div>
                            </div>
                            <input type="hidden"  id="before_status" name="before_status" value="<?php echo $litigations_edit[0]['before_status'];?>">

                           <!--<div class="form-group row">
                                <label class="col-md-3 "><?= ('Title')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="title" name="title" value="<?php echo $litigations_edit[0]['title'];?>">
                                </div>
                            </div>-->
                            <input type="hidden"  id="title" name="title" value="<?php echo $litigations_edit[0]['title'];?>">

                             <div class="form-group row">
                                <label class="col-md-3 "><?= ('Description(read only)')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <textarea id="description" disabled><?php echo $litigations_edit[0]['description'];?></textarea>
                                </div>
                            </div>
                            <input type="hidden"  id="description" name="description" value="<?php echo $litigations_edit[0]['description'];?>">
                            <div class="form-group row">
                                <label class="col-md-3 "><?= ('Comment')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="comment" name="comment" value="<?php echo $litigations_edit[0]['comment'];?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 "><?= ('Status')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="radio" name="status"  class="form-control-radio" value="1" checked="checked" style="width:25px;"/><?= ('Open') ?>&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="status"  class="form-control-radio" value="0" style="width:25px;"/><?= ('Close') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    <input type="hidden" name="id" value="<?php echo $litigations_edit[0]['id']; ?>">
                                    <button type="submit" class="btn btn-primary"><?= ('Submit')?></button>
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