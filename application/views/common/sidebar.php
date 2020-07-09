<html>
<head>
  <title>Admin</title>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.png');?>">
  <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/favicon.png');?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url('assets/css/material-dashboard.css?v=2.1.1');?>" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url('assets/demo/demo.css');?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" />

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet"> -->  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<!--     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script> -->
</head>
<body>
  <div class="col-md-3">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?php echo base_url('assets/img/sidebar-1.jpg');?>">
      <div class="logo">
        <a href="#" class="simple-text logo-normal">
           <img src="<?php echo base_url('assets/img/logo12.png');?>" class="img-circle profileImgUrl" alt="User Image">
        </a>
      </div>
      <?php $currentpage = $this->uri->segment(1);?>
      <div class="sidebar-wrapper">

        <ul class="nav">
        <div class="user-panel">
            <?php
                  $obj=&get_instance();
            $obj->load->model(['UserModel','OuthModel']);
            //$profile_url = $obj->UserModel->PictureUrl();
            $user=$obj->UserModel->GetUserData();
             ?>
    <!--     <div class="pull-left image">
          <img src="<?=$profile_url;?>" class="img-circle profileImgUrl" alt="User Image">
        </div>
        -->
         <div class="pull-left info">
        <!-- <p class="NameEdt"><?=$user['name'];?> </p> -->

           
        </div>
         </div>
          <li class="nav-item <?php if($currentpage=="home") { echo "active"; } ?>  ">
            <a class="nav-link" href="<?php echo base_url('home');?>">
              <i class="material-icons">dashboard</i>
              <p><?= 'Dashboard' ?></p>
            </a>
          </li>
          <!-- <li class="nav-item <?php if($currentpage=="user") { echo "active"; } ?>">
            <a class="nav-link" href="<?php echo base_url('user');?>">
              <i class="material-icons">trending_up</i>
              <p><?= $this->lang->line('Demand') ?> </p>
            </a>
          </li> -->
          <li class="nav-item <?php if($currentpage=="table") { echo "active"; } ?>">
            <a class="nav-link" href="<?php echo base_url('table');?>">
              <i class="material-icons">content_paste</i>
              <p><?= 'User List' ?></p>
            </a>
          </li>

          <li class="nav-item <?php if($currentpage=="demandsList") { echo "active"; } ?> ">
            <a class="nav-link" href="<?php echo base_url('demandsList');?>">
              <i class="material-icons">list</i>
              <p><?= ('Projects List') ?></p>
            </a>
          </li>

          <li class="nav-item <?php if($currentpage=="litigationsList") { echo "active"; } ?> ">
            <a class="nav-link" href="<?php echo base_url('litigationsList');?>">
              <i class="material-icons">list</i>
              <p><?= ('Open Litigations') ?></p>
            </a>
          </li>

<li class="nav-item <?php if($currentpage=="walletwithdrawaskList") { echo "active"; } ?> ">
            <a class="nav-link" href="<?php echo base_url('walletwithdrawaskList');?>">
              <i class="material-icons">list</i>
              <p><?= ('Wallet withdraw ask') ?></p>
            </a>
          </li>

<li class="nav-item <?php if($currentpage=="withdrawpaymentList") { echo "active"; } ?> ">
            <a class="nav-link" href="<?php echo base_url('withdrawpaymentList');?>">
              <i class="material-icons">list</i>
              <p><?= ('Withdraw payment') ?></p>
            </a>
          </li>
          <!-- <li class="nav-item <?php if($currentpage=="adduser") { echo "active"; } ?> ">
            <a class="nav-link" href="<?php echo base_url('adduser');?>">
              <i class="material-icons">person</i>
              <p><?= 'Add a new Project' ?></p>
            </a>
          </li> -->


           <li class="nav-item <?php if($currentpage=="adduser") { echo "active"; } ?> ">
            <a class="nav-link" href="<?php echo base_url('adduser');?>">
              <i class="material-icons">person</i>
              <p><?= 'Add a new User' ?></p>
            </a>
          </li>
           <!--   <li class="nav-item <?php if($currentpage=="chat") { echo "active"; } ?> ">
            <a class="nav-link" href="<?php echo base_url('chat');?>">
              <i class="material-icons">chat</i>
              <p>Chat</p>
            </a> -->
          </li>
