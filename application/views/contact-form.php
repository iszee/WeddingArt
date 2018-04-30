<html>
<head>
<title>Wedding Art| Appointment</title>
    <link href="<?php echo base_url(); ?>css/style.css" rel='stylesheet' type='text/css' />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</head>
<body>
<div class="col span_2_of_3" style="width:50%">
				  <div class="contact-form" style="width: 900px">
                      <div class="container">
                          <div class="row">
                              <div class="col-md-6 col-offset-3">
                                  <div class="form-group">
				  	<h2>Place Appointment</h2>
                      <?php if($this->session->flashdata('app_suc')){?>
                          <div class='alert alert-success'><?php echo $this->session->flashdata('app_suc');?></div>
                          <?php ;} ?>
					    <form method="post" action="<?php echo base_url('contact/submitContact') ?>" class="form-group">
					    	<div>
						    	<span><label>Full Name</label></span>
						    	<span><input name="userName" type="text" placeholder="Full Name" class="form-control" required=""  value="<?php echo !empty($app['userName'])?$app['userName']:''; ?>"></span>
                                <?php echo form_error('userName','<span class="help-block">','</span>'); ?>
                                </div>
						    <div>
						    	<span><label>E-Mail Address</label></span>
                                <input type="text" name="userEmail" class="form-control" placeholder="Email" required="" value="<?php echo !empty($app['userEmail'])?$app['userEmail']:''; ?>">
                                <?php echo form_error('userEmail','<span class="help-block">','</span>'); ?>

						    </div>
						    <div>
						     	<span><label>Contact Number</label></span>
						    	<span><input name="userPhone" type="text" placeholder ="1234567890" class="form-control" required=" " value="<?php echo !empty($app['userPhone'])?$app['userPhone']:''; ?>"></span>
                                <?php echo form_error('userPhone','<span class="help-block">','</span>'); ?>

						    </div>
                            <div class="col-sm-11">
                                <span><label>Date for Appointment</label></span>
                                <span><input name="appDate" type="date" class="form-control" required min="<?php echo date('Y-m-d'); ?>"></span>

                            </div>
						    <div>
						    	<span><label>Special Notes</label></span>
						    	<span><textarea name="userNote" class="form-control" value="<?php echo !empty($app['userNote'])?$app['userNote']:''; ?>"> </textarea></span>

						    </div>

						   <div>
                               <input type="submit" name="appSubmit" class="btn btn-primary" value="Submit"/>
						  </div>
					    </form>
				  </div>
  				</div>
                          </div>
                      </div>
                  </div>
</div>
				</body>
</html>