
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
<?php if($this->session->flashdata('faild_send_email')){ ?>
  <script>
    swal("Incapable d'envoyer des emails.");
  </script> 
<?php } ?>
<div class="main-panel">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card ">
          <div class="card-header card-header-primary match-box">
          <h3><?= ('Contact List') ?></h3>
          <p class="card-category"><?= ('Here is a subtitle for this table')?></p>
          </div>
          
            <input type="hidden" id="second_password" value="<?php echo $selfadmin->second_password; ?>" >
            <div class="card-body table-responsive">
            <table  id="dtBasicExample" class="table table-striped table-sm" cellspacing="0" width="100%">
                  <thead class="text-primary" style="cursor:pointer;">
                            <th>id</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Admin Response</th>
                            <th>Mobile Number</th>
                            <th>Email</th>
                            <th>Action</th>
                    </thead>                                 
                    <tbody>
                        <?php
                        $num = 0; 
                        foreach ($contact_data as $row) { ?> 
                        <tr>
                            <td> <?php echo ++$num;?></td>                    
                            <td> <?php echo $row->title;?></td>
                            <td> 
                              <?php 
                                $show_text = $row->description;
                                if(strlen($show_text) > 20)
                                  $show_text = substr($show_text, 0, 20) . "...";
                                echo $show_text;
                              ?> 
                            </td>
                            <td> 
                              <?php 
                                $show_text = $row->response;
                                if(strlen($show_text) > 20)
                                  $show_text = substr($show_text, 0, 20) . "...";
                                echo $show_text;
                              ?> 
                            </td>
                            <td> <?php echo $row->number;?></td>
                            <td> <?php echo $row->email;?></td></td>
                            <td><a href='<?=base_url("ContactContent/edit_section1/$row->id");?>'><i class="fa fa-edit"></i></a> 
                             <a href='<?php echo base_url("ContactContent/delete_contact/$row->id");?>'><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>  
                        <?php } ?>         
                    </tbody>
                </table>
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
    "pageLength": 10
   
  });
})

</script>





<!-- Modal -->
