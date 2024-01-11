<?php
session_start();
    require 'connection.php';
    if(isset($_POST['dlogin'])){
    $demail=$_POST['demail'];
    $dpassword=$_POST['dpassword'];
    $sql="select * from donor where demail='$demail' and dpassword='$dpassword'";
    $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    $rows_fetched=mysqli_num_rows($result);
    
    if($rows_fetched==0){
        $error= "Wrong email or password. Please try again.";
        header( "location:login.php?error=".$error);
    }else{
        $row=mysqli_fetch_array($result);
        $_SESSION['demail']=$row['demail'];
        $_SESSION['did']=$row['id'];
        $_SESSION['dname']=$row['dname'];
       
        $msg= $_SESSION['dname'].' have logged in.';
        header( "location:donor_view.php?msg=".$msg);
    } 
  }
?>