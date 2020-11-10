<?php $this->load->view('Front/common/header');?>

<?php
	$obj = &get_instance();
	$obj->load->model('Front/Posts_model');
	$id = $this->uri->segment(4);
	
	$self_user_id = $this->session->userdata['id'];
	//$profile_url = $obj->RegisterModel->PictureUrl();
	$all_comments = $this->db->query("select project_status.* from project_status where project_id=" . $id . " and client_id=" . $self_user_id)->result_array();

	
	$mission = $this->db->query("select mission.*,users.picture_url from mission inner join users on mission.accepted_by=users.id  where mission.mission_id=".$id)->row();
	$comment = $this->db->query("select project_status.* from project_status where project_id=".$id . " order by id desc")->row();
	//var_dump($mission);die();
	//$project_offer = $this->db->query("select * from project_offer where project_id=".$mission->mission_id)->row();
	$obj->load->model('Front/User');
	$self_user = $obj->User->getSelfUser();
	$class_star = $obj->User->getRatingClassName($user_id);
?> 

<section>
  <div class="top_bnr section post_demand">
    <div class="container">
      <div class="top-side about_title">
	  		<img src="<?php  echo base_url('assets/Front/img/demand_in_progress.png'); ?>"/>
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
						<h4 style="margin-top: 10px; margin-left: 10px;"><?php echo $mission->mission_title;?></h4>				
					</div>
					<br>
					<div class="row">
					 	<p class="top_details_p">
					 		<?php echo $mission->description;?>
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
					<br>
					 <p class="budget_details_p">
						<b>Budget: <?php echo $mission->budget;?></b> <i class="fas fa-euro-sign"></i>
						<b style="color:red;">&nbsp;&nbsp;&nbsp;Offre: <?php echo $mission->mission_budget;?> <i class="fas fa-euro-sign"></i></b>
					 </p>
				</div><br>
				<div class="demand_check_box">
					<ul>
						<li>							
							<a href="#" class="btn btn-default" style="width:250px;" id="modify">Demander une modification</a>
						</li>						
					</ul>
				</div>				
			</div>
			<div class="col-md-6">
				<div class="row post_demand_inner_row">
					<div class="col-md-2">
						<div class="demand_details_profile_img">
							<a href="<?php echo base_url('Front/home/heelper_profile/' . $mission->accepted_by)?>" >
							<?php if($mission->picture_url){ ?>
								<img src="<?php echo base_url('uploads/profiles/');?><?php echo $mission->picture_url?>">
							<?php } 
							else { ?>
								<img src="<?php echo base_url('assets/Front/img/demand_profile.png');?>">
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
					<p>
						<?php echo $each_comment['your_comments'] ?>
					</p>
				</div>
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
				<?php  } ?>
				<div class="row claim_an_issue" style="padding-left:10px;">
					<a href="#" class="btn btn-default" data-toggle="modal" data-target="#myModal2">
						Ouvrir un litige
					</a>
				</div>				
			</div>
			</div>
			
			<div class="col-md-2"></div>
		</div> 				
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
				<h4>Etes vous sûr de vouloir ouvrir un litige ?</h4>
				<p>
				Si vous souhaitez ouvrir un litige, veuillez renseigner le champs de description.
				Pour toute autre demande merci de nous écrire vie le formulaire de contact en cliquant ici:  <a href="<?php echo base_url('Front/contact')?>" class="btn btn-primary">Contact ici</a>
				</p>
				<form action="<?php echo base_url('ChatController/claim_chat')?>" method="post">
					<div class="">
						<textarea placeholder="La description..." name="comment" required></textarea>
						<input type="hidden" name="description" value="<?php echo $mission->description ?>">	
						<input type="hidden" name="user_id" value="<?php echo $mission->accepted_by ?>">	
						<input type="hidden" name="project_id" value="<?php echo $mission->mission_id ?>">	
						<input type="hidden" name="title" value="<?php echo $mission->mission_title ?>">	
						<input type="hidden" name="user_email" value="<?php echo $self_user[0]['email'] ?>">
						<input type="hidden" name="mission_status" value="<?php echo $mission->mission_status ?>">

					</div>
			</div>
		</div>
		<div class="modal-footer">
			<button type="submit" class="btn btn-default" >OK</button>&nbsp;&nbsp;
			</form>	
			<button type="submit" class="btn btn-default" data-dismiss="modal" >Retour</button>
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
					<button type="submit" class="btn btn-default">OK</button>
				</form>

				
			</div>
	    </div>                
      </div>
 </div>
</div> -->
<?php $this->load->view('Front/common/footer');  ?>
<script>
	$("#modify").click(function(){
		swal("Votre demande de modification a été envoyée avec succès.");
	});
</script>