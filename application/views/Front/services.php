          <?php  $admin_url = $this->config->item('base_url'); ?>

      <!-- top sec -->
      <section class="service_top_sec">
         <div class="container">
            <div class="about_top_title main_title" data-aos="zoom-in-right" data-aos-easing="linear"   data-aos-duration="1500">
               <h1 class="">Our  <span>Services</span></h1>
               <p>Improve your brand’s value by bridging the gap between real and digital world, <br/>with the usage of high-end technological framework.</p>
            </div>
         </div>
      </section>
 
      <!-- end s-home -->
      <!-- about_sec -->
            <?php
      $i=0;
      foreach ($data_services as $row){ 
      $i++;
      if ($i % 2 == 0) { 
         $class = "services_left";
         $textclass = "text-right";
         ?>
      <section class="services_all <?php echo $class;?>">

         <div class="container-fluid">
      
            <div class="row services_row services_left">
            	<div class="container">
               <div class="col-md-6 col-xs-12" data-aos="zoom-in-right" data-aos-easing="linear"   data-aos-duration="1500">
                 <h1><?php echo $row->id;?></h1>
                  <h3><?php echo $row->title;?></h3>
                  <p><?php echo $row->description;?></p>
               </div>
               <div class="col-md-6 col-xs-12 text-left" data-aos="zoom-in-left" data-aos-easing="linear"   data-aos-duration="1500">
                  <img  src="<?= $admin_url ?>/uploads/<?= $row->profile_image ?>">
               </div>
           </div>
            </div>
       
      </section>
       <?php } else { 
         $class = "services_right";
         $textclass = "text-left";
         ?>

         <section class="services_all <?php echo $class;?>">
         <div class="container">
            <div class="row services_row services_left">
               <div class="col-md-6 col-xs-12 <?php echo $textclass;?>" data-aos="zoom-in-right" data-aos-easing="linear"   data-aos-duration="1500">
                 <img class="card-img rounded-0" src="<?= $admin_url ?>/uploads/<?= $row->profile_image ?>"  alt="">
               </div>
               <div class="col-md-6 col-xs-12 <?php echo $textclass;?>" data-aos="zoom-in-right" data-aos-easing="linear"   data-aos-duration="1500">
                 <h1><?php echo $row->id;?></h1>
                  <h3><?php echo $row->title;?></h3>
                  <p><?php echo $row->description;?></p>
               </div>
            </div>
          
         </div>
      </section>
      <?php  }?>

   <?php } ?>
