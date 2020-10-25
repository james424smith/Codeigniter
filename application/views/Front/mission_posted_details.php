
 <?php $this->load->view('Front/common/header');  ?>
 <?php
	$obj = &get_instance();
	$obj->load->model('Front/Posts_model');
	$id = $this->uri->segment(4);
	$user_id = $this->session->userdata['id'];
	$demands = $obj->Posts_model->mission_posted($id, $user_id);
 //$user_id = $value['user_id'];
	$avg = $this->Posts_model->selectAvgOfRating($user_id);

	$count = 0;
	$total = 0;
	for($j = 0; $j < count($avg); $j ++)
	{
		$total += $avg[$j]->rating;
		$count++;
	}
	if($count != 0)
	{
		$av =$total/$count;
		$user_detail = number_format($av, 2, '.', '');
	}
	else
	{
		$user_detail = 0;
	}
	if($user_detail == 0)
	{
		$class_star = "stars-0";
	}
	elseif($user_detail == 0.50)
	{
		$class_star = "stars-10";
	}
	elseif($user_detail == 1.00)
	{
		$class_star = "stars-20";
	}
	elseif($user_detail == 1.50)
	{
		$class_star = "stars-30";
	}
	elseif($user_detail == 2.00)
	{
		$class_star = "stars-40";
	}
	elseif($user_detail == 2.50)
	{
		$class_star = "stars-50";
	}
	elseif($user_detail == 3.00)
	{
		$class_star = "stars-60";
	}
	elseif($user_detail == 3.50)
	{
		$class_star = "stars-70";
	}
	elseif($user_detail == 4.00)
	{
		$class_star = "stars-80";
	}
	elseif($user_detail == 4.50)
	{
		$class_star = "stars-90";
	}
	elseif($user_detail == 5.00)
	{
		$class_star = "stars-100";
	}
 ?>


<section>
  <div class="top_bnr section post_demand">
    <div class="container">
      <div class="top-side about_title">
          <h4 class="title">Proposed</h4>
        </div>
    </div>
  </div>
</section>

<section class="demand_posted_details mymission">
	<div class="section portfolio">
		<main id="main" class="container">

		  	<ul class="tabs_list">

		  		<?php foreach ($demands as $value) { ?>
		  				
			    <li class="project option-1">
				    <div class="col-md-6 all corporate">
			          <div class="item row">
			          	<div class="col-md-3 img_box">
						  	<?php
								$url = $value['picture_url'];
								if($url == "")
									$url = "default.png";
							?>
							<a href="<?php echo base_url('Front/home/heelper_profile/' . $value['user_id'])?>">
							  <img src="<?php echo base_url('uploads/profiles/' . $url) ;?>" alt="<?php echo  $value['username']; ?>" style="border-radius:70px !important;">
				  			</a>
			          	</div>            
			            <div class="col-md-9 cat_content">
			        		<p class="cat_date"><?php echo  $value->created_date; ?></p>
			                <h5>
								<?php 
									$show_text = $value['message'];
									if(strlen($show_text) > 30)
										$show_text = substr($show_text, 0, 30) . "...";
									echo $show_text;
								?>
							</h5>

							<a href="" data-toggle="modal" data-target="#myModal<?php echo $value['offer_id'];?>">read more</a><hr>
							<!-- The Modal -->
							<div class="modal fade" id="myModal<?php echo $value['offer_id'];?>">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">
										<!-- Modal Header -->
										<div class="modal-header" style="background-color: #5cb85c;">
										<h4 class="modal-title">Mission</h4>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>
										
										<!-- Modal body -->
										<div class="modal-body">
											<P>
												Proposals
											</p>
											<form action="<?php echo base_url('Front/Posts/mission_update')?>" enctype="multipart/form-data" method="post">
											<div class="from-group">
												<Label><h6>Description</h6></Label>
												<textarea class="form-control" name="message"><?php echo $value['message']; ?></textarea>
											</div>
											<br>  
											<div class="from-group">
												<Label><h6>Offer Budget</h6></Label>
												<input type="text" class="form-control" name="offer_budget" value="<?php echo $value['offer_budget']; ?>">
				  							</div>
											  <input type="hidden" class="form-control" name="mission_id" value="<?php echo $id; ?>">
										</div>
										
										<!-- Modal footer -->
										<div class="modal-footer">
										<button type="submit" class="btn btn-secondary">Update</button>
				  						</form>
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>

			                <span><b>Offer:</b> € <?php echo $value['offer_budget']; ?></span>
			                <div><span class="stars-container <?php echo $class_star;?>">★★★★★</span></div>

			              	<div class="row">
			              		<div class="col-md-6 profile_img">
					            </div>		            
			              	</div>	              
			            </div>	            
			          </div>
		           </div>
			    </li>
			   <?php } ?>
		  	</ul>
		</main>
	</div>
</section>

<?php $this->load->view('Front/common/footer');  ?>