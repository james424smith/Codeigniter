
<div class="main-panel">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card ">
          <div class="card-header card-header-primary">
          <h3><?= ('User List') ?></h3>
          <p class="card-category"><?= ('Here is a subtitle for this table')?></p>
          </div>
          <form method="post" action="<?php echo base_url('table/export_csv')?>">
            <div class="from_to_date_picker">             
              <ul>
                <li><label>From Date:</label> <input type="text" name="from_date" id="from_date" value="" required=""></li>
                <li><label>To Date:</label> <input type="text" name="to_date" id="to_date" value="" required=""> </li>
                <li><input type="submit" name="export" class="export_btn" id="export" value="Export"></li>
              </ul>
            </div>
          </form>
        <script type="text/javascript">
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
        </script>

            <div class="card-body">
              <div class="table-responsive">
                <table  id="dtBasicExample" class="table table-striped  table-sm" cellspacing="0" width="100%">
                  <thead class=" text-primary">
                    <th><?= ('Date of profile creation')?></th>
                    <th><?= ('First Name')?></th>
                    <th><?= ('Last Name')?></th>
                    <th><?= ('Email')?></th>
                    <th><?= ('User Profile Picture')?></th>
                    <th><?= ('Date of Birth')?></th>
                    <th><?= ('University/School')?></th>
                    <th><?= ('Country')?></th>
                    <th><?= ('Profile Rate')?></th>
                    <th><?= ('Total earned amount')?></th>
                    <th><?= ('Current Balance (wallet)')?></th>
                    <th><?= ('stripe_customer_id')?></th>
                    <th><?= ('stripe_card_id')?></th>
                    <th><?= ('Action')?></th>

                  </thead>
                 
                  <tbody>

                     <?php  foreach($userlist as $user){?>
                    <tr>
                      <td><?php echo date("d-m-Y", strtotime($user->date_updated)); ?></td>
                      <td><?php echo $user->first_name;?> </td>
                      <td> <?php echo $user->last_name;?> </td>
                      <td> <?php echo $user->email;?> </td>
                      <td> <img width="50px" height="50px" src="<?= base_url() ?>uploads/profiles/<?= empty($user->picture_url)?'4.png':$user->picture_url ?>"/> </td>
                      <td> <?php echo $user->dob;?> </td>
                      <td> <?php echo $user->school_address;?> </td>
                      <td> <?php echo $user->country;?> </td>
                      <td> <?php echo $user->Profile_Rate;?> </td>
                      <td> <?php echo $user->Total_earned_amount;?> </td>
                      <td> <?php echo $user->Current_Balance;?> </td>
                      <td> <?php echo $user->stripe_customer_id;?> </td>
                       <td> <?php echo $user->stripe_card_id;?> </td>
                        <td><a href='<?=base_url("table/edit_users/$user->id");?>' onclick="return confirm('Are you sure you want to edit this item?');"><i class="fa fa-edit"></i></a>
                          <a href='<?php echo base_url("Table/block_row/$user->id");?>' onclick="return confirm('Are you sure you want to block this item?');"><i class="fa fa-ban" <?php if($user->block == 1){ ?> style="color: red"<?php }?> ></i></a>
                          <a href='<?php echo base_url("Table/delete_row/$user->id");?>' onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i></a></td> 
                       
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
</div>



<!-- <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->


<script>
// Basic example
$(document).ready(function () {
  $('#dtBasicExample').DataTable({
    "paging": true, // false to disable pagination (or any other option)
    "pageLength": 10
   
  });
 
  $('.dataTables_length').addClass('bs-select');

  

  })




</script>