<?php $this->load->view('Front/common/header');  ?>
<?php
	$obj = &get_instance();
	$obj->load->model('Front/Posts_model');
	$id = $this->uri->segment(4);
	//$profile_url = $obj->RegisterModel->PictureUrl();

	$self_user_id = $this->session->userdata['id'];
	//$profile_url = $obj->RegisterModel->PictureUrl();
	$all_comments = $this->db->query("select project_status.* from project_status where project_id=" . $id . " and client_id=" . $self_user_id)->result_array();


	$mission = $this->db->query("select mission.*,users.picture_url from mission inner join users on mission.accepted_by=users.id  where mission.mission_id=".$id)->row();
	$comment = $this->db->query("select project_status.* from project_status where project_id=".$id . " order by id desc")->row();
	/*echo "select project_status.* from project_status where project_id=".$id . " order by id desc";
	exit();*/
	$obj->load->model('Front/User');
	$self_user = $obj->User->getSelfUser();

	//print_r($user);die();

?> 

<section>
  <div class="top_bnr section post_demand">
    <div class="container">
      <div class="top-side about_title">
          <h4 class="title">Dispute</h4>
        </div>
    </div>
  </div>
</section>


<section class="demand_deails_section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 demand_border">
				<div class="demand_delivered_details">
					<div class=" row demand_details_profile_img">
						<div>	
							<a href="<?php echo base_url('Front/home/heelper_profile/' . $self_user_id)?>">
								<img src="<?php echo base_url('uploads/profiles/');?><?php echo $self_user[0]['picture_url']?>">
							</a><br>
							<span class="stars-container">★★★★★</span>
						</div>
						<h2 style="margin-top: 10px; margin-left: 10px;"><?php echo $mission->mission_title;?></h2>				
					</div>
					<br> 
					 <p class="top_details_p">
					 	<?php echo $mission->mission_description;?>
					 </p>
					 <div class="demand_details_upload_btn">
					 <a href="<?php if($mission->mission_doc){ echo base_url()?>Front/Posts/download/<?php echo $mission->mission_doc;}
								else { ?>#<?php }?>">
							<?php 
									if($mission->mission_doc) {
										echo $mission->mission_doc; 
									}
									else {
										echo "No Attached File";
									}
								?>	
								&nbsp;<i class="fas fa-download"></i>			
						</a>
						<!-- <a href="#">File Name <i class="fas fa-download"></i></a> -->
					</div>
					 <p class="budget_details_p">
					 	<b>Budget: <?php echo $mission->budget;?></b> <i class="fas fa-euro-sign"></i>
						<b style="color:red;">&nbsp;&nbsp;&nbsp;Offer: <?php echo $mission->mission_budget;?> <i class="fas fa-euro-sign"></i></b>

					 </p>
				</div>
				<div class="demand_check_box">
						<ul>
							<!-- <li>					
								<a href="#" class="btn btn-primery">Release Payment</a>
							</li>
 -->
							<!-- <li>							
								<a href="#" class="btn btn-default">Ask to Modify</a>
							</li> -->
							
						</ul>
					</div>
				
			</div>
			<div class="col-md-6">
				<div class="row post_demand_inner_row">
					<div class="col-md-2">
						<div class="demand_details_profile_img">
						<a href="<?php echo base_url('Front/home/heelper_profile/' . $mission->accepted_by)?>">
							<?php if($mission->picture_url){ ?>
								<img src="<?php echo base_url('uploads/profiles/');?><?php echo $mission->picture_url?>" style="margin-top:-10px;">
							<?php } 
							else { ?>
								<img src="<?php echo base_url('assets/Front/img/demand_profile.png');?>" style="margin-top:-10px;">

							<?php } ?>
							</a>
						</div>
					</div>
					<div class="col-md-10">
						<h4>Heelper Comment</h4>
					</div>
				</div>
				<div class="row">
					<?php if($comment->your_comments) { ?>
					<div class="demand_details_content">											
						<?php echo $comment->your_comments?>
					</div>
				</div>
				<div class="row">
					<div class="demand_details_upload_btn">	
						<?php foreach ($all_comments as $file_comment) { ?>
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
			  </div>
			</div>
		</div>
		<!-- <div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form action="<?php echo base_url('Front/Posts/inprogress')?>"  method="post" enctype="multipart/form-data">
				<div class="mission_inprogress_textarea">
					<label>Send a new Delivery</label>
					<textarea placeholder="My comment: I finished again " name="your_comments"></textarea>
				</div>			 	
				<div class="post_form_content">
					<div class="post_inner_upload_file">
						<input type="file" name="project_files">
						<span>+ Upload File Here</span>
					</div>
				</div>				
				<input type="hidden" name="client_id" value="<?php echo $mission->client_id;?>">
				<input type="hidden" name="project_status" value="<?php echo $mission->mission_status;?>">
				<input type="hidden" name="project_id" value="<?php echo $mission->mission_id;?>">
				<input type="hidden" name="date_created" value="<?php echo $mission->created;?>">
				<div class="claim_an_issue mission_inprogress_claimbtn">
						 <a href="#" class="btn btn-default" data-toggle="modal" data-target="#myModal2">
							Claim an issue
						</a> -->
						<!-- <button type="submit" class="btn btn-default"> submit </button>
				</div>
				</form>
			</div>
			<div class="col-md-2"></div>

		</div> -->
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
				<form action="<?php echo base_url('Front/Posts/inprogress_demand')?>" method="post">
					<div class="">
						<textarea placeholder="Description:" name="description"></textarea>
						<input type="hidden" name="project_id" value="<?php echo $mission->mission_id ?>">	
						<input type="hidden" name="title" value="<?php echo $mission->mission_title ?>">	
					</div>
					<button type="submit" class="btn btn-default">Retour</button>
				</form>

				<!-- <a href="#" class="btn btn-default">Retour</a> -->
			</div>
	    </div>                
      </div>
    </div>
  </div>

<!-- <div class="modal-pay" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
       
        <div class="modal-body">
			<div class="post_demand_details_popup">
				<h4>Release Payment</h4>				
				<form action="<?php echo base_url('Front/Posts/delivered_pay_demand')?>" method="post">
					<div class="">
						<textarea value="" readonly=""><?php echo $mission->mission_description ?></textarea>
						<input type="text" readonly="" name="mission_amount" value="<?php echo $mission->mission_budget ?>">
						<input type="text" name="amount_to_pay" value="">	
						<input type="hidden" name="pay_status" value="2">
						<input type="hidden" name="date_created" value="<?php echo $mission->created ?>">
						<input type="hidden" name="mission_status" value="<?php echo $mission->mission_status ?>">
						<input type="hidden" name="mission_id" value="<?php echo $mission->mission_id ?>">
						<input type="hidden" name="employer_id" value="<?php echo $mission->user_id ?>">		
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>

				
			</div>
	    </div>                
      </div>
 </div>
</div> -->
<?php $this->load->view('Front/common/footer');  ?>