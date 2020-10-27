<?php $this->load->view('Front/common/header');  ?>
<?php
   $obj = &get_instance();
   $obj->load->model('Front/Posts_model');
   $status1 = 0;
   $status2 = 1;
   $status3 = 2;
   $status4 = 3;
   $status5 = 4;
   $demands = $obj->Posts_model->mydemand($status1);
   $demands1 = $obj->Posts_model->mydemand($status2);
   $demands2 = $obj->Posts_model->mydemand($status3);
   $demands3 = $obj->Posts_model->mydemand($status4);
   $demands4 = $obj->Posts_model->mydemand($status5);
   //var_dump($demands1);die();
   
?> 
<section>
   <div class="top_bnr section post_demand">
      <div class="container">
         <div class="top-side about_title">
            <h4 class="title">My Demands</h4>
         </div>
      </div>
   </div>
</section>
<section>
   <div class="section portfolio">
      <main id="main" class="container">
         <nav class="nav">
            <a href="" class="nav-item active" onclick="location.reload();" style="color:#0abdf3;">All</a>
            <a href="#" class="nav-item" data-rel="Proposed" style="color:#2d4fb1;">Posted</a>
            <a href="#" class="nav-item" data-rel="option-1" style="color:#ffd400;">In progress</a>
            <a href="#" class="nav-item" data-rel="option-2" style="color:#7402f1;">Delivered</a>
            <a href="#" class="nav-item" data-rel="option-3" style="color:#39ec0c;">Completed</a>
            <a href="#" class="nav-item" data-rel="option-4" style="color:#ff1800;">Dispute</a> 
         </nav>
    
         <?php
            if(count($demands) == 0 && count($demands1) == 0 && count($demands2) == 0 && count($demands3) == 0 && count($demands4) == 0)
            { 
         ?>
            <br><br><br>
            <div class="row">
            <div class="col-md-12 text-center">
               <h4>No Demands to display.</h4>
            </div>
            </div>
            <br><br>
        <?php } else { ?>      
   <ul class="tabs_list">

   <?php 
         foreach ($demands as $value) {
            if($value['mission_status'] == 0)
            {
               $class = "Proposed";
               $style = "none";
               $link = "demand_posted_details";
            } 
            elseif ($value['mission_status'] == 1) {
               $class = "option-1";
               $style = "none";
               $link = "demand_inprogress_details";
            }
            elseif ($value['mission_status'] == 2)
            {
               $class = "option-2";
               $style = "none";
               $link = "demand_delivered_details";
            }
            elseif ($value['mission_status'] == 3)
            {
               $class = "option-3";
               $style = "none";
               $link = "demand_completed_details";
            }
            elseif ($value['mission_status'] == 4)
            {
               $class = "option-4";
               $style = "none";
               $link = "demand_dispute_details";
            }
            $style = "list-item";
   ?>
      <li class="project <?php echo  $class; ?>" style="display: <?php echo $style; ?>">
         <a href="<?php echo base_url('Front/home/' . $link . '/' . $value['mission_id'])?>">
            <div class="item row">
                  <div class="col-md-12 img_box">
                     <?php 
                        $cat_image = $this->db->query("select * from  project_category  where project_id=".$value['mission_category'])->row();
                     ?>
                     <img src="<?php  echo base_url('uploads/project_image/'.$cat_image->picture_url) ?>">
                  </div>            
                  <div class="col-md-12 cat_content">
                           <h5><?php echo $value['mission_title']; ?></h5>
                           <p><?php echo $value['mission_description'];?></p>
                        <div class="row">
                           <div class="col-md-12 status Delivred">
                              <p>By : <?php echo $value['username']?> &nbsp;&nbsp; Budget : <?php echo '€' . $value['budget'];?></p>
                              <?php  
                                    if($value['mission_status'] == 0){ 
                                       echo "<span>Posted</span>";
                                    }
                                    if($value['mission_status'] == 1){ 
                                       echo "<span>In Progress</span>";
                                    }
                                    if($value['mission_status'] == 2){ 
                                       echo "<span>Delivered</span>";
                                    }
                                    if($value['mission_status'] == 3){ 
                                       echo "<span>Complete</span>";
                                    }
                                    if($value['mission_status'] == 4){ 
                                       echo "<span>Dispute</span>";
                                    }
                           ?>
                           </div>               
                        </div>
                  </div>
                  <?php
                     $now = time(); // or your date as well
                     $your_date = strtotime($value['created_date']);
                     $datediff = $now - $your_date;
                  ?>
                  <p class="cat_date"><?php echo round($datediff / (60 * 60 * 24)); ?> Days ago</p>
            </div>
            </a>
         </li>
          <?php } ?>
         </ul>
         <?php } ?>
      </main>
   </div>
</section>
<?php $this->load->view('Front/common/footer');  ?>