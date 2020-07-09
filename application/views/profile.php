<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<style>
  img.profile-user-img.img-responsive.img-circle.profileImgUrl {
    width: 100%;
}
</style>
<div class="main-panel">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <section class="content-header">
          <h1>
            <?= $this->lang->line('Profile Settings')?>
            <small><?= $this->lang->line('Control panel')?></small>
          </h1>
          <ol class="breadcrumb">
            <li>
            <a href="<?=base_url('home');?>"><i class="fa fa-dashboard"></i>Dashboard
            </a>
            </li>
          </ol>
      </div>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-3" >
              <div class="box box-primary" id="element_overlap">
                <div class="box-body box-profile">
                  <?php
                  $obj=&get_instance();
                  $obj->load->model('UserModel');
                  $profile_url = $obj->UserModel->PictureUrl();
                  $user=$obj->UserModel->GetUserData();
                  ?>
                  <img class="profile-user-img img-responsive img-circle profileImgUrl" src="<?=$profile_url;?>" alt="<?=$user['name'];?>">

                  <h3 class="profile-username text-center NameEdt"><?=$user['name'];?></h3>

                  <p class="text-muted text-center">Member since <?=date('M. Y',strtotime($this->session->userdata['id']) );?>  </p>


                  <a href="javascript:void(0);" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-block"><b><?= $this->lang->line('Upload Photo')?></b></a>

                  <p id="ErrorMessage" style="padding: 5px;"></p>
                </div>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-md-9">
              <div class="nav-tabs-custom" id="element_overlap1">
                <!-- <ul class="nav nav-tabs">
                  <li class="active"><a href="#activity" data-toggle="tab">General Details</a></li>
                  <li><a href="#settings" data-toggle="tab">Change Password</a></li>
                </ul> -->
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <form class="form-horizontal UpdateDetails">
                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label"><?= $this->lang->line('Admin ID')?></label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="admin_id" name="id" value="<?=$user['id']?>" readonly>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label"><?= $this->lang->line('Name')?></label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" name="first_name" value="<?=$user['first_name']?>" placeholder="First Name">
                        </div>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" name="last_name" value="<?=$user['last_name']?>" placeholder="Last Name">
                        </div>
                      </div>


                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label"><?= $this->lang->line('Email')?></label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="email" value="<?=$user['email']?>" placeholder="Email">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label"><?= $this->lang->line('Mobile Number') ?></label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" name="mobile_no" value="<?=$user['mobile_no']?>" placeholder="Mobile No.">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="inputExperience" class="col-sm-2 control-label"><?= $this->lang->line('Address')?></label>

                        <div class="col-sm-10">
                          <textarea class="form-control" name="address" placeholder="Address"><?=$user['address']?></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label"><?= $this->lang->line('Pincode')?> </label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" name="pincode" value="<?=$user['pincode']?>" placeholder="Pincode">
                        </div>
                      </div>



                      <div class="form-group">
                        <label for="inputExperience" class="col-sm-2 control-label"><?= $this->lang->line('About')?></label>

                        <div class="col-sm-10">
                          <textarea class="form-control" name="about" placeholder="About Yourself"><?=$user['about']?></textarea>
                        </div>
                      </div>
                    

                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-danger"><?= $this->lang->line('Submit')?></button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div>
              <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-sm">
          <!-- Modal content-->
          <div class="modal-content">
            <form class="UploadForm">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="document_name"><?= $this->lang->line('Change Profile Photo')?></h4>
              </div>
              <div class="modal-body">
                <input type="file" required id="userImage">
              </div>
              <div class="modal-footer">
                <button type="button" id="change_profile" class="btn btn-info Upload"><?= $this->lang->line('Upload')?></button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><?= $this->lang->line('Close')?></button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- /.content-wrapper -->
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url('assets/js/loadingoverlay.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/loadingoverlay_progress.min.js');?>"></script>


<script>
function LoginWith(url){
  window.open(url, "popup", "width=800,height=500,left=220,top=130");
}

  $("#change_profile").click(function(){


    var file_data = $('#userImage').prop('files')[0];   

    var form_data = new FormData();
    form_data.append('userPhoto', file_data);
    var user_id = $('#admin_id').val();
    
    form_data.append('user_id',user_id);

    $.ajax({
             url:"<?php echo base_url('Profile/change_photo') ?>",
             type:"post",
             data:form_data,
             processData:false,
             contentType:false,
              success: function(data){
               window.location.reload();
           }
         });
    

    // $.ajax({
    //   dataType : "json",
    //   type : "post",
    //   data : form_data,
    //   url: '<?= base_url('Profile/change_photo');?>',
    //   success:function(data)
    //   {
    //     alert('success');
    //     if(data.status == 0)
    //     {
    //       $('#ErrorMessage').html('<span style="color:red;">'+data.message+'</span>');
    //     }
    //     if(data.status == 1)
    //     {
    //       $('#ErrorMessage').html(data.message);
    //       $('.profileImgUrl').attr('src',data.picture_url);
    //     }
    //   },

    //   error: function (jqXHR, status, err) {
    //     alert('error');
    //     $('#ErrorMessage').html('<span style="color:red;">Local error callback.</span>');
    //   }
    // });
  //} //else
  });
 
 

  
 $(".UpdateDetails").submit('on',function(e){
  e.preventDefault();
 
            // $("#element_overlap1").LoadingOverlay("show");

              $.ajax({
              dataType : "json",
              type : "post",
              data : $(".UpdateDetails").serialize(),
              
              url: '<?=base_url('Profile/user_update_profile_data');?>',
              success:function(data)
                {
                  
                  if(data.status == 0)
                  {
                    $('#ErrorMessageU').html('<span style="color:red;">'+data.message+'</span>');
                  }
                  if(data.status == 1)
                  {
                      $('#ErrorMessageU').html(data.message);
                      $('.NameEdt').html(data.updateName);
                      
                  }
              },
              error: function (jqXHR, status, err) {
                $('#ErrorMessageU').html('<span style="color:red;">Local error callback.</span>');
              }
          });
          //} //else
 });
 
 </script>
  