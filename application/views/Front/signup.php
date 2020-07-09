<?php $this->load->view('Front/common/header');  ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6 login-box">
                   <h3>Register</h3>  
                <div class="login-form">
                    <div class="login-form">
                        <form method="post" action="<?php echo base_url('Front/Register/register')?>">
                            <div class="form-group">
                                <input type="text" placeholder="Email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Username" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Confirm Password" name="cpassword" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="hidden" value="client" name="role" class="form-control">
                            </div>
                            <div class="row">
                            <div class="col-md-6 form-group">
                            	<label><input type="radio"  class=""> Remember me</label>
                            </div>
                            <div class="col-md-6 loginbttm">
                                    <button type="submit" class="btn">Register</button>
                            </div>
                            </div>
                        </form>
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