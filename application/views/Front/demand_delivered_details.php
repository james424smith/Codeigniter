<?php $this->load->view('Front/common/header');  ?>
<?php
	$obj = &get_instance();
	$obj->load->model('Front/Posts_model');
	$id = $this->uri->segment(4);
//$profile_url = $obj->RegisterModel->PictureUrl();

	$self_user_id = $this->session->userdata['id'];
//$profile_url = $obj->RegisterModel->PictureUrl();

	$all_comments = $this->db->query("select project_status.* from project_status where project_id=" . $id . " and client_id=" . $self_user_id)->result_array();

	//var_dump()
	$mission = $this->db->query("select * from mission  where mission_id=".$id)->row();
	$comment = $this->db->query("select project_status.*,users.picture_url from project_status INNER JOIN users ON project_status.user_id =users.id where project_id=".$id. " order by id desc")->row();
	
	$amount_12 = ($mission->mission_budget * 12) / 100;
	$amount_with_tax = $get_offer_amount + 0.25;
	$total_amount = $mission->mission_budget + $amount_with_tax + $amount_12;
	//var_dump($total_amount);die();
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
					 <div class="demand_details_upload_btn">
						<a href="<?php if($mission->mission_doc){ echo base_url()?>Front/Posts/download/<?php echo $mission->mission_doc;}
								else { ?>#<?php }?>"><i class="fas fa-download"></i> No Attached file</a>
						<!-- <a href="#">File Name <i class="fas fa-download"></i></a> -->
					 </div>
					 <br>
					 <p class="budget_details_p">
					 	<b>Budget: <?php echo $mission->budget;?></b> <i class="fas fa-euro-sign"></i>
						<b style="color:red;">&nbsp;&nbsp;&nbsp;Offer: <?php echo $mission->mission_budget;?> <i class="fas fa-euro-sign"></i></b>
					 </p>
				</div>
				<div class="demand_check_box">
						<ul>
							<li>					
								<a href="#" class="btn btn-primery" data-toggle="modal" data-target="#myModalpayment">Release Payment</a>
							</li>

							 <li>							
								<a href="<?php echo base_url('Front/Posts/modify/'.$mission->mission_id)?>" class="btn btn-default">Ask to Modify</a>
							</li> 
							
						</ul>
					</div>				
			</div>
			<div class="col-md-6">
				<div class="row post_demand_inner_row">
				<div class="col-md-2">
					<div class="demand_details_profile_img">
						<?php if($comment->picture_url){ ?>
							<img src="<?php echo base_url('uploads/profiles/');?><?php echo $comment->picture_url?>">
						<?php } 
						else { ?>
							<img src="<?php echo base_url('assets/Front/img/demand_profile.png');?>">
						<?php } ?>
					</div>
				</div>
				<div class="col-md-10">
					<div class="demand_details_content">
						<h4>Heelper Comment</h4>						
						<p>
						<?php echo $comment->your_comments?>
						</p>
				
					</div>
					<div class="demand_details_upload_btn">	
						<?php foreach ($all_comments as $file_comment) { ?>
						<a href="<?php if($file_comment['project_files']){ echo base_url()?>Front/Posts/download/<?php echo $file_comment['project_files']; }
									else { ?>#<?php }?>"><?php echo $file_comment['project_files'] ?> <i class="fas fa-download"></i> </a>
						<?php } ?>
					</div>
					<div class="claim_an_issue">
						 <a href="#" class="btn btn-default" data-toggle="modal" data-target="#myModal2">
							Claim an issue
						</a>
					</div>	
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


<div class="container">
   <!-- Modal -->
  <div class="modal fade" id="myModalpayment" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        

        <div class="post_demand_details_popup">
        	 <button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4>Release Payment</h4>				
				<form action="<?php echo base_url('Front/Posts/delivered_pay_demand')?>" method="post">
					<div class="">
						<!-- <textarea value="" readonly=""><?php echo $mission->mission_description ?></textarea> -->
						<input type="hidden" readonly="" name="mission_amount" value="<?php echo $mission->mission_budget ?>">
						<input type="hidden" name="amount_to_pay" value="<?php echo $total_amount; ?>">	
						<input type="hidden" name="pay_status" value="2">
						<input type="hidden" name="date_created" value="<?php echo $mission->created ?>">
						<input type="hidden" name="mission_status" value="<?php echo $mission->mission_status ?>">
						<input type="hidden" name="mission_id" value="<?php echo $mission->mission_id ?>">
						<input type="hidden" name="employer_id" value="<?php echo $mission->user_id ?>">	
						 <P>
							<h5>I want to release payment.</h5>
						</p>
					</div>
					<button type="submit" class="btn btn-default">Confirmation</button>
				</form>

				<!-- <a href="#" class="btn btn-default">Retour</a> -->
			</div>

      </div>      
    </div>
  </div>  
</div>

<?php $this->load->view('Front/common/footer');  ?>