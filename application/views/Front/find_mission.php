<?php $this->load->view('Front/common/header');  ?>
<?php
	$obj = &get_instance();
	$obj->load->model('Front/Posts_model');
	//$id =$this->uri->segment(4);
	//$profile_url = $obj->RegisterModel->PictureUrl();
	//$posts=$obj->Posts_model->display_alldemand();
	$categories = $obj->Posts_model->display_cat();
?> 

<section>
	<div class="top_bnr section" style="background-color:white;">
		<div class="container">
			<div class="top-side">
				<img src="<?php  echo base_url('assets/Front/img/Find_a_smission.png'); ?>"/>
		    </div>
		</div>
	</div>
</section>
<section class="portfolio section">
  <div class="container">
    <div class="filters-content">
    	<div class="dropdown all_cat">   
		  <label for="">Categories</label>		  
			<select name="category" onChange="window.location.href=this.value">
				<option value="<?php echo base_url('Front/home/find_mission')?>">All</option>
				<?php 
					foreach ($categories as $category) {
		  		?>
					<option <?php if($category['project_id'] == $this->uri->segment(4)) { ?> selected <?php } ?> value="<?php echo base_url('Front/home/find_mission/'. $category['project_id'])?>"><?php echo $category['title']?></option>
				<?php } ?>
			</select>
		</div>
		<?php if(count($posts) == 0) { ?>
			<br><br><br>
            <div class="row">
            <div class="col-md-12 text-center">
               <h4>No Mission to display.</h4>
            </div>
            </div>
            <br><br>
		<?php } else { ?>
	    <div class="row grid">  
			<?php  
			  	foreach ($posts as $post) {
	    	?>
	        <div class="col-md-6 all corporate">
	          <div class="item row">
	          	<div class="col-md-4 img_box">
	          		<?php 
	    	      		$cat_image = $this->db->query("select * from  project_category  where project_id=" . $post['mission_category'])->row();
	          		?>
	          		<img src="<?php  echo base_url('uploads/project_image/' . $cat_image->picture_url) ?>">
	          	</div>            
	            <div class="col-md-8 cat_content">
	            	
	            	<?php
                    	$now = time(); // or your date as well
                      	$your_date = strtotime($post['created_date']);
                      	$datediff = $now - $your_date;
                    ?>
					<p class="cat_date"><?php echo round($datediff / (60 * 60 * 24)); ?>days ago</p>
					
					<h5><?php echo $post['mission_title'] ?></h5>
					<p><?php echo $post['mission_description'] ?></p>
					<span><b>Budget:</b> <?php echo $post['budget'] ?> <i class="fas fa-euro-sign"></i></span>
					<div class="row">
						<div class="col-md-6 make_btn">
							<a href="<?php
								if($this->session->userdata['id']){
									echo base_url('Front/home/make_an_offer/'.$post['mission_id']); }
								else {
									echo base_url('Front/home/login');
								} ?>">Make an Offer</a>
						</div>	
						<div class="col-md-2 make_btn">
						</div>
						<div class="col-md-4 make_btn">	
							<span>
								<a href="<?php echo base_url('Front/home/heelper_profile/' . $post['client_id'])?>" id="chat_show" class="btn btn-default"> Discuss</a>
								<input type=hidden id="sender_id" value="<?php echo $this->session->userdata['id']; ?>">
								<input type=hidden id="receiver_id" value="<?php echo $post['client_id']; ?>">
							</span>
						</div>			            
		            </div>
	            </div>
	          </div>
	        </div>
	        <?php }  ?>
	       
			</div>
			<?php }  ?>
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


<?php $this->load->view('Front/common/footer');  ?>

