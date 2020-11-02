<?php $this->load->view('Front/common/header');  ?>
<?php
	$obj = &get_instance();
	$obj->load->model('Front/Posts_model');
	$id = $this->uri->segment(4);

//$profile_url = $obj->RegisterModel->PictureUrl();
	$demands=$obj->Posts_model->demand_posted($id);
	//var_dump($id);die();
	foreach ($demands as $value) {
		$demands_froeac1[] = array('offer_id'=>$value['offer_id'],'message'=>$value['message'],'project_id'=>$value['project_id'],'user_id'=>$value['user_id'],'status'=>$value['status'],'accept_budget'=>$value['accept_budget'],'offer_budget'=>$value['offer_budget'],'created_date'=>$value['created_date'],'accept_status'=>$value['accept_status'],'client_id'=>$value['client_id'],'username'=>$value['username'],'picture_url'=>$value['picture_url'],'sort'=>'note');
	}
	$demands1 = $obj->Posts_model->demand_posted2($id);

	foreach ($demands1 as $value) {
		$demands_froeac2[] = array('offer_id'=>$value['offer_id'],'message'=>$value['message'],'project_id'=>$value['project_id'],'user_id'=>$value['user_id'],'status'=>$value['status'],'accept_budget'=>$value['accept_budget'],'offer_budget'=>$value['offer_budget'],'created_date'=>$value['created_date'],'accept_status'=>$value['accept_status'],'client_id'=>$value['client_id'],'username'=>$value['username'],'picture_url'=>$value['picture_url'],'sort'=>'budget');
	}

	$demands2 = $obj->Posts_model->demand_posted3($id);

	foreach ($demands2 as $value) {
		$demands_froeac3[] = array('offer_id'=>$value['offer_id'],'message'=>$value['message'],'project_id'=>$value['project_id'],'user_id'=>$value['user_id'],'status'=>$value['status'],'accept_budget'=>$value['accept_budget'],'offer_budget'=>$value['offer_budget'],'created_date'=>$value['created_date'],'accept_status'=>$value['accept_status'],'client_id'=>$value['client_id'],'username'=>$value['username'],'picture_url'=>$value['picture_url'],'sort'=>'date');
	}
	if($demands_froeac1 != null && $demands_froeac2 != null && $demands_froeac3 != null)
		$arr3 = array_merge($demands_froeac1, $demands_froeac2, $demands_froeac3);

?>
<section>
  <div class="top_bnr section post_demand">
    <div class="container">
      	<div class="top-side about_title">
	  		<img src="<?php  echo base_url('assets/Front/img/Posted demand.PNG'); ?>"/>
    	</div>
    </div>
  </div>
</section>

<section class="demand_posted_details">
	<div class="section portfolio">
		<main id="main" class="container">
			<nav class="nav">
			    <a href="#" class="nav-item active" data-rel="option-1">Note</a>
			    <a href="#" class="nav-item" data-rel="option-2">Budget</a>
			    <a href="#" class="nav-item" data-rel="option-3">Date</a>
		  </nav>
		  <?php if (count($arr3) == 0) { ?>
				<div class="row text-center" style="margin-top:100px;">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<h4>No data to display</h4>
					</div>
					
				</div>
		  <?php } else { ?>
	
		  <ul class="tabs_list">
			<?php
				
			  	foreach($arr3 as $value)
		  		{
					if($value['sort'] == "note")
					{
						$class = "option-1";
					}
					elseif ($value['sort'] == "budget") {
						$class = "option-2";
						$style = "none";
					}
					elseif ($value['sort'] == "date") {
						$class = "option-3";
						$style = "none";
					}		  	 
			?>

			<?php 
				$user_id = $value['user_id'];
				$obj->load->model('Front/User');
				$class_star = $obj->User->getRatingClassName($user_id);				
 			?>
			    <li class="project <?php echo $class; ?>" style="display:<?php echo $style; ?>">
				    <div class="col-md-6 all corporate">
			          <div class="item row">
			          	<div class="col-md-3 img_box">
							<?php
								$url = $value['picture_url'];
								if($url == "")
									$url = "default.png";
							?>
							<a href="<?php echo base_url('Front/home/heelper_profile/' . $value['user_id'])?>">
							  	<img src="<?php echo base_url('uploads/profiles/' . $url) ;?>" alt="<?php echo  $value['username']; ?>" >
							  	<div>
								  	<a href="<?php echo base_url('Front/home/review_profile/' . $value['user_id'])?>">
							  			<span class="stars-container <?php echo $class_star;?>">★★★★★</span>
									</a>
								</div>
							</a> 
			          	</div>            
			            <div class="col-md-9 cat_content">
			        		<?php
                      			$now = time(); // or your date as well
                      			$your_date = strtotime($value['created_date']);
                      			$datediff = $now - $your_date;
                      		?>
                        <p class="cat_date"><?php echo round($datediff / (60 * 60 * 24)); ?> Days ago</p>			        		
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
											<h4 class="modal-title">Proposal</h4>
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>
										
										<!-- Modal body -->
										<div class="modal-body">
											<?php echo $value['message']; ?>
										</div>
										
										<!-- Modal footer -->
										<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
							<span><b>Offer:</b> <?php echo '€' . $value['offer_budget']; ?></span>
			              	<div class="row">	
			              		<div class="col-md-6 profile_img">
					            	<a href="<?php echo base_url('Front/Payment/acceptoffer/')?><?php echo $value['offer_id']?>" class= "accept_offer_btn">Accept Offer</a>
								</div>
								<div class="col-md-6 profile_img">
									<a href="<?php echo base_url('Front/home/heelper_profile/' . $value['user_id'])?>" id="chat_show" class="accept_offer_btn"> Discuss</a>
					            </div>		            
			              	</div>	              
			            </div>	            
			          </div>
		           </div>
			    </li>
			<?php } }?>
			  </ul>
		</main>
	</div>
</section>

<?php $this->load->view('Front/common/footer');  ?>
