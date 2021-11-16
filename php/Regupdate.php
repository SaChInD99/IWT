<?php
//linking the configuration  file
require 'Config.php'; 

$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$gender=$_POST["gender"];
$contact=$_POST["contact"];
$email=$_POST["email"];
$DOB=$_POST["DOB"];
$pwd=$_POST["pwd"];
$cnfrmpwd=$_POST["cnfrmpwd"];

$sql="UPDATE register SET FirstName='$firstname',LastName='$lastname',Email='$email',ContactNumber='$contact',DOB='$DOB',Gender='$gender',Password='$pwd',ConfirmPassword='cnfrmpwd' WHERE Email='$Email';";

if(mysqli_query($conn,$sql)){
    echo "<script type='text/javascript'>
    alert('Successfully inserted');
    window.location='signup1.html';
    </script>";;
}
        else{
            echo "Error:".$sql."<br>".mysqli_error($conn);
        }
    mysqli_close($conn);
 ?>