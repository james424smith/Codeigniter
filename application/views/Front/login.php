<?php $this->load->view('Front/common/header');  ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6 login-box">
                   <h3>Log in</h3>  
                   <p><?php echo $this->session->flashdata('error')?></p>
                <div class="login-form">
                    <div class="login-form">
                        <form method="post" action="<?php echo base_url('Front/Login/login_validation')?>">
                            <div class="form-group">
                                <input type="text" placeholder="Email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Password" name="password" class="form-control">
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                     <label><input type="checkbox"  class=""> Remember me</label> 
                                </div>
                                <div class="col-md-6 loginbttm">
                                    <button type="submit" class="btn">LOGIN</button>
                                </div>
                            </div>
                        </form>
                        <hr>
                        <div class="social_btn">
                            <?php //if(!empty($authURL)){ ?>
                        	<a class="fb" href="<?php echo $authURL; ?>">Facebook</a>
                        	<a class="google" href="#">Google</a>
                        </div>
                        <p>You d'ont have an account ?<a href="<?php echo base_url('Front/home/signUp')?>">Register</a></p>
                        <a class="f_pass" href="<?php echo base_url('Front/Login/reset')?>">Forgot Password</a>
                    </div>
            </div>
        </div>
    </div>
</div>

</section>

<?php $this->load->view('Front/common/footer');  ?>