<style>
  .modal-content {
    width: 625px;
    height: 600px;
    margin-top: 114px;
}
div#dtBasicExample_length {
    margin-left: 19px;
}
</style>
   
<div class="main-panel">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card ">
          <div class="card-header card-header-primary match-box">
          <h3><?= ('Withdraw Payment List') ?></h3>
          <p class="card-category"><?= ('Here is a subtitle for this table')?></p>
          </div>
          <form method="post" action="<?php echo base_url('withdrawpaymentList/export_csv')?>">
            <div class="from_to_date_picker">               
                <ul>
                    <li><label>From Date:</label> <input type="date" name="from_date" id="from_date" value="" required=""></li>
                    <li><label>To Date:</label> <input type="date" name="to_date" id="to_date" value="" required=""> </li>
                    <li><input type="submit" name="export" class="export_btn" id="export" value="Export"></li>
                </ul>
            </div>
         </form>
            <div class="card-body table-responsive">
                <table id="dtBasicExample" class="table table-striped  table-sm" cellspacing="0" width="100%">
                  <thead class=" text-primary">
                    <!-- <th><?=('id')?></th>  -->
                    <th><?=('Date of Request')?></th>
                    <th><?=('Project Id')?></th>
                    <th><?=('Mission Status')?></th> 
                    <th><?=('Amount to Pay')?></th>
                    <th><?=('Employer')?></th>
                    <th><?=('Employee')?></th> 
                    <th><?=('Pay Status')?></th>
                    <th><?=('Action')?></th>
                  </thead>
                  
                  <tbody>
                    <?php 
                     foreach($withdrawpaymentlist as $user){ 
                        $newDate = date("dmy", strtotime($user->date_created));
                        $invID = str_pad($user->mission_id, 5, '0', STR_PAD_LEFT);
                    ?>
                  <tr>
                      <td><?php echo date("d-m-Y", strtotime($user->date_created)); ?> </td>
                      <td> <?php echo $newDate . "0000:" . $invID;?>
                      <td> 
                        <?php 
                          if($user->mission_status == 0) 
                          { echo "Proposed";} 
                          else if($user->mission_status == 1) 
                          { echo "In Progress";}  
                          else if($user->mission_status == 2) 
                          { echo "Delivered";}  
                          else if($user->mission_status == 3) 
                          { echo "Completed";}  
                          else if($user->mission_status == 4) 
                          { echo "Dispute";} 
                        ?> 
                      </td>
                      <td> <?php echo "€" . $user->amount_to_pay;?> </td>
                      <td> 
                        <?php
                          $this->db->select("username");
                          $this->db->from("users");
                          $this->db->where('id', $user->employer_id);
                          $data = $this->db->get()->result();
                          echo $data[0]->username;
                        ?>
                      </td>
                      <td> <?php
                          $this->db->select("username");
                          $this->db->from("users");
                          $this->db->where('id', $user->emplyee_id);
                          $data = $this->db->get()->result();
                          echo $data[0]->username;?>
                      </td> 
                          <?php
                          //var_dump($value['pay_status']);die();
                          if($user->pay_status == 1)
                          {
                              $pay_status = "Paid";
                          }
                          else
                          {
                              $pay_status = "Unpaid";
                          }
                        ?>
                      <td> <?php echo $pay_status;?> </td>
                      <td>
                        <a href='<?=base_url("withdrawpaymentList/edit_withdrawpayment/$user->id");?>' onclick="return confirm('Are you sure you want to edit this item?');"><i class="fa fa-edit"></i></a>
                        <a href='<?php echo base_url("withdrawpaymentList/delete_withdrawpayment/$user->id");?>'><i class="fa fa-trash" onclick="return confirm('Are you sure you want to delete this item?');"></i></a></td>
                    </tr>   
                    <?php }?>                 
                  </tbody>                
                </table>
            </div>
            <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

            <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                  <img src="" width="100%" height="inherit" id="target_element"> </div>
                </div>
                <!-- <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div> -->
              </div>
            </div>
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
  $(document).ready(function(){
    $('.image').click(function(){
      var image = $(this).attr('src');
      $('#target_element').attr('src',image);
      // $('#target_element').attr('width','300px');
      // $('#target_element').attr('height','300px');
  });

  $('#dtBasicExample').DataTable({
    "paging": true, // false to disable pagination (or any other option)
    "pageLength": 10   
    });
  });  
</script>
<!-- Modal -->
