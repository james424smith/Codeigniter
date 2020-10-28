<?php $this->load->view('Front/common/header');  ?>

<section>
    <div class="container">
        
        <div class="row">
            <div class="col-md-offset-3 col-md-6 login-box">
                <?php if($this->session->flashdata('error')){ ?>
                    <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
                    </div>
                    <?php } else if($this->session->flashdata('warning')){  ?>
                        <div class="alert alert-warning">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); ?>
                        </div> 
                    <?php } ?>
                   <h3>Register</h3>  
                <div class="login-form">
                    <div class="login-form">
                        <form method="post" action="<?php echo base_url('Front/Register/register')?>" id="myForm">
                            <div class="form-group">
                                <input type="email" placeholder="Email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Username" name="username" class="form-control" required> 
                            </div>
                            <div class="form-group">
                                <input type="password" pattern="[a-zA-Z0-9]{8,}" placeholder="Password" name="password" class="form-control" id="password1"
                                title="The password should include at least 8 alphanumeric character." required>
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Confirm Password" name="cpassword" id="password2" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <input type="hidden" value="client" name="role" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                            	    <label><input type="radio"  class=""> Remember me</label>
                                </div>
                                <div class="col-md-6 loginbttm">
                                    <button type="submit" class="btn" id="submit">Register</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group text-center">
                                     <label><input type="checkbox" class="" checked><a href="<?php echo base_url('Front/home/terms_condition')?>"> I accept terms </a></label> 
                                </div>
                            </div>
                        </form>
                        <hr>
                        <div class="social_btn">
                        	<a class="fb" href="#">Facebook</a>
                        	<a class="google" href="#">Google</a>
                        </div>
                        <p>You already have an account ? <a href="<?php echo base_url('Front/home/login')?>">Log in </a></p>
                    </div>
            </div>
        </div>

</section>

<?php $this->load->view('Front/common/footer');  ?>

<section>
    <script>

    </script>
</section>