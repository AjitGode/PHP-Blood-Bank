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

<?php include("patient_topnav.php"); ?>
<div class="container" style='margin-top:70px'>
	<div class="row">
		<div class="col-sm-3">
			<?php include("patient_sidenav.php");?>
		</div>
		<div class="col-sm-9" >
			<h3 class="text-success"><i class="fa fa-users"></i> Patient Details </h3><hr>    
		<div class="row">

		<div class='col-md-14'>
			<div class='table-responsive' id="feedback">
			
			<?php  include("request_blood.php"); ?>
			
			<div>
		</div>
		
		
	</div>
		
		
		</div>
	</div>
</div>
  
  
	 <?php include("admin_footer.php"); ?>
 

	</body>
</html>