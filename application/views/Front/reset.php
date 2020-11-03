<?php $this->load->view('Front/common/header');  ?>


     <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6 login-box">
                   <h3>Mot de passe oublié ?</h3>  
                <div class="login-form">
                    <div class="login-form">
                <?php if($this->session->flashdata('result_forget_password')){ ?>
                   <div class="alert alert-danger"><?= $this->session->flashdata('result_forget_password')  ?></div>
                <?php  } ?>
                <?php if($this->session->flashdata('result_success_forget_password')){ ?>
                   <div class="alert alert-success"><?= $this->session->flashdata('result_success_forget_password')  ?></div>
                <?php  } ?>

                    <form class="form-signin"  action="<?= base_url() ?>Front/Login/reset" method="post">
						<div class="account-logo">
                            <a href="index-2.html"><img src="<?= base_url() ?>assets/img/logo.png" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>Enter Your Email</label>
                            <input type="text" name="email" class="form-control" autofocus>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" type="submit">Reset Password</button>
                        </div>
                        <div class="text-center register-link">
                            <a href="<?= base_url('Front/Home/login') ?>">Back to Login</a>
                        </div>
                    </form>
                </div>
			</div>
        </div>
    </div>
</div>
    

<?php $this->load->view('Front/common/footer');  ?>
<!-- forgot-password24:03-->
