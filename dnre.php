<?php
session_start();
include("config.php");

 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
			<?php include("admin_head.php");?>
	
	</head>
	<body>

<?php include("donor_topnav.php"); ?>
<div class="container" style='margin-top:70px'>
	<div class="row">
		<div class="col-sm-3">
			<?php include("donor_sidenav.php");?>
		</div>
		<div class="col-sm-9" >
			<h3 class="text-success"><i class="fa fa-users"></i> Donor Details </h3><hr>    
		<div class="row">

		<div class='col-md-14'>
			<div class='table-responsive' id="feedback">
			
			<?php  include("Donor_reg.php"); ?>
			
			<div>
		</div>
		
		
	</div>
		
		
		</div>
	</div>
</div>
  
  

 

	</body>
</html>