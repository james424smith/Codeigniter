<?php $this->load->view('Front/common/header');  ?>

<?php
	$obj = &get_instance();
	$obj->load->model('Front/RegisterModel');
//$profile_url = $obj->RegisterModel->PictureUrl();
	$user = $obj->RegisterModel->GetUserData();
//print_r($user);die();
?> 
<?php 	
	$user_id = $user['id'];
	$obj->load->model('Front/User');
	$class_star = $obj->User->getRatingClassName($user_id);
 ?>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript" src="../../../assets/js/custom_payment.js"></script>

<section>
	<div class="my_profile">
		<div class="container">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div class="my_profile_box">
						<div class="my_prfl_cont">
							<div class="view_profile">
								<img  class="my_pro" src="<?php  echo base_url()?>/uploads/profiles/<?php echo $user['picture_url']?>">
								<span> <a href="#" data-toggle="modal" data-target="#user_profile"><img src="<?php  echo base_url()?>/assets/Front/img/edit.png"></a>
								</span>
							</div>
							<div class="profile_dtls">
								<span><a href="#" data-toggle="modal" data-target="#edit_profile">Modifier le profil</a></span>
								<h4><?=empty($user['username'])?'':$user['username']?></h4>
								<p><?=empty($user['skills'])?'':$user['skills']?></p>	                               
							</div>
							<a href="<?php echo base_url('Front/home/review_profile/' . $user['id'])?>">
								<span class="stars-container <?php echo $class_star;?>">★★★★★</span>
							</a><br>
							<span><a href="#" data-toggle="modal" data-target="#save_credit_card">WithDraw Credit Card Info</a></span>                       
						</div>
					</div>
					<div class="Presentation">
                          		<h5>Présentation:</h5>
                          		<p><?=empty($user['presentation'])?'':$use['presentation']?></p>
					</div>
					<div class="Presentation">
                          		<h5>Niveau d'études:</h5>
                          		<p><?=empty($user['level_of_study'])?'':$user['level_of_study']?></p>
					</div>
					<div class="Presentation">
                          		<h5>Domaine d'études</h5>
                          		<p><?=empty($user['Field_of_study'])?'':$user['Field_of_study']?></p>
					</div>
					<div class="Presentation">
                          		<h5>Université/Ecole</h5>
                          		<p><?=empty($user['university'])?'':$user['university']?></p>
					</div>
					<div class="Presentation">
                          		<h5>Catégories d'interêt sur Heelp</h5>
                          		<p><?=empty($user['intrested_category'])?'':$user['intrested_category']?></p>
					</div>
					<div class="Presentation">
                          		<h5>Compétences:</h5>
                          		<p><?=empty($user['skills'])?'':$user['skills']?></p>
					</div>
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
	</div>
</section>

<!-- user image -->
<div id="user_profile" class="modal fade" role="dialog" style="fade:not(.show):opacity: 1 !important";>
	<div class="modal-dialog">
		 <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modifier le profil Picture</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('Front/Register/userprofile/')?>" method="post" enctype="multipart/form-data">
        	<div class="row">
				  <div class="form-group col-md-12">
				  	<div class="profile_upload_input">
				  	  <label for="text">Joindre un fichier</label>
				  	  <input type="file" class="form-control" name="picture_url" value="" id="file">			  	   
				    </div>
					<br>
					<div class="post_form_content text-center">
						<span id="file-name" style="color:blue;">Pas de fichier</span>
					</div>
				  </div>
				  <input type="hidden" class="form-control" name="id" value="<?=$user['id']?>" id="">
				</div>
				 <div class="modal-footer">
		        <button type="submit" class="btn btn-default">enregistrer</button>
		      </div>
			</form>
		</div>
	</div>
</div>
</div>

