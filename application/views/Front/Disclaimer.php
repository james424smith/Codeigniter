<!DOCTYPE html>
<html amp>
<head>

    <title>Alphawizz</title>

    <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/slick.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.4/css/intlTelInput.css" integrity="sha256-rTKxJIIHupH7lFo30458ner8uoSSRYciA0gttCkw1JE=" crossorigin="anonymous" />
  <script src="js/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
  <script src="js/aos.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.4/js/intlTelInput.js" integrity="sha256-J5cTd51pKg6Pcr2fkY1GNyVn9/nXvogO7WX7z+o2rG8=" crossorigin="anonymous"></script>
</head>

<body oncontextmenu="return false;">

<?php

function getVisIpAddr() { 
      
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) { 
        return $_SERVER['HTTP_CLIENT_IP']; 
    } 
    else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { 
        return $_SERVER['HTTP_X_FORWARDED_FOR']; 
    } 
    else { 
        return $_SERVER['REMOTE_ADDR']; 
    } 
}

$vis_ip = getVisIPAddr();

$ipdat = @json_decode(file_get_contents( 
    "http://www.geoplugin.net/json.gp?ip=" . $vis_ip)); 
   
$ipdat = $ipdat->geoplugin_countryName;  

?>



  <div id="topbar1" class="wptbbarheaddiv">
    <div id="wptbheadline1" class="wptbbars wptbbar1"><a href="mailto:lead.alphawizz@gmail.com">Email: lead.alphawizz@gmail.com</a> <a href="tel:+919589875003"> Contact No: +919589875003</a>
    </div>
  </div>

<header id="masthead" class="site-header">
<div class="container">
<div class="site-branding">

<div class="site-logo">
<a href="http://alphawizz.com/our_services3/" class="custom-logo-link" rel="home">
<img width="150" height="36" src="img/logo.jpg" class="custom-logo" alt="">
</a>
</div>

</div>

