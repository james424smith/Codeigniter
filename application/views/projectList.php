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
          <div class="card-header card-header-primary">
          <h3><?= $this->lang->line('Project List')?></h3>
          <p class="card-category"><?= $this->lang->line('Here is a subtitle for this table')?></p>
          </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="dtBasicExample" class="table table-striped  table-sm" cellspacing="0" width="100%">
                  <thead class=" text-primary">
                    <th><?=$this->lang->line('Id')?></th> 
                    <th><?=$this->lang->line('Title')?></th>
                    <th><?=$this->lang->line('Description')?></th>
                    <th><?=$this->lang->line('Budget')?></th>
                    <th><?=$this->lang->line('Picture')?></th> 
                    <th><?=$this->lang->line('Action')?></th> 
                  </thead>
                  
                  <tbody>
                    <?php  foreach($projectlist as $user){?>
                    <tr>
                      <td ><?php echo $user->project_id;?> </td>
                      <td><?php echo $user->title;?> </td>
                      <td> <?php echo $user->description;?> </td>
                      <td> <?php echo $user->budget;?> </td>
                    <!--   <td> <?php echo base_url($user->picture_url);?> </td> -->
                      
                       <td> <img width="83px" height="107px" src="<?= base_url() ?>uploads/project_image/<?= empty($user->picture_url)?'4.png2':$user->picture_url?>"  class="image" data-toggle="modal" data-target="#myModal"></td>

                       <td>
                      <a href='<?=base_url("ProjectList/edit_projectlist/$user->project_id");?>'><i class="fa fa-edit"></i></a>
                       <a href='<?php echo base_url("ProjectList/delete_projectrow/$user->project_id");?>'><i class="fa fa-trash"></i></a></td>

                    </tr>   
                      <?php }?>                 
                  </tbody>
                
                </table>
              </div>
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
    "pageLength": 5
   
  });
})
  
</script>





<!-- Modal -->
