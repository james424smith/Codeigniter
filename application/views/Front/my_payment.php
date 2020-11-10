<?php $this->load->view('Front/common/header');  ?>


<section>
  <div class="top_bnr section post_demand">
    <div class="container">
      <div class="top-side about_title">
          <h3 class="title" style="color:blue;">Paiement</h3>
        </div>
    </div>
  </div>
</section>

<section class="my_payment_section">
  <div class="Payment">
    <div class="container">
        <div class="row main_box_payment">
            <div class="col-md-12">
              <div class="Payment_card">
                  <div class="">  
                      <!-- <h3>Choose a payment method</h3> -->
                      <div class="row">
                        <!-- <div class="col-md-4">
                          <div class="rdio radio_frst rdio-primary radio-inline"> 
                            <label for="radio1">
                              <img src="<?php echo base_url();?>/assets/Front/img/card2.png">
                            </label>
                            <p><a href="<?php echo base_url('Front/home/my_wallet')?>" class="btn btn_default">Wallet</a></p>
                          </div>
                        </div> -->
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                          <div class="rdio rdio-primary radio-inline">                          
                            <label for="radio2">
                              <img src="<?php echo base_url();?>/assets/Front/img/card1.png">
                            </label>
                            <p><a href="<?php echo base_url('Front/Payment/credit_card')?>" class="btn btn_default">Carte bancaire</a></p>
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="rdio rdio-primary radio-inline">                          
                            <label for="radio2">
                              <img src="<?php echo base_url();?>/assets/Front/img/transaction.png">
                            </label>
                            <p><a href="<?php echo base_url('Front/home/transactions')?>" class="btn btn_default">Transaction</a></p>
                          </div>
                        </div>
                      </div>
                  </div>
              </div>
            </div>
        </div>
    </div>      
  </div>
</section>

<?php $this->load->view('Front/common/footer');  ?>