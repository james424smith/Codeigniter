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
                        <form class="form-valide" action="<?php echo base_url('walletwithdrawaskList/save_walletwithdrawask')?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">

                             <div class="form-group row">
                                <label class="col-md-3 "><?= ('Date of ask')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="date_of_ask" name="date_of_ask" value="<?php echo $walletwithdrawask_edit[0]['date_of_ask'];?>">
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-md-3 "><?= ('Wallet Amount')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="wallet_amount" name="wallet_amount" value="<?php echo $walletwithdrawask_edit[0]['wallet_amount'];?>">
                                </div>
                            </div>


                           <div class="form-group row">
                                <label class="col-md-3 "><?= ('User Email')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="user_email" name="user_email" value="<?php echo $walletwithdrawask_edit[0]['user_email'];?>">
                                </div>
                            </div>

                             <div class="form-group row">
                                <label class="col-md-3 "><?= ('Comment')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="comment" name="comment" value="<?php echo $walletwithdrawask_edit[0]['comment'];?>">
                                </div>
                            </div>
                              
                            
                            

                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    <input type="hidden" name="id" value="<?php echo $walletwithdrawask_edit[0]['id']; ?>">
                                    
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