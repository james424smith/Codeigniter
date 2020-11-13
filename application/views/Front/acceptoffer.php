<?php $this->load->view('Front/common/header');  ?>

<?php if($this->session->flashdata('lack_wallet')){ ?>
  <script>
    swal("Your balance is not enough to pay.");
  </script> 
<?php } ?>


<?php
    $obj = &get_instance();
    $obj->load->model('Front/Payment_model');
    $id = $this->uri->segment(4);
    
    $offer_amount = $obj->Payment_model->get_offer_amount($id);

    $get_offer_user_id = $offer_amount[0]['user_id']; 
    $get_offer_mission_id = $offer_amount[0]['project_id'];
    $get_offer_amount = $offer_amount[0]['offer_budget'];
  
    $amount_12 = ($get_offer_amount * 12) / 100;
    $amount_with_tax = $get_offer_amount + 0.25;
    $total_amount = $amount_with_tax + $amount_12;
?>

<section>
  <div class="top_bnr section post_demand">
    <div class="container">
    
      <div class="top-side about_title">
          <h4 class="title" style="color:#6d6dfb;">Paiement</h4>
        </div>
    </div>
  </div>
</section>

<section>
  <div class="Payment">
    <div class="container">
        <div class="row main_box_payment">

            <div class="col-md-12">
                   <table class="table table-bordered">
                      <thead>
                        
                      </thead>
                      <tbody>
                        <tr>
                          <td>Montant</td>
                          <td><?php echo $get_offer_amount; ?> €</td>
                        </tr>
                        <tr>
                          <td>Frais bancaire et de service</td>
                          <td><?php echo $amount_12 . " €"; ?></td>
                        </tr>
                        <tr>
                          <td>Frais de transaction</td>
                          <td>0.25 €</td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <td>Montant à payer</td>
                          <td><?php echo $total_amount; ?> €</td>
                        </tr>
                      </tfoot>
                    </table>

                    <div class="col-md-12 Payment_card">
                          <div class="">  
                              <h3>Méthode de paiement</h3>
                              <div class="radiobuttons">
                                <div class="rdio radio_frst rdio-primary radio-inline"> 
                                  <input name="radio" value="1" id="radio1" type="radio" checked>
                                  <label for="radio1">
                                    <img src="<?php echo base_url('assets/Front/img/card1.png');?>" />
                                    Carte bancaire
                                  </label>
                                </div>
                                <!--<div class="rdio rdio-primary radio-inline">
                                  <input name="radio" value="2" id="radio2" type="radio">
                                  <label for="radio2">
                                    <img src="<?php echo base_url('assets/Front/img/card2.png');?>">
                                    Wallet
                                  </label>
                                </div>-->
                              </div>
                              <a class="nex_btn" id="card" href="<?php echo base_url('Front/Payment/payment_card_details/')?><?php echo $id; ?>">Suivant</a>
                              <!--<a class="nex_btn" id="wallet" href="" data-toggle="modal" data-target="#myModalpayment">Next</a>-->
                          </div>
                    </div>
            </div>

        </div>
    </div>
      
  </div>

  <div class="container">
   <!-- Modal -->
  <div class="modal fade" id="myModalpayment" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        

        <div class="post_demand_details_popup">
        	 <button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4>Funding</h4>				
				<form action="<?php echo base_url('Front/Payment/payment_success/')?>" method="post">
					<div class="">

						<input type="hidden" name="wallet" value="1">
						<input type="hidden" name="offer_id" value="<?php echo $id; ?>">
            <input type="hidden" name="mission_id" value="<?php echo $get_offer_mission_id; ?>">
            <input type="hidden" name="offer_user_id" value="<?php echo $get_offer_user_id; ?>">	
						<input type="hidden" name="total_amount" value="<?php echo $total_amount; ?>">

					      <table class="table table-bordered">
                      <thead>
                        
                      </thead>
                      <tbody>
                        <tr>
                          <td>Montante</td>
                          <td><?php echo $get_offer_amount ?> €</td>
                        </tr>
                        <tr>
                          <td>Frais de service</td>
                          <td>12 %</td>
                        </tr>
                        <tr>
                          <td>frais bancaires</td>
                          <td>0.25 €</td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <td>Montant à payer</td>
                          <td><?php echo $total_amount; ?> €</td>
                        </tr>
                      </tfoot>
                    </table>
					</div>
					<button type="submit" class="btn btn-default">OK</button>
				</form>
			</div>
      </div>
      
    </div>
  </div>
  
</div>


  
</section>

<?php $this->load->view('Front/common/footer');  ?>
<script>

  $(document).ready(function() {    

    //$("#card").show();
    //$("#wallet").hide();

    //$('input[type=radio]').change(function() {
    //  if (this.value == '1') {
    //      $("#card").show();
    //      $("#wallet").hide();
    //  }
    //  else if (this.value == '2') {
    //      $("#card").hide();
    //      $("#wallet").show();
    //  }
    });
  });

</script>
