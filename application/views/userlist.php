
<div class="main-panel">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card ">
          <div class="card-header card-header-primary match-box">
          <h3><?= ('User List') ?></h3>
          <p class="card-category"><?= ('Here is a subtitle for this table')?></p>
          </div>
          <form method="post" action="<?php echo base_url('table/export_csv')?>">
            <div class="from_to_date_picker">             
              <ul>
                <li><label>From Date:</label> <input type="date" name="from_date" id="from_date" value="" required=""></li>
                <li><label>To Date:</label> <input type="date" name="to_date" id="to_date" value="" required=""> </li>
                <li><input type="submit" name="export" class="export_btn" id="export" value="Export"></li>
              </ul>
            </div>
          </form>
        <!--<script type="text/javascript">
          $(function () {
            $('#from_date').datetimepicker({
              format: 'DD/MM/YYYY'
            });
          });
          $(function () {
            $('#to_date').datetimepicker({
              format: 'DD/MM/YYYY'
            });
          });
        </script>-->
            <input type="hidden" id="second_password" value="<?php echo $selfadmin->second_password; ?>" >
            <div class="card-body table-responsive">
            
                <table  id="dtBasicExample" class="table table-striped table-sm" cellspacing="0" width="100%">
                  <thead class=" text-primary" style="cursor:pointer;">
                    <th><?= ('No')?></th>
                    <th><?= ('Creation Date')?></th>
                    <th><?= ('UserName')?></th>
                    <th><?= ('Email')?></th>
                    <th><?= ('Profile Picture')?></th>
                    <th><?= ('Country')?></th>
                    <th><?= ('Rate')?></th>
                    <th><?= ('Earned')?></th>
                    <th><?= ('Spent')?></th>

                    <th><?= ('Action')?></th>
                  </thead>

                  <tbody>
                     <?php
                      $no = 0;  
                      foreach($userlist as $user){?>
                    <tr>
  
                      <td><?php echo ++ $no; ?></td>
                      <td><?php echo date("d-m-Y", strtotime($user->date_updated)); ?></td>

                      <td> <?php echo $user->username;?> </td>
                      <td> <?php echo $user->email;?> </td>
                      <td> <img width="50px" height="50px" src="<?= base_url() ?>uploads/profiles/<?= empty($user->picture_url)?'4.png':$user->picture_url ?>"/> </td>
                      <td> <?php echo $user->country;?> </td>
                      <td> <?php echo $user->Profile_Rate;?> </td>
                      <td> <?php echo "€" . $user->Total_earned_amount;?> </td>
                      <td> <?php echo "€" . $user->spent;?> </td>
                      <td>
                          <a onclick="onClickEditUser(<?=$no?>)">
                            <input type="hidden" id="<?php echo "edit_url" . $no?>" value="<?=base_url("table/edit_users/$user->id");?>">
                            <input type="hidden" id="<?php echo "edit_url" . $no?>" value="<?=base_url("table/edit_users/$user->id");?>">
                          </a>
                          <a href="" data-toggle="modal" data-target="#myModal<?php echo $user->id;?>">
                            <i class="fa fa-eye"></i>
                          </a>
                             <!--modal-->
                              <div class="modal fade" id="myModal<?php echo $user->id;?>">
                                <div class="modal-dialog modal-dialog-centered">
                                  <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header" style="background-color: #5cb85c;">
                                      <img width="50px" height="50px" src="<?= base_url() ?>uploads/profiles/<?= empty($user->picture_url)?'4.png':$user->picture_url ?>"/>
                                      <span style="margin-top:10px; margin-left:20px; font-size:20px;"><?php echo $user->username; ?></span>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body" style="font-weight:bold;">
                                       <p>Creation Date : <span style="font-size:20px;"><?php echo date("d-m-Y", strtotime($user->date_updated)); ?></span></p>
                                       <p>First Name : <span style="font-size:20px;"><?php echo $user->first_name; ?></span></p>
                                       <p>Last Name : <span style="font-size:20px;"><?php echo $user->last_name; ?></span></p>
                                       <p>Username : <span style="font-size:20px;"><?php echo $user->username; ?></span></p>
                                       <p>Password : <span style="font-size:20px;"><?php echo '*********'; ?></span></p>
                                       <p>Email : <span style="font-size:20px;"><?php echo $user->email; ?></span></p>
                                       <p>Birthday : <span style="font-size:20px;"><?php echo $user->dob; ?></span></p>
                                       <p>University/School : <span style="font-size:20px;"><?php echo $user->school_address; ?></span></p>
                                       <p>Country : <span style="font-size:20px;"><?php echo $user->country; ?></span></p>
                                       <p>Rate : <span style="font-size:20px;"><?php echo $user->Profile_Rate; ?></span></p>
                                       <p>Earned : <span style="font-size:20px;"><?php echo "€" . $user->Total_earned_amount; ?></span></p>
                                       <p>Spent : <span style="font-size:20px;"><?php echo "€" . $user->spent; ?></span></p>
                                       <p>Strip_User_Id : <span style="font-size:20px;"><?php echo $user->stripe_customer_id; ?></span></p>
                                       <p>Strip_Card_Id : <span style="font-size:20px;"><?php echo $user->stripe_card_id; ?></span></p>
                                    </div>
                                    
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-primary" data-dismiss="modal"><?= ('Close')?></button>
                                    </div>
                                  </div>
                                </div>
                              </div>                    
                            <a onclick="onClickBlockUser(<?=$no?>)">
                              <input type="hidden" id="<?php echo "block_url" . $no?>" value="<?php echo base_url("Table/block_row/$user->id");?>">
                              <input type="hidden" id="<?php echo "block_status" . $no?>" value="<?php echo $user->block;?>">
                              <i class="fa fa-ban" <?php if($user->block == 1){ ?> style="color: red"<?php }?> ></i>
                            </a>
                            <a onclick="onClickDeleteUser(<?=$no?>)">
                              <input type="hidden" id="<?php echo "delete_url" . $no?>" value="<?php echo base_url("Table/delete_row/$user->id");?>">
                              <i class="fa fa-trash"></i>
                            </a>
                      </td>              
                    </tr>     
                    <?php }?>               
                  </tbody>       
                </table>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->


<script>
// Basic example
$(document).ready(function () {
  $('#dtBasicExample').DataTable({
    "paging": true, // false to disable pagination (or any other option)
    "pageLength": 10
   
  });
 
  $('.dataTables_length').addClass('bs-select');
});

function onClickEditUser(idx)
{
    var pwd = $('#second_password').val();
    //alert(pwd);
    var str = prompt("What's your second password?");
    if(str == pwd)
      location.href = $('#edit_url' + idx).val();
}
function onClickBlockUser(idx)
{
    var pwd = $('#second_password').val();
    var msg = "";
    if($('#block_status' + idx).val() == 0)
      msg = "Are you sure to block this user?";
    else
      msg = "Are you sure to remove block this user?";
    
    var str = prompt(msg);
    if(str == pwd)
      location.href = $('#block_url' + idx).val();
}  

function onClickDeleteUser(idx)
{
    var pwd = $('#second_password').val();
    var str = prompt("Are you sure to delete this user?");
    if(str == pwd)
      location.href = $('#delete_url' + idx).val();
}

</script>