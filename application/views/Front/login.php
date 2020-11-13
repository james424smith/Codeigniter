<?php $this->load->view('Front/common/header');  ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6 login-box">
                <h3>Se connecter</h3>  
                <p>
                    <?php if($this->session->flashdata('error')){ ?>
                    <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong>Erreur!</strong> <?php echo $this->session->flashdata('error'); ?>
                    </div>
                    <?php } ?>
                </p>
                <div class="login-form">
                    <div class="login-form">
                        <form method="post" action="<?php echo base_url('Front/Login/login_validation')?>">
                            <div class="form-group">
                                <input type="text" placeholder="Email" name="email" class="form-control" value="<?php echo $this->session->userdata('email') ?>" required>
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Mot de passe" name="password" class="form-control" value="<?php echo $this->session->userdata('password') ?>" required>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label><input type="checkbox" name="remember" class=""> Enregistrer</label> 
                                </div>
                                <div class="col-md-6 loginbttm">
                                    <button type="submit" class="btn" style="width:150px;">Se connecter</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group text-center">
                                    <label><input type="checkbox" class="" checked><a href="<?php echo base_url('Front/home/terms_condition')?>"> J'accepte les conditions générales d'utilisations </a></label> 
                                </div>
                            </div>
                        </form>
                        <hr>
                        <div class="social_btn">
                            <?php //if(!empty($authURL)){ ?>
                        	<a class="fb" href="<?php echo base_url('Front/Login/facebook_login')?>">Facebook</a>
                        	<a class="google" href="#">Google</a>
                        </div>
                        <p>Vous n'avez pas encore de compte ?<a href="<?php echo base_url('Front/home/signUp')?>">S'inscrire</a></p>
                        <a class="f_pass" href="<?php echo base_url('Front/Login/reset')?>">Mot de passe oublié ?</a>
                    </div>
            </div>
        </div>
    </div>
</div>

</section>

<?php $this->load->view('Front/common/footer');  ?>