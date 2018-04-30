<!DOCTYPE html>
<html lang="en">
<head>
    <title>Wedding Art| Register</title>
    <link href="<?php echo base_url(); ?>css/style.css" rel='stylesheet' type='text/css' />
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
                        <h2>User Registration</h2>
                        <div class="contact-form" style="width: 700px">

    <?php if($this->session->flashdata('user_reg_suc')){?>
        <div class='alert alert-success'><?php echo $this->session->flashdata('user_reg_suc');?></div>
        <?php ;} ?>

    <form action="<?php echo base_url('users/registration') ?>" method="post">
        <div class="contact-form">
            <span><label>Name</label></span>
            <input type="text" class="form-control" name="name" placeholder="Name" required="" value="<?php echo !empty($user['name'])?$user['name']:''; ?>">
            <?php echo form_error('name','<span class="help-block">','</span>'); ?>
        </div>
        <div class="contact-form">
            <span><label>E-mail</label></span>
            <input type="text" class="form-control" name="email" placeholder="Email" required="" value="<?php echo !empty($user['email'])?$user['email']:''; ?>">
            <?php echo form_error('email','<span class="help-block">','</span>'); ?>
        </div>
        <div class="contact-form" style="width: 400px">
            <span><label>Contact Number</label></span>
            <input type="text" class="form-control" name="phone" placeholder="Phone" required value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
            <?php echo form_error('phone','<span class="help-block">','</span>'); ?>
        </div>
        <div class="contact-form" style="width: 400px">
            <span><label>Password</label></span>
            <input type="password" class="form-control" name="password" placeholder="Password" required="">
            <?php echo form_error('password','<span class="help-block">','</span>'); ?>
        </div>
        <div class="contact-form" style="width: 400px">
            <span><label>Re Enter Password</label></span>
            <input type="password" class="form-control" name="conf_password" placeholder="Confirm password" required="">
            <?php echo form_error('conf_password','<span class="help-block">','</span>'); ?>
        </div>
        <div class="contact-form">
            <?php
            if(!empty($user['gender']) && $user['gender'] == 'Female'){
                $fcheck = 'checked="checked"';
                $mcheck = '';
            }else{
                $mcheck = 'checked="checked"';
                $fcheck = '';
            }
            ?>
            <div class="contact-form">
                <label>
                    <input type="radio" name="gender" value="Male" <?php echo $mcheck; ?>>
                    Male
                </label>
            </div>
            <div class="contact-form">
                <label>
                    <input type="radio" name="gender" value="Female" <?php echo $fcheck; ?>>
                    Female
                </label>
            </div>
        </div>
        <div class="contact-form">
            <input type="submit" name="regisSubmit" class="btn-primary" value="Submit"/>
        </div>
    </form>
    <p class="footInfo">Already have an account? <a href="<?php echo base_url(); ?>users/login">Login here</a></p>
</div>
</body>
</html>