<?php
require 'Config.php';

$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$contact=$_POST["contact"];
$DOB=$_POST["DOB"];
$gender=$_POST["gender"];
$pwd=$_POST["pwd"];
$cnfrmpwd=$_POST["cnfrmpwd"];

$sql = "INSERT INTO register(FirstName,LastName,Email,ContactNumber,DOB,Gender,Password,confirmPassword)VALUES('$firstname','$lastname','$email','$contact','$DOB','$gender','$pwd','$cnfrmpwd')";

    if(mysqli_query($conn,$sql)){
        echo "<script type='text/javascript'>
        alert('Successfully inserted');
        window.location='Signup1.html';
        </script>";;
    }
    else{
        echo "Error:".$sql."<br>".mysqli_error($conn);
    }

?>