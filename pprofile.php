<?php 
require 'connection.php';
session_start();
include("config.php");
if(!isset($_SESSION['pid']))
 {
	 header("location:login.php");
 }
else {
    if(isset($_SESSION['pid'])){
        $id=$_SESSION['pid'];
        $sql = "SELECT * FROM patient WHERE id='$id'";
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
include("patient_topnav.php");
?>
    <div class="container" style='margin-top:70px'  >
    <?php include ("message.php"); ?>
        <div class="row">
            <div class="col-sm-3">
            <?php include("patient_sidenav.php");?>
        </div>
        <div class="col-sm-9" >
            <h3 class="text-success"><i class="fa fa-users"></i> Patient Update </h3><hr>    
            
		
		

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
                            <label class="control-label text-primary">Patient Name</label>
                            <input type="text"  name="pname" value="<?php echo $row['pname']; ?>"  required id="NAME" class="form-control input-sm">
                        </div>

                        <div class="form-group">
                            <label class="control-label text-primary">Email ID</label>
                            <input type="text"  class="form-control input-sm" name="pemail" value="<?php echo $row['pemail']; ?>"  id="EMAIL">
                        </div>

                        <div class="form-group">
                            <label class="control-label text-primary">PASSWORD</label>
                            <input type="text"  class="form-control input-sm" name="ppassword" value="<?php echo $row['ppassword']; ?>"  id="PASSWORD">
                        </div>

                        <div class="form-group">
                            <label class="control-label text-primary">PHONE</label>
                            <input type="text"  class="form-control input-sm" name="pphone" value="<?php echo $row['pphone']; ?>" id="CON1">
                        </div>

                        <div class="form-group">
                            <label class="control-label text-primary"> Blood Group</label>
                                <select name="rbg" id="BLOOD" required  class="form-control input-sm">
                            <option value=""><?php echo $row['rbg']; ?></option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                </select>
                        </div>

                         <div class="form-group">
                                <label class="control-label text-primary">City</label>
                                <input type="text" required name="pcity" value="<?php echo $row['pcity']; ?>" id="CITY" class="form-control" >
                          </div>
                        
                         <div class="form-group">
                            <button class="btn btn-primary" id="BTN" name="update"><i class="fa fa-pencil fa-fw"></i></i></i>UPDATE</button>
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