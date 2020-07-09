<?php $this->load->view('Front/common/header');  ?>
<?php
   $obj=&get_instance();
   $obj->load->model('Front/Posts_model');
   $status1=0;
   $status2=1;
   $status3=2;
   $status4=3;
   $status5=4;
   $user_id = $this->session->userdata['id'];
   $myofferedmission = $obj->Posts_model->fetchofferedmission($user_id);

   $missions=$obj->Posts_model->mymission($myofferedmission);
   
   $missions1=$obj->Posts_model->mymission($status2);
   $missions2=$obj->Posts_model->mymission($status3);
   $missions3=$obj->Posts_model->mymission($status4);
   $missions4=$obj->Posts_model->mymission($status5);
   //print_r($missions);die();


   ?> 
<section>
   <div class="top_bnr section post_demand">
      <div class="container">
         <div class="top-side about_title">
            <h4 class="title">My Missions</h4>
         </div>
      </div>
   </div>
</section>
<section>
   <div class="section portfolio">
      <main id="main" class="container">
         <nav class="nav">
            <a href="#" class="nav-item active" data-rel="Proposed">Proposed</a>
            <a href="#" class="nav-item" data-rel="option-1">In progress</a>
            <a href="#" class="nav-item" data-rel="option-2">Delivered</a>
            <a href="#" class="nav-item" data-rel="option-3">Completed</a>
            <a href="#" class="nav-item" data-rel="option-4">Dispute</a> 
         </nav>

        <ul class="tabs_list">
