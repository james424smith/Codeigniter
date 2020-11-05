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
   
   $user_id = $this->session->userdata['id'];
   //var_dump($demands1);die();
   $obj->load->model('Front/Payment_model');
?>
<style>
     .badge_1 {
         position: absolute;
         font-size: 100% !important;
         border-radius: 50%;
         background-color: #fd9d39;
         color: white !important;
         margin-top: -25px;
      }
</style>
<section>
<?php if($this->session->flashdata('success_ask_modify')){ ?>
  <script>
    swal("vous avez reçu une demande de modification.");
  </script> 
<?php } ?>

   <div class="top_bnr section post_demand">
      <div class="container">
         <div class="row top-side about_title">
            <div class="col-md-12 text-center">
               <img src="<?php  echo base_url('assets/Front/img/My_demands.png'); ?>"/>
             </div>
         </div>
      </div>
   </div>
</section>
<section>
   <div class="section portfolio">
      <main id="main" class="container">
         <nav class="nav">
            <a href="" class="nav-item active" onclick="location.reload();" style="color:#0abdf3;">Tout</a>
            <a href="#" class="nav-item" data-rel="Proposed" style="color:#2d4fb1;">Publiée</a>
            <a href="#" class="nav-item" data-rel="option-1" style="color:#ffd400;">En cours</a>
            <a href="#" class="nav-item" data-rel="option-2" style="color:#7402f1;">Livrée</a>
            <a href="#" class="nav-item" data-rel="option-3" style="color:#39ec0c;">Complétée</a>
            <a href="#" class="nav-item" data-rel="option-4" style="color:#ff1800;">Litige</a> 
         </nav>
    
         <?php
            if(count($demands) == 0 && count($demands1) == 0 && count($demands2) == 0 && count($demands3) == 0 && count($demands4) == 0)
            { 
         ?>
            <br><br><br>
            <div class="row">
            <div class="col-md-12 text-center">
               <h4>Aucune demande à afficher.</h4>
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
                  <?php if($value['mission_status'] == 4){ ?>
                     <p class="cat_date" style="left:10px; background-color:white;">
                        <img class="chat_icn" src="<?php echo base_url();?>/assets/Front/img/chat.png" style="width:20px; height:20px;">
                        <?php
                           $litigation_count = count($obj->Payment_model->getlitigationnotification($user_id, $value['mission_id']));
                        ?>
                        <span class="badge_1"><?php echo $litigation_count;?></span>
                     </p>
                  <?php } ?>
                  <?php if($value['mission_status'] == 0){ ?>
                     <p class="cat_date" style="left:10px; background-color:white;">
                        <?php
                           $offer_count = count($obj->Payment_model->getoffernotification($user_id, $value['mission_id']));
                        ?>
                        <span style="color:#2d4fb1;"><?php echo $offer_count;?></span>
                     </p>
                  <?php } ?> 
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
                              <p>Par : <?php echo $value['username']?> &nbsp;&nbsp; Budget : <?php echo '€' . $value['budget'];?></p>
                              <?php  
                                    if($value['mission_status'] == 0){ 
                                       echo "<span style='color:#2d4fb1;'>Publiée</span>";
                                    }
                                    if($value['mission_status'] == 1){ 
                                       echo "<span style='color:#ffd400;'>En cours</span>";
                                    }
                                    if($value['mission_status'] == 2){ 
                                       echo "<span style='color:#7402f1;'>Livrée</span>";
                                    }
                                    if($value['mission_status'] == 3){ 
                                       echo "<span style='color:#39ec0c;'>Complétée</span>";
                                    }
                                    if($value['mission_status'] == 4){
                                       echo "<span style='color:#ff1800;'>Litige</span>";
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
                  <p class="cat_date">Il y a <?php echo round($datediff / (60 * 60 * 24)); ?> jours</p>
                  
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