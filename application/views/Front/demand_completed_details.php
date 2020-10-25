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
					 <h2><?php echo $mission->mission_title;?></h2>
					 <p class="top_details_p">
					 	<?php echo $mission->mission_description;?>
					 </p>
					 <div class="demand_details_upload_btn">
						<a href="<?php if($mission->mission_doc){ echo base_url()?>Front/Posts/download/<?php echo $mission->mission_doc;}
								else { ?>#<?php }?>"><?php echo $mission->mission_doc?><i class="fas fa-download"></i></a>
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
						<a href="<?php echo base_url('Front/home/heelper_profile/' . $mission->accepted_by)?>">
							<img src="<?php echo base_url('uploads/profiles/');?><?php echo $comment->picture_url?>">
						</a>
						</div>
					</div>
					<div class="col-md-10">
						<?php if($comment->your_comments) { ?>
					<div class="demand_details_content">
						<h4>Heelper Comment</h4>						
						<p>
						<?php echo $comment->your_comments?>
						</p>
					</div>
					<?php if($comment->project_files) {
							$project_files_test = explode(",", $comment->project_files);
							foreach ($project_files_test as $value) {
							# code...
						?>
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
				<?php } } }
				else{ ?>
				<div class="demand_details_upload_btn">
					<p>No Data to Display</p>
				</div>
			<?php } ?>	
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
        <!-- Modal body -->
<!--         <div class="modal-body">
			<div class="post_demand_details_popup">
				<h4>Ask to Modify</h4>				
				<form >
					<div class="">
						<textarea placeholder="Description:"></textarea>
					</div>
				</form>

				<a href="#" class="btn btn-default">Retour</a>
			</div>
	    </div>   -->              
      </div>
    </div>
  </div>
<!-- release payment -->


<?php $this->load->view('Front/common/footer');  ?>