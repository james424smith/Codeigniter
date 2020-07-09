
<?php $admin_url = $this->config->item('base_url'); 
?>

<section>
  <div class="top_bnr section about_top_sec">
    <div class="container">
      <div class="top-side about_title">
          <h4 class="title">About Heelp</h4>
        </div>
    </div>
  </div>
</section>
<!--  top sec end-->
<!-- about_sec -->
<!-- clutch start -->
<!-- clutch end -->
<section class="our_approch_bg">
   <div class="container">
      <div class="row">
        <?php 
        foreach ($data as $value) {
           
        ?>
         <div class="col-md-6">
            <div class="our_approch_main_title">
               <h1 class=""><?php echo $value['about_title'];?></span></h1>
               <p><?php echo $value['about_content'];?></p>
            </div>
         </div>
         <div class="col-md-6">
            <div class="our_approch_img">
               <img  src="<?php echo $admin_url?>/uploads/about/<?php echo $value['about_image'];?>">
            </div>
         </div>
         <?php } ?>
      </div>
   </div>
</section>
<!-- about_sec -->
<!-- project_counter -->
<section>
   <div class="our_team">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="our_team_main_title">
                  <h1 class="">Our Team</h1>
               </div>
            </div>
         </div>
         <div class="row">
          
            <div class="col-md-12">
               <div class="slider autoplay">
                <?php  foreach ($team as  $t) {
            //print_r($team);die();

               ?> 
                  <div class="post-sec">
                     <div class="slider_img_abouts">
                        <img  src="<?php echo $admin_url?>uploads/about/<?php echo $t['team_image'];?>">
                     </div>  
                     <div class="slider_title_about">                 
                       <h3><?php echo $t['team_title'];?></h3>                  
                       <p><?php echo $t['team_content'];?></p>   
                     </div>   
                     <div class="slider_socials_icn">
                       <ul>
                           <li><a href="<?php echo $t['team_fb'];?>"><i class="fab fa-facebook-f"></i></a></li>
                           <li><a href="<?php echo $t['team_insta'];?>"><i class="fab fa-instagram"></i></a></li>
                           <li><a href="<?php echo $t['team_whatsp'];?>"><i class="fab fa-whatsapp"></i></a></li>
                           <li><a href="<?php echo $t['team_twitter'];?>"><i class="fab fa-twitter"></i></a></li>                        
                       </ul>
                     </div>              
                  </div>  
                   <?php }?>      
                </div>
               </div>
            </div>
         
         </div>
      </div>
   </div>
</section>
<!-- project_counter