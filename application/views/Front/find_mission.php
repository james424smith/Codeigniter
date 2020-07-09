<?php $this->load->view('Front/common/header');  ?>
<?php
$obj=&get_instance();
$obj->load->model('Front/Posts_model');
//$id =$this->uri->segment(4);
//$profile_url = $obj->RegisterModel->PictureUrl();
//$posts=$obj->Posts_model->display_alldemand();
$categories=$obj->Posts_model->display_cat();
//print_r($category);die();

?> 

<section>
	<div class="top_bnr section">
		<div class="container">
			<div class="top-side">
		      <h4 class="title">Find a Mission</h4>
		    </div>
		</div>
	</div>
</section>
<section class="portfolio section">
  <div class="container">
  	
  	
    <div class="filters-content">
    	<div class="dropdown all_cat">   
		 <!--  <a href="javascript:void(0)" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" aria-expanded="false"> All categories</a>
		  <ul class="dropdown-menu animated fadeInUp ">

		    <li><a href="#" class="hvr-bounce-to-right">  Submenu 1</a></li>
		  </ul>   -->
		  <label for="">All categories</label>
		  
			<select name="category" onChange="window.location.href=this.value">
				<?php foreach ($categories as $category) {
		  	?>
			<option <?php if($category['project_id'] == $this->uri->segment(4)) { ?> selected <?php } ?> value="<?php echo base_url('Front/home/find_mission/'. $category['project_id'])?>"><?php echo $category['title']?></option>
			<?php } ?>
			</select>
		
		</div>
    	
		
	      <div class="row grid">  
	      	<?php  foreach ($posts as $post) {
	            			?>

	        <div class="col-md-6 all corporate">
	          <div class="item row">
	          	<div class="col-md-4 img_box">
	          		<?php 
	          		$cat_image=$this->db->query("select * from  project_category  where project_id=".$post['mission_category'])->row();
	          		?>
	          		<img src="<?php  echo base_url('uploads/project_image/'.$cat_image->picture_url) ?>">
	          	</div>            
	            <div class="col-md-8 cat_content">
	            	
	            		<?php
                      $now = time(); // or your date as well
                      $your_date = strtotime($post['created']);
                      $datediff = $now - $your_date;
                      ?>
                        <p class="cat_date"><?php echo round($datediff / (60 * 60 * 24)); ?>days ago</p>
	            		
		                <h5><?php echo $post['mission_title'] ?></h5>
		                <p><?php echo $post['mission_description'] ?></p>
		                <span><b>Budget:</b> <?php echo $post['mission_budget'] ?></span>
		              	<div class="row">
		              		<div class="col-md-6 make_btn">
		              			<?php ?>
				            	<a href="<?php
				            	if($this->session->userdata['id']){
				            	 echo base_url('Front/home/make_an_offer/'.$post['mission_id']); }
				            	 else {
				            	 	echo base_url('Front/home/login');
				            	 } ?>">Make an Offer</a>
				            </div>	
		              		<!-- <div class="col-md-6 profile_img">
				            	<a href="#!" id="chat_show">
				            		<img src="https://www.alphawizz.com/Freelance/assets/Front/img/profile_img.png" alt="Work 1">Discuss
				            	</a>
				            </div> -->		            
		              	</div>
		              	
	              
	            </div>
	            
	          </div>
	        </div>
	        <?php }  ?>
	       
	            
	          </div>
	        </div>
	      </div>
    </div>
    <div class="container">
    <nav class="text-center">
		<ul class="pagination" role="navigation">
		<li role="presentation"><!-- <a role="button" href="#" aria-label="Previous"><i class="fa fa-chevron-left" aria-hidden="true"></i><span class="sr-only">previous</span></a></li>
		<li class="active" role="presentation"><a role="button" href="#" aria-label="Page #{i}">1</a></li>
		<li role="presentation"><a role="button" href="#" aria-label="Page #{i}">2</a></li>
		<li role="presentation"><a role="button" href="#" aria-label="Page #{i}">3</a></li>
		<li role="presentation"><a role="button" href="#" aria-label="Page #{i}">4</a></li>
		<li role="presentation"><a role="button" href="#" aria-label="Next"><i class="fa fa-chevron-right" aria-hidden="true"></i><span class="sr-only">next</span></a> -->
		 <?php echo $links; ?></li>
		</ul>
	</nav>
	</div>
  </div>
