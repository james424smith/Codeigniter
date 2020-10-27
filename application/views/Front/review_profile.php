<?php $this->load->view('Front/common/header');  ?>

<?php
    $obj = &get_instance();
    $id = $this->uri->segment(4);
    //var_dump($id);die();

    $obj->load->model('Front/Posts_model');
    $reviews = $obj->Posts_model->getRatingData($id);

    $obj->load->model('Front/User');
	$user_data = $obj->User->getUserByID($id);
?> 
<?php $user_id = $user_data->id;
		$avg = $this->Posts_model->selectAvgOfRating($user_id);

            $count = 0;
            $total = 0;
            for($j = 0; $j < count($avg); $j++)
            {
                $total += $avg[$j]->rating;
                $count++;
            }
            if($count != 0)
            {
                $av = $total/$count;
                $user_detail = number_format($av, 2, '.', '');
            }
            else
            {
                $user_detail = 0;
            }
            if($user_detail == 0)
            {
            	$class_star = "stars-0";
            }
            elseif($user_detail == 0.50)
            {
            	$class_star = "stars-10";
            }
            elseif($user_detail == 1.00)
            {
            	$class_star = "stars-20";
            }
            elseif($user_detail == 1.50)
            {
            	$class_star = "stars-30";
            }
            elseif($user_detail == 2.00)
            {
            	$class_star = "stars-40";
            }
            elseif($user_detail == 2.50)
            {
            	$class_star = "stars-50";
            }
            elseif($user_detail == 3.00)
            {
            	$class_star = "stars-60";
            }
            elseif($user_detail == 3.50)
            {
            	$class_star = "stars-70";
            }
            elseif($user_detail == 4.00)
            {
            	$class_star = "stars-80";
            }
            elseif($user_detail == 4.50)
            {
            	$class_star = "stars-90";
            }
            elseif($user_detail == 5.00)
            {
            	$class_star = "stars-100";
            }
 ?>

<section>
	<div class="my_profile">
		<div class="container">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div class="my_profile_box">
						<div class="my_prfl_cont">
							<div class="view_profile">
	                            <img  class="my_pro" src="<?php  echo base_url()?>/uploads/profiles/<?php echo $user_data->picture_url?>">
	                         </div>
	                         
	                          <div class="profile_dtls">
	                                <h4><?=empty($user_data->username)?'':$user_data->username?></h4>                             
	                          </div>  
	                           <span class="stars-container <?php echo $class_star;?>">★★★★★</span>                       
						</div>
					</div>
                    <?php foreach ($reviews as $review) {
                    ?>
					<div class="Presentation">
                        <?php
                            $client_data = $obj->User->getUserByID($review['by_user_id']); 
                        ?>
                        <h4> <?php echo $client_data->username; ?><h4><hr>
                        <div class="row">
                            <h6><?=empty($user_data->username)?'':$user_data->username?></h6>&nbsp;&nbsp;
                            <?php
                                $class_name = "stars-0";
                                if($review['rating'] == 0)
                                    $class_name = "stars-0";
                                if($review['rating'] == 1)
                                    $class_name = "stars-20";
                                if($review['rating'] == 2)
                                    $class_name = "stars-40";
                                if($review['rating'] == 3)
                                    $class_name = "stars-60";
                                if($review['rating'] == 4)
                                    $class_name = "stars-80";
                                if($review['rating'] == 5)
                                    $class_name = "stars-100"; 
                            ?>
                            <span class="stars-container <?php echo $class_name;?>">★★★★★</span>                       
                        </div><br>   
                        <p style="font-size:12px;"><?=empty($review['comment'])?'':$review['comment']?></p>
					</div>
                    <?php } ?>
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
	</div>
</section>

<?php $this->load->view('Front/common/footer');  ?>