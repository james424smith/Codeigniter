<style>
  .profile_class {
    position: relative;
    margin-left:0px;
}
</style>

 <!-- Navbar -->
 
<div class="main-panel">
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
            <?php
              $obj = &get_instance();
              $obj->load->model('UserModel');
              $profile_url = $obj->UserModel->PictureUrl();
              $user = $obj->UserModel->GetUserData();
            ?>
          <li class="nav-item dropdown profile_class">
            <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <img src="<?=$profile_url;?>" class="user-image profileImgUrl" alt="User Image">
              <span class="hidden-xs NameEdt"><?=empty($user['username'])?'':$user['username']?></span>
             <p class="d-lg-none d-md-block">
                Account
              </p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
               <a class="dropdown-item" href="<?= base_url() ?>profile"><i class="fa fa-user mr-2"></i>Profile</a>
               <a class="dropdown-item" href="<?= base_url() ?>UserSetting"><i class="fa fa-cog mr-2"></i>Setting</a>

              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?= base_url() ?>Login/logout"><i class="fa fa-power-off mr-2"></i>Logout</a>
            </div>
          </li>
        </ul>
      </div>   
  </nav>

  
</div>


  <!-- End Navbar -->