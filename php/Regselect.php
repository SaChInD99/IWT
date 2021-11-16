<html>
<head>
    <script src="js/Admin.js">
    </script>
</head>
<body>
<?php

require 'Config.php';

$sql="SELECT FirstName,LastName,Email,contactNumber,DOB,Gender,Password,ConfirmPassword FROM register";
$result=$conn->query($sql);

if($result->num_rows>0){
    echo"<table border='2'><tr><th>FIRSTNAME</th><th>LASTNAME</th><th>EMAIL</th><th>CONTACTNO</th><th>DOB</th><th>GENDER</th></th>PASSWORD</th><th>CONFIRMPASSWORD</th><th>Edit</th><Delete</th></tr>";
    //output data of each row
    while($row=$result->fetch_assoc()){
        echo"<tr><td>".$row["FirstName"]."</td><td>".$row["LastName"]."</td><td>".$row["Email"]."</td><td>".$row["contactNumber"]."</td><td>".$row["DOB"]."</td><td>".$row["Gender"]."</td><td>".$row["Password"]."</td><td>".$row["ConfirmPassword"]."</td><td><input type='button' name='Edit' value='Update' id='register' onclick=\"editpage('register')\"></td><td><a href=Reg1delete.php?delete=".$row["Email"]." onclick=\"return confirm('Are you sure?)\">Delete</a></td></td></tr>";
    }
    echo"</table>";
}else{
    echo"0 results";
}

?>
</body>
</html>