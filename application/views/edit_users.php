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
<?php 

?>
<div class="col-md-9">
<div class="dashboard-wrapper">
    <div class="container  dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="margin-top:50px; margin-left:20px;">
                <div class="card_admin">
                    <div class="card-header"><h5 class="mb-0"></h5></div>
                    <div class="card-body">
                        <input type="hidden" id="second_password" value="<?php echo $selfadmin->second_password; ?>" >
                        <form class="form-valide" action="<?php echo base_url('table/save_users')?>" enctype="multipart/form-data" method="post" accept-charset="utf-8" id="myform">                     
                            <input type="hidden"  id="id" name="user_id" value="<?php echo $users_edit[0]->id;?>">
                             <div class="form-group row">
                                <label class="col-md-3 "><?= ('First Name')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="first_name" name="first_name" value="<?php echo $users_edit[0]->first_name;?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 "><?= ('Last Name')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="last_name" name="last_name" value="<?php echo $users_edit[0]->last_name;?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 "><?= ('Username')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="text" name="username" value="<?php echo $users_edit[0]->username;?>" readonly>
                                </div>
                            </div> 
                           <div class="form-group row">
                                <label class="col-md-3 "><?= ('Email')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="email" name="email" value="<?php echo $users_edit[0]->email;?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 "><?= ('Birthday')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="dob" name="dob" value="<?php echo $users_edit[0]->dob;?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 "><?= ('University/School')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="school_address" name="school_address" value="<?php echo $users_edit[0]->school_address;?>" readonly>
                                </div>
                            </div>

                             <div class="form-group row">
                                <label class="col-md-3 "><?= ('Country')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="country" name="country" value="<?php echo $users_edit[0]->country;?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 "><?= ('Profile Rate')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="Profile_Rate" name="Profile_Rate" value="<?php echo $users_edit[0]->Profile_Rate;?>" readonly>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-md-3 "><?= ('Earned')?> <span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="Total_earned_amount" name="Total_earned_amount" value="<?php echo $users_edit[0]->Total_earned_amount;?>" readonly>
                                </div>
                            </div> 

                            <div class="form-group row">
                                <label class="col-md-3 "><?= ('Spent')?><span class="text-danger">*</span>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="spent" name="spent" value="<?php echo $users_edit[0]->spent;?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 "><?= ('Stripe User Id')?>
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="stripe_customer_id" name="stripe_customer_id" value="<?php echo $users_edit[0]->stripe_customer_id;?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 "><?= ('Stripe Card Id')?> 
                                </label>
                                <br>
                                <div class="col-md-9">
                                    <input type="text"  id="stripe_card_id" name="stripe_card_id" value="<?php echo $users_edit[0]->stripe_card_id;?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    <input type="hidden" name="id" value="<?php echo $users_edit[0]->misssion_id;?>">  
                                    <button type="button" class="btn btn-primary" id="submit_btn"><?= ('Submit')?></button>
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
    });

    $("#submit_btn").click(function () {
        var pwd = $('#second_password').val();
        var str = prompt("Are you sure to update this user data?");
        if(str == pwd)
        {
            $("#myform").submit();
        }
        else
        {
            alert("Wrong second password.");
        }
    });
</script>