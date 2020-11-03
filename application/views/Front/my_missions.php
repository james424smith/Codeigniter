<?php $this->load->view('Front/common/header');  ?>
<?php
   $obj = &get_instance();
   $obj->load->model('Front/Posts_model');
   $status1 = 0;
   $status2 = 1;
   $status3 = 2;
   $status4 = 3;
   $status5 = 4;
   $user_id = $this->session->userdata['id'];
   $myofferedmission = $obj->Posts_model->fetchofferedmission($user_id);
   //print_r($myofferedmission);die();
   $missions = $obj->Posts_model->mymission($myofferedmission);
   
   $missions1 = $obj->Posts_model->mymission($status2);
   $missions2 = $obj->Posts_model->mymission($status3);
   $missions3 = $obj->Posts_model->mymission($status4);
   $missions4 = $obj->Posts_model->mymission($status5);
   //print_r($missions);die();
?> 
<section>
    <?php if($this->session->flashdata('delivery_success')){ 
    ?>
			<script>
				swal("Your delivery was successfully sent.");
			</script>
		<?php } ?>
   <div class="top_bnr section post_demand">
      <div class="container">
         <div class="top-side about_title">
         <img src="<?php  echo base_url('assets/Front/img/My_missions.png'); ?>"/>
         </div>
      </div>
   </div>
