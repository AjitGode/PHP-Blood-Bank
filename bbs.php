<?php	
ob_start();

 require 'connection.php';
function getfield($field){
		$query="select $field from donor where id='".$_SESSION['id']."'";
		if($query_run=@mysql_query($query))
		{
		 if($query_result=@mysql_result($query_run,0,$field)){
			return $query_result;
		}
		}
	}

	function loggedin(){
		if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
		return true;}
			else{
				return false;
			}
		}
?>