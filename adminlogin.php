<!DOCTYPE html>

<html lang="en">

<head>

	<?php include("head.php");?>

</head>

<body>

<?php include("top_nav.php"); ?>

    <!-- Navigation -->
   

    <!-- Page Content -->
    <div class="container" style="margin-top:70px;">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header text-primary"><i class='fa fa-user-md'></i> Admin Login
                  
                </h1>
              
            </div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
				<?php
				    session_start();
						error_reporting(0);
						include('config.php');
						
						if(isset($_POST['username'])&& isset($_POST['password'])){
						$username=$_POST['username'];
						$password=$_POST['password'];
	
					if(!empty($username) && !empty($password)){
							$sql="select id from admin where username='".$username."' and password='".$password."' limit 1";
							if($query=mysql_query($sql)){
								$query_run=mysql_num_rows($query);
								if($query_run==0)
								{
									echo "<script>alert('Invalid Username or Password')</script>";				
								}
							else
						{
								
								$usertype=mysql_result($query,0,'id');
								$_SESSION['usertype']=$usertype;
								echo"<script>alert('successfull')</script>";
								header("location:admin_inbox.php");
								
						}
					}
				}
					else
					{
						echo "<script>alert('please supply username and password.')</script>";
					}
				}

				?>

				<div class="row centered-form">
		    <div class="col-xs-12 col-sm-12 col-md-9 col-sm-offset-2 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center" style="padding:5px;font-size:16px;font-weight:bold"><span class="fa fa-heart "> </span> Update Profile</h3>
                    </div>
                    <div class="panel-body">
					<p id="errorBox"></p>

					<form role="form" action="adminlogin.php" method="post">
			    	  	<div class="form-group">
							 <label for="user_name" class="control-label text-primary">User Name</label>
			    		    <input class="form-control" name="username"  type="text" required id="NAME" class="form-control input-sm">
			    		</div>
			    		<div class="form-group">
							<label for="pass" class="text-primary">Password</label>
			    			<input class="form-control" id="pass" name="password" type="password" value="" required>
			    		</div>
						
						
			    		<button class="btn btn-primary pull-right" name="submit" type="submit"><i class="fa fa-sign-in"></i> Login Here</button>
			      	</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
				<div class="col-md-3"></div>
			</div>
        </div>
        <!-- /.row -->


       

        <!-- Footer -->
       <?php include"footer.php";?>
  
        </div>
      
  
</body>

</html>