</section>
<section>
   <div class="section portfolio">
      <main id="main" class="container">
         <nav class="nav">
            <a href="" class="nav-item active" onclick="location.reload();" style="color:#0abdf3;">All</a>
            <a href="#" class="nav-item" data-rel="Proposed" style="color:#2d4fb1;">Proposed</a>
            <a href="#" class="nav-item" data-rel="option-1" style="color:#ffd400;">In progress</a>
            <a href="#" class="nav-item" data-rel="option-2" style="color:#7402f1;">Delivered</a>
            <a href="#" class="nav-item" data-rel="option-3" style="color:#39ec0c;">Completed</a>
            <a href="#" class="nav-item" data-rel="option-4" style="color:#ff1800;">Dispute</a> 
         </nav>

      <?php
        if(count($missions) == 0)
        { 
      ?>
      <br><br><br>
      <div class="row">
        <div class="col-md-12 text-center">
          <h4>No Missions to display.</h4>
        </div>
      </div>
      <br><br>
        <?php } else { ?>
      <ul class="tabs_list">
      <?php foreach ($missions as $value) {
         if($value['mission_status'] == 0)
         {
            $class = "Proposed";
            $style = "none";
            $link = "mission_posted_details";
         } 
         elseif ($value['mission_status'] == 1) {
            $class = "option-1";
            $style = "none";
            $link = "mission_inprogress_details";
         }
         elseif ($value['mission_status'] == 2)
         {
            $class = "option-2";
            $style = "none";
            $link = "mission_delivered_details";
         }
         elseif ($value['mission_status'] == 3)
         {
            $class = "option-3";
            $style = "none";
            $link = "mission_complete_details";
         }
         elseif ($value['mission_status'] == 4)
         {
            $class = "option-4";
            $style = "none";
            $link = "mission_dispute_details";
         }

         $style = "list-item";
      ?>

          <li class="project <?php echo  $class; ?>" style="display: <?php echo $style; ?>">
             <a href="<?php echo base_url('Front/home/' .$link.'/'.$value['mission_id'])?>">
              <div class="item row">
                  <div class="col-md-12 img_box">
                  <?php 
                     $cat_image=$this->db->query("select * from  project_category  where project_id=".$value['mission_category'])->row();
                  ?>
                  <img src="<?php  echo base_url('uploads/project_image/'.$cat_image->picture_url) ?>">
                      <!-- <img src="https://www.alphawizz.com/Heelp_admin/uploads/ae02fb24c057129c98cd261bb1098470.png" alt="Work 1"> -->
                  </div>            
                  <div class="col-md-12 cat_content">
                     <h5><?php echo $value['mission_title']; ?></h5>
                     <p><?php echo $value['mission_description'];?></p>
                     <div class="row">
                        <div class="col-md-12 status Delivred">
                        <p>
                          By : <?php echo $value['username']?>
                          &nbsp;&nbsp; Budget : <?php echo '€' . $value['budget'];?>
                        </p>
                        <?php  
                              if($value['mission_status'] == 0){ 
                                echo "<span style='color:#2d4fb1;'>Proposed</span>";
                             }
                             if($value['mission_status'] == 1){ 
                                echo "<span style='color:#ffd400;'>In Progress</span>";
                             }
                             if($value['mission_status'] == 2){ 
                                echo "<span style='color:#7402f1;'>Delivered</span>";
                             }
                             if($value['mission_status'] == 3){ 
                                echo "<span style='color:#39ec0c;'>Complete</span>";
                             }
                             if($value['mission_status'] == 4){ 
                                echo "<span style='color:#ff1800;'>Dispute</span>";
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
         <!--  <li class="project Proposed">
              <a href="<?php echo base_url('home/mission_posted_details')?>">
                  <div class="item row">
                    <div class="col-md-12 img_box">
                      <img src="https://www.alphawizz.com/Heelp_admin/uploads/ae02fb24c057129c98cd261bb1098470.png" alt="Work 1">
                    </div>            
                    <div class="col-md-12 cat_content">
                        
                          <h5>I need help for Something</h5>
                          <p>I need help for Something that i have posted a task...</p>
                          <div class="row">
                            <div class="col-md-12 status Posted">
                            <p>By : Zeeshan Akhter</p>
                            <span>Proposed</span>
                          </div>              
                          </div>
                      
                    </div>
                    <p class="cat_date">2 Days ago</p>
                  </div>
              </a>
          </li> 
          <li class="project option-3">
            <a href="<?php echo base_url('home/mission_complete_details')?>">
              <div class="item row">
                    <div class="col-md-12 img_box">
                      <img src="https://www.alphawizz.com/Heelp_admin/uploads/ae02fb24c057129c98cd261bb1098470.png" alt="Work 1">
                    </div>            
                    <div class="col-md-12 cat_content">
                          <h5>I need help for Something</h5>
                          <p>I need help for Something that i have posted a task...</p>
                          <div class="row">
                            <div class="col-md-12 status Completed">
                            <p>By : Zeeshan Akhter</p>
                            <span>Completed</span>
                          </div>              
                          </div>
                      
                    </div>
                    <p class="cat_date">2 Days ago</p>
                  </div>
            </a>
          </li>
          <li class="project option-1">
            <a href="<?php echo base_url('home/mission_inprogress_details')?>">
              <div class="item row">
                    <div class="col-md-12 img_box">
                      <img src="https://www.alphawizz.com/Heelp_admin/uploads/ae02fb24c057129c98cd261bb1098470.png" alt="Work 1">
                    </div>            
                    <div class="col-md-12 cat_content">
                          <h5>I need help for Something</h5>
                          <p>I need help for Something that i have posted a task...</p>
                          <div class="row">
                            <div class="col-md-12 status progress">
                            <p>By : Zeeshan Akhter</p>
                            <span>In progress</span>
                          </div>              
                          </div>
                      
                    </div>
                    <p class="cat_date">2 Days ago</p>
                  </div>
                </a>
          </li>
          <li class="project Proposed">
            <a href="<?php echo base_url('home/mission_posted_details')?>">
              <div class="item row">
                    <div class="col-md-12 img_box">
                      <img src="https://www.alphawizz.com/Heelp_admin/uploads/ae02fb24c057129c98cd261bb1098470.png" alt="Work 1">
                    </div>            
                    <div class="col-md-12 cat_content">
                          <h5>I need help for Something</h5>
                          <p>I need help for Something that i have posted a task...</p>
                          <div class="row">
                            <div class="col-md-12 status Posted">
                            <p>By : Zeeshan Akhter</p>
                            <span>Proposed</span>
                          </div>              
                          </div>
                      
                    </div>
                    <p class="cat_date">2 Days ago</p>
                  </div>
            </a>
          </li>
          <li class="project option-3">
            <a href="<?php echo base_url('home/mission_complete_details')?>">

              <div class="item row">
                    <div class="col-md-12 img_box">
                      <img src="https://www.alphawizz.com/Heelp_admin/uploads/ae02fb24c057129c98cd261bb1098470.png" alt="Work 1">
                    </div>            
                    <div class="col-md-12 cat_content">
                          <h5>I need help for Something</h5>
                          <p>I need help for Something that i have posted a task...</p>
                          <div class="row">
                            <div class="col-md-12 status Completed">
                            <p>By : Zeeshan Akhter</p>
                            <span>Completed</span>
                          </div>              
                          </div>
                      
                    </div>
                    <p class="cat_date">2 Days ago</p>
                  </div>
            </a>
          </li>
          <li class="project option-2">
            <a href="<?php echo base_url('home/mission_delivered_details')?>">
              <div class="item row">
                    <div class="col-md-12 img_box">
                      <img src="https://www.alphawizz.com/Heelp_admin/uploads/ae02fb24c057129c98cd261bb1098470.png" alt="Work 1">
                    </div>            
                    <div class="col-md-12 cat_content">
                          <h5>I need help for Something</h5>
                          <p>I need help for Something that i have posted a task...</p>
                          <div class="row">
                            <div class="col-md-12 status Delivred">
                            <p>By : Zeeshan Akhter</p>
                            <span>Delivred</span>
                          </div>              
                          </div>
                      
                    </div>
                    <p class="cat_date">2 Days ago</p>
                  </div>
                </a>
          </li> -->
       
        </ul>
        <?php }?>
      </main>
   </div>
</section>

<?php $this->load->view('Front/common/footer');  ?>