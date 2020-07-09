<div class="main-panel">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card ">
          <div class="card-header card-header-primary">
          <h3><?= $this->lang->line('User List') ?></h3>
          <p class="card-category"><?= $this->lang->line('Here is a list of Demands') ?> </p>
          </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th><?= $this->lang->line('ID') ?></th>
                    <th><?= $this->lang->line('Title') ?></th>
                    <th><?= empty($this->lang->line('Category'))?'Category': $this->lang->line('Category') ?></th>
                    <th><?= $this->lang->line('Description') ?></th>
                    <th><?= $this->lang->line('Budget') ?></th>
<!--                     <th>File</th>
 -->                    <th><?= $this->lang->line('Image') ?></th>
                    <th><?= $this->lang->line('Action') ?></th>
                    

                  </thead>
                  <?php  foreach($demandlist as $demand){?>
                  <tbody>
                    <tr>
                      <td><?php echo $demand->id;?></td>
                      <td><?php echo $demand->title;?> </td>
                      <td><?php echo $demand->Project_cat;?> </td>
                      <td> <?php echo $demand->description;?> </td>
                      <td> <?php echo $demand->budget;?> </td>
              <!--         <td> <?php echo $demand->file;?> </td> -->
                      
                      <td> <img width="50px" height="50px" src="<?= base_url() ?>uploads/profiles/<?= empty($demand->image)?'4.png':$demand->image ?>"/> </td>
                    
                       <td>
                      <a href='<?=base_url("User/edit_Userlist/$demand->id");?>'><i class="fa fa-edit"></i></a> 
                      <a href='<?php echo base_url("User/delete_row_demand/$demand->id");?>'><i class="fa fa-trash"></i></a>
                       </td>
                    </tr>                    
                  </tbody>
                  <?php }?>
                </table>
              </div>
            </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
</div>
