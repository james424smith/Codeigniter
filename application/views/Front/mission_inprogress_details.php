<?php $this->load->view('Front/common/header');  ?>
<?php
	$obj = &get_instance();
	$obj->load->model('Front/Posts_model');
	$id = $this->uri->segment(4);
	$self_user_id = $this->session->userdata['id'];

	$all_comments = $this->db->query("select project_status.* from project_status where project_id=" . $id . " and user_id=" . $self_user_id . " order by id desc")->result_array();
	$mission = $this->db->query("select * from mission  where mission_id=" . $id)->row();
	$comment = $this->db->query("select project_status.*,users.picture_url from project_status INNER JOIN users ON project_status.user_id =users.id where project_id=".$id)->row();
	
	$obj->load->model('Front/User');
	$self_user = $obj->User->getSelfUser();
	$client_user = $obj->User->getUserByID($mission->client_id);

?> 

<section>
  <div class="top_bnr section post_demand">
    <div class="container">
      	<div class="top-side about_title">
			<img src="<?php  echo base_url('assets/Front/img/Mission in progress.png'); ?>"/>
        </div>
    </div>
  </div>
  <hr>
</section>

<section class="demand_deails_section">
	<div class="container">
		<?php if($this->session->flashdata('error_send')){ ?>
			<div class="alert alert-danger">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				<strong>Error!</strong> <?php echo $this->session->flashdata('error_send'); ?>
			</div>
		<?php } ?>
		<?php if($this->session->flashdata('error_file')){ ?>
			<div class="alert alert-danger">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				<strong>Error!</strong> <?php echo $this->session->flashdata('error_file'); ?>
			</div>
		<?php } ?>
		<div class="row">
			<div class="col-md-6 demand_border">
				<div class="demand_delivered_details">
					<div class=" row demand_details_profile_img">
						<div>
							<a href="<?php echo base_url('Front/home/heelper_profile/' . $mission->client_id)?>">
								<img src="<?php echo base_url('uploads/profiles/');?><?php echo $client_user->picture_url?>">
							</a><br>
							<?php
								$class_star = $obj->User->getRatingClassName($mission->client_id); 
							?>
							<a href="<?php echo base_url('Front/home/review_profile/' . $mission->client_id)?>">
								<span class="stars-container <?php echo $class_star; ?>">★★★★★</span>
							</a>
						</div>
						<h4 style="margin-top: 10px; margin-left: 10px;"><?php echo $mission->mission_title;?></h4>				
					</div>
					<br>

					 <p class="top_details_p">
					 	<?php echo $mission->description;?>
					 </p>
					 <p class="budget_details_p">
					 	<b>Budget: <?php echo $mission->budget;?></b> <i class="fas fa-euro-sign"></i>
						<b style="color:red;">&nbsp;&nbsp;&nbsp;Offer: <?php echo $mission->mission_budget;?> <i class="fas fa-euro-sign"></i></b>
					 </p>
				</div>
				<div class="demand_details_upload_btn">
					<?php
						if(count($all_comments) > 0) 
						foreach ($all_comments as $file_comment) { ?>
						<a href="<?php if($file_comment['project_files']){ echo base_url()?>Front/Posts/download/<?php echo $file_comment['project_files']; }
								else { ?>#<?php }?>">
							<?php 
								if($file_comment['project_files'])
									echo $file_comment['project_files'] . " <i class='fas fa-download'></i>";
							?>
						</a>
					<?php } ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row post_demand_inner_row">
					<div class="col-md-2">
						<div class="demand_details_profile_img">
							<a href="<?php echo base_url('Front/home/heelper_profile/' . $self_user[0]['id'])?>">
								<img src="<?php echo base_url('uploads/profiles/');?><?php echo $self_user[0]['picture_url']?>" style="margin-top:-10px;">
							</a>
							<?php
								$class_star = $obj->User->getRatingClassName($self_user[0]['id']); 
							?>
							<a href="<?php echo base_url('Front/home/review_profile/' . $self_user[0]['id'])?>">
								<span class="stars-container <?php echo $class_star; ?>">★★★★★</span>
							</a>
						</div>
					</div>
					<div class="col-md-10">
						<div class="demand_details_content">
							<h4>My Comment</h4>						
						</div>
					</div>
				</div>
				<div class="row" style="padding-left:20px;">
					<?php echo $comment->your_comments?>
				</div><br>
				<div class="row" style="padding-left:20px;">
					<div class="demand_details_upload_btn">
						<?php
							if(count($all_comments) > 0) 
							foreach ($all_comments as $file_comment) { ?>
							<a href="<?php if($file_comment['project_files']){ echo base_url()?>Front/Posts/download/<?php echo $file_comment['project_files']; }
									else { ?>#<?php }?>"><?php echo $file_comment['project_files'] ?> <i class="fas fa-download"></i> </a>
						<?php } ?>
					</div>
				</div>				
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form action="<?php echo base_url('Front/Posts/inprogress')?>"  method="post" enctype="multipart/form-data">
					<div class="mission_inprogress_textarea">
						<label>Send a new Delivery</label>
						<textarea placeholder="My comment: I finished again " name="your_comments"></textarea>
					</div>			 	
					<div class="post_form_content">
						<div class="post_inner_upload_file">
							<input type="file" name="project_files" id="file">
							<span>+ Upload File Here</span>
						</div>
					</div>
					<div class="post_form_content text-center">
						<span id="file-name" style="color:blue;">No File</span>
					</div>				
					<input type="hidden" name="client_id" value="<?php echo $mission->client_id;?>">
					<input type="hidden" name="project_status" value="<?php echo $mission->mission_status;?>">
					<input type="hidden" name="project_id" value="<?php echo $mission->mission_id;?>">
					<input type="hidden" name="date_created" value="<?php echo $mission->created;?>">
					<div class="claim_an_issue mission_inprogress_claimbtn">
						<!-- <a href="#" class="btn btn-default" data-toggle="modal" data-target="#myModal2">
							Claim an issue
						</a> -->
					<button type="submit" class="btn btn-default"> Submit </button>
				</div>
				</form>
			</div>
			<div class="col-md-2"></div>

		</div>
	</div>
</section>

 <!-- The Modal -->
  <div class="modal" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
			<div class="post_demand_details_popup">
				<h4>Do you want to open a dispute?</h4>
				<p>
					Si oui merci de préciser la nature du problème

					Si non,  pour toute autre demande merci de nous écrire via
					 
					la page de contact en cliquant ici: <a href="#" class="btn btn-primary">Contact Here</a>
				</p>
				<form>
					<div class="">
						<textarea placeholder="Description:"></textarea>
					</div>
				</form>

				<a href="#" class="btn btn-default">Retour</a>
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
	});
</script>