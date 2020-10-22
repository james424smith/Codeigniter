<?php $this->load->view('Front/common/header');  ?>
<?php
      $obj = &get_instance();
      $obj->load->model('Front/Payment_model');
      $id = $this->uri->segment(4);
      //$profile_url = $obj->RegisterModel->PictureUrl();
      $offer_amount = $obj->Payment_model->get_offer_amount($id);

      $get_offer_amount = $offer_amount[0]['offer_budget'];
      $get_offer_user_id = $offer_amount[0]['user_id'];
      $get_offer_project_id = $offer_amount[0]['project_id'];

      $offer_username = $obj->Payment_model->get_username($get_offer_user_id);
      $get_offer_username = $get_offer_project_id[0]['username'];

      $offer_mission_name = $obj->Payment_model->get_mission_name($get_offer_project_id);
      $get_offer_mission_name = $offer_mission_name[0]['mission_title'];

      $amount_12 = ($get_offer_amount*12)/100;

      $amount_with_tax = $get_offer_amount+0.25;

      $total_amount = round($amount_with_tax + $amount_12);

?>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/payment.js"></script>

<section>
  <div class="top_bnr section post_demand">
    <div class="container">
      <div class="top-side about_title">
          <h4 class="title">Credit Card</h4>
        </div>
    </div>
  </div>
</section>

<section class="credit_ard_section">
  <div class="container">
    <div class="row">
          <div class="col-md-3"></div>      
          <div class="col-md-6">          
            <div class="edit_card credit_card">
              <div class="credit_card_head"><h4>Edit Your Card Details</h4></div>
              <form action="<?php echo base_url('Front/Payment/payment_success/')?>" method="POST" id="paymentForm">

                <div class="card_number_input">
                  <p>Name on Card</p>
                  <input type="text" name="custName" placeholder="Name on Card" id="" >
                  <input type="hidden" name="custEmail" class="form-control">
                </div>

                <div class="card_number_input">
                  <p>Card Number</p>
                  <input type="text" name="cardNumber" autocomplete="off" placeholder="Enter your card number..." id="cardNumber" >
                </div>
                <div class="card_ul_li">
                  <ul>
                    <li>
                      <p>CVV</p>
                      <input type="text" name="cardCVC" id="cardCVC" autocomplete="off">
                    </li>
                  
                    <li>
                      <p>Expiry</p>
                      <input type="text" name="cardExpMonth" placeholder="MM" id="cardExpMonth"> 
                      <input type="text" name="cardExpYear" placeholder="YYYY" id="cardExpYear">
                      <input type="hidden" name="get_offer_amount" placeholder="" id="get_offer_amount" value="<?php echo $get_offer_amount; ?>">
                      <input type="hidden" name="get_offer_user_id" placeholder="" id="get_offer_user_id" value="<?php echo $get_offer_user_id; ?>">
                      <input type="hidden" name="get_offer_project_id" placeholder="" id="get_offer_project_id" value="<?php echo $get_offer_project_id; ?>">
                      <input type="hidden" name="offer_username" placeholder="" id="offer_username" value="<?php echo $get_offer_username; ?>">
                      <input type="hidden" name="get_offer_mission_name" placeholder="" id="get_offer_mission_name" value="<?php echo $get_offer_mission_name; ?>">
                      <input type="hidden" name="cardExpYear" placeholder="YYYY" id="cardExpYear">
                    </li>
                </ul>
              </div>
              <div class="save_credit_card">
                <input type="submit" id="makePayment" class="btn btn-success" value="Make Payment">
              </div>
                </form>
            </div>

          
          </div>
          <div class="col-md-3"></div>
    
    </div>    
  </div>
</section>

<!-- <script>
$(document).ready(function(){
  $("#hide").click(function(){
    $(".card_btn_info").hide();
  });


  
});
</script> -->

<?php $this->load->view('Front/common/footer');  ?>