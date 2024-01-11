<?php
include("config.php");
if(isset($_GET["id"]))
{
	$id=$_GET["id"];
	$sql="DELETE FROM blood WHERE BLOOD_ID=$id";
	$con->query($sql);
	echo "<script>
		alert('Blood Deleted');
		window.open('admin_blood.php','_self');
	</script>";
}
?>