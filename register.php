<!DOCTYPE html>
<?php 
require 'connection.php';
session_start();
include("config.php"); 
?>
<!DOCTYPE html>
<html>
<?php $title="Bloodbank | Register"; ?>
<?php include("head1.php");?>

<body>

   <?php include("top_nav.php"); ?>

    <div class="container con">

    <?php include ("message.php"); ?>



      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">
          
          <div class="card rounded">
            <ul class="nav nav-tabs justify-content-center bg-light" style="padding: 50px">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#hospitals">Donor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#receivers">Patient</a>
              </li>
            </ul>

    <div class="tab-content">

       <div class="tab-pane container active" id="hospitals">
       

        <form action="dn_reg.php" method="post" enctype="multipart/form-data">
          <input type="text" name="dname" placeholder="Donor Name" class="form-control mb-3" pattern="[a-zA-Z]+[ ][a-zA-Z]+" title="Please Enter the Alphabets Only" required>
          <input type="text" name="dcity" placeholder="Donor City" class="form-control mb-3" required>
          <input type="tel" name="dphone" placeholder="Donor Phone Number" class="form-control mb-3" maxlength="10" required pattern="[6-9]{1}[0-9]{9}" 
       title="Phone number with 7-9 and remaing 9 digit with 0-9">
          <input type="email" name="demail" placeholder="Donor Email" class="form-control mb-3" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
          <input type="password" name="dpassword" placeholder="Donor Password" class="form-control mb-3" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required minlength="6">
          <input type="submit" name="dregister" value="Register" class="btn btn-primary btn-block mb-3">
        </form>

       </div>


       <div class="tab-pane container fade" id="receivers">

         <form action="pn_reg.php" method="post" enctype="multipart/form-data">
          <input type="text" name="pname" placeholder="Patient Name" class="form-control mb-3" pattern="[a-zA-Z]+[ ][a-zA-Z]+" title="Please Enter the Alphabets Only" required>
          <select name="rbg" class="form-control mb-3" required>
                <option disabled="" selected="">Blood Group</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
          </select>
          <input type="text" name="pcity" placeholder="Patient City" class="form-control mb-3" required>
          <input type="tel" name="pphone" placeholder="Patient Phone Number" class="form-control mb-3" maxlength="10" required pattern="[6-9]{1}[0-9]{9}" 
       title="Phone number with 6-9 and remaing 9 digit with 0-9">
          <input type="email" name="pemail" placeholder="Patient Email" class="form-control mb-3" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
          <input type="password" name="ppassword" placeholder="Patient Password" class="form-control mb-3" required minlength="6" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">
          <input type="submit" name="pregister" value="Register" class="btn btn-primary btn-block mb-4">
        </form>

       </div>
    </div>
    <a href="login.php" class="text-center mb-4" title="Click here">Already have account?</a>
</div>
</div>
</div>
</div>
</div>
<?php include"footer.php";?>
 <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
