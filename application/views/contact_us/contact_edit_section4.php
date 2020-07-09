<div class="dashboard-wrapper">
   <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="ecommerce-widget">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <h5 class="card-header">Email Content</h5>
                            <div class="card-body p-0">
                                <div class="container-fluid">
                                   <div class="row justify-content-center">
                                      <div class="col-lg-12">
                                         <div class="card">
                                            <div class="card-body">
                                               <div class="table-responsive">
                                                  <div class="form-validation">
                                                     <form class="form-valide" action="<?php echo base_url('ContactContent/save_section4')?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                                        <div class="form-group row">
                                                           <label class="col-md-3 col-form-label" for="val-username">Email Title<span class="text-danger">*</span>
                                                           </label>
                                                           <div class="col-md-9">
                                                              <input type="text" class="form-control" id="title" name="email_title" value="<?php echo $edit_section4[0]['email_title']?>">
                                                           </div> 
                                                        </div>
                                                        <div class="form-group row">
                                                           <label class="col-md-3 col-form-label" for="val-password">Brief Desciption <span class="text-danger">*</span>
                                                           </label>
                                                           <div class="col-md-9">
                                                              <textarea class="tinymce" name="email_content" id="texteditor" ><?php echo $edit_section4[0]['email_content']?></textarea>
                                                              <input type="hidden" name="id" value="<?php echo $edit_section4[0]['id']?>">
                                                           </div>
                                                        </div>
                                                        <div class="form-group row">
                                                           <div class="col-lg-9 ml-auto">
                                                           <button type="submit" class="btn btn-primary">Submit</button> 
                                                           </div>
                                                        </div>
                                                     </form>
                                                 </div>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
 CKEDITOR.replace( 'texteditor' );
</script>