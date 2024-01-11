<?php 
session_start();
require 'connection.php';
if (isset($_SESSION['pid'])) {
if(isset($_POST['update'])){
    $id=$_SESSION['pid'];
    $pname = $_POST['pname'];
    $pemail = $_POST['pemail'];
    $pphone = $_POST['pphone'];
    $bg = $_POST['rbg'];
    $pcity = $_POST['pcity'];
    $ppassword = $_POST['ppassword'];
    $update = "UPDATE patient SET pname='$pname', pemail='$pemail', ppassword='$ppassword', pphone='$pphone', 
    rbg='$bg',pcity='$pcity' WHERE id='$id'";
    if ($conn->query($update) === TRUE) {
        $msg = "Your profile is updated successfully.";
        header( "location:pprofile.php?msg=".$msg);
    } else {
        $error = "Error: " . $sql . "<br>" . $conn->error;
        header( "location:pprofile.php?error=".$error );
    }
    $conn->close();
}


}elseif (isset($_SESSION['did'])) {
    if(isset($_POST['update'])){
        $id=$_SESSION['did'];
    $dname = $_POST['dname'];
    $demail = $_POST['demail'];
    $dphone = $_POST['dphone'];
    $dcity = $_POST['dcity'];
    $dpassword = $_POST['dpassword'];
    $update = "UPDATE donor SET dname='$dname', demail='$demail', dpassword='$dpassword', dphone='$dphone', dcity='$dcity' WHERE id='$id'";
    if ($conn->query($update) === TRUE) {
        $msg= "Your profile is updated successfully.";
        header( "location:dprofile.php?msg=".$msg);
    } else {
        $error= "Error: " . $sql . "<br>" . $conn->error;
        header( "location:dprofile.php?error=".$error);
    }
    $conn->close();
}
}else{
    header("location:dprofile.php");
}
?>