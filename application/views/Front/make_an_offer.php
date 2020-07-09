<?php $this->load->view('Front/common/header');  ?>
<?php
$obj=&get_instance();
$obj->load->model('Front/Posts_model');
$id =$this->uri->segment(4);
//$profile_url = $obj->RegisterModel->PictureUrl();
$mission=$this->db->query("select * from mission  where mission_id=".$id)->row();
//print_r($user);die();

?> 

<section>
  <div class="top_bnr section post_demand">
    <div class="container">
      <div class="top-side about_title">
          <h4 class="title">Make an Offer</h4>
        </div>
    </div>
  </div>
</section>
	
<section class="make_an_offer_section">
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="post_demand_inner_form">					
					<form action="<?php echo base_url('Front/Posts/offerpost')?>" method="post">
						<div class="post_form_content post_form_content_title">
							<label>Title</label>
							<input type="text" name="" value="<?php echo $mission->mission_title;?>">
						</div>
						<div class="post_form_content post_form_content_budget">
							<label>Ton Budget</label>
							<input type="text" name="missionbudget" value="<?php echo $mission->mission_budget;?>">
						</div>
						<div class="post_form_content">
							<label>Description</label>
							<textarea><?php echo $mission->mission_description;?></textarea>
						</div>
						<div class="make_an_offfer_checkbox">
							<div class="demand_details_upload_btn">
								<a href="<?php if($mission->mission_doc){ echo base_url()?>Front/Posts/download/<?php echo $mission->mission_doc;}
								else { ?>#<?php }?>">File Name <i class="fas fa-download"></i></a>								
							</div>
							<div class="make_an_offfer_checkbox_input">
								<label class="container_check">Accept budget
								  <input type="checkbox" name="accept_budget" id="budget" value="0">
								  <span class="checkmark"></span>
								</label>								
							</div>
						</div>
						<div>
							<label class="">Make an offer
								  <input type="text" name="offer_budget" placeholder="ex:200$">								  
							</label>
						</div>
						<div class="post_form_content">
							<label>Write your message</label>
							<textarea placeholder="ex: Je peux le faire pour vous" name="message"></textarea>
							 <input type="hidden" name="project_id" value="<?php echo $mission->mission_id ?>" >
							 <input type="hidden" name="client_id" value="<?php echo $mission->user_id ?>" >
						</div>

						

						<div class="make_an_offer_form_btn">
							<!-- <a href="#" class="btn btn-defult" data-toggle="modal" data-target="#myModal">
							Send Offer</a> -->
							  <button type="submit" class="btn btn-primary" >Send Offer </button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-2"></div>			
		</div>
	</div>
</section>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
			<div class="post_demand_popup">
				<img class="demand_popup_logo" src="<?php echo base_url('assets/Front/img/heelp.png')?>">
				<h4>Confirmation</h4>
				<p>
					Demand posted succefully
				</p>
				<img class="demand_popup_right_img" src="<?php echo base_url('assets/Front/img/right.png')?>">

				<a href="<?php echo base_url('Front/home/mydemands')?>" class="btn btn-primary">Retour</a>
			</div>
	    </div>                
      </div>
    </div>
  </div>



<?php $this->load->view('Front/common/footer');  ?>
<script type="text/javascript">
	$(function() {
  $('#budget').on('change', function(e) {
    e.stopPropagation();
    this.value = this.checked ? 1 : 0;
  });
})
</script>