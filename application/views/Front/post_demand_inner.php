<?php $this->load->view('Front/common/header');  ?>
<?php
	$obj=&get_instance();
	$obj->load->model('Front/Posts_model');
	$id =$this->uri->segment(4);
	//$profile_url = $obj->RegisterModel->PictureUrl();
	$user=$this->db->query("select * from project_category  where project_id=".$id)->row();
	//print_r($user);die();
?> 

<section>
  <div class="top_bnr section post_demand">
    <div class="container">
      <div class="top-side about_title">
          <h4 class="title">Post a Demand</h4>
        </div>
    </div>
  </div>
</section>
	
<section>
	<div class="container">			
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="post_demand_inner_form">
					<div class="post_demand_inner_profile">
					<img src="<?= base_url() ?>/uploads/project_image/<?php echo $user->picture_url ?>">
					<p><?php echo $user->title?></p>
				</div>
					<form action="<?php echo base_url('Front/Posts/demandpost/')?>" enctype="multipart/form-data" method="post">
						<div class="post_form_content post_form_content_title">
							<label>Title</label>
							<input type="text" placeholder="Title" name="title" required>
						</div>
						<div class="post_form_content post_form_content_budget">
							<label>Ton Budget ( € ) </label>
							<input type="text" class="number-input" id="integer" placeholder="Budget" name="budget" required>
						</div>
						<div class="post_form_content">
							<label>Description</label>
							<textarea name="description" placeholder="Description" required></textarea>
						</div>	
						<div class="post_form_content">
							<div class="post_inner_upload_file">
								<input type="file" name="file" id="file">
								<span>+ Upload File Here</span>
							</div>
						</div>
						<div class="post_form_content text-center">
							<span id="file-name" style="color:blue;">No File</span>
						</div>
						<input type="hidden"  name="project_category" value="<?php echo $id?>"> 
						
						<div class="post_demand_form_btn">
							<!-- <a href="#" class="btn btn-defult" data-toggle="modal" data-target="#myModal">Post Your Demand</a> -->
							  <button type="submit" class="btn btn-primary" >Post </button> 
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-2"></div>			
		</div>
	</div>
</section>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
			<div class="post_demand_popup">
				<img class="demand_popup_logo" src="<?php echo base_url('assets/img/heelp.png')?>">
				<h4>Confirmation</h4>
				<p>
					Demand posted succefully
				</p>
				<img class="demand_popup_right_img" src="<?php echo base_url('assets/img/right.png')?>">

				<a href="<?php echo base_url('home/mydemands')?>" class="btn btn-primary">Retour</a>
			</div>
	    </div>                
      </div>
    </div>
  </div>
<?php $this->load->view('Front/common/footer');  ?>
<script>
	$(document).ready(function(){
		$('#file').change(function (e) {
			//alert(e.target.files[0].name);
			$('#file-name').html(e.target.files[0].name);
		});

		document.getElementById("integer").addEventListener('input', restrictToInteger);
		function restrictToInteger() {
    		this.value = this.value.replace(/[^\d]/g, '');
		}
	});
</script>