<?php
require 'connection.php';
if(isset($_POST['dregister'])){
	$dname=$_POST['dname'];
	$demail=$_POST['demail'];
	$dpassword=$_POST['dpassword'];
	$dphone=$_POST['dphone'];
	$dcity=$_POST['dcity'];
	$check_email = mysqli_query($conn, "SELECT demail FROM donor where demail = '$demail' ");
	if(mysqli_num_rows($check_email) > 0){
    $error= 'Email Already exists. Please try another Email.';
    header( "location:register.php?error=".$error );
}else{
	$sql = "INSERT INTO donor (dname, demail, dpassword, dphone, dcity)
	VALUES ('$dname','$demail', '$dpassword', '$dphone', '$dcity')";
	if ($conn->query($sql) === TRUE) {
		$msg = 'You have successfully registered. Please, login to continue.';
		header( "location:login.php?msg=".$msg );
	} else {
		$error = "Error: " . $sql . "<br>" . $conn->error;
        header( "location:register.php?error=".$error );
	}
	$conn->close();
}
}
?>