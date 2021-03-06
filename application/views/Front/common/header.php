<!DOCTYPE html>
<html>
   <head>
      <title>Heelp</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">    
  
     <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
      <link rel="stylesheet" href="<?php echo base_url('assets/Front/css/style.css')?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/Front/css/custom.css')?>">
      <link href="<?php echo base_url('assets/Front/css/bootstrap.min.css')?>" rel="stylesheet">
      <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>


      <link rel="stylesheet" href="<?php echo base_url('assets/Front/fontawesome/css/all.min.css')?>">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Front/css/slick.css')?>">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Front/css/slick-theme.css')?>">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Front/css/custom.css')?>">

      <!--<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>-->
      <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>--> 
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

<style type="text/css">
  
  .nav > .nav-links > a {
    padding: 13px 12px;
  }
  .badge {
    position: absolute;
    top: -10px !important;
    right: 5px;
    font-size: 50%;
    border-radius: 50%;
    background-color: #fd9d39;
    color: white;
  }

  .badge_1 {
    position: absolute;
    font-size: 50%;
    border-radius: 50%;
    background-color: #fd9d39;
    color: white;
    padding-left: 4px;
    padding-right: 3.5px;
    margin-top: -2px;
    margin-left: 2px;
    font-weight: bolder;
  }
  .badge_2 {
    position: absolute;
    font-size: 50%;
    border-radius: 50%;
    background-color: #fd9d39;
    color: white;
    padding-left: 4px;
    padding-right: 3.5px;
    margin-top: 2px;
    margin-left: 2px;
    font-weight: bolder;
  }
  @media (max-width:600px) {
    .top_right_side_icon {
      margin-right: 40px;
      margin-top: -25px;
    }
  }
</style>
<script type="text/javascript">
    $(document).ready(function(){
    $('.nav-item').click(function(){
      // reset active class
      $('.nav-item').removeClass("active");
      // add active class to selected
      $(this).addClass("active");
      // return needed to make function work
      return false;
    });
  
  
    $(function() {
      // create an empty variable
      var selectedClass = "";
      // call function when item is clicked
      $(".nav-item").click(function(){
        // assigns class to selected item
        selectedClass = $(this).attr("data-rel");
        // fades out all portfolio items
        $(".portfolio li").fadeOut(300);
        // fades in selected category
        $(".portfolio li." + selectedClass).delay(300).fadeIn(300);
      });
    });
  
  }); // document ready
</script>
    
<script>
  // Your web app's Firebase configuration
    var firebaseConfig = {
      apiKey: "AIzaSyBxPi4dRrX4GlFnYXGtyNozl-h6-uKBDMs",
      authDomain: "my-chat-project-bdc68.firebaseapp.com",
      databaseURL: "https://my-chat-project-bdc68.firebaseio.com",
      projectId: "my-chat-project-bdc68",
      storageBucket: "my-chat-project-bdc68.appspot.com",
      messagingSenderId: "117755236971",
      appId: "1:117755236971:web:daaac2f5b802f35dd9d72e",
      measurementId: "G-KTYVEDFM2E"
    };
  // Initialize Firebase
  //firebase.initializeApp(firebaseConfig);
  //firebase.analytics();
</script>
<script type="text/javascript">
    var bellIcon = document.querySelector('.bell-icon');
    var dropdownMenu = document.querySelector('.dropdown');
    var notificationNumber = document.getElementsByClassName('notification-number');
    var timeDelay = [1000,2000,3000,4000,5000,6000];
    function randomNumber(){
      var random = Math.floor(Math.random() * 6);
      for(var i = 0; i < notificationNumber.length; i++){
        notificationNumber[i].textContent = random;
      }
    }
    function randomRange(data) {
      var newTime = data[Math.floor(data.length * Math.random())];
      return newTime;
    }
    function bellCheck(event){
      var isClickInside = bellIcon.contains(event.target);
        if (isClickInside) {
          dropdownMenu.classList.toggle('hide');
          if(dropdownMenu.classList.contains('hide')){
            clearInterval(notificationInterval);
            notificationInterval = setInterval(randomNumber, 2000);  
          }
          else{
          for(var i = 0; i < notificationNumber.length;i++){
             notificationNumber[i].textContent = 0;
             clearInterval(notificationInterval);
           }
         }
        }
        else {
          dropdownMenu.classList.add('hide');
          clearInterval(notificationInterval);
          notificationInterval = setInterval(randomNumber, randomRange(timeDelay));
        }
    }
    //var notificationInterval = setInterval(randomNumber, randomRange(timeDelay));
    window.addEventListener('click', bellCheck);
</script>
<script type="text/javascript">
  $(document).ready(function(){
      $('#action_menu_btn').click(function(){
      $('.action_menu').toggle();
    });
  }); 
