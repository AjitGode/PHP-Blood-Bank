<?php
if(isset($_POST['pregister'])){
	require 'connection.php';
	$pname=$_POST['pname'];
	$pemail=$_POST['pemail'];
	$ppassword=$_POST['ppassword'];
	$pphone=$_POST['pphone'];
	$pcity=$_POST['pcity'];
	$rbg=$_POST['rbg'];
	$check_email = mysqli_query($conn, "SELECT pemail FROM patient where pemail = '$remail' ");
	if(mysqli_num_rows($check_email) > 0){
    $error= 'Email Already exists. Please try another Email.';
    header( "location:register.php?error=".$error );
}else{
	$sql = "INSERT INTO patient (pname, pemail, ppassword, pphone, pcity, rbg)
	VALUES ('$pname','$pemail', '$ppassword', '$pphone', '$pcity', '$rbg')";
	if ($conn->query($sql) === TRUE) {
		$msg = "You have successfully registered. Please, login to continue.";
		header( "location:login.php?msg=".$msg);
	} else {
		$error = "Error: " . $sql . "<br>" . $conn->error;
        header( "location:register.php?error=".$error );
	}
	$conn->close();
}
}
?>