<?php
session_start();
include("config.php");
include("dfunction.php");
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
<div class="container" style='margin-top:70px'>
	<div class="row">
		<div class="col-sm-3">
			<?php include("donor_sidenav.php");?>
		</div>
		<div class="col-sm-9" >
			<h3 class="text-success"><i class="fa fa-users"></i> Donor Details </h3><hr>    
		<div class="row">

		<div class='col-md-12'>
			<div class='table-responsive' id="feedback">
			
			<?php 
		        $id=$_SESSION['did'];
				$sql = "SELECT * FROM donor WHERE id='$id'";
				load_dn($sql,$con);
			?>
			
			<div>
		</div>
		
		
	</div>
		
		
		</div>
	</div>
</div>
  
  
	 <?php include("admin_footer.php"); ?>
 

	</body>
</html>