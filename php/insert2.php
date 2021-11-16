<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$requirementtype = $_POST['requirementtype'];
$area = $_POST['area'];
$gender = $_POST['gender'];
$dateofbirth = $_POST['dateofbirth'];
$email = $_POST['email'];
$phoneCode = $_POST['phoneCode'];
$phone = $_POST['phone'];
$requirements = $_POST['requirements'];
if (!empty($firstname) || !empty($lastname)|| !empty($address) ||!empty($requirementtype)|| !empty($gender) ||!empty($dateofbirth)|| !empty($email) || !empty($phoneCode) || !empty($phone)||!empty($requirements)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "weddingplaning";
   

   //create connection
   

   $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From videographyphotography Where email = ? Limit 1";
     $INSERT = "INSERT Into videographyphotography (firstname, lastname, address,requirementtype, area, gender, dateofbirth, email, phoneCode, phone, requirements) values(?, ?,  ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    


	//Prepare statement
    

	$stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssssisiis", $firstname,$lastname,$address,$requirementtype,$area, $gender,$dateofbirth, $email, $phoneCode, $phone, $requirements);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>