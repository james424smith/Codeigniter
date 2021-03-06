<?php $this->load->view('Front/common/header');  ?>
<?php
	$obj = &get_instance();
	$obj->load->model('Front/Posts_model');
	$id = $this->uri->segment(4);

	$self_user_id = $this->session->userdata['id'];
	$all_comments = $this->db->query("select project_status.* from project_status where project_id=" . $id . " and user_id=" . $self_user_id)->result_array();

	$mission = $this->db->query("select * from mission  where mission_id=".$id)->row();

	$obj->load->model('Front/User');
	$self_user = $obj->User->getSelfUser();
	$client_user = $obj->User->getUserByID($mission->client_id);

?> 
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">

<section>
  <div class="top_bnr section post_demand">
    <div class="container">
      	<div class="top-side about_title">
		  <img src="<?php  echo base_url('assets/Front/img/Mission_dispute.png'); ?>"/>
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
					</div>
					 <p class="budget_details_p">
					 	<b>Budget: <?php echo $mission->budget;?></b> <i class="fas fa-euro-sign"></i>
						<b style="color:red;">&nbsp;&nbsp;&nbsp;Offre: <?php echo $mission->mission_budget;?> <i class="fas fa-euro-sign"></i></b>
					 </p>
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
			  </div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 text-center">
				<div class="demand_check_box" style="margin-left:-10px;">					
					<form action="<?php echo base_url('ChatController/claim_chat')?>" method="post">
						<input type="hidden" name="chat_customer" value="true">	
						<button type="submit" class="btn btn-default" >Messagerie Service client</button>&nbsp;&nbsp;
					</form>	
				</div>
			</div>
			<div class="col-md-6">
				<input type="hidden" id="close_url" value="<?php echo base_url('Front/Posts/close_dispute/' . $mission->mission_id . '/' . $mission->accepted_by . '/1' )?>">
				<?php
					//var_dump();die();
					$missionId = $mission->mission_id;
					$obj->load->model('Front/Posts_model');
					$isOpener = $obj->Posts_model->isDisputeOpener($missionId, $self_user_id);
				
					if ($isOpener) { 
				?>
					<button type="button" id="close_dispute" class="btn btn-default" >Fermer le litige</button>
				<?php } ?>	
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
<script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<script>
	$('#close_dispute').click(function(){
		//var warning = 'Are you sure you want to do this?';
		//if (confirm(warning)) {
		//	location.href = $("#close_url").val();
 		//}
		//else {
			// Do something else
			swal({
				title: "Nous sommes heureux d'apprendre de votre arrangement amical avec le Heelper !",
				text: "Si vous fermez le litige, votre Demande ou Mission serait à nouveau active.",				
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "Ok",
				cancelButtonText: "Annuler",
				closeOnConfirm: false
			},
			function(){
				  //swal("Deleted!", "Your imaginary file has been deleted.", "success");
				  location.href = $("#close_url").val();
			});
	});
</script>