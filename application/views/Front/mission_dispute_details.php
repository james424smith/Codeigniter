<?php $this->load->view('Front/common/header');  ?>
<?php
	$obj = &get_instance();
	$obj->load->model('Front/Posts_model');
	$id = $this->uri->segment(4);

	$self_user_id = $this->session->userdata['id'];
	$all_comments = $this->db->query("select project_status.* from project_status where project_id=" . $id . " and user_id=" . $self_user_id)->result_array();

//$profile_url = $obj->RegisterModel->PictureUrl();
	$mission = $this->db->query("select * from mission  where mission_id=".$id)->row();
//print_r($user);die();
	$client_user = $obj->User->getUserByID($mission->client_id);

?> 

<section>
  <div class="top_bnr section post_demand">
    <div class="container">
      <div class="top-side about_title">
          <h4 class="title">Completed</h4>
        </div>
    </div>
  </div>
</section>

<section class="demand_deails_section mission_complete">
	<div class="container"> 
		<div class="row">
			<div class="col-md-6 demand_border">
				<div class="demand_delivered_details">
					<div class=" row demand_details_profile_img">
						<a href="<?php echo base_url('Front/home/heelper_profile/' . $mission->client_id)?>">
							<img src="<?php echo base_url('uploads/profiles/');?><?php echo $client_user->picture_url?>">
						</a>
						<h2 style="margin-top: 10px; margin-left: 10px;"><?php echo $mission->mission_title;?></h2>				
					</div>
					<br>
					 <p class="top_details_p">
					 	<?php echo $mission->mission_description;?>
					 </p>
					 <div class="demand_details_upload_btn">
						<a href="<?php if($mission->mission_doc){ echo base_url()?>Front/Posts/download/<?php echo $mission->mission_doc;}
								else { ?>#<?php }?>">File Name <i class="fas fa-download"></i></a>
						<!-- <a href="#">File Name <i class="fas fa-download"></i></a> -->
					</div>
					 <p class="budget_details_p">
					 	<b>Budget: <?php echo $mission->budget;?></b> <i class="fas fa-euro-sign"></i>
						<b style="color:red;">&nbsp;&nbsp;&nbsp;Offer: <?php echo $mission->mission_budget;?> <i class="fas fa-euro-sign"></i></b>

					 </p>
				</div>
					
			</div>
			<div class="col-md-6 comt_box">
				<div class="row post_demand_inner_row">
					<div class="col-md-2">
						<div class="demand_details_profile_img">
							<img src="<?php echo base_url('assets/Front/img/demand_profile.png')?>" style="margin-top:-10px;">
						</div>
					</div>
					<div class="col-md-10">
						<div class="demand_details_content">
							<h4>Heelper Comment</h4>
						</div>
					</div>
				</div>
				<?php foreach ($all_comments as $each_comment) { ?>
				<div class="row" style="padding-left:20px;">
					<div class="demand_details_content">
						<?php echo $each_comment['your_comments']; ?>
					</div>
				</div><br>
				<div class="row" style="padding-left:20px;">
					<div class="demand_details_upload_btn">							
						<a href="<?php if($each_comment['project_files']){ echo base_url()?>Front/Posts/download/<?php echo $each_comment['project_files']; }
								else { ?>#<?php } ?>"> 
							<?php 
								if($each_comment['project_files'])
									echo $each_comment['project_files'] . " <i class='fas fa-download'></i>";
							?>
						</a>						
					</div>
				</div> <hr>
				<?php } ?>
	
			  </div>
			</div>
		</div>
		<div class="row">
			
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
				<form >
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