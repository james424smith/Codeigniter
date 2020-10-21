
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
					<div class="col-md-4 chat">
						<div class="card mb-sm-3 mb-md-0 contacts_card">
							<div class="card-header" style="margin-bottom:10px;">
								<div class="input-group">
									<input type="text" placeholder="Search..." name="" class="form-control search">
									<div class="input-group-prepend">
										<span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
									</div>	
								</div>
							</div>
							<div class="card-body contacts_body" style="border-radius:0px">
								<ui class="contacts">
									<?php foreach ($all_users as $user) {
											if($user_id != $user['id']) {
									?> 
											<li style="cursor:pointer;" class="<?php echo $user['id'];?>">
												<div class="d-flex bd-highlight">
													<div class="img_cont">
														<img src="<?php echo base_url('/uploads/profiles/' . $user['picture_url'])?>" class="rounded-circle user_img <?php echo "img-" . $user['id'];?>">
														<span class="online_icon"></span>
													</div>
													<div class="user_info">
														<span class="<?php echo "username-" . $user['id'];?>"><?php echo $user['username']; ?></span>
													</div>
												</div>
											</li>
									<?php } } ?>
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
										<span class="online_icon"></span>
									</div>
									<div class="user_info">
										<span class="select-username">Chat Room</span>
									</div>
									<div class="video_cam">
										<!-- <span><i class="fas fa-video"></i></span>
										<span><i class="fas fa-phone"></i></span> -->
									</div>
								</div>
								<span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
								<div class="action_menu">
									<!--<ul>
										<li><i class="fas fa-user-circle"></i> View profile</li>
										<li><i class="fas fa-users"></i> Add to close friends</li>
										<li><i class="fas fa-plus"></i> Add to group</li>
										<li><i class="fas fa-ban"></i> Block</li>
									</ul>-->
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
<script src='../../assets/js/chat/chat.js'></script>


        