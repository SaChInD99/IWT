<?php
	include_once 'config2.php';

	$id = $_GET['rn'];
	$query = "delete from history where id = '&id'";
	
	$data = mysqli_query($conn,$query);
	
	if($data){
		header ("Location:history_table.php");
	}
	
	else{
		echo "<script>alert ('Delete command failed!!!')</script>";
	}
	
	mysqli_close($conn);
?>