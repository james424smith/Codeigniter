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
                                        <th>Images</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                  <?php foreach ($our_team as $row) { ?> 
                                <tbody>
                                    <tr>
                                        <td> <?php echo $row->id;?></td>
                                        <td> <?php echo $row->team_title;?></td>
                                        <td> <?php echo $row->team_content;?></td>
                                        <td> <img class="img_admin_img" src="<?= base_url() ?>uploads/about/<?= $row->team_image ?>"></td>
                                        <td><a href='<?=base_url("AboutContent/edit_section1/$row->id");?>'><i class="fa fa-edit"></i></a> 
                                        <a href='<?=base_url("AboutContent/delete_row/$row->id");?>'><i class="fa fa-trash"></i></a>
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