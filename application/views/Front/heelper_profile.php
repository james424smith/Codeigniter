<?php $this->load->view('Front/common/header');  ?>
<?php 
	$admin_url = $this->config->item('base_url'); 
	$id = $this->uri->segment(4);
	//var_dump($id);die();
	$pro = $this->db->query("select * from users where id=".$id)->result_array();

?>
<section>
	<div class="my_profile heelpr-profile">
		<div class="container">
			<div class="row">
				<?php foreach ($pro as  $member) {					
				   ?>
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div class="my_profile_box">
						<div class="my_prfl_cont">
							<div class="view_profile">
	                              <img class="my_pro" src="<?php echo $admin_url?>uploads/profiles/<?php echo $member['picture_url'];?>">
	                         </div>
	                          <div class="profile_dtls">
	                          		 <!--<span><a href="#!" id="chat_show" class="heelpr_chat"><i class="fa fa-comments" aria-hidden="true"></i> Discuss</a></span>-->
									<span><a href="<?php echo base_url("Front/home/chat"); ?>" class="heelpr_chat"><i class="fa fa-comments" aria-hidden="true"></i> Discuss</a></span>
	                                <h4><?php echo $member['skills']; ?></h4>
	                                <p class="review_icn"><img src="<?php echo base_url();?>assets/Front/img/review_icn.png"></p>

	                          </div>                         
						</div>
					</div>
					<div class="Presentation">
                      <p><?php echo $member['member_bio']; ?></p>
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
        <h4 class="modal-title">Edit Profile</h4>
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
				    <label for="text">Presentation:</label>
				    <input type="text" class="form-control" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">Lavel of studies:</label>
				    <input type="text" class="form-control" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">Field of studies:</label>
				    <input type="text" class="form-control" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">Univercity /School:</label>
				    <input type="text" class="form-control" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">Categories of interest on heelp:</label>
				    <input type="text" class="form-control" id="">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="text">SKills:</label>
				    <input type="text" class="form-control" id="">
				  </div> 
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

<!-- chat  --> 
<div class="chatbox-holder">
  <div class="chatbox">
    <div class="card">
		<div class="card-header msg_head">
			<div class="d-flex bd-highlight">
				<div class="img_cont">
					<img src="<?php echo base_url("uploads/profiles/" . $pro[0]['picture_url']);?>" class="rounded-circle user_img">
					<span class="online_icon"></span>
				</div>
				<div class="user_info">
					<span><?php echo $pro[0]['username']; ?></span>
				</div>  
				<div class="video_cam">
					<!-- <span><i class="fas fa-video"></i></span>
					<span><i class="fas fa-phone"></i></span> -->
				</div>
			</div>
			<div class="chatbox-icons">
		        <a href="javascript:void(0);"><i class="fa fa-minus"></i></a>
		        <a href="javascript:void(0);"><i class="fa fa-times" aria-hidden="true"></i></a>       
		      </div> 
		</div>
		<div class="card-body msg_card_body" id="content">
			<div class="d-flex justify-content-start mb-4">
				<div class="img_cont_msg">
					<img src="<?php echo base_url();?>assets/Front/img/profile_img.png" class="rounded-circle user_img_msg">
				</div>
				<div class="msg_cotainer">
	    			Please provide the necessary data so that I will start designing. I would hardly take 1-2 weeks to complete. ?
					<span class="msg_time">8:40 AM, Today</span>
				</div>
			</div>
			<div class="d-flex justify-content-end mb-4">
				<div class="msg_cotainer_send">
					Sure. I will share it by tonight.
					<span class="msg_time_send">8:55 AM, Today</span>
				</div>
				<div class="img_cont_msg">
					<img src="<?php echo base_url();?>assets/Front/img/profile_img.png" class="rounded-circle user_img_msg">
				</div>
			</div>
			<div class="d-flex justify-content-start mb-4">
				<div class="img_cont_msg">
					<img src="<?php echo base_url();?>assets/Front/img/profile_img.png" class="rounded-circle user_img_msg">
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
			<img src="<?php echo base_url();?>assets/Front/img/profile_img.png" class="rounded-circle user_img_msg">
				</div>
			</div>
			<div class="d-flex justify-content-start mb-4">
				<div class="img_cont_msg">
					<img src="<?php echo base_url();?>assets/Front/img/profile_img.png" class="rounded-circle user_img_msg">
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
		<img src="<?php echo base_url();?>assets/Front/img/profile_img.png" class="rounded-circle user_img_msg">
				</div>
			</div>
			<div class="d-flex justify-content-start mb-4">
				<div class="img_cont_msg">
					<img src="<?php echo base_url();?>assets/Front/img/profile_img.png" class="rounded-circle user_img_msg">
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
</div> 
<!-- chat end -->

<?php $this->load->view('Front/common/footer');  ?>
