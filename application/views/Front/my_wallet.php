<?php $this->load->view('Front/common/header');  ?>


<section>
  <div class="top_bnr section post_demand">
    <div class="container">
      <div class="top-side about_title">
          <h4 class="title">My Wallet</h4>
        </div>
    </div>
  </div>
</section>

<section class="my_wallet_section">
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="wallet_img">
					<img src="<?php echo base_url('assets/Front/img/card2.png')?>">
					<p>My Credit</p>
					<a href="#" class="btn btn-default">50 €</a>

					<a href="#" class="btn btn-info">Withdraw money</a>
					<p>fees of 9% will be deducted Ex: for a withdrawal of 10 € you will receive 9.1 € or 0.9 euros of fees
					</p>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</section>

<?php $this->load->view('Front/common/footer');  ?>