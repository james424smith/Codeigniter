<div class="main-panel">
  <div class="content">
    <div class="container-fluid">
            <div class="ecommerce-widget">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <h5 class="card-header">Response</h5>
                            <div class="card-body p-0">
                                <div class="container-fluid">
                                   <div class="row justify-content-center">
                                      <div class="col-lg-12">
                                         <div class="card">
                                            <div class="card-body">
                                               <div class="table-responsive">
                                                  <div class="form-validation">
                                                     <form class="form-valide" action="<?php echo base_url('ContactContent/save_contact')?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                                        <input type="hidden" name="contact_id" value="<?= $edit_section1[0]['id']?>">
                                                        <div class="form-group row">
                                                           <label class="col-md-3 col-form-label" for="val-username">Title Of Contact <span class="text-danger">*</span>
                                                           </label>
                                                           <div class="col-md-9">
                                                              <input type="text" class="form-control" id="title" name="title" value="<?php echo $edit_section1[0]['title']?>">
                                                           </div> 
                                                        </div>
                                                        <div class="form-group row">
                                                           <label class="col-md-3 col-form-label" for="val-username">Mobile Number <span class="text-danger">*</span>
                                                           </label>
                                                           <div class="col-md-9">
                                                              <input type="number" class="form-control" id="mobile_number" name="mobile_number" value="<?php echo $edit_section1[0]['number']?>">
                                                           </div> 
                                                        </div>
                                                        <div class="form-group row">
                                                           <label class="col-md-3 col-form-label" for="val-username">Email<span class="text-danger">*</span>
                                                           </label>
                                                           <div class="col-md-9">
                                                              <input type="email" class="form-control" id="email" name="email" value="<?php echo $edit_section1[0]['email']?>">
                                                           </div> 
                                                        </div>
                                                        <div class="form-group row">
                                                           <label class="col-md-3 col-form-label" for="val-password">Contact Desciption <span class="text-danger">*</span>
                                                           </label>
                                                           <div class="col-md-9">
                                                              <textarea class="form-control" name="description"><?php echo $edit_section1[0]['description']?></textarea>
                                                           </div>
                                                        </div>
                                                        <div class="form-group row">
                                                           <label class="col-md-3 col-form-label" for="val-password">Admin Response
                                                           </label>
                                                           <div class="col-md-9">
                                                              <textarea class="form-control" name="response"><?php echo $edit_section1[0]['response']?></textarea>
                                                           </div>
                                                        </div>
                                                        <div class="form-group row">
                                                           <div class="col-lg-9 ml-auto">
                                                           <button type="submit" class="btn btn-primary">OK</button> 
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