<?php $this->load->view('Front/common/header');  ?>
<?php
	$obj=&get_instance();
	$obj->load->model('Front/Posts_model');
	$id =$this->uri->segment(4);
	//$profile_url = $obj->RegisterModel->PictureUrl();
	//$posts=$obj->Posts_model->display_alldemand();
	$categories=$obj->Posts_model->display_cat();
	$posts=$this->db->query("select * from mission  where mission_category=".$id)->result_array();
 //print_r($posts);die();

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
<section class="portfolio section filters-content">
  <div class="container">
  	<div class="filters-content">
    	<div class="dropdown all_cat">
		 <!--  <a href="javascript:void(0)" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" aria-expanded="false"> All categories</a>
		  <ul class="dropdown-menu animated fadeInUp ">

		    <li><a href="#" class="hvr-bounce-to-right">  Submenu 1</a></li>
		  </ul>   -->
		  <label for="cars">All categories</label>
		  
			<select name="category" id="myselect" onChange="window.location.href=this.value">
				<?php foreach ($categories as $category) {
		  	?>
			<option value="<?php echo $category['project_id']?>" <?php //if( $category['title']){
				//echo 'selected';
			//}?>><?php echo $category['title']?></option>
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
	            	
	            		<!-- <p class="cat_date">2 Days ago</p>           		 -->
	            		
		                <h5><?php echo $post['mission_title'] ?></h5>
		                <p><?php echo $post['mission_description'] ?></p>
		                <span><b>Budget:</b><?php echo $post['mission_budget'] ?></span>
		              	<div class="row">
		              		<div class="col-md-6 make_btn">
				            	<a href="<?php echo base_url('Front/home/make_an_offer')?>/<?php echo $post['mission_id']?>">Make an Offer</a>
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
   <nav class="text-center">
		<ul class="pagination" role="navigation">
		<li role="presentation">
		 <?php echo $links; ?></li>
		</ul>
	</nav>
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
  
 
</div> 
<script type="text/javascript">
	$("#myselect:selected").text();
// => "Mr"
</script>
 

<!-- discuss chat end -->   

<?php $this->load->view('Front/common/footer');  ?>