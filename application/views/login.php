<!DOCTYPE html>
<html lang="en">
<head>
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>


<div class="about-top">
    <div class="wrap">
        <div class="about-box">
            <div class="section group">
                <div class="col span_2_of_3">
                    <div class="contact-form">

    <h2>  User Login</h2>

    <?php if($this->session->flashdata('login_err')){?>
        <div class='alert alert-warning'><?php echo $this->session->flashdata('login_err');?></div>
        <?php ;} ?>
    <?php if($this->session->flashdata('user_reg_suc')){?>
        <div class='alert alert-success'><?php echo $this->session->flashdata('user_reg_suc');?></div>
        <?php ;} ?>

    <form action="<?php echo base_url('users/login') ?>"" method="post">
        <div class="container" style="width: 770px">
            <div class="row">
                <div class="col-md-6 col-offset-3">
                    <div class="form-group" style="width: 400px">
                        <input type="email" class="form-control" name="email" placeholder="Email" required="" value="">
                        <?php echo form_error('email','<span class="help-block">','</span>'); ?>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-offset-3">
                    <div class="form-group" style="width: 400px">
                        <input type="password" class="form-control" name="password" placeholder="Password" required="" value="">
                        <?php echo form_error('password','<span class="help-block">','</span>'); ?>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-offset-3">
                    <div class="form-group" >
                        <input type="submit" name="loginSubmit" class="btn btn-primary" value="Submit"/>
                    </div>

                </div>
            </div>




        </div>

    </form>
    <p class="footInfo">Don't have an account? <a href="<?php echo base_url(); ?>users/registration">Register here</a></p>
</div>
</body>
</html>