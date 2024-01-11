<?php
session_start();
include("config.php");
 if(!isset($_SESSION['demail']))
 {
	 header("location:login.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
			<?php include("admin_head.php");?>
	</head>
	<body>

<?php include("donor_topnav.php"); ?>
<div class="container"  style='margin-top:70px;'>
	<div class="row">
		<div class="col-sm-3">
			<?php include("donor_sidenav.php");?>
		</div>
		<div class="col-sm-9" >
			<h3 class="text-primary"><i class="fa fa-user" aria-hidden="true"></i> Profile </h3><hr>    
			

		
		</div>
	</div>
</div>
	
	</body>
</html>