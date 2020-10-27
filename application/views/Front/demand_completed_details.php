<?php $this->load->view('Front/common/header');  ?>
<?php
	$obj = &get_instance();
	$obj->load->model('Front/Posts_model');
	$id = $this->uri->segment(4);

	$self_user_id = $this->session->userdata['id'];
	//$profile_url = $obj->RegisterModel->PictureUrl();

	$all_comments = $this->db->query("select project_status.* from project_status where project_id=" . $id . " and client_id=" . $self_user_id)->result_array();

//$profile_url = $obj->RegisterModel->PictureUrl();
	$mission = $this->db->query("select * from mission  where mission_id=".$id)->row();
	$comment = $this->db->query("select project_status.*,users.picture_url from project_status INNER JOIN users ON project_status.user_id =users.id where project_id=".$id . " order by id desc")->row();

	$obj->load->model('Front/User');
	$self_user = $obj->User->getSelfUser();
//print_r($user);die();

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
					<div class="row demand_details_profile_img">
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
			</div>
			<div class="col-md-6 comt_box">
				<div class="row post_demand_inner_row" style="min-height:20px;">
					<div class="col-md-2">
						<div class="demand_details_profile_img">
							<a href="<?php echo base_url('Front/home/heelper_profile/' . $mission->accepted_by)?>">
								<img src="<?php echo base_url('uploads/profiles/');?><?php echo $comment->picture_url?>" style="margin-top:-10px;">
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
						<h4>Heelper Comment</h4>
					</div>
				</div>
				<br>
				<div class="row" style="padding-left:30px;">
					<?php if($comment->your_comments) { ?>
					<div class="demand_details_content">							
						<?php echo $comment->your_comments?>
					</div>
				</div><br>
				<div class="row" style="padding-left:30px;">
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
				<?php } 
				else{ ?>
				<div class="row demand_details_upload_btn">
					<p>No Data to Display</p>
				</div>
				<?php }?>	
			</div>				
			</div>
			</div>
		</div>
		<div class="row">
			
		</div>
	</div>
</section>

 <!-- The Modal -->
  <div class="modal" id="modify">
    <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>      
      </div>
    </div>
  </div>
<!-- release payment -->


<?php $this->load->view('Front/common/footer');  ?>