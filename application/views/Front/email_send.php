<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<!--   //Success Flash message available here  -->  
  <?php if($error = $this->session->flashdata('msg')){ ?>
       <p style="color: green;"><strong>Success!</strong> <?php echo  $error; ?><p>
  <?php } ?>

<!--   //End Flash message available here  -->
<form action="<?php echo base_url(); ?>email_send/send" method="post"> 
    <input type="name" name="name" class="form-control" placeholder="Enter name" required><br>
    <input type="email" name="from" class="form-control" placeholder="Enter Email" required><br>
    <input type="number" name="number" class="form-control" placeholder="Enter Number" required><br>
    <textarea name="message" class="form-control" placeholder="Enter message here" required></textarea><br>
    <button type="submit" class="btn btn-primary">Send Message</button>
</form>
</body>
</html>
