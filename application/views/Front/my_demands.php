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
   //print_r($demands1);die();
   
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
            <a href="#" class="nav-item" data-rel="Proposed">Posted</a>
            <a href="#" class="nav-item" data-rel="option-1">In progress</a>
            <a href="#" class="nav-item" data-rel="option-2">Delivered</a>
            <a href="#" class="nav-item" data-rel="option-3">Completed</a>
            <a href="#" class="nav-item" data-rel="option-4">Dispute</a> 
         </nav>
   <ul class="tabs_list">

   <?php foreach ($demands as $value) {
      if($value['mission_status'] == 0)
      {
            $class = "Proposed";
            $style = "list-item";
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
   ?>
         <li class="project <?php echo  $class; ?>" style="display: <?php echo $style; ?>">
         <a href="<?php echo base_url('Front/home/' .$link.'/'.$value['mission_id'])?>">
            <div class="item row">
                  <div class="col-md-12 img_box">
                     <?php 
                        $cat_image=$this->db->query("select * from  project_category  where project_id=".$value['mission_category'])->row();
                     ?>
                     <img src="<?php  echo base_url('uploads/project_image/'.$cat_image->picture_url) ?>">
                  </div>            
                  <div class="col-md-12 cat_content">
                           <h5><?php echo $value['mission_title']; ?></h5>
                           <p><?php echo $value['mission_description'];?></p>
                        <div class="row">
                           <div class="col-md-12 status Delivred">
                              <p>By : <?php echo $value['username']?></p>
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
             <!-- aaaaaaaaaaaaaaaaaaaaaaaaaa<li class="project project">
               <a href="<?php echo base_url('home/demand_posted_details')?>">
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
                                    <span>Posted</span>
                                 </div>               
                              </div>
                          
                        </div>
                        <p class="cat_date">2 Days ago</p>
                      </div>
                  </a>
             </li> 
             <li class="project project">
               <a href="<?php echo base_url('home/demand_completed_details')?>">
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
               <a href="<?php echo base_url('home/demand_inprogress_details')?>">
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
             <li class="project project">
               <a href="<?php echo base_url('home/demand_posted_details')?>">
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
                                    <span>Posted</span>
                                 </div>               
                              </div>
                          
                        </div>
                        <p class="cat_date">2 Days ago</p>
                      </div>
                  </a>
             </li>
             <li class="project option-3">
               <a href="<?php echo base_url('home/demand_completed_details')?>">
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
               <a href="<?php echo base_url('home/demand_delivered_details')?>">
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
                                    <span>Delivered</span>
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
               <?php foreach ($demands as  $demand) {?>
               <div class="item row">
                  <a href="<?php echo base_url('Front/home/demand_posted_details/'.$demand['mission_id'])?>">
                     <div class="col-md-12 img_box">
                        <img src="https://www.alphawizz.com/Freelance/uploads/ae02fb24c057129c98cd261bb1098470.png" alt="">
                     </div>
                     <div class="col-md-12 cat_content">
                        <h5><?php echo $demand['mission_title'];?></h5>
                        <p><?php echo $demand['mission_description'];?></p>
                        <div class="row">
                           <div class="col-md-12 status Delivred">
                               <p>By : <?php echo $mission['username']?></p> 
                              <?php if($demand['mission_status']==0){ 
                                       echo "<span>Posted</span>";
                                    }
                                    if($demand['mission_status']== 1){ 
                                       echo "<span>In Progress</span>";
                                    }
                                    if($demand['mission_status']== 2){ 
                                       echo "<span>Delivred</span>";
                                    }
                                    if($demand['mission_status']== 3){ 
                                       echo "<span>Complete</span>";
                                    }
                                    if($demand['mission_status']== 4){ 
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
               <?php foreach ($demands1 as  $demand1) {?>
               <div class="item row">
                  <a href="<?php echo base_url('Front/home/demand_inprogress_details/'.$demand1['mission_id'])?>">
                     <div class="col-md-12 img_box">
                        <img src="https://www.alphawizz.com/Freelance/uploads/ae02fb24c057129c98cd261bb1098470.png" alt="">
                     </div>
                     <div class="col-md-12 cat_content">
                        <h5><?php echo $demand1['mission_title'];?></h5>
                        <p><?php echo $demand1['mission_description'];?></p>
                        <div class="row">
                           <div class="col-md-12 status Delivred">
                              <p>By : <?php echo $mission1['username']?></p>
                               <?php if($demand1['mission_status']==0){ 
                                 echo "<span>Posted</span>";
                                    }
                                    if($demand1['mission_status']==1){ 
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
               <?php foreach ($demands2 as  $demand2) {?>
               <div class="item row">
                  <a href="<?php echo base_url('Front/home/demand_delivered_details/'.$demand2['mission_id'])?>">
                     <div class="col-md-12 img_box">
                        <img src="https://www.alphawizz.com/Freelance/uploads/ae02fb24c057129c98cd261bb1098470.png" alt="">
                     </div>
                     <div class="col-md-12 cat_content">
                        <h5><?php echo $demand2['mission_title'];?></h5>
                        <p><?php echo $demand2['mission_description'];?></p>
                        <div class="row">
                           <div class="col-md-12 status Delivred">
                              <p>By : <?php echo $demand2['username']?></p>
                              <?php if($demand2['mission_status']==0){ 
                                 echo "<span>Posted</span>";
                                    }
                                    if($demand2['mission_status']==1){ 
                                 echo "<span>In Progress</span>";
                                    }
                                    if($demand2['mission_status']==2){ 
                                 echo "<span>Delivred</span>";
                                    }
                                    if($demand2['mission_status']==3){ 
                                 echo "<span>Complete</span>";
                                    }
                                    if($demand2['mission_status']==4){ 
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
               <?php foreach ($demands3 as  $demand3) {?>
               <div class="item row">
                  <a href="<?php echo base_url('Front/home/demand_completed_details/'.$demand3['mission_id'])?>">
                     <div class="col-md-12 img_box">
                        <img src="https://www.alphawizz.com/Freelance/uploads/ae02fb24c057129c98cd261bb1098470.png" alt="">
                     </div>
                     <div class="col-md-12 cat_content">
                        <h5><?php echo $demand3['mission_title'];?></h5>
                        <p><?php echo $demand3['mission_description'];?></p>
                        <div class="row">
                           <div class="col-md-12 status Delivred">
                              <p>By : <?php echo $demand['username']?></p>
                             <?php if($demand3['mission_status']==0){ 
                                 echo "<span>Posted</span>";
                                    }
                                    if($demand3['mission_status']==1){ 
                                 echo "<span>In Progress</span>";
                                    }
                                    if($demand3['mission_status']==2){ 
                                 echo "<span>Delivred</span>";
                                    }
                                    if($demand3['mission_status']==3){ 
                                 echo "<span>Complete</span>";
                                    }
                                    if($demand3['mission_status']==4){ 
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
               <?php foreach ($demands4 as  $demand4) {?>
               <div class="item row">
                  <a href="<?php echo base_url('Front/home/mission_delivered_details')?>">
                     <div class="col-md-12 img_box">
                        <img src="https://www.alphawizz.com/Freelance/uploads/ae02fb24c057129c98cd261bb1098470.png" alt="">
                     </div>
                     <div class="col-md-12 cat_content">
                        <h5><?php echo $demand4['mission_title'];?></h5>
                        <p><?php echo $demand4['mission_description'];?></p>
                        <div class="row">
                           <div class="col-md-12 status Delivred">
                              <p>By : <?php echo $demand4['username']?></p>
                              <?php if($demand4['mission_status']==0){ 
                                 echo "<span>Posted</span>";
                                    }
                                    if($demand4['mission_status']==1){ 
                                 echo "<span>In Progress</span>";
                                    }
                                    if($demand4['mission_status']==2){ 
                                 echo "<span>Delivred</span>";
                                    }
                                    if($demand4['mission_status']==3){ 
                                 echo "<span>Complete</span>";
                                    }
                                    if($demand4['mission_status']==4){ 
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