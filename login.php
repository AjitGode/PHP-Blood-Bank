<!DOCTYPE html>
<?php 
session_start();
include("config.php"); 
if (isset($_SESSION['did'])) {
  header("location:donor_view.php");
}elseif (isset($_SESSION['pid'])) {
  header("location:donor_view.php");
}else{
?>
<!DOCTYPE html>
<html>
<?php $title="Bloodbank | Register"; ?>
<?php include("head1.php");?>

<body>

   <?php include("top_nav.php"); ?>

    <div class="container con">
      
      <?php require 'message.php'; ?>

      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">

          <div class="card rounded">
            <ul class="nav nav-tabs justify-content-center bg-light" style="padding: 20px;">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#hospitals">Donor</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#receivers">Patient</a>
     </li>
    </ul>

    <div class="tab-content">
       <div class="tab-pane container active" id="hospitals">
        <form action="dlogin.php" method="post">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Donor Email</label>
          <input type="email" name="demail" placeholder="Donor Email" class="form-control mb-4">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Donor Password</label>
          <input type="password" name="dpassword" placeholder="Donor Password" class="form-control mb-4">
          <input type="submit" name="dlogin" value="Login" class="btn btn-primary btn-block mb-4">
        </form>
       </div>


      <div class="tab-pane container fade" id="receivers">
         <form action="plogin.php" method="post">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Patient Email</label>
          <input type="email" name="pemail" placeholder="Patient Email" class="form-control mb-4">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Patient Password</label>
          <input type="password" name="ppassword" placeholder="Patient Password" class="form-control mb-4">
          <input type="submit" name="plogin" value="Login" class="btn btn-primary btn-block mb-4">
        </form>
      </div>

    </div>
    <a href="register.php" class="text-center mb-4" title="Click here">Don't have account?</a>
    
</div>
</div>
</div>
</div>
<?php require 'footer.php' ?>
</body>
</html>
<?php } ?>