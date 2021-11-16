<?php
	include_once 'config1.php';
?>

<?php
	$un = $_POST["username"];
	$pw = $_POST["password"];
	
	$sql = "insert into log_form(Id,user_name,password)values('','$un','$pw')";
	
	if(mysqli_query($conn,$sql)){
		echo "<script>alert ('Loging confirm...!!!')</script>";
		header ("Location:../html/homepage.html");
	}
	else{
		echo "<script>alert ('Invalid logging...!!!')</script>";
	}
	
	mysqli_close($conn);
?>