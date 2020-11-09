    <div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <div class="row">                  
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card_admin">
                    <div class="card-body">
                        <div class="table-responsive">
                           <table id="example3" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Title</th>
                                        <th>Description</th>                                       
                                        <th>Profile</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                  <?php foreach ($data_Services as $row) { ?> 
                                <tbody>
                                    <tr>
                                        <td> <?php echo $row->id;?></td>                    
                                        <td> <?php echo $row->title;?></td>
                                        <td> <?php echo $row->description;?></td>                                        
                                        <td> <img class="img_admin_img" src="<?= base_url() ?>uploads/posts/<?= $row->profile_image ?>"></td>
                                        <td><a href='<?=base_url("HomeContent/edit_demand/$row->id");?>'><i class="fa fa-edit"></i></a> 
                                         <a href='<?php echo site_url("HomeContent/delete_demand_post/$row->id");?>'><i class="fa fa-trash"></i></a> 
                                        </td>
                                    </tr>          
                                </tbody>
                                <?php } ?>                                   
                            </table>
                        </div>
                    </div>
                </div>
            </div>                   
        </div>
    </div>          
</div>