<!-- Edit Profile Modal -->
<div id="edit_profile" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modifier le profil</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('Front/Register/editprofile')?>" method="post">
        	<div class="row">
				  <div class="form-group col-md-6">
				    <label for="text">Prénom:</label>
				    <input type="text" class="form-control" name="first_name" value="<?=empty($user['first_name'])?'':$user['first_name']?>" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">Nom:</label>
				    <input type="text" class="form-control" name="last_name" value="<?=empty($user['last_name'])?'':$user['last_name']?>" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">Nom d'utilisateur:</label>
				    <input type="text" class="form-control"  name="username" value="<?=empty($user['username'])?'':$user['username']?>"id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">Status:</label>
				    <input type="text" class="form-control" name="status" value="<?=empty($user['status'])?'':$user['status']?>" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">Email:</label>
				    <input type="text" class="form-control" name="email" value="<?=empty($user['email'])?'':$user['email']?>" id="">
				  </div>
				 
				  <div class="form-group col-md-6">
				    <label for="text">Date de naissance:</label>
				    <input type="date" class="form-control" name="dob" value="<?=empty($user['dob'])?'':$user['dob']?>" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">Pays:</label>
				    <input type="text" class="form-control" name="country" value="<?=empty($user['country'])?'':$user['country']?>" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">Présentation:</label>
				    <input type="text" class="form-control" name="presentation" value="<?=empty($user['presentation'])?'':$user['presentation']?>" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">Niveau d'études:</label>
				    <input type="text" class="form-control" name="level_of_study" value="<?=empty($user['level_of_study'])?'':$user['level_of_study']?>" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">Domaine d'études</label>
				    <input type="text" class="form-control" name="Field_of_study" value="<?=empty($user['Field_of_study'])?'':$user['Field_of_study']?>" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">Université/Ecole:</label>
				    <input type="text" class="form-control" name="university" value="<?=empty($user['university'])?'':$user['university']?>" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">Catégories d'interêt sur Heelp</label>
				    <input type="text" class="form-control" name="intrested_category" value="<?=empty($user['intrested_category'])?'':$user['intrested_category']?>" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">Compétences:</label>
				    <input type="text" class="form-control" name="skills" value="<?=empty($user['skills'])?'':$user['skills']?>" id="">
				  </div> 
				    <input type="hidden" class="form-control" name="id" value="<?=$user['id']?>" id="">

		   </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default">enregistrer</button>
      </div>
      </form>
    </div>

  </div>
</div>
<!-- Modal -->

<!-- Save Creidt Card -->
<div id="save_credit_card" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding-top:30px;">
        <h4 class="modal-title">Credit Card</h4>
		<button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('Front/Register/save_credit_card')?>" method="post" id="custom_form">
        	<div class="row">
				  <div class="form-group col-md-12">
				    <label for="text">Nom de la carte:</label>
				    <input type="text" class="form-control" name="card_name" id="card_name" required>
				  </div>
				  <div class="form-group col-md-12">
				    <label for="text">Numéro de carte:</label>
				    <input type="number" class="form-control" name="card_number" id="card_number" required>
				  </div>
				  <div class="form-group col-md-12">
				    <label for="text">Expiry:</label>
				  </div>
				  <div class="form-group col-md-4">
				    <input type="number" class="form-control" name="card_cvv" placeholder="CVV"  id="card_cvv" required>
				  </div>
				  <div class="form-group col-md-4">
				    <input type="number" class="form-control" name="card_mm" placeholder="MM" id="card_mm" required>
				  </div>
				  <div class="form-group col-md-4">
				    <input type="number" class="form-control" name="card_yy" placeholder="YY"  id="card_yy" required>
				  </div>
				  
				  <input type="hidden" class="form-control" name="id" id="">

		   	</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default" id="make_custom_account">enregistrer</button>
      </div>
      </form>
    </div>

  </div>
</div>
<!-- Modal -->


<?php $this->load->view('Front/common/footer');  ?>

<script>
	$(document).ready(function(){
		$('#file').change(function (e) {
			//alert(e.target.files[0].name);
			$('#file-name').html(e.target.files[0].name);
		});
	});
</script>