</section>

<!-- discuss chat  -->

<div class="chatbox-holder">
  <div class="chatbox">
    <div class="card">
							<div class="card-header msg_head">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="https://www.alphawizz.com/Freelance/assets/Front/img/profile_img.png" class="rounded-circle user_img">
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
								<div class="chatbox-icons">
							        <a href="javascript:void(0);"><i class="fa fa-minus"></i></a>
							        <a href="javascript:void(0);"><i class="fa fa-times" aria-hidden="true"></i></a>       
							      </div> 
							</div>
							<div class="card-body msg_card_body">
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="https://www.alphawizz.com/Freelance/assets/Front/img/profile_img.png" class="rounded-circle user_img_msg">
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
								<img src="https://www.alphawizz.com/Freelance/assets/Front/img/profile_img.png" class="rounded-circle user_img_msg">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="https://www.alphawizz.com/Freelance/assets/Front/img/profile_img.png" class="rounded-circle user_img_msg">
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
								<img src="https://www.alphawizz.com/Freelance/assets/Front/img/profile_img.png" class="rounded-circle user_img_msg">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="https://www.alphawizz.com/Freelance/assets/Front/img/profile_img.png" class="rounded-circle user_img_msg">
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
							<img src="https://www.alphawizz.com/Freelance/assets/Front/img/profile_img.png" class="rounded-circle user_img_msg">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="https://www.alphawizz.com/Freelance/assets/Front/img/profile_img.png" class="rounded-circle user_img_msg">
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
  
  <!-- <div class="chatbox group-chat">
	    <div class="chatbox-top">
	      <div class="chatbox-avatar">
	        <a target="_blank" href="https://www.facebook.com/mfreak"><img src="https://avatars0.githubusercontent.com/u/7145968?v=3&s=460" /></a>
	      </div>
	      
	      <div class="chat-group-name">
	        <span class="status away"></span>
	        Group name comes here
	      </div>
	      <div class="chatbox-icons">
	        <label for="chkSettings"><i class="fa fa-gear"></i></label><input type="checkbox" id="chkSettings" />
	        <div class="settings-popup">
	          <ul>
	            <li><a href="#">Group members</a></li>
	            <li><a href="#">Add members</a></li>
	            <li><a href="#">Delete members</a></li>
	            <li><a href="#">Leave group</a></li>
	          </ul>
	        </div>
	        <a href="javascript:void(0);"><i class="fa fa-minus"></i></a>
	        <a href="javascript:void(0);"><i class="fa fa-close"></i></a>       
	      </div>      
	    </div>
	    
	    <div class="chat-messages">
	       <div class="message-box-holder">
	        <div class="message-box">
	          What are you people doing?
	        </div>
	      </div>
	      
	      <div class="message-box-holder">
	        <div class="message-sender">
	          <a href="#">Ben Stiller</a>
	         </div>
	        <div class="message-box message-partner">
	          Hey, nobody's here today. I'm at office alone.
	          Hey, nobody's here today. I'm at office alone.
	        </div>
	      </div>
	      
	      <div class="message-box-holder">
	        <div class="message-box">
	          who else is online?
	        </div>
	      </div>
	      
	      <div class="message-box-holder">
	        <div class="message-sender">
	          <a href="#">Chris Jerrico</a>
	         </div>
	        <div class="message-box message-partner">
	          I'm also online. How are you people?
	        </div>
	      </div>
	      
	      <div class="message-box-holder">
	        <div class="message-box">
	          I am fine.
	        </div>
	      </div>
	      
	      <div class="message-box-holder">
	        <div class="message-sender">
	          <a href="#">Rockey</a>
	         </div>
	        <div class="message-box message-partner">
	          I'm also online. How are you people?
	        </div>
	      </div>
	      
	      <div class="message-box-holder">
	        <div class="message-sender">
	          <a href="#">Christina Farzana</a>
	         </div>
	        <div class="message-box message-partner">
	          We are doing fine. I am in.
	        </div>
	      </div>      
	    </div>
	    
	    <div class="chat-input-holder">
	      <textarea class="chat-input"></textarea>
	      <input type="submit" value="Send" class="message-send" />
	    </div>
	    
	    <div class="attachment-panel">
	      <a href="#" class="fa fa-thumbs-up"></a>
	      <a href="#" class="fa fa-camera"></a>
	      <a href="#" class="fa fa-video-camera"></a>
	      <a href="#" class="fa fa-image"></a>
	      <a href="#" class="fa fa-paperclip"></a>
	      <a href="#" class="fa fa-link"></a>
	      <a href="#" class="fa fa-trash-o"></a>
	      <a href="#" class="fa fa-search"></a>
	    </div>
  </div>
  
    <div class="chatbox chatbox-min" >
	    <div class="chatbox-top">
	      <div class="chatbox-avatar">
	        <a target="_blank" href="https://www.facebook.com/mfreak"><img src="https://lh3.googleusercontent.com/-iJhKZHM5Kqs/Vgg2r91epsI/AAAAAAAAAgo/uGT4-sqPJzg/w800-h800/IMG_1339.jpg" /></a>
	      </div>
	      <div class="chat-partner-name">
	        <span class="status donot-disturb"></span>
	        <a target="_blank" href="https://www.facebook.com/mfreak">Mamun Khandaker</a>
	      </div>
	      <div class="chatbox-icons">
	        <a href="javascript:void(0);"><i class="fa fa-minus"></i></a>
	        <a href="javascript:void(0);"><i class="fa fa-close"></i></a>       
	      </div>      
	    </div>
	    
	    <div class="chat-messages">
	       <div class="message-box-holder">
	        <div class="message-box">
	          Hello
	        </div>
	      </div>
	      
	      <div class="message-box-holder">
	        <div class="message-sender">
	           Mamun Khandaker
	         </div>
	        <div class="message-box message-partner">
	          Hi.
	        </div>
	      </div>
	      
	      <div class="message-box-holder">
	        <div class="message-box">
	          How are you doing?
	        </div>
	      </div>
	      
	      <div class="message-box-holder">
	        <div class="message-sender">
	           Mamun Khandaker
	         </div>
	        <div class="message-box message-partner">
	          I'm doing fine. How about you?
	        </div>
	      </div>
	      
	      <div class="message-box-holder">
	        <div class="message-box">
	          I am fine.
	        </div>
	      </div>
	      
	      <div class="message-box-holder">
	        <div class="message-box">
	          Do you know why I knocked you today?
	        </div>
	      </div>
	      
	      <div class="message-box-holder">
	        <div class="message-box">
	          There's something important I would like to share with you. Do you have some time?
	        </div>
	      </div>
	      
	      <div class="message-box-holder">
	        <div class="message-sender">
	           Mamun Khandaker
	         </div>
	        <div class="message-box message-partner">
	          Yeah sure. Let's meet in the Einstein cafe this evening and discuss the matter.
	        </div>
	      </div>
	      
	      <div class="message-box-holder">
	        <div class="message-sender">
	           Mamun Khandaker
	         </div>
	        <div class="message-box message-partner">
	          I thought of coming to your place and discuss about it but I had to finish my projects and I didn't have enough time to go out of the house.
	        </div>
	      </div>      
	    </div>
	    
	    <div class="chat-input-holder">
	      <textarea class="chat-input"></textarea>
	      <input type="submit" value="Send" class="message-send" />
	    </div>
	    
	</div> -->
</div> 
 

<!-- discuss chat end -->   

<?php $this->load->view('Front/common/footer');  ?>