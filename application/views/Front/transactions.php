<?php $this->load->view('Front/common/header');  ?>
<?php 
  $obj = &get_instance();
  $obj->load->model('Front/Payment_model');
  $user_id = $this->session->userdata['id'];
  $myalltransection = $obj->Payment_model->getPayment($user_id);

  $myintransection = $obj->Payment_model->getPaymentIn($user_id);
  $myouttransection = $obj->Payment_model->getPaymentOut($user_id);
 ?>
<section>
  <div class="top_bnr section post_demand">
    <div class="container">
      <div class="top-side about_title">
          <h4 class="title">Transactions</h4>
        </div>
    </div>
  </div>
</section>

 
<section class="transactions_section">
  <div class="section portfolio">
    <main id="main" class="container">
      <nav class="nav">
          <a href="#" class="nav-item active" data-rel="all">All</a>
          <a href="#" class="nav-item" data-rel="option-1">In</a>
          <a href="#" class="nav-item" data-rel="option-2">Out</a>
      </nav>
 
        <ul class="tabs_list">

        <?php foreach($myalltransection as $value)
        {
          if($value['sent_from'] == $user_id)
          {
            $class = "option-2";
            $img = "assets/Front/img/out.png";
          }
          else{
            $class = "option-1";
            $img = "assets/Front/img/in.png";
          }
        ?>
          <li class="project red <?php echo $class; ?> all" >
              <div class="item row">
                    <div class="col-md-4 img_box">
                      <img src="<?php echo base_url($img)?>" alt="Work 1">
                    </div>            
                    <div class="col-md-8 cat_content">
                          <h5><?php echo $value['project_title']; ?></h5>
                          <p>Project of : <?php echo $value['sent_from_username']; ?></p>
                          <div class="row">
                            <div class="col-md-12 status Delivred">
                              <p>$ <?php echo  $value['amount']; ?></p>
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
          </li> 

          <?php } ?>  


          <?php foreach($myalltransection as $value)
                {
                  if($value['sent_from'] == $user_id)
                  {
                    $class = "red";
                    $img = "assets/Front/img/out.png";
                  }
                  else{
                    $class = "green";
                    $img = "assets/Front/img/in.png";
                 }
          ?>
          <li class="project  <?php echo $class; ?> all"  >
              <div class="item row">
                    <div class="col-md-4 img_box">
                      <img src="<?php echo base_url($img)?>" alt="Work 1">
                    </div>            
                    <div class="col-md-8 cat_content">
                          <h5><?php echo $value['project_title']; ?></h5>
                          <p>Project of : <?php echo $value['sent_from_username']; ?></p>
                          <div class="row">
                            <div class="col-md-12 status Delivred">
                              <p>$ <?php echo  $value['amount']; ?></p>
                            </div>              
                          </div>                      
                    </div>
                    <p class="cat_date"><?php echo $value['created_date']; ?></p>
             </div>
          </li> 
          <?php } ?>        
        </ul>
    </main>
  </div>
</section>

<?php $this->load->view('Front/common/footer');  ?>