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
                        <form class="form-valide" action="<?php echo base_url('demandsList/save_demands')?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">

                             <div class="form-group row">
                                <label class="col-md-3 "><?= ('Project Id')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="mission_id" name="mission_id" value="<?php echo $demands_edit[0]->mission_id;?>">
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-md-3 "><?= ('Title')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="mission_title" name="mission_title" value="<?php echo $demands_edit[0]->mission_title;?>">
                                </div>
                            </div>


                           <div class="form-group row">
                                <label class="col-md-3 "><?= ('Description')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="mission_description" name="mission_description" value="<?php echo $demands_edit[0]->mission_description;?>">
                                </div>
                            </div>

                             <div class="form-group row">
                                <label class="col-md-3 "><?= ('Status')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">

                                   <!--  <input type="text"  id="status" name="status" value="<?php echo $demands_edit[0]->status;?>"> -->

                                    <select name="status" id="status" >
                                        <option value="">select</option>
                                        <option value="0" <?php if($demands_edit[0]->status == 0) { ?> selected <?php } ?>>Posted</option>
                                        <option value="1" <?php if($demands_edit[0]->status == 1) { ?> selected <?php } ?>>In Progress</option>
                                        <option value="0" <?php if($demands_edit[0]->status == 2) { ?> selected <?php } ?>>Delivered</option>
                                        <option value="0" <?php if($demands_edit[0]->status == 3) { ?> selected <?php } ?>>Completed</option>
                                        <option value="0" <?php if($demands_edit[0]->status == 4) { ?> selected <?php } ?>>Dispute</option>
                                    </select>
                                </div>
                            </div>
                              



                             <div class="form-group row">
                                <label class="col-md-3 "><?= ('Task By')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <?php
                                        $this->db->select("username");
                                        $this->db->from("users");
                                        $this->db->where('id', $demands_edit[0]->client_id);
                                        $data = $this->db->get()->result();
                                    ?>
                                    <input type="text"  id="client_id" name="client_id" value="<?php echo $data[0]->username;?>">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3 "><?= ('Hired Person')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">

<?php

$this->db->select("username");
$this->db->from("users");
$this->db->where('id', $demands_edit[0]->accepted_by);
    $data = $this->db->get()->result();

    ?>


                                    <input type="text"  id="accepted_by" name="accepted_by" value="<?php echo $data[0]->username;?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 "><?= ('Budget')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="budget" name="budget" value="<?php echo $demands_edit[0]->budget;?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 "><?= ('Category Title')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="category_title" name="category_title" value="<?php echo $demands_edit[0]->category_title;?>">
                                </div>
                            </div>

                             <div class="form-group row">
                                <label class="col-md-3 "><?= ('created')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="created" name="created" value="<?php echo $demands_edit[0]->created;?>">
                                </div>
                            </div>
                            

                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    <input type="hidden" name="id" value="<?php echo $demands_edit[0]->misssion_id;?>">
                                    
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