<?php
session_start();
    require 'connection.php';
    if(isset($_POST['plogin'])){
    $pemail=$_POST['pemail'];
    $ppassword=$_POST['ppassword'];
    $sql="select * from patient where pemail='$pemail' and ppassword='$ppassword'";
    $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    $rows_fetched=mysqli_num_rows($result);
    if($rows_fetched==0){
        $error= "Wrong email or password. Please try again.";
        header( "location:login.php?error=".$error);
    }else{
        $row=mysqli_fetch_array($result);
        $_SESSION['pemail']=$row['pemail'];
        $_SESSION['pname']=$row['pname'];
        $_SESSION['pid']=$row['id'];
        $msg= $_SESSION['pname'].' have logged in.';
        header( "location:patient_view.php?msg=".$msg);
    } 
  }
?>