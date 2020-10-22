<?php
if(isset($_POST['submit_password']))
{
  $email=$_POST['email'];
  $pass=md5($_POST['password']);
 $at = mysqli_connect('localhost','alphafk6_heelp','XA%Csh-~5AnO','alphafk6_heelp');

  $select=mysqli_query($at,"update users set password='$pass' where email='$email'");
  

}
?>


<?php

if($_GET['key'] && $_GET['reset'])
{
  $email=$_GET['key'];
  $pass=$_GET['reset'];
   /* echo "select email,password from users where md5(email)='$email' and md5(password)='$pass'";
    exit();*/
  $myconnect = mysqli_connect('localhost','alphafk6_heelp','XA%Csh-~5AnO','alphafk6_heelp');

  $select=mysqli_query($myconnect,"select email,password from users where md5(email)='$email' and md5(password)='$pass'");
$fetch = mysqli_fetch_array($select);
$fetch_email= $fetch[0];
}
?>

<!DOCTYPE html>
<html>
   <head>
      <title>Heelp</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">    
      <link rel="stylesheet" href="<?php echo base_url();?>assets/Front/css/style.css">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/Front/css/custom.css">
      <link href="<?php echo base_url();?>assets/Front/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/Front/fontawesome/css/all.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Front/css/slick.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Front/css/slick-theme.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Front/css/custom.css">
  
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 

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
      //var isClickInside = bellIcon.contains(event.target);
      //  if (isClickInside) {
      //    dropdownMenu.classList.toggle('hide');
      //    if(dropdownMenu.classList.contains('hide')){
      //      clearInterval(notificationInterval);
      //      notificationInterval = setInterval(randomNumber, 2000);  
      //    }
      //    else{
      //    for(var i = 0; i < notificationNumber.length;i++){
      //       notificationNumber[i].textContent = 0;
      //       clearInterval(notificationInterval);
      //    }
      //  }
      //  }
      //  else {
      //    dropdownMenu.classList.add('hide');
      //    clearInterval(notificationInterval);
      //    notificationInterval = setInterval(randomNumber, randomRange(timeDelay));
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
      <body>
      <div class="top_header">
        <div class="container">
          <div class="row">
            <div class="col-md-2">
              <div class="logo">
                <a href="<?php echo base_url();?>Front/home"><img class="navbar-img" src="<?php echo base_url();?>assets/Front/img/heelp.png"></a>
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
                  <a href="<?php echo base_url();?>Front/home">Home</a>
                  <!-- <a href="<?php echo base_url();?>Front/about">About Us</a> -->
                  <a href="<?php echo base_url();?>Front/home/post_demand">Post a demand</a>
                  <a href="<?php echo base_url();?>Front/home/find_mission">Find a Mission</a>
                  <!-- <a href="#">My Demands</a> -->
                  <!-- <a href="<?php echo base_url();?>Front/contact">Contact Us</a> -->
                  <a href="<?php echo base_url();?>Front/Home/search">Find A heelper</a>
                                      
                      <a href="<?php echo base_url();?>Front/home/login">Log in</a>
                                   </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="top_right_side_icon">
                <ul>
                  <!-- <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>  
                  <li><a href=""><img class="chat_icn" src="<?php echo base_url();?>/assets/Front/img/chat.png"></a></li>  --> 
                 <li>
                    <div class="dropdown">
                      <a href="javascript:void(0)" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" aria-expanded="false"><i class="far fa-bell"></i></a>
                      <ul class="dropdown-menu animated fadeInUp notification_popup">
                        <li>
                          <h3>Notifications</h3>
                        </li>
                        <li>
                          <a href="<?php echo base_url();?>Front/Posts/Notification/1" class="hvr-bounce-to-right">
                              <div class="not_icon">
                                <img src="<?php echo base_url();?>/assets/Front/img/not_icn1.png">
                                Payments
                              </div>
                              <div class="not_status">
                                <p>0</p>
                              </div>
                          </a>
                        </li>
                        <li>
                          <a href="<?php echo base_url();?>Front/Posts/Notification/2" class="hvr-bounce-to-right">
                              <div class="not_icon">
                                <img src="<?php echo base_url();?>/assets/Front/img/not_icn2.png">
                                <span>Missions & demands Status</span>
                              </div>
                              <div class="not_status">
                                <p>0</p>
                              </div>
                          </a>
                        </li>
                        <li>
                          <a href="<?php echo base_url();?>Front/Posts/Notification/3" class="hvr-bounce-to-right">
                              <div class="not_icon">
                                <img src="<?php echo base_url();?>/assets/Front/img/not_icn3.png">
                                Offers
                              </div>
                              <div class="not_status">
                                <p>0</p>
                              </div>
                          </a>
                        </li>
                        <li>
                          <a href="<?php echo base_url();?>Front/Posts/Notification/4" class="hvr-bounce-to-right">
                              <div class="not_icon">
                                <img src="<?php echo base_url();?>/assets/Front/img/not_icn4.png">
                                Messages
                              </div>
                              <div class="not_status">
                                <p>0</p>
                              </div>
                          </a>
                        </li>
                        <li>
                          <a href="<?php echo base_url();?>Front/Posts/Notification/5" class="hvr-bounce-to-right">
                              <div class="not_icon">
                                <img src="<?php echo base_url();?>/assets/Front/img/not_icn5.png">
                                Reviews
                              </div>
                              <div class="not_status">
                                <p>0</p>
                              </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                 </li>
                 <li>
                    <div class="dropdown drover_box">
                      <a href="javascript:void(0)" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
                      <ul class="dropdown-menu animated fadeInUp ">
                        <li>
                            
                                                  </li>

                        <li>
                          <a href="<?php echo base_url();?>Front/home/offer" class="hvr-bounce-to-right">
                              <div class="not_icon">
                                <span><img src="<?php echo base_url();?>/assets/Front/img/drover2.png"></span>
                                Promotion offer
                              </div>
                          </a>
                        </li>
                        <li>
                          <a href="<?php echo base_url();?>Front/home/my_payment" class="hvr-bounce-to-right">
                              <div class="not_icon">
                                <span><img src="<?php echo base_url();?>/assets/Front/img/drover3.png"></span>
                                Payment
                              </div>
                          </a>
                        </li>
                        <li>
                          <a  href="<?php echo base_url();?>Front/home/support_contact" class="hvr-bounce-to-right">
                              <div class="not_icon">
                                <span><img src="<?php echo base_url();?>/assets/Front/img/drover5.png"></span>
                                Support
                              </div>
                          </a>
                        </li>
                        <li>
                          <a href="<?php echo base_url();?>Front/home/about_heelp" class="hvr-bounce-to-right">
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
        <a href="<?php echo base_url();?>Front/home/find_mission" class="btn btn-default">Find a Mission</a>
      </div>
      <!-- fixed button right side end-->


     <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6 login-box">
                   <h3>Password updated successfully</h3>  
                   <div class="text-center register-link">
                            <a href="<?php echo base_url();?>Front/Home/login">Back to Login</a>
                        </div>
                <!-- <div class="login-form">
                    <div class="login-form">
                                
                    <form class="form-signin"  action="change_pass.php" method="post">
						<div class="account-logo">
                            <a href="index-2.html"><img src="<?php echo base_url();?>assets/img/logo.png" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>Enter Your Password</label>
                            <input type="hidden" name="email" value="<?php //echo $fetch_email;?>">
                            <input type="password" name='password'>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" type="submit">Reset Password</button>
                        </div>
                        <div class="text-center register-link">
                            <a href="<?php echo base_url();?>Front/Home/login">Back to Login</a>
                        </div>
                    </form>
                </div>
			</div> -->
        </div>
    </div>
</div>
    




      <!-- footer bottom -->
      <footer id="footer-nav" class="site-footer" >
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <div class="footer_left_menu">
                    <ul>
                      <li><a href="<?php echo base_url();?>Front/home/mymissions">My Missions</a></li>
                      <li><a href="<?php echo base_url();?>Front/home/mydemands">My Demands</a></li>
                      <li><a href="<?php echo base_url();?>Front/contact">Contact Us</a></li>
                      <li><a href="<?php echo base_url();?>Front/home/terms_condition">Terms & Conditions</a></li>
                    </ul>
                  </div>
               </div>              
               <div class="col-md-5">
                  <div class="app_image">
                    <ul>
                      <li><img src="<?php echo base_url();?>assets/Front/img/google_play.png"></li>
                      <li><img src="<?php echo base_url();?>assets/Front/img/app_store.png"></li>
                    </ul>
                  </div>
               </div>
            </div>
         </div>          
        </footer>

     <!--  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>  -->
        

      <!-- <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->

     
      <script src="<?php echo base_url();?>assets/Front/js/slick.min.js"></script>
      
      <script src="<?php echo base_url();?>assets/Front/js/custom.js"></script>
        

      
      
<!-- footer bottom -->

</body>

</html> <!-- forgot-password24:03-->