</script>
<script type="text/javascript">
  $(function(){
  $('.fa-minus').click(function(){    $(this).closest('.chatbox').toggleClass('chatbox-min');
  });
  $('.fa-times').click(function(){
    $(this).closest('.chatbox').hide();
  });
  $("#chat_show").click(function(){
  $(".chatbox-holder .chatbox ").show();
});
});

</script>
   </head>
  </head>
   <?php 
      $obj = &get_instance();

      $user_id = $this->session->userdata['id'];
      $obj->load->model('Front/Payment_model');
      $getPaymentNotification = $obj->Payment_model->getallnotificationcount($user_id, 1);
      $getmissionNotification = $obj->Payment_model->getallnotificationcount($user_id, 2);
      $getofferNotification = $obj->Payment_model->getallnotificationcount($user_id, 3);
      $getmessageNotification = $obj->Payment_model->getallnotificationcount($user_id, 4);
      $getreviewsNotification = $obj->Payment_model->getallnotificationcount($user_id, 5);

      $count_payment = count($getPaymentNotification);
      $count_missionanddemands = count($getmissionNotification);
      $count_Offers = count($getofferNotification);
      $count_messages = count($getmessageNotification);
      $count_Reviews = count($getreviewsNotification);

      $total_notification_count = $count_payment + $count_missionanddemands + $count_Offers + $count_Reviews;
      
      $total_amount = $obj->Payment_model->get_sum_in_transaction($user_id);
      $obj->load->model('Front/User');
      $self_user = $obj->User->getSelfUser();
   ?>
   <body>
      <div class="top_header">
        <div class="container">
          <div class="logo" style="margin-top:15px; float:left;">
                <a href="<?php echo base_url('Front/home')?>"><img class="navbar-img" src="<?php echo base_url()?>assets/Front/img/MyLogo.png"></a>
          </div>
          <div class="row">
            <div class="col-md-9 text-right">  
              <div class="nav top_nav">
                <input type="checkbox" id="nav-check">                
                <div class="nav-btn">
                  <label for="nav-check">
                    <span></span>
                    <span></span>
                    <span></span>
                  </label>
                </div>                
                <div class="nav-links">
                  <a href="<?php echo base_url('Front/home')?>" style="font-size:14px;">Home</a>
                  <a href="<?php echo base_url('Front/home/post_demand')?>" style="font-size:14px;">Publier une demande</a>
                  <a href="<?php echo base_url('Front/home/find_mission')?>" style="font-size:14px;">Trouver une mission</a>
                  <a href="<?php echo base_url('Front/Home/search')?>" style="font-size:14px;">Trouver un Heelper</a>
                  <?php if($this->session->userdata['id']){?>
                     <a href="<?php echo base_url('Front/home/logout')?>" style="font-size:14px;">Se déconnecter</a>                 
                  <?php } else {?>                    
                      <a href="<?php echo base_url('Front/home/login')?>" style="font-size:14px;">Connexion/Inscription</a>
                   <?php } ?>           
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="top_right_side_icon">
                <ul>
                  <li>
                    
                    <?php if($this->session->userdata['id']){?>
                      <a href="<?php echo base_url('Front/home/chat')?>">
                    <?php } else {?>
                      <a href="<?php echo base_url('Front/home/login')?>">
                    <?php } ?>
                        <img class="chat_icn" src="<?php echo base_url();?>/assets/Front/img/chat.png" style="width:17px; margin-top:-12px;">
                        <?php if($count_messages != 0)  { ?>
                          <span class="notification-number badge_1"><span><?php echo $count_messages; ?></span>
                        <?php } ?>
                     </a>
                      
                  </li>
                  <li>
                    <div class="dropdown">
                    <?php if($this->session->userdata['id']){?>
                      <a href="javascript:void(0)" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" aria-expanded="false">
                        <i class="far fa-bell"></i>
                        <?php if($total_notification_count != 0)  { ?>
                          <span class="notification-number badge_2"><?php echo $total_notification_count; ?></span>
                        <?php } ?>
                      </a>
                    <?php } else {?>
                        <a href="<?php echo base_url('Front/home/login')?>" class="dropdown-toggle btn btn-primary"><i class="far fa-bell"></i></a>
                      <?php } ?>

                        <ul class="dropdown-menu animated fadeInUp notification_popup">
                          <li>
                            <h3>Notifications</h3>
                          </li>
                          <li>
                            <a href="<?php echo base_url('Front/Posts/Notification/1')?>" class="hvr-bounce-to-right">
                                <div class="not_icon">
                                  <img src="<?php echo base_url();?>/assets/Front/img/not_icn1.png">
                                  Paiements
                                </div>
                                <div class="not_status">
                                  <p><?php echo $count_payment; ?></p>
                                </div>
                            </a>
                          </li>
                          <li>
                            <a href="<?php echo base_url('Front/Posts/Notification/2')?>" class="hvr-bounce-to-right">
                                <div class="not_icon">
                                  <img src="<?php echo base_url();?>/assets/Front/img/not_icn2.png">
                                  <span>Statut des missions et demandes</span>
                                </div>
                                <div class="not_status">
                                  <p><?php echo $count_missionanddemands; ?></p>
                                </div>
                            </a>
                          </li>
                          <li>
                            <a href="<?php echo base_url('Front/Posts/Notification/3')?>" class="hvr-bounce-to-right">
                                <div class="not_icon">
                                  <img src="<?php echo base_url();?>/assets/Front/img/not_icn3.png">
                                  Offres
                                </div>
                                <div class="not_status">
                                  <p><?php echo $count_Offers; ?></p>
                                </div>
                            </a>
                          </li>
                          <li>
                            <a href="<?php echo base_url('Front/Posts/Notification/5')?>" class="hvr-bounce-to-right">
                                <div class="not_icon">
                                  <img src="<?php echo base_url();?>/assets/Front/img/not_icn5.png">
                                  Avis
                                </div>
                                <div class="not_status">
                                  <p><?php echo $count_Reviews; ?></p>
                                </div>
                            </a>
                          </li>
                        </ul>
                    </div>
                 </li>
                 <li>
                    <div class="dropdown drover_box">
                      <a href="javascript:void(0)" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" aria-expanded="false">
                          <?php
                            //var_dump($self_user);die();                              
                            if($user_id == null) {
                          ?> 
                              <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                          <?php
                            }
                            else {
                          ?>                          
                            <img class="my_prof" src="<?php echo base_url();?>uploads/profiles/<?php echo $self_user[0]['picture_url']?>" style="width: 50px; height: 50px; border-radius: 50px; margin-bottom: -15px;" />
                            <i class="fas fa-sort-down" style="color: #ff7700; float: right; margin-top: 5px; margin-left: 5px;"></i>                           
                          <?php
                            }  
                          ?>
                          
                      </a>
                      <ul class="dropdown-menu animated fadeInUp ">
                        <li>
                          <?php
                            $obj = &get_instance();
                            $obj->load->model('Front/RegisterModel');
                            //$profile_url = $obj->RegisterModel->PictureUrl();
                            $user=$obj->RegisterModel->GetUserData();
                          ?>  
                          <?php if($this->session->userdata['id']){?>
                          <div class="view_profile">
                            <?php if($user['picture_url']){  ?>
                              <img class="my_prof" src="<?php echo base_url();?>uploads/profiles/<?php echo $user['picture_url']?>">
                            <?php } 
                            else {?>
                              <img class="my_prof" src="<?php echo base_url();?>uploads/profiles/<?php echo $user['picture_url']?>">
                            <?php }?>
                          </div>
                          <div class="profile_dtls">
                                <h4><?=empty($user['username']) ? '' : $user['username'] ?></h4>
                                <p><b><?= $total_amount ?></b> <i class="fas fa-euro-sign"></i></p>
                          </div>
                          <a class="prfl_btn" href="<?php echo base_url('Front/home/my_profile')?>" style="width:120px !important;">Voir mon profil</a>
                          <a class="my_demands" href="<?php echo base_url('Front/home/mydemands')?>">Mes demandes</a>
                          <a class="my_missions" href="<?php echo base_url('Front/home/mymissions')?>">Mes missions</a>
                        <?php }?>
                        </li>
                        <li>
                          <a href="<?php echo base_url('Front/home/offer')?>" class="hvr-bounce-to-right">
                              <div class="not_icon">
                                <span><img src="<?php echo base_url();?>/assets/Front/img/drover2.png"></span>
                                Offre et promotion
                              </div>
                          </a>
                        </li>
                        <?php if($this->session->userdata['id']){?>
                        <li>
                          <a href="<?php echo base_url('Front/home/my_payment')?>" class="hvr-bounce-to-right">
                              <div class="not_icon">
                                <span><img src="<?php echo base_url();?>/assets/Front/img/drover3.png"></span>
                                Paiements
                              </div>
                          </a>
                        </li>
                        <?php }?>
                        <li>
                          <a href="<?php echo base_url('Front/contact')?>" class="hvr-bounce-to-right">
                              <div class="not_icon">
                                <span><img src="<?php echo base_url();?>/assets/Front/img/drover5.png"></span>
                                Support
                              </div>
                          </a>
                        </li>
                        <li>
                          <a href="<?php echo base_url('Front/home/about_heelp')?>" class="hvr-bounce-to-right">
                              <div class="not_icon">
                                <span><img src="<?php echo base_url();?>/assets/Front/img/drover6.png"></span>
                                A propos de Heelp
                              </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                 </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- fixed button right side -->
      <div class="find_a_mission_top_btn">        
        <a href="<?php echo base_url('Front/home/find_mission')?>" class="btn btn-default">Trouver une mission</a>
      </div>     
      <!-- fixed button right side end-->

