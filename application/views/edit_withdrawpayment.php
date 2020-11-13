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
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"  style="margin-top:50px; margin-left:30px;">
                <div class="card_admin">
                    <div class="card-header"><h5 class="mb-0"></h5></div>
                    <div class="card-body">
                        <form class="form-valide" action="<?php echo base_url('withdrawpaymentList/save_withdrawpayment')?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">

                             <div class="form-group row">
                                <label class="col-md-3 "><?= ('Date of Request')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="date_created" name="date_created" value="<?php echo date("d-m-Y", strtotime($withdrawpayment_edit[0]->date_created)); ?>" readonly>
                                </div>
                            </div>
                            <!--<div class="form-group row">
                                <label class="col-md-3 "><?= ('Transection Id')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="transection_id" name="transection_id" value="<?php //echo $withdrawpayment_edit[0]->transection_id;?>" >
                                </div>
                            </div>-->


                            <div class="form-group row">
                                <label class="col-md-3 "><?= ('Mission Title')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="mission_title" name="mission_title" value="<?php echo $withdrawpayment_edit[0]->mission_title;?>" readonly>
                                </div>
                            </div>


                           <div class="form-group row">
                                <label class="col-md-3 "><?= ('Mission Status')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="mission_status" name="mission_status" value="Complete" readonly>
                                    <!-- <?php //if($withdrawpayment_edit[0]->mission_status == 0) { echo "Proposed";} else if($withdrawpayment_edit[0]->mission_status == 1) { echo "In Progress";}  else if($withdrawpayment_edit[0]->mission_status == 2) { echo "Delivered";}  else if($withdrawpayment_edit[0]->mission_status == 3) { echo "Completed";}  else if($withdrawpayment_edit[0]->mission_status == 4) { echo "Dispute";} ?>-->
                                </div>
                            </div>

                             <div class="form-group row">
                                <label class="col-md-3 "><?= ('Amount to Pay')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="amount_to_pay" name="amount_to_pay" value="<?php echo ($withdrawpayment_edit[0]->mission_amount * 0.91) - 0.25;?>" >
                                </div>
                            </div>
                            <?php
                                $this->db->select("username");
                                $this->db->from("users");
                                $this->db->where('id', $withdrawpayment_edit[0]->employer_id);
                                $data = $this->db->get()->result();
                            ?>
                              <div class="form-group row">
                                <label class="col-md-3 "><?= ('Employer')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="comment" name="comment" value="<?php echo $data[0]->username;?>" readonly>
                                </div>
                            </div>
                         <?php
$this->db->select("username,ifsc_code,account_number");
$this->db->from("users");
$this->db->where('id', $withdrawpayment_edit[0]->emplyee_id);
$data = $this->db->get()->result();
?>   
                            <div class="form-group row">
                                <label class="col-md-3 "><?= ('Employee')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="comment" name="comment" value="<?php echo $data[0]->username;?>" readonly>
                                </div>
                            </div>

<!-- <div class="form-group row">
                                <label class="col-md-3 "><?= ('Account Number')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="account_number" name="account_number" value="<?php echo $data[0]->account_number;?>" readonly>
                                </div>
                            </div>


<div class="form-group row">
                                <label class="col-md-3 "><?= ('Ifsc Code')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="ifsc_code" name="ifsc_code" value="<?php echo $data[0]->ifsc_code;?>" readonly>
                                </div>
                            </div> -->

<div class="form-group row">
                                <label class="col-md-3 "><?= ('Pay Status')?> <span class="text-danger">*</span>
                                </label>

                                <br>
                                <div class="col-md-9">
                                    <select name="pay_status" id="status">
                                        
                                        <option value="0">Un Paid</option>
                                        <option value="1" <?php if($withdrawpayment_edit[0]->pay_status ==1) { ?> selected <?php } ?>>Paid</option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    <input type="hidden" name="id" value="<?php echo $withdrawpayment_edit[0]->id; ?>">
                                    
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