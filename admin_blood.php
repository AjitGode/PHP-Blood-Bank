<?php
session_start();
include("config.php");
include("admin_function.php");
 if(!isset($_SESSION['usertype']))
 {
	 header("location:admin.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
			<?php include("admin_head.php");?>
	</head>
	<body>

<?php include("admin_topnav.php"); ?>
<div class="container"  style='margin-top:70px' >
	<div class="row">
		<div class="col-sm-3">
			<?php include("admin_side_nav.php");?>
		</div>
		<div class="col-sm-9" >
			<h3 class='text-primary'><i class="fa fa-heartbeat fa-lg"></i> Add Blood </h3><hr>    
			<div class="row">
				<div class="col-md-6">
				<?php 
				if(isset($_POST["blood_submit"]))
				{
					$sql="INSERT INTO blood (BLOOD_NAME) VALUES ('".$_POST["bloodname"]."')";
					$con->query($sql);
					
				}
				
				?>
				
					<p id='out' class='text-success'></p>
					<form role="form" action="admin_blood.php" method="post">
						<div class="form-group text-primary">
							<label for="countryname">Blood</label>
							<input id="countryname" required type="text" class="form-control" name="bloodname">
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary" name='blood_submit' value="Add Blood">
						</div>
						
					</form>
				</div>
				<div class="col-md-6">
					<?php 
						$sql="SELECT * FROM blood ORDER BY BLOOD_ID desc LIMIT 0,5 ";
						$result=$con->query($sql);
						if($result->num_rows>0)
						{
								echo "<table class='table table-striped' >";
									echo "<tr>
											<th>Sno</th>
											<th>BLOOD</th>
											<th>Delete</th>
										</tr>";
										$i=0;
										while($row=$result->fetch_assoc())
										{
											$i++;
											echo"<tr>";
												echo "<td>$i</td>";
												echo "<td>".$row["BLOOD_NAME"]."</td>";
												echo "<td><a href='admin_del_blood.php?id=".$row["BLOOD_ID"]."' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></a></td>";
											echo"</tr>";
										}
								echo "</table>";
						}
						
					?>
					
					
				</div>
			</div>
		
		
		</div>
	</div>
</div>
  
  
	 <?php include("admin_footer.php"); ?>
  
	</body>
</html>