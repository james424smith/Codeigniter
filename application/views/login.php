<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<style>
    .login_box {
        margin-top: 100px;
        text-align: center;
        box-shadow: 0px 0px 20px #ccc;
        padding: 0px 0px 10px 0px;
        background: #f3f3f3;
    }
    .login_box input.form-control {
        border-radius: 25px;
        background: #fff;
        border: 1px solid #ccc;
    }
    input.btn.btn-info {
        background: #1a99ba;
        border-radius: 0px;
        padding: 7px 30px;
        font-weight: bold;
        box-shadow: 0px 4px 10px #ccc;
    } 
    .login_box label {
        font-weight: normal;
        font-size: 12px;
        margin-bottom: 2px;
        margin-top: 5px;
    }
    .login_box h3 {
        margin-top: 0px;
        margin-bottom: 20px;
        background: #1a99ba;
        padding: 10px;
        color: #fff;
        font-weight: bold;
        font-size: 20px;
    }
    .login_box form {
        padding: 4px 20px 0px 20px;
    }
</style>


<div class="container">  
    <div class="col-md-4 col-md-offset-4 login_box">
        <h3>Se connecter</h3>
        <?php echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';?>
        <form method="post" action="<?php echo base_url(); ?>login/login_validation">  
            <div class="form-group">  
                <label>Enter Username</label>  
                <input type="text" name="username" class="form-control" />  
                <span class="text-danger" ><?php echo form_error('username'); ?></span>                 
            </div>  

            <div class="form-group">  
                <label>Enter Password</label>  
                <input type="password" name="password" class="form-control" />  
                <span class="text-danger"><?php echo form_error('password'); ?></span>  
            </div> 

            <div class="form-group">  
                <input type="submit" name="insert" value="Login" class="btn btn-info" />  
            </div>  

        </form>  
    </div>  
</div>