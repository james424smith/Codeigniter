  <style>
    input#image {
    /* margin: -4px 9px 12px 45px; */
    padding: 0px 13px 30px 80px;
    margin: -5px 2px 2px -53px;
}
input.btn.btn-info {
    margin: -18px 12px -4px 101px;
}
</style>
  <div class="main-panel">
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
              <h4 class="card-title"><?= $this->lang->line('Add Project')?></h4>
              <p class="card-category"></p>

              <form method="post" id="import_form" enctype="multipart/form-data" style="float:right;">
                <p><label>Bulk Upload</label>
                <input type="file" name="file" id="file" required accept=".xls, .xlsx" /></p>
                <br />
                <input type="submit" name="import" value="Import" class="btn btn-info" />
             </form>

              </div>
              <div class="card-body">
                <form  name="project" class="form-valide" action="<?php echo base_url('Project/addProject/')?>" enctype="multipart/form-data" method="post" accept-charset="utf-8" id="upload_form">
                  <div class="row">

                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating"><?= $this->lang->line('Title')?></label>
                        <input type="text" class="form-control" name="title" required="">
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating"><?= $this->lang->line('Your Budget')?></label>
                        <input type="textarea" class="form-control" name="budget" required="">
                      </div>
                    </div>

                  

                  </div>

                  <div class="row">
                    <div class="col-md-10">
                      <div class="form-group">
                        <label><?= $this->lang->line('Description')?></label>
                        <div class="form-group">
                          <textarea class="form-control" rows="5" name="description" required=""></textarea>
                        </div>
                      </div>
                    </div>

                    <div class= "col-md-10">
                      <div class="input-group mt-3">
                        <label class="bmd-label-floating" ><?= $this->lang->line('Uploads File')?></label>
                      <!--   <i class="material-icons">image</i> -->
                        <input type="file"  id="image" name="picture_url" >
                      </div>
                    </div>

                  </div>
                  <button type="submit" class="btn btn-primary pull-right"><?= $this->lang->line('Publish your request')?></button>
                  <div class="clearfix"></div>
                </form>
              </div>
            </div>
          </div>

        </div>
      </div>      
    </div>
  </div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script>
  $(document).ready(function() {
   
  $('#import_form').on('submit', function(event){

    event.preventDefault();
    $.ajax({
    url:"<?php echo base_url(); ?>Project/import",
    method:"POST",
    data:new FormData(this),
    contentType:false,
    cache:false,
    processData:false,
    success:function(data)
    {
    $('#file').val('');
    //console.log(data);
    window.location.href="<?= base_url() ?>projectList";
    }
    })
  });


  $(function() {

  $("form[name='project']").validate({
  // Specify validation rules
  rules: {
  title: "required",
  picture_url: "required",
  budget:"required",
  description:"required",
  check:"required"
  },
  // Specify validation error messages
  messages: {
  title: "Please Enter Title",
  picture_url: "Please Upload Image",
  budget: "Please Your Budget",
  description: "Please Your Description",


  },
  submitHandler: function(form) 
  {
  if($('#file_id').val() == '')  
  {
    $('#errors').html('<p>File is required</p>');
    $("#errors").css({'color':'red','font-weight':'bold'});
  }  
  else 
  {
    form.submit();
  }
  }

  });
  });


  })

</script>