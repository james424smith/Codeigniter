

<?php $admin_url = $this->config->item('base_url'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
.heelper {
  width : 220px !important;
  height : 300px !important;
  margin-right : 20px !important;
}
</style>
<!-- banner_sec -->
<?php if($this->session->flashdata('success')){ ?>
  <script>
    swal("Registration has been done successfully.");
  </script> 
<?php } ?>
<section class="banner_section">
    <div class="container">
        <div class="row">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo base_url('assets/Front/img/Slide 1.png');?>" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url('assets/Front/img/Slide 2.png');?>" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url('assets/Front/img/Slide 3.png');?>" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url('assets/Front/img/Slide 4.png');?>" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Suivant</span>
        </a>
      </div>
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
          <h1>Publier une demande</h1>
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
              <a href="<?php echo base_url('Front/home/post_demand')?>" class="btn btn-default">Voir plus</a>
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
            <h1>Trouver une mission</h1>
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
              $i = 0;
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
                        <p class="cat_date">Il y a <?php echo round($datediff / (60 * 60 * 24)); ?> jours</p>
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
                                  } ?>" style="width: 200px; margin-left:-50px; text-align: center;">Proposer une offre</a>
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
            <a href="<?php echo base_url('Front/home/find_mission')?>" class="btn btn-default">Voir plus</a>
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
              <h2>Trouver un Heelper</h2>              
            </div>
            <div class="find_search">
              <form action="<?php echo base_url('Front/Home/search')?>" method="post" >
                <i class="fas fa-search"></i>
                <input type="text" name="keywords" id="keywords" placeholder="Chercher" >
              </form>
            </div>
          </div>
        </div>
        <div class="row slider autoplay">
           <?php  foreach ($team as $member) {  
                  if($member['id'] != $this->session->userdata['id']) {
           ?> 
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
          <div class="col-md-3 heelper">
          <?php if($this->session->userdata['id']){?>
            <a href="<?php echo base_url('Front/home/heelper_profile/'.$member['id'])?>">
          <?php } else {?>
            <a href="<?php echo base_url('Front/home/login')?>">
          <?php } ?>
              <div class="find_content">
                <img class="man_img" src="<?= $admin_url ?>/uploads/profiles/<?php echo $member['picture_url'] ?>" style="width:180px; height:180px;">
                <div class="find_content_inner">
                <h5><?php echo ucfirst($member['username']);?></h5>
                <ul>
                  <li><strong>Compétences:</strong></li>
                  <li><?php echo $member['skills'];?></li>                
                </ul>
                <!-- <img class="rating_img" src="<?php echo base_url('assets/Front/img/rating.png')?>"> -->
                <div>
                <a href="<?php echo base_url('Front/home/review_profile/' . $member['id'])?>">
                  <span class="stars-container <?php echo $class_star;?>"><?php echo count($avg); ?>★★★★★</span>
                </a>
                </div>
                </div>
              </div>
            </a>
          </div>
          <?php } }?>
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


      