<!--           <li class="nav-item <?php if($currentpage=="project") { echo "active"; } ?> ">
            <a class="nav-link" href="<?php echo base_url('project');?>">
              <i class="material-icons">assignment</i>
              <p><?= 'Add Category' ?></p>
            </a>
          </li>

            <li class="nav-item <?php if($currentpage=="projectList") { echo "active"; } ?> ">
            <a class="nav-link" href="<?php echo base_url('projectList');?>">
              <i class="material-icons">list</i>
              <p><?= 'Category List' ?></p>
            </a>
          </li> -->
          <?php $subpage = $this->uri->segment(2);?>

           <li class="nav-item <?php if($subpage=="HomeContent/index") { echo "active"; } ?> ">
            <a class="nav-link" href="#" data-toggle="dropdown">
               <i class="material-icons">list</i> 
                <?= ('Home Web') ?>               
            </a>
            <ul  class="dropdown-menu">
              <li>
                <a href="<?php echo base_url('HomeContent/index');?>" tabindex="-1"><p>Section1</p></a>
              </li>
              <li>
                <a href="<?php echo base_url('HomeContent/section2');?>" tabindex="-1"><p>Section2</p></a>
              </li>
              <!-- <li>
                 <a href="<?php echo base_url('HomeContent/demand');?>" tabindex="-1"><p>Deamnd Post</p></a> 
              </li> -->
             <!--  <li>
                <a href="<?php echo base_url('HomeContent/Add_demand');?>" tabindex="-1"><p>Add Deamnd Post</p></a>
              </li> -->
            </ul>
            
          </li>

         <!--  <li class="nav-item <?php if($subpage=="HomeContent/ourTeam") { echo "active"; } ?> ">
            <a class="nav-link" href="#" data-toggle="dropdown">
              <i class="material-icons"></i>           
             <p>Home page Team</p>
            </a>
            <ul class="dropdown-menu" >
              <li>
                <a href="<?php echo base_url('HomeContent/ourTeam');?>" tabindex="-1">
                  <p>Team member</p>
                </a>
              </li> 
              <li>
                <a href="<?php echo base_url('HomeContent/addNewMember');?>" tabindex="-1">
                  <p>Add new member</p>
                </a>
              </li>        
            </ul>
          </li> -->
          <li class="nav-item <?php if($subpage=="AboutContent/index") { echo "active"; } ?> ">
            <a class="nav-link" href="#" data-toggle="dropdown">
              <i class="material-icons">list</i> 
                <?= ('About Web') ?>           
            
            </a>
            <ul class="dropdown-menu" >
              <li>
                <a href="<?php echo base_url('AboutContent/index');?>" tabindex="-1"><p>About Content</p></a>
              </li> 
              <li>
                <a href="<?php echo base_url('AboutContent/about_team');?>" tabindex="-1">
                  <p>Team member</p>
                </a>
              </li> 
              <li>
                <a href="<?php echo base_url('AboutContent/addNewMember');?>" tabindex="-1">
                  <p>Add new member</p>
                </a>
              </li> 

            </ul>
          </li>

          <li class="nav-item <?php if($subpage=="ContactContent/index") { echo "active"; } ?> ">
            <a class="nav-link" href="#" data-toggle="dropdown">
             <i class="material-icons">list</i> 
                <?= ('Contact Web') ?>              
             
            </a>
             <ul class="dropdown-menu">
              <li>
                <a href="<?php echo base_url('ContactContent/index');?>" tabindex="-1"><p>Section1</p></a>
              </li> 
              <li>
                <a href="<?php echo base_url('ContactContent/contact_section2');?>" tabindex="-1"><p>Section2</p></a>
              </li>            
            </ul>
          </li>

                     





           <li class="nav-item <?php if($currentpage=="chat") { echo "active"; } ?> ">
            <a class="nav-link" href="<?php echo base_url('chat');?>">
              <i class="material-icons">chat</i>
              <p><?= ('Chat Service') ?></p>
            </a>
          </li>



          
        </ul>
      </div>
    </div>
  </div>

</body>
</html>
