 <section class="find_bg search-content">
      <div class="container">
        <div class="row">
            <div class="col-md-12 find_search">
              <form action="<?php echo base_url('Front/Home/search')?>" method="post" >
                <i class="fas fa-search"></i>
                <input type="text" name="keywords" id="keywords" placeholder="Search" >
              </form>
            </div>
        </div>        
        <div class="row" id="data_heelp">
          <?php foreach ($team as $member) {  ?> 
            <?php //print_r($team);die();
            ?>
            <?php
              $count = 0;
              $total = 0;
              $obj=&get_instance();
              $obj->load->model('Front/Posts_model');
              //$user_id = $value['user_id'];
              $avg = $this->Posts_model->selectAvgOfRating($member['id']);



              for($j=0;$j<count($avg);$j++)
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
                <img class="man_img" src="<?php echo base_url('uploads/profiles/'.$member['picture_url'])?>">
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
      </div>
  </section>