
<?php $this->load->view('Front/common/header');  ?>


<section>
	<div class="chat_box">
		<div class="container chat_system">
			<div class="row justify-content-center h-100">
					<!-- start chat system -->
					<div class="col-md-4 chat">
						<div class="card mb-sm-3 mb-md-0 contacts_card">
							<div class="card-header">
								<div class="input-group">
									<input type="text" placeholder="Search..." name="" class="form-control search">
									<div class="input-group-prepend">
										<span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
									</div>
								</div>
							</div>
							<div class="card-body contacts_body">
								<ui class="contacts">
								<li >
									<div class="d-flex bd-highlight">
										<div class="img_cont">
											<img src="<?php echo base_url('/assets/Front/img/profile_img.png')?>" class="rounded-circle user_img">
											<span class="online_icon"></span>
										</div>
										<div class="user_info">
											<span>Jonathan Do</span>
											<p>Please let me know</p>
										</div>
									</div>
								</li>
								<li>
									<div class="d-flex bd-highlight">
										<div class="img_cont">
											<img src="<?php echo base_url('/assets/Front/img/profile_img.png')?>" class="rounded-circle user_img">
											<span class="online_icon offline"></span>
										</div>
										<div class="user_info">
											<span>Keyur Shah</span>
											<p>Sure</p>
										</div>
									</div>
								</li>
								<li class="active">
									<div class="d-flex bd-highlight">
										<div class="img_cont">
											<img src="<?php echo base_url('/assets/Front/img/profile_img.png')?>" class="rounded-circle user_img">
											<span class="online_icon"></span>
										</div>
										<div class="user_info">
											<span>Sami Rafi</span>
											<p>Sami is online</p>
										</div>
									</div>
								</li>
								<li>
									<div class="d-flex bd-highlight">
										<div class="img_cont">
											<img src="<?php echo base_url('/assets/Front/img/profile_img.png')?>" class="rounded-circle user_img">
											<span class="online_icon offline"></span>
										</div>
										<div class="user_info">
											<span>Monik Paul	</span>
											<p>Will do that</p>
										</div>
									</div>
								</li>
								<li>
									<div class="d-flex bd-highlight">
										<div class="img_cont">
											<img src="<?php echo base_url('/assets/Front/img/profile_img.png')?>" class="rounded-circle user_img">
											<span class="online_icon offline"></span>
										</div>
										<div class="user_info">
											<span>John Litho</span>
											<p>Meet tomorrow at 4</p>
										</div>
									</div>
								</li>
								<li>
									<div class="d-flex bd-highlight">
										<div class="img_cont">
											<img src="<?php echo base_url('/assets/Front/img/profile_img.png')?>" class="rounded-circle user_img">
											<span class="online_icon offline"></span>
										</div>
										<div class="user_info">
											<span>Fade Campbell</span>
											<p>We have only 10 left</p>
										</div>
									</div>
								</li>
								<!-- <li>
									<div class="d-flex bd-highlight">
										<div class="img_cont">
											<img src="https://www.alphawizz.com/heelp_front/assets/img/profile_img.png" class="rounded-circle user_img">
											<span class="online_icon offline"></span>
										</div>
										<div class="user_info">
											<span>Ashley Luis</span>
											<p>No. We don't provide.</p>
										</div>
									</div>
								</li> -->
								</ui>
							</div>
							<!-- <div class="card-footer"></div> -->
						</div>
					</div>
					<div class="col-md-8 chat">  		 	
						<div class="card">
							<div class="card-header msg_head">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="<?php echo base_url('/assets/Front/img/profile_img.png')?>" class="rounded-circle user_img">
										<span class="online_icon"></span>
									</div>
									<div class="user_info">
										<span>Sami Rafi</span>
									</div>
									<div class="video_cam">
										<!-- <span><i class="fas fa-video"></i></span>
										<span><i class="fas fa-phone"></i></span> -->
									</div>
								</div>
								<span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
								<!-- <div class="action_menu">
									<ul>
										<li><i class="fas fa-user-circle"></i> View profile</li>
										<li><i class="fas fa-users"></i> Add to close friends</li>
										<li><i class="fas fa-plus"></i> Add to group</li>
										<li><i class="fas fa-ban"></i> Block</li>
									</ul>
								</div> -->
							</div>
							<div class="card-body msg_card_body">
								
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Sure. I will share it by tonight.
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="<?php echo base_url('/assets/Front/img/profile_img.png')?>" class="rounded-circle user_img_msg">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="<?php echo base_url('/assets/Front/img/profile_img.png')?>" class="rounded-circle user_img_msg">
									</div>
									<div class="msg_cotainer">
										Thanks. I will do that then
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Let me know when you complete.
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="<?php echo base_url('/assets/Front/img/profile_img.png')?>" class="rounded-circle user_img_msg">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="<?php echo base_url('/assets/Front/img/profile_img.png')?>" class="rounded-circle user_img_msg">
									</div>
									<div class="msg_cotainer">
										Thanks. I will do that then
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Let me know when you complete.
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
							<img src="<?php echo base_url('/assets/Front/img/profile_img.png')?>" class="rounded-circle user_img_msg">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="<?php echo base_url('/assets/Front/img/profile_img.png')?>" class="rounded-circle user_img_msg">
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<div class="input-group">
									<div class="input-group-append">
										<span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
									</div>
									<textarea name="" class="form-control type_msg" placeholder="Type your message..."></textarea>
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

 <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script> -->
