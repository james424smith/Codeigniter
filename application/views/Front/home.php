
<?php $admin_url = $this->config->item('base_url'); ?>

<!-- banner_sec -->
<?php if($this->session->flashdata('success')){ ?>
  <script>
    swal("Registration has been done successfully");
  </script> 
<?php } ?>
<section class="banner_section">
    <div class="container">
        <div class="row">
          <?php foreach ($section_1 as $s1) {  ?>
            <div class="col-md-6">
                <div class="banner_sec">
                    <?php //print_r($value); die();?>
                  <h1><?php echo $s1['section_1_title'];?></h1>
                  <p><?php echo $s1['section_1_content'];?>
                  </p>
                </div>
            </div>
            <div class="col-md-6">
              <div class="banner_img_right">
                <img  src="<?= $admin_url ?>/uploads/home/<?php echo $s1['section_1_image']; ?>" alt="" title="">
              </div>
            </div>
            <?php } ?>  
        </div>
    </div>
</section>
<!-- banner_sec end-->
<!-- about_sec end -->

<!-- post_sec start-->
 <section class="find_bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="post_title">
          <h1>Post a Demand</h1>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="slider autoplay">
          <?php        
              $i=0;
              foreach ($data_posts as $row){ 
                $i++; ?>
                  <a href="<?php echo base_url('Front/home/post_demand_inner/')?><?php echo $row->project_id?>" class="slider_link_tag">
                  <div class="post-sec">
                  <div class="post_sec_box">                      
                      <div class="slider_content">
                      <span><img  src="<?= $admin_url ?>/uploads/project_image/<?php echo $row->picture_url ?>"></span>
                      <h3> <?php echo $row->title;?></h3>
                      </div>
                      <p>
                        <?php echo $row->description;?>
                      </p> 
                    </div>                    
                </div>
                </a>
          <?php } ?>
        </div>    
      </div>
    </div>
  </div>
  <div class="row">
      <div class="col-md-12">
        <div class="find_view_more_btn">
              <a href="<?php echo base_url('Front/home/post_demand')?>" class="btn btn-default">View More</a>
        </div>
      </div>
    </div>
</section> 

<!-- post_sec -->


<!-- Find a mission start -->
<section class="find_bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-12">
          <div class="post_title">
            <h1>Find a Mission</h1>
            </div>
          </div>
        <!--<div class="find_search">
          <form action="<?php //echo base_url('Front/Home/search')?>" method="post" >
            <i class="fas fa-search"></i>
            <input type="text" name="keywords" id="keywords" placeholder="Search" >
          </form>
        </div>-->
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="slider autoplay">
          <?php     
              $i=0;
              foreach ($missions as $row){ 
                $i++; ?>
                  <div class="col-md-12 all corporate">
	                  <div class="item row">
                      <div class="col-md-4 img_box">
                        <?php 
                          $cat_image = $this->db->query("select * from  project_category  where project_id=" . $row->mission_category)->row();
                        ?>
                        <img src="<?php  echo base_url('uploads/project_image/' . $cat_image->picture_url) ?>">
                      </div>
                      <div class="col-md-8 cat_content">
                        <?php
                    	    $now = time(); // or your date as well
                      	  $your_date = strtotime($row->created_date);
                      	  $datediff = $now - $your_date;
                        ?>
                        <p class="cat_date"><?php echo round($datediff / (60 * 60 * 24)); ?>days ago</p>
                        <h5><?php echo $row->mission_title ?></h5>
					              <p><?php echo $row->description ?></p>
					              <span><b>Budget:</b> <?php echo '€' . $row->budget ?></span>
                        <div class="row">
                          <div class="col-md-12 make_btn">
                            <a href="<?php
                                  if($this->session->userdata['id']){
                                    echo base_url('Front/home/make_an_offer/' . $row->mission_id); }
                                  else {
                                    echo base_url('Front/home/login');
                                  } ?>">Make an Offer</a>
                          </div>			            
		                    </div>
                      </div>                        
                    </div>
                  </div>
          <?php } ?>
        </div>    
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="find_view_more_btn">
            <a href="<?php echo base_url('Front/home/find_mission')?>" class="btn btn-default">View More</a>
        </div>
      </div>
    </div>
  </section>

<!-- Find a heelper sec start -->
  <section class="find_bg">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="find_heading">
              <h2>Find a Heelper</h2>              
            </div>
            <div class="find_search">
              <form action="<?php echo base_url('Front/Home/search')?>" method="post" >
                <i class="fas fa-search"></i>
                <input type="text" name="keywords" id="keywords" placeholder="Search" >
              </form>
            </div>
          </div>
        </div>
        <div class=" row slider autoplay">
        
           <?php  foreach ($team as $member) {  ?> 
              <?php
                $count = 0;
                $total = 0;
                $obj = &get_instance();
                $obj->load->model('Front/Posts_model');
                //$user_id = $value['user_id'];
                $avg = $this->Posts_model->selectAvgOfRating($member['id']);
                for($j = 0; $j < count($avg); $j++)
                {
                    $total += $avg[$j]->rating;
                    $count++;
                }
                if($count != 0)
                {
                    $av =$total/$count;
                    $user_detail = round(number_format($av, 2, '.', ''));
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
          <div class="col-md-3">
            <a href="<?php echo base_url('Front/home/heelper_profile/'.$member['id'])?>">
              <div class="find_content">
                <img class="man_img" src="<?= $admin_url ?>/uploads/profiles/<?php echo $member['picture_url'] ?>">
                <div class="find_content_inner">
                <h5><?php echo ucfirst($member['username']);?></h5>
                <ul>
                  <li><strong>Skills:</strong></li>
                  <li><?php echo $member['skills'];?></li>                
                </ul>
                <!-- <img class="rating_img" src="<?php echo base_url('assets/Front/img/rating.png')?>"> -->
                 <div><span class="stars-container <?php echo $class_star;?>"><?php echo count($avg); ?>★★★★★</span></div>
                </div>
              </div>
            </a>
          </div>
          <?php }?>
        </div> 
        <div class="row">
          <div class="col-md-12">
            <!-- <div class="find_view_more_btn">
              <a href="#" class="btn btn-default">View More</a>
            </div> -->
          </div>
        </div>
      </div>
  </section>
  
<!-- Find a mission sec End -->


      