<?php foreach ($missions as $value) {
  if($value['mission_status'] == 0)
  {
$class = "Proposed";
$style = "list-item";
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
                            <p>By : <?php echo $value['username']?></p>
                            <?php  if($value['mission_status']==0){ 
                                 echo "<span>Posted</span>";
                                    }
                                    if($value['mission_status']== 1){ 
                                 echo "<span>In Progress</span>";
                                    }
                                    if($value['mission_status']== 2){ 
                                 echo "<span>Delivred</span>";
                                    }
                                    if($value['mission_status']== 3){ 
                                 echo "<span>Complete</span>";
                                    }
                                    if($value['mission_status']== 4){ 
                                 echo "<span>Dispute</span>";
                                    }
                              ?>
                          </div>              
                          </div>
                      
                    </div>
                    <?php
                      $now = time(); // or your date as well
                      $your_date = strtotime($value['created']);
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


         <!-- <ul class="tabs_list">
            <li class="project Proposed">
               <?php foreach ($missions as  $mission) {?>
               <div class="item row">
                  <a href="<?php echo base_url('Front/home/mission_posted_details/'.$mission['mission_id'])?>">
                     <div class="col-md-12 img_box">
                        <img src="https://www.alphawizz.com/Freelance/uploads/ae02fb24c057129c98cd261bb1098470.png" alt="">
                     </div>
                     <div class="col-md-12 cat_content">
                        <h5><?php echo $mission['mission_title'];?></h5>
                        <p><?php echo $mission['mission_description'];?></p>
                        <div class="row">
                           <div class="col-md-12 status Delivred">
                              <p>By : <?php echo $mission['username']?></p>
                              <?php if($mission['mission_status']==0){ 
                                 echo "<span>Posted</span>";
                                    }
                                    if($mission['mission_status']== 1){ 
                                 echo "<span>In Progress</span>";
                                    }
                                    if($mission['mission_status']== 2){ 
                                 echo "<span>Delivred</span>";
                                    }
                                    if($mission['mission_status']== 3){ 
                                 echo "<span>Complete</span>";
                                    }
                                    if($mission['mission_status']== 4){ 
                                 echo "<span>Dispute</span>";
                                    }
                              ?>
                              
                           </div>
                        </div>
                     </div>
                     <p class="cat_date">2 Days ago</p>
                  </a>
               </div>
               <?php }      ?>
            </li>
            <li class="project option-1">
               <?php foreach ($missions1 as  $mission1) {?>
               <div class="item row">
                  <a href="<?php echo base_url('Front/home/mission_inprogress_details/'.$mission1['mission_id'])?>">
                     <div class="col-md-12 img_box">
                        <img src="https://www.alphawizz.com/Freelance/uploads/ae02fb24c057129c98cd261bb1098470.png" alt="">
                     </div>
                     <div class="col-md-12 cat_content">
                        <h5><?php echo $mission1['mission_title'];?></h5>
                        <p><?php echo $mission1['mission_description'];?></p>
                        <div class="row">
                           <div class="col-md-12 status Delivred">
                              <p>By : <?php echo $mission1['username']?></p>
                               <?php if($mission1['mission_status']==0){ 
                                 echo "<span>Posted</span>";
                                    }
                                    if($mission1['mission_status']==1){ 
                                 echo "<span>In Progress</span>";
                                    }
                                    if($mission1['mission_status']==2){ 
                                 echo "<span>Delivred</span>";
                                    }
                                    if($mission1['mission_status']==3){ 
                                 echo "<span>Complete</span>";
                                    }
                                    if($mission1['mission_status']==4){ 
                                 echo "<span>Dispute</span>";
                                    }
                              ?>
                              
                           </div>
                        </div>
                     </div>
                     <p class="cat_date">2 Days ago</p>
                  </a>
               </div>
               <?php }      ?>
            </li>
          <li class="project option-2">
               <?php foreach ($missions2 as  $mission2) {?>
               <div class="item row">
                  <a href="<?php echo base_url('Front/home/mission_delivered_details/'.$mission2['mission_id'])?>">
                     <div class="col-md-12 img_box">
                        <img src="https://www.alphawizz.com/Freelance/uploads/ae02fb24c057129c98cd261bb1098470.png" alt="">
                     </div>
                     <div class="col-md-12 cat_content">
                        <h5><?php echo $mission2['mission_title'];?></h5>
                        <p><?php echo $mission2['mission_description'];?></p>
                        <div class="row">
                           <div class="col-md-12 status Delivred">
                              <p>By : <?php echo $mission2['username']?></p>
                              <?php if($mission2['mission_status']==0){ 
                                 echo "<span>Posted</span>";
                                    }
                                    if($mission2['mission_status']==1){ 
                                 echo "<span>In Progress</span>";
                                    }
                                    if($mission2['mission_status']==2){ 
                                 echo "<span>Delivred</span>";
                                    }
                                    if($mission2['mission_status']==3){ 
                                 echo "<span>Complete</span>";
                                    }
                                    if($mission2['mission_status']==4){ 
                                 echo "<span>Dispute</span>";
                                    }
                              ?>
                              
                           </div>
                        </div>
                     </div>
                     <p class="cat_date">2 Days ago</p>
                  </a>
               </div>
               <?php }      ?>
            </li> 
            <li class="project option-3">
               <?php foreach ($missions3 as  $mission3) {?>
               <div class="item row">
                  <a href="<?php echo base_url('Front/home/mission_complete_details/'.$mission3['mission_id'])?>">
                     <div class="col-md-12 img_box">
                        <img src="https://www.alphawizz.com/Freelance/uploads/ae02fb24c057129c98cd261bb1098470.png" alt="">
                     </div>
                     <div class="col-md-12 cat_content">
                        <h5><?php echo $mission3['mission_title'];?></h5>
                        <p><?php echo $mission3['mission_description'];?></p>
                        <div class="row">
                           <div class="col-md-12 status Delivred">
                              <p>By : <?php echo $mission3['username']?></p>
                             <?php if($mission3['mission_status']==0){ 
                                 echo "<span>Posted</span>";
                                    }
                                    if($mission3['mission_status']==1){ 
                                 echo "<span>In Progress</span>";
                                    }
                                    if($mission3['mission_status']==2){ 
                                 echo "<span>Delivred</span>";
                                    }
                                    if($mission3['mission_status']==3){ 
                                 echo "<span>Complete</span>";
                                    }
                                    if($mission3['mission_status']==4){ 
                                 echo "<span>Dispute</span>";
                                    }
                              ?>
                              
                           </div>
                        </div>
                     </div>
                     <p class="cat_date">2 Days ago</p>
                  </a>
               </div>
               <?php }      ?>
            </li>
            <li class="project option-4">
               <?php foreach ($missions4 as  $mission4) {?>
               <div class="item row">
                  <a href="<?php echo base_url('Front/home/mission_delivered_details')?>">
                     <div class="col-md-12 img_box">
                        <img src="https://www.alphawizz.com/Freelance/uploads/ae02fb24c057129c98cd261bb1098470.png" alt="">
                     </div>
                     <div class="col-md-12 cat_content">
                        <h5><?php echo $mission4['mission_title'];?></h5>
                        <p><?php echo $mission4['mission_description'];?></p>
                        <div class="row">
                           <div class="col-md-12 status Delivred">
                              <p>By : <?php echo $mission4['username']?></p>
                              <?php if($mission4['mission_status']==0){ 
                                 echo "<span>Posted</span>";
                                    }
                                    if($mission4['mission_status']==1){ 
                                 echo "<span>In Progress</span>";
                                    }
                                    if($mission4['mission_status']==2){ 
                                 echo "<span>Delivred</span>";
                                    }
                                    if($mission4['mission_status']==3){ 
                                 echo "<span>Complete</span>";
                                    }
                                    if($mission4['mission_status']==4){ 
                                 echo "<span>Dispute</span>";
                                    }
                              ?>
                              
                           </div>
                        </div>
                     </div>
                     <p class="cat_date">2 Days ago</p>
                  </a>
               </div>
               <?php }      ?>
            </li>
         </ul> -->
      </main>
   </div>
</section>

<?php $this->load->view('Front/common/footer');  ?>