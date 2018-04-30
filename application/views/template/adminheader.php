
<script src=<?php echo base_url();?>js/jquery.min.js></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<div class="header">
	<link rel="stylesheet" href=<?php echo base_url();?>css/style.css>
		<div class="wrap">
			<div class="logo">
				<a href=<?php echo base_url(); ?>home><img src=<?php echo base_url();?>images/logonn.png alt=""/></a>
			</div>
			<div class="top-nav">
				<div class="menu">
				<span class="menu"> </span>
			   		<ul>
						<!-- <li><a href="<?php //echo base_url(); ?>home/admin">Home</a></li> -->

						<li><a href="<?php echo base_url(); ?>Upload_image">Add Services</a></li>
						<li><a href="<?php echo base_url(); ?>changePics">manage carousel</a></li>
						<li><a href="<?php echo base_url(); ?>changePics/manageGallery">manage gallery</a></li>
						<li><a href="<?php echo base_url(); ?>admin_Appoinment">appintments</a></li>
						<li class=""><a href="<?php echo base_url(); ?>home">User View</a></li>
            <li class=""><a href="<?php echo base_url(); ?>users/logout"><?php echo $this->session->userdata['user_name']; ?> Logout</a></li>

<!--  -->

<!--  -->



					</ul>
					<div class="clear"></div>
	   		  	</div>
				<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".top-nav ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav -->
	   	   </div>
			<div class="clear"></div>
	  </div>
 </div>
