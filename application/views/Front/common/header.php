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
      for(var i = 0; i < notificationNumber.length;i++){
        notificationNumber[i].textContent = random;
      }
    }
    function randomRange(data) {
      var newTime = data[Math.floor(data.length * Math.random())];
      return newTime;
    }
    function bellCheck(event){
     // var isClickInside = bellIcon.contains(event.target);
     //   if (isClickInside) {
     //     dropdownMenu.classList.toggle('hide');
     //     if(dropdownMenu.classList.contains('hide')){
     //       clearInterval(notificationInterval);
     //       notificationInterval = setInterval(randomNumber, 2000);  
     //     }
     //     else{
     //     for(var i = 0; i < notificationNumber.length;i++){
     //        notificationNumber[i].textContent = 0;
     //        clearInterval(notificationInterval);
     //     }
     //   }
     //   }
     //   else {
     //     dropdownMenu.classList.add('hide');
     //     clearInterval(notificationInterval);
     //     notificationInterval = setInterval(randomNumber, randomRange(timeDelay));
      //  }
    }
    var notificationInterval = setInterval(randomNumber, randomRange(timeDelay));
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

      $count_payment = count($notification_data_payment);
      $count_missionanddemands = count($notification_missionanddemands);
      $count_Offers = count($notification_Offers);
      $count_messages = count($notification_messages);
        
      $count_Reviews = count($notification_Reviews);

      $obj->load->model('Front/User');
      $self_user = $obj->User->getSelfUser();
   ?>
   <body>
      <div class="top_header">
        <div class="container">
          <div class="row">
            <div class="col-md-2">
              <div class="logo" style="margin-top:10px;">
                <a href="<?php echo base_url('Front/home')?>"><img class="navbar-img" src="<?php echo base_url('assets/Front/img/Logo.png')?>"></a>
              </div>
            </div>
            <div class="col-md-8">  
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
                  <a href="<?php echo base_url('Front/home')?>">Home</a>
                  <!-- <a href="<?php echo base_url('Front/about')?>">About Us</a> -->
                  <a href="<?php echo base_url('Front/home/post_demand')?>">Post a demand</a>
                  <a href="<?php echo base_url('Front/home/find_mission')?>">Find a Mission</a>
                  <!-- <a href="#">My Demands</a> -->
                  <!-- <a href="<?php echo base_url('Front/contact')?>">Contact Us</a> -->
                  <a href="<?php echo base_url('Front/Home/search')?>">Find A heelper</a>
                  <?php if($this->session->userdata['id']){?>
                     <a href="<?php echo base_url('Front/home/logout')?>">Log out</a>                 
                  <?php } else {?>                    
                      <a href="<?php echo base_url('Front/home/login')?>">Log in</a>
                   <?php } ?>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="top_right_side_icon">
                <ul>
                  <!-- <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>  
                  <li><a href="<?php //echo base_url('Front/home/chat')?>"><img class="chat_icn" src="<?php echo base_url();?>/assets/Front/img/chat.png"></a></li>  --> 
                 <li>
                    <div class="dropdown">
                      <a href="javascript:void(0)" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" aria-expanded="false"><i class="far fa-bell"></i></a>
                      <ul class="dropdown-menu animated fadeInUp notification_popup">
                        <li>
                          <h3>Notifications</h3>
                        </li>
                        <li>
                          <a href="<?php echo base_url('Front/Posts/Notification/1')?>" class="hvr-bounce-to-right">
                              <div class="not_icon">
                                <img src="<?php echo base_url();?>/assets/Front/img/not_icn1.png">
                                Payments
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
                                <span>Missions & demands Status</span>
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
                                Offers
                              </div>
                              <div class="not_status">
                                <p><?php echo $count_Offers; ?></p>
                              </div>
                          </a>
                        </li>
                        <li>
                          <a href="<?php echo base_url('Front/Posts/Notification/4')?>" class="hvr-bounce-to-right">
                              <div class="not_icon">
                                <img src="<?php echo base_url();?>/assets/Front/img/not_icn4.png">
                                Messages
                              </div>
                              <div class="not_status">
                                <p><?php echo $count_messages; ?></p>
                              </div>
                          </a>
                        </li>
                        <li>
                          <a href="<?php echo base_url('Front/Posts/Notification/5')?>" class="hvr-bounce-to-right">
                              <div class="not_icon">
                                <img src="<?php echo base_url();?>/assets/Front/img/not_icn5.png">
                                Reviews
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
                            <i class="fas fa-sort-down" style="color: #ff7700; float: right; margin-top: 10px; margin-left: 5px;"></i>                           
                          <?php
                            }  
                          ?>
                          
                      </a>
                      <ul class="dropdown-menu animated fadeInUp ">
                        <li>
                          <?php
                            $obj=&get_instance();
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
                                <h4><?=empty($user['username'])?'':$user['username']?></h4>
                                <p><?=empty($user['skills'])?'':$user['skills']?></p>
                          </div>
                          <a class="prfl_btn" href="<?php echo base_url('Front/home/my_profile')?>">View Profile</a>
                          <a class="my_demands" href="<?php echo base_url('Front/home/mydemands')?>">My demands</a>
                          <a class="my_missions" href="<?php echo base_url('Front/home/mymissions')?>">My missions</a>
                        <?php }?>
                        </li>

                        <li>
                          <a href="<?php echo base_url('Front/home/offer')?>" class="hvr-bounce-to-right">
                              <div class="not_icon">
                                <span><img src="<?php echo base_url();?>/assets/Front/img/drover2.png"></span>
                                Promotion offer
                              </div>
                          </a>
                        </li>
                        <li>
                          <a href="<?php echo base_url('Front/home/my_payment')?>" class="hvr-bounce-to-right">
                              <div class="not_icon">
                                <span><img src="<?php echo base_url();?>/assets/Front/img/drover3.png"></span>
                                Payment
                              </div>
                          </a>
                        </li>
                        <li>
                          <a  href="<?php echo base_url('Front/home/support_contact')?>" class="hvr-bounce-to-right">
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
                                About Heelp
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
        <a href="<?php echo base_url('Front/home/find_mission')?>" class="btn btn-default">Find a Mission</a>
      </div>     
      <!-- fixed button right side end-->

