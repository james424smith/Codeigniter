<?php $this->load->view('Front/common/header');  ?>


<section>
  <div class="top_bnr section post_demand">
    <div class="container">
      <div class="top-side about_title">
          <h4 class="title">Paiement</h4>
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
                          <td>Montante</td>
                          <td>600 €</td>
                        </tr>
                        <tr>
                          <td>Frais de service</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>frais bancaires</td>
                          <td>10,5 €</td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <td>Montant à payer</td>
                          <td>610,5 €</td>
                        </tr>
                      </tfoot>
                    </table>

                    <div class="col-md-12 Payment_card">
                          <div class="">  
                              <h3>Méthode de paiement</h3>
                              <div class="radiobuttons">
                                <div class="rdio radio_frst rdio-primary radio-inline"> <input name="radio" value="1" id="radio1" type="radio" checked>
                                  <label for="radio1">
                                    <img src="<?php echo base_url();?>/assets/Front/img/card1.png">
                                    Carte bancaire
                                  </label>
                                </div>
                                <div class="rdio rdio-primary radio-inline">
                                  <input name="radio" value="2" id="radio2" type="radio">
                                  <label for="radio2">
                                    <img src="<?php echo base_url();?>/assets/Front/img/card2.png">
                                    Wallet
                                  </label>
                                </div>
                              </div>
                              <a class="nex_btn" href="#">Suivant</a>
                          </div>
                    </div>
            </div>
        </div>
    </div>      
  </div>
</section>

<?php $this->load->view('Front/common/footer');  ?>