
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
                <table id="dtBasicExample" class="table table-striped  table-sm" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Admin Response</th>
                            <th>Mobile Number</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>                                 
                    <tbody>
                        <?php foreach ($contact_data as $row) { ?> 
                        <tr>
                            <td> <?php echo $row->id;?></td>                    
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
                            <!--  <a href='<?php //echo site_url("post_list/delete_row/$row->id");?>'><i class="fa fa-trash"></i></a> -->
                            </td>
                        </tr>  
                        <?php } ?>         
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
    "pageLength": 10
   
  });
})

</script>





<!-- Modal -->