</div>
</header>
<!-- header start end -->
  <section>
    <div class="container-fluid top_section">
      <div class="welcome-content">
        <div class="container">
          <div class="row h-100 align-items-center">
              <!-- Welcome Text -->
              <div class="col-md-8">
                <div class="Menu">
                    <div class="Menu-list">
                       <div class="Menu-list-item top_title" data-offset="16">
                          <div class="Mask">
                            <h1 class="">Think Innovate Grow</h1>
                            <?php 
                            if(isset($_GET['Message'])){?>
                              <h3 style="color:green"><?php echo $_GET['Message'];?></h3>
                            <?php } ?>
                          </div>
                       </div>
                       <div class="Menu-list-item top_cont" data-offset="12">
                          <div class="Mask">
                             <p>Leverage our experience and extensive expertise to create a solid <br>development  foundation for your business.</p>
                          </div>
                       </div>
                    </div>
                </div>
              </div>
              <!-- Welcome Thumbnail -->
              <div class="col-md-4">
                <div class="Registration-form">
                  <h2>REGISTER NOW</h2>
                  <h5>Please fill in the details below. Our experts will contact you shortly!</h5>
                    <form method="post" id="basic-form" name="basic-form" class="wpcf7-form" action="registration-mail.php">
                       <input type="email" id="email1" name="email1" placeholder="Please enter you email" value="" size="40">
                        <input type="hidden" name="country" value="<?php echo $ipdat; ?>">
                       <select name="lookingfor1" id="lookingfor1">
                          <option value="">Select Services</option>
                          <option value="Mobile Application">Mobile Application</option>
                          <option value="Website Development">Website Development</option>
                          <option value="Ecommerce">Ecommerce</option>
                          <option value="Digital Marketing">Digital Marketing</option>
                          <option value="Customized Software">Customized Software</option>
                          <option value="Job">Job</option>
                       </select>
                       <span>
                        <select name="budget" id="budget">
                          <option value="">Select Budget</option>
                          <option value="$100-700">$100-700</option>
                          <option value="$700-1000">$700-1000</option>
                          <option value="$1000+">$1000+</option>
                        </select>
                       </span>
                       <input type="text" placeholder="please enter your skypeid" id="skypeid" name="skypeid" value="" size="40">
                       <input type="tel" id="phone" minlength="10" maxlength="10" placeholder="please enter your phone no" name="phone" value="" placeholder="">
                       <input type="submit" value="Send" class="">
                    </form>
                </div>
              </div>
           </div>
          </div>
      </div>
  </section>
  <!-- end s-home -->

  <!-- about_sec -->
  <section>
     <div class="container-fluid">
        <div class="row">
           <div class="about_sec" id="about" style="background-image: url(img/about_bnr.jpg)">
              <div class="container">
                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 img_about">
                    <img data-aos="zoom-in-right " data-aos-easing="linear" data-aos-duration="1500" src="img/led.png" alt="" title="">
                    <div class="bg_animation" style="background: gray url(img/alphawizz_img-min-1.jpg) repeat 0 0;"></div>
                 </div>
                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 about_content" data-aos="zoom-in-left" data-aos-easing="linear"   data-aos-duration="1500">
                    <h1>About <span>Alphawizz</span></h1>
                    <p>Hi people. We’re Alphawizz.</p>
                    <p>We believe in ideas that are exceptional and people who not-so-conventional.We are a design studio partnering with brands of multiple industries scattered all across the globe. Our work is to build class digital products like websites, web apps, ecommerce stores, mobile platforms.</p>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </section>
  <!-- about_sec -->
 
  <!-- our_client -->
  
  <footer id="colophon" class="site-footer">
  <div class="site-info">
    <div class="row">
    <div class="container">
      <div class="col-md-6">
        <p class="copyright-serv2">© Copyright 2019 by 
          <a href="https://alphawizz.com/" class="imprint">Alphawizz.com</a>
        </p>
      </div>
      <div class="col-md-6">        
        <div class="socials_icn"> 
          <ul>
            <li><a href="https://www.facebook.com/Alphawizz.Technologies/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="https://twitter.com/AlphawizzTech"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="https://www.instagram.com/alphawizz_technologies/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="https://www.linkedin.com/company/alphawizz/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          </ul>
        </div>
        <!-- whatsapp  -->
        <div class="mobile_view">         
          <a target="_blank" href="https://api.whatsapp.com/send?phone=+919589875003"><img src="img/Whatsapp-512.png"></a>
        </div>
        <!--end whatsapp -->
        <!-- live chat -->
        <!-- <div class="mobile-live-chat">
          <a target="_blank" href="https://tawk.to/chat/5dd4d85ed96992700fc84c38/default">
            <img src="img/chat-1.png">
          </a>   
        </div> -->
      </div> 
    </div>      
    </div>      
  </div><!-- .site-info -->   
</footer>

<div id="bkgOverlay" class="backgroundOverlay"></div>
<div id="delayedPopup" class="delayedPopupWindow">
  <div class="innerbox">
    <!--<a href="#" id="btnClose" title="Click here to close this deal box.">[ X ]</a>-->
    <!-- This is the left side of the popup for the description -->
    <div class="formDescription">
      <h3 style="color:#328471;text-align: center;    font-weight: bold;">Get a Free Consultation</h3>
      <p>Please fill in the details below. Our experts will contact you shortly!</p>
    </div>
  <!-- Begin MailChimp Signup Form -->
    <div id="mc_embed_signup">
      <form action="registration-mail.php" method="post" id="basic-form1" name="basic-form1" class="wpcf7-form">
        <div class="mc-field-group">
          <input type="text" value="" name="name" id="name" placeholder="Please enter your name">
        </div>
        <div class="mc-field-group">
          <input type="tel" value="" name="phone1" minlength="10" maxlength="10" id="phone1" placeholder="Please enter your phone">
        </div>
        <div class="mc-field-group">
          <input type="email" value="" name="email"  class="required email" id="email" placeholder="Please enter your email">
        </div>
        <input type="hidden" name="country1" value="<?php echo $ipdat; ?>">
        <div class="mc-field-group">
          <select name="lookingfor" id="lookingfor" placeholder="what are you looking for">
            <option value="">Select</option>
            <option value="Mobile Application">Mobile Application</option>
            <option value="Website Development">Website Development</option>
            <option value="Ecommerce">Ecommerce</option>
            <option value="Digital Marketing">Digital Marketing</option>
            <option value="Customized Software">Customized Software</option>
            <option value="Job">Job</option>
          </select>
        </div>
        <input type="submit" value="Send" class="">
      </form>
    </div>
  </div>
  <!-- End MailChimp Signup Form -->
</div>


</body>
</script>



