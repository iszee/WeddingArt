<html>
<head>
    <title>Wedding Art| Appointments</title>
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

<div class="container">
</head>

<body>

<div class="row">
<div class="col-md-6">
	<h2>Pending</h2>
	
	<table class="table">
		 <thead>
		<tr> 
			<td><h5>ID</h5></td>
			<td><h5> Name</h5></td>
			<td><h5> Email</h5></td>
			<td><h5> Mobile</td>
			<td><h5>  </h5></td>
		</tr>
		</thead>
    	<tbody>
    		
		<?php 
		$theUrl=base_url()."admin_Appoinment/updatestatus";
		foreach ($state as $a){?>
		<?php if($a['status']==0){?>
			<tr>
				<td><?php echo $a['appoint_id'];?> </td>
				<td><?php echo $a['name'];?> </td>
				<td><?php echo $a['email'];?> </td>
				<td><?php echo $a['mobile'];?> </td>
				<td>
					<form action=<?php echo "$theUrl";?> method='post'>
						<button type='submit' name='updatestatus' value=<?php echo $a['appoint_id'];?> class='btn btn-danger'>Accept</button>
					</form>
				</td>
			</tr>
		<?php }?>
		<?php }?>
	</tbody>
	</table>
	


    
</div>

<div class="col-md-6 ">

	<h2>Accepted</h2>
	
	<table class="table">
		<thead>
		<tr> 
			<td><h5>  ID</h5></td>
			<td><h5>  Name</h5></td>
			<td><h5>  Email</h5></td>
			<td><h5>  Mobile</h5></td>
			<td><h5>  </h5></td>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($state as $a){?>
		<?php if($a['status']==1){?>
			<tr>
				<td><?php echo $a['appoint_id'];?> </td>
				<td><?php echo $a['name'];?> </td>
				<td><?php echo $a['email'];?> </td>
				<td><?php echo $a['mobile'];?> </td>
				
			</tr>
		<?php }?>
		<?php }?>
	</tbody>
	</table>
	

</div>
</div>	
</div>

</body>
</html>