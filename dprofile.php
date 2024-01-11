<?php 
require 'connection.php';
session_start();
include("config.php");
if(!isset($_SESSION['did']))
 {
	 header("location:login.php");
 }
else {
    if(isset($_SESSION['did'])){
        $id=$_SESSION['did'];
        $sql = "SELECT * FROM donor WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
    }
}
?>

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include("admin_head.php");?>

</head>
<body>
   
   
<?php
include("donor_topnav.php");
?>
    <div class="container"  >
         <?php require 'message.php'; ?>
        <div class="row">
            <div class="col-sm-3">
            <?php include("donor_sidenav.php");?>
        </div>
            <div class="col-sm-9" >
            <h3 class="text-success"><i class="fa fa-users"></i> Donor Update </h3><hr>    
				 
          
		<div class="row centered-form">
		    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center" style="padding:5px;font-size:16px;font-weight:bold"><span class="fa fa-pencil-square "> </span> Update Profile</h3>
                    </div>
                    <div class="panel-body">
					<p id="errorBox"></p>
					<form autocomplete="off" method="post"  action="updateprofile.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label text-primary">Name</label>
                            <input type="text"  name="dname" value="<?php echo $row['dname']; ?>"  required id="NAME" class="form-control input-sm">
                        </div>

                        <div class="form-group">
                            <label class="control-label text-primary">Email ID</label>
                            <input type="text"  class="form-control input-sm" name="demail" value="<?php echo $row['demail']; ?>"  id="EMAIL">
                        </div>

                        <div class="form-group">
                            <label class="control-label text-primary">PASSWORD</label>
                            <input type="text"  class="form-control input-sm" name="dpassword" value="<?php echo $row['dpassword']; ?>"  id="PASSWORD">
                        </div>

                        <div class="form-group">
                            <label class="control-label text-primary">PHONE</label>
                            <input type="text"  class="form-control input-sm" name="dphone" value="<?php echo $row['dphone']; ?>" id="CON1">
                        </div>

                       

                         <div class="form-group">
                                <label class="control-label text-primary">City</label>
                                <input type="text" required name="dcity" value="<?php echo $row['dcity']; ?>" id="CITY" class="form-control" >
                          </div>
                        
                         <div class="form-group">
                            <button class="btn btn-primary" id="BTN" name="update"><i class="fa fa-pencil fa-fw"></i></i></i>UPDATE</button>
                          </div>
                    
                      </form>
                     </div>
                     </div>
                      </div>
                       </div>
    </body>
</html>