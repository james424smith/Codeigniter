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
		  <img src="<?php  echo base_url('assets/Front/img/Demand_in_dispute.png'); ?>"/>
        </div>
    </div>
  </div><hr>
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
							<?php
								$class_star = $obj->User->getRatingClassName($self_user_id); 
							?>
							<a href="<?php echo base_url('Front/home/review_profile/' . $self_user_id)?>">
								<span class="stars-container <?php echo $class_star; ?>">★★★★★</span>
							</a>
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
										echo "Aucune pièce jointe";
									}
								?>	
								&nbsp;<i class="fas fa-download"></i>			
						</a>
						<!-- <a href="#">File Name <i class="fas fa-download"></i></a> -->
					</div><br>
					 <p class="budget_details_p">
					 	<b>Budget: <?php echo $mission->budget;?></b> <i class="fas fa-euro-sign"></i>
						<b style="color:red;">&nbsp;&nbsp;&nbsp;Offre: <?php echo $mission->mission_budget;?> <i class="fas fa-euro-sign"></i></b>
					 </p>
				</div><br>
				<div class="demand_check_box" style="margin-left:-10px;">					
					<form action="<?php echo base_url('ChatController/claim_chat')?>" method="post">
						<input type="hidden" name="chat_customer" value="true">	
						<button type="submit" class="btn btn-default" >discuter avec le service client</button>&nbsp;&nbsp;
					</form>	
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
							<?php
								$class_star = $obj->User->getRatingClassName($mission->accepted_by); 
							?>
							<a href="<?php echo base_url('Front/home/review_profile/' . $mission->accepted_by)?>">
								<span class="stars-container <?php echo $class_star; ?>">★★★★★</span>
							</a>
						</div>
					</div>
					<div class="col-md-10">
						<h4>Commentaire du Heelper</h4>
					</div>
				</div>
				<?php foreach ($all_comments as $each_comment) { ?>
				<div class="row" style="padding-left:20px;">
					<?php if($each_comment['your_comments']) { ?>
					<div class="demand_details_content">											
						<?php echo $each_comment['your_comments']; }?>
					</div>
				</div><br>
				<div class="row" style="padding-left:20px;">
					<div class="demand_details_upload_btn">	
						<a href="<?php if($each_comment['project_files']){ echo base_url()?>Front/Posts/download/<?php echo $each_comment['project_files']; }
							else { ?>#<?php }?>">
							<?php 
								if($each_comment['project_files'])
									echo $each_comment['project_files'] . " <i class='fas fa-download'></i>";
							?> 
						</a>
					</div>
				</div><hr>
				<?php } ?>				
			  </div>
			</div>
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
					 
					la page de contact en cliquant ici: <a href="#" class="btn btn-primary">Contactez ici</a>
				</p>
				<form action="<?php echo base_url('Front/Posts/inprogress_demand')?>" method="post">
					<div class="">
						<textarea placeholder="La description..." name="description"></textarea>
						<input type="hidden" name="project_id" value="<?php echo $mission->mission_id ?>">	
						<input type="hidden" name="title" value="<?php echo $mission->mission_title ?>">	
					</div>
					<button type="submit" class="btn btn-default">Retour</button>
				</form>
			</div>
	    </div>                
      </div>
    </div>
  </div>

<?php $this->load->view('Front/common/footer');  ?>