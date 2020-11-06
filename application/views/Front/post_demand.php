<?php $this->load->view('Front/common/header');  ?>
<section>
  <div class="top_bnr section post_demand">
    <div class="container">
		<div class="top-side about_title">
	  		<img src="<?php  echo base_url('assets/Front/img/Post_demand.png'); ?>"/>
    	</div>
    </div>
  </div>
</section>

<section>
	<div class="post_main_box">
		<div class="container">
			<div class="row">
				<?php
               $i=0;
               foreach ($data_posts as $row){ 
               $i++; ?>
				<div class="col-md-3">
					<a href="<?php echo base_url('Front/home/post_demand_inner/'.$row->project_id)?>" class="post_demand_inner_page">
					<div class="post-cat">						
			            <span><img src="<?= base_url() ?>/uploads/project_image/<?php echo $row->picture_url ?>"></span>
			            <h3> <?php echo $row->title;?></h3>	
				    </div>
				    </a>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
<?php $this->load->view('Front/common/footer');  ?>