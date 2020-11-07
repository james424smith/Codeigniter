<?php $this->load->view('Front/common/header');  ?>
<?php
	$obj = &get_instance();
	$obj->load->model('Front/Posts_model');
	$id = $this->uri->segment(4);
	
	$self_user_id = $this->session->userdata['id'];
	$all_comments = $this->db->query("select project_status.* from project_status where project_id=" . $id . " and user_id=" . $self_user_id)->result_array();
	
	$mission = $this->db->query("select * from mission  where mission_id=" . $id)->row();
	$comment = $this->db->query("select project_status.*,users.picture_url from project_status INNER JOIN users ON project_status.user_id =users.id where project_id=".$id)->row();

	//var_dump($all_comments); die();

	$obj->load->model('Front/User');
	$self_user = $obj->User->getSelfUser();
	//var_dump($mission);die();
	$client_user = $obj->User->getUserByID($mission->client_id);

?> 

<section>
  <div class="top_bnr section post_demand">
    <div class="container">
      	<div class="top-side about_title">
		  	<img src="<?php  echo base_url('assets/Front/img/Mission_delivred.png'); ?>"/>
        </div>
    </div>
  </div>
  <hr>
</section>

<section class="demand_deails_section">
	<div class="container">
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
						<?php echo $mission->mission_description;?>
					</p>
					<p class="budget_details_p">
					 	<b>Budget: <?php echo $mission->budget;?></b> <i class="fas fa-euro-sign"></i>
						<b style="color:red;">&nbsp;&nbsp;&nbsp;Offre: <?php echo $mission->mission_budget;?> <i class="fas fa-euro-sign"></i></b>
					</p>
				</div>
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
				</div>
			</div>
			<div class="col-md-6">
				<div class="row post_demand_inner_row" style="min-height:30px;">
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
						<h4>Mon commentaire</h4>
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
				<div class="row" style="padding-left:10px;">				
					<div class="claim_an_issue">
						<a href="<?php echo base_url("Front/home/mission_inprogress_details/" . $id) ?>" class="btn btn-default">
							Livrable
						</a> &nbsp;&nbsp;&nbsp;
						 <a href="#" class="btn btn-default" data-toggle="modal" data-target="#myModal2">
						 	Ouvrir un litige
						</a>
						<!--<button type="submit" class="btn btn-default" data-toggle="modal"> Claim an issue </button>-->
					</div>	
				</div>				
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
				<h4>Etes vous sûr de vouloir ouvrir un litige ?</h4>
				<p>
					Si vous souhaitez ouvrir un litige, veuillez renseigner le champs de description.
					Pour toute autre demande merci de nous écrire vie le formulaire de contact en cliquant ici: 
					<a href="<?php echo base_url('Front/contact')?>" class="btn btn-primary">Contactez ici</a>
				</p>
				<form action="<?php echo base_url('ChatController/claim_chat')?>" method="post">
					<div class="">
						<textarea placeholder="Déscription..." name="comment"></textarea>
						<input type="hidden" name="user_id" value="<?php echo $self_user[0]['id'] ?>" >	
						<input type="hidden" name="project_id" value="<?php echo $mission->mission_id ?>" >
						<input type="hidden" name="description" value="<?php echo $mission->description ?>" >	
						<input type="hidden" name="title" value="<?php echo $mission->mission_title ?>">	
						<input type="hidden" name="user_email" value="<?php echo $self_user[0]['email'] ?>" >
						<input type="hidden" name="mission_client" value="<?php echo $mission->client_id ?>" >
						<input type="hidden" name="mission_status" value="<?php echo $mission->mission_status ?>">
						<input type="hidden" name="mission_dispute" value="mission_dispute">
					</div>
				<!-- <a href="#" class="btn btn-default">Retour</a> -->
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-default" >OK</button>&nbsp;&nbsp;
				</form>	
				<button type="button" class="btn btn-default" data-dismiss="modal" >Retour</button>
		</div>                
	    </div>                
      </div>
    </div>
  </div>


<?php $this->load->view('Front/common/footer');  ?>