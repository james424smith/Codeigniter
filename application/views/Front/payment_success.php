<?php $this->load->view('Front/common/header');  ?>
<?php
$obj=&get_instance();
$obj->load->model('Front/Payment_model');
//check if stripe token exist to proceed with payment
if(!empty($_POST['stripeToken'])){
    // get token and user details
    $stripeToken  = $_POST['stripeToken'];
    $custName = $_POST['custName'];
    $custEmail = $_POST['custEmail'];
    $cardNumber = $_POST['cardNumber'];
    $cardCVC = $_POST['cardCVC'];
    $cardExpMonth = $_POST['cardExpMonth'];
    $offer_username = $_POST['offer_username'];
    $cardExpYear = $_POST['cardExpYear']; 
    $get_offer_amount = $_POST['get_offer_amount'];
    $get_offer_user_id = $_POST['get_offer_user_id'];
    $get_offer_project_id = $_POST['get_offer_project_id'];
    $get_offer_mission_name = $_POST['get_offer_mission_name'];
    $user1_id = $this->session->userdata['id'];
    $date_created = date('Y-m-d H:i:s');

    //include Stripe PHP library
    require(APPPATH.'/libraries/stripe-php/init.php');

    //set stripe secret key and publishable key
    $stripe = array(
      "secret_key"      => "sk_test_agIhwfWd0DII3LbPRvfHs0ws00IlypxkxU",
      "publishable_key" => "pk_test_IKgHpz7lpleTM3rcFSnyoxC700UDOoixI7"
    );    
    \Stripe\Stripe::setApiKey($stripe['secret_key']);    
    //add customer to stripe
    $customer = \Stripe\Customer::create(array(
        'email' => $custEmail,
        'source'  => $stripeToken
    ));    
    // item details for which payment made
    $itemName = "Mission" .$get_offer_mission_name;
    $itemNumber = $get_offer_project_id;
    $itemPrice = $get_offer_amount;
    $currency = "EUR";
    $orderID = "Heelporidd" . $get_offer_project_id;    
    // details for which payment performed
    $payDetails = \Stripe\Charge::create(array(
        'customer' => $customer->id,
        'amount'   => $itemPrice,
        'currency' => $currency,
        'description' => $itemName,
        'metadata' => array(
            'order_id' => $orderID
        )
    ));    
    // get payment details
    $paymenyResponse = $payDetails->jsonSerialize();
    // check whether the payment is successful
    if($paymenyResponse['amount_refunded'] == 0 && empty($paymenyResponse['failure_code']) && $paymenyResponse['paid'] == 1 && $paymenyResponse['captured'] == 1){
        // transaction details 
        $amountPaid = $paymenyResponse['amount'];
        $balanceTransaction = $paymenyResponse['balance_transaction'];
        $paidCurrency = $paymenyResponse['currency'];
        $paymentStatus = $paymenyResponse['status'];
        $paymentDate = date("Y-m-d H:i:s");        
        //insert tansaction details into database
    //include_once("db_connect.php");
        
    
       //if order inserted successfully
       if($paymentStatus == 'succeeded'){
            $paymentMessage = "<strong>The payment was successful.</strong><strong> Order ID: {$lastInsertId}</strong>";

            $add_demand = array('sent_from'=>$user1_id,'sent_to'=>$get_offer_user_id,'amount'=>$get_offer_amount,'tra_id'=>$balanceTransaction,'created_date'=>$date_created,'username'=>$offer_username,'project_title'=>$get_offer_mission_name,'mission_id'=>$get_offer_project_id);
//$offer_amount=$obj->Payment_model->get_offer_amount($id);
 $result = $obj->Payment_model->inserransection($add_demand);

 $status = $obj->Payment_model->acceptOfferafter($get_offer_project_id);

       } else{
          $paymentMessage = "Payment failed!";
       }
    } else{
        $paymentMessage = "Payment failed!";
    }
} else{
    $paymentMessage = "Payment failed!";
}
//echo $paymentMessage;

?>  

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
          <div style="text-align: center;">          
            <div class="edit_card credit_card">
              <div class="credit_card_head">
                <img class="success_img" src="http://alphawizz.com/Freelance/assets/Front/img/success.png">
                <h4>Payment success</h4>
              </div> 
              <a href="http://alphawizz.com/Freelance/Front/home" class="btn btn-defult">Home Page</a>
            </div>          
          </div>
          
<!--           <div class="col-md-6">
            <div class="add_Card_btn">  
              <div class="credit_card_head"><h4>Edit Your Card Details</h4></div>          
                <button id="hide" type="button" class="btn btn-info card_btn_info" data-toggle="collapse" data-target="#demo">Add New Card</button>
                <div id="demo" class="collapse">
                  <div class="card_number_input">
                <p>Card Number</p>
                <input type="number" name="" placeholder="1234">
              </div>
              <div class="card_ul_li">
                <ul>
                <li><p>Expiry</p>
                  <input type="number" name="" placeholder="MM"> <input type="number" name="" placeholder="YY">
                </li>
                <li>
                  <p>CVV</p>
                  <input type="number" name="">
                </li>
              </ul>
              </div>
              <div class="save_credit_card">
                <a href="#" class="btn btn-defult">Save</a>
              </div>
                </div>
            </div>
          </div> -->    
      </div>
      <div class="col-md-3"></div>

    </div>    
  </div>
</section>

<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $(".card_btn_info").hide();
  });


  
});
</script>

<?php $this->load->view('Front/common/footer');  ?>