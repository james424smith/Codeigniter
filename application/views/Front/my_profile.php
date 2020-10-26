<?php $this->load->view('Front/common/header');  ?>

<?php
	$obj = &get_instance();
	$obj->load->model('Front/RegisterModel');
//$profile_url = $obj->RegisterModel->PictureUrl();
	$user = $obj->RegisterModel->GetUserData();
//print_r($user);die();
?> 
<?php $user_id = $user['id'];
		$avg = $this->Posts_model->selectAvgOfRating($user_id);

            $count = 0;
            $total = 0;
            for($j = 0; $j < count($avg); $j++)
            {
                $total += $avg[$j]->rating;
                $count++;
            }
            if($count != 0)
            {
                $av = $total/$count;
                $user_detail = number_format($av, 2, '.', '');
            }
            else
            {
                $user_detail = 0;
            }
            if($user_detail == 0)
            {
            	$class_star = "stars-0";
            }
            elseif($user_detail == 0.50)
            {
            	$class_star = "stars-10";
            }
            elseif($user_detail == 1.00)
            {
            	$class_star = "stars-20";
            }
            elseif($user_detail == 1.50)
            {
            	$class_star = "stars-30";
            }
            elseif($user_detail == 2.00)
            {
            	$class_star = "stars-40";
            }
            elseif($user_detail == 2.50)
            {
            	$class_star = "stars-50";
            }
            elseif($user_detail == 3.00)
            {
            	$class_star = "stars-60";
            }
            elseif($user_detail == 3.50)
            {
            	$class_star = "stars-70";
            }
            elseif($user_detail == 4.00)
            {
            	$class_star = "stars-80";
            }
            elseif($user_detail == 4.50)
            {
            	$class_star = "stars-90";
            }
            elseif($user_detail == 5.00)
            {
            	$class_star = "stars-100";
            }
 ?>

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
	                          		<span><a href="#" data-toggle="modal" data-target="#edit_profile">Edit Profile</a></span>
	                                <h4><?=empty($user['username'])?'':$user['username']?></h4>
	                                <p><?=empty($user['skills'])?'':$user['skills']?></p>	                               
	                          </div>  
	                           <span class="stars-container <?php echo $class_star;?>">★★★★★</span>                       
						</div>
					</div>
					<div class="Presentation">
                          		<h5>Presentation:</h5>
                          		<p><?=empty($user['presentation'])?'':$user['presentation']?></p>
					</div>
					<div class="Presentation">
                          		<h5>Level of Studies:</h5>
                          		<p><?=empty($user['level_of_study'])?'':$user['level_of_study']?></p>
					</div>
					<div class="Presentation">
                          		<h5>Field of Studies:</h5>
                          		<p><?=empty($user['Field_of_study'])?'':$user['Field_of_study']?></p>
					</div>
					<div class="Presentation">
                          		<h5>Univecity / School:</h5>
                          		<p><?=empty($user['university'])?'':$user['university']?></p>
					</div>
					<div class="Presentation">
                          		<h5>Categories of interest on heelp:</h5>
                          		<p><?=empty($user['intrested_category'])?'':$user['intrested_category']?></p>
					</div>
					<div class="Presentation">
                          		<h5>Skills:</h5>
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
        <h4 class="modal-title">Edit Profile Picture</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('Front/Register/userprofile/')?>" method="post" enctype="multipart/form-data">
        	<div class="row">
				  <div class="form-group col-md-12">
				  	<div class="profile_upload_input">
				  	  <label for="text">Upload Profile</label>
				  	  <input type="file" class="form-control" name="picture_url" value="" id="">			  	   
				    </div>
				  </div>
				  <input type="hidden" class="form-control" name="id" value="<?=$user['id']?>" id="">
				</div>
				 <div class="modal-footer">
		        <button type="submit" class="btn btn-default">Save</button>
		      </div>
			</form>
		</div>
	</div>
</div>
</div>

<!-- Modal -->
<div id="edit_profile" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Profile</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('Front/Register/editprofile')?>" method="post">
        	<div class="row">
				  <div class="form-group col-md-6">
				    <label for="text">First Name:</label>
				    <input type="text" class="form-control" name="first_name" value="<?=empty($user['first_name'])?'':$user['first_name']?>" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">Last Name:</label>
				    <input type="text" class="form-control" name="last_name" value="<?=empty($user['last_name'])?'':$user['last_name']?>" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">User Name:</label>
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
				    <label for="text">Birth:</label>
				    <input type="date" class="form-control" name="dob" value="<?=empty($user['dob'])?'':$user['dob']?>" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">Country:</label>
				    <input type="text" class="form-control" name="country" value="<?=empty($user['country'])?'':$user['country']?>" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">Presentation:</label>
				    <input type="text" class="form-control" name="presentation" value="<?=empty($user['presentation'])?'':$user['presentation']?>" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">Lavel of studies:</label>
				    <input type="text" class="form-control" name="level_of_study" value="<?=empty($user['level_of_study'])?'':$user['level_of_study']?>" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">Field of studies:</label>
				    <input type="text" class="form-control" name="Field_of_study" value="<?=empty($user['Field_of_study'])?'':$user['Field_of_study']?>" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">Univercity /School:</label>
				    <input type="text" class="form-control" name="university" value="<?=empty($user['university'])?'':$user['university']?>" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">Categories of interest on heelp:</label>
				    <input type="text" class="form-control" name="intrested_category" value="<?=empty($user['intrested_category'])?'':$user['intrested_category']?>" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">SKills:</label>
				    <input type="text" class="form-control" name="skills" value="<?=empty($user['skills'])?'':$user['skills']?>" id="">
				  </div> 
				    <input type="hidden" class="form-control" name="id" value="<?=$user['id']?>" id="">

		   </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default">Save</button>
      </div>
      </form>
    </div>

  </div>
</div>
<!-- Modal -->


<?php $this->load->view('Front/common/footer');  ?>