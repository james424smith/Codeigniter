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

      //var_dump($get_offer_user_id);die();
      $offer_username = $obj->Payment_model->get_username($get_offer_user_id);
     
      $get_offer_username = "username";//$get_offer_project_id[0]['username'];
      //var_dump($get_offer_username); die();
      $offer_mission_name = $obj->Payment_model->get_mission_name($get_offer_project_id);
      $get_offer_mission_name = $offer_mission_name[0]['mission_title'];

      $amount_12 = ($get_offer_amount * 12) / 100;

      $amount_with_tax = $get_offer_amount + 0.25;

      $total_amount = round($amount_with_tax + $amount_12);

?>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript" src="../../../assets/js/payment.js"></script>

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
              <div class="credit_card_head"><h4 style="color:#31b731;">Edit Your Card Details</h4></div><hr><br>
              <form action="<?php echo base_url('Front/Payment/payment_success/')?>" method="POST" id="paymentForm">

                <div class="card_number_input">
                  <p>Name on Card</p>
                  <input type="text" name="custName" placeholder="Name on Card" id="" required>
                  <input type="hidden" name="custEmail" class="form-control">
                </div>

                <div class="card_number_input">
                  <p>Card Number</p>
                  <input type="number" name="cardNumber" autocomplete="off" placeholder="Enter your card number..." id="cardNumber" required>
                </div>
                <div class="card_ul_li">
                  <ul>
                    <li>
                      <p>CVV</p>
                      <input type="number" name="cardCVC" id="cardCVC" autocomplete="off" required>
                    </li>
                  
                    <li>
                      <p>Expiry</p>
                      <input type="number" name="cardExpMonth" placeholder="MM" id="cardExpMonth" required> 
                      <input type="number" name="cardExpYear" placeholder="YYYY" id="cardExpYear" required>
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
<?php $this->load->view('Front/common/footer');  ?>
<script>
	$(document).ready(function(){		
		$('#cardCVC').on('input propertychange paste', function (e) {
			var val = $(this).val()
			var reg = /^.{4,5}/gi;
			if (val.match(reg)) {
				$(this).val(val.replace(reg, ''));
			}
    });
    $('#cardNumber').on('input propertychange paste', function () {
      var val = $(this).val()
      var reg = /^.{20,21}/gi;   
			if (val.match(reg)) {
				$(this).val(val.replace(reg1, ''));
			}
    });
    $('#cardExpMonth').on('input propertychange paste', function (e) {
      var val = $(this).val()
      var reg = /^(0[1-9]|1[0-2])$/;   
			if (val.match(reg)) {
				$(this).val(val.replace(reg1, ''));
			}


    });


	});
</script>