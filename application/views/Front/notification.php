
<?php
$obj=&get_instance();
$obj->load->model('Front/Posts_model');
//$profile_url = $obj->RegisterModel->PictureUrl
$type_id = $this->uri->segment(4);
$notifications=$obj->Posts_model->GetNotification($type_id);
//print_r($user);die();
?> 

<section>
	<div class="my_profile">
		<div class="container">
			<?php foreach ($notifications as  $notification) { ?>
						
					<div class="row">
					<div class="Presentation note-page">

					<div class="col-md-2"></div>
						<div class="col-md-8">
							<img class="notify" src="<?php echo base_url('assets/Front/img/Group-134.png');?>">
							<p><?php echo $notification['notification']?></p>
						</div>
					<div class="col-md-2"></div>
                          		
					</div>
					</div>		
					<?php }  ?>				
							
			</div>
		</div>
	
</section>
