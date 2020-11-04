
<?php $this->load->view('Front/common/header');  ?>

<section>
  <div class="top_bnr section post_demand">
    <div class="container">
      <div class="top-side about_title">
          <h4 class="title">Support et contact</h4>
        </div>
    </div>
  </div>
</section>

<section>
	<div class="about_heelp">
		<div class="container">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6 support_cont">
					 <?php if(!empty($status)){ ?>
                          <div class="status <?php echo $status['type']; ?>"><?php echo $status['msg']; ?></div>
                          <?php } ?>
					<h3>Formulaire de contact : </h3>
					<p>Merci de préciser la nature de votre contact dans le titre :</p>
					<form action="<?= base_url() ?>Front/Support/send" method="post">
					  <div class="form-group">
					    <input type="text" placeholder="Nom" name="name" class="form-control" id="">
					  </div>
					  <div class="form-group">
					    <input type="email" required="please enter mail" placeholder="Email" name="email" class="form-control" id="">
					  </div>
					  <div class="form-group">
					    <textarea placeholder="Déscription" class="form-control" name ="description" rows="5" id=""></textarea>
					  </div>
					  <!-- <a href="" class="Submit_btn">OK</a> -->
					  <button type="submit" class="Submit_btn" >OK</button>
					</form>
					<p>Contacter l’équipe Heelp par mail :</p>
					<span>contact@heelp.fr</span>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</div>
</section>

<?php $this->load->view('Front/common/footer');  ?>
