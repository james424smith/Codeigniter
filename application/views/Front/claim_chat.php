
<?php $this->load->view('Front/common/header');  ?>

<?php
	$obj = &get_instance();
	$user_id = $this->session->userdata['id'];
	//$obj->load->model('ChatModel');
	//$chating_members = $obj->ChatModel->getChattingMembers();
	
	$obj->load->model('Front/User');
	$self_user = $obj->User->getSelfUser();
	$all_users = $obj->User->getAllUsers();

?>
<section>
	<div class="chat_box">
		<div class="container chat_system">
			<div class="row justify-content-center h-100">
					<!-- start chat system -->
					<div class="col-md-8 chat">  		 	
						<div class="card">
							<div class="card-header msg_head">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="<?php echo base_url('/assets/Front/img/side_image.png')?>" class="rounded-circle user_img admin-img">
										<span class="online_icon"></span>
										<input type="hidden" id="admin_img" value="<?php echo base_url('/assets/Front/img/side_image.png')?>"/>
										<input type="hidden" id="self_img" value="<?php echo base_url('/uploads/profiles/'. $self_user[0]['picture_url'])?>"/>
									</div>
									<div class="user_info">
										<span class="select-username">Admin</span>
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
									<textarea name="" class="form-control message" placeholder="Type your message..." class="message" id="message"></textarea>
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
<script src='../../assets/js/chat/claim_chat.js'></script>


        