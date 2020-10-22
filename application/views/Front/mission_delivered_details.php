<?php $this->load->view('Front/common/header');  ?>
<?php
	$obj = &get_instance();
	$obj->load->model('Front/Posts_model');
	$id = $this->uri->segment(4);
	//$profile_url = $obj->RegisterModel->PictureUrl();
	$mission = $this->db->query("select * from mission  where mission_id=".$id)->row();
	$comment = $this->db->query("select project_status.*,users.picture_url from project_status INNER JOIN users ON project_status.user_id =users.id where project_id=".$id)->row();

	$obj->load->model('Front/User');
	$self_user = $obj->User->getSelfUser();
	//var_dump($mission);die();

?> 

<section>
  <div class="top_bnr section post_demand">
    <div class="container">
      <div class="top-side about_title">
          <h4 class="title">Delivered</h4>
        </div>
    </div>
  </div>
</section>


<section class="demand_deails_section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 demand_border">
				<div class="demand_delivered_details">
					 <h2><?php echo $mission->mission_title;?></h2>
					 <p class="top_details_p">
					 	<?php echo $mission->mission_description;?>
					 </p>
					 <p class="budget_details_p">
					 	<b>Budget: <?php echo $mission->budget;?></b> <i class="fas fa-euro-sign"></i>
					 </p>
				</div>
				
			</div>
			<div class="col-md-6">
				<div class="row post_demand_inner_row">
				<div class="col-md-2">
					<div class="demand_details_profile_img">
						<img src="<?php echo base_url('uploads/profiles/');?><?php echo $self_user[0]['picture_url']?>">
					</div>
				</div>
				<div class="col-md-10">
					<div class="demand_details_content">
						<h4>Heelper Comment</h4>
						<p>
							<?php echo $comment->your_comments; ?>
						</p>
					</div>
					<div class="demand_details_upload_btn">
						<a href="<?php if($comment->project_files){ echo base_url()?>Front/Posts/download/<?php echo $comment->project_files; }
								else { ?>#<?php }?>"><?php echo $comment->project_files ?> <i class="fas fa-download"></i> => Last Version </a>
					</div>		
					<div class="claim_an_issue">
						<p>Waiting for a new delivery</p>
						<!-- <a href="#" class="btn btn-default"  data-target="#myModal2">
							Claim an issue
						</a> -->
						<button type="submit" class="btn btn-default" data-toggle="modal"> Claim an issue </button>
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
				<h4>Do you want to open a dispute?</h4>
				<p>
					Si oui merci de préciser la nature du problème

					Si non,  pour toute autre demande merci de nous écrire via
					 
					la page de contact en cliquant ici: <a href="#" class="btn btn-primary">Contact Here</a>
				</p>
				<form action="<?php echo base_url('Front/Posts/delivered_mission')?>" method="post">
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


<?php $this->load->view('Front/common/footer');  ?>