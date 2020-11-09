<style>

input#date {
    padding: 17px 5px;
}
.bmd-label-floating{
  margin:10 !important;
}
</style>

<div class="main-panel">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary match-box">
              <div class="row">
                <div class="col-md-6">
              <h4 class="card-title"><?= ('Add User') ?></h4>
              <p class="card-category"><?= ('Add the User You Want to Add') ?></p>
              </div>
<!--              <div class="col-md-6" style="float:right;">
              <form method="post" id="import_form" enctype="multipart/form-data">
                <p><label>Select Excel File</label>
                <input type="file" name="file" id="file" required accept=".xls, .xlsx" /></p>
                <br />
                <input type="submit" name="import" value="Import" class="btn btn-info" />
              </form>
            </div> -->  
            </div>
            </div>
            <div class="card-body">
              <form name="registration" class="form-valide add_user_form" action="<?php echo base_url('Adduser/user/')?>" enctype="multipart/form-data" method="post" accept-charset="utf-8" id="upload_form">
                <div class="row">
                  <div class="col-sm-12"><?php echo @$error; ?></div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating"><?= ('Username')?></label>
                      <input type="text" class="form-control"  name="username">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating"><?= ('Email') ?></label>
                      <input type="text" class="form-control" name="email">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating"><?= ('First Name')?></label>
                      <input type="text" class="form-control" name="first_name">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating"><?= ('Last Name')?></label>
                      <input type="text" class="form-control" name="last_name">
                    </div>
                  </div>

                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating"><?= ('Password') ?></label>
                      <input type="password" class="form-control" name="password">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating"><?= ('Mobile Number') ?></label>
                      <input type="text" class="form-control" name="mobile">
                    </div>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating"><?= ('Residence Address') ?></label>
                      <input type="text" class="form-control" name="address">
                    </div>

                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                      <label class="bmd-label-floating"><?= ('City') ?></label>
                      <input type="text" class="form-control" name="city">
                    </div>
                  </div>
                  </div>


                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="" style="color:grey;"><?= ('Date of birth')?></label>
                        <input type="date" id="date" class="form-control" name="dob">
                      </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="bmd-label-floating"><?= ('School address')?></label>
                        <input type="text" class="form-control" name="sa">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating"><?= ('Country')?></label>
                          <input type="text"  class="form-control" name="country">
                        </div>
                      </div>

                      <div class="col-md-6" style="margin-top:-27px;">
                        <div class="form-group">
                          <label class=""><?= ('Role')?></label>
                            <select class="form-control" id="role" disabled>
                              <option value="admin"><?= ('Admin')?></option>
                              <option value="client" selected><?=('Client')?></option>
                            </select>
                            <input type="hidden" name="role" value="client">
                          </div>
                        </div>
                    </div>
                  <div class="row">
                  <div class="col-md-6">
                     <div class="form-group add_user_radio">
                      <label class="bmd-label-floating"><?= ('Gender') ?></label>
                      <input type="radio" name="gender"  class="form-control-radio" value="male" checked="checked"/><?= ('Male') ?>
                      <input type="radio" name="gender" class="form-control-radio" value="female" /><?= ('Female') ?>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group mt-3 input_file_type">         
                      <!-- <label class="custom-file-label" for="inputGroupFile01"></label> -->
                         <label class="bmd-label-floating"><?= ('Upload Image')?></label>
                          <!-- <img class="avatar avatar-32 img-circle" src="<?= base_url() ?>uploads/profiles/user.jpg"/> -->
                        <input type="file" class="form-control" name="image" id="inputGroupFile01"
                        aria-describedby="inputGroupFileAddon01">
                    </div>
                  </div>
                </div>
                <div class="row second-password" style="display:none;">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating"><?= ('Second Password') ?></label>
                      <input type="password" class="form-control" name="second_password" required>
                    </div>
                  </div>
                </div>
                <input type="submit" name="register" value="Register Me"  class="btn btn-primary pull-right"/>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script>
  $( document ).ready(function() {
     // $('#datepicker').datepicker();

     // $('#close').click(function(){
     //  alert('hii');
     // })

 $('#import_form').on('submit', function(event){
  event.preventDefault();
  $.ajax({
   url:"<?php echo base_url(); ?>Adduser/import",
   method:"POST",
   data:new FormData(this),
   contentType:false,
   cache:false,
   processData:false,
   success:function(data){
    $('#file').val('');
    //load_data();
    window.location.href="<?= base_url()?>table";
   }
  })
 });

 $("#role").change(function (){
   if($("#role").val() == "admin")
    $(".second-password").show();
  else 
      $(".second-password").hide();
    //alert();
 });


 $(function() {  
  $("form[name='registration']").validate({
rules: {
  username: "required",
  password: "required",
  address: "required",
  city: "required",
  image: "required",
  first_name: "required",
  last_name: "required",
  dob : "required",
  sa : "required",
  country : "required",
  role : "required",


  mobile:{
    required:true,
    minlength:9,
    maxlength:10,
    number: true
  },

  email: {
    required: true,
    email: true
  },


  check:'required'

},

// Specify validation error messages
messages: {
  username: "Please enter your Name",
  email: "Please enter a valid email address",
  first_name :  "Please Enter First Name",
  last_name : "Please Enter last name",
  address: "Please Your address",
  city: "Please Your City Name",
  image: "Choose image",
  mobile: "Please enter  10 digit mobile number",
  dob : "Date of birth is required",
  sa : "School is required",
  country : "Country is required",
  role : "please select your role"
},

submitHandler: function(form) 
{
    
  if($('#file_id').val() == '')  
  {
    $('#errors').html('<p>File is required</p>');
    $("#errors").css({'color':'red','font-weight':'bold'});

  }

  else 
  {
    form.submit();
  }
}
});
    });



  })

</script>