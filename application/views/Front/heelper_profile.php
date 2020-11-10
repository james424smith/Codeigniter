<?php $this->load->view('Front/common/header');  ?>
<?php 
	$obj = &get_instance();
	$admin_url = $this->config->item('base_url'); 
	$id = $this->uri->segment(4);
	//var_dump($id);die();
	$pro = $this->db->query("select * from users where id=" . $id)->result_array();
	
	$obj->load->model('Front/User');
	$self_user = $obj->User->getSelfUser();
	
?>
<section>
	<div class="my_profile heelpr-profile">
		<div class="container">
			<div class="row">
				<?php foreach ($pro as  $member) { ?>
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div class="my_profile_box">
						<div class="my_prfl_cont">
							<div class="view_profile">
	                              <img class="my_pro" src="<?php echo $admin_url?>uploads/profiles/<?php echo $member['picture_url'];?>">
	                         </div>
	                          <div class="profile_dtls">
	                          		<span>
										<a href="#!" id="chat_show" class="heelpr_chat"><i class="fa fa-comments" id="chat_add" aria-hidden="true"></i> Chat</a>
										<input type=hidden id="sender_id" value="<?php echo $self_user[0]['id']; ?>">
										<input type=hidden id="receiver_id" value="<?php echo $id; ?>">
									</span>
									<!--<span><a href="<?php //echo base_url("Front/home/chat"); ?>" class="heelpr_chat"><i class="fa fa-comments" aria-hidden="true"></i> Chat</a></span>-->
	                                <h4><?php echo $member['skills']; ?></h4>
	                          </div> 
								<?php
									$class_star = $obj->User->getRatingClassName($member['id']); 
							   ?>
							   <span class="stars-container <?php echo $class_star; ?>">★★★★★</span><br>
							   	<a href="<?php echo base_url('Front/home/review_profile/' . $member['id'])?>">
								   Avis
								</a>	                        
						</div>
					</div>
					<div class="Presentation">
								<h5>Présentation:</h5>
                          		<p><?=empty($member['presentation'])?'':$member['presentation']?></p>
					</div>
					<div class="Presentation">
                          		<h5>Niveau d'études:</h5>
                          		<p><?=empty($member['level_of_study'])?'':$member['level_of_study']?></p>
					</div>
					<div class="Presentation">
                          		<h5>Domaine d'études</h5>
                          		<p><?=empty($member['Field_of_study'])?'':$member['Field_of_study']?></p>
					</div>
					<div class="Presentation">
                          		<h5>Université/Ecole</h5>
                          		<p><?=empty($member['university'])?'':$member['university']?></p>
					</div>
					<div class="Presentation">
                          		<h5>Catégories d'interêt sur Heelp</h5>
                          		<p><?=empty($member['intrested_category'])?'':$member['intrested_category']?></p>
					</div>
					<div class="Presentation">
                          		<h5>Compétences:</h5>
                          		<p><?=empty($member['skills'])?'':$member['skills']?></p>
					</div>				
				</div>
				<div class="col-md-2"></div>
			<?php }?>
			</div>
		</div>
	</div>
</section>

 
<!-- Modal -->
<div id="edit_profile" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modifier le profil</h4>
      </div>
      <div class="modal-body">
        <form action="">
        	<div class="row">
				  <div class="form-group col-md-6">
				    <label for="text">Name:</label>
				    <input type="text" class="form-control" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">User Name:</label>
				    <input type="text" class="form-control" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">Status:</label>
				    <input type="text" class="form-control" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">Email:</label>
				    <input type="text" class="form-control" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">Password:</label>
				    <input type="Password" class="form-control" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">Birth:</label>
				    <input type="text" class="form-control" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">Country:</label>
				    <input type="text" class="form-control" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">Présentation:</label>
				    <input type="text" class="form-control" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">Lavel of studies:</label>
				    <input type="text" class="form-control" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">Domaine d'études</label>
				    <input type="text" class="form-control" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">Univercity /School:</label>
				    <input type="text" class="form-control" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">Catégories d'interêt sur Heelp</label>
				    <input type="text" class="form-control" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">Compétences:</label>
				    <input type="text" class="form-control" id="">
				  </div> 
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

<!-- chat  --> 
<div class="chatbox-holder">
  <div class="chatbox">
    <div class="card">
		<div class="card-header msg_head">
			<div class="d-flex bd-highlight">
				<div class="img_cont">
					<img src="<?php echo base_url("uploads/profiles/" . $pro[0]['picture_url']);?>" class="rounded-circle user_img">
					<?php if($pro[0]['status'] == 1) { ?>
						<span class="online_icon"></span>
					<?php } else { ?>
						<span class="offline_icon"></span>
					<?php } ?>
				</div>
				<div class="user_info">
					<span><?php echo $pro[0]['username']; ?></span>
				</div>
				<input type="hidden" id="recive_id" value="<?php echo $id; ?>">
				<input type="hidden" id="reciver_img" value="<?php echo base_url("uploads/profiles/" . $pro[0]['picture_url']);?>">
				<input type="hidden" id="self_img" value="<?php echo base_url("uploads/profiles/" . $self_user[0]['picture_url']);?>">

			</div>
			<div class="chatbox-icons">
		        <a href="javascript:void(0);"><i class="fa fa-minus"></i></a>
		        <a href="javascript:void(0);"><i class="fa fa-times" aria-hidden="true"></i></a>       
		      </div> 
		</div>
		<div class="card-body msg_card_body" id="content">
			
		</div> 
		<div class="card-footer">
			<div class="input-group">
				<div class="input-group-append">
					<span class="input-group-text attach_btn hidden-file"><i class="fas fa-paperclip"></i>
					</span>
					<input type="file" name="file" id="files" class="upload_attachmentfile" style="display:none;"/>
				</div>
				<textarea name="" class="form-control type_msg message" placeholder="Tapez votre message..."></textarea>
				<div class="input-group-append">
					<span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
				</div>
			</div>
		</div>
	</div>
  </div>  
</div> 
<!-- chat end -->

<?php $this->load->view('Front/common/footer');  ?>
<script src='../../../assets/js/chat/individual_chat.js'></script>

<script>

$(document).ready(function(){
	$('#chat_show').click(function () {		
		//alert($("#reciver_id").val());
		ScrollDown();
		$.post("/addChatMember",
		{
			sender_id: $("#sender_id").val(),
			receiver_id: $("#receiver_id").val()
		},
		function(res){
			
		});
	});
});
</script>
