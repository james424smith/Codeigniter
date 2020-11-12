
<?php $this->load->view('Front/common/header');  ?>

<?php
	$obj = &get_instance();
	$user_id = $this->session->userdata['id'];
	
	$obj->load->model('Front/User');
	$self_user = $obj->User->getSelfUser();

	$obj->load->model('ChatModel');
	$all_users = $obj->ChatModel->getChattingMembers();

	//var_dump($all_users);die();
?>
<style>
	  .badge_4 {
		position: absolute;
		font-size: 100%;
		border-radius: 50%;
		background-color: red;
		color: white;
		padding-left: 6px;
		padding-right: 5px;
		margin-top: 2px;
		margin-left: 2px;
		font-weight: bolder;
		margin-left:300px;
		margin-top: 15px;
  }
</style>
<section>
	<div class="chat_box">
		<div class="container chat_system">
			<div class="row justify-content-center h-100">
					<!-- start chat system -->
					<div class="col-md-4 chat">
						<div class="card mb-sm-3 mb-md-0 contacts_card">
							<div class="card-header" style="margin-bottom:10px;">
								<div class="input-group">
									<input type="text" placeholder="Chercher..." name="" class="form-control search">
									<div class="input-group-prepend">
										<span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
									</div>	
								</div>
							</div>
							<div class="card-body contacts_body" style="border-radius:0px">
							   <input type="hidden" id="sender_id" value="<?php echo $self_user[0]['id']?>" >
							   <input type="hidden" id="reciever_id" value="" >

								<ui class="contacts">
									<?php foreach ($all_users as $user) {
											if($user_id == $user['sender_id']) {
									?> 
											<li style="cursor:pointer;" class="<?php echo $user['reciver_id'];?>">
												<?php
													 $user_data = $obj->User->getUserByID($user['reciver_id']);
													 $unread_msg_count = $obj->ChatModel->getUnReadMsgCount($user_data->id);
												?>
												<?php if($unread_msg_count != 0) { ?>
													<span class="badge_4" id="unread_msg<?=$user_data->id?>"><?=$unread_msg_count?></span>
												<?php } ?>
												<div class="d-flex bd-highlight">
													<div class="img_cont">
														<img src="<?php echo base_url('/uploads/profiles/' . $user_data->picture_url)?>" class="rounded-circle user_img <?php echo "img-" . $user_data->id;?>">
														<?php if($user_data->status == 1) {?>
															<span class="online_icon"></span>
															<input type="hidden" class="<?php echo 'online-' . $user_data->id ?>" value="online_icon">
														<?php } else { ?>
															<span class="offline_icon"></span>
															<input type="hidden" class="<?php echo 'online-' . $user_data->id ?>" value="offline_icon">
														<?php  } ?>
													</div>
													<div class="user_info">
														<span class="<?php echo "username-" . $user_data->id;?>"><?php echo $user_data->username; ?></span>
													</div>
													
												</div>
												
											</li>
									<?php } else if ($user_id == $user['reciver_id']) { ?>
											<li style="cursor:pointer;" class="<?php echo $user['sender_id'];?>">
												<?php
													$user_data = $obj->User->getUserByID($user['sender_id']);
													$unread_msg_count = $obj->ChatModel->getUnReadMsgCount($user_data->id);
												?>
												<?php if($unread_msg_count != 0) { ?>
													<span class="badge_4" id="unread_msg<?=$user_data->id?>"><?=$unread_msg_count?></span>
												<?php } ?>
												<div class="d-flex bd-highlight">
													<div class="img_cont">
														<img src="<?php echo base_url('/uploads/profiles/' . $user_data->picture_url)?>" class="rounded-circle user_img <?php echo "img-" . $user_data->id;?>">
														<?php if($user_data->status == 1) {?>
															<span class="online_icon"></span>
															<input type="hidden" class="<?php echo 'online-' . $user_data->id ?>" value="online_icon">
														<?php } else { ?>
															<span class="offline_icon"></span>
															<input type="hidden" class="<?php echo 'online-' . $user_data->id ?>" value="offline_icon">
														<?php  } ?>
													</div>
													<div class="user_info">
														<span class="<?php echo "username-" . $user_data->id;?>"><?php echo $user_data->username; ?></span>
													</div>
												</div>
											</li>
									<?php  }} ?>
								</ui>
								<input type="hidden" class="self-img" value="<?php echo base_url('/uploads/profiles/' . $self_user[0]['picture_url']); ?>" />
							</div>
							<!-- <div class="card-footer"></div> -->
						</div>
					</div>
					<div class="col-md-8 chat">  		 	
						<div class="card">
							<div class="card-header msg_head">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="<?php echo base_url('/assets/Front/img/side_image.png')?>" class="rounded-circle user_img select-img">
										<span id="status" class="online_icon"></span>
									</div>
									<div class="user_info">
										<span class="select-username">Messenger</span>
									</div>
									<div class="video_cam">
										<!-- <span><i class="fas fa-video"></i></span>
										<span><i class="fas fa-phone"></i></span> -->
									</div>
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
									<textarea name="" class="form-control message" placeholder="Tapez votre message..." class="message" id="message"></textarea>
									<div class="input-group-append">
										<span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end chat system -->
			</div>
		</div>
	</div>
</section>

<?php $this->load->view('Front/common/footer');  ?>
<script src='../../assets/js/chat/chat.js'></script>
<script>
	$("li").click(function(){
		
	});
</script>


        