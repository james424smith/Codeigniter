<?php $this->load->view('Front/common/header');  ?>


<section>
  <div class="top_bnr section post_demand">
    <div class="container">
		<div class="top-side about_title">
	  		<img src="<?php  echo base_url('assets/Front/img/Post a demand.png'); ?>"/>
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
				<!-- <div class="col-md-3">
					<a href="<?php echo base_url('home/post_demand_inner')?>" class="post_demand_inner_page">
					<div class="post-cat">
			            <span><img src="https://www.alphawizz.com/Heelp_admin/uploads/ae02fb24c057129c98cd261bb1098470.png"></span>
			            <h3> Chimie</h3>		 		          
				    </div>
				</a>
				</div>
				<div class="col-md-3">
					<a href="<?php echo base_url('home/post_demand_inner')?>" class="post_demand_inner_page">
					<div class="post-cat">
			            <span><img src="https://www.alphawizz.com/Heelp_admin/uploads/d25d43d5b18425c867daf20352f7f757.png"></span>
			            <h3> Mathématiques</h3>		 		          
				    </div>
				</a>
				</div>
				<div class="col-md-3">
					<a href="<?php echo base_url('home/post_demand_inner')?>" class="post_demand_inner_page">
					<div class="post-cat">
			            <span><img src="https://www.alphawizz.com/heelp_front/assets/img/cat1.png"></span>
			            <h3> Ingénierie</h3>		 		          
				    </div>
				</a>
				</div>
				<div class="col-md-3">
					<div class="post-cat">
			            <span><img src="https://www.alphawizz.com/heelp_front/assets/img/cat2.png"></span>
			            <h3>Informatique & Programmation</h3>		 		          
				    </div>
				</div>
				<div class="col-md-3">
					<div class="post-cat">
			            <span><img src="https://www.alphawizz.com/heelp_front/assets/img/cat3.png"></span>
			            <h3> Science Médicale</h3>		 		          
				    </div>
				</div>
				<div class="col-md-3">
					<div class="post-cat">
			            <span><img src="https://www.alphawizz.com/heelp_front/assets/img/cat4.png"></span>
			            <h3>Electricité & Electronique</h3>		 		          
				    </div>
				</div>
				<div class="col-md-3">
					<div class="post-cat">
			            <span><img src="https://www.alphawizz.com/heelp_front/assets/img/cat5.png"></span>
			            <h3>Mécanique</h3>		 		          
				    </div>
				</div>
				<div class="col-md-3">
					<div class="post-cat">
			            <span><img src="https://www.alphawizz.com/heelp_front/assets/img/cat6.png"></span>
			            <h3>Outils de calcul & Simulation</h3>		 		          
				    </div>
				</div>
				<div class="col-md-3">
					<div class="post-cat">
			            <span><img src="https://www.alphawizz.com/heelp_front/assets/img/cat7.png"></span>
			            <h3>Infographie & Outils CAO</h3>		 		          
				    </div>
				</div>
				<div class="col-md-3">
					<div class="post-cat">
			            <span><img src="https://www.alphawizz.com/heelp_front/assets/img/cat8.png"></span>
			            <h3> Droits/Sciences po</h3>		 		          
				    </div>
				</div>
				<div class="col-md-3">
					<div class="post-cat">
			            <span><img src="https://www.alphawizz.com/heelp_front/assets/img/cat9.png"></span>
			            <h3>Littératures & Philo</h3>		 		          
				    </div>
				</div>
				<div class="col-md-3">
					<div class="post-cat">
			            <span><img src="https://www.alphawizz.com/heelp_front/assets/img/cat10.png"></span>
			            <h3>Economie/Finance Marketing</h3>		 		          
				    </div>
				</div>
				<div class="col-md-3">
					<div class="post-cat">
			            <span><img src="https://www.alphawizz.com/heelp_front/assets/img/cat11.png"></span>
			            <h3>Sciences naturelles</h3>		 		          
				    </div>
				</div>
				<div class="col-md-3">
					<div class="post-cat">
			            <span><img src="https://www.alphawizz.com/heelp_front/assets/img/cat12.png"></span>
			            <h3>Bureautique & macro</h3>		 		          
				    </div>
				</div>
				<div class="col-md-3">
					<div class="post-cat">
			            <span><img src="https://www.alphawizz.com/heelp_front/assets/img/cat13.png"></span>
			            <h3>Langues & communication</h3>		 		          
				    </div>
				</div>
				<div class="col-md-3">
					<div class="post-cat">
			            <span><img src="https://www.alphawizz.com/heelp_front/assets/img/cat14.png"></span>
			            <h3>Soutennance & Présentation</h3>		 		          
				    </div>
				</div>
				<div class="col-md-3">
					<div class="post-cat">
			            <span><img src="https://www.alphawizz.com/heelp_front/assets/img/cat15.png"></span>
			            <h3>CV/Lettre/Rapport</h3>		 		          
				    </div>
				</div>
				<div class="col-md-3">
					<div class="post-cat">
			            <span><img src="https://www.alphawizz.com/heelp_front/assets/img/cat16.png"></span>
			            <h3>Arts</h3>		 		          
				    </div>
				</div>
				<div class="col-md-3">
					<a href="#">
					<div class="post-cat">
			            <span><img src="https://www.alphawizz.com/heelp_front/assets/img/cat17.png"></span>
			            <h3>Autre</h3>		 		          
				    </div>
				    </a>
				</div> -->

			</div>
		</div>
	</div>
</section>
<?php $this->load->view('Front/common/footer');  ?>