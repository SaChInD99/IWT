<?php
	include_once 'config2.php';
?>

<?php
	$yr = $_POST["field1"];
	$vs = $_POST["field2"];
	$ach = $_POST["field3"];
	$gl = $_POST["field4"];
	$sm = $_POST["field5"];
	$br = $_POST["field6"];
	
	$sql = "insert into history(year,vision,achievements,goals,staff,branches,id)values('$yr','$vs','$ach','$gl','$sm','$br','')";
	
	if(mysqli_query($conn,$sql)){
		echo "<script>alert ('Reacord inserted successfully!!!...')</script>";
		header ("Location:history_table.php");
	}
	
	mysqli_close($conn);
?>