<?php //var_dump($demandslist);die(); ?>
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
  
</style>
<div class="main-panel">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card ">
          <div class="card-header card-header-primary match-box">
          <h3><?= ('Demands List') ?></h3>
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
                <table id="dtBasicExample" class="table table-striped table-sm" cellspacing="0" width="100%">
                  <thead class="text-primary" style="cursor: pointer;">
                  	<th><?=('No')?></th> 
                    <th><?=('Creation date')?></th> 
                    <th><?=('Project Id')?></th>
                    <th><?=('Category')?></th>
                    <th><?=('Title')?></th>
                    <th><?=('Description')?></th> 
                    <th><?=('Current Status')?></th> 
                    <th><?=('Owner')?></th>
                    <th><?=('Hired Person')?></th> 
                    <th><?=('Budget')?></th>
                    <th><?=('Offer')?></th>
                    <th><?=('Paid')?></th>
                    <th><?=('Action')?></th>
                  </thead>
                  
                  <tbody>
                    <?php 
                     $idx = 0;
                      foreach($demandslist as $user) {
                        $newDate = date("dmy", strtotime($user->created_date));
                        $invID = str_pad($user->mission_id, 5, '0', STR_PAD_LEFT);

                      ?>
                  <tr>
                  <td style="width:15px !important;"> <?php echo ++ $idx; ?>	</td>
                  <td><?php echo date("d-m-Y", strtotime($user->created_date)); ?> </td>
                  <td><?php  echo $newDate . $invID; ?> </td>
                  <td><?php echo $user->category_title;?> </td>
                  <td><?php echo $user->mission_title;?> </td>
                  <td>
                    <?php 
									    $show_text = $user->description;
									    if(strlen($show_text) > 15)
										    $show_text = substr($show_text, 0, 15) . "...";
									    echo $show_text;
								    ?> 
                  </td>
                  <td><?php  if($user->mission_status==0) { echo "Posted"; } if($user->mission_status==1) { echo "In Progress"; } if($user->mission_status==2) { echo "Delivered"; } if($user->mission_status==3) { echo "Completed"; } if($user->mission_status==4) { echo "Dispute"; } ?> </td>
                  <td> 
                    <?php
                      $this->db->select("email");
                      $this->db->from("users");
                      $this->db->where('id', $user->client_id);
                      $data = $this->db->get()->result();
                      echo $data[0]->email;
                    ?>
                  </td>
                  <td> 
                    <?php
                      $this->db->select("email");
                      $this->db->from("users");
                      $this->db->where('id', $user->accepted_by);
                      $data = $this->db->get()->result();
                      echo $data[0]->email;
                    ?> 
                  </td>
                  <td><?php echo $user->budget; ?></td>
                  <td>
                      <?php 
                        $this->db->select("offer_budget");
                        $this->db->from("project_offer");
                        $this->db->where('project_id', $user->mission_id);
                        $this->db->where('user_id', $user->accepted_by);
                        $data = $this->db->get()->result();
                        echo $data[0]->offer_budget; ?>
                  </td>
                  <td>
                      <?php 
                        $this->db->select("amount_to_pay");
                        $this->db->from("withdrawpayment");
                        $this->db->where('mission_id', $user->mission_id);
                        $this->db->where('emplyee_id', $user->accepted_by);

                        $data = $this->db->get()->result_array();
                        if(count($data) != 0)
                          echo $data[0]['amount_to_pay'];
                        else
                          echo '0'; 
                    ?>
                    </td>
                    <td>
                      <a onclick="onClickEditUser(<?=$user->mission_id?>)">
                        <input type="hidden" id="<?php echo "edit_url" . $user->mission_id?>" value="<?=base_url("demandsList/edit_demands/$user->mission_id");?>">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a onclick="onClickDeleteUser(<?=$user->mission_id?>)">
                        <input type="hidden" id="<?php echo "delete_url" . $user->mission_id?>" value="<?php echo base_url("demandsList/delete_demands/$user->mission_id");?>">
                        <i class="fa fa-trash"></i>
                      </a>
                    </td>
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
    })

    $('#dtBasicExample').DataTable({
      "paging": true, // false to disable pagination (or any other option)
      "pageLength": 10,   
    });
  });

  function onClickEditUser(idx)
  { 
    var pwd = $('#second_password').val();
    var str = prompt("What's your second password?");
    if(str == pwd)
      location.href = $('#edit_url' + idx).val();
  }
  function onClickDeleteUser(idx)
  {
    var pwd = $('#second_password').val();
    var str = prompt("Are you sure to delete this user?");
    if(str == pwd)
      location.href = $('#delete_url' + idx).val();
  }

</script>





<!-- Modal -->
