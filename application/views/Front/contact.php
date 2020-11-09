<!-- top sec -->
<?php $admin_url = $this->config->item('base_url'); 
?>
<section class="contact_bnr">
   <div class="container">
        <div class="row">
        <?php 
          foreach ($section_1 as $contact) {           
        ?>
            <div class="col-md-6">
                <div class="banner_sec">
                  <h1>Contactez-nous</h1>
                  <p>
                     Pour toute demande Contactez-nous par email ou via le formulaire ci-dessous
                  </p>
                </div>
            </div>
            <div class="col-md-6">
              <div class="banner_img_right contact_banner">
                <img src="<?= $admin_url ?>/uploads/contact/<?php echo $contact['contact_section_image1']; ?>" alt="" title="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end s-home -->


<!-- contact address -->
<section>
  <div class="contact_address_box">
   <div class="container">
      <div class="row">
            <div class="col-md-4">
               <div class="contact_address" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="5000">
                  <!--<span><img src="https://www.alphawizz.com/heelp_front/assets/img/2.png" alt="" title=""></span>-->
                  <span><img src="<?php echo base_url('assets/img/2.png') ?>" alt="" title=""></span>
                  
                  <h3><?php echo $contact['address_title'];?></h3>
                  <p><?php echo $contact['address_content'];?></p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="contact_address" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="4000">
                  <!--<span><img src="https://www.alphawizz.com/heelp_front/assets/img/1.png" alt="" title=""></span>-->
                  <span><img src="<?php echo base_url('assets/img/1.png') ?>" alt="" title=""></span>
                  <h3><?php echo $contact['call_us_title'];?></h3>                  
                  <p><?php echo $contact['call_us_content'];?></p>                 
               </div>
            </div>
            <div class="col-md-4">
               <div class="contact_address" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                  <!--<span><img src="https://www.alphawizz.com/heelp_front/assets/img/3.png" alt="" title=""></span>-->
                  <span><img src="<?php echo base_url('assets/img/3.png') ?>" alt="" title=""></span>
                  <h3><?php echo $contact['email_title'];?></h3>
                  <p><?php echo $contact['email_content'];?></p>
               </div>
            </div>
      </div>
    <?php } ?>
   </div>
  </div>
</section>
<!-- contact address end -->
<!-- contact form -->
<section>
   <div class="cont_form">
       <div class="container">   
             <div class="row">
                <div class="col-md-6">
                  <div class="container" id="map" style="width:100%; height:380px;">

                  </div>
                     <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235527.45447540554!2d75.7237599625956!3d22.723911728174144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fcad1b410ddb%3A0x96ec4da356240f4!2sIndore%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1585826843933!5m2!1sen!2sin" width="100%" height="380" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>-->                          
                </div>
                <div class="col-md-6">
                   <?php if(!empty($this->session->flashdata('msg'))){ ?>
                   <div class="alert alert-success">
                      <?php echo $this->session->flashdata('msg'); ?>
                   </div>
                   <?php } ?>
                   <?php if(validation_errors()) { ?>
                   <div class="alert alert-danger">
                      <?php echo validation_errors(); ?>
                   </div>
                   <?php } ?>
                    <div class="content-frm">
                          <!-- Display the status message -->
                          <?php if(!empty($status)){ ?>
                          <div class="status <?php echo $status['type']; ?>"><?php echo $status['msg']; ?></div>
                          <?php } ?>
                          
                          <!-- Contact form -->

                          <form class="contact2-form validate-form" action="" method="post">
                              <h3>Contactez-nous</h3>

                              <div class="wrap-input2 validate-input">
                                  <input class="wrap-input2 validate-input" type="text" name="name" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>" placeholder="Entrez le nom" required>
                                  <?php echo form_error('name','<p class="field-error">','</p>'); ?>
                              </div>
                              
                              <div class="wrap-input2 validate-input">
                                  <input class="wrap-input2 validate-input" type="email" name="email" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" placeholder="Entrez votre e-mail" required>
                                  <?php echo form_error('email','<p class="field-error">','</p>'); ?>
                              </div>
                              
                              <div class="wrap-input2 validate-input">
                                 <input placeholder="Entrez votre numéro de téléphone" class="mc-field-group" type="text" name="contact_no" pattern="[1-9]{1}[0-9]{9}" minlength="10"  maxlength="10" id="" value="<?php echo set_value('contact_no'); ?>" required>          
                                </div>
                                  <!-- <input class="wrap-input2 validate-input" type="number" name="contact_no" min_length="10" max_length="10" pattern="[1-9]{1}[0-9]{9}" value=" <?php echo !empty($postData['contact_no'])?$postData['contact_no']:''; ?>"  placeholder="Enter Number" required>
                                  <?php echo form_error('contact_no','<p class="field-error">','</p>'); ?>
                              </div> -->
                              
                              <div class="wrap-input2 validate-input textarea_field">
                                  <textarea class="wrap-input2 validate-input" name="message" placeholder="Entrez un commentaire" ><?php echo !empty($postData['message'])?$postData['message']:''; ?></textarea>
                                  <?php echo form_error('message','<p class="field-error">','</p>'); ?>
                              </div>
                             <div  class="container-contact2-form-btn">
                              <input class="contact2-form-btn" type="submit" name="contactSubmit"  value="Ok">
                             </div>
                          </form>
                    </div>
                    <!-- content-frm -->
                </div>
             </div>
       </div>
   </div>
</section>
<!-- contact form end -->
<script type="text/javascript">
         function initMap() {
            var latitude = 2.5191432
            
            var longitude = 48.9265328;

            // The location of Uluru
            var uluru = {lat: -latitude, lng: longitude};
            // The map, centered at Uluru
            
            var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 4, center: uluru});
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({position: uluru, map: map});
        }
</script>
<script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMC3-sMMvbrm4QdjoOOU6c2TQgyGQIHCc&callback=initMap"></script>


