<?php $this->load->view('Front/common/header');  ?>
<?php //print_r($card_details);
$user_id = $this->session->userdata['id'];


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
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-6">					
						<div class="edit_card credit_card">
							<div class="credit_card_head"><h4>Edit Your Card Details</h4></div>
							<?php foreach ($card_details as $value) { ?>
								<?php 
								$expiry = $value->expiry;
										$expiry_exp = explode("/", $expiry);
										//sprint_r($expiry_exp);
										$expiry_month = $expiry_exp[0];
										$expiry_year = $expiry_exp[1];
								 ?>
							<form name="update_credit_card" method="post" action="<?php echo base_url('Front/Payment/update_credit_card/')?>">
							<div class="card_number_input">
								<p>Card Number</p>
								<input type="number" name="card_no" placeholder="" value="<?php echo $value->card_no; ?>">
								<input type="hidden" name="card_id" placeholder="" value="<?php echo $value->id; ?>">
							</div>
							<div class="card_ul_li">
								<ul>
								<li><p>Expiry</p>
									<input type="text" name="expiry_month" placeholder="" value="<?php echo $expiry_month; ?>"> 
									<input type="text" name="expiry_year" placeholder="" value="<?php echo $expiry_year; ?>">
								</li>
								<!-- <li>
								  <p>CVV</p>
								  <input type="number" name="" value="" readonly="">
								</li> -->
							</ul>
							</div>
							<div class="save_credit_card">
								
								<input type="submit" name="submit" value="Submit" class="btn btn-info card_btn_info">
							</div>
						</form>
						<?php } ?>
							
								
						
						</div>

					
					</div>
					
					<div class="col-md-6">
						<div class="add_Card_btn">	
							<div class="credit_card_head"><h4>Edit Your Card Details</h4></div>					 
							  <button id="hide" type="button" class="btn btn-info card_btn_info" data-toggle="collapse" data-target="#demo">Add New Card</button>
							  <div id="demo" class="collapse">
							    <form name="add_credit_card" method="post" id="add_card"  action="<?php echo base_url('Front/Payment/add_credit_card/')?>">

							    <div class="card_number_input">
								<p>Card Number</p>
								<input type="number" name="card_no" placeholder="">
								<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
							</div>
							<div class="card_ul_li">
								<ul>
								<li><p>Expiry</p>
									<input type="number" name="expiry_month" placeholder="MM"> 
									<input type="number" name="expiry_year" placeholder="YY">
								</li>
								
							</ul>
							</div>
							<div class="save_credit_card">
								<input type="submit" name="submit" value="submit">
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


  
});
</script>

<?php $this->load->view('Front/common/footer');  ?>