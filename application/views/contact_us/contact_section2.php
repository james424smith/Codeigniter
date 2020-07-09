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
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                  <?php foreach ($contact_data2 as $row) { ?> 
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td> <?php echo $row->address_title;?></td>
                                        <td> <?php echo $row->address_content;?></td>
                                        <td><a href='<?=base_url("ContactContent/edit_section2/$row->id");?>'><i class="fa fa-edit"></i></a> 
                                       <!--  <a href='<?php //echo site_url("post_list/delete_row/$row->id");?>'><i class="fa fa-trash"></i></a> -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td> <?php echo $row->call_us_title;?></td>
                                        <td> <?php echo $row->call_us_content;?></td>
                                        <td><a href='<?=base_url("ContactContent/edit_section3/$row->id");?>'><i class="fa fa-edit"></i></a> 
                                       <!--  <a href='<?php //echo site_url("post_list/delete_row/$row->id");?>'><i class="fa fa-trash"></i></a> -->
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>3</td>
                                        <td> <?php echo $row->email_title;?></td>
                                        <td> <?php echo $row->email_content;?></td>
                                        <td><a href='<?=base_url("ContactContent/edit_section4/$row->id");?>'><i class="fa fa-edit"></i></a> 
                                       <!--  <a href='<?php //echo site_url("post_list/delete_row/$row->id");?>'><i class="fa fa-trash"></i></a> -->
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