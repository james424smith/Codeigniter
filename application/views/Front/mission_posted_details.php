
 <?php $this->load->view('Front/common/header');  ?>
 <?php
$obj=&get_instance();
$obj->load->model('Front/Posts_model');
$id =$this->uri->segment(4);
$user_id = $this->session->userdata['id'];
$demands=$obj->Posts_model->mission_posted($id,$user_id);

 //$user_id = $value['user_id'];
$avg = $this->Posts_model->selectAvgOfRating($user_id);

            $count = 0;
            $total = 0;
            for($j=0;$j<count($avg);$j++)
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
          <h4 class="title">Posted</h4>
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
			          		<img src="https://www.alphawizz.com/Freelance/uploads/profiles/<?php echo $value['picture_url']; ?>" alt="<?php echo  $value['username']; ?>">
			          	</div>            
			            <div class="col-md-9 cat_content">
			        		<p class="cat_date"><?php echo  $value->created_date; ?></p>
			                <h5><?php echo $value['message'];?></h5>
			                <span><b>Offer:</b> € <?php echo $value['offer_budget']; ?></span>
			                <div><span class="stars-container <?php echo $class_star;?>">★★★★★</span></div>

			              	<div class="row">
			              		<!-- <div class="col-md-6 make_btn">
					            	<a href="#" class="discuss_btn_cat">Discuss</a>
					            </div>	 -->
			              		<div class="col-md-6 profile_img">
					            </div>		            
			              	</div>	              
			            </div>	            
			          </div>
		           </div>
			    </li>
			   <?php } ?>
			    <!-- <li class="project option-1">
				    <div class="col-md-6 all corporate">
			          <div class="item row">
			          	<div class="col-md-3 img_box">
			          		<img src="https://www.alphawizz.com/Heelp_admin/uploads/ae02fb24c057129c98cd261bb1098470.png" alt="Work 1">
			          	</div>            
			            <div class="col-md-9 cat_content">
			        		<p class="cat_date">2 Days ago</p>
			                <h5>I can do the job for you</h5>
			                <span><b>Offer:</b> 100€</span>
			              	<div class="row">
			              		<div class="col-md-6 make_btn">
					            	<a href="#" class="discuss_btn_cat">Discuss</a>
					            </div>	
			              		<div class="col-md-6 profile_img">
					            </div>		            
			              	</div>	              
			            </div>	            
			          </div>
		           </div>
			    </li>
			    <li class="project option-1">
				    <div class="col-md-6 all corporate">
			          <div class="item row">
			          	<div class="col-md-3 img_box">
			          		<img src="https://www.alphawizz.com/Heelp_admin/uploads/ae02fb24c057129c98cd261bb1098470.png" alt="Work 1">
			          	</div>            
			            <div class="col-md-9 cat_content">
			        		<p class="cat_date">2 Days ago</p>
			                <h5>I can do the job for you</h5>
			                <span><b>Offer:</b> 100€</span>
			              	<div class="row">
			              		<div class="col-md-6 make_btn">
					            	<a href="#" class="discuss_btn_cat">Discuss</a>
					            </div>	
			              		<div class="col-md-6 profile_img">
					            </div>		            
			              	</div>	              
			            </div>	            
			          </div>
		           </div> 
			    </li>
			    <li class="project option-1">
				    <div class="col-md-6 all corporate">
			          <div class="item row">
			          	<div class="col-md-3 img_box">
			          		<img src="https://www.alphawizz.com/Heelp_admin/uploads/ae02fb24c057129c98cd261bb1098470.png" alt="Work 1">
			          	</div>            
			            <div class="col-md-9 cat_content">
			        		<p class="cat_date">2 Days ago</p>
			                <h5>I can do the job for you</h5>
			                <span><b>Offer:</b> 100€</span>
			              	<div class="row">
			              		<div class="col-md-6 make_btn">
					            	<a href="#" class="discuss_btn_cat">Discuss</a>
					            </div>	
			              		<div class="col-md-6 profile_img">
					            </div>		            
			              	</div>	              
			            </div>	            
			          </div>
		           </div>
			    </li>
			    <li class="project option-1">
				    <div class="col-md-6 all corporate">
			          <div class="item row">
			          	<div class="col-md-3 img_box">
			          		<img src="https://www.alphawizz.com/Heelp_admin/uploads/ae02fb24c057129c98cd261bb1098470.png" alt="Work 1">
			          	</div>            
			            <div class="col-md-9 cat_content">
			        		<p class="cat_date">2 Days ago</p>
			                <h5>I can do the job for you</h5>
			                <span><b>Offer:</b> 100€</span>
			              	<div class="row">
			              		<div class="col-md-6 make_btn">
					            	<a href="#" class="discuss_btn_cat">Discuss</a>
					            </div>	
			              		<div class="col-md-6 profile_img">
					            </div>		            
			              	</div>	              
			            </div>	            
			          </div>
		           </div>
			    </li>
			    <li class="project option-1">
				    <div class="col-md-6 all corporate"> 
			          <div class="item row">
			          	<div class="col-md-3 img_box">
			          		<img src="https://www.alphawizz.com/Heelp_admin/uploads/ae02fb24c057129c98cd261bb1098470.png" alt="Work 1">
			          	</div>            
			            <div class="col-md-9 cat_content">
			        		<p class="cat_date">2 Days ago</p>
			                <h5>I can do the job for you</h5>
			                <span><b>Offer:</b> 100€</span>
			              	<div class="row">
			              		<div class="col-md-6 make_btn">
					            	<a href="#" class="discuss_btn_cat">Discuss</a>
					            </div>	
			              		<div class="col-md-6 profile_img">
					            </div>		            
			              	</div>	              
			            </div>	            
			          </div>
		           </div>
			    </li> -->
		  	</ul>
		</main>
	</div>
</section>

<?php $this->load->view('Front/common/footer');  ?>