<?php $this->load->view('Front/common/header');  ?>
<?php //print_r($card_details);
	$user_id = $this->session->userdata['id'];
?>

<section>
  <div class="top_bnr section post_demand">
    <div class="container">
      <div class="top-side about_title">
          <h4 class="title">Carte bancaire</h4>
        </div>
    </div>
  </div>
</section>

<section class="credit_ard_section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-6">					
						<div class="edit_card credit_card" style="padding:14px;">
							<div class="credit_card_head"><h4 style="color:#31b731;">Carte bancaire enregistrée</h4></div><hr>
							<?php foreach ($card_details as $value) { ?>
								<?php 
									$expiry = $value->expiry;
									$expiry_exp = explode("/", $expiry);
									//sprint_r($expiry_exp);
									$expiry_month = $expiry_exp[0];
									$expiry_year = $expiry_exp[1];
									$display_number = substr($value->card_no, -4);									
								?>
							<form name="update_credit_card" method="post" action="<?php echo base_url('Front/Payment/delete_credit_card/')?>">
								<div class="card_number_input row">
									<div class="col-md-7" style="margin-right:60px;">
										<h5><?php echo $value->name; ?> &nbsp;&nbsp;&nbsp;.... &nbsp;&nbsp;.... &nbsp;&nbsp;.... &nbsp;&nbsp;<?php echo $display_number;?></h5>
									</div>
									<div class="col-md-2">
										<button type="submit" class="btn btn-default">Supprimer</button>
									</div>
								</div>
								<input type="hidden" name="card_no" placeholder="" value="<?php echo $value->card_no; ?>">
								<input type="hidden" name="card_id" placeholder="" value="<?php echo $value->id; ?>">
								<!--<div class="card_number_input">
									<p>Card Number</p>
									
								</div>
								<div class="card_ul_li">
									<ul>
										<li><p>Expiry</p>
											<input type="text" name="expiry_month" placeholder="" value="<?php echo $expiry_month; ?>"> 
											<input type="text" name="expiry_year" placeholder="" value="<?php echo $expiry_year; ?>">
										</li>
									<li>
									<p>CVV</p>
									<input type="number" name="" value="" readonly="">
									</li> 
								</ul>
								</div>
								<div class="save_credit_card">								
									<input type="submit" name="submit" value="Submit" class="btn btn-info card_btn_info">
								</div>-->
							</form><hr>
							<?php } ?>																		
						</div>					
					</div>					
					<div class="col-md-6">
						<div class="add_Card_btn">	
							<div class="credit_card_head"><h4 style="color:#31b731;">Ajouter une nouvelle carte</h4></div><hr>					 
								<button id="hide" type="button" class="btn btn-info card_btn_info" data-toggle="collapse" data-target="#demo" style="margin-top:200px;">Ajouter une nouvelle carte</button>
								<div id="demo" class="collapse">
									<form name="add_credit_card" method="post" id="add_card"  action="<?php echo base_url('Front/Payment/add_credit_card/')?>">
										<div class="card_number_input">
											<p>Nom de la carte</p>
											<input type="text" name="name" placeholder="" required>
										</div>
										<div class="card_number_input">
											<p>Numéro de carte</p>
											<input type="number" name="card_no" id="card_no" placeholder="" required />
											<input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
										</div>
										<div class="card_ul_li">
											<ul>
												<li><p>Expiry</p>
													<input type="number" name="cvv_code" id="cvv_code" placeholder="CVV" required />
													<input type="number" name="expiry_month" placeholder="MM" required /> 
													<input type="number" name="expiry_year" placeholder="YY" required />										
												</li>								
											</ul>
										</div>
										<div class="save_credit_card">
											<button type="submit" class="btn btn-default" name="submit">OK</button>
										</div>
									</form>
								</div>
						</div>
					</div>
				</div>
				<div class="row">					
				</div>
			</div>
		</div>		
	</div>
</section>

<script>
$(document).ready(function(){
  	$("#hide").click(function(){
    	$(".card_btn_info").hide();
  	});
  	$('#card_no').on('input propertychange paste', function () {
    	var val = $(this).val()
    	var reg = /^.{17,18}/gi;
		if (val.match(reg)) {
			$(this).val(val.replace(reg, ''));
		}
	});
	$('#cvv_code').on('input propertychange paste', function () {
		var val = $(this).val()
		var reg = /^.{4,5}/gi;
		if (val.match(reg)) {
			$(this).val(val.replace(reg, ''));
		}
    });
});
</script>

<?php $this->load->view('Front/common/footer');  ?>